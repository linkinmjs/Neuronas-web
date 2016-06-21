$(document).ready(function() {
	
	$("#titulo2").effect("bounce", "slow");
	
	$( "#datepicker" ).datepicker({
		format:"dd.mm.yyyy",
		lenguage:"es"
	}).click(function () { 
		$(this).focus(); 
	});


	// shift + N para mostrar alerta de logueo
	// agregar logueo

	$(document).bind('keypress', function(event) {
		if( event.which === 78 && event.shiftKey ) {
			$( "#secreto" ).toggle();;
		}
	});

});

