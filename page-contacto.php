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

<div class="space"></div>

<div>
	<div class="container">
		<div class="row">
			<div class="col-md-12 contactanos">
				<h1> <?php the_field('titulo'); ?></h1>
			</div>
		</div>
	</div>
</div>

<div class="space"></div>

<div>
	<div class="container">
		<div class="row">
			<div class="col-md-12 helpyou">
				<h2><?php the_field('subtitulo'); ?></h2>
			</div>
		</div>
	</div>
</div>

<div class="space"></div>

<div>
	<div class="container">
		<div class="row">
			<div class="col-md-12 paratu">
				<p><?php the_field('introduccion'); ?></p>
			</div>
		</div>
	</div>
</div>

<div class="space"></div>

<div>
	<div class="container">
		<div class="row">
			<div class="col-md-12 masInfo text-center">	

				<div>
					<!-- Nav tabs -->
					<ul class="nav nav-tabs" role="tablist">
					<li role="presentation" class="col-md-6 active" ><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Productos</a></li>
					<li role="presentation" class="col-md-6"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Servicios</a></li>
					</ul>

					<div class="space"></div>

					<!-- Tab panes -->
					<div class="tab-content text-left">

						<div role="tabpanel" class="tab-pane active" id="home">

						<?php
							$i=0;
							if( have_rows('tabla-productos') ):

 								// loop through the rows of data
   								 while ( have_rows('tabla-productos') ) : the_row(); ?>

							<div class="panel panel-default bordeAzul">
							  	<!-- Default panel contents -->
							  	<div class="panelColor">
							        <h5 class="panel-title">
							      	  <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $i; ?>" aria-expanded="true" aria-controls="collapse<?php echo $i; ?>" class="collapsed"><?php the_sub_field('tema') ?><span class = "flecha der"></span></a>
							      	</h5>
							  	</div>
							  	<div id="collapse<?php echo $i; ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
							  	<!-- Table -->
								  	<table class="table bordeAzul">
							        	<tbody>
							        		<tr>
							        			<td><?php the_sub_field('contenido') ?></td>
							        		</tr>
							        	</tbody>
									</table>
								</div>
							</div>
							
							<?php   
								$i++;
							 	endwhile;
								        else :
							    	// no rows found
										endif;
							 	?>
								
						</div>
						
						<div role="tabpanel" class="tab-pane" id="profile">

						<?php
							$i=100;
							if( have_rows('tabla-servicios') ):

 								// loop through the rows of data
   								 while ( have_rows('tabla-servicios') ) : the_row(); ?>

							<div class="panel panel-default bordeAzul">
							  	<!-- Default panel contents -->
							  	<div class="panelColor">
							        <h5 class="panel-title">
							      	  <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $i; ?>" aria-expanded="true" aria-controls="collapse<?php echo $i; ?>" class="collapsed"><?php the_sub_field('tema') ?><span class = "flecha der"></span></a>
							      	</h5>
							  	</div>
							  	<div id="collapse<?php echo $i; ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
							  	<!-- Table -->
								  	<table class="table bordeAzul">
							        	<tbody>
							        		<tr>
							        			<td><?php the_sub_field('contenido') ?></td>
							        		</tr>
							        	</tbody>
									</table>
								</div>
							</div>
							
							<?php   
								$i++;
							 	endwhile;
								        else :
							    	// no rows found
										endif;
							 	?>

						</div>

					</div>
				</div>

			</div>
		</div>
	</div>
</div>
<div class="space"></div>
<div class="space"></div>
<div class="space"></div>
<div class="space"></div>
<div class="space"></div>
<div class="space"></div>
<div class="space"></div>

<?php get_footer(); ?>
