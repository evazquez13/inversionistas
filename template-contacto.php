<?php
/*
Template Name: Page-Contacto
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
	$contacto = get_field('contacto');
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
			<div class="col-md-6 col-sm-6 col-xs-11">
				<div class="bloque">
					<div class="col-md-10 col-sm-10 col-xs-11">
						<h1><?php echo $titulo; ?></h1>	
					</div>
					<div class="col-md-10 col-sm-10 col-xs-11">
						<p><?php echo $intro; ?></p>
					</div>
					<div class="col-md-12">
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
							 <div class="col-md-8 col-sm-6 col-xs-9">
								<?php echo $text; ?>
						   	 </div>
							</a>
						</div>
						<?php } ?>
					</div>
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

<?php 
if($contacto !=''){ 
	?>

<div class="space"></div>

<div>
	<div class="container">
		<div class="row">
			<div class="col-md-12 contactanos">
				<h1>Contacto</h1>
			</div>
		</div>
	</div>
</div>

<div class="space"></div>

<div>
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">
				<?php
					// check if the repeater field has rows of data
					if( have_rows('contacto') ):
						// loop through the rows of data
						while ( have_rows('contacto') ) : the_row();			
				?>

					<div class="col-md-6 col-sm-6 col-xs-12">
						<div class="col-md-12 fondo">
							<div class="col-md-4 contacto">	
								<img src= "<?php the_sub_field('img-contaco'); ?>" alt="">
							</div>
							<div class="col-md-8 credenciales">
								<div class="col-md-12">
									<h3><?php the_sub_field('nombre'); ?></h3>
								</div>
								<div class="col-md-12">
									<h4><?php the_sub_field('cargo'); ?></h4>
								</div>
								<div class="col-md-12">
									<p><?php the_sub_field('correo'); ?></p>
								</div>
								<div class="col-md-1 icon1">
									<img src="http://localhost/wordpress/wp-content/uploads/2017/04/phone.png" alt="">
								</div>
								<div class="col-md-9">
									<h5><?php the_sub_field('telefono'); ?></h5>
								</div>
							</div>
						</div>
					</div>
				<?php
					endwhile;
					endif;
				?>
			</div>
		</div>
	</div>
</div>

<?php } ?>

<div class="space"></div>

<?php if($img2 !=''){ ?>
<div style="background:url('<?php echo $img2; ?>'); background-size: cover; height: 360px">
	<div class="container contacto">
		<div class="row">
		<?php if($titulo2 !=''){ ?>
			<div class="col-md-6 col-sm-6 col-xs-11">
				<div class="bloque">
					<div class="col-md-10 col-sm-10 col-xs-11">
						<h1><?php echo $titulo2; ?></h1>	
					</div>
					<div class="col-md-10 col-sm-10 col-xs-11">
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
?>

<?php if (get_field('interes')) {?>
<div class="infoInteres">
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<h1>Información de interés</h1>
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
				<div class="col-md-12 col-sm-12 col-xs-12 borde" style="background:url('<?php the_sub_field('fondo'); ?>'); background-size: 100% 100%; height: 303px;">
				<img src="<?php the_sub_field('sobres'); ?>" alt="" class="img-responsive isobres">
				</div>
				<div class="col-md-12 col-sm-12 col-xs-12 fondoBlanco borde">
					<div class="col-md-9">
						<div class="space"></div>
						<p><?php the_sub_field('titulo'); ?></p>
						<div class="space"></div>
						<a href="<?php the_sub_field('url'); ?>">Leer Más</a>
					</div>
				</div>
			</div>	
			<?php
						endwhile;
							endif;
					?>
	</div >
</div>
<?php } ?>

<?php
get_footer(); 
?>
