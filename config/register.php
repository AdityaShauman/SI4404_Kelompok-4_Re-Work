<?php 
    require "db_connector.php";
    function registrasi_user ($data){
        global $connect;

        $nama = stripslashes($data["namauser"]);
        $email = strtolower(stripslashes($data["emailuser"]));
        $password = mysqli_real_escape_string($connect,$data["passworduser"]);
        $confirmPassword = mysqli_real_escape_string($connect,$data["confirmpassworduser"]);


        $result = mysqli_query($connect, "SELECT email FROM user WHERE email = '$email' ");
        if(mysqli_fetch_assoc($result)){
            echo "<script> alert('Email telah dipakai') </script>";
            return false;
        }
        if( $password !== $confirmPassword){
            echo "<script> alert('Password berbeda') </script>";
            return false;
        }

        $password = password_hash($password, PASSWORD_DEFAULT);

        mysqli_query($connect, "INSERT INTO user VALUES (
            '','$nama', '$email', '$password'
        )");

        return mysqli_affected_rows($connect);

    }

    function registrasi_admin ($data){
        global $connect;

        $nama = stripslashes($data["namauser"]);
        $email = strtolower(stripslashes($data["emailuser"]));
        $password = mysqli_real_escape_string($connect,$data["passworduser"]);
        $confirmPassword = mysqli_real_escape_string($connect,$data["confirmpassworduser"]);


        $result = mysqli_query($connect, "SELECT email FROM useradmin WHERE email = '$email' ");
        if(mysqli_fetch_assoc($result)){
            echo "<script> alert('Email telah dipakai') </script>";
            return false;
        }
        if( $password !== $confirmPassword){
            echo "<script> alert('Password berbeda') </script>";
            return false;
        }

        $password = password_hash($password, PASSWORD_DEFAULT);

        mysqli_query($connect, "INSERT INTO useradmin VALUES (
            '','$nama', '$email', '$password'
        )");

        return mysqli_affected_rows($connect);

    }
    ?>