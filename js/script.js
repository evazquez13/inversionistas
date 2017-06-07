if (varjs=='en') {
	alertEn();
}else{
	alertEs();
}
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

$(document).on('ready',function() {

	pantalla();
	function pantalla(){
	  pant = $(window).width();
	  // console.info( 'la pantalla mide ' + pant + 'px' );
	  if(pant < 993){
	  	$('.fondo').css("height",'auto');
        $('.separador').css("text-align",'center'); 
        $('.margenA').css("margin-left",'0px'); 
         
	  }
	  else{
	  	$('.fondo').css("height",'240');
		$('.separador').css("text-align",'left');	 	
	  }
	  if (pant < 769) {
	  	$('.lista-redes').css('marginLeft','-30px');
        $('.margenA').css("margin-left",'20px');    
	  	$('.menu-mobile .col-xs-2 img').css('float','right');
        $('.btn-upper-space').css('margin-top','14.8px');
        $('.btn-lower-space').css('margin-top','89.7px');
        $('.left-credencial').css('margin-left','30px');
        $('.right-credencial').css('margin-right','30px');
        $('.credenciales p').css("font-size",'12px');
          
	  }else{
	  	$('.lista-redes').css('marginLeft','-12px');
	  	$('.credenciales p').css("font-size",'14px');
        $('.margenB').css("margin-left",'14px'); 
	  }
	}

$(window).resize(
  	function(){
  		pantalla();
  	})
});

