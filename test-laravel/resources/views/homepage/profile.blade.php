@extends('homepage.layout')
@section('homepage-title', 'Profile')
@section('content')
    <section style="background-color: #eee;">
        <div class="container py-5">
            <div class="row">
                <div class="col">
                    <nav aria-label="breadcrumb" class="bg-light rounded-3 p-3 mb-4">
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">User Profile</li>
                        </ol>
                    </nav>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4">
                    <div class="card mb-4">
                        <div class="card-body text-center">
                            <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava3.webp"
                                alt="avatar" class="rounded-circle img-fluid" style="width: 150px;">
                            <h5 class="my-3">{{ Auth::user()->name }}</h5>
                            <p class="text-muted mb-1">College Student</p>
                            <p class="text-muted mb-4">Bandung, ID</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Full Name</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">{{ Auth::user()->name }}</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Email</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">{{ Auth::user()->email }}</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Role</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">{{ Auth::user()->role }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 mb-3">
                            <div class="card mb-4 mb-md-0">
                                <div class="card-body">
                                    <p class="mb-4"><span class="text-primary font-italic me-1">Data</span> Pendaftaran
                                    </p>
                                    <table class="table table-striped">
                                        <thead class="table-dark">
                                          <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Nama</th>
                                            <th scope="col">Pelatihan</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Bukti</th>
                                          </tr>
                                        </thead>
                                        <tbody class="table-group-divider">
                                            @foreach ($pendaftaran as $data)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $data->User->name }}</td>
                                                <td>{{ $data->Pelatihan->nama }}</td>
                                                <td>{{ $data->status }}</td>
                                                <td><img class="img-thumbnail"
                                                        src="{{ asset('Bukti Pembayaran/' . $data->bukti_pembayaran) }}"
                                                        style="height: 15vh; object-fit:cover;" alt=""></td>
                                                <!-- <td>2008/11/28</td>
                                                            <td>$162,700</td> -->
                                            </tr>
                                        @endforeach
                                        </tbody>
                                      </table>
                                </div>
                            </div>
                        </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
