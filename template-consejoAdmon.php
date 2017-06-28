<?php
/*
Template Name: templete-ConsejoAdmon
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
			while ( have_rows('banner') && $i==0 ) : the_row();
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


<?php  if(get_field('cabeceraconsejoadministracion')): ?>
    <div class="space"></div> 
            <div class="container">
                <h1 class="header-consejo text-left-sm text-center-xs"> <?php echo the_field('cabeceraconsejoadministracion');?> </h1>
                <p class="text-adobe text-left-sm text-center-xs text-justify"> <?php echo the_field('infoadobe');?> 
                    <?php if (get_field('urladobe')): ?>
				       <a href="<?php the_field('urladobe'); ?>" class="url-adobe" > 
				            <?php echo the_field('textolinkadobe');?> 
				       </a>
				    <?php endif ?> 
                </p>
            </div> 
<?php endif ?>                
           
<?php  if(get_field('bloqueca')){ ?>                     
            <div class="container">
                <?php  if( have_rows('bloqueca') ): ?>
                <?php  $i =0;?>
                  <?php  while ( have_rows('bloqueca') ) : the_row(); ?>
                     <?php if (($i%2) == 0) { echo "<div class='row margenA'>";} ?>
                        <div class="col-md-6 col-sm-6 col-xs-12 admon-separation">
                            <div class="row">
                              <h3 class="header-bloque"> <?php the_sub_field('titulobloque'); ?> </h3>
                              <p class="cuerpo-bloque text-left"> <?php the_sub_field('infobloque'); ?> </p>
                            </div>
                            <div class="row"> 
                              <?php if( have_rows('itembloque') ): ?>
                                    <?php while ( have_rows('itembloque') ) : the_row(); ?> 
                                     
                                      <div class="col-md-1 col-sm-1 col-xs-1 img-pdf"><!-- img-pdf-->
                                       <a href="<?php the_field('linkpdf'); ?>"> 
                                        <img src="http://ec2-52-50-46-136.eu-west-1.compute.amazonaws.com/wp-content/uploads/2017/06/pdf_icon.png">  
                                       </a>    
                                      </div>
                                      <div class="col-md-9 col-sm-9 col-xs-9 pdf-text-center"> <!--celda -->
                                       <a href="<?php the_field('linkpdf'); ?>"> 
                                        <h3 class="nombre-pdf" > <?php the_sub_field('textosubitem'); ?> </h3> 
                                       </a>        
                                      </div>
                                   
                                      
                                      
                                     <?php endwhile ?>
                              <?php endif ?>
                             </div> 
                          <?php if (($i%2) != 0){ echo "</div>"; } ?>  
                          
                        </div>  
                        <?php $i++; ?> 
                      <?php endwhile ?>
                <?php endif ?>    
            </div>
<?php } ?>


<!--Sección Interés --> 
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
	
		<?php
		if (get_field('interes')) {
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
	
	<div class="space"></div>
</div>
</div>
<?php get_footer(); ?>