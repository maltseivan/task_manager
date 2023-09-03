<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid container">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                @if(Auth::check())
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="{{ route('profile') }}">Профиль</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="{{ route('home') }}">Задачи</a>
                    </li>
                @endif
            </ul>
            @if(Auth::check())
                <a href="{{ route('logout') }}" class="btn btn-dark m-1">Выйти</a>
            @endif
            @if(!Auth::check())
                <a href="{{ route('login-user') }}" class="btn btn-success m-1">Войти</a>
                <a href="{{ route('register-user') }}" class="btn btn-link m-1">Зарегестрироваться</a>
            @endif
        </div>
    </div>
</nav>

