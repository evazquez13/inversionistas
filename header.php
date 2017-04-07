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
  <link rel="shortcut icon" href="http://ec2-52-213-166-151.eu-west-1.compute.amazonaws.com/wp-content/uploads/2017/03/favicon.png">
  <link rel="stylesheet" href="<?php echo bloginfo('template_url'); ?>/css/bootstrap.css">
  <link rel="stylesheet" href="<?php echo bloginfo('template_url'); ?>/css/custom.css">
  <link rel="stylesheet" href="<?php echo bloginfo('template_url'); ?>/css/menu.css">
</head>


  <?php wp_head(); ?>
<body>
<header>
  <div class="fonfoAzul">    
    <div class="container cabecera">
      <div class="row">
        <div class="col-md-3">
          <div class="logo-container">
            <a class="navbar-trigger">&nbsp;</a>  
            <a href="/" class="logo-cabecera"><img src="http://ec2-52-50-46-136.eu-west-1.compute.amazonaws.com/wp-content/uploads/2017/03/group-2.png" height="90" class="img-responsive hidden-xs" src="#"></a>
          </div>
        </div>
        <div class="col-md-4 accionistahead">
            <p><span class="bordehead"></span>Información Financiera</p>
        </div>
        <div class="col-md-2">
          <div class="col-md-6">
            <a onclick="alertEn()"><h1 class="menuEnEs">EN</h1></a>
          </div>
          <div class="col-md-6">
            <a onclick="alertEs()"><h1 class="menuEnEs activado">ES</h1></a>
          </div>
        </div>
      </div>
    </div>
  </div>
  </header>  

<div class="fonfoAzul visible-lg visible-md">
     <div class="container">
        <div class="row">
            <div class="menu-container">
              <div class="menu">
                <ul>
                  <li><a href="#">Inicio</a></li>
                  <li><a href="http://localhost/inversionistas/contact/">Conócenos</a></li>     
                  <li><a href="http://ec2-52-50-46-136.eu-west-1.compute.amazonaws.com/inf_financiera/">Información Financiera</a></li>
                  <li><a href="http://ec2-52-50-46-136.eu-west-1.compute.amazonaws.com/renta_fija/">Renta Fija</a></li>
                  <li><a href="http://ec2-52-50-46-136.eu-west-1.compute.amazonaws.com/gobierno_corporativo/">Gobierno Corporativo</a></li>
                  <li><a href="http://ec2-52-50-46-136.eu-west-1.compute.amazonaws.com/contacto/">Contacto</a></li>
                </ul>
            </div>
        </div>
      </div>
    </div>
</div>

  <div class="fonfoAzul hidden-lg hidden-md">
      <div class="container">
        <div class="row">
            <div class="menu-container">
              <div class="menu">
                <ul>
                    <li><a href="#">Home</a></li>
                  <li><a href="#">Conócenos</a>
                         <ul>
                            <li><a href="#">Misión</a></li>
                            <li><a href="#">Historia</a>
                                <ul></ul>
                            </li>
                            <li><a href="#">BBVA en Resumen</a>
                                <ul></ul>
                            </li>
                            <li><a href="#">Modelo de Negocio</a>
                                <ul></ul>
                            </li>
                            <li><a href="#">Estructura Directiva</a>
                                <ul></ul>
                            </li>
                            <li><a href="#">Negocio Responsable</a>
                                <ul></ul>
                            </li>
                            <li><a href="#">Grupo BBVA</a>
                                <ul></ul>
                            </li>
                        </ul> 
                    </li>     
                    <li><a href="#">Información Financiera</a>
                        <ul>
                            <li><a href="#">Información Trimestral</a>
                                <ul></ul>
                            </li>
                            <li><a href="#">Informe Anual</a>
                                <ul></ul>
                            </li>
                            <li><a href="#">Información para Reguladores</a>
                                <ul></ul>
                            </li>
                        </ul>  
                    </li>
                    <li><a href="#">Renta Fija</a>
                        <ul>
                            <li><a href="#">Calificaciones</a>
                                <ul></ul>
                            </li>
                            <li><a href="#">Factsheet</a>
                                <ul></ul>
                            </li>
                            <li><a href="#">Emisiones</a>
                                <ul></ul>
                            </li>
                        </ul>   -->
                    </li>
                    <li><a href="#">Gobierno Corporativo</a>
                        <ul>
                            <li><a href="#">Consejo de Administración</a>
                                <ul></ul>
                            </li>
                            <li><a href="#">Asamblea de Accionistas</a>
                                <ul></ul>
                            </li>
                            <li><a href="#">Estatutos Sociales y Convenio Único</a>
                                <ul></ul>
                            </li>
                            <li><a href="#">Código de Conducta</a>
                                <ul></ul>
                            </li>
                            <li><a href="#">Código de Mejores Prácticas Corporativas</a>
                                <ul></ul>
                            </li>
                        </ul>       
                    </li>
                    <li><a href="#">Contacto</a></li>
                </ul>
            </div>
        </div>
      </div>
    </div>
  </div>
 

<?php 
if (is_page("Conócenos")) { ?>
 <div class="fondoClaro visible-lg visible-md">
     <div class="container">
         <div class="row">
             <div class="menu-claro">
                 <ul>
                     <li><a href="#">Misión</a></li>
                        <li><a href="#">Historia</a></li>
                        <li><a href="#">BBVA en Resumen</a></li>
                        <li><a href="#">Modelo de Negocio</a>
                        </li>
                        <li><a href="#">Estructura Directiva</a>
                        </li>
                        <li><a href="#">Negocio Responsable</a>
                        </li>
                        <li><a href="#">Grupo BBVA</a>
                        </li>
                 </ul>
             </div>
         </div>
     </div>
 </div>

<?php 
  } 
if (is_page("Inf_Financiera")) { ?>
 <div class="fondoClaro visible-lg visible-md">
     <div class="container">
         <div class="row">
             <div class="menu-claro">
                <ul>
                    <li><a href="#">Información Trimestral</a></li>
                    <li><a href="#">Informe Anual</a></li>
                    <li><a href="#">Información para Reguladores</a></li>
                </ul>
             </div>
         </div>
     </div>
 </div>

<?php 
  } 
if (is_page("Renta_fija")) { ?>
 <div class="fondoClaro visible-lg visible-md">
     <div class="container">
         <div class="row">
             <div class="menu-claro">
                <ul>
                    <li><a href="#">Calificaciones</a> </li>
                    <li><a href="#">Factsheet</a></li>
                    <li><a href="#">Emisiones</a></li>
                </ul>  
             </div>
         </div>
     </div>
 </div>

<?php 
  } 
if (is_page("Gobierno_Corporativo")) { ?>
 <div class="fondoClaro visible-lg visible-md">
     <div class="container">
         <div class="row">
             <div class="menu-claro">
                <ul>
                    <li><a href="#">Consejo de Administración</a></li>
                    <li><a href="#">Asamblea de Accionistas</a></li>
                    <li><a href="#">Estatutos Sociales y Convenio Único</a></li>
                    <li><a href="#">Código de Conducta</a></li>
                    <li><a href="#">Código de Mejores Prácticas Corporativas</a></li>
                </ul>
             </div>
         </div>
     </div>
 </div>
<?php 
  } 
if (is_page("Contacto")) { ?>
<!-- <div class="fondoClaro visible-lg visible-md">
     <div class="container">
         <div class="row">
             <div class="menu-claro">

             </div>
         </div>
     </div>
 </div>
-->
<?php 
  } 
  ?>