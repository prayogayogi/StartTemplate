<!doctype html>
<html lang="en">

<head>
	@stack('start-style')
	
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--favicon-->
	<link rel="icon" href="{{ asset('assets/assets/images/favicon-32x32.png') }}" type="image/png" />
	<!--plugins-->
	<link href="{{ asset('assets/assets/plugins/simplebar/css/simplebar.css') }}" rel="stylesheet" />
	<link href="{{ asset('assets/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css') }}" rel="stylesheet" />
	<link href="{{ asset('assets/assets/plugins/metismenu/css/metisMenu.min.css') }}" rel="stylesheet" />
	<!-- loader-->
	<link href="{{ asset('assets/assets/css/pace.min.css') }}" rel="stylesheet" />
	<script src="{{ asset('assets/assets/js/pace.min.js') }}"></script>
	<!-- Bootstrap CSS -->
	<link href="{{ asset('assets/assets/css/bootstrap.min.css') }}" rel="stylesheet">
	<link href="{{ asset('assets/assets/css/bootstrap-extended.css') }}" rel="stylesheet">
	<link href="{{ asset('assets/assets/css/app.css') }}" rel="stylesheet">
	<link href="{{ asset('assets/assets/css/icons.css') }}" rel="stylesheet">
	<title>{{ $title ?? ''  }}</title>

	@stack('end-style')
</head>

<body class="bg-login">
	
	<!--wrapper-->
	<div class="wrapper">
		@yield('content')
	</div>
	<!--end wrapper-->

	@stack('start-script')
	
	<!-- Bootstrap JS -->
	<script src="{{ asset('assets/assets/js/bootstrap.bundle.min.js') }}"></script>

	<!--plugins-->
	<script src="{{ asset('assets/assets/js/jquery.min.js') }}"></script>
	<script src="{{ asset('assets/assets/plugins/simplebar/js/simplebar.min.js') }}"></script>
	<script src="{{ asset('assets/assets/plugins/metismenu/js/metisMenu.min.js') }}"></script>
	<script src="{{ asset('assets/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js') }}"></script>

	<!--app JS-->
	<script src="{{ asset('assets/assets/js/app.js') }}"></script>
	
	@stack('end-script')	
</body>

</html>
