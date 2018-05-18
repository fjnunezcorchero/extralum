<?php
include('assets/include/config.php');
?>
<!DOCTYPE html>
<html lang="<?php echo $language; ?>">
<head>
	<?php include('google_analytics.php'); ?>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="themexriver">

    <!-- Page Title -->
    <title> <?php echo $texto['titulo_home']; ?> </title>

    <!-- Favicon and Touch Icons -->
    <link href="assets/images/favicon/favicon.png" rel="shortcut icon" type="image/png">
    <link href="assets/images/favicon/apple-touch-icon-57x57.png" rel="apple-touch-icon" sizes="57x57">
    <link href="assets/images/favicon/apple-touch-icon-72x72.png" rel="apple-touch-icon" sizes="72x72">
    <link href="assets/images/favicon/apple-touch-icon-114x114.png" rel="apple-touch-icon" sizes="114x114">
    <link href="assets/images/favicon/apple-touch-icon-144x144.png" rel="apple-touch-icon" sizes="144x144">

    <!-- Icon fonts -->
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/css/flaticon.css" rel="stylesheet">

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Plugins for this template -->
    <link href="assets/css/animate.css" rel="stylesheet">
    <link href="assets/css/owl.carousel.css" rel="stylesheet">
    <link href="assets/css/owl.theme.css" rel="stylesheet">
    <link href="assets/css/slick.css" rel="stylesheet">
    <link href="assets/css/slick-theme.css" rel="stylesheet">
    <link href="assets/css/owl.transitions.css" rel="stylesheet">
    <link href="assets/css/jquery.fancybox.css" rel="stylesheet">
    <link href="assets/css/bootstrap-select.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    
    <!-- Estilos propios -->
    <link href="css/estilo.css" rel="stylesheet">
    
    <!-- Aviso de cookies -->
    <link href="assets/css/cookiealert.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- COOKIES -->
    <div class="alert alert-dismissible text-center cookiealert" role="alert">
        <div class="cookiealert-container">
            <b>Uso de cookies</b> Utilizamos cookies propias y de terceros para mejorar nuestros servicios. <a href="politica_cookies.php" target="_blank">Ver politica de cookies</a>
    
            <button type="button" class="btn btn-primary btn-sm acceptcookies" aria-label="Close">
                Acepto
            </button>
        </div>
    </div>
    <!-- /COOKIES -->

    <!-- start page-wrapper -->
    <div class="page-wrapper">

        <!-- start preloader -->
        <div class="preloader">
            <div class="inner">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
        <!-- end preloader -->

        <?php include('assets/include/header.php'); ?>
		
        <?php include('assets/include/hero_slider.php'); ?>


        <!-- start services-section -->
        <section class="services-section section-padding">
            <div class="container">
                <div class="row">
                    <div class="col col-xs-12">
                        <div class="section-title">
                            <h2><?php echo $texto['inicio_seccion_actividad']; ?></h2>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col col-xs-12">
                        <div class="service-grids">
                            <div class="grid">
                                <div class="img-details-link">
                                    <div class="details-link">
                                        <a href="extrusion.php"><i class="fa fa-arrow-right"></i></a>
                                    </div>
                                    <img src="assets/images/services/img-1.jpg" >
                                </div>
                                <div class="service-details">
                                    <h3><?php echo $texto['servicio_extrusion']; ?></h3>
                                    <p><?php echo $texto['servicio_extrusion_texto']; ?></p>
                                </div>
                            </div>
                            <div class="grid">
                                <div class="img-details-link">
                                    <div class="details-link">
                                        <a href="lacado.php"><i class="fa fa-arrow-right"></i></a>
                                    </div>
                                    <img src="assets/images/services/img-2.jpg" >
                                </div>
                                <div class="service-details">
                                    <h3><?php echo $texto['servicio_lacado']; ?></h3>
                                    <p><?php echo $texto['servicio_lacado_texto']; ?></p>
                                </div>
                            </div>
                            <div class="grid">
                                <div class="img-details-link">
                                    <div class="details-link">
                                        <a href="anodizado.php"><i class="fa fa-arrow-right"></i></a>
                                    </div>
                                    <img src="assets/images/services/img-3.jpg" >
                                </div>
                                <div class="service-details">
                                    <h3><?php echo $texto['servicio_anodizado']; ?></h3>
                                    <p><?php echo $texto['servicio_anodizado_texto']; ?></p>
                                </div>
                            </div>
                            <div class="grid">
                                <div class="img-details-link">
                                    <div class="details-link">
                                        <a href="mecanizado.php"><i class="fa fa-arrow-right"></i></a>
                                    </div>
                                    <img src="assets/images/services/img-4.jpg" >
                                </div>
                                <div class="service-details">
                                    <h3><?php echo $texto['servicio_mecanizado']; ?></h3>
                                    <p><?php echo $texto['servicio_mecanizado_texto']; ?></p>
                                </div>
                            </div>
                            <div class="grid">
                                <div class="img-details-link">
                                    <div class="details-link">
                                        <a href="desarrollo.php"><i class="fa fa-arrow-right"></i></a>
                                    </div>
                                    <img src="assets/images/services/img-5.jpg" >
                                </div>
                                <div class="service-details">
                                    <h3><?php echo $texto['servicio_desarrollo']; ?></h3>
                                    <p><?php echo $texto['servicio_desarrollo_texto']; ?></p>
                                </div>
                            </div>
                            <div class="grid">
                                <div class="img-details-link">
                                    <div class="details-link">
                                        <a href="medioambiente.php"><i class="fa fa-arrow-right"></i></a>
                                    </div>
                                    <img src="assets/images/services/img-6.jpg" >
                                </div>
                                <div class="service-details">
                                    <h3><?php echo $texto['servicio_medioambiente']; ?></h3>
                                    <p><?php echo $texto['servicio_medioambiente_texto']; ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- end container -->
        </section>
        <!-- end services-section -->


        <!-- start cta -->
        <section class="cta">
            <div class="container">
                <div class="row">
                    <div class="col col-xs-12">
                        <h2><?php echo $texto['inicio_descubra_mas']; ?></h2>
                    </div>
                </div>
            </div> <!-- end container -->
        </section>
        <!-- end cta -->


        <!-- start services-section-s2 -->
        <section class="services-section-s2 section-padding">
            <div class="container">
                <div class="row">
                    <div class="col col-md-3">
                        <div class="services-phone">
                            <div class="phone-bg"></div>
                            <img src="assets/images/phone.png" >
                            <div class="phone-inner">
                                <h3><?php echo $texto['inicio_mas_informacion']; ?></h3>
                                
                                <a href="contacto.php" class="theme-btn-s2"><?php echo $texto['inicio_hable']; ?></a>
                            </div>
                        </div>
                    </div>

                    <div class="col col-md-8 col-md-offset-1">
                        <div class="services-s2-grids">
                            <div class="grid">
                                <div class="inner">
                                    <div class="icon">
                                        <i class="fi flaticon-boat"></i>
                                    </div>
                                    <div class="details">
                                        <h3><a href="naval.php"><?php echo $texto['sectores_naval']; ?></a></h3>
                                        <p><?php echo $texto['sectores_naval_texto']; ?></p>
                                    </div>
                                </div>
                            </div>
                            <div class="grid">
                                <div class="inner">
                                    <div class="icon">
                                        <i class="fi flaticon-train"></i>
                                    </div>
                                    <div class="details">
                                        <h3><a href="ferrovial.php"><?php echo $texto['sectores_ferrovial']; ?></a></h3>
                                        <p><?php echo $texto['sectores_ferrovial_texto']; ?></p>
                                    </div>
                                </div>
                            </div>
                            <div class="grid">
                                <div class="inner">
                                    <div class="icon">
                                        <i class="fi flaticon-construction"></i>
                                    </div>
                                    <div class="details">
                                        <h3><a href="construccion.php"><?php echo $texto['sectores_construccion']; ?></a></h3>
                                        <p><?php echo $texto['sectores_construccion_texto']; ?></p>
                                    </div>
                                </div>
                            </div>
                            <div class="grid">
                                <div class="inner">
                                    <div class="icon">
                                        <i class="fi flaticon-technology"></i>
                                    </div>
                                    <div class="details">
                                        <h3><a href="industria-electrica.php"><?php echo $texto['sectores_industria']; ?></a></h3>
                                        <p><?php echo $texto['sectores_industria_texto']; ?></p>
                                    </div>
                                </div>
                            </div>
                            <div class="grid">
                                <div class="inner">
                                    <div class="icon">
                                        <i class="fi flaticon-picture"></i>
                                    </div>
                                    <div class="details">
                                        <h3><a href="decoracion.php"><?php echo $texto['sectores_decoracion']; ?></a></h3>
                                        <p><?php echo $texto['sectores_decoracion_texto']; ?></p>
                                    </div>
                                </div>
                            </div>
                            <div class="grid">
                                <div class="inner">
                                    <div class="icon">
                                        <i class="fi flaticon-car"></i>
                                    </div>
                                    <div class="details">
                                        <h3><a href="automocion.php"><?php echo $texto['sectores_automocion']; ?></a></h3>
                                        <p><?php echo $texto['sectores_automocion_texto']; ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- end row -->
            </div> <!-- end container -->
        </section>
        <!-- end services-section-s2 -->


        <!-- start about-section -->
        <section class="section-padding about-section">
            <div class="container">
                <div class="row">
                    <div class="col col-lg-12 col-md-12">
                        <div class="section-title-s2">
                            <h2><?php echo $texto['inicio_distribucion_cabecera']; ?></h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col col-md-7">
                        <div class="about-details">
                            <p><?php echo $texto['inicio_distribucion_texto']; ?></p>
                            <div class="skill-progress-bar">
                                <div class="skills">
                                    <div class="skill">
                                        <h6><?php echo $texto['inicio_distribucion_punto_uno']; ?></h6>
                                        <div class="progress">
                                            <div class="progress-bar" data-percent="85"></div>
                                        </div>
                                    </div>
                                    <div class="skill">
                                        <h6><?php echo $texto['inicio_distribucion_punto_dos']; ?></h6>
                                        <div class="progress">
                                            <div class="progress-bar" data-percent="98"></div>
                                        </div>
                                    </div>
                                    <div class="skill">
                                        <h6><?php echo $texto['inicio_distribucion_punto_tres']; ?></h6>
                                        <div class="progress">
                                            <div class="progress-bar" data-percent="92"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col col-md-5">
                        <div class="about-chart">
                            <img src="assets/images/distribucion.jpg" >
                        </div>
                    </div>
                </div>
            </div> <!-- end container -->
        </section>
        <!-- end about-section -->


        <!-- start projects-section -->
        <section class="projects-section section-padding">
            <div class="container">
                <div class="row">
                    <div class="col col-xs-12">
                        <div class="section-title">
                            <h2><?php echo $texto['inicio_especialidades']; ?></h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col col-xs-12 sortable-gallery">
                        <div class="gallery-filters projects-list">
                            <ul>
                                <li><a data-filter="*" href="#" class="current"><?php echo $texto['inicio_especialidades_todo']; ?></a></li>
                                <li><a data-filter=".extrusion" href="#"><?php echo $texto['inicio_especialidades_extrusion']; ?></a></li>
                                <li><a data-filter=".lacado" href="#"><?php echo $texto['inicio_especialidades_lacado']; ?></a></li>
                                <li><a data-filter=".anodizado" href="#"><?php echo $texto['inicio_especialidades_anodizado']; ?></a></li>
                                <li><a data-filter=".mecanizado" href="#"><?php echo $texto['inicio_especialidades_mecanizado']; ?></a></li>
                            </ul>
                        </div>

                        <div class="gallery-container projects-grid">
                            <div class="grid extrusion">
                                <div class="inner">
                                    <div class="img-holder">
                                        <img src="assets/images/projects/img-1.jpg" >
                                    </div>
                                    <div class="details">
                                        <div class="details-inner">
                                            <ul>
                                                <li><a href="assets/images/projects/img-1.jpg" class="fancybox"><i class="fa fa-search"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid extrusion">
                                <div class="inner">
                                    <div class="img-holder">
                                        <img src="assets/images/projects/img-2.jpg" >
                                    </div>
                                    <div class="details">
                                        <div class="details-inner">
                                            <ul>
                                                <li><a href="assets/images/projects/img-2.jpg" class="fancybox"><i class="fa fa-search"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid extrusion">
                                <div class="inner">
                                    <div class="img-holder">
                                        <img src="assets/images/projects/img-3.jpg" >
                                    </div>
                                    <div class="details">
                                        <div class="details-inner">
                                            <ul>
                                                <li><a href="assets/images/projects/img-3.jpg" class="fancybox"><i class="fa fa-search"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
							<div class="grid extrusion">
                                <div class="inner">
                                    <div class="img-holder">
                                        <img src="assets/images/projects/img-15.jpg" >
                                    </div>
                                    <div class="details">
                                        <div class="details-inner">
                                            <ul>
                                                <li><a href="assets/images/projects/img-15.jpg" class="fancybox"><i class="fa fa-search"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid lacado">
                                <div class="inner">
                                    <div class="img-holder">
                                        <img src="assets/images/projects/img-4.jpg" >
                                    </div>
                                    <div class="details">
                                        <div class="details-inner">
                                            <ul>
                                                <li><a href="assets/images/projects/img-4.jpg" class="fancybox"><i class="fa fa-search"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid lacado">
                                <div class="inner">
                                    <div class="img-holder">
                                        <img src="assets/images/projects/img-5.jpg" >
                                    </div>
                                    <div class="details">
                                        <div class="details-inner">
                                            <ul>
                                                <li><a href="assets/images/projects/img-5.jpg" class="fancybox"><i class="fa fa-search"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid lacado">
                                <div class="inner">
                                    <div class="img-holder">
                                        <img src="assets/images/projects/img-6.jpg" >
                                    </div>
                                    <div class="details">
                                        <div class="details-inner">
                                            <ul>
                                                <li><a href="assets/images/projects/img-6.jpg" class="fancybox"><i class="fa fa-search"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid lacado">
                                <div class="inner">
                                    <div class="img-holder">
                                        <img src="assets/images/projects/img-7.jpg" >
                                    </div>
                                    <div class="details">
                                        <div class="details-inner">
                                            <ul>
                                                <li><a href="assets/images/projects/img-7.jpg" class="fancybox"><i class="fa fa-search"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
							<div class="grid lacado">
                                <div class="inner">
                                    <div class="img-holder">
                                        <img src="assets/images/projects/img-16.jpg" >
                                    </div>
                                    <div class="details">
                                        <div class="details-inner">
                                            <ul>
                                                <li><a href="assets/images/projects/img-16.jpg" class="fancybox"><i class="fa fa-search"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid lacado">
                                <div class="inner">
                                    <div class="img-holder">
                                        <img src="assets/images/projects/img-8.jpg" >
                                    </div>
                                    <div class="details">
                                        <div class="details-inner">
                                            <ul>
                                                <li><a href="assets/images/projects/img-8.jpg" class="fancybox"><i class="fa fa-search"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
							<div class="grid lacado">
                                <div class="inner">
                                    <div class="img-holder">
                                        <img src="assets/images/projects/img-9.jpg" >
                                    </div>
                                    <div class="details">
                                        <div class="details-inner">
                                            <ul>
                                                <li><a href="assets/images/projects/img-9.jpg" class="fancybox"><i class="fa fa-search"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="grid anodizado">
                                <div class="inner">
                                    <div class="img-holder">
                                        <img src="assets/images/projects/img-10.jpg" >
                                    </div>
                                    <div class="details">
                                        <div class="details-inner">
                                            <ul>
                                                <li><a href="assets/images/projects/img-10.jpg" class="fancybox"><i class="fa fa-search"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid anodizado">
                                <div class="inner">
                                    <div class="img-holder">
                                        <img src="assets/images/projects/img-11.jpg" >
                                    </div>
                                    <div class="details">
                                        <div class="details-inner">
                                            <ul>
                                                <li><a href="assets/images/projects/img-11.jpg" class="fancybox"><i class="fa fa-search"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid anodizado">
                                <div class="inner">
                                    <div class="img-holder">
                                        <img src="assets/images/projects/img-12.jpg" >
                                    </div>
                                    <div class="details">
                                        <div class="details-inner">
                                            <ul>
                                                <li><a href="assets/images/projects/img-12.jpg" class="fancybox"><i class="fa fa-search"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="grid mecanizado">
                                <div class="inner">
                                    <div class="img-holder">
                                        <img src="assets/images/projects/img-13.jpg" >
                                    </div>
                                    <div class="details">
                                        <div class="details-inner">
                                            <ul>
                                                <li><a href="assets/images/projects/img-13.jpg" class="fancybox"><i class="fa fa-search"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="grid mecanizado">
                                <div class="inner">
                                    <div class="img-holder">
                                        <img src="assets/images/projects/img-14.jpg" >
                                    </div>
                                    <div class="details">
                                        <div class="details-inner">
                                            <ul>
                                                <li><a href="assets/images/projects/img-14.jpg" class="fancybox"><i class="fa fa-search"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> <!-- end col -->
                </div> <!-- end row -->
            </div> <!-- end container -->
        </section>
        <!-- end projects-section -->
        
        <!-- start contact-section -->
        <section class="contact-section section-padding">
            <div class="container">
                <div class="row">
                    <div class="col col-md-6">
                    	<br/><br/><br/>
                        <!-- <div class="contact-location-map" id="map"></div> -->
                        <div class=""><img src="assets/images/tarjeta.png"></div>
                    </div>
                    <div class="col col-md-6">
                        <div class="section-title-s4">
                            <h2><?php echo $texto['inicio_contacte']; ?></h2>
                        </div>
                        <div class="contact-form">
                            <form method="post" id="contact-form-s2" class="form row contact-validation-active">
                            <input type="hidden" name="formulario" id="formulario" value="contacto">
                            <input type="hidden" name="empresa" id="empresa" value="">
                            <input type="hidden" name="location" id="location" value="">
                                <div class="col col-sm-6">
                                    <label for="name"><?php echo $texto['inicio_contacto_form_nombre']; ?></label>
                                    <input type="text" class="form-control" id="name" name="name">
                                </div>
                                <div class="col col-sm-6">
                                    <label for="email"><?php echo $texto['inicio_contacto_form_correo']; ?></label>
                                    <input type="email" class="form-control" id="email" name="email">
                                </div>
                                <div class="col col-sm-6">
                                    <label for="phone"><?php echo $texto['inicio_contacto_form_telefono']; ?></label>
                                    <input type="text" class="form-control" id="phone" name="phone">
                                </div>
                                <div class="col col-sm-6">
                                	<label for="departamento"><?php echo $texto['inicio_contacto_form_departamento']; ?></label>
                                	<select class="form-control" id="departamento" name="departamento">
                                		<option value="0"><?php echo $texto['inicio_contacto_form_departamento_opcion1']; ?></option>
                                		<option value="1"><?php echo $texto['inicio_contacto_form_departamento_opcion2']; ?></option>
                                		<option value="2"><?php echo $texto['inicio_contacto_form_departamento_opcion3']; ?></option>
                                		<option value="3"><?php echo $texto['inicio_contacto_form_departamento_opcion4']; ?></option>
                                		<option value="4"><?php echo $texto['inicio_contacto_form_departamento_opcion5']; ?></option>
                                		<option value="5"><?php echo $texto['inicio_contacto_form_departamento_opcion6']; ?></option>
                                	</select>
                                </div>
                                <div class="col col-sm-12">
                                	<textarea class="form-control" name="message" id="message" placeholder="<?php echo $texto['inicio_contacto_form_comentario']; ?>" rows="6"></textarea>
                                </div>
                                <div class="col col-sm-6">
                                    
                                </div>
                                <div class="col col-xs-12 submit-btn">
                                    <button type="submit"><?php echo $texto['inicio_contacto_form_enviar']; ?></button>
                                    <div id="loader">
                                        <i class="fa fa-refresh fa-spin fa-3x fa-fw"></i>
                                    </div>
                                </div>
                                <div class="error-handling-messages">
                                    <div id="success"><?php echo $texto['inicio_contacto_form_gracias']; ?></div>
                                    <div id="error"> <?php echo $texto['inicio_contacto_form_error']; ?> </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div> <!-- end row -->
            </div> <!-- end container -->
        </section>
        <!-- end contact-section -->

		<?php include('assets/include/footer.php'); ?>

    </div>
    <!-- end of page-wrapper -->



    <!-- All JavaScript files
    ================================================== -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Plugins for this template -->
    <script src="assets/js/jquery-plugin-collection.js"></script>

    <!-- Google map api -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAc2Np8jX7FwLkzh4QCv4Aps2KZhhlTVdQ" async defer></script>

    <!-- Custom script for this template -->
    <script src="assets/js/script.js"></script>
    
    <!-- Cookies -->
    <script src="assets/js/cookiealert-standalone.js"></script>
</body>
</html>
<?php
close_connection($conn);
?>