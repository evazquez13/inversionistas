<?php
/*
Template Name: template-AsambleadeAccionistas
*/

get_header(); ?>

<?php 
    $img = get_field('row-img-1');
    $descripcion = get_field('descripcion');
    $urlBoton = get_field('url-boton');
    $tituloSecInfo = get_field('titulo-sec-info');
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
            while ( have_rows('banner') && $i==0  ) : the_row();
            ?>
            <div class="hidden-xs item <?php if($i == 0) {echo 'active';} ?>" style="background-image: url('<?php the_sub_field('imagen'); ?>');height: 480px;width: 100%;background-size: cover;">
        <div class="container">
            <div class="col-md-6 col-sm-6 col-xs-12" style="padding-top: 70px;">
                    <div class="banner-msn">
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
                            <? if (get_sub_field('urldeboton')) { ?>
                                <a href="<?php the_sub_field('urldeboton'); ?>"><button type="button" class="btn btn-info"><?php the_sub_field('texto-boton') ?></button></a>
                                <?php } ?>
                            </div>
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
                    <? if (get_sub_field('urldeboton')) { ?>
                                <a href="<?php the_sub_field('urldeboton'); ?>"><button type="button" class="btn btn-info"><?php the_sub_field('texto-boton') ?></button></a>
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
<!-- Contenido -->

    <div class="container containerBBVA asamblea-acionistas">
        <div class="row">
            <div class="col-md-12 col-xs-12 col-sm-12">
                <h1 class="text-center-xs"><?php echo get_field('titulopdf')?></h1>
                <div class="space"></div>
                <p><?php echo get_field('descripcion') ?>
                <div class="space"></div>
                <p><?php echo get_field('textopdf') ?>
                <span>
                <a href="<?php echo get_field('iradobeurl')?>" target="_BLANK">
                <?php echo get_field('iradobe')?></a></span></p>
                <p><?php echo get_field('selecciondoc'); ?></p>
            </div>
            <?php if (get_field('asamblea-acionistas-pdf',433)) {?>
            <div class="col-md-12 col-xs-12 col-sm-12 space">
                
                <div class="col-md-5 col-xs-12 col-sm-6 form-group">
                    <select name="institucion" class="form-control" onchange="mostrarAnio(this)">
                        <option>-Selecciona</option>
                        <?php
                $z=0;
                if (have_rows('asamblea-acionistas-pdf',433) ):
                                while (have_rows('asamblea-acionistas-pdf',433) ): the_row();
                            // check if the repeater field has rows of data
                            if( have_rows('institucion',433) ):
                                // loop through the rows of data
                                while ( have_rows('institucion',433) ) : the_row();
                        ?>
                        <option value="<?php echo $z; ?>"><?php the_sub_field('nombre-institucion') ?></option>
                        <?php 
                        $z++;
                        endwhile;
                        endif;
                        endwhile;
                    endif;
                    ?>
                    </select>
                </div>
                <div class="col-md-5 col-xs-12 col-sm-6 form-group">
                    <?php 
                    $y=0;
                    $a=0;
                    if (have_rows('asamblea-acionistas-pdf',433) ):
                                while (have_rows('asamblea-acionistas-pdf',433) ): the_row();
                            // check if the repeater field has rows of data
                     
                    
                    if( have_rows('institucion',433) ):
                                // loop through the rows of data
                                while ( have_rows('institucion',433) ) : the_row();
                        ?>
                        <select id="anio<?php echo $y; ?>" class="form-control anio" onchange="mostrarPdf(this)">
                    <option>-Selecciona</option>
                        <?php
                         
                         
                            // check if the repeater field has rows of data
                            if( have_rows('anio',433) ):
                                // loop through the rows of data
                                while ( have_rows('anio',433) ) : the_row();
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
            if (have_rows('asamblea-acionistas-pdf',433) ):
                while (have_rows('asamblea-acionistas-pdf',433) ): the_row();
                    if( have_rows('institucion',433) ):
                                // loop through the rows of data
                                while ( have_rows('institucion',433) ) : the_row();
                            // check if the repeater field has rows of data
                            
                            if( have_rows('anio',433) ):
                                // loop through the rows of data
                                while ( have_rows('anio',433) ) : the_row();
                            
             ?>
                <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="col-md-12 col-xs-12 col-sm-12 insti sombra" id="insti<?php echo $e; ?>">
                <?php 
                                // check if the repeater field has rows of data
                            if( have_rows('pdf',433) ):
                            // loop through the rows of data
                            while ( have_rows('pdf',433) ) : the_row();
                 ?>
                    <div class="col-md-4 col-sm-4 col-xs-6"><?php the_sub_field('nombre-pdf'); ?></div>
                    <div class="col-md-1 col-sm-1 col-xs-6" style="margin-top: -10px;"><a target="_BLANK" href="<?php the_sub_field('url-pdf'); ?>"><img src="http://ec2-52-50-46-136.eu-west-1.compute.amazonaws.com/wp-content/uploads/2017/06/pdf_icon.png"></a></div>
                    <div class="col-md-7 col-sm-7 col-xs-12 <?php the_sub_field('idioma'); ?>">
                        <?php if (get_sub_field('idioma')=="ingles") { ?>
                            <p class="desPdf">Esta información solo está disponible en Inglés</p>
                        <?php } ?>
                    </div>
                    <div class="space1"></div>
                    <?php 
                    endwhile;
                    endif;      
                     ?>
                </div>
                </div>
                <?php 
                $e++;
                    endwhile;
                    endif;
                    endwhile;
                    endif;
                    endwhile;
                    endif;
                    }
                 ?> 
        </div>
    </div>



<!--Sección Interés --> 

<?php if (get_field('interes')) {?>
<div class="infoInteres">
    <div class="container containerBBVA">
    <div class="space2"></div>
        <div class="row">
            <div class="col-md-12 text-center">     
                    <?php if($tituloSecInfo){ ?>
                <h1><?php echo $tituloSecInfo; ?></h1>
            </div>
            <?php } ?>
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
                <div class="col-md-12 col-sm-12 col-xs-12 borde" style="background:url('<?php the_sub_field('fondo'); ?>'); background-size: cover; height: 303px; background-position: right;">
                <img src="<?php the_sub_field('sobre'); ?>" alt="" class="img-responsive isobres">
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12 fondoBlanco borde">
                    <div class="col-md-9">
                        <div class="space"></div>
                        <p><?php the_sub_field('titulo'); ?></p>
                        <div class="space"></div>
                        <?php if (get_sub_field('url')) {?>
                            <a href="<?php the_sub_field('url'); ?>"><?php the_sub_field('texto-leer-mas') ?></a>
                        <?php } ?>
                    </div>
                </div>
            </div>  
            <?php
                        endwhile;
                            endif;
                    ?>
    </div >
    <div class="space"></div>
</div>
</div>
<?php } ?>
<?php get_footer(); ?>