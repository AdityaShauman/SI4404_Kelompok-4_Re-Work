<?php 
  require "../config/edit.php";

  function querydata($query) {
    global $connect;
    $result = mysqli_query($connect, $query);
    $rows = [];
    while ( $row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    };
    return $rows;
}

    $id = $_GET["id"];
    $materi = querydata("SELECT * FROM materi WHERE idmateri=$id")[0];

    if ( isset($_POST["save"]) ) {
        if ( editing($_POST) > 0 ) {
            echo "
                <script>
                    alert('Data changed');
                    document.location.href = './materi.php';
                </script>
            ";
        } else {
            echo "
                <script>
                    alert('Data not changed');
                    document.location.href = './materi.php';
                </script>
            ";
        }
    };
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="user_style.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Document</title>
</head>
<body>
<form method ="POST" enctype="multipart/form-data">
<input type="hidden" name="idmateri" value="<?=$materi['idmateri'] ?>">
        <div class="mb-3">
            <label for="name" class="form-label">Nama Materi</label>
            <input type="text" class="form-control" id="name" name="materi" value="<?= $materi["nama"]?>">
        </div>
                    
        <br>
        <div class="form-group">
            <label class="control-label" for="deskripsi">Deskripsi</label>
            <textarea class="form-control" id="deskripsi" name = "deskripsi" rows="3" value="<?= $materi["deskripsi"]?>"></textarea>
        </div>
        
        <br>
        <div class="mb-3">
            <label for="name" class="form-label">Link Gambar</label>
            <input type="text" class="form-control" id="media" name="media" value="<?= $materi["media"]?>">
        </div>
    
    
        <div class="mb-3">
            <div>
                <br><button class="btn btn-primary" type="submit" name="save">Selesai</button>
            </div>
        </div>
    </form>
</body>
</html>