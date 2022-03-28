<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    use HasFactory;
   // use Enums;
    public $timestamps = false;
    protected $fillable = [
       'Passaport_client',
       'codi_unic',
       'localitzador',
       'NumAsiento',
       'EquipatgeMa',
       'EquipatgeCabina',
       'QuantitatEquipatge',
       'asseguranca',
       'PreuVol',
       'Checking',
   ];

   protected $enumStatuses = [
    'asseguranca' => ['Franquícia fins a 1000 Euros', 'Franquícia fins 500 Euros', 'Sense franquícia'],
    'Checking'=> ['on-line', 'mostrador', 'quiosc'],
   ];
}
