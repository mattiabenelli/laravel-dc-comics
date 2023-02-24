<header>
    <div class="header-container">
      <a href="/" class="brand">
        <img src="{{Vite::asset('resources/img/dc-logo.png')}}" alt="">
      </a>
      <nav>
        <ul>
          <li class="{{ Route::currentRouteName() == 'homepage' ? 'active' : '' }}">
            <a href="{{ route('homepage') }}">HOMEPAGE</a>
          </li>
          <li class="{{ Route::currentRouteName() == 'comics.index' ? 'active' : '' }}">
            <a href="{{ route('comics.index') }}">COMICS</a>
          </li>                
        </ul>
      </nav>
    </div>
    <div class="jumbo-header"></div>
</header>