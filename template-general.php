<?php
/*
Template Name: Stats Page
*/
get_header(); ?>

<?php 
	$img = get_field('imag-1');
	$titulo = get_field('titulo-1');
	$intro = get_field('introduccion-1');
	$boton = get_field('boton-1');
	$url = get_field('url-boton-1');
	$icon = get_field('icon-1');
	$text = get_field('text-icon-1');
	$img2 = get_field('imag-2');
	$titulo2 = get_field('titulo-2');
	$intro2 = get_field('introduccion-2');
	$boton2 = get_field('boton-2');
	$url2 = get_field('url-boton-2');
?>

<div style="background:url('<?php echo $img; ?>'); background-size: cover; height: 360px">
	<div class="container contacto">
		<div class="row">
			<div class="col-md-6 bloque">
				<div class="col-md-12">
					<h1><?php echo $titulo; ?></h1>	
				</div>
				<div class="col-md-12">
					<p><?php echo $intro; ?></p>
				</div>
				<div class="col-md-6">
					<a href="<?php echo $url; ?>"><button type="button" class="btn btn-primary"><?php echo $boton; ?></button></a>
				</div>
				<div class="col-md-6">
					<a href="#">
					 <div class="col-md-3">
					 	<img src="<?php echo $icon; ?>">
					 </div>
					 <div class="col-md-8">
						<?php echo $text; ?>
				   	 </div>
					</a>
				</div>
			</div>
		</div>
	</div>
</div>

<?php the_field('campo-html'); ?>

<div class="space"></div>

<div style="background:url('<?php echo $img2; ?>'); background-size: cover; height: 360px">
	<div class="container contacto">
		<div class="row">
			<div class="col-md-6 bloque">
				<div class="col-md-12">
					<h1><?php echo $titulo2; ?></h1>	
				</div>
				<div class="col-md-12">
					<p><?php echo $intro2; ?></p>
				</div>
				<div class="col-md-6">
					<a href="<?php echo $url2; ?>"><button type="button" class="btn btn-primary"><?php echo $boton2; ?></button></a>
				</div>
			</div>
		</div>
	</div>
</div>

<?php
get_footer(); 
?>
