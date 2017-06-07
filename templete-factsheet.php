<?php
/*
Template Name: Templete Factsheet
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


			<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
  	
	<?php
	$i == 0;
	if (get_field('banner')) {
		
	
		// check if the repeater field has rows of data
		if( have_rows('banner') ):
			// loop through the rows of data
			while ( have_rows('banner') ) : the_row();
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
					<div class="col-md-7 col-sm-7 col-xs-7 text-left">
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
    
<dir class="container">
	<div class="row">
		<div class="col-md-12 col-sm-12 col-xs-12">
			<h1>Facsheet de BBVA Bancome</h1>
			<p>Regardless of what fnancial stage you are in, The Bank Investment Solutions is here to help. Our experienced Financial Advisorsare here to guide you through each fnancial stage of your life. Work with our professionals to create a complimentary, <br>customized<br>plan, or get started with one of these fnancial planning tools below</p>
		</div>
	</div>
</dir>


<div class="infoInteres">
	<div class="container">
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
						<a href="<?php the_sub_field('url'); ?>"><?php the_sub_field('texto-bt'); ?></a>
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