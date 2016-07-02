@extends('layout.main-navbar')

@section('contenido')

	@include('partial/errores')

	@if($errors->any())
		<h4>{{$errors->first()}}</h4>
	@endif

	<div class='row'>
		<div class='col-md-4 col-md-offset-4'>

			<form id='formGroup' role="form" method='POST' action="{{ url('eventos') }}">
				{!! csrf_field() !!}

				<div>
					<h1 id='subtitulo'>Eventos</h1>
				</div>

				<br>

				<div class="input-group">
					<span class="input-group-addon" id="basic-addon1"><span class='glyphicon glyphicon-bullhorn'></span></span>
					<input name="nombre" type="text" class="form-control" placeholder="Nombre..." aria-describedby="basic-addon1" value="{{old('nombre')}}">
				</div>

				<br>

				<div class="input-group">
					<span class="input-group-addon" id="basic-addon1"><span class='glyphicon glyphicon-align-left'></span></span>
					<textarea name="descripcion" class="form-control" rows="10" placeholder="Descripcion..." aria-describedby="basic-addon1" value="{{old('descripcion')}}"></textarea>
				</div>

				<br>

				<div class="input-group">
					<span class="input-group-addon" id="basic-addon1"><span class='glyphicon glyphicon-calendar'></span></span>
					<input name="fecha" id="datepicker" type="text" class="form-control" placeholder="Fecha" aria-describedby="basic-addon1">
					<select class="form-control" name="hora">
					@for ($i = 0; $i < 25; $i++)
					<option>{{ $i }} Horas</option>
					@endfor
					</select>
				</div>

				<br>

				<div class="form-group">
					<label for="exampleInputFile">Flyer</label>
					<input type="file" id="exampleInputFile">
					<p class="help-block">Ingrese el archivo formato JPG del evento</p>
				</div>				
				
				<br>

				<button type="submit" class="btn btn-warning">Confirmar evento</button>

			</form>


		</div>
	</div>

@endsection