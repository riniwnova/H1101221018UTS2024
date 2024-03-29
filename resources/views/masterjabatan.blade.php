@extends('layout.main')
@section('content')
<main class="content">
    <div class="container-fluid py-2" style="font-size: 1px;">
        <div class="row">
            <div class="col-md-20 mt-4">
                <div class="card">
                    <div class="card-header pb-0 px-3">
                        <h6 class="mb-0">Form Master Jabatan</h6>
                        <a class="btn btn-link text-success text-gradient px-3 mb-0" href="javascript:;"><i class="fas fa-user-plus me-2"></i>Tambah Pegawai</a>
                    </div>
                    <div class="card-body pt-4 p-3">
                        <ul class="list-group">
                            <li class="list-group-item border-0 d-flex p-4 mb-2 bg-gray-100 border-radius-lg">
                                <div class="d-flex flex-column">
                                    <h6 class="mb-3 text-sm">Milani Cassandra</h6>
                                    <span class="mb-2 text-xs">Nama Jabatan: <span class="text-dark font-weight-bold ms-sm-2">Chief Financial Officer</span></span>
                                    <span class="mb-2 text-xs">Pengalaman Kerja: <span class="text-dark font-weight-bold ms-sm-2">5 tahun pengalaman kerja di bidang keuangan atau akuntansi</span></span>
                                    <span class="mb-2 text-xs">Kualisifikasi Pendidikan: <span class="text-dark font-weight-bold ms-sm-2">Gelar magister (S2) dalam Business Management dari Universitas Indonesia (UI)</span></span>
                                    <span class="mb-2 text-xs">Level Jabatan: <span class="text-dark font-weight-bold ms-sm-2">CFO</span></span>
                                </div>
                                <div class="ms-auto text-end">
                                    <a class="btn btn-link text-danger text-gradient px-3 mb-0" href="javascript:;"><i class="far fa-trash-alt me-2"></i>Delete</a>
                                    <a class="btn btn-link text-dark px-3 mb-0" href="javascript:;"><i class="fas fa-pencil-alt text-dark me-2" aria-hidden="true"></i>Edit</a>
                                </div>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection