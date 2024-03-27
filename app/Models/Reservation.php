<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    // Nom de la table dans la base de données
    protected $table = 'reservations';
    public $timestamps = false; // Désactiver les horodatages
    // Colonnes pouvant être mass assignable
    protected $fillable = [
        'Deb_Reserv',
        'Fin_Reserv',
        'user_id',
        'place_id',
    ];

    // Ajoutez vos relations ici, par exemple :
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function place()
    {
        return $this->belongsTo(Place::class, 'place_id');
    }
}
