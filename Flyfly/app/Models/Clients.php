<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clients extends Model
{
    use HasFactory;
    //use Enums;
    public $timestamps = false;
    protected $primaryKey = 'Passaport_client';
    public $incrementing = false;
    protected $fillable = [
        'Passaport_client',
        'Nom_cognoms',
        'Edat',
        'Telefon',
        'Adreça',
        'Ciutat',
        'Pais',
        'Email',
        'Numero_tajeta',
    ];
    
    protected $enumStatuses = [
        'Tipus_tajeta' => ['Debit', 'Credit'],
    ];
}
