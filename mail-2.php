<?php

//debug_log.txt
function setLog($string)
{
    $string.='
	';
    $fp = fopen('debug_log.txt', 'a');
    fwrite($fp, $string);
    fclose($fp);
}

switch ($_POST['accion']) {
    case 'unete':
        $subject = 'Mensaje enviado desde la web: Unete a nosotros';
        $message = '
        <html>
        	<head>
        		<title>Mensaje enviado desde la web: Unete a nosotros</title>
        	</head>
        	<body>
        		<h3>Nombre: <span style="font-weight: normal;">' . $_POST['nombre'] . '</span></h3>
        		<h3>Correo: <span style="font-weight: normal;">' . $_POST['correo'] . '</span></h3>
        		<h3>Localizacion: <span style="font-weight: normal;">' . $_POST['localizacion'] . '</span></h3>
        		<div>
        			<h3 style="margin-bottom: 5px;">Mensaje:</h3>
        			<div>' . $_POST['mensaje'] . '</div>
        		</div>
        	</body>
        </html>';
    break;
    case 'contacto':
        switch ($_POST['departamento']) {
            case '0': $departamento = 'Sin departamento'; break;
            case '1': $departamento = 'Administracion'; break;
            case '2': $departamento = 'Contabilidad'; break;
            case '3': $departamento = 'Departamento comercial'; break;
            case '4': $departamento = 'Produccion'; break;
            case '5': $departamento = 'Compras'; break;
            default: $departamento = 'Sin departamento'; break;
        }
        $subject = 'Mensaje enviado desde la web: Contacto';
        $message = '
        <html>
        	<head>
        		<title>Mensaje enviado desde la web: Contacto</title>
        	</head>
        	<body>
        		<h3>Nombre: <span style="font-weight: normal;">' . $_POST['nombre'] . '</span></h3>
        		<h3>Correo: <span style="font-weight: normal;">' . $_POST['correo'] . '</span></h3>
        		<h3>Telefono: <span style="font-weight: normal;">' . $_POST['telefono'] . '</span></h3>
                <h3>Departamento: <span style="font-weight: normal;">' . $departamento . '</span></h3>
        		<div>
        			<h3 style="margin-bottom: 5px;">Mensaje:</h3>
        			<div>' . $_POST['mensaje'] . '</div>
        		</div>
        	</body>
        </html>';
    break;
    case 'catalogo':
        $subject = 'Mensaje enviado desde la web: Catalogo';
        $message = '
        <html>
        	<head>
        		<title>Mensaje enviado desde la web: Catalogo</title>
        	</head>
        	<body>
        		<h3>Nombre: <span style="font-weight: normal;">' . $_POST['nombre'] . '</span></h3>
        		<h3>Correo: <span style="font-weight: normal;">' . $_POST['correo'] . '</span></h3>
        		<h3>Telefono: <span style="font-weight: normal;">' . $_POST['telefono'] . '</span></h3>
                <h3>Empresa: <span style="font-weight: normal;">' . $_POST['empresa'] . '</span></h3>
        		<div>
        			<h3 style="margin-bottom: 5px;">Mensaje:</h3>
        			<div>' . $_POST['mensaje'] . '</div>
        		</div>
        	</body>
        </html>';
    break;
}
$to = 'fjnunezcochero@gmail.com';
$headers = 'From: <mailer@progressive.itembridge.com>' . "\r\n" . 'Content-type: text/html; charset=utf-8';

/*
setLog('to: '.$to);
setLog('Subject: '.$subject);
setLog($message);
*/
mail($to, $subject, $message, $headers);

echo "true";

?>