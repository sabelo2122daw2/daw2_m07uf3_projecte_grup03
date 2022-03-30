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
        <form method="post" action="{{ route('vols.update', $vols->codi_unic) }}">
            <div class="form-group">
                @csrf
                @method('PUT')
                <label for="codi_unic">codi_unic</label>
                <input type="text" class="form-control" name="codi_unic" value="{{ $vols->codi_unic }}" />
            </div>
            <div class="form-group">
                <label for="codi_model">codi_model</label>
                <input type="text" class="form-control" name="codi_model" value="{{ $vols->codi_model }}" />
            </div>
            <div class="form-group">
                <label for="ciutatOrigen">ciutatOrigen</label>
                <input type="text" class="form-control" name="ciutatOrigen" value="{{ $vols->ciutatOrigen }}" />
            </div>
            <div class="form-group">
                <label for="ciutatDesti">ciutatDesti</label>
                <input type="text" class="form-control" name="ciutatDesti" value="{{ $vols->ciutatDesti }}" />
            </div>
            <div class="form-group">
                <label for="TerminalOrigen">TerminalOrigen</label>
                <input type="text" class="form-control" name="TerminalOrigen" value="{{ $vols->TerminalOrigen }}" />
            </div>
            <div class="form-group">
                <label for="terminalDesti">terminalDesti</label>
                <input type="text" class="form-control" name="terminalDesti" value="{{ $vols->terminalDesti }}" />
            </div>
            <div class="form-group">
                <label for="DataSortida">DataSortida</label>
                <input type="date" class="form-control" name="DataSortida" value="{{ $vols->DataSortida }}"/>
            </div>
            <div class="form-group">
                <label for="DataArribada">DataArribada</label>
                <input type="date" class="form-control" name="DataArribada" value="{{ $vols->DataArribada }}"/>
            </div>
            <div class="form-group">
              <label for="Classe">Classe</label>
              <select class="form-control" name="Classe">
              <option value="Turista">Turista</option> 
              <option value="Bussiness">Bussiness</option> 
              <option value="Primera">Primera</option> 
              </select>
          </div>

            <button type="submit" class="btn btn-block btn-danger">Actualitza</button>
        </form>
    </div>
</div>
<br><a href="{{ url('vols') }}">Accés directe a la Llista d'usuaris</a>
@endsection