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
    		<div class="item <?php if($i == 0) {echo 'active';} ?>" style="background-image: url('<?php the_sub_field('imagen'); ?>');height: 480px;width: 100%;">
  		<div class="container">
  			<div class="col-md-4 carousel-caption">
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

	<div class="container">
		<div class="row">
			<div class="col-md-12 col-xs-12 col-sm-12">
				<h1>Información Financiera</h1>
				<p>Para ver la información, necesita el Acrobat Reader. Si no lo tiene, puede bajarlo sin costo en la dirección:<span> Acrobat Reader de Adobe</span><span> Seleccione el documento que requiere:</span></p>
			</div>
			<div class="col-md-12 col-xs-12 col-sm-12 space">
				<div class="col-md-4 col-xs-12 col-sm-12">
					<select name="tipo-info" id="tipo-info" class="form-control" onchange="mostrarInstitucion(this)">
						<option>-Selecciona</option>
						<?php 
							$t=0;
							if (have_rows('tipo-informacion') ):
								while (have_rows('tipo-informacion') ): the_row(); 
						 ?>
						 <option value="<?php echo $t; ?>"><?php the_sub_field('nombre-info') ?></option>
						 <?php 
						 	$t++;
						 	endwhile;
							endif;
						  ?>
					</select>
				</div>
				<div class="col-md-4 col-xs-12 col-sm-6">
				<?php 
				$i=0;
				$z=0;
				if (have_rows('tipo-informacion') ):
								while (have_rows('tipo-informacion') ): the_row();
				?>
					<select name="institucion" id="institucion<?php echo $i; ?>" class="form-control institucion" onchange="mostrarAnio(this)">
						<option>-Selecciona</option>
						<?php
							// check if the repeater field has rows of data
							if( have_rows('institucion') ):
								// loop through the rows of data
								while ( have_rows('institucion') ) : the_row();
						?>
						<option value="<?php echo $z; ?>"><?php the_sub_field('nombre-institucion') ?></option>
						<?php 
						$z++;
						endwhile;
						endif;
						$i ++;
					?>
					</select>
					<?php 
					endwhile;
					endif;
					 ?>
				</div>
				<div class="col-md-4 col-xs-12 col-sm-6">
					<?php 
					$y=0;
					$a=0;
					if (have_rows('tipo-informacion') ):
								while (have_rows('tipo-informacion') ): the_row();
							// check if the repeater field has rows of data
					 
					
					if( have_rows('institucion') ):
								// loop through the rows of data
								while ( have_rows('institucion') ) : the_row();
						?>
						<select id="anio<?php echo $y; ?>" class="form-control anio" onchange="mostrarPdf(this)">
					<option>-Selecciona</option>
						<?php
						 
						 
							// check if the repeater field has rows of data
							if( have_rows('anio') ):
								// loop through the rows of data
								while ( have_rows('anio') ) : the_row();
						?>
						<option value="<?php echo $a; ?>"><?php the_sub_field('numero-anio') ?></option>
						<?php
						$a++;
						endwhile;
						endif;
						?>
						</select>
						<?php
						$y++;
						endwhile;
						endif;
						endwhile;
						endif;
						?>
				</div>
						
				
			</div>

			<?php $e=0;
			if (have_rows('tipo-informacion') ):
								while (have_rows('tipo-informacion') ): the_row();
					if( have_rows('institucion') ):
								// loop through the rows of data
								while ( have_rows('institucion') ) : the_row();
							// check if the repeater field has rows of data
							
							if( have_rows('anio') ):
								// loop through the rows of data
								while ( have_rows('anio') ) : the_row();
							
			 ?>
				<div class="col-md-12 col-xs-12 col-sm-12 insti" id="insti<?php echo $e; ?>">
				<?php 
								// check if the repeater field has rows of data
							if( have_rows('pdf') ):
							// loop through the rows of data
							while ( have_rows('pdf') ) : the_row();
				 ?>
					<div class="col-md-6 col-xs-6 col-sm-6"><?php the_sub_field('nombre-pdf'); ?></div>
					<div class="col-md-6 col-xs-6 col-sm-6"><a target="_BLANK" href="<?php the_sub_field('url-pdf'); ?>"><button class="btn btn-primary">Descargar PDF</button></a></div>
					<div class="space1"></div>
					<?php 
					endwhile;
					endif;		
					 ?>
				</div>
				<?php 
				$e++;
					endwhile;
					endif;
					endwhile;
					endif;
					endwhile;
					endif;
				 ?>
			<div class="col-md-12 col-xs-12 col-md-12" id="mensaje">
				
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
					<a href="<?php echo $urlBoton; ?>"><button type="button" class="btn btn-primary botonzote"> 
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

