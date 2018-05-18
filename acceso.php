<?php

include('assets/include/config.php');
include('clases/sesion.class.php');
include('clases/usuario.class.php');

$accion = '';
if (isset($_REQUEST['accion'])) $accion = $_REQUEST['accion'];

switch ($accion) {
    case 'login':
        $nombre_usuario = '';
        if (isset($_REQUEST['userName'])) $nombre_usuario = trim($_REQUEST['userName']);
        $clave = '';
        if (isset($_REQUEST['userPassword'])) $clave = trim($_REQUEST['userPassword']);
        $usuario = new Usuario($conn);
        $sesion = new Sesion($conn);
        if ($usuario->compruebaUsuario($nombre_usuario, $clave))
        {
            $_SESSION["sesion"] = $sesion->setSesion($usuario->idUsuario);
            echo 'window.location.href = "admin/index.php";';
            exit();
        }
        echo '$("#login_msg").html("El usuario no existe o la clave es incorrecta");';
    break;
    
    default:
        ;
    break;
}

?>