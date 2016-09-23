<!DOCTYPE html>
<html>
<head>
	<title>@yield('title', 'Default') | Panel de Administracion</title>
	<link rel="stylesheet" href="{{asset('plugins/bootstrap/css/bootstrap.css')}}">
</head>

<style type="text/css">
	
	body
	{
		background-image:url("{{ asset("header.jpg") }}") ;

		background-size: cover;

	}
	.panel-primary
		{
			“background-color: rgb(0,0,255); opacity: 0.9;”
		}
		.panel-body
		{
			background-color: silver;
		}

</style>

<body>
@include('admin.template.partials.nav')

	<section>
		

		@include('flash::message')
		@include('admin.template.partials.errors')
			<div class="container">

					<div class="panel panel-primary">
						  <div class="panel-heading">
						    <h3 class="panel-title">@yield('title')</h3>
						  </div>
						  <div class="panel-body">
						    @yield('content')
						  </div>
					</div>
						
					
				</section>
			</div>

	<script src="{{ asset('plugins/bootstrap/jquery/js/jquery-3.1.0.js') }}"></script>
	<script src="{{ asset('plugins/bootstrap/js/bootstrap.js') }}"></script>

</body>
</html>