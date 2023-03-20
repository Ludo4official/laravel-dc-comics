@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col text-center">

                <h1>Fumetto selezionato</h1>

            </div>
        </div>
        <div class="row">

            <div class="col text-center">
                <div class="card w-100 h-100 mb-5" style="width: 18rem;">
                    <img src="{{ $comic->thumb }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{ $comic->title }}</h5>
                        <p class="card-text">{{ $comic->series }}</p>
                        <p class="card-text">{{ $comic->description }}</p>
                        <p class="card-text">{{ $comic->sale_date }}</p>
                        <a href="#" class="btn btn-primary">{{ $comic->price }}$</a>
                    </div>
                </div>
            </div>

        </div>
        <div class="row">
            <div class="col text-center">
                <a href="{{ route('comics.edit', $comic->id) }}" class="btn btn-warning">Modifica</a>
            </div>
        </div>
        <div class="row">
            <div class="col text-center">
                <form 
                    action="{{ route('comics.destroy', $comic->id) }}" 
                    method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">
                        Elimina
                    </button>
                </form>
            </div>
        </div>
    </div>

@endsection
