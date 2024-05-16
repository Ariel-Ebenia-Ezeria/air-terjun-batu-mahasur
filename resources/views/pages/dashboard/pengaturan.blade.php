@extends('layouts.dashboard')

@section('title')
Profile
@endsection

@push('addon-style')
<!-- summernote css -->
<link rel="stylesheet" href="/assets/dashboard/modules/summernote/summernote-lite.css">
@endpush

@section('content')
<!--Content Start-->
<div class="content-start transition">
    <div class="container-fluid dashboard">
        <div class="content-header">
            <h1>Pengaturan Website</h1>
        </div>

        <div class="row">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-start align-items-sm-center ">
                        <img src="/assets/dashboard/images/avatar/avatar-1.png" alt="user-avatar"
                            class="rounded d-block" height="100" width="100px" id="uploadedAvatar" />
                        <div class="button-wrapper">
                            <label for="upload" class="mb-4 btn btn-primary me-2" tabindex="0">
                                <span class="d-none d-sm-block">Upload new photo</span>
                                <i class="bx bx-upload d-block d-sm-none"></i>
                                <input type="file" id="upload" class="account-file-input" hidden
                                    accept="image/png, image/jpeg" />
                            </label>
                            <p class="mb-0 text-muted">Allowed JPG, GIF or PNG. Max size of 800K</p>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <form method="POST" accept="my-profile.html">
                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <label for="firstName" class="form-label">First Name</label>
                                <input class="form-control" type="text" id="firstName" name="firstName" value="Nia"
                                    autofocus />
                            </div>

                            <div class="mb-3 col-md-6">
                                <label for="lastName" class="form-label">Last Name</label>
                                <input class="form-control" type="text" name="lastName" id="lastName" value="Bocil" />
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="email" class="form-label">E-mail</label>
                                <input class="form-control" type="text" id="email" name="email"
                                    value="Andree@example.com" placeholder="niabocil@example.com" />
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="organization" class="form-label">Organization</label>
                                <input type="text" class="form-control" id="organization" name="organization"
                                    value="Bocil Gengs" />
                            </div>

                            <div class="mt-2">
                                <button type="submit" class="btn btn-primary me-2">Save changes</button>
                                <button type="reset" class="btn btn-outline-secondary">Cancel</button>
                            </div>
                    </form>
                </div>
            </div>
        </div>

        <section class="section">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Tentang Kami</h4>
                            {{-- <em>summernote</em> --}}
                        </div>
                        <div class="card-body">
                            <div id="summernote"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>


@endsection

@push('addon-script')
<script src="/assets/dashboard/modules/summernote/summernote-lite.min.js"></script>
<script>
    $('#summernote').summernote({
            tabsize: 2,
            height: 120,
        })
</script>
@endpush