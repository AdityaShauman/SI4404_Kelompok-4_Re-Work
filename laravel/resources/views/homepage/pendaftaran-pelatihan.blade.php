@extends('homepage.layout')
@section('homepage-title', 'Pendaftaran Pelatihan')
@section('content')
    <section class="py-5 bg-light">
        <div class="container py-5">
            <div class="row mb-5">
                <div class="col-md-8 col-xl-6 text-center mx-auto">
                    <h2 class="fw-bold">Daftar Pelatihan</h2>
                    <p class="text-muted">Silahkan isi formulir dibawah ini untuk mendaftar pelatihan yang dipilih</p>
                </div>
                <div class="row g-0">
                    <div class="col mb-4 px-2 d-flex justify-content-center">

                        <form action="{{route('home.upload_pendaftaran',$pelatihan->id)}}" method="POST" class="w-50" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label> Nama Akun Anda </label>
                                <input type="text" name="" class="form-control" value="{{Auth::user()->name}}" readonly>
                            </div>
                            <div class="mb-3">
                                <label> Email </label>
                                <input type="text" name="" class="form-control" value="{{Auth::user()->email}}" readonly>
                            </div>
                            <div class="mb-3">
                                <label> Pelatihan Dipilih </label>
                                <input type="text" name="" class="form-control" value="{{$pelatihan->nama}}" readonly>
                            </div>
                            <div class="mb-3">
                                <label> Biaya </label>
                                <input type="text"  class="form-control" value="{{$pelatihan->harga == 0 ? 'Gratis' : 'Rp.'.number_format($pelatihan->harga) }}" disabled>
                            </div>
                            <div class="mb-3">
                                <label> Bukti Pendaftaran </label>
                                <input type="file" accept="image/*" name="bukti_pembayaran" class="form-control">
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>

                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection
