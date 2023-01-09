@extends('homepage.layout')
@section('homepage-title', 'Pelatihan')
@section('content')
    <style>
        .card-body {
            height: 75vh;
        }
    </style>
    <section class="py-5 bg-light">
        <div class="container py-5">
            <div class="row mb-5">
                <div class="col-md-8 col-xl-6 text-center mx-auto">
                    <h2 class="fw-bold">Info Pelatihan</h2>
                    <p class="text-muted">Kami menyediakan layanan pelatihan yang tersedia secara gratis dan program latihan
                        yang bayar</p>
                </div>
            </div>
            <?php foreach( $pelatihan as $pelatiha ) : ?>
            <?php if( $pelatiha["harga"] == 0 ) : ?>
            <div class="row g-0 row-cols-1 row-cols-md-2 row-cols-xl-3  ">
                <div class="col offset-xl-2 mb-4 px-2">
                    <div class="card bg-light border">
                        <div class="card-body p-4">
                            <div class="d-flex justify-content-between">
                                <div>
                                    <h3 class="fw-bold mb-0"><?= $pelatiha['nama'] ?></h3>
                                    <br>
                                    <img class="rounded img-fluid shadow" style="height: 30vh; object-fit:cover;"
                                        src="<?= $pelatiha['media'] ?>">
                                    <h4 class="display-8 fw-bold"><br>Tidak dikenakan biaya</h4>
                                </div>
                            </div>

                            <div>
                                <p class="text mb-4"><?= $pelatiha['deskripsi'] ?></p>
                                <!-- <ul class="list-unstyled">
                                                <li class="d-flex mb-2"><span class="bs-icon-xs bs-icon-rounded bs-icon-primary-light bs-icon bs-icon-xs me-2"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-check-lg text-primary">
                                                            <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z"></path>
                                                        </svg></span><span>Lectus ut nibh quam, felis porttitor.</span></li>
                                                <li class="d-flex mb-2"><span class="bs-icon-xs bs-icon-rounded bs-icon-primary-light bs-icon bs-icon-xs me-2"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-check-lg text-primary">
                                                            <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z"></path>
                                                        </svg></span><span>Ante nec venenatis etiam lacinia.</span></li>
                                                <li class="d-flex mb-2"><span class="bs-icon-xs bs-icon-rounded bs-icon-primary-light bs-icon bs-icon-xs me-2"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-check-lg text-primary">
                                                            <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z"></path>
                                                        </svg></span><span>Porta suscipit netus ad ac.</span></li>
                                            </ul> -->
                            </div>
                            <a href="{{ route('home.pendaftaran_pelatihan', $pelatiha['id']) }}"
                                class="btn btn-primary d-block w-100" type="button">Daftar</a>
                        </div>
                    </div>
                </div>
                <?php endif; ?>
                <?php endforeach ?>

                <?php foreach( $pelatihan as $pelatiha ) : ?>
                <?php if( $pelatiha["harga"] != 0 ) : ?>
                <div class="col mb-4 px-2">
                    <div class="card text-white bg-primary">
                        <div class="card-body p-4">
                            <div class="d-flex justify-content-between">
                                <div>
                                    <h3 class="fw-bold text-white mb-0"><?= $pelatiha['nama'] ?></h3>
                                    <br>
                                    <img class="rounded img-fluid shadow" style="height: 30vh;object-fit:cover;"
                                        src="<?= $pelatiha['media'] ?>">
                                    <h4 class="display-8 fw-bold text-white"><br>Rp. <?= $pelatiha['harga'] ?>/Bulan</h4>
                                </div>
                                <div><span class="badge rounded-pill bg-primary text-uppercase bg-semi-white">Best
                                        Value</span></div>
                            </div>
                            <div>
                                <p class="text mb-4"><?= substr($pelatiha['deskripsi'], 0, 100) ?></p>
                                <!-- <ul class="list-unstyled">
                                                <li class="d-flex mb-2"><span class="bs-icon-xs bs-icon-rounded bs-icon-semi-white bs-icon bs-icon-xs me-2"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-check-lg text-primary">
                                                            <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z"></path>
                                                        </svg></span><span>Lectus ut nibh quam, felis porttitor.</span></li>
                                                <li class="d-flex mb-2"><span class="bs-icon-xs bs-icon-rounded bs-icon-semi-white bs-icon bs-icon-xs me-2"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-check-lg text-primary">
                                                            <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z"></path>
                                                        </svg></span><span>Ante nec venenatis etiam lacinia.</span></li>
                                                <li class="d-flex mb-2"><span class="bs-icon-xs bs-icon-rounded bs-icon-semi-white bs-icon bs-icon-xs me-2"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-check-lg text-primary">
                                                            <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z"></path>
                                                        </svg></span><span>Porta suscipit netus ad ac.</span></li>
                                                <li class="d-flex mb-2"><span class="bs-icon-xs bs-icon-rounded bs-icon-semi-white bs-icon bs-icon-xs me-2"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-check-lg text-primary">
                                                            <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z"></path>
                                                        </svg></span><span>Morbi praesent aptent integer at.</span></li>
                                                <li class="d-flex mb-2"><span class="bs-icon-xs bs-icon-rounded bs-icon-semi-white bs-icon bs-icon-xs me-2"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-check-lg text-primary">
                                                            <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z"></path>
                                                        </svg></span><span>Nisl potenti ut auctor lobortis.</span></li>
                                            </ul> -->
                                            <a href="{{ route('home.pendaftaran_pelatihan', $pelatiha['id']) }}"
                                            class="btn btn-light d-block w-100" type="button">Daftar</a>
                            </div> 

                        </div>
                    </div>
                </div>
                <?php endif; ?>
                <?php endforeach ?>
            </div>
        </div>
    </section>
@endsection
