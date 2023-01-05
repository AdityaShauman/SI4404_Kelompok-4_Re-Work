<?php

  require('db_connector.php');
  
  function adding($inputdata){
      global $connect;
      $materi = $inputdata['materi'];
      $deskripsi = $inputdata['deskripsi'];
      $media = $inputdata['media'];
      
      $query = "INSERT INTO materi VALUES('', '$materi','$deskripsi','$media')";
      mysqli_query($connect,$query);
      return mysqli_affected_rows($connect);
  }

  function tambahloker($inputdata){
    global $connect;
    $loker = $inputdata['loker'];
    $deskripsi = $inputdata['deskripsi'];
    $fotoloker = $inputdata['fotoloker'];
    $linkloker = $inputdata['linkloker'];
    
    $query = "INSERT INTO loker VALUES('', '$loker','$deskripsi','$fotoloker','$linkloker')";
    mysqli_query($connect,$query);
    return mysqli_affected_rows($connect);
}

function tambahpelatihan($inputdata){
  global $connect;
  $pelatihan = $inputdata['pelatihan'];
  $deskripsi = $inputdata['deskripsi'];
  $media = $inputdata['media'];
  $harga = $inputdata['harga'];
  
  $query = "INSERT INTO pelatihan VALUES('', '$pelatihan','$deskripsi','$media','$harga')";
  mysqli_query($connect,$query);
  return mysqli_affected_rows($connect);
}

?>