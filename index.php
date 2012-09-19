<?php
include("panel@femip/conexion/conexion.php");
include("panel@femip/conexion/funciones.php");

//VARIABLES HEADER
$script_estilos=true;
$script_fonts=true;
$script_ie=true;
$script_slider=true;
$script_menu_principal=true;
$script_popup=true;
$script_video=true;

//NOTICIAS
$rst_noticias=mysql_query("SELECT * FROM fmp_noticia WHERE id>0 ORDER BY fecha_publicacion DESC LIMIT 4;", $conexion);

//EVENTOS
$rst_eventos=mysql_query("SELECT * FROM fmp_evento WHERE id>0 ORDER BY fecha_publicacion DESC LIMIT 1;", $conexion);
$fila_eventos=mysql_fetch_array($rst_eventos);

?>
<!DOCTYPE HTML>
<html lang="es">
<head>
<meta charset="utf-8">
<base href="<?php echo $web; ?>">
<title>Federación Mundial de Instituciones Peruanas</title>

<?php require_once("header-scripts.php"); ?>

</head>

<body>

<?php require_once("header.php"); ?>

<section class="limpiar">
	<div class="interior limpiar">
    	
        <div id="section_pizq_prin">
        	
            <div class="sctpipr_item">
            
            	<div class="sctpipri_cabecera">
                	<h2>Eventos</h2>
                </div><!-- FIN SECTION DERECHA PRINCIPAL ITEM CABECERA-->
                
                <div class="sctpipri_contenido">
                
                	<a href="evento/<?php echo $fila_eventos["url"] ?>" title="<?php echo $fila_eventos["titulo"]; ?>">
                	<img src="imagenes/upload/<?php echo $fila_eventos["carpeta_imagen"]."".$fila_eventos["imagen"]; ?>" width="500" alt="<?php echo $fila_eventos["titulo"]; ?>"></a>
                    
                    <p><a href="evento/<?php echo $fila_eventos["url"] ?>">
					<?php echo $fila_eventos["titulo"]; ?></a></p>
                    
                </div><!-- FIN SECTION DERECHA PRINCIPAL ITEM CONTENIDO-->
            	
            </div><!-- FIN SECTION DERECHA PRINCIPAL ITEM -->
            
        </div><!-- FIN SECTION IZQUIERDA PRINCIPAL -->
        
        <div id="section_pder_prin">
        
        	<div class="sctpdpr_item">
            
            	<div class="sctpdpri_cabecera">
                	<h2>Noticias</h2>
                </div><!-- FIN SECTION DERECHA PRINCIPAL ITEM CABECERA-->
                
                <div class="sctpdpri_contenido">
                	
                    <?php while($fila_noticias=mysql_fetch_array($rst_noticias)){ ?>
                    <div class="sctpdpric_item">
                    	<h3><a href="<?php echo $web."noticia/".$fila_noticias["id"]."-".$fila_noticias["url"]; ?>" title="<?php echo $fila_noticias["titulo"]; ?>">
						<?php echo $fila_noticias["titulo"]; ?></a></h3>
                        <a class="not_sley" href="<?php echo $web."noticia/".$fila_noticias["id"]."-".$fila_noticias["url"]; ?>" title="[+] Seguir leyendo...">[+] Seguir leyendo...</a>
                    </div><!-- FIN SECTION DERECHA PRINCIPAL ITEM CONTENIDO NOTICIA -->
                    <?php } ?>
                    
                    <h3><a class="mas_noticias" href="noticias" title="Más Noticias...">Más noticias</a></h3>
                    
              	</div><!-- FIN SECTION DERECHA PRINCIPAL ITEM CONTENIDO-->
            	
            </div><!-- FIN SECTION DERECHA PRINCIPAL ITEM -->
        
        </div><!-- FIN SECTION DERECHA PRINCIPAL -->
        
    </div>
</section><!--FIN SECTION -->

<?php require_once("footer.php"); ?>

<div id="capaPopUp"></div>
<div id="popUpDiv">
    <div id="capaPng">
        <div>
        	<img src="imagenes/popup/femip-tokio-2012.jpg" width="587" height="680" alt="Femip Tokio 2012">
        </div>
        <a href="javascript:void(0);" title="Cerrar" id="cerrar">
        	<img src="imagenes/icon-cerrar-popup.png" alt="Cerrar" width="77" height="25" title="Cerrar" /></a>
    </div>
</div>

</body>
</html>
