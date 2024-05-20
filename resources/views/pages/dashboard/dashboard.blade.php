@extends('layouts.dashboard')

@section('title')
Dashboard
@endsection

@push('addon-style')
<!-- Apexcharts  CSS -->
<link rel="stylesheet" href="/assets/dashboard/modules/apexcharts/apexcharts.css">
@endpush

@section('content')
<div class="content-start transition">
	<div class="container-fluid dashboard">
		<div class="content-header">
			<h1>Dashboard</h1>
			<p></p>
		</div>

		<div class="row">

			<div class="col-md-6 col-lg-6">
				<div class="card">
					<div class="card-body">
						<div class="row">
							<div class="col-4 d-flex align-items-center">
								<i class="fas fa-inbox icon-home bg-primary text-light"></i>
							</div>
							<div class="col-8">
								<p>Ulasan</p>
								<h5>{{ $jumlahUlasan }}</h5>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="col-md-6 col-lg-6">
				<div class="card">
					<div class="card-body">
						<div class="row">
							<div class="col-4 d-flex align-items-center">
								<i class="fas fa-clipboard-list icon-home bg-success text-light"></i>
							</div>
							<div class="col-8">
								<p>Galeri</p>
								<h5>{{ $jumlahGaleri }}</h5>
							</div>
						</div>
					</div>
				</div>
			</div>


			<div class="col-md-12">
				<div class="card">
					<div class="card-header">
						<h4>Ulasan Terbaru</h4>
					</div>
					<div class="card-body">
						<div class="table-responsive">
							<table class="table table-striped">
								<thead>
									<tr>
										<th scope="col" width="5%">No</th>
										<th scope="col" width="20%">Nama</th>
										<th scope="col">Ulasan</th>
										<th scope="col" width="17%">Tanggal</th>
									</tr>
								</thead>
								<tbody>
									@php
									$no = 1;
									@endphp
									@forelse ( $ulasans as $ulasan )
									<tr>
										<th scope="row">{{ $no++ }}</th>
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
							</table>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
</div>
@endsection

@push('addon-script')
<!-- Chart Js -->
<script src="/assets/dashboard/modules/apexcharts/apexcharts.js"></script>
<script src="/assets/dashboard/js/ui-apexcharts.js"></script>
@endpush