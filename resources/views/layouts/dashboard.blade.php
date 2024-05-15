<!doctype html>
<html lang="en">

<head>

	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<title>@yield('title')</title>

	@include('includes.dashboard.header')
	@stack('addon-style')

</head>

<body>
	@include('sweetalert::alert')
	<!--Topbar -->
	@include('includes.dashboard.navbar')


	<!--Sidebar-->
	@include('includes.dashboard.sidebar')
	<!-- End Sidebar-->


	<div class="sidebar-overlay"></div>


	<!--Content Start-->
	@yield('content')

	<!-- Footer -->
	@include('includes.dashboard.footer')


	<!-- Preloader -->
	<div class="loader">
		<div class="spinner-border text-light" role="status">
			<span class="sr-only">Loading...</span>
		</div>
	</div>

	<!-- Loader -->
	<div class="loader-overlay"></div>

	@stack('prepend-script')
	@include('includes.dashboard.script')
	@stack('addon-script')
	<!-- Template JS File -->
	<script src="/assets/dashboard/js/script.js"></script>
	<script src="/assets/dashboard/js/custom.js"></script>
</body>

</html>