<?php
/*
Template Name: templete-estructuraDirectiva
*/
get_header(); 
?>

    <?php 
    $directorgeneral= get_field('directorgeneral');
	$equipodirectivo = get_field('equipodirectivo');
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
    if(get_field('headerestructuradirectiva')){ ?>
    <div class="space"></div>
    <div>
        <div class="container estructura-directiva ">
            <div class="row">
                <div class="col-md-12 text-left-sm text-center-xs header-directivo directorG ">
                    <h1>
                        <?php echo get_field('headerestructuradirectiva');?>
                    </h1>
                </div>
            </div>
        </div>
    </div>
    <div class="space"></div>

    <div>
        <div class="container">
            <div class="row  ">
                <div class="col-md-12 col-sm-12 col-xs-12">     
                        <div class="col-md-12 col-sm-6 col-xs-12">
                            <div class="row ">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-12 text-left-sm text-center-xs">
                            
                                            <img class="img-circle" src="<?php the_field('imagendg'); ?>" alt="" height="150" width="150">
                                            
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 ">
                                            <div class="row">
                                                <div class="col-md-10 directorG">
                                                  
                                                    <h3>
                                                        <?php the_field('nombredg'); ?>
                                                    </h3>
                                                 
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-4 cargoDirector">
                                                   
                                                    <h4>
                                                        <?php the_field('cargodg'); ?>
                                                    </h4>
                                                  
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12 acercaDe">
                                                  
                                                    <h4>
                                                        <?php the_field('headerdg'); ?>
                                                    </h4>
                                                  
                                                </div>
                                            </div>
                                            <div class="row ">
                                                <div class="col-md-12 col-sm-12 text-justify infoDirector">
                                                   
                                                    <p> <?php the_field('infodg'); ?> </p>
                                             
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12 leer-m">
<<<<<<< HEAD
                                                   <?php if (get_sub_field('leermaslink')) {?>
                                                        <h4>
=======
                                                  <?php if( get_field('leermaslink') ){?>  
                                                    <h4>
>>>>>>> ebanos
                                                        <a href="<?php the_sub_field('leermaslink'); ?>">
                                                            <?php the_field('leermasdg'); ?>
                                                        </a>
                                                   <?php } ?>    
                                                    </h4>
                                                  <?php } ?>    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                     </div>
                </div>
            </div>
        </div>
    </div>
    <?php } ?>


    <?php 
    if($equipodirectivo !=''){ ?>
    <div class="space"></div>
    <div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 equipoDir text-left-sm text-center-xs">
                    <h1>
                        <?php echo get_field('headerequipodirectivo');?>
                    </h1>
                </div>
            </div>
        </div>
    </div>
        <div class="container ">
            <div class="row ">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <?php
                    $i=0;
					// check if the repeater field has rows of data
					if( have_rows('equipodirectivo') ):
						// loop through the rows of data
						while ( have_rows('equipodirectivo') ) : the_row();			
				?>
                       <?php    
                       if(($i%2) !=0){
                        echo "<div class='row'>";
                       }
                       ?>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="row  ">
                                <div class="col-md-12 ">
                                    <div class="col-md-12 contacto text-left-sm text-center-xs">
                                        <img class="img-circle" src="<?php the_sub_field('imagendirectivo'); ?>" alt="" height="150" width="150">
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 nombreDir">
                                            <div class="row">
                                                <div class="col-md-10 nombreDir">
                                                    <h3>
                                                        <?php the_sub_field('nombredirectivo'); ?>
                                                    </h3>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-12 cargoDirectivo">
                                                    <h4>
                                                        <?php the_sub_field('cargodirectivo'); ?>
                                                    </h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                    if(($i%2) !=0){
                        echo "</div>";
                       }
                       $i++;
					endwhile;
					endif;
				?>
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