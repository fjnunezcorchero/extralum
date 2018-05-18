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
    <title> Extralum - <?php echo $texto['menu_cabecera_nosotros']; ?></title>

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

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

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
        
                <!-- start page-title -->
        <section class="page-title">
            <div class="container">
                <div class="row">
                    <div class="col col-xs-12">
                        <h2><?php echo $texto['nosotros_titulo']; ?></h2>
                        <ol class="breadcrumb">
                            <li><a href="index.php"><?php echo $texto['menu_cabecera_inicio']; ?></a></li>
                            <li><?php echo $texto['nosotros_titulo']; ?></li>
                        </ol>
                    </div>
                </div> <!-- end row -->
            </div> <!-- end container -->
        </section>        
        <!-- end page-title -->


        <!-- start about-section -->
        <section class="section-padding about-section-s5">
            <div class="container">
                <div class="row">
                    <div class="col col-lg-8 col-md-10">
                        <div class="section-title-s2">
                            <h2><?php echo $texto['nosotros_slogan_1']; ?></h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col col-md-7">
                        <div class="about-details">
                            <p><?php echo $texto['nosotros_texto_1']; ?></p>
                            <p><?php echo $texto['nosotros_texto_2']; ?></p>
                            <p><?php echo $texto['nosotros_texto_3']; ?></p>
                            <p><?php echo $texto['nosotros_texto_4']; ?></p>
                        </div>
                    </div>

                    <div class="col col-md-5">
                        <div class="about-img">
                            <img src="assets/images/about-s4.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div> <!-- end container -->
        </section>        
        <!-- end about-section -->        


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

		
        <!-- start team-section -->
        <!--
        <section class="team-section section-padding">
            <div class="container">
                <div class="row">
                    <div class="col col-lg-3">
                        <div class="section-title-s5">
                            <h2>Nuestro equipo</h2>
                            <p>Formado por profesionales del mas alto nivel y con a&ntilde;os de experiencia en el sector.</p>
                        </div>
                    </div>
                    <div class="col col-lg-9">
                        <div class="team-grids">
                            <div class="grid">
                                <div class="member-pic">
                                    <img src="assets/images/team/img-1.jpg" alt>
                                </div>
                                <div class="member-info">
                                    <h4>John Smith</h4>
                                    <span>Founder</span>
                                </div>
                            </div>
                            <div class="grid">
                                <div class="member-pic">
                                    <img src="assets/images/team/img-2.jpg" alt>
                                </div>
                                <div class="member-info">
                                    <h4>John Smith</h4>
                                    <span>Founder</span>
                                </div>
                            </div>
                            <div class="grid">
                                <div class="member-pic">
                                    <img src="assets/images/team/img-3.jpg" alt>
                                </div>
                                <div class="member-info">
                                    <h4>John Smith</h4>
                                    <span>Founder</span>
                                </div>
                            </div>
                            <div class="grid">
                                <div class="member-pic">
                                    <img src="assets/images/team/img-4.jpg" alt>
                                </div>
                                <div class="member-info">
                                    <h4>John Smith</h4>
                                    <span>Founder</span>
                                </div>
                            </div>
                            <div class="grid">
                                <div class="member-pic">
                                    <img src="assets/images/team/img-5.jpg" alt>
                                </div>
                                <div class="member-info">
                                    <h4>John Smith</h4>
                                    <span>Founder</span>
                                </div>
                            </div>
                            <div class="grid">
                                <div class="member-pic">
                                    <img src="assets/images/team/img-6.jpg" alt>
                                </div>
                                <div class="member-info">
                                    <h4>John Smith</h4>
                                    <span>Founder</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
		-->
        <!-- end team-section -->

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
</body>
</html>