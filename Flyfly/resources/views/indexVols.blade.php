@extends('disseny')

@section('content')

<h1>Llista de vols</h1>
<div class="mt-5">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div>
  @endif
  <table class="table">
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
        @foreach($vols as $vol)
        <tr>
            <td>{{$vol->codi_unic}}</td>
            <td>{{$vol->codi_model}}</td>
            <td>{{$vol->ciutatOrigen}}</td>
            <td>{{$vol->ciutatDesti}}</td>
            <td>{{$vol->TerminalOrigen}}</td>
            <td>{{$vol->terminalDesti}}</td>
            <td>{{$vol->DataSortida}}</td>
            <td>{{$vol->DataArribada}}</td>
            <td>{{$vol->Classe}}</td>
            <td class="text-left">
                <a href="{{ route('vols.edit', $vol->codi_unic)}}" class="btn btn-success btn-sm">Edita</a>
                <form action="{{ route('vols.destroy', $vol->codi_unic)}}" method="post" style="display: inline-block">
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
<br><a href="{{ url('vols/create') }}">Accés directe a la vista de creació de vols</a>
@endsection