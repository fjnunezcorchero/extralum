<?php
include('assets/include/config.php');
?>
<!DOCTYPE html>
<html lang="<?php echo $language; ?>">
<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="themexriver">

    <!-- Page Title -->
    <title> Extralum - <?php echo $texto['servicio_anodizado']; ?> </title>

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

<body class="service-single-pg">

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
                        <h2><?php echo $texto['servicio_desarrollo']; ?></h2>
                        <ol class="breadcrumb">
                            <li><a href="index.php"><?php echo $texto['menu_cabecera_inicio']; ?></a></li>
                            <li><?php echo $texto['servicio_desarrollo']; ?></li>
                        </ol>
                    </div>
                </div> <!-- end row -->
            </div> <!-- end container -->
        </section>        
        <!-- end page-title -->
        
        <!-- start service-single-section -->
        <section class="service-single-section section-padding">
            <div class="container">
                <div class="row">
                    <div class="col col-md-8 col-md-push-4">
                        <div class="service-single-content">
                            <h3><?php echo $texto['desarrollo_cabecera']; ?></h3>
                            <p></p>
                            <div class="img-holder">
                                <img src="assets/images/service-single/img-5.jpg" >
                            </div>
                            <div>
                            	<div style="margin: 2em;">
									<p><?php echo $texto['desarrollo_texto_1']; ?></p>
									<p><?php echo $texto['desarrollo_texto_2']; ?></p>
	                            </div>

                            </div> <!-- end discussion-faq -->
                        </div> <!-- end service-single-content -->
                    </div> <!-- end col -->
                    <div class="col col-md-4 col-md-pull-8">
                        <div class="service-sidebar">
                            <div class="widget link-widget">
                                <ul>
                                    <li><a href="#"><?php echo $texto['inicio_seccion_actividad']; ?></a></li>
                                    <li><a href="extrusion.php"><?php echo $texto['servicio_extrusion']; ?></a></li>
                                    <li><a href="lacado.php"><?php echo $texto['servicio_lacado']; ?></a></li>
                                    <li><a href="anodizado.php"><?php echo $texto['servicio_anodizado']; ?></a></li>
                                    <li><a href="mecanizado.php"><?php echo $texto['servicio_mecanizado']; ?></a></li>
                                    <li class="active"><a href="desarrollo.php"><?php echo $texto['servicio_desarrollo']; ?></a></li>
                                </ul>
                            </div>
                            <div class="widget contact-widget">
                                <h3><?php echo $texto['menu_cabecera_contacto']; ?></h3>
                                <ul>
                                    <li><i class="fa fa-location-arrow"></i> Po. Ind. C/ Cueva de la Viera 29200 Antequera (M&aacute;laga)</li>
                                    <li><i class="fa fa-phone"></i> +34 951 90 20 12 <br></li>
                                    <li><i class="fa fa-envelope"></i> info@extralum.es</li>
                                </ul>
                            </div>
                            
                        </div>
                    </div>
                </div> <!-- end row -->
            </div> <!-- end container -->
        </section>
        <!-- end service-single-section -->
        
        <?php include('assets/include/footer.php'); ?>
        
    </div>
    <!-- end of page-wrapper -->

    <!-- All JavaScript files
    ================================================== -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Plugins for this template -->
    <script src="assets/js/jquery-plugin-collection.js"></script>

    <!-- Custom script for this template -->
    <script src="assets/js/script.js"></script>
</body>
</html>
<?php
close_connection($conn);
?>