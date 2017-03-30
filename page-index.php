<?php
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
?>

<div class="container">
	<div class="row">
		<div class="col-md-12 relleno">
			<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
	<?php
	$i == 0;
		// check if the repeater field has rows of data
		if( have_rows('banner') ):
			// loop through the rows of data
			while ( have_rows('banner') ) : the_row();
			?>
    
		    <div class="item <?php if($i == 0) {echo 'active';} ?>">

		      <img src="<?php the_sub_field('imagen'); ?>">
		      <div class="col-md-6 carousel-caption">
		            <div class="ctxt banner-msn">
						<div class="row tt">
							<div class="col-md-10 col-sm-10 col-xs-10">
								<h2><?php the_sub_field('titulo'); ?></h2>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12 col-sm-12 col-xs-12 tt2">
								<p><?php the_sub_field('introduccion'); ?></p>
							</div>
						</div>
						<div class="row tt3">
							<div class="col-md-7 col-sm-7 col-xs-7 text-left">
								<a href="<?php the_sub_field('boton'); ?>"><button type="button" class="btn btn-info">Saber más</button></a>
							</div>
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

</div>
		</div>
	</div>
</div>

<?php 
	// Start the loop.
	while ( have_posts() ) : the_post();
    // Ruta de la imagen destacada (tamaño completo)
    global $post;
    $thumbID = get_post_thumbnail_id( $post->ID );
    $imgDestacada = wp_get_attachment_url( $thumbID );    	
?>
	
	<div>
		<div class="container" style="background:url('<?php echo $img; ?>'); background-size: cover; height: 495px;">
			<div class="row sec-img-2">
				<div class="col-md-4">
					<p><?php echo $descripcion; ?></p>
				</div>
			</div>

			<div class="row sec-img-2">
				<div class="col-md-4">
					<a href="<?php echo $urlBoton; ?>"><button type="button" class="btn btn-primary"> 
					Consultar</button></a>
				</div>
			</div>
					<?php
					the_content();
					endwhile;
					?>
		</div>
	</div>


<div class="container">
	<div class="row">
		<div class="col-md-12 titulo">
			<h1>Información de interés</h1>
		</div>
	</div>

	<div class="row">
	<?php
		// check if the repeater field has rows of data
		if( have_rows('interes') ):
			// loop through the rows of data
			while ( have_rows('interes') ) : the_row();			
	?>
		<div class = "col-md-6 relleno2">
			<div class="col-md-12" style="background:url('<?php the_sub_field('fondo'); ?>'); background-size: cover; height: 303px;" >
			</div>
		</div>	
		<?php
					endwhile;
					endif;
				?>
	</div>
</div >
<?php get_footer(); ?>
