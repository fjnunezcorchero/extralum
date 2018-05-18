<!-- Start header -->
        <header id="header" class="site-header header-style-1">
            <div class="topbar">
                <div class="container">
                    <div class="row">
                        <div class="col col-sm-5">
                            <ul class="contact-info">
                                <li><i class="fa fa-phone-square"></i> <?php echo $texto['telefono']; ?>: +34 951 90 20 12</li>
                                <li><i class="fa fa-clock-o"></i> <?php echo $texto['dias_abierto']; ?>: 9 am - 7 pm</li>
                            </ul>
                        </div>
                        <div class="col col-sm-3">
                            <div class="language">
                                <span><i class="fa fa-globe"></i> <?php echo $texto['idioma']; ?>:</span>
                                <div class="select-box">
                                    <select id="language-select" class="selectpicker">
                                    <?php
                                        $result = get_idiomas_disponibles($conn);
                                        while ($row = $result->fetch_assoc())
                                        {
                                            //echo '<option value="'.$row['codigo'].'" data-thumbnail="assets/flags/4x3/'.$row['codigo'].'.svg"';
                                            echo '<option value="'.$row['codigo'].'" data-thumbnail="assets/images/about-s4.jpg"';
                                            if ($_SESSION['language'] == $row['codigo']) echo ' selected ';
                                            echo '>'.$row['nombre'].'</option>';
                                        }
                                    ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col col-sm-4">
                        	<div class="pull-right">
                        		<a class="enlace-cabecera pull-right" href="unete.php"><?php echo strtoupper($texto['unete']); ?></a>
                        		<img src="assets/images/bandera_es_eu.png"/>
                        		<a href="#"><img src="assets/images/facebook-2429746_640.png" width="32"></a>
                        		<a href="#"><img src="assets/images/linkedin-2815969_640.png" width="32"></a>
                        	</div>
                        </div>
                    </div>
                </div> <!-- end container -->
            </div> <!-- end topbar -->
            <nav class="navigation navbar navbar-default">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="open-btn">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a href="index.php" class="navbar-brand"><img style="margin-right: -20px;" src="assets/images/logo.png" alt="logotipo Extralum"></a>
                    </div>
                    <div id="navbar" class="navbar-collapse collapse navbar-right navigation-holder">
                        <button class="close-navbar"><i class="fa fa-close"></i></button>
                        <ul class="nav navbar-nav">
                            <li><a href="index.php"><?php echo $texto['menu_cabecera_inicio']; ?></a></li>
                            <li><a href="nosotros.php"><?php echo $texto['menu_cabecera_nosotros']; ?></a></li>
                            <li class="menu-item-has-children">
                                <a href="#"><?php echo $texto['menu_cabecera_actividad']; ?></a>
                                <ul class="sub-menu">
                                    <li><a href="extrusion.php"><?php echo $texto['menu_cabecera_extrusion']; ?></a></li>
                                    <li><a href="lacado.php"><?php echo $texto['menu_cabecera_lacado']; ?></a></li>
                                    <li><a href="anodizado.php"><?php echo $texto['menu_cabecera_anodizado']; ?></a></li>
                                    <li><a href="mecanizado.php"><?php echo $texto['menu_cabecera_mecanizado']; ?></a></li>
                                    <li><a href="desarrollo.php"><?php echo $texto['menu_cabecera_desarrollo']; ?></a></li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="#"><?php echo $texto['menu_cabecera_sectores']; ?></a>
                                <ul class="sub-menu">
                                    <li><a href="naval.php"><?php echo $texto['menu_cabecera_naval']; ?></a></li>
                                    <li><a href="ferrovial.php"><?php echo $texto['menu_cabecera_ferrovial']; ?></a></li>
                                    <li><a href="construccion.php"><?php echo $texto['menu_cabecera_construccion']; ?></a></li>
                                    <li><a href="industria-electrica.php"><?php echo $texto['menu_cabecera_industria']; ?></a></li>
                                    <li><a href="decoracion.php"><?php echo $texto['menu_cabecera_decoracion']; ?></a></li>
                                    <li><a href="automocion.php"><?php echo $texto['menu_cabecera_automocion']; ?></a></li>
                                    
                                </ul>
                            </li>
                            <li><a href="medioambiente.php"><?php echo $texto['menu_cabecera_medio']; ?></a></li>
                            <li><a href="catalogo.php"><?php echo $texto['menu_cabecera_catalogo']; ?></a></li>
                            <li><a href="contacto.php"><?php echo $texto['menu_cabecera_contacto']; ?></a></li>
                        </ul>
                    </div><!-- end of nav-collapse -->
                    <!-- <div class="search-social">
                        <div class="header-search-area">
                            <div class="header-search-form">
                                <form class="form">
                                    <div>
                                        <input type="text" class="form-control" placeholder="Search here">
                                    </div>
                                    <button type="submit" class="btn"><i class="fa fa-search"></i></button>
                                </form>
                            </div>
                        </div>
                        <div class="social" style="margin-top: -4px;">
                        	<a class="enlace-cabecera pull-right" href="unete.html">&Uacute;nete a nosotros</a>
                            
                        </div>
                    </div> -->
                </div><!-- end of container -->
            </nav>
        </header>
        <!-- end of header -->