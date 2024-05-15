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
            <h1>Galeri</h1>
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
                                        <th>Nama</th>
                                        <th>Tanggal</th>
                                        <th>Ulasan</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Tiger Nixon</td>
                                        <td>2011-04-25</td>
                                        <td>61</td>
                                        <td>$320,800</td>
                                    </tr>
                                    <tr>
                                        <td>Garrett Winters</td>
                                        <td>2011-07-25</td>
                                        <td>63</td>
                                        <td>$170,750</td>
                                    </tr>
                                    <tr>
                                        <td>Donna Snider</td>
                                        <td>2011-01-25</td>
                                        <td>27</td>
                                        <td>$112,000</td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Nama</th>
                                        <th>Tanggal</th>
                                        <th>Ulasan</th>
                                        <th>Aksi</th>
                                    </tr>
                                </tfoot>
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