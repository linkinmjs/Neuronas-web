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


<!-- 				@for ($i = 0; $i < 100; $i++)
				Hola soy un flyer {{ $i }}
				<br>
				@endfor -->

			@if (count($eventos) != 0)
				@foreach ( $eventos as $evento )
				<h1> {{ $evento->nombre }} </h1>
				@endforeach
			@else
				<h1> Ningun evento traido de DB </h1>
			@endif

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



