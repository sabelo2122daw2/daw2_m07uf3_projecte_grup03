<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vols extends Model
{
   public $timestamps = false;

    use HasFactory;
   // use Enums;
    protected $fillable = [
      'codi_unic',
      'codi_model',
      'ciutatOrigen',
      'ciutatDesti',
      'TerminalOrigen',
      'terminalDesti',
      'DataSortida',
      'DataArribada',
      'Classe'
   ];
   protected $enumStatuses = [
      'Classe' => ['Turista', 'Bussiness', 'Primera'],
   ];
}
