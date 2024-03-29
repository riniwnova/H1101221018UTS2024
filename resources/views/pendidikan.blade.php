@extends('layout.main')
@section('content')
<main class="content">
    <div class="container-fluid py-2" style="font-size: 1px;">
        <div class="row">
            <div class="col-md-20 mt-4">
                <div class="card">
                    <div class="card-header pb-0 px-3">
                        <h6 class="mb-0">Form Pendidikan Pegawai</h6>
                        <a class="btn btn-link text-success text-gradient px-3 mb-0" href="javascript:;"><i class="fas fa-user-plus me-2"></i>Tambah Pegawai</a>
                    </div>
                    <div class="card-body pt-4 p-3">
                        <ul class="list-group">
                            <li class="list-group-item border-0 d-flex p-4 mb-2 bg-gray-100 border-radius-lg">
                                <div class="d-flex flex-column">
                                    <h6 class="mb-3 text-sm">Milani Cassandra</h6>
                                    <span class="mb-2 text-xs">Tingkat Pendidikan: <span class="text-dark font-weight-bold ms-sm-2">S2</span></span>
                                    <span class="mb-2 text-xs">IPK/Nilai Akhir: <span class="text-dark ms-sm-2 font-weight-bold">3,98</span></span>
                                    <span class="mb-2 text-xs">Nama Institusi Pendidikan: <span class="text-dark ms-sm-2 font-weight-bold">University of Indonesia</span></span>
                                    <span class="text-xs">Jurusan/Studi: <span class="text-dark ms-sm-2 font-weight-bold">Businnes Management</span></span>
                                </div>
                                <div class="ms-auto text-end">
                                    <a class="btn btn-link text-danger text-gradient px-3 mb-0" href="javascript:;"><i class="far fa-trash-alt me-2"></i>Delete</a>
                                    <a class="btn btn-link text-dark px-3 mb-0" href="javascript:;"><i class="fas fa-pencil-alt text-dark me-2" aria-hidden="true"></i>Edit</a>
                                </div>
                            </li>
                            <ul class="list-group">
                            <li class="list-group-item border-0 d-flex p-4 mb-2 bg-gray-100 border-radius-lg">
                                <div class="d-flex flex-column">
                                    <h6 class="mb-3 text-sm">Rifan</h6>
                                    <span class="mb-2 text-xs">Tingkat Pendidikan: <span class="text-dark font-weight-bold ms-sm-2">S1</span></span>
                                    <span class="mb-2 text-xs">IPK/Nilai Akhir: <span class="text-dark ms-sm-2 font-weight-bold">3,90</span></span>
                                    <span class="mb-2 text-xs">Nama Institusi Pendidikan: <span class="text-dark ms-sm-2 font-weight-bold">Gajahmada University</span></span>
                                    <span class="text-xs">Jurusan/Studi: <span class="text-dark ms-sm-2 font-weight-bold">Rekayasa Sistem Komputer</span></span>
                                </div>
                                <div class="ms-auto text-end">
                                    <a class="btn btn-link text-danger text-gradient px-3 mb-0" href="javascript:;"><i class="far fa-trash-alt me-2"></i>Delete</a>
                                    <a class="btn btn-link text-dark px-3 mb-0" href="javascript:;"><i class="fas fa-pencil-alt text-dark me-2" aria-hidden="true"></i>Edit</a>
                                </div>
                            </li>
                            <ul class="list-group">
                            <li class="list-group-item border-0 d-flex p-4 mb-2 bg-gray-100 border-radius-lg">
                                <div class="d-flex flex-column">
                                    <h6 class="mb-3 text-sm">Hilmy Ram Fahreza</h6>
                                    <span class="mb-2 text-xs">Tingkat Pendidikan: <span class="text-dark font-weight-bold ms-sm-2">S2</span></span>
                                    <span class="mb-2 text-xs">IPK/Nilai Akhir: <span class="text-dark ms-sm-2 font-weight-bold">3,97</span></span>
                                    <span class="mb-2 text-xs">Nama Institusi Pendidikan: <span class="text-dark ms-sm-2 font-weight-bold">University of Indonesia</span></span>
                                    <span class="text-xs">Jurusan/Studi: <span class="text-dark ms-sm-2 font-weight-bold">Information System</span></span>
                                </div>
                                <div class="ms-auto text-end">
                                    <a class="btn btn-link text-danger text-gradient px-3 mb-0" href="javascript:;"><i class="far fa-trash-alt me-2"></i>Delete</a>
                                    <a class="btn btn-link text-dark px-3 mb-0" href="javascript:;"><i class="fas fa-pencil-alt text-dark me-2" aria-hidden="true"></i>Edit</a>
                                </div>
                            </li>
                            <ul class="list-group">
                            <li class="list-group-item border-0 d-flex p-4 mb-2 bg-gray-100 border-radius-lg">
                                <div class="d-flex flex-column">
                                    <h6 class="mb-3 text-sm">Ocean Belvan</h6>
                                    <span class="mb-2 text-xs">Tingkat Pendidikan: <span class="text-dark font-weight-bold ms-sm-2">S1</span></span>
                                    <span class="mb-2 text-xs">IPK/Nilai Akhir: <span class="text-dark ms-sm-2 font-weight-bold">3,89</span></span>
                                    <span class="mb-2 text-xs">Nama Institusi Pendidikan: <span class="text-dark ms-sm-2 font-weight-bold">University of Indonesia</span></span>
                                    <span class="text-xs">Jurusan/Studi: <span class="text-dark ms-sm-2 font-weight-bold">Business Economy</span></span>
                                </div>
                                <div class="ms-auto text-end">
                                    <a class="btn btn-link text-danger text-gradient px-3 mb-0" href="javascript:;"><i class="far fa-trash-alt me-2"></i>Delete</a>
                                    <a class="btn btn-link text-dark px-3 mb-0" href="javascript:;"><i class="fas fa-pencil-alt text-dark me-2" aria-hidden="true"></i>Edit</a>
                                </div>
                            </li>
                            <ul class="list-group">
                            <li class="list-group-item border-0 d-flex p-4 mb-2 bg-gray-100 border-radius-lg">
                                <div class="d-flex flex-column">
                                    <h6 class="mb-3 text-sm">Naura Layla</h6>
                                    <span class="mb-2 text-xs">Tingkat Pendidikan: <span class="text-dark font-weight-bold ms-sm-2">S1</span></span>
                                    <span class="mb-2 text-xs">IPK/Nilai Akhir: <span class="text-dark ms-sm-2 font-weight-bold">3,91</span></span>
                                    <span class="mb-2 text-xs">Nama Institusi Pendidikan: <span class="text-dark ms-sm-2 font-weight-bold">University of Indonesia</span></span>
                                    <span class="text-xs">Jurusan/Studi: <span class="text-dark ms-sm-2 font-weight-bold">Management</span></span>
                                </div>
                                <div class="ms-auto text-end">
                                    <a class="btn btn-link text-danger text-gradient px-3 mb-0" href="javascript:;"><i class="far fa-trash-alt me-2"></i>Delete</a>
                                    <a class="btn btn-link text-dark px-3 mb-0" href="javascript:;"><i class="fas fa-pencil-alt text-dark me-2" aria-hidden="true"></i>Edit</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection