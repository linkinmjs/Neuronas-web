$(document).ready(function() {
	
	// $("#titulo2").effect("bounce", "slow");
	
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

	// $('#div1').css('display', 'block').delay(10000);
	// $('#div3').css('display', 'block');

	setTimeout(function(){
			$('#div1').css('display', 'block');
			$('body').css('background-image', 'url("images/ciudad2.png")')
		}, 2000);
	setTimeout(function(){
			$('#div2').css('display', 'block');
			$("#div2").effect("bounce", "slow");
		}, 3500);
	// setTimeout(function(){
	// 		$('#div3').css('display', 'block');
	// 	}, 4000);			



});

