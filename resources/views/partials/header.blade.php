<header>
    <div class="top_header">
        <div class="container">
            DC POWER VISA©
        </div>
    </div>
    <div class="container d-flex justify-content-evenly align-items-center">
        <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="" class="logo_dc py-3">
        <nav class="nav justify-content-center align-items-center px-3">
            <a class="nav-link {{ Route::currentRouteName() === 'characters' ? 'active_nav' : '' }} "
                href="{{ route('characters') }}">CHARACTERS</a>
            <a class="nav-link {{ Route::currentRouteName() === 'comics' ? 'active_nav' : '' }}"
                href="{{ route('comics') }}">COMICS</a>
            <a class="nav-link {{ Route::currentRouteName() === 'movies' ? 'active_nav' : '' }}"
                href="{{ route('movies') }}">MOVIES</a>
            <a class="nav-link {{ Route::currentRouteName() === 'tv' ? 'active_nav' : '' }}"
                href="{{ route('tv') }}">TV</a>
            <a class="nav-link {{ Route::currentRouteName() === 'games' ? 'active_nav' : '' }}"
                href="{{ route('games') }}">GAMES</a>
            <a class="nav-link {{ Route::currentRouteName() === 'collectibles' ? 'active_nav' : '' }}"
                href="{{ route('collectibles') }}">COLLECTIBLES</a>
            <a class="nav-link {{ Route::currentRouteName() === 'videos' ? 'active_nav' : '' }}"
                href="{{ route('videos') }}">VIDEOS</a>
            <a class="nav-link {{ Route::currentRouteName() === 'fans' ? 'active_nav' : '' }}"
                href="{{ route('fans') }}">FANS</a>
            <a class="nav-link {{ Route::currentRouteName() === 'news' ? 'active_nav' : '' }}"
                href="{{ route('news') }}">NEWS</a>
            <a class="nav-link {{ Route::currentRouteName() === 'shop' ? 'active_nav' : '' }}"
                href="{{ route('shop') }}">SHOP</a>
        </nav>
        <div class="searchbar ps-3">
            <form class="d-flex search-input" role="search">
                <div class="input-group">
                    <input type="search" class="text-end border-0" placeholder="Search">
                    <span class="border-0">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </span>
                </div>
            </form>
        </div>
    </div>
    <div class="hero">
        <img src="{{ Vite::asset('resources/img/jumbotron.jpg') }}" alt="" class="hero">
    </div>

</header>
