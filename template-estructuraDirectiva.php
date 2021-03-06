<?php
/*
Template Name: templete-estructuraDirectiva
*/
get_header(); 
?>

    <?php 
    $boton=get_sub_field('boton');
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
                                <?php if (get_sub_field('botonurl')) {?>
                                <div class="row tt3">
                                    <div class="col-md-7 col-sm-7 col-xs-7 text-left">
                                        <a href="<?php the_sub_field('botonurl'); ?>"><button type="button" class="btn btn-info"><?php the_sub_field('boton'); ?></button></a>
                                    </div>
                                </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="visible-xs">
                    <img class="img-responsive" src="<?php the_sub_field('imag-1'); ?>"/>
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
                                <?php if (get_sub_field('botonurl')) {?>
                                <div class="tt">
                                    <div class="text-center">
                                        <a href="<?php the_sub_field('botonurl'); ?>"><button type="button" class="btn btn-info"><?php the_sub_field('boton'); ?></button></a>
                                    </div>
                                </div>
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


<?php if(get_field('headerestructuradirectiva')){ ?>
    <div class="space"></div>
        <div class="container estructura-directiva containerBBVA">
            <div class="row">
                <div class="col-md-12 text-left-sm text-center-xs header-directivo directorG ">
                    <h1><?php echo get_field('headerestructuradirectiva');?></h1>
                </div>
            </div>
        </div>
    <div class="space"></div>

    <div class="container containerBBVA" style="margin-bottom: 0px;">
            <div class="row  ">
                <div class="col-md-12 col-sm-12 col-xs-12">     
                     
                            <div class="col-md-4 col-sm-4" style="padding-right: 0px;"> 
                            <div class="col-sm-12 col-md-12 col-xs-12 tarjetaDg"> 
                                <h3 class="directorG">
                                    <?php the_field('nombredg'); ?>
                              </h3>
                              <h4 class="cargoDirector">
                                    <?php the_field('cargodg'); ?>
                              </h4>
                            </div>
                              
                            </div>
                            <div class="col-md-2 col-sm-2 hidden-xs" style="background-image:url('http://ec2-52-50-46-136.eu-west-1.compute.amazonaws.com/wp-content/uploads/2017/07/lineaAzul.png'); background-size: cover; background-position: right;height: 3px;margin-top: 100px;"></div>
                            <div class="col-md-4 col-sm-4" style="margin-top: 30px; padding-left: 0px;">
                            <div class="col-md-12 col-sm-12 col-xs-12 tarjetaDg">
                                    <h3 class="directorG">
                                        <?php the_field('nombredg1'); ?>
                                  </h3>
                                  <h4 class="cargoDirector">
                                        <?php the_field('cargodg1'); ?>
                                  </h4>
                             </div>
                               
                            </div>        
                </div>
            </div>
        </div>
<?php } ?>


<?php  if(get_field('equipodirectivo')): ?>
    <div class="space"></div>
            <div class="container containerBBVA">
                <div class="row">
                    <div class="col-md-4 col-sm-4 col-md-offset-2 col-sm-offset-2 hidden-xs" style="background-image:url('http://ec2-52-50-46-136.eu-west-1.compute.amazonaws.com/wp-content/uploads/2017/07/lineaAzul.png');background-position: center;height: 3px;transform: rotate(90deg);width: 131px;margin-bottom: 31px;margin-top: -13px;"></div>
                </div>
    </div>

    <div class="container bordeEstruc containerBBVA" style="margin-top: 0px;">
        <div class="col-md-12 header-equipo-directivo text-left-sm text-center-xs">
                        <h1> <?php echo get_field('headerequipodirectivo');?> </h1>
                    </div>
        <?php  if( have_rows('equipodirectivo') ): ?>
            <?php $m=0; $c=0; $i=0;?>
            <?php
                function isMobile() {
            return        preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $_SERVER["HTTP_USER_AGENT"]);
        }
            ?>

   <!--          <?php  while ( have_rows('equipodirectivo') ) : the_row(); ?>
                <?php $m++; ?>
            <?php endwhile ?>
 -->
            <?php if (isMobile() ) : ?><!--Not-isMobileIf -->                                                               
                    <?php  while ( have_rows('equipodirectivo') ) : the_row(); ?>
                        <?php if (($i%2) == 0) { echo "<div class='row'>";  } ?>      
                            <div class="col-md-6 col-sm-6 col-xs-12 ">
                            <div class="col-sm-12 col-xs-12 col-md-12 updown-ed">
                                <h3 class="nombre-equipo-directivo"> <?php the_sub_field('nombredirectivo'); ?> </h3>
                                <h4 class="cargo-equipo-directivo"> <?php the_sub_field('cargodirectivo'); ?> </h4>
                            </div>
                                
                                <?php $c++;?>
                            </div>
                            <?php if (  ( ($i%2) != 0 ) ) { echo "</div>";   } ?>
                            <?php $i++; ?>    
                    <?php endwhile ?>
                 <!--    <?php if($c==$m){echo "</div>"; }?>     --> 
               <?php endif ?>

               <!--Not-isMobileIf -->             
              <?php if (!(isMobile() )) : ?>                                                                
                    <?php  while ( have_rows('equipodirectivo') ) : the_row(); ?>
                            <?php if (($i%3) == 0) { echo "<div class='row'>";  } ?>      
                                <div class="col-md-4 col-sm-4 col-xs-12">
                                <div class="col-md-12 col-sm-12 updown-ed">
                                    <h3 class="nombre-equipo-directivo"> <?php the_sub_field('nombredirectivo'); ?> </h3>
                                      <h4 class="cargo-equipo-directivo"> <?php the_sub_field('cargodirectivo'); ?> </h4>
                                </div>
                               
                                      <?php $c++; ?>
                                </div>
                            <?php if (  ( ($i%3) != 0 ) && ($c%3==0) ) { echo "</div>";   } ?>
                            <?php $i++; ?>    
                    <?php endwhile ?>
                    <?php { echo "</div>";   } ?>   
                    <?php endif ?><!--!isMobileIf -->         
              <?php endif ?> <!--TopIf -->
    </div>
<?php endif ?>


 <!--Sección Interés --> 
 <?php if (get_field('interes')) {?>
 <div class="infoInteres">
	<div class="container containerBBVA" style="margin-bottom: 0px;">
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