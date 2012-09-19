<?php
include("panel@femip/conexion/conexion.php");
include("panel@femip/conexion/funciones.php");

//VARIABLES
$idnoticia=$_REQUEST["id"];

?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<base href="<?php echo $web; ?>">
<title>Enviar este enlace a un amigo por e-mail</title>
<link href="css/normalize.css" rel="stylesheet" type="text/css">
<link href="css/estlos_imprimir.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
<script type="text/javascript" src="js/funciones-noticia-enviar-correo.js"></script>
</head>

<body>
<div id="msj_enviado" class="ocultar">
    <div class="mensaje">
    	<a href="javascript: void window.close()">
        <img src="imagenes/img-enviar-correo.png" width="420" height="200" alt="Envío de correo"></a>
    </div>
</div>
<form name="form1" method="post" action="">
  <h1> Enviar este enlace a un amigo por e-mail </h1>
    <fieldset class="sin_borde">
        <label for="fc_nombre">Tu nombre: </label>
	    <input class="inputtext" name="fc_nombre" id="fc_nombre" size="50" />
    </fieldset>
    
    <fieldset class="sin_borde">
        <label for="fc_amigo_nombre">Nombre de tu amigo: </label>
        <input class="inputtext" name="fc_amigo_nombre" id="fc_amigo_nombre" size="50" />
    </fieldset>
                  
    <fieldset class="sin_borde">
        <label for="fc_amigo_email">Email de tu amigo: </label>
        <input class="inputtext" name="fc_amigo_email" id="fc_amigo_email" size="50" />
    </fieldset>
    
    <fieldset class="sin_borde boton">
        <input class="fc_enviar" name="fc_enviar" type="submit" value="Enviar" id="fc_enviar">&nbsp;
        <img src="imagenes/load.gif" width="20" height="20" alt="Cargando..." class="imagen ocultar">
        <input name="fc_noticia" type="hidden" id="fc_noticia" value="<?php echo $idnoticia; ?>">
    </fieldset>

</form>
</body>
</html>