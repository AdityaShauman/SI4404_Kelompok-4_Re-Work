<nav class="navbar navbar-dark align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0"
    style="background: darkcyan;">
    <div class="container-fluid d-flex flex-column p-0"><a
            class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="#"><img
                src="{{ asset('assets/img/LOGO.png') }}" width="117" height="44" style="text-align: center;">
            <div class="sidebar-brand-icon rotate-n-15"></div>
            <div class="sidebar-brand-text mx-3"></div>
        </a>
        <hr class="sidebar-divider my-0">
        <ul class="navbar-nav text-light" id="accordionSidebar">
            <li class="nav-item"><a class="nav-link" href="index.php"><i
                        class="fas fa-tachometer-alt"></i><span>Dashboard</span></a></li>
            <li class="nav-item"><a class="nav-link " href="{{ route('materi') }}"><i
                        class="fab fa-product-hunt"></i><span>Kelola
                        Materi</span></a></li>
            <li class="nav-item"><a class="nav-link " href="{{ route('pelatihan') }}"><i
                        class="fas fa-dice-d6"></i><span>Kelola
                        Pelatihan</span></a></li>
            <li class="nav-item"><a class="nav-link " href="{{ route('loker') }}"><i
                        class="fas fa-dolly-flatbed"></i><span>Kelola
                        Loker</span></a></li>
            <li class="nav-item"><a class="nav-link " href="{{ route('pendaftaran') }}"><i
                        class="fas fa-address-book"></i><span>Kelola
                        Pendaftaran</span></a></li>
            <li class="nav-item"><a class="nav-link " href="{{route('user')}}"><i
                        class="fas fa-user"></i><span>User</span></a></li>
            <li class="nav-item"></li>
            <li class="nav-item"></li>
        </ul>
        <div class="text-center d-none d-md-inline"><button class="btn rounded-circle border-0" id="sidebarToggle"
                type="button"></button></div>
    </div>
</nav>
