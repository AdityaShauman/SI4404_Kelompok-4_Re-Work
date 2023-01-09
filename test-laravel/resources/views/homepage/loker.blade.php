@extends('homepage.layout')
@section('homepage-title', 'Loker')
@section('content')
    <div class="row mb-5">
        <div class="col-md-8 col-xl-6 text-center mx-auto">
            <h2 class="fw-bold">Info Lowongan Kerja</h2>
            <p class="text-muted">Temukan lowongan kerja yang sesuai melalui Re-Work!</p>
        </div>
    </div>
     @foreach( $loker as $loke )
    <div class="row row-cols-1 row-cols-md-1 mx-auto" style="max-width: 900px;align: center">


        <div class="col mb-4" style="text-align:center">
            <div><a href="#"><img class="object-fit-cover rounded img-fluid shadow w-100 " src="{{$loke->foto}}"
                        style="height: 250px;"></a>
                <!-- <div class="py-4"><span class="badge bg-primary mb-2">Website</span> -->

                <h4 class="fw-bold"><br>{{$loke->nama}}</h4>
                <p class="text-muted"><?= substr($loke['deskripsi'], 0, 200) . ' ...' ?><a href="{{$loke->link}}"></p>
                <button class="btn btn-primary btn-sm" type="button">Link Loker</button></a>
            </div>
        </div>
    </div>
    @endforeach

    </div>
@endsection
