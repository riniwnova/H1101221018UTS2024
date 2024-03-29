@extends('layout.main')
@section('content')
<div class="container-fluid py-3">
    <div class="row">
        <div class="col-lg-20 mx-auto">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Form Master Jabatan</h5>
                </div>
                <div class="card-body">
                        @csrf
                        <div class="mb-3">
                            <label for="nama_jabatan" class="form-label">Position Name</label>
                            <input type="text" class="form-control" id="nama_jabatan" name="nama_jabatan">
                        </div>
                        <div class="mb-3">
                            <label for="level" class="form-label">Level</label>
                            <input type="number" class="form-control" id="level" name="level">
                        </div>
                        <div class="mb-3">
                            <label for="deskripsi" class="form-label">Description</label>
                            <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection