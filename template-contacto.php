<?php
/*
Template Name: templete-Contacto
*/
get_header(); 
?>

<?php 
	$img = get_field('imag-1');
	$titulo = get_field('titulo-1');
	$intro = get_field('introduccion-1');
	$contacto = get_field('contacto');
	$idioma = pll_current_language( 'slug' );
?>

<?php if( $img != '') { ?>
<div style="background:url('<?php echo $img; ?>'); background-size: cover; height: 480px">
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
				</div>
			</div>
			<?php } ?>
		</div>
	</div>
</div>

<?php }
if($contacto !=''){ 
	?>

<div class="space"></div>
<div>
	<div class="container">
		<div class="row">
			<div class="col-md-12 contactanos">
				<?php if ($idioma == 'es') {?>
				<h1>Contacto</h1>
				<?php } ?>
			<?php if ($idioma == 'en') {?>
				<h1>Contact Us</h1>
				<?php } ?>
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
								<img src= "<?php the_sub_field('img-contacto'); ?>" alt="">
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
									<img src="http://ec2-52-50-46-136.eu-west-1.compute.amazonaws.com/wp-content/uploads/2017/04/phone.png" alt="">
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

<?php if (get_field ('interes')) {?>
<div class="space"></div>
<div class="infoInteres">
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<?php if ($idioma == 'es') {?>
				<h1>Información de interés</h1>
				<?php } ?>
			<?php if ($idioma == 'en') {?>
				<h1>Information of interest</h1>
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
				<div class="col-md-12 col-sm-12 col-xs-12 borde" style="background:url('<?php the_sub_field('fondo'); ?>'); background-size: 100% 100%; height: 303px;">
				<img src="<?php the_sub_field('sobres'); ?>" alt="" class="img-responsive isobres">
				</div>
				<div class="col-md-12 col-sm-12 col-xs-12 fondoBlanco borde">
					<div class="col-md-9">
						<div class="space"></div>
						<p><?php the_sub_field('titulo'); ?></p>
						<div class="space"></div>
						<a href="<?php the_sub_field('url'); ?>"><?php if ($idioma == 'es') {?>Leer Más <?php }if ($idioma == 'en') {?> Read more <?php } ?></a>
					</div>
				</div>
			</div>	
			<?php
						endwhile;
							endif;
					?>
		</div >
	</div>
</div>
<?php } ?>

<?php
get_footer(); 
?>
