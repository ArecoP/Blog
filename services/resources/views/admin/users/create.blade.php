<!-- REVISAR DOCUMENTACION DE LARAVEL COLLECTIVE -->
@extends('admin.template.main')

@section('title', 'Crear Usuario')

@section('content')



	{!! Form::open(['route' => 'admin.users.store', 'method' => 'POST']) !!}

	<div class="form-control-static">

		<div class="form-group">
			{!! Form::label('name', 'Nombre') !!}
			{!! Form::text('name',null, ['class' => 'form-control', 'placeholder' => 'Nombre completo', 'required']) !!}

		</div>

		<div class="form-group">
			{!! Form::label('email', 'Correo Electronico') !!}
			{!! Form::text('email',null, ['class' => 'form-control', 'placeholder' => 'example@gmail.com', 'required']) !!}

		</div>

			<div class="form-group">
			{!! Form::label('password', 'Contraseña') !!}
			{!! Form::password('password', ['class' => 'form-control', 'placeholder' => '***********', 'required']) !!}

		</div>

		<!-- CORREGIR PARA REGISTRAR COMO MIEMBRO Y ADMINISTRADOR -->

		<div class="form-group">

		{!! Form::label('type', 'Tipo') !!}
		{!! Form::select('type', ['' => 'Seleccionar..', 'member' => 'Miembro', 'admin' => 'Administrador'], null, ['class' => 'form-control']) !!}

		</div>

		<div class="form-panel">

		{!! Form::submit('Registar', ['class' => 'btn btn-primary']) !!}

		</div>


</div>


	{!! Form::close() !!}
@endsection