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

//ENLACES
$rst_enlaces_categoria=mysql_query("SELECT * FROM fmp_empresa_enlaces_categoria WHERE id>0 ORDER BY categoria ASC;", $conexion);

?>
<!DOCTYPE HTML>
<html lang="es">
<head>
<meta charset="utf-8">
<base href="<?php echo $web; ?>">
<title>Enlaces | Federación Mundial de Instituciones Peruanas</title>

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
            	
                <?php while($fila_enlaces_categoria=mysql_fetch_array($rst_enlaces_categoria)){ ?>
                
                    <div class="sctpii_cabecera"><h2><?php echo $fila_enlaces_categoria["categoria"]; ?></h2></div>
                    
                    <?php
                    //ENLACES
                    $idCategoria=$fila_enlaces_categoria["id"];
                    $rst_enlaces=mysql_query("SELECT * FROM fmp_empresa_enlaces WHERE categoria=$idCategoria ORDER BY orden ASC;", $conexion);
                    ?>
                    
                    <?php if($fila_enlaces_categoria["imagen"]==1){ ?>
                        <?php while($fila_enlaces=mysql_fetch_array($rst_enlaces)){ ?>
                            <div class="logos_enlaces_items">
                                <table>
                                  <tr>
                                    <td>
                                        <a href="<?php echo $fila_enlaces["enlace"]; ?>" target="_blank" title="<?php echo $fila_enlaces["titulo"]; ?>">
                                        <img src="imagenes/enlaces/<?php echo $fila_enlaces["carpeta_imagen"]."".$fila_enlaces["imagen"]; ?>" alt="<?php echo $fila_enlaces["titulo"]; ?>"></a>
                                     </td>
                                  </tr>
                                </table>
                            </div>
                        <?php } ?>
                    <?php }elseif($fila_enlaces_categoria["imagen"]==2){ ?>
                    	<div class="enlaces_items">
                            <ul>
                                <?php while($fila_enlaces=mysql_fetch_array($rst_enlaces)){ ?>
                                    <li><a href="<?php echo $fila_enlaces["enlace"]; ?>" target="_blank" title="<?php echo $fila_enlaces["titulo"]; ?>"><?php echo $fila_enlaces["titulo"]; ?></a></li>
                                <?php } ?>
                            </ul>
                        </div>
                    <?php } ?>
                
                <?php } ?>
                
			</div>
            
        </div><!-- FIN SECTION IZQUIERDA -->
        
    </div>
</section><!--FIN SECTION -->

<?php require_once("footer.php"); ?>

</body>
</html>
