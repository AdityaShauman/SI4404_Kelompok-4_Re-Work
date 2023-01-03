<?php
session_start();

if(!isset($_SESSION["login"])){
  header("location: user_home.php");
  exit;
}
require "/xampp/htdocs/Re-Work/config/db_connector.php";

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar</title>
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&amp;display=swap">
</head>
<body>
<?php if(isset($_SESSION["login"])) { ?>
    <nav class="navbar navbar-light navbar-expand-md sticky-top navbar-shrink py-3" id="mainNav">
        <div class="container"><a class="navbar-brand d-flex align-items-center" href="/"></a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1"><img src="../assets/img/LOGO.png" width="86" height="35">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item"><a class="nav-link <?php if ($title == "Home") echo "active" ?>" href="index.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link <?php if ($title == "Materi") echo "active" ?>" href="Materi.php">Materi</a></li>
                    <li class="nav-item"><a class="nav-link <?php if ($title == "Pelatihan") echo "active" ?>" href="pelatihan.php">Pelatihan</a></li>
                    <li class="nav-item"><a class="nav-link <?php if ($title == "Loker") echo "active" ?>" href="infoloker1.php">Info Loker</a></li>
                    <li class="nav-item"><a class="nav-link <?php if ($title == "Contacts") echo "active" ?>" href="contacts.php">Contacts</a></li>
                </ul>
                    <div class="dropdown ms-4">
                    <button class="btn btn-light dropdown-toggle text-<?= isset($_COOKIE["warna_navbar"])  ? $_COOKIE["warna_navbar"] : "success"; ?>" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <?= $_SESSION["nama"]; ?>
                    </button>
                    <ul class="dropdown-menu">
                    <li><a class="dropdown-item text-<?= isset($_COOKIE["warna_navbar"])  ? $_COOKIE["warna_navbar"] : "success"; ?>" href="./pages/Profile-Rakan.php">Profile</a></li>
                    <li><a class="dropdown-item text-<?= isset($_COOKIE["warna_navbar"])  ? $_COOKIE["warna_navbar"] : "success"; ?>" href="./config/logout.php">Log Out</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <?php } else {?>
    <nav class="navbar navbar-light navbar-expand-md sticky-top navbar-shrink py-3" id="mainNav">
        <div class="container"><a class="navbar-brand d-flex align-items-center" href="/"></a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1"><img src="../assets/img/LOGO.png" width="86" height="35">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item"><a class="nav-link <?php if ($title == "Home") echo "active" ?>" href="index.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link <?php if ($title == "Materi") echo "active" ?>" href="Materi.php">Materi</a></li>
                    <li class="nav-item"><a class="nav-link <?php if ($title == "Pelatihan") echo "active" ?>" href="pelatihan.php">Pelatihan</a></li>
                    <li class="nav-item"><a class="nav-link <?php if ($title == "Loker") echo "active" ?>" href="infoloker1.php">Info Loker</a></li>
                    <li class="nav-item"><a class="nav-link <?php if ($title == "Contacts") echo "active" ?>" href="contacts.php">Contacts</a></li>
                </ul><a class="btn btn-warning shadow" role="button" href="register.php">Sign up</a>
            </div>
        </div>
    </nav>
    <?php };?>
</body>
</html>