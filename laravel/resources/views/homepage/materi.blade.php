@extends('homepage.layout')
@section('homepage-title', 'Materi')
@section('content')
    <section class="py-5">
        <div class="container py-5">
            <div class="row mb-4 mb-lg-5">
                <div class="col-md-8 col-xl-6 text-center mx-auto">
                    <p class="fw-bold text-success mb-2">Materi</p>
                    <h3 class="fw-bold">Cari materi yang anda ingin ketahui</h3>
                </div>
            </div>

            <?php foreach( $materi as $mater ) : ?>
            <div class="row row-cols-1 row-cols-md-2 mx-auto" style="max-width: 900px;">
                <div class="col order-md-last mb-5"><img class="rounded img-fluid shadow" src="<?= $mater['media'] ?>"></div>
                <div class="col d-md-flex align-items-md-end align-items-lg-center mb-5">
                    <div>
                        <h5 class="fw-bold"><?= $mater['nama'] ?></h5>
                        <p class="text-muted mb-4"><?= substr($mater['deskripsi'], 0, 100) . ' ...' ?></p><button
                            class="btn btn-primary shadow" type="button">Learn more</button>
                    </div>
                </div>
            </div>
            <?php endforeach ?>
            <!-- <div class="row row-cols-1 row-cols-md-2 mx-auto" style="max-width: 900px;">
                <div class="col order-md-last mb-5"><img class="rounded img-fluid shadow" src="../assets/img/tubes2.jfif"></div>
                <div class="col d-md-flex align-items-md-end align-items-lg-center mb-5">
                    <div>
                        <h5 class="fw-bold">Programming Developer Basic&nbsp;</h5>
                        <p class="text-muted mb-4">Pemrograman web merupakan suatu proses pembuatan website untuk keperluan internet</p><button class="btn btn-primary shadow" type="button">Learn more</button>
                    </div>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-md-2 mx-auto" style="max-width: 900px;">
                <div class="col mb-5"><img class="rounded img-fluid shadow" src="../assets/img/tubes4.jpg"></div>
                <div class="col d-md-flex align-items-md-end align-items-lg-center mb-5">
                    <div>
                        <h5 class="fw-bold">Software Quality Assurance&nbsp;</h5>
                        <p class="text-muted mb-4"> serangkaian prosedur yang dilakukan oleh QA Engineer   untuk memastikan bahwa produk yang dikembangkan sesuai dengan standar. Software Quality Assurance merupakan juga dapat didefinisikan sebagai suatu pendekatan sistematis untuk mengevaluasi kualitas suatu produk..</p><button class="btn btn-primary shadow" type="button">Learn more</button>
                    </div>
                </div>
            </div> -->
        </div>
    </section>
@endsection
