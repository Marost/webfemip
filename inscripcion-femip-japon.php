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
            
                <div class="sctpii_cabecera">
                  <h2> V Convención FEMIP - Tokio</h2>
                </div>
            	
                <div id="msj_enviado" class="ocultar">
                    <div class="mensaje">
                        <img src="imagenes/img-contactenos.jpg" width="680" height="329" alt="Contactenos">
                        <ul id="smedia_contatenos">
                            <li><a target="_blank" href="http://facebook.com/pages/Femip-Per%C3%BA/213709345386192" class="wgsmdcon_facebook">Facebook</a></li>
                            <li><a target="_blank" href="http://twitter.com/femip_peru" class="wgsmdcon_twitter">Twitter</a></li>
                        </ul>
                    </div>
                </div>
                
                <form method="post" id="form_japon">
                  <fieldset class="sin_borde">
                    <label for="fc_institucion_rubro">Rubro de su Institución</label>
                      <select name="fc_institucion_rubro" id="fc_institucion_rubro">
                        <option value="Autos" selected>Autos</option>
                        <option value="Belleza y Relajación">Belleza y Relajación</option>
                        <option value="Diversión">Diversión</option>
                        <option value="Educación">Educación</option>
                        <option value="Hogar">Hogar</option>
                        <option value="Hospitales y farmacias">Hospitales y farmacias</option>
                        <option value="Inmuebles">Inmuebles</option>
                        <option value="Instrumentos Musicales">Instrumentos Musicales</option>
                        <option value="Maquinaria">Maquinaria</option>
                        <option value="Oficinas">Oficinas</option>
                        <option value="Regalos">Regalos</option>
                        <option value="Salud">Salud</option>
                        <option value="Servicios financieros">Servicios financieros</option>
                        <option value="Viajes y Hoteles">Viajes y Hoteles</option>
                        <option value="Otros">Otros</option>
                      </select>
                    </fieldset>
                    
                    <fieldset class="sin_borde">
                      <label for="fc_institucion_nombre">Nombre de su Institución</label>
                        <input class="inputtext1" name="fc_institucion_nombre" id="fc_institucion_nombre" size="50" />
                    </fieldset>
                    
                    <fieldset class="sin_borde">
                        <label for="fc_institucion_futuro"> ¿Hacia dónde apunta su institución en el futuro?</label>
                        <textarea name="fc_institucion_futuro" cols="100" rows="7" id="fc_institucion_futuro"></textarea>
                    </fieldset>
                    
                    <fieldset class="sin_borde">
                        <label for="fc_institucion_objetivos"> ¿Cuáles son los objetivos que se basa su institución para llegar a dónde desean llegar?</label>
                        <textarea name="fc_institucion_objetivos" cols="100" rows="7" id="fc_institucion_objetivos"></textarea>
                    </fieldset>
                    
                    <fieldset class="sin_borde">
                        <label for="fc_institucion_descripcion"> Breve Descripción de su Institución</label>
                        <textarea name="fc_institucion_descripcion" cols="100" rows="7" id="fc_institucion_descripcion"></textarea>
                    </fieldset>
                                          
                    <fieldset class="sin_borde">
                        <label for="fc_institucion_email"> Correo electrónico de su Institución</label>
                        <input class="inputtext1" name="fc_institucion_email" id="fc_institucion_email" size="50" />
                    </fieldset>
                    
                    <fieldset class="sin_borde">
                        <label for="fc_institucion_participacion"> ¿Es la primera participación de su institución en las Convenciones de la FEMIP?</label>
                        <select name="fc_institucion_participacion" id="fc_institucion_participacion">
                          <option value="Si" selected>Si</option>
                          <option value="No">No</option>
                        </select>
                    </fieldset>
                    
                  <fieldset class="sin_borde">
                    	<label for="fc_participante_nombre"> Nombre(s) del participante</label>
                      	<input name="fc_participante_nombre" class="inputtext1" id="fc_participante_nombre" min="0" size="50" />
                    </fieldset>
                    
                    <fieldset class="sin_borde">
                        <label for="fc_participante_apellidos"> Apellidos del participante</label>
                        <input class="inputtext1" name="fc_participante_apellidos" id="fc_participante_apellidos" size="50" />
                    </fieldset>
                    
					<fieldset class="sin_borde">
                        <label for="fc_participante_email"> E-mail del participante</label>
                        <input class="inputtext1" name="fc_participante_email" id="fc_participante_email" size="50" />
                    </fieldset>
                    
                    <fieldset class="sin_borde">
                        <label for="fc_participante_cargo"> Cargo en la Institución que representa</label>
                        <input class="inputtext1" name="fc_participante_cargo" id="fc_participante_cargo" size="50" />
                    </fieldset>
                    
                    <fieldset class="sin_borde">
                        <label for="fc_participante_participacion"> ¿Es su primera participación en una Convención de la FEMIP?</label>
                        <select name="fc_participante_participacion" id="fc_participante_participacion">
                          <option value="Si" selected>Si</option>
                          <option value="No">No</option>
                        </select>
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
