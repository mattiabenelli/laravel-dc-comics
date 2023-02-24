@extends('layouts.app')
@section('content')
     <div class="form-container">
        <form action="{{ route('comics.store') }}" method="POST">
            @csrf
            
            <div class="form-element">
                <label>Titolo</label>
                <input type="text" name="titolo" placeholder="Inserisci il titolo">
            </div>

            <div class="form-element">
                <label>Descrizione</label>
                <input type="text" name="descrizione" placeholder="Inserisci la descrizione">
            </div>

            <div class="form-element">
                <label>Copertina</label>
                <input type="text" name="copertina" placeholder="Inserisci la copertina">
            </div>

            <div class="form-element">
                <label>Prezzo</label>
                <input type="text" name="prezzo" placeholder="Inserisci il prezzo">
            </div>

            <div class="form-element">
                <label>Serie</label>
                <input type="text" name="serie" placeholder="Inserisci la serie a cui appartiene">
            </div>
            
            <div class="form-element">
                <label>Data d'uscita</label>
                <input type="text" name="data" placeholder="Inserisci la data d'uscita">
            </div>

            <div class="form-element">
                <label>Tipo</label>
                <input type="text" name="tipo" placeholder="Inserisci la tipo">
            </div>

            <button type="submit">Crea nuovo fumetto</button>
        </form>
     </div>
@endsection