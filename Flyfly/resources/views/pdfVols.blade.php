@extends('disseny')

@section('content')

<?php
use App\Models\Vols;
// Seleciona solo el vuelo que tenga el codigo unico que se le pasa por parametro
$vols = Vols::where('codi_unic', $codi)->get();

// Desempaqueta el objeto
$vols = $vols[0];

?>

<h1>Vol</h1>
<div class="mt-5 ml-5 mr-5">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div>
  @endif
  <table class="table table-hover">
    <thead>
        <tr class="table-primary">
            <td>codi_unic</td>
            <td>codi_model</td>
            <td>ciutatOrigen</td>
            <td>ciutatDesti</td>
            <td>TerminalOrigen</td>
            <td>terminalDesti</td>
            <td>DataSortida</td>
            <td>DataArribada</td>
            <td>Classe</td>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>{{$vols->codi_unic}}</td>
            <td>{{$vols->codi_model}}</td>
            <td>{{$vols->ciutatOrigen}}</td>
            <td>{{$vols->ciutatDesti}}</td>
            <td>{{$vols->TerminalOrigen}}</td>
            <td>{{$vols->terminalDesti}}</td>
            <td>{{$vols->DataSortida}}</td>
            <td>{{$vols->DataArribada}}</td>
            <td>{{$vols->Classe}}</td>
        </tr>
    </tbody>
    </table>
</div>