<?php
/*
Template Name: templete-Contacto
*/
get_header(); 
?>

    <?php 
	$contacto = get_field('contacto');
	$idioma = pll_current_language( 'slug' );
	$tituloSec3 = get_field('titulo-sec-3');
    $subUrl = get_field('subUrl');
    $subTexto3 = get_sub_field('subtexto3');
    $boton=get_sub_field('boton');
    $botonUrl=get_sub_field('botonUrl');
    $contactUs=get_field('textocontacto');
    
?>

    <!--  -->
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">

            <?php
	$i == 0;
	if (get_field('banner')) {
		
	
		// check if the repeater field has rows of data
		if( have_rows('banner') ):
			// loop through the rows of data
			while ( have_rows('banner') && $i==0  ) : the_row();
			?>
                <div class="hidden-xs item <?php if($i == 0) {echo 'active';} ?>" style="background-image: url('<?php the_sub_field('imag-1'); ?>');height: 480px;width: 100%;background-size: cover;">
                    <div class="container">
                        <div class="col-md-6 col-sm-6 col-xs-12" style="padding-top: 70px;">
                            <div class="banner-msn">
                                <div class="row tt">
                                    <div class="col-md-10 col-sm-10 col-xs-10">
                                        <h3>
                                            <?php the_sub_field('titulo-1'); ?>
                                        </h3>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12 tt2">
                                        <p>
                                            <?php the_sub_field('introduccion'); ?>
                                        </p>
                                    </div>
                                </div>
                                <?php $boton = get_sub_field('boton');
						if($boton !=''){ ?>
                                <?php if (get_sub_field('botonurl')) {?>
                                <div class="row tt3">
                                    <div class="col-md-7 col-sm-7 col-xs-7 text-left">   
                                        <a href="<?php the_sub_field('botonUrl'); ?>"><button type="button" class="btn btn-info"><?php the_sub_field('boton'); ?></button></a>
                                    </div>
                                </div>
                                <?php } ?>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="visible-xs">
                    <img class="img-responsive" src="<?php the_sub_field('imag-1'); ?>">
                    <div class="container">
                        <div class="row sec-index-mov">
                            <div class="col-xs-12 text-center">
                                <h2>
                                    <?php the_sub_field('titulo-1'); ?>
                                </h2>
                            </div>
                        </div>
                        <div class="row sec-index-mov">
                            <div class="col-xs-12 text-center">
                                <p>
                                    <?php the_sub_field('introduccion'); ?>
                                </p>
                                <?php $boton = get_sub_field('boton');
						if($boton !=''){ ?>
                                <?php if (get_sub_field('botonurl')) {?>
                                <div class="tt">
                                    <div class="text-center">
                                        <a href="<?php the_sub_field('botonUrl'); ?>"><button type="button" class="btn btn-info"><?php the_sub_field('boton'); ?></button></a>
                                    </div>
                                </div>
                                <?php } ?>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
                <?php 
		$i ++;
		endwhile;
		endif;
	?>

        </div>
        <?php if ($i!=1) { ?>
        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>

        <!-- Indicators -->
        <ol class="carousel-indicators">
            <?php for ($j=0; $j < $i ; $j++) { ?>

            <li data-target="#carousel-example-generic" data-slide-to="<?php echo $j; ?>" <?php if ($j==0 ) {echo " class='active' ";} ?> ></li>

            <?php } ?>
        </ol>
        <?php } } ?>

    </div>

   
   
   
   
   
   
<?php  if( get_field('textocontacto') ): ?>
    <div class="space"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 contactanos text-left-sm text-center-xs btn-lower-space">
                    <h1>
                        <?php echo get_field('textocontacto');?>
                    </h1>
                </div>
            </div>
        </div>
<?php endif ?>


<?php  if(get_field('contacto')){ ?>
    <div class="space"></div> <!--Study For later -->
            <div class="container">
                    
                <?php  if( have_rows('contacto') ): ?>
                        <?php $m=0; $c=0; $i=0;?>
                        <?php
                        function isMobile() {
    return        preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $_SERVER["HTTP_USER_AGENT"]);
}
                        ?>
                        
                        <?php  while ( have_rows('contacto') ) : the_row(); ?> <!--m contiene el número de rows del ACF -->
                            <?php $m++; ?>
                        <?php endwhile ?>
                        
                        
                        <?php if (isMobile() ) : ?>
                            <?php  while ( have_rows('contacto') ) : the_row(); ?>
                                 <?php if (($i%2) == 0) { echo "<div class='row'>";  } ?>
                                    <div class="col-md-6 col-sm-6 col-xs-12 mobile-top"> 
                                        <div class="text-left-sm text-center-xs">
                                             <img class="img-circle" src="<?php the_sub_field('img-contacto'); ?>" alt="" height="150" width="150">  
                                        </div>     
                                        <h3 class="nombre-contacto"> <?php the_sub_field('nombre'); ?> </h3>        
                                        <h3 class="info-contacto"> <?php the_sub_field('cargo'); ?> </h3>   
                                        <h3 class="correo-contacto"> <?php the_sub_field('correo'); ?> </h3>
                                        <div class="col-md-1 col-sm-1 col-xs-1 icon1">
                                            <img src="http://ec2-52-50-46-136.eu-west-1.compute.amazonaws.com/wp-content/uploads/2017/04/phone.png" alt="">
                                        </div>
                                        <div class="col-md-9 col-sm-9 col-xs-9 ">
                                            <h5 class="tel-contacto"><?php the_sub_field('telefono'); ?></h5>
                                        </div>
                                      <?php $c++; ?>
                                    </div> 
                              <?php if (  ( ($i%2) != 0 ) ) { echo "</div>";   } ?>
                              <?php $i++; ?>
                              <?php endwhile ?>
                              <?php if($c==$m){echo "</div>"; }?>   
                        <?php endif ?><!--If mobile -->
                        
                        
                        <?php if (!(isMobile() )) : ?>                                                                
                            <?php  while ( have_rows('contacto') ) : the_row(); ?>
                                    <?php if (($i%3) == 0) { echo "<div class='row'>";  } ?>      
                                     <div class="col-md-4 col-sm-4 col-xs-12  mobile-top"> <!--Usar solo sm-6  -->
                                        <div class="text-left-sm text-center-xs">
                                             <img class="img-circle" src="<?php the_sub_field('img-contacto'); ?>" alt="" height="150" width="150">  
                                        </div>     
                                        <h3 class="nombre-contacto"> <?php the_sub_field('nombre'); ?> </h3>        
                                        <h3 class="info-contacto"> <?php the_sub_field('cargo'); ?> </h3>   
                                        <h3 class="correo-contacto"> <?php the_sub_field('correo'); ?> </h3>
                                        <div class="col-md-1 col-sm-1 col-xs-1 icon1">
                                            <img src="http://ec2-52-50-46-136.eu-west-1.compute.amazonaws.com/wp-content/uploads/2017/04/phone.png" alt="">
                                        </div>
                                        <div class="col-md-9 col-sm-9 col-xs-9 ">
                                            <h5 class="tel-contacto"><?php the_sub_field('telefono'); ?></h5>
                                        </div>
                                      <?php $c++; ?>
                                    </div>          
                                    <?php if (  ( ($i%3) != 0 ) && ($c%3==0) ) { echo "</div>";   } ?>
                                    <?php $i++; ?>    
                            <?php endwhile ?>
                            <?php { echo "</div>";   } ?>   
                        <?php endif ?><!--!isMobileIf -->  
                 <?php endif ?>  <!--If Top -->
            </div>
<?php } ?>
<!--Sección Interés --> 
<?php if (get_field('interes')) {?>
 <div class="infoInteres">
	<div class="container">
	<div class="space2"></div>
		<div class="row">
			<div class="col-md-12 text-center">
				<?php if (get_field('titulo-sec-3')) {?>
				<h1><?php the_field('titulo-sec-3') ?></h1>
				<?php } ?>
			</div>
		</div>
		<div class="space"></div>
		<div class="row">
		<?php
			// check if the repeater field has rows of data
			if( have_rows('interes') ):
				// loop through the rows of data
				while ( have_rows('interes') ) : the_row();			
		?>
			<div class = "col-md-6 col-sm-6 col-xs-12 relleno2">
				<div class="col-md-12 col-sm-12 col-xs-12 borde" style="background:url('<?php the_sub_field('fondo'); ?>'); background-size: cover; height: 303px; background-position: right;">
				<img src="<?php the_sub_field('sobres'); ?>" alt="" class="img-responsive isobres">
				</div>
				<div class="col-md-12 col-sm-12 col-xs-12 fondoBlanco borde">
					<div class="col-md-9">
						<div class="space"></div>
						<p><?php the_sub_field('titulo'); ?></p>
						<div class="space"></div>
						<?php if (get_sub_field('url')) {?>
						<a href="<?php the_sub_field('url'); ?>"><?php the_sub_field('subtexto3'); ?></a>
						<?php } ?>
					</div>
				</div>
			</div>	
			<?php
						endwhile;
							endif;
				} ?>
	</div >
	<div class="space"></div>
</div>
</div>
<?php get_footer(); ?>