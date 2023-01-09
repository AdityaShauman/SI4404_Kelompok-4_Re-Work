@extends('dashboard.layout')
@section('title', 'Edit Loker')
@section('content')
    <div class="container-fluid">
        <h3 class="text-dark mb-4">Loker</h3>

        <form action="{{ route('loker.update', $loker->id) }}" method="POST" class="w-50" enctype="multipart/form-data">
            @csrf
            <div class="mb-2">
                <label for="">Loker</label>
                <input type="text" name="nama" class="form-control" value="{{ $loker->nama }}">
            </div>
            <div class="mb-2">
                <label for="">Deskripsi</label>
                <input type="text" name="deskripsi" class="form-control" value="{{ $loker->deskripsi }}">
            </div>
            <div class="mb-2">
                <label for="">Link</label>
                <input type="text" name="link" class="form-control" value="{{ $loker->link }}">
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Foto</label>
                <input type="text" class="form-control" id="foto" name="foto"
                placeholder="Isi Foto">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    </div>



@endsection
