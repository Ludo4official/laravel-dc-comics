@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col text-center">

                <h1>DC COMICS</h1>

                <a href="{{ route('comics.index') }}" class="btn btn-primary">
                    Vedi tutti i fumetti
                </a>

            </div>
        </div>
    </div>

@endsection

    
