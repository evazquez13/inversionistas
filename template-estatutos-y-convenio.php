<?php
/*
Template Name: Template-Estatutos-Convenios
*/
get_header(); 
?>

<?php 
	$campo = get_field('campo-html');
	$tituloSecInfo = get_field('titulosecinfo');
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
			while ( have_rows('banner')  && $i==0 ) : the_row();
			?>
    		<div class="hidden-xs item <?php if($i == 0) {echo 'active';} ?>" style="background-image: url('<?php the_sub_field('imag-1'); ?>');height: 480px;width: 100%;background-size: cover;">
  		<div class="container">
  			<div class="col-md-6 col-sm-6 col-xs-12" style="padding-top: 70px;">
		            <div class="banner-msn">
						<div class="row tt">
							<div class="col-md-10 col-sm-10 col-xs-10">
								<h3><?php the_sub_field('titulo-1'); ?></h3>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12 col-sm-12 col-xs-12 tt2">
								<p><?php the_sub_field('introduccion'); ?></p>
							</div>
						</div>
						<?php $boton = get_sub_field('boton');
						if($boton !=''){ ?>
						<div class="row tt3">
							<div class="col-md-7 col-sm-7 col-xs-7 text-left">
								<? if (get_sub_field('boton')) { ?>
								<a href="<?php the_sub_field('boton'); ?>"><button type="button" class="btn btn-info"><?php the_sub_field('texto-boton') ?></button></a>
								<?php } ?>
							</div>
						</div>
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
					<h2><?php the_sub_field('titulo-1'); ?></h2>
				</div>
			</div>
			<div class="row sec-index-mov">
				<div class="col-xs-12 text-center">
					<p><?php the_sub_field('introduccion'); ?></p>
				</div>
			</div>
			<?php $boton = get_sub_field('boton');
						if($boton !=''){ ?>
			<div class="row text-center">
				<div class="col-xs-12 text-center">
					<? if (get_sub_field('boton')) { ?>
								<a href="<?php the_sub_field('boton'); ?>"><button type="button" class="btn btn-info"><?php the_sub_field('texto-boton') ?></button></a>
								<?php } ?>
				</div>
			</div>
			<?php } ?>
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

   			<li data-target="#carousel-example-generic" data-slide-to="<?php echo $j; ?>" <?php if ($j == 0) {echo " class='active' ";} ?> ></li> 

	<?php } ?>
  </ol>
<?php } } ?>

</div>

<!-- Contenido -->
<div class="container estatSociales" >
		<div class="row">
			<div class="col-md-12 text-left-sm text-center-xs"> <h1><?php echo get_field('titulo1'); ?></h1></div>
		</div>
		<div class="space"></div>
		<div class="row">
			<div class="col-md-12 "><p><?php echo get_field('mensajeadobe') ?><span><a href="<?php echo get_field('urladobe') ?>" target="_BLANK"><?php echo get_field('textourladobe') ?></a></span></p></div>
		</div>

		<div class="container estatSociales">
		<div class="row">
			<?php
			$i =0;
			// check if the repeater field has rows of data
			if( have_rows('seccion-pdf') ):
				// loop through the rows of data¡
				while ( have_rows('seccion-pdf') ) : the_row();			
		?>
		<?php if (($i%2) != 0) {
			echo "<div class='row margin' style='margin: 0px'>";
		}
		?>
			<div class = "col-md-6 col-sm-6 col-xs-12 ">
				<div class="col-md-12 col-sm-12 col-xs-12 fondoBlanco">
						<div class="space"></div>				
						<h3><?php the_sub_field('titulo'); ?></h3>
						<!--  -->
				<?php if (have_rows('seleccion-pdf')) :
						while (have_rows('seleccion-pdf')) : the_row();
				 ?>
				 <div class="col-xs-12 col-md-12 col-sm-12 parrafoBold2">
				 <p><?php the_sub_field('subtitulo') ?></p>
				 	<div class="row">
				 		<div class="col-sm-1 col-md-1 col-xs-1 columnaIcono"><a href="<?php the_sub_field('url-pdf') ?>" target="_BLANK"><img src="http://ec2-52-50-46-136.eu-west-1.compute.amazonaws.com/wp-content/uploads/2017/06/pdf_icon.png"></a> </div>
				 		<div class="col-xs-10 col-md-11 col-sm-10"><a href="<?php the_sub_field('url-pdf') ?>" target="_BLANK"><?php the_sub_field('nombre-pdf') ?></a></div>
				 	</div>
				 </div>
				 <?php
						endwhile;
							endif;
					?>
					<!--  -->
				</div>
			</div>	
			<?php
			if (($i%2) != 0) {
			echo "</div>";
		}
					$i++;
						endwhile;
							endif;
					?>
		</div>
		</div>
		<div class="space3"></div>
		</div>
			
			<!-- Fin Contenido -->

<?php if (get_field ('interes')) {?>
<div class="infoInteres">
	<div class="container">
	<div class="space2"></div>
		<div class="row">
			<div class="col-md-12 text-center">		
					<?php if($tituloSecInfo){ ?>
				<h1><?php echo $tituloSecInfo; ?></h1>
			</div>
			<?php } ?>
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
				<div class="col-md-12 col-sm-12 col-xs-12 borde" style="background:url('<?php the_sub_field('fondo'); ?>'); background-size: cover; height: 303px;">
				<img src="<?php the_sub_field('sobres'); ?>" alt="" class="img-responsive isobres">
				</div>
				<div class="col-md-12 col-sm-12 col-xs-12 fondoBlanco borde">
					<div class="col-md-9">
						<div class="space"></div>
						<p><?php the_sub_field('titulo'); ?></p>
						<div class="space"></div>
						<?php if (get_sub_field('url')) {?>
							<a href="<?php the_sub_field('url'); ?>"><?php the_sub_field('textourl') ?></a>
						<?php } ?>
					</div>
				</div>
			</div>	
			<?php
						endwhile;
							endif;
					?>
		</div >
		<div class="space"></div>
	</div>
</div>
<?php }

get_footer(); 
?>
