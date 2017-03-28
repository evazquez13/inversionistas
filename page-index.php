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


<?php 
	// Start the loop.
	while ( have_posts() ) : the_post();
    // Ruta de la imagen destacada (tamaño completo)
    global $post;
    $thumbID = get_post_thumbnail_id( $post->ID );
    $imgDestacada = wp_get_attachment_url( $thumbID );    	
?>
	
	<div>
		<div class="container" style="background:url('<?php echo $img; ?>'); background-size: cover;">
			<div class="row">
				<div class="col-md-6">
					<p><?php echo $descripcion; ?></p>
					<a href="<?php echo $urlBoton; ?>"><button type="button" class="btn btn-primary"> 
					Consultar</button></a>
					<?php
					the_content();
					endwhile;
					?>
				</div>
			</div>
		</div>
	</div>
<?php get_footer(); ?>
