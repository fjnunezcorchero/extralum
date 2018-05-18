<?php

class Usuario
{
    public $idUsuario, $idPerfil, $nombre, $apellido, $foto, $nombreUsuario, $claveUsuario, $passCript, $intentos, $activo, $fechaAlta, $fechaBaja;
    private $conn, $debug = FALSE, $intentosBase = 3;
    
    function __construct($conn) {
        $this->conn = $conn;
    }
    
    function getUsuario($idUsuario)
    {
        $respuesta = array();
        $this->idUsuario = mysqli_real_escape_string($this->conn, utf8_encode($idUsuario));
        $query = sprintf("SELECT * FROM t_seguridad_usuario WHERE id_usuario = %d", $this->idUsuario);
        if ($this->debug) setLog($query);
        $result = mysqli_query($this->conn, $query);
        if ($result)
        {
            $recordset = $result->fetch_assoc();
            $this->idPerfil = $recordset["id_perfil"];
            $this->nombre = utf8_encode($recordset["nombre"]);
            $this->apellido = utf8_encode($recordset["apellido"]);
            $this->foto = utf8_encode($recordset["foto"]);
            $this->nombreUsuario = $recordset["nombre_usuario"];
            $this->claveUsuario = $recordset["pass_usuario"];
            //$this->passCript = $recordset["pass_crypt"];
            $this->intentos = $recordset["intentos"];
            $this->activo = $recordset["activo"];
            $this->fechaAlta = $recordset["fecha_alta"];
            $this->fechaBaja = $recordset["fecha_baja"];
            return TRUE;
        }
        return FALSE;
    }
    
    function setUsuario($nombre, $apellido, $foto, $nombreUsuario, $idPerfil, $claveUsuario)
    {
        $this->idPerfil = mysqli_real_escape_string($this->conn, utf8_encode($idPerfil));
        $this->nombre = mysqli_real_escape_string($this->conn, utf8_encode($nombre));
        $this->apellido= mysqli_real_escape_string($this->conn, utf8_encode($apellido));
        $this->foto = mysqli_real_escape_string($this->conn, utf8_encode($foto));
        $this->nombreUsuario = mysqli_real_escape_string($this->conn, utf8_encode($nombreUsuario));
        $this->claveUsuario = $this->encriptarClave($claveUsuario);
        $fecha_alta = new DateTime('now', new DateTimeZone('UTC'));
        $this->fechaAlta = $fecha_alta->format("Y-m-d H:i:s");
        $query = sprintf("INSERT INTO t_seguridad_usuario (id_perfil, nombre, apellido, foto, nombre_usuario, pass_usuario, intentos,
		activo, fecha_alta) VALUES (%d, '%s', '%s', '%s', '%s', '%s', %d, %d, '%s')", 
            $this->idPerfil, $this->nombre, $this->apellido, $this->foto, $this->nombreUsuario, $this->claveUsuario, $this->intentosBase, 1, $this->fechaAlta);
        if ($this->debug) setLog($query);
        $recordSet = mysqli_query($this->conn, $query);
        if ($recordSet)
        {
            $this->idUsuario = mysqli_insert_id($this->conn);
            $this->intentos = $this->intentosBase;
            $this->activo = 1;
            return $this->idUsuario;
        }
        return FALSE;
    }
    
    function updateUsuario($idUsuario, $idPerfil, $nombre, $apellido, $foto, $nombreUsuario, $claveUsuario)
    {
        $this->idUsuario = mysqli_real_escape_string($this->conn, utf8_encode($idUsuario));
        $this->idPerfil = mysqli_real_escape_string($this->conn, utf8_encode($idPerfil));
        $this->nombre = mysqli_real_escape_string($this->conn, utf8_encode($nombre));
        $this->apellido= mysqli_real_escape_string($this->conn, utf8_encode($apellido));
        $this->foto = mysqli_real_escape_string($this->conn, utf8_encode($foto));
        $this->nombreUsuario = mysqli_real_escape_string($this->conn, utf8_encode($nombreUsuario));
        if ($claveUsuario != "")
        {
            $this->claveUsuario = $this->encriptarClave($claveUsuario);
            // Se actualiza la clave.
            $query = sprintf("UPDATE t_seguridad_usuario SET pass_usuario = '%s' WHERE id_usuario = %u",
                $this->claveUsuario, $this->idUsuario);
            if ($this->debug) setLog($query);
            $rsUsuario = mysqli_query($this->conn, $query);
        }
        if ($this->idPerfil != 0)
        {
            $query = sprintf("UPDATE t_seguridad_usuario SET id_perfil = %u WHERE id_usuario = %u",
                $this->idPerfil, $this->idUsuario);
            if ($this->debug) setLog($query);
            $rsUsuario = mysqli_query($this->conn, $query);
        }
        
        $query = sprintf("UPDATE t_seguridad_usuario SET nombre = '%s', apellido = '%s', foto = '%s', nombre_usuario = '%s', intentos = %d,
		activo = %d WHERE id_usuario = %d", $this->nombre, $this->apellido, $this->foto, $this->nombreUsuario, $this->intentosBase, 1, $this->idUsuario);
        if ($this->debug) setLog($query);
        return mysqli_query($this->conn, $query);
    }
    
    function deleteUsuario($idUsuario)
    {
        $this->idUsuario = mysqli_real_escape_string($this->conn, utf8_encode($idUsuario));
        $fechaBaja = new DateTime('now', new DateTimeZone('UTC'));
        $this->fechaBaja = $fechaBaja->format("Y-m-d H:i");
        $query = sprintf("UPDATE t_seguridad_usuario SET fecha_baja = '%s' WHERE id_usuario = %d",
            $this->fechaBaja, $this->idUsuario);
        if ($this->debug) setLog($query);
        return mysqli_query($this->conn, $query);
    }
    
    function activaUsuario($idUsuario)
    {
        $this->idUsuario = mysqli_real_escape_string($this->conn, utf8_encode($idUsuario));
        $query = sprintf("UPDATE t_seguridad_usuario SET activo = abs(activo-1)
		WHERE id_usuario = %d", $this->idUsuario);
        if ($this->debug) setLog($query);
        return mysqli_query($this->conn, $query);
    }
    
    function encriptarClave($password)
    {
        return crypt(md5(utf8_encode(mysqli_real_escape_string($this->conn, stripslashes($password)))), md5(mysqli_real_escape_string($this->conn, utf8_encode(stripslashes($password)))));
    }
    
    function compruebaUsuario($nombreUsuario, $claveUsuario)
    {
        $this->nombreUsuario = mysqli_real_escape_string($this->conn, utf8_encode($nombreUsuario));
        $this->claveUsuario = $this->encriptarClave($claveUsuario);
        $query = sprintf("SELECT * FROM t_seguridad_usuario WHERE nombre_usuario = '%s' AND
		pass_usuario = '%s' AND activo = 1 AND intentos > 0 AND fecha_baja IS NULL",
            $this->nombreUsuario, $this->claveUsuario);
        if ($this->debug) setLog($query);
        $result = mysqli_query($this->conn, $query);
        $recordset = $result->fetch_assoc();
        if ($recordset)
        {
            $this->idUsuario = $recordset["id_usuario"];
            $this->idPerfil = $recordset["id_perfil"];
            return TRUE;
        }
        return FALSE;
    }
    
    function existeCorre($correo)
    {
        $correo = mysqli_real_escape_string($this->conn, utf8_encode($correo));
        $query = sprintf("SELECT * FROM t_seguridad_usuario WHERE nombre_usuario = '%s' AND fecha_baja IS NULL", $correo);
        if ($this->debug) setLog($query);
        $recordSet = mysqli_query($this->conn, $query);
        if ($recordSet)
        {
            if ($recordSet->num_rows)
            {
                $result = $recordSet->fetch_assoc();
                return $result['id_usuario'];
            }
        }
        return false;
    }
    
    /*
     * Genera una clave aleatoria, de longitud determinada, formada por letras y números.
     *
     */
    function generaClaveAleatoria($longitud)
    {
        $cadena = "";
        for ($i = 0; $i < $longitud; $i++)
        {
            switch (rand(0,2))
            {
                case 0:	// Letra minúscula.
                    $semilla = 97+rand(0, 25);
                    $cadena .= chr($semilla);
                    break;
                case 1:	// Letra mayúscula
                    $semilla = 65+rand(0, 25);
                    $cadena .= chr($semilla);
                    break;
                case 2:	// Número
                    $semilla = 48+rand(0, 9);
                    $cadena .= chr($semilla);
                    break;
            }
        }
        return $cadena;
    }
    
    /*
     * Comprueba si ese usuario tiene asignado el derecho que se pasa como parámetro.
     */
    function compruebaDerecho($cadenaDerecho)
    {
        $cadenaDerecho = mysqli_real_escape_string($this->conn, utf8_encode($cadenaDerecho));
        $query = sprintf("SELECT * FROM t_seguridad_derecho_perfil t_sdp
		INNER JOIN t_seguridad_derecho t_sd ON t_sdp.id_derecho = t_sd.id_derecho
		WHERE t_sdp.id_perfil = %d AND t_sd.cadena_derecho = '%s'",
            $this->idPerfil, $cadenaDerecho);
        if ($this->debug) setLog($query);
        $result = mysqli_query($this->conn, $query);
        if ($result)
            if ($result->num_rows == 1)
                return true;
                
        return false;
    }
    
    function updateCorreo($idUsuario, $correo)
    {
        $idUsuario = mysqli_real_escape_string($this->conn, utf8_encode($idUsuario));
        $correo = mysqli_real_escape_string($this->conn, utf8_encode($correo));
        $query = sprintf("UPDATE t_seguridad_usuario SET nombre_usuario = '%s' WHERE id_usuario = %d", $correo, $idUsuario);
        if ($this->debug) setLog($query);
        return mysqli_query($this->conn, $query);
    }
    
    function getNombrePefil()
    {
        $query = sprintf("SELECT * FROM t_seguridad_perfil WHERE id_perfil = %d", $this->idPerfil);
        if ($this->debug) setLog($query);
        $result = mysqli_query($this->conn, $query);
        if ($result)
        {
            if ($result->num_rows == 1)
            {
                $row = $result->fetch_assoc();
                return $row['nombre'];
            }
        }
        return '';
    }
    
    function listadoUsuarios()
    {
        if ($this->debug) setLog('listadoUsuarios()');
        $query = sprintf("SELECT t_su.id_usuario as id_usuario, t_su.nombre as nombre, t_su.apellido as apellido, t_su.nombre_usuario as nombre_usuario,
            t_su.activo as activo, t_su.fecha_baja as fecha_baja, t_sf.nombre as nombre_perfil, t_su.id_perfil as id_perfil
            FROM t_seguridad_usuario t_su INNER JOIN t_seguridad_perfil t_sf ON t_su.id_perfil = t_sf.id_perfil");
        if ($this->debug) setLog($query);
        return mysqli_query($this->conn, $query);
    }
}
?>