<header>
        <nav class="nav__bar">
            <div class="con__tent">
                <div class="logo">
                    <a href="{{ route('home') }}"><img src="img/LogoPNG.png" alt="CEF Medical" width="220px"></a>

                </div>

                <ul class="menu__list">
                    <div class="icon cancel-btn">
                        <i class="uil uil-multiply"></i>
                    </div>
                    <li><a href="{{ route('preCredito') }}">Créditos</a></li>
                    <li><a href="{{ route('redPrestadores') }}">Prestadores</a></li>
                    <li><a href="{{ route('aboutus') }}">Nosotros</a></li>
                    <li><a href="{{ route('pacientes') }}">Pacientes</a></li>
                    @if(isset(Auth::user()->name))
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <li><button href="">{{ Auth::user()->name }}</button></li>
                        </form>
                    @else
                        <li><a class="nav-link" href="#" data-toggle="modal" data-target="#signupModal">Suscribite</a></li>
                    @endif

                </ul>

                <div class="btn-group" role="group" aria-label="Basic outlined example" id="botones">
                </div>
                <div class="icon menu-btn">
                    <i class="uil uil-bars"></i>
                </div>
            </div>
        </nav>
    </header>