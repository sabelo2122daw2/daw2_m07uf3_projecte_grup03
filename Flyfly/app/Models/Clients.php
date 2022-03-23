<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clients extends Model
{
    use HasFactory;
    use Enums;
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
