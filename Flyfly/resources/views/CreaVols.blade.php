@extends('disseny')

@section('content')

<h1>Aplicació d'administració de vols</h1>
<div class="card mt-5">
  <div class="card-header">
    Afegeix un nou vol
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
      <form method="post" action="{{ route('vols.store') }}">
        @csrf   
        <div class="form-group">  
              <label for="codi_unic">codi_unic</label>
              <input type="text" class="form-control" name="codi_unic"/>
          </div>
          <div class="form-group">
              <label for="codi_model">codi_model</label>
              <input type="text" class="form-control" name="codi_model"/>
          </div>
          <div class="form-group">
              <label for="ciutatOrigen">ciutatOrigen</label>
              <input type="text" class="form-control" name="ciutatOrigen"/>
          </div>
          <div class="form-group">
              <label for="ciutatDesti">ciutatDesti</label>
              <input type="text" class="form-control" name="ciutatDesti"/>
          </div>
          <!-- <div class="form-group">
              <label for="tipus">tipus</label>
              <select class="form-control" name="tipus"/>
                <option value=""></option>
          </div> 
        FALTA TIPUS
        -->
           <div class="form-group">
              <label for="TerminalOrigen">TerminalOrigen</label>
              <input type="text" class="form-control" name="TerminalOrigen"/>
          </div>
          <div class="form-group">
              <label for="terminalDesti">TerminalDesti</label>
              <input type="text" class="form-control" name="terminalDesti"/>
          </div>
          <div class="form-group">
              <label for="DataSortida">DataSortida</label>
              <input type="date" class="form-control" name="DataSortida"/>
          </div>
          <div class="form-group">
              <label for="DataArribada">DataArribada</label>
              <input type="date" class="form-control" name="DataArribada"/>
          </div>
          <div class="form-group">
              <label for="Classe">Classe</label>
              <select type="date" class="form-control" name="Classe">
              <option value="Turista">Turista</option> 
              <option value="Bussiness">Bussiness</option> 
              <option value="Primera">Primera</option> 
              </select>
          </div>
          <button type="submit" class="btn btn-block btn-primary">Envia</button>
      </form>
  </div>
</div>
<br><a href="{{ url('vols') }}">Accés directe a la Llista de vols</a>
@endsection