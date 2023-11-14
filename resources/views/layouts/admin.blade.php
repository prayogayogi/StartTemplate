<!doctype html>
<html lang="en">

<head>
	<!-- META DATA -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="author" content="ginktech">
    <meta name="keywords" content="">

	<!--favicon-->
	<link rel="icon" href="{{ asset('assets/backend/images/favicon-32x32.png') }}" type="image/png" />

	@stack('before-style')
		<!--plugins-->
		<link href="{{ asset('assets/backend/plugins/simplebar/css/simplebar.css') }}" rel="stylesheet" />
		<link href="{{ asset('assets/backend/plugins/perfect-scrollbar/css/perfect-scrollbar.css') }}" rel="stylesheet" />
		<link href="{{ asset('assets/backend/plugins/metismenu/css/metisMenu.min.css') }}" rel="stylesheet" />
		<link href="{{ asset('assets/backend/plugins/datatable/css/dataTables.bootstrap5.min.css') }}" rel="stylesheet" />

		<!-- loader-->
		<link href="{{ asset('assets/backend/css/pace.min.css') }}" rel="stylesheet" />
		<script src="{{ asset('assets/backend/js/pace.min.js') }}"></script>

		<!-- Bootstrap CSS -->
		<link href="{{ asset('assets/backend/css/bootstrap.min.css') }}" rel="stylesheet">
		<link href="{{ asset('assets/backend/css/bootstrap-extended.css') }}" rel="stylesheet">
		<link href="{{ asset('assets/backend/css/app.css') }}" rel="stylesheet">
		<link href="{{ asset('assets/backend/css/icons.css') }}" rel="stylesheet">

		<!-- Theme Style CSS -->
		<link rel="stylesheet" href="{{ asset('assets/backend/css/dark-theme.css') }}" />
		<link rel="stylesheet" href="{{ asset('assets/backend/css/semi-dark.css') }}" />
		<link rel="stylesheet" href="{{ asset('assets/backend/css/header-colors.css') }}" />
	@stack('after-style')
	
	<title>{{ $title ?? "" }} | {{ config('app.name') }}</title>
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
		<script src="{{ asset('assets/backend/js/bootstrap.bundle.min.js') }}"></script>
		<!--plugins-->
		<script src="{{ asset('assets/backend/js/jquery.min.js') }}"></script>
		<script src="{{ asset('assets/backend/plugins/simplebar/js/simplebar.min.js') }}"></script>
		<script src="{{ asset('assets/backend/plugins/metismenu/js/metisMenu.min.js') }}"></script>
		<script src="{{ asset('assets/backend/plugins/perfect-scrollbar/js/perfect-scrollbar.js') }}"></script>
		<script src="{{ asset('assets/backend/plugins/apexcharts-bundle/js/apexcharts.min.js') }}"></script>
		{{-- <script src="{{ asset('assets/backend/plugins/datatable/js/jquery.dataTables.min.js') }}"></script> --}}
		{{-- <script src="{{ asset('assets/backend/plugins/datatable/js/dataTables.bootstrap5.min.js') }}"></script> --}}
		<script src="{{ asset('assets/backend/js/index.js') }}"></script>
		{{-- <script src="{{ asset('assets/backend/js/table-datatable.js') }}"></script> --}}
		<!--app JS-->
		<script src="{{ asset('assets/backend/js/app.js') }}"></script>
	@stack('after-script')
	
</body>

</html>