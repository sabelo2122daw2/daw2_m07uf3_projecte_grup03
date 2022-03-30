@extends('disseny')

@section('content')

<h1>Llista d'usuaris</h1>
<div class="mt-5">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div>
  @endif
  <table class="table">
    <thead>
        <tr class="table-primary">
          <td>nom</td>
          <td>cognoms</td>
          <td>email</td>
          <td>contrasenya</td>
          <td>tipus</td>
          <td>HoraEntrada</td>
          <td>HoraSortida</td>
        </tr>
    </thead>
    <tbody>
        @foreach($usuaris as $usu)
        <tr>
            <td>{{$usu->nom}}</td>
            <td>{{$usu->cognoms}}</td>
            <td>{{$usu->email}}</td>
            <td>{{$usu->contrasenya}}</td>
            <td>{{$usu->tipus}}</td>
            <td>{{$usu->HoraEntrada}}</td>
            <td>{{$usu->HoraSortida}}</td>
            <td class="text-left">
                <a href="{{ route('usuaris.edit', $usu->email)}}" class="btn btn-success btn-sm">Edita</a>
                <form action="{{ route('usuaris.destroy', $usu->email)}}" method="post" style="display: inline-block">
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
<br><a href="{{ url('usuaris/create') }}">Accés directe a la vista de creació d'usuaris</a><br>
<a href="{{ url('/') }}">Accés directe al menu principal</a>
@endsection