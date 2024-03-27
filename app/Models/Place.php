<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Place extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
    ];


 // La clé primaire si elle n'est pas 'id'
 protected $primaryKey = 'id';
 
 // Définition de la relation avec la table reservations
 public function reservations()
 {
     return $this->hasMany(Reservation::class, 'place_id');
 }
}