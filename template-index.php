<?php
/*
Template Name: template index
*/
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>

<?php 
	$img = get_field('row-img-1');
	$descripcion = get_field('descripcion');
	$urlBoton = get_field('url-boton');
	$textoBtn = get_field('texto-btn');
	$icon = get_field('iconos');
?>

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
  			<div class="col-md-6 col-sm-6" style="padding-top: 70px;">
		            <div class="banner-msn">
						<div class="row tt">
							<div class="col-md-10 col-sm-10">
								<h2><?php the_sub_field('titulo'); ?></h2>
							</div>
						</div>
						<div class="spacebanner"></div>
						<div class="row">
							<div class="col-md-12 col-sm-12 tt2">
								<p><?php the_sub_field('introduccion'); ?></p>
							</div>
						</div>
						<div class="spacebanner"></div>
						<div class="row tt3">
							<?php if (get_sub_field('boton')) {?>
							<div class="col-md-7 col-sm-7 col-xs-7 text-left">
								<a href="<?php the_sub_field('boton'); ?>"><button type="button" class="btn btn-info"><?php the_sub_field('texto-boton') ?></button></a>
							</div>
							<?php } ?>
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
					<p><?php the_sub_field('introduccion'); ?></p>
				</div>
			</div>
			<div class="row text-center">
				<div class="col-xs-12 text-center">
					<?php if (get_sub_field('boton')) {?>
					<div class="col-xs-12 text-center">
						<a href="<?php the_sub_field('boton'); ?>"><button type="button" class="btn btn-info"><?php the_sub_field('texto-boton') ?></button></a>
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

   			<li data-target="#carousel-example-generic" data-slide-to="<?php echo $j; ?>" <?php if ($j == 0) {echo " class='active' ";} ?> ></li> 

	<?php } ?>
  </ol>
<?php } } ?>


</div>
    
<!-- Parte iconos -->
<div class="iconos">
	<div class="container containerBBVA">
		<div class="space1"></div>
		<div class="row">
		<?php if (get_field('titulo-sec-2')) {?>
			<div class="col-md-12 text-center">
				<h1><?php the_field('titulo-sec-2'); ?></h1>
			</div>
		<?php } ?>
		</div>
		<div class="space"></div>
		<div class="row">
		<?php
			if (get_field('iconos')) {
			// check if the repeater field has rows of data
			if( have_rows('iconos') ):
				// loop through the rows of data
				while ( have_rows('iconos') ) : the_row();			
		?>
		<div class="space2"></div>
			<div class = "col-md-4 col-sm-4 col-xs-12 relleno2 text-center">
				<div class="col-md-12 col-sm-12 col-xs-12">
					<a href="<?php the_sub_field('linkurl'); ?>"><img src="<?php the_sub_field('imgicon'); ?>"></a>
					<div class="space"></div>
					<a href="<?php the_sub_field('linkurl'); ?>"><h3><?php the_sub_field('tituloicon'); ?></h3></a>
				</div>
			</div>	
			<?php
				endwhile;
				endif;
			 } ?>
		</div >
	</div>
	<div class="space3"></div>
</div >


<?php 
	if (get_field('row-img-1')) {
	// Start the loop.
	while ( have_posts() ) : the_post();
    // Ruta de la imagen destacada (tamaño completo)
    global $post;
    $thumbID = get_post_thumbnail_id( $post->ID );
    $imgDestacada = wp_get_attachment_url( $thumbID );    	
?>
	<div class="hidden-xs" style="background:url('<?php echo $img; ?>'); background-size: cover; height: 495px; background-position: right;">
		<div class="container containerBBVA">
			<div class="row sec-img-2">
				<div class="col-md-5">
					<p><?php echo $descripcion; ?></p>
				</div>
			</div>
			<?php if (get_field('url-boton')) {?>
			<div class="row sec-img-2">
				<div class="col-md-4">
					<a href="<?php echo $urlBoton; ?>"><button type="button" class="btn btn-primary botonzote"><?php echo $textoBtn; ?></button></a>
				</div>
			</div>
			<?php } ?>					
		</div>
	</div>
	<div class="visible-xs">
		<img class="img-responsive" src="<?php echo $img; ?>">
		<div class="container" style="background-color: #004481; margin-top: -1px;">
			<div class="row sec-2-index-mov">
				<div class="col-xs-12">
					<p><?php echo $descripcion; ?></p>
				</div>
			</div>
			<?php if (get_field('url-boton')) {?>
			<div class="row sec-2-index-mov text-center">
				<div class="col-xs-12">
					<a target="_BLANK" href="<?php echo $urlBoton; ?>"><button type="button" class="btn btn-primary botonzote"><?php echo $textoBtn; ?></button></a>
				</div>
			</div>
			<?php } ?>					
		</div>		
	</div>
	<?php
		the_content();
		endwhile;
	} ?>

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
						<a target="_BLANK" href="<?php the_sub_field('url'); ?>"><?php the_sub_field('texto-bt'); ?></a>
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