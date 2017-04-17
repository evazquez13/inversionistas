<?php
/*
Template Name: Stats Page
*/
get_header(); 
?>

<?php 
	$img = get_field('imag-1');
	$titulo = get_field('titulo-1');
	$intro = get_field('introduccion-1');
	$boton = get_field('boton-1');
	$url = get_field('url-boton-1');
	$icon = get_field('icon-1');
	$text = get_field('text-icon-1');
	$campo = get_field('campo-html');
	$img2 = get_field('imag-2');
	$titulo2 = get_field('titulo-2');
	$intro2 = get_field('introduccion-2');
	$boton2 = get_field('boton-2');
	$url2 = get_field('url-boton-2');
?>

<?php if( $img != '') { ?>
<div style="background:url('<?php echo $img; ?>'); background-size: cover; height: 360px">
	<div class="container contacto">
		<div class="row">
		<?php if($titulo !=''){ ?>
			<div class="col-md-6 col-sm-6 col-xs-10">
				<div class="bloque">
					<div class="col-md-10 col-sm-10 col-xs-10">
						<h1><?php echo $titulo; ?></h1>	
					</div>
					<div class="col-md-10 col-sm-10 col-xs-10">
						<p><?php echo $intro; ?></p>
					</div>
					<?php if($url !=''){ ?>
					<div class="col-md-6 col-sm-5 col-xs-12">
						<a href="<?php echo $url; ?>"><button type="button" class="btn btn-primary"><?php echo $boton; ?></button></a>
					</div>
					<?php } 
					if($icon !=''){ ?>
					<div class="col-md-6 col-sm-7 col-xs-12">
						<a href="#">
						 <div class="col-md-3 col-sm-1 col-xs-2">
						 	<img src="<?php echo $icon; ?>">
						 </div>
						 <div class="col-md-8 col-sm-6 col-xs-10">
							<?php echo $text; ?>
					   	 </div>
						</a>
					</div>
					<?php } ?>
				</div>
			</div>
			<?php } ?>
		</div>
	</div>
</div>

<?php } 
if($campo !=''){?>

<?php the_field('campo-html'); ?>

<?php } ?>

<div class="space"></div>

<?php if($img2 !=''){ ?>
<div style="background:url('<?php echo $img2; ?>'); background-size: cover; height: 360px">
	<div class="container contacto">
		<div class="row">
		<?php if($titulo2 !=''){ ?>
			<div class="col-md-6 col-sm-6 col-xs-10">
				<div class="bloque">
					<div class="col-md-10 col-sm-10 col-xs-10">
						<h1><?php echo $titulo2; ?></h1>	
					</div>
					<div class="col-md-10 col-sm-10 col-xs-10">
						<p><?php echo $intro2; ?></p>
					</div>
					<?php if($url2 !=''){ ?>
					<div class="col-md-6 col-sm-6 col-xs-6">
						<a href="<?php echo $url2; ?>"><button type="button" class="btn btn-primary"><?php echo $boton2; ?></button></a>
					</div>
					<?php } ?>
				</div>
			</div>
			<?php } ?>
		</div>
	</div>
</div>

<?php }
get_footer(); 
?>
