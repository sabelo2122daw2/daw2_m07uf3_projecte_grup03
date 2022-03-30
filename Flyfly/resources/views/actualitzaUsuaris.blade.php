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
        <form method="post" action="{{ route('usuaris.update', $usuaris->email) }}">
            <div class="form-group">
                @csrf
                @method('PUT')
                <label for="nom">Nom</label>
                <input type="text" class="form-control" name="nom" value="{{ $usuaris->nom }}" />
            </div>
            <div class="form-group">
                <label for="cognoms">cognoms</label>
                <input type="text" class="form-control" name="cognoms" value="{{ $usuaris->cognoms }}" />
            </div>
            <div class="form-group">
                <label for="email">email</label>
                <input type="email" class="form-control" name="email" value="{{ $usuaris->email }}" />
            </div>
            <div class="form-group">
                <label for="contrasenya">contrasenya</label>
                <input type="password" class="form-control" name="contrasenya" value="{{ $usuaris->contrasenya }}" />
            </div>
            <div class="form-group">
                <label for="tipus">tipus</label>
                <input type="text" class="form-control" name="tipus" value="{{ $usuaris->tipus }}" />
            </div>
            <div class="form-group">
                <label for="HoraEntrada">Hora Entrada</label>
                <input type="time" class="form-control" name="HoraEntrada" value="{{ $usuaris->HoraEntrada }}" />
            </div>
            <div class="form-group">
                <label for="HoraSortida">Hora Sortida</label>
                <input type="time" class="form-control" name="HoraSortida" value="{{ $usuaris->HoraSortida }}"/>
            </div>

            <button type="submit" class="btn btn-block btn-danger">Actualitza</button>
        </form>
    </div>
</div>
<br><a href="{{ url('usuaris') }}">Accés directe a la Llista d'usuaris</a>
@endsection