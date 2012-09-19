<?php
include("panel@femip/conexion/conexion.php");

//VARIABLES HEADER
$script_estilos=true;
$script_fonts=true;
$script_ie=true;
$script_galeria_femip=true;

//WIDGETS
$wg_menu=true;
$wg_eventos=true;
$wg_encuesta=true;

//VARIABLES
$idgaleria=$_REQUEST["id"];
$urlgaleria=$_REQUEST["url"];

//GALERIA IMAGENES
$rst_galeria_actual=mysql_query("SELECT * FROM fmp_galeria WHERE id=$idgaleria AND url='$urlgaleria' LIMIT 1;", $conexion);
$num_galeria_actual=mysql_num_rows($rst_galeria_actual);
if($num_galeria_actual==0){ header("Location: ".$web); }
else{ 
	$fila_galeria_actual=mysql_fetch_array($rst_galeria_actual);
	$rst_galeria_actual_img=mysql_query("SELECT * FROM fmp_galeria_slide WHERE noticia=$idgaleria ORDER BY orden ASC;", $conexion);
}

//MAS GALERIAS
$rst_galerias=mysql_query("SELECT * FROM fmp_galeria WHERE id<>$idgaleria AND url<>'$urlgaleria' ORDER BY id ASC;", $conexion);
$num_galerias=mysql_num_rows($rst_galerias);

?>
<!DOCTYPE HTML>
<html lang="es">
<head>
<meta charset="utf-8">
<base href="<?php echo $web; ?>">
<title>Galeria de Fotos: <?php echo $fila_galeria_actual["titulo"]; ?> | Federación Mundial de Instituciones Peruanas</title>

<?php require_once("header-scripts.php"); ?>

</head>

<body>

<?php require_once("header.php"); ?>

<section class="limpiar">
	<div class="interior limpiar">
    	<div id="section_pder">
        	
            <aside>
            
        	<?php if($wg_menu==true){ require_once("widgets/wg_menu.php"); } ?>
            
			<?php if($wg_eventos==true){ require_once("widgets/wg_eventos.php"); } ?>
            
            <?php if($wg_galeria==true){ require_once("widgets/wg_galeria.php"); } ?>
            
            <?php if($wg_encuesta==true){ require_once("widgets/wg_encuesta.php"); } ?>
            
            </aside><!-- FIN ASIDE -->
        
        </div><!-- FIN SECTION DERECHA -->
        
        <div id="section_pizq">
        
            <h2 class="titulo_galeria"><?php echo $fila_galeria_actual["titulo"]; ?></h2>
            
            <div id="galeria_femip">
                
                <?php while($fila_galeria_actual_img=mysql_fetch_array($rst_galeria_actual_img)){ ?>
                
                <a href="imagenes/galeria/<?php echo $fila_galeria_actual_img["carpeta"]."".$fila_galeria_actual_img["imagen"];  ?>">
                    <img title="<?php echo $fila_galeria_actual["titulo"]; ?>"
                         alt="<?php echo $fila_galeria_actual_img["titulo"]; ?>"
                         src="<?php echo $web; ?>imagenes/galeria/<?php echo $fila_galeria_actual_img["carpeta"]."thumb/".$fila_galeria_actual_img["imagen"];  ?>" height="40">
                </a>
                
                <?php } ?>
            
            </div>
            
            <?php if($num_galerias>0){ ?>
            <div id="galeria_nuestras">
                
                <h2 class="titulo_galeria">Nuestras Galerías</h2>
                
                <?php
                    while($fila_galerias=mysql_fetch_array($rst_galerias)){
                    $idgalerias=$fila_galerias["id"];
                    $rst_galerias_img=mysql_query("SELECT * FROM fmp_galeria_slide WHERE orden=0 AND noticia=$idgalerias;", $conexion);
                    $fila_galerias_img=mysql_fetch_array($rst_galerias_img);
                ?>
                
                    <div class="galeria_item">
                        <a href="galeria/<?php echo $idgalerias."-".$fila_galerias["url"]; ?>">
                        <img src="imagenes/galeria/<?php echo $fila_galerias_img["carpeta"]."thumb/".$fila_galerias_img["imagen"]; ?>" width="150" height="150">
                        </a>
                        <p><?php echo $fila_galerias["titulo"]; ?></p>
                    </div>
                
                <?php } ?>
                            
            </div><!-- FIN NUESTRAS GALERIAS -->
            <?php } ?>
            
		</div><!-- FIN SECTION IZQUIERDA -->
        
  </div>
</section><!--FIN SECTION -->

<?php require_once("footer.php"); ?>

<script>
	var jgalfemip = jQuery.noConflict();
	Galleria.loadTheme('libs/galleria/galleria.classic.min.js');
	jgalfemip('#galeria_femip').galleria();
</script>

</body>
</html>