	function alertEn(){
    $('#mensaje').html("<h1>This information is only in Spanish</h1>");
  }
  function alertEs(){
    $('#mensaje').html("<h1>Mensaje para idioma español</h1>");
  }
	function mostrarInstitucion(ins){
		$('.institucion').val($('option:first').val());
		console.info(ins.value);
			$('.anio, .insti , .institucion').css('display','none');
				$('#institucion'+ins.value).stop().delay(200).fadeIn();
	}
	function mostrarAnio(an1){
		$('.anio , .insti').val($('option:first').val());
	      $('.anio , .insti ').css('display','none');
				$('#anio'+an1.value).stop().delay(200).fadeIn();
		}
	function mostrarPdf(pdf){
		$('.insti').css('display','none');
			console.warn(pdf.value)	
					$('#insti'+pdf.value).stop().delay(300).fadeIn();
		}
	

$(document).on( 'ready' , function() {

	function pantalla(){
		pant = $(window).width();
		//console.info( 'la pantalla mide ' + pant + 'px' );
		if (pant <= 440) {

		}else{

		}
	  }

	$('.menuEnEs').on('click' , function(){
		$('.menuEnEs').removeClass('activado');
	$(this).addClass('activado');		
	})	
});
