@extends('disseny')

@section('content')

<h1>Aplicació d'administració d'usuaris</h1>
<div class="card mt-5">
  <div class="card-header">
    Afegeix un nou Usuari
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
      <form method="post" action="{{ route('usuaris.store') }}">
        @csrf   
        <div class="form-group">  
              <label for="nom">Nom</label>
              <input type="text" class="form-control" name="nom"/>
          </div>
          <div class="form-group">
              <label for="cognoms">cognoms</label>
              <input type="text" class="form-control" name="cognoms"/>
          </div>
          <div class="form-group">
              <label for="email">Email</label>
              <input type="email" class="form-control" name="email"/>
          </div>
          <div class="form-group">
              <label for="contrasenya">contrasenya</label>
              <input type="password" class="form-control" name="contrasenya"/>
          </div>
          <!-- <div class="form-group">
              <label for="tipus">tipus</label>
              <select class="form-control" name="tipus"/>
                <option value=""></option>
          </div> 
        FALTA TIPUS
        -->
           <div class="form-group">
              <label for="tipus">tipus</label>
              <input type="text" class="form-control" name="tipus"/>
          </div>
          <div class="form-group">
              <label for="HoraEntrada">HoraEntrada</label>
              <input type="time" class="form-control" name="HoraEntrada"/>
          </div>
          <div class="form-group">
              <label for="HoraSortida">HoraSortida</label>
              <input type="time" class="form-control" name="HoraSortida"/>
          </div>

          <button type="submit" class="btn btn-block btn-primary">Envia</button>
      </form>
  </div>
</div>
<br><a href="{{ url('usuaris') }}">Accés directe a la Llista d'usuaris</a>
@endsection