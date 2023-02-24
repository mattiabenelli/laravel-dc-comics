@extends('layouts.app')
@section('content')
    <h1>Modifica il fumetto</h1>
     <div class="form-container">
        <form action="{{ route('comics.update', $comic->id) }}" method="POST">
            @csrf
            @method('PUT')            
            <div class="form-element">
                <label>Titolo</label>
                <input value="{{ old('title') ?? $comic->title }}" type="text" name="title" placeholder="Inserisci il titolo">
            </div>

            <div class="form-element">
                <label>Descrizione</label>
                <textarea rows="10" name="description" placeholder="Inserisci la descrizione">{{ old('description') ?? $comic->description }}</textarea>
            </div>

            <div class="form-element">
                <label>Copertina</label>
                <input value="{{ old('thumb') ?? $comic->thumb }}" type="text" name="thumb" placeholder="Inserisci la copertina">
            </div>

            <div class="form-element">
                <label>Prezzo</label>
                <input value="{{ old('price') ?? $comic->price }}" type="text" name="price" placeholder="Inserisci il prezzo">
            </div>

            <div class="form-element">
                <label>Serie</label>
                <input value="{{ old('series') ?? $comic->series }}" type="text" name="series" placeholder="Inserisci la serie a cui appartiene">
            </div>
            
            <div class="form-element">
                <label>Data d'uscita</label>
                <input value="{{ old('sale_date') ?? $comic->sale_date }}" type="text" name="sale_date" placeholder="Inserisci la data d'uscita">
            </div>

            <div class="form-element">
                <label>Tipo</label>
                <input value="{{ old('type') ?? $comic->type }}" type="text" name="type" placeholder="Inserisci la tipo">
            </div>

            <button type="submit">Modifica il fumetto</button>
        </form>
     </div>
@endsection