@extends('layouts.app')
@section('content')
     <div class="form-container">
        <form action="{{ route('comics.store') }}" method="POST">
            @csrf
            
            <div class="form-element">
                <label>Titolo</label>
                <input type="text" name="title" placeholder="Inserisci il titolo">
            </div>

            <div class="form-element">
                <label>Descrizione</label>
                <input type="text" name="description" placeholder="Inserisci la descrizione">
            </div>

            <div class="form-element">
                <label>Copertina</label>
                <input type="text" name="thumb" placeholder="Inserisci la copertina">
            </div>

            <div class="form-element">
                <label>Prezzo</label>
                <input type="text" name="price" placeholder="Inserisci il prezzo">
            </div>

            <div class="form-element">
                <label>Serie</label>
                <input type="text" name="series" placeholder="Inserisci la serie a cui appartiene">
            </div>
            
            <div class="form-element">
                <label>Data d'uscita</label>
                <input type="text" name="sale_date" placeholder="Inserisci la data d'uscita">
            </div>

            <div class="form-element">
                <label>Tipo</label>
                <input type="text" name="type" placeholder="Inserisci la tipo">
            </div>

            <button type="submit">Crea nuovo fumetto</button>
        </form>
     </div>
@endsection