<!DOCTYPE html>
<html>
<head>
	<title>@yield('title', 'Default') | Panel de Administracion</title>
	<link rel="stylesheet" href="{{asset('plugins/bootstrap/css/bootstrap.css')}}">
</head>
<body>
@include('admin.template.partials.nav')

	<section>
		
		@yield('content') 
	</section>
	


	<script src="{{ asset('plugins/bootstrap/jquery/js/jquery-3.1.0.js') }}"></script>
	<script src="{{ asset('plugins/bootstrap/js/bootstrap.js') }}"></script>

</body>
</html>