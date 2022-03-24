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
              <label for="Passaport_client">Passaport_client</label>
              <input type="text" class="form-control" name="Passaport_client"/>
          </div>
          <div class="form-group">
              <label for="codi_unic">codi_unic</label>
              <input type="number" class="form-control" name="codi_unic"/>
          </div>
          <div class="form-group">
              <label for="localitzador">localitzador</label>
              <input type="text" class="form-control" name="localitzador"/>
          </div>
          <div class="form-group">
              <label for="NumAsiento">NumAsiento</label>
              <input type="text" class="form-control" name="NumAsiento"/>
          </div>
           <div class="form-group">
              <label for="EquipatgeMa">EquipatgeMa</label>
              <input type="text" class="form-control" name="EquipatgeMa"/>
          </div>
          <div class="form-group">
              <label for="EquipatgeCabina">EquipatgeCabina</label>
              <input type="text" class="form-control" name="EquipatgeCabina"/>
          </div>
          <div class="form-group">
              <label for="QuantitatEquipatge">QuantitatEquipatge</label>
              <input type="number" class="form-control" name="QuantitatEquipatge"/>
          </div>
          <div class="form-group">
              <label for="asseguranca">asseguranca</label>
              <select type="number" class="form-control" name="asseguranca"/>
                <option value="Franquícia fins a 1000 Euros">Franquícia fins a 1000 Euros</option>
                <option value="Franquícia fins a 500 Euros">Franquícia fins a 500 Euros</option>
                <option value="Sense franquícia">Sense franquícia</option>
            </div>
          <div class="form-group">
              <label for="PreuVol">PreuVol</label>
              <input type="number" class="form-control" name="PreuVol"/>
          </div>
          <div class="form-group">
              <label for="Checking">Checking</label>
              <select type="text" class="form-control" name="Checking"/>
              <option value="on-line">on-line</option>
                <option value="mostrador">mostrador</option>
                <option value="quiosc">quiosc</option>
            </div>
          <button type="submit" class="btn btn-block btn-primary">Envia</button>
      </form>
  </div>
</div>
<br><a href="{{ url('usuaris') }}">Accés directe a la Llista d'usuaris</a>
@endsection