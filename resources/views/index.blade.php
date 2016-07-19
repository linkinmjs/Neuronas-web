@extends('layout.main-navbar')

@section('contenido')

	<div id='div2'>
		<div>
			<img id='titulo' src="{{ asset('images/Neurona_font.png') }}">
		</div>
	</div>

	<div id='div3'>
		<div class="container" id='contenido'>
			<div class="row">
				<div class="col-md-8">

					@include('partial/bloquesEvento')

				</div>
				<div class="col-md-4">
					@for ($i = 0; $i < 100; $i++)
					Hola soy una foto {{ $i }}
					<br>
					@endfor
				</div>
			</div>
		</div>
	</div>
@endsection



