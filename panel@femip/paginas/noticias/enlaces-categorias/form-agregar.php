<?php
session_start();
include("../../../conexion/conexion.php");
include("../../../conexion/verificar_sesion.php");

//CATEGORIA
$rst_publicar=mysql_query("SELECT * FROM ".$tabla_suf."_publicar WHERE id>0 ORDER BY id ASC;", $conexion);

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/plantilla.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- InstanceBeginEditable name="doctitle" -->
<title>Administración | </title>
<!-- InstanceEndEditable -->
<link rel="stylesheet" type="text/css" href="../../../css/estilo-panel.css"/>
<!-- InstanceBeginEditable name="head" -->
<script src="../../../../SpryAssets/SpryValidationSelect.js" type="text/javascript"></script>
<link href="../../../../SpryAssets/SpryValidationSelect.css" rel="stylesheet" type="text/css" />
<!-- InstanceEndEditable -->
</head>

<body>
<div id="contenedor" class="limpiar">
	<?php include("../../../cabecera.php") ?>
    <div id="cuerpo" class="limpiar">
    	<div class="interior">
        	<div id="panel-izq">
				<?php include("../../../menu-izq.php"); ?>
            </div><!--FIN PANEL IZQ--><!-- InstanceBeginEditable name="Contenido" -->
            <div id="panel-der">
            <h1>Agregar - Categoria de Enlaces</h1>
    <div id="contenido_total">
        <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
            	<td>
                <form action="guardar.php" method="post" enctype="multipart/form-data" name="form1" id="form1">
            	  <table width="700" border="0" align="center" cellpadding="0" cellspacing="0">
            	    <tr>
            	      <td colspan="2" align="center">&nbsp;</td>
          	      </tr>
            	    <tr>
            	      <td width="20%" height="30" align="right" class="texto_izq"><p><strong>Categoria:</strong></p></td>
            	      <td width="80%" height="30" align="left" class="texto_der"><input name="categoria" type="text" id="categoria" size="50" /></td>
          	      </tr>
            	    <tr>
            	      <td height="30" align="right" ><p><strong>Imagen:</strong></p></td>
            	      <td height="30"><span id="spryselect">
            	        <select name="imagen" id="imagen">
            	          <option value="0">[ Seleccionar opcion ]</option>
            	          <?php while ($fila_publicar=mysql_fetch_array($rst_publicar)){
	echo "<option value=". $fila_publicar["id"] .">". $fila_publicar["publicar"] ."</option>";
}?>
          	          </select>
            	        <span class="selectInvalidMsg">Selecciona una categoria.</span><span class="selectRequiredMsg">Seleccione una categoria.</span></span></td>
          	      </tr>
                <tr>
                  <td colspan="2" align="center" class="texto_negro16-MyriadPro"><input type="submit" name="guardar" id="guardar" value="Guardar" />                    <label>
                    <input type="reset" name="button2" id="button2" value="Limpiar Datos" />
                    </label></td>
                </tr>
              </table>
                </form>
              </td>
            </tr>
        </table>
    </div><!-- FIN CONTENIDO TOTAL -->
            </div>
            <script type="text/javascript">
var spryselect = new Spry.Widget.ValidationSelect("spryselect", {invalidValue:"0"});
            </script>
            <!-- InstanceEndEditable --><!--FIN PANEL DER-->
        </div><!--FIN INTERIOR-->
    </div><!--FIN CUERPO-->
</div>
</body>
<!-- InstanceEnd --></html>