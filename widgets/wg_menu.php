<?php
//GALERIA
$rst_galeria=mysql_query("SELECT * FROM fmp_galeria WHERE id>0 ORDER BY id DESC;", $conexion);
$fila_galeria=mysql_fetch_array($rst_galeria);
?>
<div class="sctpd_item">

    <nav>
        <ul class="sf-menu">
            <li><a class="sfmp-ini" href="/" title="Inicio">Inicio</a></li>
            <li><a class="sfmp-item" href="quienes-somos" title="¿Quiénes Somos?">¿Quiénes Somos?</a></li>
            <li><a class="sfmp-item" href="palabras-presidente" title="Palabras del Presidente">Palabras del Presidente</a></li>
            <li><a class="sfmp-item" href="noticias" title="Noticias">Noticias</a></li>
            <li><a class="sfmp-item" href="eventos" title="Eventos">Eventos</a></li>
            <li><a class="sfmp-item" href="inscripcion" title="Inscripción">Inscripción</a></li>
            <li><a class="sfmp-item" href="-incentivos-migratorios" title="Incentivos Migratorios">Incentivos Migratorios</a></li>
            <li><a class="sfmp-item" href="-distrito-electoral" title="Creación de Distrito Electoral">Creación de Distrito Electoral</a></li>
            <li><a class="sfmp-item" href="galeria/<?php echo $fila_galeria["id"]."-".$fila_galeria["url"]; ?>" title="Galeria de Fotos">Galeria de Fotos</a></li>
            <li><a class="sfmp-fin" href="enlaces" title="Enlaces">Enlaces</a></li>
        </ul>
    </nav><!--FIN NAV -->
    
</div><!-- FIN PANEL DERECHA ITEM -->