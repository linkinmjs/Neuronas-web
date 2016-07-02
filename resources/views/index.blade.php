@extends('layout.main-navbar')

@section('contenido')

	<div id='div2'>
	<div>
		<img id='titulo' src="images/neurona_font.png">
	</div>
	</div>

	<div id='div3'>
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
	</div>
@endsection



