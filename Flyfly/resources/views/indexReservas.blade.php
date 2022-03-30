@extends('disseny')

@section('content')

<h1>Llista de reservas</h1>
<div class="mt-5">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div>
  @endif
  <table class="table">
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
        @foreach($reservas as $rese)
        <tr>
            <td>{{$rese->Passaport_client}}</td>
            <td>{{$rese->codi_unic}}</td>
            <td>{{$rese->localitzador}}</td>
            <td>{{$rese->NumAsiento}}</td>
            <td>{{$rese->EquipatgeMa}}</td>
            <td>{{$rese->EquipatgeCabina}}</td>
            <td>{{$rese->QuantitatEquipatge}}</td>
            <td>{{$rese->asseguranca}}</td>
            <td>{{$rese->PreuVol}}</td>
            <td>{{$rese->Checking}}</td>
            <td class="text-left">
                <a href="{{ route('reservas.edit', $rese->Passaport_client)}}" class="btn btn-success btn-sm">Edita</a>
                <form action="{{ route('reservas.destroy', $rese->Passaport_client)}}" method="post" style="display: inline-block">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm" type="submit">Esborra</button>
                  </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
<br><a href="{{ url('reservas/create') }}">Accés directe a la vista de creació de reservas</a><br>
<a href="{{ url('/') }}">Accés directe al menu principal</a>
@endsection