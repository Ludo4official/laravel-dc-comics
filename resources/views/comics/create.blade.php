@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col text-center">

                <h1>
                    Aggiungi un prodotto
                </h1>

            </div>
        </div>
        <div class="row">
            <div class="col">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="{{ route('comics.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="title" class="form-label">Titolo fumetto</label>
                        <input type="text" class="form-control" name="title" id="title" aria-describedby="emailHelp" required>
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Descrizione</label>
                        <input type="text" class="form-control" name="description" id="description">
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label">Prezzo</label>
                        <input type="text" class="form-control" name="price" id="price" required>
                    </div>
                    <div class="mb-3">
                        <label for="series" class="form-label">Serie</label>
                        <input type="text" class="form-control" name="series" id="series" required>
                    </div>
                    <div class="mb-3">
                        <label for="sale_date" class="form-label">Data di uscita</label>
                        <input type="text" class="form-control" name="sale_date" id="sale_date" required>
                    </div>
                    <div class="mb-3">
                        <label for="type" class="form-label">Tipologia</label>
                        <input type="text" class="form-control" name="type" id="type" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Aggiungi</button>
                </form>
            </div>
        </div>
    </div>

@endsection
