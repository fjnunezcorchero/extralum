<?php

class Perfil
{
    public $idPerfil, $nombre, $acronimo, $fechaAlta, $fechaBaja;
    private $conn, $debug = FALSE;
    
    function __construct($conn) {
        $this->conn = $conn;
    }
    
    function getPerfil($idPerfil)
    {
        if ($this->debug) setLog('getPerfil('.$idPerfil.')');
        $this->idPerfil = mysqli_real_escape_string($this->conn, utf8_encode($idPerfil));
        $query = sprintf("SELECT * FROM t_seguridad_perfil WHERE id_perfil = %d", $this->idPerfil);
        $result = mysqli_query($this->conn, $query);
        if ($result)
        {
            if ($result->num_rows > 0)
            {
                $recordset = $result->fetch_assoc();
                $this->nombre = $recordset["nombre"];
                $this->acronimo = $recordset["acronimo"];
                $this->fechaAlta = $recordset["fecha_alta"];
                $this->fechaBaja = $recordset["fecha_baja"];
                return TRUE;
            }
        }
        return FALSE;
    }
        
    function getPerfilAcronimo($acronimo)
    {
        if ($this->debug) setLog('getPerfilAcronimo('.$acronimo.')');
        $this->acronimo = mysqli_real_escape_string($this->conn, utf8_encode($acronimo));
        $query = sprintf("SELECT * FROM t_seguridad_perfil WHERE acronimo = '%s'", $this->acronimo);
        $result = mysqli_query($this->conn, $query);
        if ($recordSet)
        {
            if ($result->num_rows > 0)
            {
                $recordset = $result->fetch_assoc();
                $this->nombre = $recordset["nombre"];
                $this->acronimo = $recordset["acronimo"];
                $this->fechaAlta = $recordset["fecha_alta"];
                $this->fechaBaja = $recordset["fecha_baja"];
                return $this->idPerfil;
            }
        }
        return FALSE;
    }
    
    function deletePerfil($idPerfil)
    {
        if ($this->debug) setLog('deletePerfil('.$idPerfil.')');
        $this->idPerfil = mysqli_real_escape_string($this->conn, utf8_encode($idPerfil));
        $fechaBaja = new DateTime('now', new DateTimeZone('UTC'));
        $this->fechaBaja = $fechaBaja->format("Y-m-d H:i");
        $query = sprintf("UPDATE t_seguridad_perfil SET fecha_baja = '%s' WHERE id_perfil = %d", $this->fechaBaja, $this->idPerfil);
        return mysqli_query($this->conn, $query);
    }
    
    function listaPerfiles()
    {
        if ($this->debug) setLog('listaPerfiles()');
        $query = sprintf("SELECT * FROM t_seguridad_perfil WHERE fecha_baja IS NULL ORDER BY nombre");
        return mysqli_query($this->conn, $query);
    }
}

?>