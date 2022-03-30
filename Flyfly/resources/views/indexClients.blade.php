@extends('disseny')

@section('content')

<h1>Llista de clients</h1>
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
          <td>Nom_cognoms</td>
          <td>Edat</td>
          <td>Telefon</td>
          <td>Adreça</td>
          <td>Ciutat</td>
          <td>Pais</td>
          <td>Email</td>
          <td>Tipus_tajeta</td>
          <td>Numero_tajeta</td>
        </tr>
    </thead>
    <tbody>
        @foreach($clients as $cli)
        <tr>
            <td>{{$cli->Passaport_client}}</td>
            <td>{{$cli->Nom_cognoms}}</td>
            <td>{{$cli->Edat}}</td>
            <td>{{$cli->Telefon}}</td>
            <td>{{$cli->Adreça}}</td>
            <td>{{$cli->Ciutat}}</td>
            <td>{{$cli->Pais}}</td>
            <td>{{$cli->Email}}</td>
            <td>{{$cli->Tipus_tajeta}}</td>
            <td>{{$cli->Numero_tajeta}}</td>
            <td class="text-left">
                <a href="{{ route('clients.edit', $cli->Passaport_client)}}" class="btn btn-success btn-sm">Edita</a>
                <form action="{{ route('clients.destroy', $cli->Passaport_client)}}" method="post" style="display: inline-block">
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
<br><a href="{{ url('clients/create') }}">Accés directe a la vista de creació de clients</a><br>
<a href="{{ url('/') }}">Accés directe al menu principal</a>
@endsection