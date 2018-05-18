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
$debug = FALSE;

function listado_usuarios($conn, $usuario)
{
    $str_respuesta = '<table class="table table-bordered table-striped">';
    $str_respuesta .= '<tr><th></th><th>Usuario</th><th>Login</th><th>Perfil</th><th>Activo</th><th></th></tr>';
    $result = $usuario->listadoUsuarios();
    while($row = $result->fetch_assoc())
    {
        if ($row['id_perfil'] == 1)
            if (!$usuario->compruebaDerecho('GUSUS'))
                continue;
        $str_respuesta .= '<tr>';
        $str_respuesta .= '<td></td>';
        $str_respuesta .= '<td><a href="usuarios_form.php?id='.$row["id_usuario"].'">'.utf8_encode($row['nombre']).' '.utf8_encode($row['apellido']).'</a></td>';
        $str_respuesta .= '<td>'.$row['nombre_usuario'].'</td>';
        $str_respuesta .= '<td>'.$row['nombre_perfil'].'</td>';
        if ($row['activo'])
            $str_respuesta .= '<td><a id="activar_'.$row['id_usuario'].'" href="javascript:activarUsuario('.$row['id_usuario'].')"><i class="fa fa-check-circle text-success fa-2x"></i></a></td>';
        else
            $str_respuesta .= '<td><a id="activar_'.$row['id_usuario'].'" href="javascript:activarUsuario('.$row['id_usuario'].')"><i class="fa fa-ban text-danger fa-2x"></i></a></td>';
        $str_respuesta .= '<td><a href="javascript:borrarUsuario('.$row['id_usuario'].')"><i class="fa fa-times-circle text-danger fa-2x"></i></a></td>';
        $str_respuesta .= '</tr>';
    }
    $str_respuesta .= '</table>';
    return $str_respuesta;
}


$accion = '';
if (isset($_REQUEST['accion'])) $accion = $_REQUEST['accion'];
if ($debug) setLog($accion);

switch ($accion) {
    case 'Listado usuarios':
        echo listado_usuarios($conn, $usuario);
    break;
    case 'Nuevo usuario':
        if ($debug) setLog('switch: Nuevo usuario');
        $id_perfil = 0;
        $nombre = $apellido = $correo = $clave = '';
        if (isset($_REQUEST['id_perfil'])) $id_perfil = $_REQUEST['id_perfil'];
        if (isset($_REQUEST['nombre'])) $nombre = $_REQUEST['nombre'];
        if (isset($_REQUEST['apellido'])) $apellido = $_REQUEST['apellido'];
        if (isset($_REQUEST['correo'])) $correo = $_REQUEST['correo'];
        if (isset($_REQUEST['clave'])) $clave = $_REQUEST['clave'];
        if ($debug) setLog('id_perfil: '.$id_perfil.' nombre: '.$nombre.' apellido: '.$apellido.' correo:'.$correo.' clave: '.$clave);
        if ($id_perfil == 0 || $nombre == '' || $apellido == '' || $correo == '')
        {
            echo '$("form_usuario_msg").html("Debe rellenar todos los campos.");';
            exit();
        }
        $usuario_gestion = new Usuario($conn);
        if ($usuario_gestion->existeCorre($correo))
        {
            echo '$("form_usuario_msg").html("Ya existe un usuario con ese correo.");';
            exit();
        }
        $usuario_gestion->setUsuario($nombre, $apellido, $correo, $id_perfil, $clave);
        echo 'window.location.href = "usuarios.php";';
    break;
    
    case 'Modificar usuario':
        if ($debug) setLog('switch: Modificar usuario');
        $id = $id_perfil = 0;
        $nombre = $apellido = $correo = $clave = '';
        if (isset($_REQUEST['id'])) $id = $_REQUEST['id'];
        if (isset($_REQUEST['id_perfil'])) $id_perfil = $_REQUEST['id_perfil'];
        if (isset($_REQUEST['nombre'])) $nombre = $_REQUEST['nombre'];
        if (isset($_REQUEST['apellido'])) $apellido = $_REQUEST['apellido'];
        if (isset($_REQUEST['correo'])) $correo = $_REQUEST['correo'];
        if (isset($_REQUEST['clave'])) $clave = $_REQUEST['clave'];
        if ($debug) setLog('id: '.$id.' id_perfil: '.$id_perfil.' nombre: '.$nombre.' apellido: '.$apellido.' correo:'.$correo.' clave: '.$clave);
        if ($id_perfil == 0 || $nombre == '' || $apellido == '' || $correo == '')
        {
            echo '$("form_usuario_msg").html("Debe completar todos los campos.");';
            exit();
        }
        if ($debug) setLog('Campos verificados');
        $usuario_gestion = new Usuario($conn);
        $id_usuario_existente = $usuario_gestion->existeCorre($correo);
        if ($id_usuario_existente)
        {
            if ($id != $id_usuario_existente)
            {
                echo '$("form_usuario_msg").html("Ya existe un usuario con ese correo.");';
                exit();
            }
        }
        $usuario_gestion->updateUsuario($id, $id_perfil, $nombre, $apellido, $correo, $clave);
        echo 'window.location.href = "usuarios.php";';
    break;
    
    case 'Activar usuario':
        $id = 0;
        if (isset($_REQUEST['id'])) $id = $_REQUEST['id'];
        $usuario_gestion = new Usuario($conn);
        $usuario_gestion->activaUsuario($id);
        $usuario_gestion->getUsuario($id);
        if ($usuario_gestion->activo) $str_respuesta = '$("#activar_'.$id.'").html("<i class=\"fa fa-check-circle text-success fa-2x\"></i>");';
        else $str_respuesta = '$("#activar_'.$id.'").html("<i class=\"fa fa-ban text-danger fa-2x\"></i>");';
        echo $str_respuesta;
    break;
    
    default:
        ;
    break;
}

?>