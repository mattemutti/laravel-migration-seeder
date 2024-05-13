<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link {{ Route::currentRouteName() === 'layouts.welcome' ? 'active' : '' }}"
                        aria-current="page" href="{{ route('layouts.welcome') }}">Trains Today</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Route::currentRouteName() === 'guests.trains.index' ? 'active' : '' }}"
                        href="{{ route('guests.trains.index') }}">All Trains</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link {{ Route::currentRouteName() === '' ? 'active' : '' }}"
                        href="#">Contacts</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
