<header>
    <nav class="navbar navbar-dark bg-dark navbar-expand-lg ">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">{{ env('APP_NAME') }}</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link @if(Route::is('home')) active @endif" aria-current="page" href="{{ url('/') }}">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link @if(Route::is('trains.index')) active @endif" aria-current="page" href="{{ route('trains.index') }}">Trains</a>
              </li>
              <li class="nav-item">
                <a class="nav-link @if(Route::is('about')) active @endif" aria-current="page" href="{{ route('about') }}">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link @if(Route::is('contacts')) active @endif" aria-current="page" href="{{ route('contacts') }}">Contacts</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
</header>