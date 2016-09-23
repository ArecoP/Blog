<!-- REVISAR DOCUMENTACION DE LARAVEL COLLECTIVE -->
@extends('admin.template.main')

@section('title', 'Editar usuario ' . $user->name)

@section('content')

	{!! Form::open(['route' => ['admin.users.update', $user], 'method' => 'PUT']) !!}

	<div class="form-control-static">

		<div class="form-group">
			{!! Form::label('name', 'Nombre') !!}
			{!! Form::text('name',$user->name, ['class' => 'form-control', 'placeholder' => 'Nombre completo', 'required']) !!}

		</div>

		<div class="form-group">
			{!! Form::label('email', 'Correo Electronico') !!}
			{!! Form::text('email',$user->email, ['class' => 'form-control', 'placeholder' => 'example@gmail.com', 'required']) !!}

		

		<!-- CORREGIR PARA REGISTRAR COMO MIEMBRO Y ADMINISTRADOR -->

		<div class="form-group">

		{!! Form::label('type', 'Tipo') !!}
		{!! Form::select('type', ['' => 'Seleccionar..', 'member' => 'Miembro', 'admin' => 'Administrador'], null, ['class' => 'form-control']) !!}

		</div>

		<div class="form-panel">

		{!! Form::submit('Guardar cambios', ['class' => 'btn btn-primary']) !!}

		</div>


</div>


	{!! Form::close() !!}
@endsection