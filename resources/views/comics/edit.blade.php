@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col text-center">

                <h1>
                    Modifica il fumetto {{ $comic->title }}
                </h1>

            </div>
        </div>
        <div class="row">
            <div class="col">
                <form action="{{ route('comics.update', ['comic' => $comic->id]) }}" method="POST">
                    @csrf
                    @method('PUT')
                    
                    <div class="mb-3">
                        <label for="title" class="form-label">Titolo fumetto</label>
                        <input type="text" class="form-control" name="title" id="title" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Descrizione</label>
                        <input type="text" class="form-control" name="description" id="description">
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label">Prezzo</label>
                        <input type="text" class="form-control" name="price" id="price">
                    </div>
                    <div class="mb-3">
                        <label for="series" class="form-label">Serie</label>
                        <input type="text" class="form-control" name="series" id="series">
                    </div>
                    <div class="mb-3">
                        <label for="sale_date" class="form-label">Data di uscita</label>
                        <input type="text" class="form-control" name="sale_date" id="sale_date">
                    </div>
                    <div class="mb-3">
                        <label for="type" class="form-label">Tipologia</label>
                        <input type="text" class="form-control" name="type" id="type">
                    </div>
                    <button type="submit" class="btn btn-primary">Salva</button>
                </form>
            </div>
        </div>
    </div>

@endsection
