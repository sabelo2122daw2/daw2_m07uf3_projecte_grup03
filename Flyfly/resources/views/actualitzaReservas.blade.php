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
        <form method="post" action="{{ route('reservas.update', $reservas->Passaport_client) }}">
        <div class="form-group">  
            @csrf
            @method('PUT')
            <label for="Passaport_client">Passaport_client</label>
            <input type="text" class="form-control" name="Passaport_client" value="{{$reservas->Passaport_client}}" />
        </div>
        <div class="form-group">  
              <label for="codi_unic">codi_unic</label>
              <input type="text" class="form-control" name="codi_unic" value="{{$reservas->codi_unic}}"/>
          </div>
          <div class="form-group">
              <label for="localitzador">localitzador</label>
              <input type="number" class="form-control" name="localitzador" value="{{$reservas->localitzador}}"/>
          </div>
          <div class="form-group">
              <label for="NumAsiento">NumAsiento</label>
              <input type="text" class="form-control" name="NumAsiento" value="{{$reservas->NumAsiento}}"/>
          </div>
          <div class="form-group">
              <label for="EquipatgeMa">EquipatgeMa</label>
              <input type="text" class="form-control" name="EquipatgeMa" value="{{$reservas->EquipatgeMa}}"/>
          </div>
           <div class="form-group">
              <label for="EquipatgeCabina">EquipatgeCabina</label>
              <input type="text" class="form-control" name="EquipatgeCabina" value="{{$reservas->EquipatgeCabina}}"/>
          </div>
          <div class="form-group">
              <label for="QuantitatEquipatge">QuantitatEquipatge</label>
              <input type="text" class="form-control" name="QuantitatEquipatge" value="{{$reservas->QuantitatEquipatge}}"/>
          </div>
          <div class="form-group">
              <label for="asseguranca">asseguranca</label>
              <select type="text" class="form-control" name="asseguranca">
                <option value="Franquícia fins a 1000 Euros">Franquícia fins a 1000 Euros</option>
                <option value="Franquíca fins 500 Euros">Franquícia fins a 500 Euros</option>
                <option value="Sense franquícia">Sense franquícia</option>
              </select>
          </div>
          <div class="form-group">
              <label for="PreuVol">PreuVol</label>
              <input type="number" class="form-control" name="PreuVol" value="{{$reservas->PreuVol}}"/>
          </div>
          <div class="form-group">
              <label for="Checking">Checking</label>
              <select class="form-control" name="Checking">
                <option value="on-line">on-line</option>
                <option value="mostrador">mostrador</option>
                <option value="quiosc">quiosc</option>
              </select>
          </div>
            <button type="submit" class="btn btn-block btn-danger">Actualitza</button>
        </form>
    </div>
</div>
<br><a href="{{ url('usuaris') }}">Accés directe a la Llista d'usuaris</a>
@endsection