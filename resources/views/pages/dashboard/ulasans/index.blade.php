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
            <h1>Ulasan Pengunjung</h1>
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
                                        <th>No.</th>
                                        <th>Nama</th>
                                        <th>Ulasan</th>
                                        <th>Tanggal</th>
                                        {{-- <th>Aksi</th> --}}
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                    $no=1;
                                    @endphp
                                    @forelse ( $ulasans as $ulasan )
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $ulasan->nama }}</td>
                                        <td>{{ $ulasan->ulasan }}</td>
                                        <td>{{ $ulasan->created_at }}</td>
                                    </tr>
                                    @empty
                                    <tr>
                                        <td colspan="4" class="text-center">
                                            <h1>Belum Ada Ulasan</h1>
                                        </td>
                                    </tr>
                                    @endforelse
                                </tbody>
                                {{-- <tfoot>
                                    <tr>
                                        <th>No.</th>
                                        <th>Nama</th>
                                        <th>Ulasan</th>
                                        <th>Tanggal</th>
                                    </tr>
                                </tfoot> --}}
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div><!-- End Container-->
</div><!-- End Content-->
@endsection

@push('addon-script')
<script src="https://cdn.datatables.net/v/bs4/dt-2.0.7/r-3.0.2/datatables.min.js"></script>
<script>
    new DataTable('#example');
</script>
@endpush