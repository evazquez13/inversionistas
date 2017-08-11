<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>
  <!DOCTYPE html>
<html class="no-js">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?php echo bloginfo('template_url'); ?>/css/bootstrap.css">
  <link rel="stylesheet" href="<?php echo bloginfo('template_url'); ?>/css/custom.css">
  <link rel="stylesheet" href="<?php echo bloginfo('template_url'); ?>/css/menu.css">
</head>


  <?php wp_head(); ?>
  <?php 
  $translations = pll_the_languages( array( 'raw' => url ) );
  $idioma = pll_current_language( 'slug' ); 
echo '<script languaje="JavaScript">
            
      var varjs="'.$idioma.'";      
</script>';
  ?>

<body>
<header>
  <div class="fonfoAzul hidden-xs">    
    <div class="container cabecera">
      <div class="row hidden-xs">
        <div class="col-md-9 col-sm-7">
          <div class="logo-container">
            <a href="http://ec2-52-50-46-136.eu-west-1.compute.amazonaws.com/es/index/" class="logo-cabecera"><img src="http://ec2-52-50-46-136.eu-west-1.compute.amazonaws.com/wp-content/uploads/2017/03/group-2.png" class="img-responsive hidden-xs"></a>
          </div>
        </div>
        <!-- <div class="col-md-6 col-sm-4 accionistahead">
        	<?php if ($idioma== 'en') { ?>
            <p class="hidden-xs hidden-sm"><span class="bordehead"></span>Financial Information</p>
            <p class="visible-sm" style="font-size: 17px;">Financial Information</p>
            <?php } ?>
            <?php if ($idioma== 'es') { ?>
            <p class="hidden-xs hidden-sm"><span class="bordehead"></span>Información Financiera</p>
            <p class="visible-sm" style="font-size: 17px;">Información Financiera</p>
            <?php } ?>
        </div> -->
        
        <div class="col-md-3 col-sm-5">
	        <ul class="lista-idioma">
	        	<li class="lang-item lang-item-2 lang-item-es lang-item-first">
	        		<a lang="en-US" hreflang="en-US" href="<?php echo $translations['en']['url']; ?>"><h1 class="menuEnEs <?php if ($idioma== 'en') { echo 'activado';} ?>">EN</h1></a>
	          	</li>
    				<li class="lang-item lang-item-5 lang-item-en">
    					<a lang="es-MX" hreflang="es-MX" href="<?php echo $translations['es']['url']; ?>"><h1 class="menuEnEs <?php if ($idioma== 'es') { echo 'activado';} ?>">ES</h1></a>
    				</li>
			</ul>
        </div>
        
      </div>
    </div>
  </div>
  </header>  
<?php if ($idioma== 'es') { ?>
<div class="fonfoAzul visible-lg visible-md visible-sm">
     <div class="container">
        <div class="row">
            <div class="menu-container">
              <div class="menu">
                <ul>
                  <li class="desktop <?php if (is_page('Index')) { echo 'desktopSelect'; } ?>"><a href="http://ec2-52-50-46-136.eu-west-1.compute.amazonaws.com/es/index/">Inicio</a></li>

                  <li class="desktop <?php if (is_page('Conócenos') || is_page('mision') || is_page('historia') || is_page('conocenos_gfbbenresumen') || is_page('modelodenegocio') || is_page('estructuradirectiva') || is_page('negocio-responsable') || is_page('GrupoBBVA')) { echo 'desktopSelect'; } ?>">
                  <a href="http://ec2-52-50-46-136.eu-west-1.compute.amazonaws.com/es/mision/">Conócenos</a></li>  

                  <li class="desktop <?php if (is_page('Inf_Financiera')) { echo 'desktopSelect'; } ?>"><a href="http://ec2-52-50-46-136.eu-west-1.compute.amazonaws.com/es/inf_financiera/">Información Financiera</a></li>

                  <li class="desktop <?php if (is_page('Renta_fija')|| is_page('rentafija_calificaciones') || is_page('Factsheet-es')|| is_page('emisiones-corporativas')  ) { echo 'desktopSelect'; } ?>">
                  <a href="http://ec2-52-50-46-136.eu-west-1.compute.amazonaws.com/es/rentafija_calificaciones/">Renta Fija</a></li>

                  <li class="desktop <?php if (is_page('Gobierno_Corporativo') || is_page('consejoadministracion')|| is_page('asamblea-accionistas') || is_page('estatutos-convenio') || is_page('asamblea-accionistas') || is_page('codigodeconducta') || is_page('codigomejorespracticas-es')) { echo 'desktopSelect'; } ?>">
                  <a href="http://ec2-52-50-46-136.eu-west-1.compute.amazonaws.com/es/consejoadministracion/">Gobierno Corporativo</a></li>

                  <li class="desktop <?php if (is_page('Contacto')) { echo 'desktopSelect'; } ?>"><a href="http://ec2-52-50-46-136.eu-west-1.compute.amazonaws.com/es/contacto/">Contacto</a></li>
                </ul>
            </div>
        </div>
      </div>
    </div>
</div>
  <div class="fonfoAzul hidden-lg hidden-md hidden-sm">
      <div class="container">
        <div class="row">
            <div class="menu-container">
              <div class="menu">
                <ul>
                    <li>
                      <a href="#" class="menu-mobile"></a>
                    </li>
                    <li><a href="http://ec2-52-50-46-136.eu-west-1.compute.amazonaws.com/es/index/">Inicio</a></li>
                  <li><a href="#">Conócenos</a>
                         <ul>
                            <li class="desktop <?php if (is_page('mision')) { echo 'desktopSelect'; } ?>"><a href="http://ec2-52-50-46-136.eu-west-1.compute.amazonaws.com/es/mision/">Misión</a></li>
                            <li class="desktop <?php if (is_page('historia')) { echo 'desktopSelect'; } ?>"><a href="http://ec2-52-50-46-136.eu-west-1.compute.amazonaws.com/es/historia/">Historia</a>
                                <ul></ul>
                            </li>
                            <li class="desktop <?php if (is_page('conocenos_gfbbenresumen')) { echo 'desktopSelect'; } ?>"><a href="http://ec2-52-50-46-136.eu-west-1.compute.amazonaws.com/es/conocenos_gfbbenresumen/">GFBB en Resumen</a>
                                <ul></ul>
                            </li>
                            <li class="desktop <?php if (is_page('modelodenegocio')) { echo 'desktopSelect'; } ?>"><a href="http://ec2-52-50-46-136.eu-west-1.compute.amazonaws.com/es/modelodenegocio/">Modelo de Negocio</a>
                                <ul></ul>
                            </li>
                            <li class="desktop <?php if (is_page('estructuradirectiva')) { echo 'desktopSelect'; } ?>"><a href="http://ec2-52-50-46-136.eu-west-1.compute.amazonaws.com/es/estructuradirectiva/">Estructura Directiva</a>
                                <ul></ul>
                            </li>
                            <li class="desktop <?php if (is_page('negocio-responsable')) { echo 'desktopSelect'; } ?>"><a href="https://www.bancomer.com/nuestrom/negocio-responsable.jsp" target="_blank">Negocio Responsable</a>
                                <ul></ul>
                            </li>
                            <li class="desktop <?php if (is_page('GrupoBBVA')) { echo 'desktopSelect'; } ?>"><a href="http://inversores.bbva.com/TLBB/tlbb/bbvair/esp/index.jsp" target="_blank">Grupo BBVA</a>
                                <ul></ul>
                            </li>
                        </ul> 
                    </li>     
                    <li><a href="http://ec2-52-50-46-136.eu-west-1.compute.amazonaws.com/es/inf_financiera/">Información Financiera</a>
                        <ul></ul>  
                    </li>
                    <li><a href="#">Renta Fija</a>
                        <ul>
                            <li class="desktop <?php if (is_page('rentafija_calificaciones')) { echo 'desktopSelect'; } ?>"><a href="http://ec2-52-50-46-136.eu-west-1.compute.amazonaws.com/es/rentafija_calificaciones/">Calificaciones</a>
                                <ul></ul>
                            </li>
                            <li class="desktop <?php if (is_page('factsheet')) { echo 'desktopSelect'; } ?>"><a href="http://ec2-52-50-46-136.eu-west-1.compute.amazonaws.com/es/factsheet-es/">Factsheet</a>
                                <ul></ul>
                            </li>
                            <li class="desktop <?php if (is_page('emisiones-corporativas')) { echo 'desktopSelect'; } ?>"><a href="http://ec2-52-50-46-136.eu-west-1.compute.amazonaws.com/es/emisiones-corporativas/">Emisiones</a>
                                <ul></ul>
                            </li>
                        </ul> 
                    </li>
                    <li><a href="#">Gobierno Corporativo</a>
                        <ul>
                            <li class="desktop <?php if (is_page('consejoadministracion')) { echo 'desktopSelect'; } ?>"><a href="http://ec2-52-50-46-136.eu-west-1.compute.amazonaws.com/es/consejoadministracion/">Consejo de Administración</a>
                                <ul></ul>
                            </li>
                            <li class="desktop <?php if (is_page('asamblea-accionistas')) { echo 'desktopSelect'; } ?>"><a href="http://ec2-52-50-46-136.eu-west-1.compute.amazonaws.com/es/asamblea-accionistas/">Asamblea de Accionistas</a>
                                <ul></ul>
                            </li>
                            <li class="desktop <?php if (is_page('estatutos-convenio')) { echo 'desktopSelect'; } ?>"><a href="http://ec2-52-50-46-136.eu-west-1.compute.amazonaws.com/es/estatutos-convenio/">Estatutos Sociales y Convenio Único</a>
                                <ul></ul>
                            </li>
                            <li class="desktop <?php if (is_page('codigodeconducta')) { echo 'desktopSelect'; } ?>"><a href="http://ec2-52-50-46-136.eu-west-1.compute.amazonaws.com/es/codigodeconducta/">Código de Conducta</a>
                                <ul></ul>
                            </li>
                            <li class="desktop <?php if (is_page('codigomejorespracticas-es')) { echo 'desktopSelect'; } ?>"><a href="http://ec2-52-50-46-136.eu-west-1.compute.amazonaws.com/es/codigomejorespracticas-es/">Código de Mejores Prácticas Corporativas</a>
                                <ul></ul>
                            </li>
                        </ul>       
                    </li>
                    <li><a href="http://ec2-52-50-46-136.eu-west-1.compute.amazonaws.com/es/contacto/">Contacto</a></li>
                </ul>
            </div>
        </div>
      </div>
      <div class="row">
      	<div class="col-sm-12 col-xs-12">
      		<ul class="lista-idioma">
	        	<li class="lang-item lang-item-2 lang-item-es lang-item-first">
	        		<a lang="en-US" hreflang="en-US" href="<?php echo $translations['en']['url']; ?>"><h1 class="menuEnEs <?php if ($idioma== 'en') { echo 'activado';} ?>">EN</h1></a>
	          	</li>
				<li class="lang-item lang-item-5 lang-item-en">
					<a lang="es-MX" hreflang="es-MX" href="<?php echo $translations['es']['url']; ?>"><h1 class="menuEnEs <?php if ($idioma == 'es') { echo 'activado';} ?>">ES</h1></a>
				</li>
			</ul>
      	</div>
      </div>
    </div>
  </div>
 
<?php 
if (is_page("Conócenos") || is_page("historia") || is_page("mision") || is_page("conocenos_gfbbenresumen") || is_page("modelodenegocio") || is_page("estructuradirectiva")) { ?>
 <div class="fondoClaro visible-lg visible-md visible-sm">
     <div class="container">
         <div class="row">
             <div class="menu-claro">
                 <ul>
                     <li class="desktop <?php if (is_page('mision')) { echo 'desktopSelect'; } ?>"><a href="http://ec2-52-50-46-136.eu-west-1.compute.amazonaws.com/es/mision/">Misión</a></li>
                        <li class="desktop <?php if (is_page('historia')) { echo 'desktopSelect'; } ?>"><a href="http://ec2-52-50-46-136.eu-west-1.compute.amazonaws.com/es/historia/">Historia</a></li>
                        <li class="desktop <?php if (is_page('conocenos_gfbbenresumen')) { echo 'desktopSelect'; } ?>"><a href="http://ec2-52-50-46-136.eu-west-1.compute.amazonaws.com/es/conocenos_gfbbenresumen/">GFBB en Resumen</a></li>
                        <li class="desktop <?php if (is_page('modelodenegocio')) { echo 'desktopSelect'; } ?>"><a href="http://ec2-52-50-46-136.eu-west-1.compute.amazonaws.com/es/modelodenegocio/">Modelo de Negocio</a>
                        </li>
                        <li class="desktop <?php if (is_page('estructuradirectiva')) { echo 'desktopSelect'; } ?>"><a href="http://ec2-52-50-46-136.eu-west-1.compute.amazonaws.com/es/estructuradirectiva/">Estructura Directiva</a>
                        </li>
                        <li class="desktop <?php if (is_page('negocio-responsable')) { echo 'desktopSelect'; } ?>"><a href="https://www.bancomer.com/nuestrom/negocio-responsable.jsp" target="_blank">Negocio Responsable</a>
                        </li>
                        <li class="desktop <?php if (is_page('GrupoBBVA')) { echo 'desktopSelect'; } ?>"><a href="http://inversores.bbva.com/TLBB/tlbb/bbvair/esp/index.jsp" target="_blank">Grupo BBVA</a>
                        </li>
                 </ul>
             </div>
         </div>
     </div>
 </div>

<?php } ?>
<?php if (is_page("Renta_fija") || is_page("rentafija_calificaciones") || is_page("emisiones-corporativas") || is_page('Factsheet-es')) { ?>
 <div class="fondoClaro visible-lg visible-md visible-sm">
     <div class="container">
         <div class="row">
             <div class="menu-claro">
                <ul>
                    <li class="desktop <?php if (is_page('rentafija_calificaciones')) { echo 'desktopSelect'; } ?>"><a href="http://ec2-52-50-46-136.eu-west-1.compute.amazonaws.com/es/rentafija_calificaciones/">Calificaciones</a> </li>
                    <li class="desktop <?php if (is_page('Factsheet-es')) { echo 'desktopSelect'; } ?>"><a href="http://ec2-52-50-46-136.eu-west-1.compute.amazonaws.com/es/factsheet-es/">Factsheet</a></li>
                    <li class="desktop <?php if (is_page('emisiones-corporativas')) { echo 'desktopSelect'; } ?>"><a href="http://ec2-52-50-46-136.eu-west-1.compute.amazonaws.com/es/emisiones-corporativas/">Emisiones</a></li>
                </ul>  
             </div>
         </div>
     </div>
 </div>

<?php 
  } 
if (is_page("Gobierno_Corporativo") || is_page("consejoadministracion") || is_page("estatutos-convenio") || is_page("codigodeconducta") || is_page("asamblea-accionistas") || is_page("codigomejorespracticas-es") ) { ?>
 <div class="fondoClaro visible-lg visible-md visible-sm">
     <div class="container">
         <div class="row">
             <div class="menu-claro">
                <ul>
                    <li class="desktop <?php if (is_page('consejoadministracion')) { echo 'desktopSelect'; } ?>"><a href="http://ec2-52-50-46-136.eu-west-1.compute.amazonaws.com/es/consejoadministracion/">Consejo de Administración</a></li>
                    <li class="desktop <?php if (is_page('asamblea-accionistas')) { echo 'desktopSelect'; } ?>"><a href="http://ec2-52-50-46-136.eu-west-1.compute.amazonaws.com/es/asamblea-accionistas/">Asamblea de Accionistas</a></li>
                    <li class="desktop <?php if (is_page('estatutos-convenio')) { echo 'desktopSelect'; } ?>"><a href="http://ec2-52-50-46-136.eu-west-1.compute.amazonaws.com/es/estatutos-convenio/">Estatutos Sociales y Convenio Único</a></li>
                    <li class="desktop <?php if (is_page('codigodeconducta')) { echo 'desktopSelect'; } ?>"><a href="http://ec2-52-50-46-136.eu-west-1.compute.amazonaws.com/es/codigodeconducta/">Código de Conducta</a></li>
                    <li class="desktop <?php if (is_page('codigomejorespracticas-es')) { echo 'desktopSelect'; } ?>"><a href="http://ec2-52-50-46-136.eu-west-1.compute.amazonaws.com/es/codigomejorespracticas-es/">Código de Mejores Prácticas Corporativas</a></li>
                </ul>
             </div>
         </div>
     </div>
 </div>
<?php } ?>
<?php } ?>

<!-- Inicia el menu en ingles-->
<?php if ($idioma== 'en') { ?>
<div class="fonfoAzul visible-lg visible-md visible-sm">
     <div class="container">
        <div class="row">
            <div class="menu-container">
              <div class="menu">
                <ul>
                  <li class="desktop <?php if (is_page('Index-en')) { echo 'desktopSelect'; } ?>"><a href="http://ec2-52-50-46-136.eu-west-1.compute.amazonaws.com/en/index-en/">Home</a></li>

                  <li class="desktop <?php if (is_page('Conócenos-en') || is_page('mision-en') || is_page('historia-en') || is_page('conocenos_gfbbenresumen_en') || is_page('modelodenegocio-en') || is_page('estructuradirectiva-en')) { echo 'desktopSelect'; } ?>"><a href="http://ec2-52-50-46-136.eu-west-1.compute.amazonaws.com/en/mision-en/">About US</a></li>

                  <li class="desktop <?php if (is_page('Inf_Financiera-en')) { echo 'desktopSelect'; } ?>"><a href="http://ec2-52-50-46-136.eu-west-1.compute.amazonaws.com/en/inf_financiera-2/">Financial Information</a></li>

                  <li class="desktop <?php if (is_page('Renta_fija-en') || is_page('rentafija_calificaciones_en') || is_page('factsheet-en')|| is_page('emisiones-corporativas-en')) { echo 'desktopSelect'; } ?>"><a href="http://ec2-52-50-46-136.eu-west-1.compute.amazonaws.com/en/rentafija_calificaciones_en/">Debt Investors</a></li>

                  <li class="desktop <?php if (is_page('Gobierno_Corporativo-en') || is_page('Gobierno_Corporativo-en') || is_page('consejoadministracion-en') || is_page('asamblea-accionistas-en')|| is_page('estatutos-convenio-en')|| is_page('codigodeconducta-en')|| is_page('codigodepracticas-en')) { echo 'desktopSelect'; } ?>"><a href="http://ec2-52-50-46-136.eu-west-1.compute.amazonaws.com/en/consejoadministracion-en/">Corporate Governance</a></li>

                  <li class="desktop <?php if (is_page('Contacto-en')) { echo 'desktopSelect'; } ?>"><a href="http://ec2-52-50-46-136.eu-west-1.compute.amazonaws.com/en/contacto-en/">Contact us</a></li>
                </ul>
            </div>
        </div>
      </div>
    </div>
</div>
  <div class="fonfoAzul hidden-lg hidden-md hidden-sm">
      <div class="container">
        <div class="row">
            <div class="menu-container">
              <div class="menu">
                <ul>
                    <li>
                      <a href="#" class="menu-mobile"></a>
                    </li>
                    <li><a href="http://ec2-52-50-46-136.eu-west-1.compute.amazonaws.com/en/index-en/">Home</a></li>
                  <li><a href="#">About US</a>
                         <ul>
                            <li class="desktop <?php if (is_page('mision-en')) { echo 'desktopSelect'; } ?>"><a href="http://ec2-52-50-46-136.eu-west-1.compute.amazonaws.com/en/mision-en/">Mission</a></li>
                            <li class="desktop <?php if (is_page('historia-en')) { echo 'desktopSelect'; } ?>"><a href="http://ec2-52-50-46-136.eu-west-1.compute.amazonaws.com/en/historia-en/">History</a>
                                <ul></ul>
                            </li>
                            <li class="desktop <?php if (is_page('conocenos_gfbbenresumen_en')) { echo 'desktopSelect'; } ?>"><a href="http://ec2-52-50-46-136.eu-west-1.compute.amazonaws.com/en/conocenos_gfbbenresumen_en/">GFBB in Brief</a>
                                <ul></ul>
                            </li>
                            <li class="desktop <?php if (is_page('modelodenegocio-en')) { echo 'desktopSelect'; } ?>"><a href="http://ec2-52-50-46-136.eu-west-1.compute.amazonaws.com/en/modelodenegocio-en/">Business Model</a>
                                <ul></ul>
                            </li>
                            <li class="desktop <?php if (is_page('estructuradirectiva-en')) { echo 'desktopSelect'; } ?>"><a href="http://ec2-52-50-46-136.eu-west-1.compute.amazonaws.com/en/estructuradirectiva-en/">Organization Chart</a>
                                <ul></ul>
                            </li>
                            <li class="desktop"><a href="http://shareholdersandinvestors.bbva.com/TLBB/tlbb/bbvair/ing/index.jsp" target="_blank">Responsible Business</a>
                                <ul></ul>
                            </li>
                            <li class="desktop"><a href="http://inversores.bbva.com/TLBB/tlbb/bbvair/esp/index.jsp" target="_blank">BBVA Group</a>
                                <ul></ul>
                            </li>
                        </ul> 
                    </li>
                    <li><a href="http://ec2-52-50-46-136.eu-west-1.compute.amazonaws.com/en/inf_financiera-2/">Financial Information</a></li>
                    <li><a href="#">Debt Investors</a>
                        <ul>
                            <li class="desktop <?php if (is_page('rentafija_calificaciones_en')) { echo 'desktopSelect'; } ?>"><a href="http://ec2-52-50-46-136.eu-west-1.compute.amazonaws.com/en/rentafija_calificaciones_en/">Ratings</a>
                                <ul></ul>
                            </li>
                            <li class="desktop <?php if (is_page('Index')) { echo 'desktopSelect'; } ?>"><a href="http://ec2-52-50-46-136.eu-west-1.compute.amazonaws.com/en/factsheet-en/">Factsheet</a>
                                <ul></ul>
                            </li>
                            <li class="desktop <?php if (is_page('emisiones-corporativas-en')) { echo 'desktopSelect'; } ?>"><a href="http://ec2-52-50-46-136.eu-west-1.compute.amazonaws.com/en/emisiones-corporativas-en/">Issuances</a>
                                <ul></ul>
                            </li>
                        </ul> 
                    </li>
                    <li><a href="#">Corporate Governance</a>
                        <ul>
                            <li class="desktop <?php if (is_page('consejoadministracion-en')) { echo 'desktopSelect'; } ?>"><a href="http://ec2-52-50-46-136.eu-west-1.compute.amazonaws.com/en/consejoadministracion-en/">Board of Directors</a>
                                <ul></ul>
                            </li>
                            <li class="desktop <?php if (is_page('asamblea-accionistas-en')) { echo 'desktopSelect'; } ?>"><a href="http://ec2-52-50-46-136.eu-west-1.compute.amazonaws.com/en/asamblea-accionistas-en/">Shareholders Assembly</a>
                                <ul></ul>
                            </li>
                            <li class="desktop <?php if (is_page('estatutos-convenio-en')) { echo 'desktopSelect'; } ?>"><a href="http://ec2-52-50-46-136.eu-west-1.compute.amazonaws.com/en/estatutos-convenio-en/">Corporate Bylaws and Exclusive Agreement</a>
                                <ul></ul>
                            </li>
                            <li class="desktop <?php if (is_page('odigodeconducta-en')) { echo 'desktopSelect'; } ?>"><a href="http://ec2-52-50-46-136.eu-west-1.compute.amazonaws.com/en/codigodeconducta-en/">Behavior Code</a>
                                <ul></ul>
                            </li>
                            <li class="desktop <?php if (is_page('codigomejorespracticas-en')) { echo 'desktopSelect'; } ?>"><a href="http://ec2-52-50-46-136.eu-west-1.compute.amazonaws.com/en/codigomejorespracticas-en/">Code of Better Corporative Practices</a>
                                <ul></ul>
                            </li>
                        </ul>       
                    </li>
                    <li><a href="http://ec2-52-50-46-136.eu-west-1.compute.amazonaws.com/en/contacto-en/">Contact us</a></li>
                </ul>
            </div>
        </div>
      </div>
      <div class="row">
      	<div class="col-sm-12 col-xs-12">
      		<ul class="lista-idioma">
	        	<li class="lang-item lang-item-2 lang-item-es lang-item-first">
	        		<a lang="en-US" hreflang="en-US" href="<?php echo $translations['en']['url']; ?>"><h1 class="menuEnEs <?php if ($idioma == 'en') { echo 'activado';} ?>">EN</h1></a>
	          	</li>
				<li class="lang-item lang-item-5 lang-item-en">
					<a lang="es-MX" hreflang="es-MX" href="<?php echo $translations['es']['url']; ?>"><h1 class="menuEnEs <?php if ($idioma == 'es') { echo 'activado';} ?>">ES</h1></a>
				</li>
			</ul>
      	</div>
      </div>
    </div>
  </div>
 
<?php 
if (is_page("Conócenos-en") || is_page("mision-en") || is_page("historia-en") || is_page("conocenos_gfbbenresumen_en") || is_page("modelodenegocio-en") || is_page("estructuradirectiva-en")) { ?>
 <div class="fondoClaro visible-lg visible-md visible-sm">
     <div class="container">
         <div class="row">
             <div class="menu-claro">
                 <ul>
                     <li class="desktop <?php if (is_page('mision-en')) { echo 'desktopSelect'; } ?>"><a href="http://ec2-52-50-46-136.eu-west-1.compute.amazonaws.com/en/mision-en/">Mission</a></li>
                        <li class="desktop <?php if (is_page('historia-en')) { echo 'desktopSelect'; } ?>"><a href="http://ec2-52-50-46-136.eu-west-1.compute.amazonaws.com/en/historia-en/">History</a></li>
                        <li class="desktop <?php if (is_page('conocenos_gfbbenresumen_en')) { echo 'desktopSelect'; } ?>"><a href="http://ec2-52-50-46-136.eu-west-1.compute.amazonaws.com/en/conocenos_gfbbenresumen_en/">GFBB in Brief</a></li>
                        <li class="desktop <?php if (is_page('modelodenegocio-en')) { echo 'desktopSelect'; } ?>"><a href="http://ec2-52-50-46-136.eu-west-1.compute.amazonaws.com/en/modelodenegocio-en/">Business Model</a></li>
                        <li class="desktop <?php if (is_page('estructuradirectiva-en')) { echo 'desktopSelect'; } ?>"><a href="http://ec2-52-50-46-136.eu-west-1.compute.amazonaws.com/en/estructuradirectiva-en/">Organization Chart</a></li>
                        <li class="desktop"><a href="http://shareholdersandinvestors.bbva.com/TLBB/tlbb/bbvair/ing/index.jsp" target="_blank">Responsible Business</a></li>
                        <li class="desktop"><a href="http://inversores.bbva.com/TLBB/tlbb/bbvair/esp/index.jsp" target="_blank">BBVA Group</a></li>
                 </ul>
             </div>
         </div>
     </div>
 </div>

<?php 
  } 
if (is_page("Renta_fija-en") || is_page("rentafija_calificaciones_en") || is_page("emisiones-corporativas-en") || is_page('Factsheet-en')) { ?>
 <div class="fondoClaro visible-lg visible-md visible-sm">
     <div class="container">
         <div class="row">
             <div class="menu-claro">
                <ul>
                    <li class="desktop <?php if (is_page('rentafija_calificaciones_en')) { echo 'desktopSelect'; } ?>"><a href="http://ec2-52-50-46-136.eu-west-1.compute.amazonaws.com/en/rentafija_calificaciones_en/">Ratings</a> </li>
                    <li class="desktop <?php if (is_page('Factsheet-en')) { echo 'desktopSelect'; } ?>"><a href="http://ec2-52-50-46-136.eu-west-1.compute.amazonaws.com/en/factsheet-en/">Factsheet</a></li>
                    <li class="desktop <?php if (is_page('emisiones-corporativas-en')) { echo 'desktopSelect'; } ?>"><a href="http://ec2-52-50-46-136.eu-west-1.compute.amazonaws.com/en/emisiones-corporativas-en/">Issuances</a></li>
                </ul>  
             </div>
         </div>
     </div>
 </div>
<?php 
  } 
if (is_page("Gobierno_Corporativo-en") || is_page("consejoadministracion-en") || is_page("estatutos-convenio-en") || is_page("codigodeconducta-en")|| is_page("asamblea-accionistas-en")|| is_page("codigomejorespracticas-en")) { ?>
 <div class="fondoClaro visible-lg visible-md visible-sm">
     <div class="container">
         <div class="row">
             <div class="menu-claro">
                <ul>
                    <li class="desktop <?php if (is_page('consejoadministracion-en')) { echo 'desktopSelect'; } ?>"><a href="http://ec2-52-50-46-136.eu-west-1.compute.amazonaws.com/en/consejoadministracion-en/">Board of Directors</a></li>
                    <li class="desktop <?php if (is_page('asamblea-accionistas-en')) { echo 'desktopSelect'; } ?>"><a href="http://ec2-52-50-46-136.eu-west-1.compute.amazonaws.com/en/asamblea-accionistas-en/">Shareholders Assembly</a></li>
                    <li class="desktop <?php if (is_page('estatutos-convenio-en')) { echo 'desktopSelect'; } ?>"><a href="http://ec2-52-50-46-136.eu-west-1.compute.amazonaws.com/en/estatutos-convenio-en/">Corporate Bylaws and Exclusive Agreement</a></li>
                    <li class="desktop <?php if (is_page('codigodeconducta-en')) { echo 'desktopSelect'; } ?>"><a href="http://ec2-52-50-46-136.eu-west-1.compute.amazonaws.com/en/codigodeconducta-en/">Behavior Code</a></li>
                    <li class="desktop <?php if (is_page('codigomejorespracticas-en')) { echo 'desktopSelect'; } ?>"><a href="http://ec2-52-50-46-136.eu-west-1.compute.amazonaws.com/en/codigomejorespracticas-en/">Code of Better Corporative Practices</a></li>
                </ul>
             </div>
         </div>
     </div>
 </div>
<?php } ?>
<?php } ?>