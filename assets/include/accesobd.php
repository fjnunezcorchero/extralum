<?php

// LOCAL
$servidor_MySQL = "localhost";
$usuario_MySQL  = "alum_user";
$clave_MySQL    = "AmD37sRP2ZRZD7FT";
$nombreBD_MySQL = "extralum";

// REMOTO
//$nombreBD_MySQL = "bz2oivcd_extralum";
//$usuario_MySQL  = "bz2oivcd_alum_us";

$conn = new mysqli($servidor_MySQL, $usuario_MySQL, $clave_MySQL, $nombreBD_MySQL);

if ($conn->connect_errno) {
    // TODO: Redireccionar a página de error de conexión.
}

function idioma_por_defecto($conn)
{
    $query = sprintf("SELECT * FROM parametros WHERE nombre_variable = 'idioma por defecto'");
    $result = mysqli_query($conn, $query);
    $row = $result->fetch_assoc();
    return $row['valor'];
}

function get_idiomas_disponibles($conn)
{
    $query = sprintf("SELECT lan.name as nombre, lan.`iso_639-1` as codigo  FROM languages lan 
    LEFT JOIN parametros par ON lan.`iso_639-1`  = par.valor
    WHERE par.nombre_variable = 'idioma por defecto' OR lan.completed = 1");
    return mysqli_query($conn, $query);
}

function obtener_texto($language, $conn)
{
    // TODO: Verificar que el lenguaje que se pasa como parámetro existe y está completo, si no usar el lenguaje por defecto.
    $language = mysqli_escape_string($conn, $language);
    $query = sprintf("SELECT * FROM texto WHERE idioma = '%s'", $language);
    //setLog($query);
    $result = mysqli_query($conn, $query);
    $texto = array();
    while ($recordset = $result->fetch_assoc())
    {
        $texto[trim($recordset['etiqueta'])] = trim($recordset['texto']);
    }
    $result->free();
    return $texto;
}

function close_connection($conn)
{
    $conn->close();
}

//debug_log.txt
function setLog($string)
{
    $string.='
';
    $fp = fopen('debug_log.txt', 'a');
    fwrite($fp, $string);
    fclose($fp);
}

?>