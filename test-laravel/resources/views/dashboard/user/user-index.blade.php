@extends('dashboard.layout')
@section('title', 'User')
@section('content')
    <div class="container-fluid">
        <h3 class="text-dark mb-4">User</h3>
        <div class="card shadow">
            <div class="card-header py-3">
                <button class="btn btn-info" data-toggle="modal" id="addUser"><i class="fa fa-plus" aria-hidden="true"></i>
                    Tambah User</button>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6 text-nowrap">
                        <div id="dataTable_length" class="dataTables_length" aria-controls="dataTable"><label
                                class="form-label">Show&nbsp;<select class="d-inline-block form-select form-select-sm">
                                    <option value="10" selected="">10</option>
                                    <option value="25">25</option>
                                    <option value="50">50</option>
                                    <option value="100">100</option>
                                </select>&nbsp;</label></div>
                    </div>
                    <div class="col-md-6">
                        <div class="text-md-end dataTables_filter" id="dataTable_filter"><label class="form-label"><input
                                    type="search" class="form-control form-control-sm" aria-controls="dataTable"
                                    placeholder="Search"></label></div>
                    </div>
                </div>
                <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
                    <table class="table my-0" id="dataTable">
                        <thead>
                            <tr>
                                <th>ID User</th>
                                <th>Nama User</th>
                                <th>Email</th>
                                <th>Role</th>
                                <th>Aksi</th>
                                <!-- <th>Start date</th>
                                                            <th>Salary</th> -->
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($user as $data)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $data->name }}</td>
                                    <td>{{ $data->email }}</td>
                                    <td> <button class="btn btn-outline-primary">{{ $data->role }} </button> </td>
                                    <td><a href="{{ route('user.edit', $data->id) }}" class="btn btn-success">Edit</a>
                                        <a href="{{ route('user.delete', $data->id) }}"
                                            class="btn btn-danger mx-1">Delete</a>
                                    </td>
                                    <!-- <td>2008/11/28</td>
                                                            <td>$162,700</td> -->
                                </tr>
                            @endforeach

                        </tbody>
                        <tfoot>
                            <!-- <tr>
                                                            <td><strong>Name</strong></td>
                                                            <td><strong>Position</strong></td>
                                                            <td><strong>Office</strong></td>
                                                            <td><strong>Age</strong></td>
                                                            <td><strong>Start date</strong></td>
                                                            <td><strong>Salary</strong></td>
                                                        </tr>
                                                    </tfoot> -->
                    </table>
                </div>
                <div class="row">
                    <div class="col-md-6 align-self-center">
                        <p id="dataTable_info" class="dataTables_info" role="status" aria-live="polite">Showing 1 to 10 of
                            27</p>
                    </div>
                    <div class="col-md-6">
                        <nav class="d-lg-flex justify-content-lg-end dataTables_paginate paging_simple_numbers">
                            <ul class="pagination">
                                <li class="page-item disabled"><a class="page-link" aria-label="Previous"
                                        href="#"><span aria-hidden="true">??</span></a></li>
                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                <!-- <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                            <li class="page-item"><a class="page-link" href="#">3</a></li> -->
                                <li class="page-item"><a class="page-link" aria-label="Next" href="#"><span
                                            aria-hidden="true">??</span></a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="modal fade" id="form_modal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah User</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form method="POST" id="form" enctype="multipart/form-data">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="name" class="form-label">Nama User</label>
                                        <input type="text" class="form-control" id="name" name="name"
                                            placeholder="Isi Nama User">
                                    </div>

                                    <br>
                                    <div class="form-group">
                                        <label class="control-label" for="deskripsi">Email</label>
                                        <input type="text" class="form-control" id="email" name="email">
                                    </div>

                                    <br>
                                    <div class="mb-3">
                                        <label for="name" class="form-label">Password</label>
                                        <input type="password" class="form-control" id="password" name="password">
                                    </div>
                                    <div class="mb-3">
                                        <label for="name" class="form-label">Role</label>
                                        <select name="role" id="" class="form-control">
                                            <option value="user">User</option>
                                            <option value="admin">Admin</option>
                                        </select>
                                    </div>


                                    <div class="mb-3">
                                        <div>
                                            <br><button class="btn btn-primary" type="submit"
                                                id="submitBtn">Selesai</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        $(function() {


            /*------------------------------------------
             --------------------------------------------
             Pass Header Token
             --------------------------------------------
             --------------------------------------------*/
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $('#addUser').click(function() {
                // $('#saveBtn').val("create-product");
                $('#form_modal').modal('show');

                $('#budget-form').trigger("reset");

            });

            $('#submitBtn').click(function(e) {
                e.preventDefault();

                $.ajax({
                    data: $('#form').serialize(),
                    url: "{{ route('user.store') }}",
                    type: "POST",
                    dataType: 'json',
                    success: function(data) {

                        $('#form').trigger("reset");
                        $('#form_modal').modal('hide');
                        Swal.fire({
                            icon: 'success',
                            title: 'Success !',
                            text: 'Data telah ditambahkan!',
                            timer: 2000,
                        }).then(function() {
                            location.reload();
                        });


                    },
                    error: function(data) {
                        console.log('Error:', data);
                        $('#submitBtn').html('Save Changes');
                    }
                });
            });
        });
    </script>
@endsection
