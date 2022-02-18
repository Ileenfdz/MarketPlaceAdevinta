<div id="app">
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
        <div class="container">
            <a href="{{ route('index')}}" class="d-flex align-items-center me-auto text-decoration-none">
                <span id="title" class="ms-1">FruVer<span id="shop" class="ms-1">Shop</span></span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto">
                    @guest
                         @if (Route::has('login'))
                            <ul class="nav nav-pills">
                                <li id="link" class="nav-item"><a class="nav-link" href="{{ route('login') }}">Login</a></li>
                                <li id="link" class="nav-item"><a class="nav-link" href="{{ route('register') }}">Register</a></li>
                            </ul>
                        @endif
                    @endguest
                   

                    @auth
                        @if (Route::is('index'))
                            <ul class="nav nav-pills">
                                <li id="link" class="nav-item"><a class="nav-link" href="{{ route('home') }}">Home</a></li>
                            </ul>
                        @endif
                        @if (Route::is('home'))
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endif
                    @endauth
                </ul>
            </div>
        </div>
    </nav>
    {{$slot}}
</div>