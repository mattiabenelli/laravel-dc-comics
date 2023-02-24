@extends('layouts.app')

@section('content')
    <div class="homepage-container">
        <div class="row-homepage">
            <a href="{{ route('comics.index') }}">
                <button class="button-homepage">Vai alla pagina prodotti</button>
            </a>
            <a href="{{ route('comics.create') }}">
                <button class="button-homepage">Aggiungi un nuovo fumetto</button>
            </a>
        </div>
    </div>
@endsection