@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col text-center">

                <h1>Tutti i fumetti</h1>

            </div>
        </div>
        <div class="row">

            @foreach ($comics as $comic)
                <div class="col-3 text-center">
                    <div class="card h-100 mb-5" style="width: 18rem;">
                        <img src="{{ $comic->thumb }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ $comic->title }}</h5>
                            <p class="card-text">{{ $comic->series }}</p>
                            <a href="{{ route('comics.show', $comic->id) }}" class="btn btn-primary">Dettagli</a>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
        <div class="row">
            <div class="col text-center">

                <a href="{{ route('comics.create') }}" class="btn btn-success">Aggiungi un fumetto</a>
                {{-- <a href="{{ route('comics.') }}" class="btn btn-success">Elimina un fumetto</a> --}}

            </div>
        </div>
    </div>

@endsection
