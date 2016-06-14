	<h1>HERRORES</h1>

	@if(! $errors->isEmpty())
		<div class='alert alert-danger'>
			<p><strong>Oooops!</strong> Por favor corrija los siguientes errores: </p>
			<ul>
				@foreach($errors->all() as $error)
				<li>{{ $error }}</li>
				@endforeach
			</ul>
		</div>
		
	@endif