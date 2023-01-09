@extends('dashboard.layout')
@section('title', 'Pendaftaran')
@section('content')
    <div class="container-fluid">
        <h3 class="text-dark mb-4">Pendaftaran</h3>
        <div class="card shadow">

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
                                <th>Id</th>
                                <th>Nama Pendaftar</th>
                                <th>Pelatihan</th>
                                <th>Status</th>
                                <th>Bukti Pembayaran</th>
                                <th>Action</th>
                                <!-- <th>Start date</th>
                                                <th>Salary</th> -->
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pendaftaran as $data)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $data->User->name }}</td>
                                    <td>{{ $data->Pelatihan->nama }}</td>
                                    <td>{{ $data->status }}</td>
                                    <td><img class="img-thumbnail"
                                            src="{{ asset('Bukti Pembayaran/' . $data->bukti_pembayaran) }}"
                                            style="height: 30vh; object-fit:cover;" alt=""></td>
                                    <td><a href="{{ route('pendaftaran.terima', $data->id) }}" class="btn btn-success">Terima</a>

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
                                        href="#"><span aria-hidden="true">«</span></a></li>
                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                <!-- <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                <li class="page-item"><a class="page-link" href="#">3</a></li> -->
                                <li class="page-item"><a class="page-link" aria-label="Next" href="#"><span
                                            aria-hidden="true">»</span></a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="modal fade" id="form_modal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Materi</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form method="POST" id="form" enctype="multipart/form-data">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="name" class="form-label">Nama Materi</label>
                                        <input type="text" class="form-control" id="nama" name="nama"
                                            placeholder="Isi Nama Materi">
                                    </div>

                                    <br>
                                    <div class="form-group">
                                        <label class="control-label" for="deskripsi">Deskripsi</label>
                                        <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3" placeholder="Isi Deskripsi"></textarea>
                                    </div>

                                    <br>
                                    <div class="mb-3">
                                        <label for="name" class="form-label">Link Gambar</label>
                                        <input type="text" class="form-control" id="media" name="media"
                                            placeholder="Isi Link Media">
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

@endsection
