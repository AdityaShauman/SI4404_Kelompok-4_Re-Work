<?php

require "../config/db_connector.php";

require "../config/insert.php";
if ( isset($_POST["submitselesai"]) ) {
    if ( tambahpelatihan($_POST) > 0 ) {
        echo "
            <script>
                alert('Data added');
                document.location.href = './pelatihan.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Data not added');
                document.location.href = './pelatihan.php';
            </script>
        ";
    }
};



  function querydata($query) {
    global $connect;
    $result = mysqli_query($connect, $query);
    $rows = [];
    while ( $row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    };
    return $rows;
}

  $pelatihan = querydata("SELECT * FROM pelatihan");
  $title = "TambahPelatihan";


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Tambah Pelatihan</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&amp;display=swap">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
</head>

<body id="page-top">
    <div id="wrapper">
    <?php include "sidenavbar.php" ?>
        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content">
                    <?php include "topnavbar.php" ?>
                <div class="container-fluid">
                    <h3 class="text-dark mb-4">Pelatihan</h3>
                    <div class="card shadow">
                        <div class="card-header py-3">
                        <p class="text-primary m-0 fw-bold"><a data-bs-toggle="modal" data-bs-target="#examplemodal">Tambah Pelatihan</a></p>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6 text-nowrap">
                                    <div id="dataTable_length" class="dataTables_length" aria-controls="dataTable"><label class="form-label">Show&nbsp;<select class="d-inline-block form-select form-select-sm">
                                                <option value="10" selected="">10</option>
                                                <option value="25">25</option>
                                                <option value="50">50</option>
                                                <option value="100">100</option>
                                            </select>&nbsp;</label></div>
                                </div>
                                <div class="col-md-6">
                                    <div class="text-md-end dataTables_filter" id="dataTable_filter"><label class="form-label"><input type="search" class="form-control form-control-sm" aria-controls="dataTable" placeholder="Search"></label></div>
                                </div>
                            </div>
                            <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
                                <table class="table my-0" id="dataTable">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Position</th>
                                            <th>Office</th>
                                            <th>Age</th>
                                            <th>Start date</th>
                                            <th>Salary</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><img class="rounded-circle me-2" width="30" height="30" src="assets/img/avatars/avatar1.jpeg">Airi Satou</td>
                                            <td>Accountant</td>
                                            <td>Tokyo</td>
                                            <td>33</td>
                                            <td>2008/11/28</td>
                                            <td>$162,700</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="row">
                                <div class="col-md-6 align-self-center">
                                    <p id="dataTable_info" class="dataTables_info" role="status" aria-live="polite">Showing 1 to 10 of 27</p>
                                </div>
                                <div class="col-md-6">
                                    <nav class="d-lg-flex justify-content-lg-end dataTables_paginate paging_simple_numbers">
                                        <ul class="pagination">
                                            <li class="page-item disabled"><a class="page-link" aria-label="Previous" href="#"><span aria-hidden="true">??</span></a></li>
                                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                            <li class="page-item"><a class="page-link" aria-label="Next" href="#"><span aria-hidden="true">??</span></a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="bg-white sticky-footer">
                <div class="container my-auto">
                    <div class="text-center my-auto copyright"><span>Copyright ?? Brand 2022</span></div>
                </div>
            </footer>
        </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
    </div>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="assets/js/theme.js"></script>

            <!-- Form -->
            <div class="modal fade" id="examplemodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Pelatihan</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                <form method ="POST" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="name" class="form-label">Nama Pelatihan</label>
            <input type="text" class="form-control" id="pelatihan" name="pelatihan" placeholder="Isi Nama Materi">
        </div>
                    
        <br>
        <div class="form-group">
            <label class="control-label" for="deskripsi">Deskripsi</label>
            <textarea class="form-control" id="deskripsi" name = "deskripsi" rows="3" placeholder="Isi Deskripsi"></textarea>
        </div>
        
        <br>
        <div class="mb-3">
            <label for="name" class="form-label">Link Gambar</label>
            <input type="text" class="form-control" id="media" name="media" placeholder="Isi Link Media">
        </div>

        <div class="mb-3">
            <label for="harga" class="form-label">Harga Pelatihan</label>
            <input type="number" step ="any" class="form-control" id="harga" name="harga" placeholder="Isi Harga">
        </div>
    
        <div class="mb-3">
            <div>
                <br><button class="btn btn-primary" type="submit" name="submitselesai">Selesai</button>
            </div>
        </div>
    </form>
                </div>
              </div>
            </div>
          </div>
</body>

</html>