	function alertEn(){
    $('.espanol').html("<p>This information is only available in Spanish</p>");
    $('.ingles').html("<p></p>");
  }
  function alertEs(){
    $('.ingles').html("<p>Esta información solo está disponible en Inglés</p>");
    $('.espanol').html("<p></p>");
  }
	function mostrarInstitucion(ins){
		$('.institucion').val($('option:first').val());
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
					$('#insti'+pdf.value).stop().delay(300).fadeIn();
		}

$(document).on('ready', function() {

	function pantalla(){
	  pant = $(window).width();
	  // console.info( 'la pantalla mide ' + pant + 'px' );
	  if (pant <= 769) {
	  	$('.lista-redes').css('marginLeft','-30px');
	  }else{
	  	$('.lista-redes').css('marginLeft','-12px');
	  }
	}
$(window).resize(
  	function(){
  		pantalla();
  	})

	$('.menuEnEs').on('click' , function(){
		$('.menuEnEs').removeClass('activado');
	$(this).addClass('activado');		
	})
});
