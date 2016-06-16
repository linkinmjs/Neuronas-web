@extends('layout.main-navbar')

@section('contenido')
<!-- 	<div>
		<h1 id='titulo'>NEURONAS<small id='subtitulo'> Reggae</small></h1>
	</div> -->
	<div>
		<img id='titulo2' src="images/neurona_font.png">
	</div>

	<div class="container" id='contenido'>
		<div class="row">
			<div class="col-md-8">
				@for ($i = 0; $i < 100; $i++)
				Hola soy un flyer {{ $i }}
				<br>
				@endfor
			</div>			
			<div class="col-md-4">
				@for ($i = 0; $i < 100; $i++)
				Hola soy una foto {{ $i }}
				<br>
				@endfor
			</div>
		</div>
	</div>
@endsection



