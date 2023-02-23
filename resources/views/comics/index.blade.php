@extends('layouts.app')

@section('content')
    <div class="main-container">
        <div class="row">
        @foreach ($comics as $comic)
            <div class="card">
                <div class="card-image">
                    <a href="{{ route('comics.show', ['comic' => $comic['id']] ) }}">
                        <img src="{{$comic['thumb']}}" alt="">
                    </a>
                </div>
                <a href="" class="card-name">{{$comic['title']}}</a>
            </div>
        @endforeach
        </div>
        <a href="{{ route('comics.create') }}">
            <button class="new-comics">Aggiungi nuovo Fumetto</div>
        </a>
    </div>
    <div class="blue-section">
        <div class="blue-container">
          @foreach ($itemBlueSection as $item)
            <div class="blue-section-links">
                <img src="{{ asset(Vite::asset($item['img'])) }}" alt="">
                <div class="blue-section-links-text">{{$item['description']}}</div>
            </div>
          @endforeach
        </div>
    </div>
@endsection