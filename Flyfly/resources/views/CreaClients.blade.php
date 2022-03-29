@extends('disseny')

@section('content')

<h1>Aplicació d'administració de clients </h1>
<div class="card mt-5">
  <div class="card-header">
    Afegeix un nou Client
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
      <form method="post" action="{{ route('clients.store') }}">
        @csrf   
        <div class="form-group">  
              <label for="Passaport_client">Passaport_client</label>
              <input type="text" class="form-control" name="Passaport_client"/>
          </div>
        <div class="form-group">  
              <label for="Nom_cognoms">Nom_cognoms</label>
              <input type="text" class="form-control" name="Nom_cognoms"/>
          </div>
          <div class="form-group">
              <label for="Edat">Edat</label>
              <input type="number" class="form-control" name="Edat"/>
          </div>
          <div class="form-group">
              <label for="Telefon">Telefon</label>
              <input type="number" class="form-control" name="Telefon"/>
          </div>
          <div class="form-group">
              <label for="Adreça">Adreça</label>
              <input type="text" class="form-control" name="Adreça"/>
          </div>
           <div class="form-group">
              <label for="Ciutat">Ciutat</label>
              <input type="text" class="form-control" name="Ciutat"/>
          </div>
          <div class="form-group">
              <label for="Pais">Pais</label>
              <input type="text" class="form-control" name="Pais"/>
          </div>
          <div class="form-group">
              <label for="Email">Email</label>
              <input type="email" class="form-control" name="Email"/>
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
              <input type="number" class="form-control" name="Numero_tajeta"/>
          </div>

          <button type="submit" class="btn btn-block btn-primary">Envia</button>
      </form>
  </div>
</div>
<br><a href="{{ url('clients') }}">Accés directe a la Llista de clients</a>
@endsection