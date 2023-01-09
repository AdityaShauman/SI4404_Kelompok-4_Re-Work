@auth
    <nav class="navbar navbar-light navbar-expand-md sticky-top navbar-shrink py-3"
        style="background-color: rgba(255, 255, 255)" id="mainNav">
        <div class="container"><a class="navbar-brand d-flex align-items-center" href="/"></a><button
                data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"><span class="visually-hidden">Toggle
                    navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1"><img src="../assets/img/LOGO.png" width="86"
                    height="35">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item"><a class="nav-link " href="/">Home</a></li>
                    <li class="nav-item"><a class="nav-link " href="{{ route('home.materi') }}">Materi</a></li>
                    <li class="nav-item"><a class="nav-link " href="{{ route('home.pelatihan') }}">Pelatihan</a></li>
                    <li class="nav-item"><a class="nav-link " href="{{ route('home.loker') }}">Info Loker</a></li>
                    <li class="nav-item"><a class="nav-link " href="{{ route('contact') }}">Contacts</a></li>
                </ul>
                <div class="dropdown ms-4">
                    <button class="btn btn-light dropdown-toggle text-" type="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        {{ Auth::user()->name ?? 'User' }}
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item " href="{{ route('home.profile') }}">Profile</a></li>
                        <li><a class="dropdown-item {{Auth::user()->role == 'admin' ? '' : 'd-none' }}" href="{{route('admin.dashboard')}}">Dashboard</a></li>
                        <li> <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                Logout
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </nav>
@endauth

@guest
    <nav class="navbar navbar-light navbar-expand-md sticky-top navbar-shrink py-3"
        style="background-color: rgba(255, 255, 255)" id="mainNav">
        <div class="container"><a class="navbar-brand d-flex align-items-center" href="/"></a><button
                data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"><span
                    class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1"><img src="../assets/img/LOGO.png" width="86"
                    height="35">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item"><a class="nav-link " href="/">Home</a></li>
                    <li class="nav-item"><a class="nav-link " href="{{ route('contact') }}">Contacts</a></li>
                </ul>
                <a class="btn btn-outline-primary shadow me-2" role="button" href="{{ route('login') }}">Login</a>
                <a class="btn btn-warning shadow" role="button" href="{{ route('register') }}">Sign up</a>
            </div>
        </div>
    </nav>
@endguest
