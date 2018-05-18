<?php

class Sesion
{
    public $idSesion, $idUsuario, $fechaEntrada, $estado, $fechaLimite;
    private $conn, $debug = FALSE, $duracionSesion = 30; // 30 minutos
    
    function __construct($conn) {
        $this->conn = $conn;
    }
    
    function setSesion($idUsuario)
    {
        if ($this->debug) setLog("setSesion(".$idUsuario.")");
        $this->idUsuario = mysqli_real_escape_string($this->conn, utf8_encode($idUsuario));
        $this->desactivaTodasSesiones($this->idUsuario);
        $this->idSesion = $this->generarIdentificadorSesion();
        while (!$this->esUnica($this->idSesion))
            $this->idSesion = $this->generarIdentificadorSesion();
        $fechaSesion = new DateTime('now', new DateTimeZone('UTC'));
        $this->fechaEntrada = $fechaSesion->format("Y-m-d H:i:s");
        $fechaLimite = clone $fechaSesion;
        $fechaLimite->add(new DateInterval('PT'.$this->duracionSesion.'M'));
        $this->estado = 1;
        $this->fechaLimite = $fechaLimite->format("Y-m-d H:i:s");
        $query = sprintf("INSERT INTO t_seguridad_sesion (id_sesion, id_usuario, fecha_entrada,
	      estado, fecha_limite) VALUES ('%s', %d, '%s', %d, '%s')",
            $this->idSesion, $this->idUsuario, $this->fechaEntrada, $this->estado,
            $this->fechaLimite);
        if ($this->debug) setLog($query);
        $result = mysqli_query($this->conn, $query);
        if ($result)
            return $this->idSesion;
        return FALSE;
    }
    
    function compruebaSesion($idSesion)
    {
        if ($this->debug) setLog("compruebaSesion(".$idSesion.")");
        if ($idSesion == "")
            return false;
            
            // Se comprueba si es una sesión activa.
            $fechaActual = new DateTime('now', new DateTimeZone('UTC'));
            $query = sprintf("SELECT * FROM t_seguridad_sesion WHERE id_sesion = '%s' AND estado = 1
		      AND fecha_limite >= '%s'", $idSesion, $fechaActual->format("Y-m-d H:i:s"));
            if ($this->debug) setLog($query);
            $result = mysqli_query($this->conn, $query);
            if ($result)
            {
                if ($result->num_rows)
                {
                    $recordSet = $result->fetch_assoc();
                    $this->idUsuario = $recordSet["id_usuario"];
                    $this->ampliarSesion($idSesion);
                    return true;
                }
                else
                {
                    $this->desactivaSesion($idSesion);
                    return false;
                }
            }
            return false;
    }
    
    function desactivaSesion($idSesion)
    {
        if ($this->debug) setLog('desactivaSesion('.$idSesion.')');
        $fechaLimite = new DateTime('now', new DateTimeZone('UTC'));
        $query = sprintf("UPDATE t_seguridad_sesion SET estado = 0, fecha_limite = '%s'
		WHERE id_sesion = '%s'", $fechaLimite->format("Y-m-d H:i:s"), $idSesion);
        if ($this->debug) setLog($query);
        $result = mysqli_query($this->conn, $query);
    }
    
    /*
     * Desactiva todas las sesiones que tuviera ese usuario.
     */
    function desactivaTodasSesiones($idUsuario)
    {
        if ($this->debug) setLog('desactivaTodasSesiones('.$idUsuario.')');
        $query = sprintf("UPDATE t_seguridad_sesion SET estado = 0 WHERE id_usuario = %d", $idUsuario);
        if ($this->debug) setLog($query);
        $result = mysqli_query($this->conn, $query);
    }
    
    function ampliarSesion($idSesion)
    {
        if ($this->debug) setLog('ampliarSesion('.$idSesion.')');
        $fechaLimite = new DateTime('now', new DateTimeZone('UTC'));
        $fechaLimite->add(new DateInterval('PT'.$this->duracionSesion.'M'));
        $this->fechaLimite = $fechaLimite->format("Y-m-d H:i:s");
        $query = sprintf("UPDATE t_seguridad_sesion SET fecha_limite = '%s' WHERE id_sesion = '%s'",
            $this->fechaLimite, $idSesion);
        if ($this->debug) setLog($query);
        $result = mysqli_query($this->conn, $query);
    }
    
    /*
     * Comprueba que el indentificador de sesión que se le pasa como parámetro
     * es único, es decir no existe en la tabla otro igual.
     */
    function esUnica($idSesion)
    {
        if ($this->debug) setLog('esUnica('.$idSesion.')');
        $query = sprintf("SELECT * FROM t_seguridad_sesion WHERE id_sesion = '%s'", $idSesion);
        if ($this->debug) setLog($query);
        $result = mysqli_query($this->conn, $query);
        if ($result)
            if ($result->num_rows)
                return false;
                
        return true;
    }
    
    function generarIdentificadorSesion()
    {
        $longitud = 50;
        $identificador = "";
        
        srand ((double)microtime()*1000000);
        for ($i = 0; $i < $longitud; $i++)
        {
            $numero = rand() % 13;
            switch ($numero)
            {
                case 10: {
                    $identificador .= "A";
                    break;
                }
                case 11: {
                    $identificador .= "B";
                    break;
                }
                case 12: {
                    $identificador .= "C";
                    break;
                }
                default: {
                    $identificador .= $numero;
                    break;
                }
            }
        }
        return $identificador;
    }
    
}

?>