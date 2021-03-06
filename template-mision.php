<?php
/*
Template Name: Template-mision
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
    		<div class="hidden-xs item <?php if($i == 0) {echo 'active';} ?>" style="background-image: url('<?php the_sub_field('imagen'); ?>');height: 480px;width: 100%;background-size: cover;">
  		<div class="container">
  			<div class="col-md-6 col-sm-6 col-xs-12" style="padding-top: 70px;">
		            <div class="banner-msn">
						<div class="row tt">
							<div class="col-md-10 col-sm-10 col-xs-10">
								<h3><?php the_sub_field('titulo'); ?></h3>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12 col-sm-12 col-xs-12 tt2">
								<p><?php the_sub_field('descripcion'); ?></p>
							</div>
						</div>
						<div class="row tt3">
							<div class="col-md-7 col-sm-7 col-xs-7 text-left">
								<? if (get_sub_field('url-boton')) { ?>
								<a href="<?php the_sub_field('url-boton'); ?>"><button type="button" class="btn btn-info"><?php the_sub_field('texto-boton') ?></button></a>
								<?php } ?>
							</div>
						</div>
		    		</div>
		      </div>
  		</div>
  	</div>
	<div class="visible-xs">
  		<img class="img-responsive" src="<?php the_sub_field('imagen'); ?>">
	  	<div class="container">
	  		<div class="row sec-index-mov">
				<div class="col-xs-12 text-center">
					<h2><?php the_sub_field('titulo'); ?></h2>
				</div>
			</div>
			<div class="row sec-index-mov">
				<div class="col-xs-12 text-center">
					<p><?php the_sub_field('descripcion'); ?></p>
				</div>
			</div>
			<div class="row text-center">
				<div class="col-xs-12 text-center">
					<? if (get_sub_field('url-boton')) { ?>
								<a href="<?php the_sub_field('url-boton'); ?>"><button type="button" class="btn btn-info"><?php the_sub_field('texto-boton') ?></button></a>
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

   			<li data-target="#carousel-example-generic" data-slide-to="<?php echo $j; ?>" <?php if ($j == 0) {echo " class='active' ";} ?> ></li> 

	<?php } ?>
  </ol>
<?php } } ?>

</div>

<div class="container mision containerBBVA">
		<div class="row">
			<div class="col-md-12 text-left-sm text-center-xs"> <h1><?php echo get_field('titulosecmision'); ?></h1></div>
		</div>
		<div class="space"></div>
		<div class="row">
			<div class="col-md-12 "><p><?php echo get_field('mision') ?></p>
			</div>

		</div>
</div>
		<div class="container containerBBVA">
		<div class="row">
			<?php
			// check if the repeater field has rows of data
			if( have_rows('lista') ):
				// loop through the rows of data¡
				while ( have_rows('lista') ) : the_row();			
		?>
		<!-- Lista de iconos  -->
		<div class="container mision containerBBVA">
			<ul>
			<li>
			<div class="col-sm-11 col-md-11">
			<?php the_sub_field('texto-lista')?>
			</div>
			</li>
			</ul>
		</div>
		
			<!-- Termina lista -->

			<?php
						endwhile;
							endif;
					?>
		</div>
		</div>
			<div class="space"></div>


<?php if (get_field ('interes')) {?>
<div class="infoInteres">
	<div class="container containerBBVA" style="margin-bottom: 0px;">
	<div class="space2"></div>
		<div class="row">
			<div class="col-md-12 text-center">		
					<?php if($tituloSecInfo){ ?>
				<h1><?php echo $tituloSecInfo; ?></h1>
			</div>
			<?php } ?>
		</div>
		<div class="space"></div>
		
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
		
		<div class="space"></div>
	</div>
</div>
<?php }

get_footer(); 
?>
