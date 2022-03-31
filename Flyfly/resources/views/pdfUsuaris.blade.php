@extends('disseny')

@section('content')

<?php
use App\Models\Usuaris;
// Seleciona solo el usuario que tenga el email que se le pasa por parametro
$usuaris = Usuaris::where('email', $email)->get();
//  Desempaqueta el objeto
$usuaris = $usuaris[0];
?>
<h1>Usuari</h1>
<div class="mt-5 ml-5 mr-5">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div>
  @endif
  <table class="table table-hover">
    <thead>
        <tr class="table-primary">
            <td>nom</td>
            <td>cognom</td>
            <td>email</td>
            <td>contrasenya</td>
            <td>tipus</td>
            <td>HoraEntrada</td>
            <td>HoraSortida</td>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>{{$usuaris->nom}}</td>
            <td>{{$usuaris->cognoms}}</td>
            <td>{{$usuaris->email}}</td>
            <td>{{$usuaris->contrasenya}}</td>
            <td>{{$usuaris->tipus}}</td>
            <td>{{$usuaris->HoraEntrada}}</td>
            <td>{{$usuaris->HoraSortida}}</td>
        </tr>
    </tbody>
    </table>
</div>