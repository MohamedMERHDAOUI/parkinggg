<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation;
use App\Models\Place;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth; // Importer la classe Auth

class ReservationController extends Controller
{
    // Enregistrer une nouvelle réservation dans la base de données
    public function store(Request $request)
    {
           // Récupérer l'ID de l'utilisateur authentifié
       $userID = auth()->user()->id;

           // Supprimer les réservations antérieures à la date actuelle
       Reservation::where('Fin_Reserv', '<', now())->delete();
           
       // Récupérer un ID_Place disponible
       $availablePlace = Place::whereNotExists(function ($query) {
           $query->select(DB::raw(1))
                 ->from('reservations')
                 ->whereColumn('reservations.place_id', 'places.id')
                 ->orWhere('reservations.Fin_Reserv', '<', now());
               })->value('id');

       if (!$availablePlace) {
           // Aucune place disponible, rediriger vers la liste d'attente
       return ('error, Aucune place disponible pour effectuer la réservation.');
       }

       // Calculer la date et l'heure actuelles
       $currentDateTime = now();

       // Calculer la date et l'heure d'expiration (1 jour à partir de maintenant)
       $expirationDateTime = $currentDateTime->copy()->addDay(1);

       // Créer une nouvelle réservation avec l'ID de la place disponible
       $reservation = new Reservation();
       $reservation->Deb_Reserv = $currentDateTime;
       $reservation->Fin_Reserv = $expirationDateTime;
       $reservation->user_id = $userID;
       $reservation->place_id = $availablePlace;
       $reservation->save();

       // Rediriger avec un message de succès
       return ('Réservation ajoutée avec succès.');
    }
   
    
}