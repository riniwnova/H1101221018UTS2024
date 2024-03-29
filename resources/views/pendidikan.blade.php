@extends('layout.main')
@section('content')
<div class="container-fluid py-2" style="font-size: 11px;">
        <div class="row">
            <div class="col-md-20 mt-4">
                <div class="card">
                    <div class="card-header pb-0 px-3">
                        <h6 class="mb-0">Form Pendidikan</h6>
                    </div>
                    <div class="card-body pt-4 p-3">
                        <form action="#" method="POST">
                            @csrf
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="full_name" class="form-label">Full Name</label>
                                    <input type="text" class="form-control" id="full_name" name="full_name" placeholder="Enter full name">
                                </div>
                                <div class="col-md-6">
                                    <label for="position" class="form-label">Position</label>
                                    <input type="text" class="form-control" id="position" name="position" placeholder="Enter position">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="edu_level" class="form-label">Educational Level</label>
                                    <input type="text" class="form-control" id="edu_level" name="edu_level" placeholder="Enter educational level">
                                </div>
                                <div class="col-md-6">
                                    <label for="edu_institution" class="form-label">Educational Institution</label>
                                    <input type="text" class="form-control" id="edu_institution" name="edu_institution" placeholder="Enter educational institution">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="major" class="form-label">Major</label>
                                    <input type="text" class="form-control" id="major" name="major" placeholder="Enter major">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        <footer class="footer pt-3  ">
        </footer>
    </div>
</main>
<div class="fixed-plugin">
</div>
@endsection
