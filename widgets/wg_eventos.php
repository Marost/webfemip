<?php
//EVENTOS
$rst_eventos=mysql_query("SELECT * FROM fmp_evento WHERE id>0 ORDER BY fecha_publicacion DESC;", $conexion);
$fila_eventos=mysql_fetch_array($rst_eventos);
?>
<div class="sctpd_item">
            	
    <div class="sctpdii_cabecera">
    <h3>Eventos</h3>
    </div>
    <div class="sctpdii_imagen">
        <a href="evento/<?php echo $fila_eventos["url"]; ?>">
        <img src="imagenes/upload/<?php echo $fila_eventos["carpeta_imagen"]."".$fila_eventos["imagen"]; ?>" width="255" alt="<?php echo $fila_eventos["titulo"]; ?>">
        </a></div>
    <div class="sctpdii_contenido">
        <h3><a href="evento/<?php echo $fila_eventos["url"]; ?>">
			<?php echo $fila_eventos["titulo"]; ?></a></h3>
    </div>
    
</div><!-- FIN PANEL DERECHA ITEM -->