@extends('layouts.dashboard')

@section('title')
Ulasan
@endsection

@push('addon-style')
<link href="https://cdn.datatables.net/v/bs4/dt-2.0.7/r-3.0.2/datatables.min.css" rel="stylesheet">
@endpush

@section('content')
<!--Content Start-->
<div class="content-start transition ">
    <div class="container-fluid dashboard">
        <div class="content-header">
            <h1>Galeri

                <button type="button" class="btn btn-outline-success" data-bs-toggle="modal"
                    data-bs-target="#tambah">+</button>
            </h1>
        </div>

        <section class="section">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        {{-- <div class="card-header">
                            <h4 class="card-title">Default Editor</h4>
                            <em>summernote</em>
                        </div> --}}
                        <div class="card-body">
                            <table id="example" class="table table-striped table-bordered" style="width:100%">
                                <thead>
                                    <tr>
                                        <th width="3%">No</th>
                                        <th>Nama</th>
                                        <th>Kategori</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                    $no=1;
                                    @endphp
                                    @forelse ( $galeris as $galeri )
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td class="text-center">
                                            <img src="{{ Storage::url($galeri->nama_file) }}" alt=""
                                                style="width: 250px" />
                                        </td>
                                        <td>{{ $galeri->kategori }}</td>
                                        <td>
                                            <a href="{{ route('galeri.destroy', $galeri->id) }}"
                                                class="btn btn-icon btn-danger" data-confirm-delete="true">
                                                <i class="far fa-trash-alt"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    @empty
                                    <tr>
                                        <td colspan="4" class="text-center">
                                            <h1>Belum Ada Galeri</h1>
                                        </td>
                                    </tr>
                                    @endforelse
                                </tbody>
                                {{-- <tfoot>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Kategori</th>
                                        <th>Aksi</th>
                                    </tr>
                                </tfoot> --}}
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @include('pages.dashboard.galeris.modal')
    </div><!-- End Container-->
</div><!-- End Content-->
@endsection

@push('addon-script')
<script src="https://cdn.datatables.net/v/bs4/dt-2.0.7/r-3.0.2/datatables.min.js"></script>
<script>
    new DataTable('#example');
</script>
@endpush