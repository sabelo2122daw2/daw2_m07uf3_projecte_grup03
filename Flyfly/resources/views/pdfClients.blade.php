@extends('disseny')

@section('content')

<?php
use App\Models\Clients;
// Seleciona solo el cliente que tenga el pasaporte que se le pasa por parametro
$clients = Clients::where('Passaport_client', $passaport)->get();
// Desempaqueta el objeto
$clients = $clients[0];
?>

<h1>Cliente</h1>
<div class="mt-5 ml-5 mr-5">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div>
  @endif
  <table class="table table-hover">
    <thead>
        <tr class="table-primary">
            <td>Passaport_client</td>
            <td>Nom_cognoms</td>
            <td>Edat</td>
            <td>Telefon</td>
            <td>Adreça</td>
            <td>Ciutat</td>
            <td>Pais</td>
            <td>Email</td>
            <td>Numero_tajeta</td>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>{{$clients->Passaport_client}}</td>
            <td>{{$clients->Nom_cognoms}}</td>
            <td>{{$clients->Edat}}</td>
            <td>{{$clients->Telefon}}</td>
            <td>{{$clients->Adreça}}</td>
            <td>{{$clients->Ciutat}}</td>
            <td>{{$clients->Pais}}</td>
            <td>{{$clients->Email}}</td>
            <td>{{$clients->Numero_tajeta}}</td>
        </tr>
    </tbody>
    </table>
</div>
