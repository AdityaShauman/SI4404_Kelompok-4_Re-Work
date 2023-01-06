

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&amp;display=swap">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
</head>
<body>
        <nav class="navbar navbar-dark align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0" style="background: darkcyan;">
            <div class="container-fluid d-flex flex-column p-0"><a class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="#"><img src="assets/img/LOGO.png" width="117" height="44" style="text-align: center;">
                    <div class="sidebar-brand-icon rotate-n-15"></div>
                    <div class="sidebar-brand-text mx-3"></div>
                </a>
                <hr class="sidebar-divider my-0">
                <ul class="navbar-nav text-light" id="accordionSidebar">
                    <li class="nav-item"><a class="nav-link <?php if ($title == "Dashboard") echo "active" ?>" href="index.php"><i class="fas fa-tachometer-alt"></i><span>Dashboard</span></a></li>
                    <li class="nav-item"><a class="nav-link <?php if ($title == "TambahMateri") echo "active" ?>" href="materi.php"><i class="fab fa-product-hunt"></i><span>Kelola Materi</span></a></li>
                    <li class="nav-item"><a class="nav-link <?php if ($title == "TambahPelatihan") echo "active" ?>" href="pelatihan.php"><i class="fas fa-dice-d6"></i><span>Kelola Pelatihan</span></a></li>
                    <li class="nav-item"><a class="nav-link <?php if ($title == "TambahLoker") echo "active" ?>" href="loker.php"><i class="fas fa-dolly-flatbed"></i><span>Kelola Loker</span></a></li>
                    <li class="nav-item"><a class="nav-link <?php if ($title == "AdminProfile") echo "active" ?>" href="profile.php"><i class="fas fa-user"></i><span>Profile</span></a></li>
                    <li class="nav-item"></li>
                    <li class="nav-item"></li>
                </ul>
                <div class="text-center d-none d-md-inline"><button class="btn rounded-circle border-0" id="sidebarToggle" type="button"></button></div>
            </div>
        </nav>
</body>
</html>