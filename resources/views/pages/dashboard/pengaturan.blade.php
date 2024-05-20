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


        <section class="section">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <form action="{{ route('update-pengaturan') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="row">
                                    <div class="mb-3 col-md-12">
                                        <label for="firstName" class="form-label">Nama Situs</label>
                                        <input class="form-control" type="text" id="firstName" name="nama_site"
                                            value="{{ $pengaturan->nama_site }}" autofocus />
                                    </div>
                                    <div class="mb-3 col-md-12">
                                        <label for="firstName" class="form-label">Link Video Pengenalan</label>
                                        <input class="form-control" type="text" id="firstName" name="link_video"
                                            value="{{ $pengaturan->link_video }}" autofocus />
                                    </div>
                                </div>
                            </div>
                            <div class="card-header">
                                <h4 class="card-title">Tentang Kami</h4>
                                {{-- <em>summernote</em> --}}
                            </div>
                            <div class="card-body">
                                <textarea name="tentang" id="summernote" cols="30"
                                    rows="10">{!! $pengaturan->tentang !!}</textarea>
                            </div>
                            <div class="card-footer">
                                <div class="mt-2">
                                    <button type="submit" class="btn btn-primary me-2">Simpan Perubahan</button>
                                    <button type="reset" class="btn btn-outline-secondary">Batal</button>
                                </div>
                            </div>
                        </form>
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