<?php

  require('db_connector.php');
  
  function editing($inputdata){
      global $connect;
      $materiid = $inputdata['idmateri'];
      $materi = $inputdata['materi'];
      $deskripsi = $inputdata['deskripsi'];
      $media = $inputdata['media'];
      
      $query = "UPDATE materi SET 
      idmateri='',
      nama='$materi', 
      deskripsi='$deskripsi', 
      media='$media' WHERE idmateri='$materiid'
  ";
      mysqli_query($connect,$query);
      return mysqli_affected_rows($connect);
  }

//   function upfoto(){
//     $fotofile = $_FILES['gambarmateri']['name'];
//     $fototmpname = $_FILES['gambarmateri']['tmp_name'];

//     move_uploaded_file("$fototmpname", "/xampp/htdocs/Re-Work/page_admin/assets/img/materi/" . $fotofile);
//     return $fotofile;
// }

?>