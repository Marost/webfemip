<?php
include("../panel@femip/conexion/conexion.php");

//VARIABLES - DATOS DE LA ASOCIACIÓN
$institucion_rubro=$_POST["institucion_rubro"];
$institucion_nombre=$_POST["institucion_nombre"];
$institucion_futuro=$_POST["institucion_futuro"];
$institucion_objetivos=$_POST["institucion_objetivos"];
$institucion_descripcion=$_POST["institucion_descripcion"];
$institucion_email=$_POST["institucion_email"];
$institucion_participacion=$_POST["institucion_participacion"];
$participante_nombre=$_POST["participante_nombre"];
$participante_apellidos=$_POST["participante_apellidos"];
$participante_email=$_POST["participante_email"];
$participante_cargo=$_POST["participante_cargo"];
$participante_participacion=$_POST["participante_participacion"];

mysql_query("INSERT INTO fmp_inscripcion_japon (institucion_rubro, 
institucion_nombre, 
institucion_futuro, 
institucion_objetivos, 
institucion_descripcion, 
institucion_email, 
institucion_participacion, 
participante_nombre, 
participante_apellidos, 
participante_email, 
participante_cargo,
participante_participacion) VALUES ('$institucion_rubro', 
'$institucion_nombre', 
'$institucion_futuro',
'$institucion_objetivos', 
'$institucion_descripcion', 
'$institucion_email', 
'$institucion_participacion', 
'$participante_nombre', 
'$participante_apellidos', 
'$participante_email', 
'$participante_cargo', 
'$participante_participacion')", $conexion);
	
$body = '<!DOCTYPE HTML> <html lang="es"> <head> <meta charset="utf-8">
<title>'.$web_nombre.'</title>
<style type="text/css">
	body{ font-family: Arial, Helvetica, sans-serif; font-size: 12px;}
	body{ margin:0;}
</style>
</head>
<body>
<h2>Inscripción - V Convención FEMIP- Tokio</h2>
<p><strong>Rubro de su Institución:</strong> '.$institucion_rubro.'</p>
<p><strong>Nombre de su Institución:</strong> '.$institucion_nombre.'</p>
<p><strong>¿Hacia dónde apunta su institución en el futuro?:</strong> <br/>'.$institucion_futuro.'</p>
<p><strong>¿Cuáles son los objetivos que se basa su institución para llegar a dónde desean llegar?:</strong> <br/>'.$institucion_objetivos.'</p>
<p><strong>Breve Descripción de su Institución:</strong> <br/>'.$institucion_descripcion.'</p>
<p><strong>Correo electrónico de su Institución:</strong> '.$institucion_email.'</p>
<p><strong>¿Es la primera participación de su institución en las Convenciones de la FEMIP?:</strong> '.$institucion_participacion.'</p>
<p><strong>Nombre(s) del participante:</strong> '.$participante_nombre.'</p>
<p><strong>Apellidos del participante:</strong> '.$participante_apellidos.'</p>
<p><strong>E-mail del participante:</strong> '.$participante_email.'</p>
<p><strong>Cargo en la Institución que representa:</strong> '.$participante_cargo.'</p>
<p><strong>¿Es su primera participación en una Convención de la FEMIP?:</strong> '.$participante_participacion.'</p>
</body>
</html>';
	
$from="femip@femip.org";
$asunto="FEMIP | Inscripcion - V Convención FEMIP- Tokio";
$headers= "From: FEMIP <".strip_tags($from)."> \r\n";
$headers.= "MIME-Version: 1.0\r\n";
$headers.= "Content-Type: text/html; charset=UTF-8\r\n";

mail($from, $asunto, $body, $headers);

?>