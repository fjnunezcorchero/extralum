<?php
include('../assets/include/accesobd.php');
include('../clases/perfil.class.php');
include('../clases/sesion.class.php');
include('../clases/usuario.class.php');

session_start();
header('Cache-Control: no-cache');
header('Pragma: no-cache');
$usuario = new Usuario($conn);
$sesion = new Sesion($conn);
// Comprueba si existe una sesión válida.
if (!$sesion->compruebaSesion($_SESSION["sesion"]))
{
    header('Location:../sesion_terminada.php');
    exit();
}
// Comprueba si el usuario tiene derecho de acceso al portal del gestor.
$usuario->getUsuario($sesion->idUsuario);
if (!$usuario->compruebaDerecho("ACADM"))
{
    header('Location:../salir.php?id=345');
    exit();
}

$id_usuario = 0;
$accion = 'Nuevo usuario';
if (isset($_REQUEST["id"])) {$id_usuario = $_REQUEST["id"]; $accion = 'Modificar usuario';}
$usuario_gestion = new Usuario($conn);
$usuario_gestion->getUsuario($id_usuario);
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>EXtralum | Panel de control</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.2 -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />    
    <!-- FontAwesome 4.3.0 -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons 2.0.0 -->
    <link href="http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet" type="text/css" />    
    <!-- Theme style -->
    <link href="dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
    <!-- AdminLTE Skins. Choose a skin from the css/skins 
         folder instead of downloading all of them to reduce the load. -->
    <link href="dist/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css" />
    <!-- iCheck -->
    <link href="plugins/iCheck/flat/blue.css" rel="stylesheet" type="text/css" />
    <!-- Morris chart -->
    <link href="plugins/morris/morris.css" rel="stylesheet" type="text/css" />
    <!-- jvectormap -->
    <link href="plugins/jvectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />
    <!-- Date Picker -->
    <link href="plugins/datepicker/datepicker3.css" rel="stylesheet" type="text/css" />
    <!-- Daterange picker -->
    <link href="plugins/daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />
    <!-- bootstrap wysihtml5 - text editor -->
    <link href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css" rel="stylesheet" type="text/css" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="skin-blue">
    <div class="wrapper">
      
      <?php include('include/cabecera_admin.php'); ?>
      
      <!-- Left side column. contains the logo and sidebar -->
      <?php include('include/menu_admin.php'); ?>

      <!-- Right side column. Contains the navbar and content of the page -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Usuarios
            <small><?php echo $accion; ?></small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Usuarios</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
        	<div class="row">
        		<form name="form_usuario" id="form_usuario" method="POST" enctype="multipart/form-data" action="usuarios_data.php">
        			<input type="hidden" name="id_usuario" id="id_usuario" value="<?php echo $id_usuario; ?>">
        			<input type="hidden" name="accion" id="accion" value="<?php echo $accion; ?>">
        			<div class="form-group row">
        				<label for="nombre" class="col-xs-1 col-xs-offset-1">Nombre</label>
        				<div class="col-xs-4 "><input type="text" class="form-control" name="nombre" id="nombre" value="<?php echo ($usuario_gestion->nombre); ?>"></div>
        			</div>
        			<div class="row form-group">
        				<label for="apellido" class="col-xs-1 col-xs-offset-1 ">Apellido</label>
        				<div class="col-xs-4 "><input type="text" class="form-control" name="apellido" id="apellido" value="<?php echo ($usuario_gestion->apellido); ?>"></div>
        			</div>
        			<div class="row form-group">
        				<label for="correo" class="col-xs-1 col-xs-offset-1 ">Correo</label>
        				<div class="col-xs-3 "><input type="text" class="form-control" name="correo" id="correo" value="<?php echo $usuario_gestion->nombreUsuario; ?>"></div>
        			</div>
        			<div class="row form-group">
        				<label for="perfil" class="col-xs-1 col-xs-offset-1">Perfil</label>
        				<div class="col-xs-2">
        					<select name="perfil" id="perfil" class="form-control">
        						<option value="0">Seleccione un perfil</option>
        						<?php
        						  $perfil = new Perfil($conn);
        						  $result = $perfil->listaPerfiles();
        						  while ($row = $result->fetch_assoc())
        						  {
        						      if ($row['id_perfil'] == 1)
        						          if (!$usuario->compruebaDerecho('GUSUS'))
        						              continue;
        						      echo '<option value="'.$row['id_perfil'].'"';
        						      if ($usuario_gestion->idPerfil == $row['id_perfil']) echo ' selected ';
        						      echo '>'.$row['nombre'].'</option>';
        						  }
        						
        						?>
        					</select>
        				</div>
        			</div>
        			<div class="col-lg-12"></div>
        			<div class="row form-group">
        				<label for="clave" class="col-xs-1 col-xs-offset-1 ">Contrase&ntilde;a</label>
        				<div class="col-xs-2 "><input type="text" class="form-control" name="clave" id="clave"></div>
        				<small id="passwordHelp" class="form-text text-muted">La contrase&ntilde;a no se muestra por motivos de seguridad, si no desea cambiarla deje el campo en blanco.</small>
        			</div>
        			<div class="col-xs-4 text-center form-group">
        				<button class="btn btn-success" name="enviar" id="enviar_form_usuario">Aceptar</button>
        			</div>
        			<div class="col-lg-12"></div>
        			<div class="col-xs-4 col-xs-offset-1 text-danger bold" id="form_usuario_msg"></div>
        		</form>
        	</div>
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      <?php include('include/footer_admin.php'); ?>
    </div><!-- ./wrapper -->

    <!-- jQuery 2.1.3 -->
    <script src="plugins/jQuery/jQuery-2.1.3.min.js"></script>
    <!-- jQuery UI 1.11.2 -->
    <script src="http://code.jquery.com/ui/1.11.2/jquery-ui.min.js" type="text/javascript"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
      $.widget.bridge('uibutton', $.ui.button);
    </script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>    
    <!-- Sparkline -->
    <script src="plugins/sparkline/jquery.sparkline.min.js" type="text/javascript"></script>
    <!-- daterangepicker -->
    <script src="plugins/daterangepicker/daterangepicker.js" type="text/javascript"></script>
    <!-- datepicker -->
    <script src="plugins/datepicker/bootstrap-datepicker.js" type="text/javascript"></script>
    <!-- Bootstrap WYSIHTML5 -->
    <script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js" type="text/javascript"></script>
    <!-- iCheck -->
    <script src="plugins/iCheck/icheck.min.js" type="text/javascript"></script>
    <!-- Slimscroll -->
    <script src="plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <!-- FastClick -->
    <script src='plugins/fastclick/fastclick.min.js'></script>
    <!-- AdminLTE App -->
    <script src="dist/js/app.min.js" type="text/javascript"></script>
    
    <!-- Scripts propios  -->
    <script src="dist/js/my_admin.js" type="text/javascript"></script>
    
  </body>
</html>
<?php
close_connection($conn);
?>