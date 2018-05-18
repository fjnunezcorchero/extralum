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
    <title> Extralum - <?php echo $texto['menu_cabecera_contacto']; ?></title>

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

<body class="contact-pg">

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
                        <h2><?php echo $texto['menu_cabecera_contacto']; ?></h2>
                        <ol class="breadcrumb">
                            <li><a href="index.php"><?php echo $texto['menu_cabecera_inicio']; ?></a></li>
                            <li><?php echo $texto['menu_cabecera_contacto']; ?></li>
                        </ol>
                    </div>
                </div> <!-- end row -->
            </div> <!-- end container -->
        </section>        
        <!-- end page-title -->
        
        <!-- start contact-pg-content -->
        <section class="contact-pg-content section-padding">
            <div class="container">
                <div class="row">
                    <div class="col col-md-8 col-md-offset-2">
                        <div class="section-title-s3">
                            <h2><?php echo $texto['contacto_cabecera']; ?></h2>
                            <p><?php echo $texto['contacto_texto']; ?></p>
                        </div>
                    </div>
                </div>                
                <div class="row">
                    <div class="col col-md-6">
                    	<!-- <div class="contact-location-map" id="map"></div> -->
                        <div class=""><img src="assets/images/tarjeta.png"></div>
                    </div>
                    <div class="col col-md-6">
                        <div class="contact-form"> 
                            <form method="post" id="contact-form-s2" class="form row contact-validation-active">
                            <input type="hidden" name="formulario" id="formulario" value="contacto">
                            <input type="hidden" name="phone" id="phone" value="">
                            <input type="hidden" name="empresa" id="empresa" value="">
                            <input type="hidden" name="location" id="location" value="">
                                <div class="col col-xs-12">
                                    <input type="text" class="form-control" id="name" name="name" placeholder="<?php echo $texto['contacto_formulario_nombre']; ?>">
                                </div>
                                <div class="col col-xs-12">
                                    <input type="email" class="form-control" id="email" name="email" placeholder="<?php echo $texto['contacto_formulario_correo']; ?>">
                                </div>
                                <div class="col col-xs-12">
                                    <input type="text" class="form-control" id="phone" name="phone" placeholder="<?php echo $texto['contacto_formulario_telefono']; ?>">
                                </div>
                                <div class="col col-xs-12">
                                	<select class="form-control" name="departamento" id="departamento">
                                		<option value="0"><?php echo $texto['contacto_formulario_departamento_elegir']; ?></option>
                                		<option value="1"><?php echo $texto['contacto_formulario_departamento_administracion']; ?></option>
                                		<option value="2"><?php echo $texto['contacto_formulario_departamento_contabilidad']; ?></option>
                                		<option value="3"><?php echo $texto['contacto_formulario_departamento_comercial']; ?></option>
                                		<option value="4"><?php echo $texto['contacto_formulario_departamento_produccion']; ?></option>
                                		<option value="5"><?php echo $texto['contacto_formulario_departamento_administracion']; ?></option>
                                	</select>
                                </div>
                                <div class="col col-xs-12">
                                    <textarea class="form-control" name="message" id="message" placeholder="<?php  echo $texto['contacto_formulario_departamento_comentario']; ?>"></textarea>
                                </div>
                                <div class="col col-xs-12 submit-btn">
                                    <button type="submit">Enviar</button>
                                    <div id="loader">
                                        <i class="fa fa-refresh fa-spin fa-3x fa-fw"></i>
                                    </div>
                                </div>
                                <div class="error-handling-messages">
                                    <div id="success"><?php echo $texto['contacto_formulario_exito']; ?></div>
                                    <div id="error"><?php echo $texto['contacto_formulario_error']; ?></div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div> <!-- end row -->
            </div> <!-- end container -->
        </section>
        <!-- end contact-pg-content -->
        
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