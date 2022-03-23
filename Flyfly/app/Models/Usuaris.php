<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuaris extends Model
{
    public $timestamps = false;

    use HasFactory;
    protected $fillable = [
       'nom',
       'cognoms',
       'email',
       'contrasenya',
       'tipus',
       'HoraEntrada',
       'HoraSortida'
   ];
}
