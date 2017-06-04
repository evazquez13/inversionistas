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
			while ( have_rows('banner') ) : the_row();
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

    <?php 
if($contacto !=''){ 
	?>

    <div class="space"></div>
    <div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 contactanos text-left-sm text-center-xs">
                    <h1>
                        <?php echo get_field('textocontacto');?>
                    </h1>
                </div>
            </div>
        </div>
    </div>
    <div class="space"></div>
    <div>
        <div class="container">
            <div class="row row-end ">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <?php
					// check if the repeater field has rows of data
					if( have_rows('contacto') ):
						// loop through the rows of data
						while ( have_rows('contacto') ) : the_row();			
				?>
                       
                        <div class="col-md-4 col-sm-6 col-xs-12 ">
                            <div class="row ">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-12 text-left-md text-center-xs">
                                            <img class="img-circle" src="<?php the_sub_field('img-contacto'); ?>" alt="" height="150" width="150">
                                        </div>
                                    </div>
                                    <div class="row">
                                       
                                        <div class="col-md-12 ">
                                            <div class="row">
                                                <div class="col-md-10 nombre-contacto">
                                                    <h3>
                                                        <?php the_sub_field('nombre'); ?>
                                                    </h3>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-10 ">
                                                    <h4>
                                                        <?php the_sub_field('cargo'); ?>
                                                    </h4>
                                                </div>
                                            </div>
                                            <div class="row ">
                                                <div class="col-md-12 col-sm-12 ">
                                                    <p>
                                                        <?php the_sub_field('correo'); ?> </p>
                                                </div>
                                            </div>
                                            <div class="col-md-9 col-sm-9 col-xs-9 ">
                                                    <h5>
                                                        <?php the_sub_field('telefono'); ?>
                                                    </h5>
                                            </div>
                                            
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
					endwhile;
					endif;
				?>
                </div>
            </div>
        </div>
    </div>

    <?php } ?>


    <div class="space"></div>
    <div class="infoInteres">
        <div class="container">
            <div class="space2"></div>
            <div class="row">
                <?php if (get_field('titulo-sec-3')) {?>
                <div class="col-md-12 text-center">
                    <h1>
                        <?php echo $tituloSec3 ?>
                    </h1>
                </div>
                <?php } ?>
            </div>
            <div class="space"></div>
            <?php if (get_field ('interes')) {?>
            <div class="row">
                <?php
			// check if the repeater field has rows of data
			if( have_rows('interes') ):
				// loop through the rows of data
				while ( have_rows('interes') ) : the_row();			
		?>
                    <div class="col-md-6 col-sm-6 col-xs-12 relleno2">
                        <div class="col-md-12 col-sm-12 col-xs-12 borde" style="background:url('<?php the_sub_field('fondo'); ?>'); background-size: cover; height: 303px;">
                            <img src="<?php the_sub_field('sobres'); ?>" alt="" class="img-responsive isobres">
                        </div>
                        <div class="col-md-12 col-sm-12 col-xs-12 fondoBlanco borde">
                            <div class="col-md-9">
                                <div class="space"></div>
                                <p>
                                    <?php the_sub_field('titulo'); ?>
                                </p>
                                <div class="space"></div>
                                <?php if (get_sub_field('url')) {?>
                                <a href="<?php the_sub_field('url'); ?>">
                                    <?php echo the_sub_field('subtexto3') ?> </a>
                                <?php } ?>



                            </div>
                        </div>
                    </div>
                    <?php
						endwhile;
							endif;
					?>
            </div>
            <div class="space"></div>
        </div>
    </div>
    <?php } ?>

    <?php
get_footer(); 
?>