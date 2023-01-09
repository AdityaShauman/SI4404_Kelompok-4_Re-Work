@extends('dashboard.layout')
@section('title', 'Edit Pelatihan')
@section('content')
    <div class="container-fluid">
        <h3 class="text-dark mb-4">Pelatihan</h3>

        <form action="{{ route('pelatihan.update', $pelatihan->id) }}" method="POST" class="w-50">
            @csrf
            <div class="mb-2">
                <label for="">Pelatihan</label>
                <input type="text" name="nama" class="form-control" value="{{ $pelatihan->nama }}">
            </div>
            <div class="mb-2">
                <label for="">Deskripsi</label>
                <input type="text" name="deskripsi" class="form-control" value="{{ $pelatihan->deskripsi }}">
            </div>
            <div class="mb-2">
                <label for="">Media</label>
                <input type="text" name="media" class="form-control" value="{{ $pelatihan->media }}">
            </div>
            <div class="mb-2">
                <label for="">Harga</label>
                <input type="number" name="harga" class="form-control" value="{{ $pelatihan->harga }}">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    </div>



@endsection

