<?php
include("panel@femip/conexion/conexion.php");

//VARIABLES HEADER
$script_estilos=true;
$script_fonts=true;
$script_ie=true;
$script_form_inscripcion=true;
$script_galeria_femip=true;

//WIDGETS
$wg_menu=true;
$wg_eventos=true;
$wg_galeria=true;
$wg_encuesta=true;

//EVENTOS
$rst_noticias=mysql_query("SELECT * FROM fmp_noticia WHERE id>0 ORDER BY fecha_publicacion DESC;", $conexion);

?>
<!DOCTYPE HTML>
<html lang="es">
<head>
<meta charset="utf-8">
<base href="<?php echo $web; ?>">
<title>Noticias | Federación Mundial de Instituciones Peruanas</title>

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
        	
            <div class="sctpii_item">
            
                <div class="sctpii_cabecera">
                  <h2>Noticias</h2></div>
                  
               	<div class="sctpii_contenido">
                	
                    <?php while($fila_noticias=mysql_fetch_array($rst_noticias)){ ?>
                  <div class="sctpiic_item">
                    	                        
                        <div class="sctpiici_contenido">
                            <h3><a href="<?php echo $web."noticia/".$fila_noticias["id"]."-".$fila_noticias["url"]; ?>" title="<?php echo $fila_noticias["titulo"]; ?>">
                            <?php echo $fila_noticias["titulo"]; ?></a></h3>
                            
                            <a class="not_sley" href="<?php echo $web."noticia/".$fila_noticias["id"]."-".$fila_noticias["url"]; ?>" title="[+] Seguir leyendo...">[+] Seguir leyendo...</a>
                        </div>
                        
                    </div>
                    <?php } ?>
                    
                </div>                
            </div>
            
        </div><!-- FIN SECTION IZQUIERDA -->
        
    </div>
</section><!--FIN SECTION -->

<?php require_once("footer.php"); ?>

</body>
</html>