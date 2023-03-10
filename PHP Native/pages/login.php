<?php
        if(!isset($_SESSION)){
            session_start();
        }

        require "../config/register.php";
        require "../config/db_connector.php";

        if(isset($_POST["registeruser"])){
            if(registrasi_user($_POST)){
                echo "<script> S
                alert('Berhasil Registrasi!');  
            </script>";
            }else{
                echo mysqli_error($connect);
            }
        }


        if (isset($_SESSION["login_user"])){
            header("Location: index.php");
            exit;
        }

        if(isset($_POST["login_user"])) {
            $email = $_POST["email"];
            $password = $_POST["password"];

            $result = mysqli_query($connect, "SELECT * FROM user WHERE email = '$email'");

            if(mysqli_num_rows($result) === 1){
                $row = mysqli_fetch_assoc($result);
                if (password_verify($password, $row["password"])) {
                    $_SESSION["email"] = $row["email"];
                    $_SESSION["nama"] = $row["nama"];
                    $_SESSION["login"] = true; 

                    $_SESSION["message"] = "Berhasil Login";
                    header("Location: index.php");
                    exit;
                };
            }
            $error = true ;
        }
    ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Login</title>
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&amp;display=swap">
</head>

<body>
    <section class="vh-100" style="background-color: #eee;">
        <div class="container h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-lg-12 col-xl-11">
                <div class="card text-black" style="border-radius: 25px;">
                <div class="card-body p-md-5">
                    <div class="row justify-content-center">
                    <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                        <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Login</p>

                        <form class="mx-1 mx-md-4" method ="post">

                        <div class="d-flex flex-row align-items-center mb-4">
                            <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                            <div class="form-outline flex-fill mb-0">
                            <input type="text" name="email" id="form3Example1c" class="form-control" />
                            <label class="form-label" for="form3Example1c">Email</label>
                            </div>
                        </div>

                        <div class="d-flex flex-row align-items-center mb-4">
                            <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                            <div class="form-outline flex-fill mb-0">
                            <input type="password" name="password" id="form3Example4c" class="form-control" />
                            <label class="form-label" for="form3Example4c">Password</label>
                            </div>
                        </div>

                        <!-- <div class="form-check d-flex justify-content-center mb-5">
                            <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3c" />
                            <label class="form-check-label" for="form2Example3">
                            Remember Me<a href="#!"></a>
                            </label>
                        </div> -->
                        <p align="center"><br>Belum punya akun? <a href="register.php">Login Disini!</a></p>


                        <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                            <button type="submit" name="login_user" class="btn btn-primary btn-lg">Login</button>
                        </div>

                        <p align="center"><a href="../page_admin/login.php" style="text-decoration: none; color: gray; opacity: 50%;">Admin Login</a></p>

                        </form>

                    </div>
                    <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

                        <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-registration/img4.webp"  style= "height: 700px; border-radius: 10px; width: 100%" 
                        class="img-fluid" alt="Sample image">

                    </div>
                    
                </div>
                
            </div>
            
        </div>
    </section>    
</body>