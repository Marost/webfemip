<?php
include("panel@femip/conexion/conexion.php");
include("panel@femip/conexion/funciones.php");

//VARIABLES HEADER
$script_estilos=true;
$script_fonts=true;
$script_ie=true;
$script_form_inscripcion=true;
$script_galeria_femip=true;

//WIDGETS
$wg_menu=true;
$wg_galeria=true;
$wg_encuesta=true;

//EVENTOS
$rst_lista_eventos=mysql_query("SELECT * FROM fmp_evento WHERE id>0 ORDER BY fecha_publicacion DESC;", $conexion);

?>
<!DOCTYPE HTML>
<html lang="es">
<head>
<meta charset="utf-8">
<base href="<?php echo $web; ?>">
<title>Eventos | Federación Mundial de Instituciones Peruanas</title>

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
                  <h2>Eventos</h2></div>
                  
               	<div class="sctpii_contenido">
                	
                    <?php while($fila_lista_eventos=mysql_fetch_array($rst_lista_eventos)){ ?>
                    <div class="sctpiic_item-evento">
                    	
                        <div class="sctpiici_imagen-evento">
                        	<a href="<?php echo $web."evento/".$fila_lista_eventos["url"]; ?>" title="<?php echo $fila_lista_eventos["titulo"]; ?>">
                            	<img src="imagenes/upload/<?php echo $fila_lista_eventos["carpeta_imagen"]."".$fila_lista_eventos["imagen"]; ?>" width="200" height="150">
                            </a>
                        </div>
                        
                        <div class="sctpiici_contenido-evento">
                        	
                            <h3><a href="<?php echo $web."evento/".$fila_lista_eventos["url"]; ?>" title="<?php echo $fila_lista_eventos["titulo"]; ?>">
                            <?php echo $fila_lista_eventos["titulo"]; ?></a></h3>
                            
                            <?php echo cortarTextoRH($fila_lista_eventos["contenido"],1,0,270); ?>
                            
                            <a class="not_sley" href="<?php echo $web."evento/".$fila_lista_eventos["url"]; ?>" title="[+] Seguir leyendo...">[+] Seguir leyendo...</a>
                            
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