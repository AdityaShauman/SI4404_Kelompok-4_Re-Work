@extends('dashboard.layout')
@section('title', 'Edit Materi')
@section('content')
    <div class="container-fluid">
        <h3 class="text-dark mb-4">Materi</h3>

        <form action="{{ route('materi.update', $materi->id) }}" method="POST" class="w-50">
            @csrf
            <div class="mb-2">
                <label for="">Materi</label>
                <input type="text" name="nama" class="form-control" value="{{ $materi->nama }}">
            </div>
            <div class="mb-2">
                <label for="">Deskripsi</label>
                <input type="text" name="deskripsi" class="form-control" value="{{ $materi->deskripsi }}">
            </div>
            <div class="mb-2">
                <label for="">Media</label>
                <input type="text" name="media" class="form-control" value="{{ $materi->media }}">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    </div>



@endsection
