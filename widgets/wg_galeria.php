<?php
//GALERIA
$rst_wg_galeria=mysql_query("SELECT * FROM fmp_galeria WHERE id>0 ORDER BY id DESC;", $conexion);
$num_wg_galeria=mysql_num_rows($rst_wg_galeria);
$fila_wg_galeria=mysql_fetch_array($rst_wg_galeria);
?>

<?php
if($num_wg_galeria>0){
	$rst_wg_galeria_img=mysql_query("SELECT * FROM fmp_galeria_slide WHERE id>0 AND orden=0 ORDER BY noticia DESC LIMIT 1;");
	$fila_wg_galeria_img=mysql_fetch_array($rst_wg_galeria_img);
?>
<div class="sctpd_item">
            	
    <div class="sctpdii_cabecera">
    <h3>Galería de Fotos</h3>
    </div>
    <div class="sctpdii_imagen">
    	<a href="galeria/<?php echo $fila_wg_galeria["id"]."-".$fila_wg_galeria["url"]; ?>" title="<?php echo $fila_wg_galeria["titulo"]; ?>">
    	<img src="imagenes/galeria/<?php echo $fila_wg_galeria_img["carpeta"]."".$fila_wg_galeria_img["imagen"]; ?>" width="255" alt="<?php echo $fila_wg_galeria["titulo"]; ?>">
        </a>
    </div>
    
</div><!-- FIN PANEL DERECHA ITEM -->
<?php } ?>