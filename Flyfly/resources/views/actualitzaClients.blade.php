@extends('disseny')

@section('content')


<div class="card mt-5">
    <div class="card-header">
        Actualització de dades
    </div>

    <div class="card-body">
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <form method="post" action="{{ route('clients.update', $client->Passaport_client) }}">
        <div class="form-group">  
            @csrf
            @method('PUT')
            <label for="Passaport_client">Passaport_client</label>
            <input type="text" class="form-control" name="Passaport_client" value="{{$client->Passaport_client}}" />
        </div>
        <div class="form-group">  
              <label for="Nom_cognoms">Nom_cognoms</label>
              <input type="text" class="form-control" name="Nom_cognoms" value="{{$client->Nom_cognoms}}"/>
          </div>
          <div class="form-group">
              <label for="Edat">Edat</label>
              <input type="number" class="form-control" name="Edat" value="{{$client->Edat}}"/>
          </div>
          <div class="form-group">
              <label for="Telefon">Telefon</label>
              <input type="number" class="form-control" name="Telefon" value="{{$client->Telefon}}"/>
          </div>
          <div class="form-group">
              <label for="Adreça">Adreça</label>
              <input type="text" class="form-control" name="Adreça" value="{{$client->Adreça}}"/>
          </div>
           <div class="form-group">
              <label for="Ciutat">Ciutat</label>
              <input type="text" class="form-control" name="Ciutat" value="{{$client->Ciutat}}"/>
          </div>
          <div class="form-group">
              <label for="Pais">Pais</label>
              <input type="text" class="form-control" name="Pais" value="{{$client->Pais}}"/>
          </div>
          <div class="form-group">
              <label for="Email">Email</label>
              <input type="email" class="form-control" name="Email" value="{{$client->Email}}"/>
          </div>
          <div class="form-group">
              <label for="Tipus_tajeta">Tipus_tajeta</label>
              <select class="form-control" name="Tipus_tajeta">
                <option value="debit">Debit</option>
                <option value="credit">Credit</option>
              </select> 
            </div>
          <div class="form-group">
              <label for="Numero_tajeta">Numero_tajeta</label>
              <input type="number" class="form-control" name="Numero_tajeta" value="{{$client->Numero_tajeta}}"/>
          </div>


            <button type="submit" class="btn btn-block btn-danger">Actualitza</button>
        </form>
    </div>
</div>
<br><a href="{{ url('usuaris') }}">Accés directe a la Llista d'usuaris</a>
@endsection