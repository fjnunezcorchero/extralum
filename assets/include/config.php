<?php

session_start();
include('assets/include/accesobd.php');

$language = idioma_por_defecto($conn);
if (isset($_REQUEST['lan'])) $language = $_REQUEST['lan'];
else if (isset($_SESSION['language'])) $language = $_SESSION['language'];
$_SESSION['language'] = $language;

$texto = obtener_texto($language, $conn);

?>