@extends('dashboard.layout')
@section('title', 'Edit User')
@section('content')
    <div class="container-fluid">
        <h3 class="text-dark mb-4">User</h3>

        <form action="{{ route('user.update', $user->id) }}" method="POST" class="w-50">
            @csrf
            <div class="mb-2">
                <label for="">Nama</label>
                <input type="text" name="name" class="form-control" value="{{ $user->name }}">
            </div>
            <div class="mb-2">
                <label for="">Email</label>
                <input type="text" name="email" class="form-control" value="{{ $user->email }}">
            </div>
            <div class="mb-2">
                <label for="">Password</label>
                <input type="password" name="password" class="form-control" >
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Role</label>
                <select name="role" id="" class="form-control">
                    <option value="user">User</option>
                    <option value="admin">Admin</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    </div>


@endsection
