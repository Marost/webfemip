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
<title>Inscripción | Federación Mundial de Instituciones Peruanas</title>

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
            
                <div class="sctpii_cabecera"><h2>Inscripción</h2></div>
                <p class="contac_msj">En mi condición de Presidente de la FEMIP, deseo invitar a usted y por su intermedio a la Institución que representa a que forme parte nuestra.</p>
            	
                <div id="msj_enviado" class="ocultar">
                    <div class="mensaje">
                        <img src="imagenes/img-contactenos.jpg" width="680" height="329" alt="Contactenos">
                        <ul id="smedia_contatenos">
                            <li><a target="_blank" href="http://www.facebook.com/pages/Femip-Per%C3%BA/213709345386192" class="wgsmdcon_facebook">Facebook</a></li>
                            <li><a target="_blank" href="http://twitter.com/femip_peru" class="wgsmdcon_twitter">Twitter</a></li>
                        </ul>
                    </div>
                </div>
                
                <form method="post" id="form_inscripcion">
                	
                    <p class="titulo">Datos de la Asociación</p>
        	
                    <fieldset class="sin_borde">
                      <label for="fc_asoc_nombre">Nombre de la Asociación: </label>
                        <input class="inputtext1" name="fc_asoc_nombre" id="fc_asoc_nombre" size="50" />
                    </fieldset>
                    
                    <fieldset class="sin_borde">
                        <label for="fc_asoc_pais">País: </label>
                        <input class="inputtext2" name="fc_asoc_pais" id="fc_asoc_pais" size="50" />
                    </fieldset>
                    
                    <fieldset class="sin_borde">
                        <label for="fc_asoc_zip">ZIP / Código Postal: </label>
                        <input class="inputtext2" name="fc_asoc_zip" id="fc_asoc_zip" size="50" />
                    </fieldset>
                    
                    <fieldset class="sin_borde">
                        <label for="fc_asoc_direccion">Dirección: </label>
                        <input class="inputtext1" name="fc_asoc_direccion" id="fc_asoc_direccion" size="50" />
                    </fieldset>
                    
                    <fieldset class="sin_borde">
                        <label for="fc_asoc_telcasa">Teléfono casa: </label>
                        <input class="inputtext2" name="fc_asoc_telcasa" id="fc_asoc_telcasa" size="50" />
                    </fieldset>
                                          
                    <fieldset class="sin_borde">
                        <label for="fc_asoc_email">Email: </label>
                        <input class="inputtext2" name="fc_asoc_email" id="fc_asoc_email" size="50" />
                    </fieldset>
                    
                    <fieldset class="sin_borde">
                        <label for="fc_asoc_teloficina">Teléfono oficina: </label>
                        <input class="inputtext2" name="fc_asoc_teloficina" id="fc_asoc_teloficina" size="50" />
                    </fieldset>
                    
                  <fieldset class="sin_borde">
                    	<label for="fc_asoc_num">Número de Asociados: </label>
                      	<input name="fc_asoc_num" type="number" class="inputtext3" id="fc_asoc_num" min="0" value="0" size="50" />
                    </fieldset>
                    
                    <p class="titulo">Datos del Representante de la Asociación</p>
 
                    <fieldset class="sin_borde">
                        <label for="fc_asoc_pais">Cargo: </label>
                        <input class="inputtext2" name="fc_rep_cargo" id="fc_rep_cargo" size="50" />
                    </fieldset>
                    
					<fieldset class="sin_borde">
                        <label for="fc_asoc_direccion">Nombre completo: </label>
                        <input class="inputtext1" name="fc_rep_nombre" id="fc_rep_nombre" size="50" />
                    </fieldset>
                    
                    <fieldset class="sin_borde">
                        <label for="fc_asoc_direccion">Dirección: </label>
                        <input class="inputtext1" name="fc_rep_direccion" id="fc_rep_direccion" size="50" />
                    </fieldset>
                    
                    <fieldset class="sin_borde">
                        <label for="fc_asoc_telcasa">Teléfono casa: </label>
                        <input class="inputtext2" name="fc_rep_telcasa" id="fc_rep_telcasa" size="50" />
                    </fieldset>
                                          
                    <fieldset class="sin_borde">
                        <label for="fc_asoc_telcasa">Email: </label>
                        <input class="inputtext2" name="fc_rep_email" id="fc_rep_email" size="50" />
                    </fieldset>
                    
                    <fieldset class="sin_borde">
                        <label for="fc_asoc_telcasa">Teléfono oficina: </label>
                        <input class="inputtext2" name="fc_rep_teloficina" id="fc_rep_teloficina" size="50" />
                    </fieldset>
                    
                    <fieldset class="sin_borde">
                        <label for="fc_asoc_telcasa">Teléfono celular: </label>
                        <input class="inputtext2" name="fc_rep_telcelular" id="fc_rep_telcelular" size="50" />
                    </fieldset>
                  
                    <fieldset class="sin_borde boton">
                        <img src="imagenes/load.gif" width="20" height="20" alt="Cargando..." class="imagen ocultar">&nbsp;
                        <button class="fc_enviar">&nbsp;</button>&nbsp;
                        <img src="imagenes/load.gif" width="20" height="20" alt="Cargando..." class="imagen ocultar">
                    </fieldset>
                                
                </form>
                
            </div>
            
        </div><!-- FIN SECTION IZQUIERDA -->
        
    </div>
</section><!--FIN SECTION -->

<?php require_once("footer.php"); ?>

</body>
</html>