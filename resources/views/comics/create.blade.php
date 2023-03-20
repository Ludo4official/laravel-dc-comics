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
                <form action="{{ route('comics.store') }}" method="POST">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Titolo fumetto</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Serie</label>
                        <input type="text" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Prezzo</label>
                        <input type="text" class="form-control" id="exampleInputPassword1">
                    </div>
                    <button type="submit" class="btn btn-primary">Aggiungi</button>
                </form>
            </div>
        </div>
    </div>

@endsection
