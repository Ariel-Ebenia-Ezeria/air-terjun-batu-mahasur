@extends('layouts.dashboard')

@section('title')
Profile
@endsection

@push('addon-style')
@endpush

@section('content')
<!--Content Start-->
<div class="content-start transition">
    <div class="container-fluid dashboard">
        <div class="content-header">
            <h4>Hi, {{ Auth::user()->name }}!</h4>
            <p>Change information about yourself on this page</p>
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
                    <form method="POST" action="{{ route('update-profile') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <label for="name" class="form-label">Nama</label>
                                <input class="form-control" type="text" id="name" name="name"
                                    value="{{ Auth::user()->name }}" autofocus />
                            </div>

                            <div class="mb-3 col-md-6">
                                <label for="email" class="form-label">E-mail</label>
                                <input class="form-control" type="text" id="email" name="email"
                                    value="{{ Auth::user()->email }}" placeholder="niabocil@example.com" />
                            </div>

                            <div class="mb-3 col-md-6">
                                <label for="password" class="form-label">Password Lama</label>
                                <input class="form-control" type="password" name="password" id="password" />
                            </div>

                            <div class="mb-3 col-md-6">
                                <label for="passwordBaru" class="form-label">Password Baru</label>
                                <input type="password" class="form-control" id="passwordBaru" name="passwordBaru" />
                            </div>

                            <div class="mt-2">
                                <button type="submit" class="btn btn-primary me-2">Save changes</button>
                                <button type="reset" class="btn btn-outline-secondary">Cancel</button>
                            </div>
                    </form>
                </div>
            </div>
        </div>

        {{-- <div class="card">
            <h5 class="card-header">Delete Account</h5>
            <div class="card-body">
                <div class="mb-0 mb-3 col-12">
                    <div class="alert alert-warning">
                        <h6 class="mb-1 alert-heading fw-bold">Are you sure you want to delete your account?</h6>
                        <p class="mb-0">Once you delete your account, there is no going back. Please be certain.</p>
                    </div>
                </div>
                <form method="POST" accept="my-profile.html">
                    <div class="mb-3 form-check">
                        <input class="form-check-input" type="checkbox" name="accountActivation"
                            id="accountActivation" />
                        <label class="form-check-label" for="accountActivation">I confirm my account
                            deactivation</label>
                    </div>
                    <button type="submit" class="btn btn-danger deactivate-account">Deactivate Account</button>
                </form>
            </div>
        </div> --}}
    </div>
</div>


</div> <!-- End Container -->
</div><!-- End Content -->
@endsection

@push('addon-script')

@endpush