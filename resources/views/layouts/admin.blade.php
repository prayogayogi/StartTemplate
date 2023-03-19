<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!--favicon-->
	<link rel="icon" href="{{ asset('assets/assets/images/favicon-32x32.png') }}" type="image/png" />
	@stack('before-style')
		<!--plugins-->
		<link href="{{ asset('assets/assets/plugins/simplebar/css/simplebar.css') }}" rel="stylesheet" />
		<link href="{{ asset('assets/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css') }}" rel="stylesheet" />
		<link href="{{ asset('assets/assets/plugins/metismenu/css/metisMenu.min.css') }}" rel="stylesheet" />
		<link href="{{ asset('assets/assets/plugins/datatable/css/dataTables.bootstrap5.min.css') }}" rel="stylesheet" />

		<!-- loader-->
		<link href="{{ asset('assets/assets/css/pace.min.css') }}" rel="stylesheet" />
		<script src="{{ asset('assets/assets/js/pace.min.js') }}"></script>

		<!-- Bootstrap CSS -->
		<link href="{{ asset('assets/assets/css/bootstrap.min.css') }}" rel="stylesheet">
		<link href="{{ asset('assets/assets/css/bootstrap-extended.css') }}" rel="stylesheet">
		<link href="{{ asset('assets/assets/css/app.css') }}" rel="stylesheet">
		<link href="{{ asset('assets/assets/css/icons.css') }}" rel="stylesheet">

		<!-- Theme Style CSS -->
		<link rel="stylesheet" href="{{ asset('assets/assets/css/dark-theme.css') }}" />
		<link rel="stylesheet" href="{{ asset('assets/assets/css/semi-dark.css') }}" />
		<link rel="stylesheet" href="{{ asset('assets/assets/css/header-colors.css') }}" />
	@stack('after-style')
	<title>{{ $title ?? 'E-Presensi' }}</title>
</head>

<body>
	<!--wrapper-->
	<div class="wrapper">

		<!--sidebar wrapper -->
			<x-sidebar />
		<!--end sidebar wrapper -->

		<!--start header -->
			<x-header />
		<!--end header -->

		<!--start page wrapper -->
			@yield('content')
		<!--end page wrapper -->

		<!--start overlay-->
			<div class="overlay toggle-icon"></div>
		<!--end overlay-->

		<!--Start Back To Top Button--> 
			<a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
		<!--End Back To Top Button-->

		<!--Start Footer--> 
		<footer class="page-footer">
			<p class="mb-0">Copyright © 2021. All right reserved dinas kominfo</p>
		</footer>
		<!--End Footer--> 

	</div>
	<!--end wrapper-->

	<!--start switcher-->
		<x-switch-wraper/>
	<!--end switcher-->

	@stack('before-script')
		<!-- Bootstrap JS -->
		<script src="{{ asset('assets/assets/js/bootstrap.bundle.min.js') }}"></script>
		<!--plugins-->
		<script src="{{ asset('assets/assets/js/jquery.min.js') }}"></script>
		<script src="{{ asset('assets/assets/plugins/simplebar/js/simplebar.min.js') }}"></script>
		<script src="{{ asset('assets/assets/plugins/metismenu/js/metisMenu.min.js') }}"></script>
		<script src="{{ asset('assets/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js') }}"></script>
		<script src="{{ asset('assets/assets/plugins/apexcharts-bundle/js/apexcharts.min.js') }}"></script>
		{{-- <script src="{{ asset('assets/assets/plugins/datatable/js/jquery.dataTables.min.js') }}"></script> --}}
		{{-- <script src="{{ asset('assets/assets/plugins/datatable/js/dataTables.bootstrap5.min.js') }}"></script> --}}
		<script src="{{ asset('assets/assets/js/index.js') }}"></script>
		{{-- <script src="{{ asset('assets/assets/js/table-datatable.js') }}"></script> --}}
		<!--app JS-->
		<script src="{{ asset('assets/assets/js/app.js') }}"></script>
	@stack('after-script')
	
</body>

</html>