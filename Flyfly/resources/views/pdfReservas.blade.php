@extends('disseny')

@section('content')

<?php
use App\Models\Reserva;
// Seleciona solo la reserva que tenga el pasaporte que se le pasa por parametro
$reservas = Reserva::where('Passaport_client', $passaport)->get();

// Desempaqueta el objeto
$reservas = $reservas[0];

?>

<h1>Reserva</h1>
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
            <td>codi_unic</td>
            <td>localitzador</td>
            <td>NumAsiento</td>
            <td>EquipatgeMa</td>
            <td>EquipatgeCabina</td>
            <td>QuantitatEquipatge</td>
            <td>asseguranca</td>
            <td>PreuVol</td>
            <td>Checking</td>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>{{$reservas->Passaport_client}}</td>
            <td>{{$reservas->codi_unic}}</td>
            <td>{{$reservas->localitzador}}</td>
            <td>{{$reservas->NumAsiento}}</td>
            <td>{{$reservas->EquipatgeMa}}</td>
            <td>{{$reservas->EquipatgeCabina}}</td>
            <td>{{$reservas->QuantitatEquipatge}}</td>
            <td>{{$reservas->asseguranca}}</td>
            <td>{{$reservas->PreuVol}}</td>
            <td>{{$reservas->Checking}}</td>
        </tr>
    </tbody>
    </table>
</div>
