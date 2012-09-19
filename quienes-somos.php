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

?>
<!DOCTYPE HTML>
<html lang="es">
<head>
<meta charset="utf-8">
<base href="<?php echo $web; ?>">
<title>¿Quiénes Somos? | Federación Mundial de Instituciones Peruanas</title>

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
            
                <div class="sctpii_cabecera"><h2>¿Quiénes somos?</h2></div>
                
                <?php echo $quienes_somos; ?>
                
            </div>
            
        </div><!-- FIN SECTION IZQUIERDA -->
        
    </div>
</section><!--FIN SECTION -->

<?php require_once("footer.php"); ?>

</body>
</html>