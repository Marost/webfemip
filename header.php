<?php
//GALERIA
$rst_galeria=mysql_query("SELECT * FROM fmp_galeria WHERE id>0 ORDER BY id DESC;", $conexion);
$fila_galeria=mysql_fetch_array($rst_galeria);

//SLIDER IMAGENES
$rst_slider_img=mysql_query("SELECT * FROM fmp_galeria_slide WHERE orden>0 AND orden<10 ORDER BY orden ASC;", $conexion);

?>
<script src="Scripts/swfobject_modified.js" type="text/javascript"></script>
<header class="limpiar">
    
        <div id="header_sup" class="limpiar">
        	
            <div class="interior limpiar">
            
            	<h1><a href="/" id="logo_sup">Federación Mundial de Instituciones Peruanas</a></h1>
                
                <div id="wg_social">
                	<ul id="wgsc_items">
                        <li><a href="http://www.facebook.com/femipperu" target="_blank" class="wgsc_facebook">Facebook</a></li>
                        <li><a href="http://twitter.com/femip_peru" target="_blank" class="wgsc_twitter">Twitter</a></li>
                    </ul>
                </div><!-- FIN SOCIAL MEDIA -->
                
                <div id="fnd_music">
               	  <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="25" height="25" id="FlashID" title="Música">
                	  <param name="movie" value="archivos/music.swf">
                	  <param name="quality" value="high">
                	  <param name="wmode" value="transparent">
                	  <param name="swfversion" value="8.0.35.0">
                	  <!-- Esta etiqueta param indica a los usuarios de Flash Player 6.0 r65 o posterior que descarguen la versión más reciente de Flash Player. Elimínela si no desea que los usuarios vean el mensaje. -->
                	  <param name="expressinstall" value="Scripts/expressInstall.swf">
                	  <!-- La siguiente etiqueta object es para navegadores distintos de IE. Ocúltela a IE mediante IECC. -->
                	  <!--[if !IE]>-->
                	  <object type="application/x-shockwave-flash" data="archivos/music.swf" width="25" height="25">
                	    <!--<![endif]-->
                	    <param name="quality" value="high">
                	    <param name="wmode" value="transparent">
                	    <param name="swfversion" value="8.0.35.0">
                	    <param name="expressinstall" value="Scripts/expressInstall.swf">
                	    <!-- El navegador muestra el siguiente contenido alternativo para usuarios con Flash Player 6.0 o versiones anteriores. -->
                	    <div>
                	      <h4>El contenido de esta p&aacute;gina requiere una versi&oacute;n m&aacute;s reciente de Adobe Flash Player.</h4>
                	      <p><a href="http://www.adobe.com/go/getflashplayer"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Obtener Adobe Flash Player" width="112" height="33" /></a></p>
              	      </div>
                	    <!--[if !IE]>-->
              	    </object>
                	  <!--<![endif]-->
              	  </object>
                </div>
            
            </div><!-- FIN INTERIOR -->
            
        </div><!-- FIN HEADER SUPERIOR -->
        
        <div id="header_inf" class="limpiar">
        
            <div class="interior limpiar">
            
				<?php if($script_menu_principal==true){ ?>
                <nav class="menu-principal">
                    <ul class="sf-menu-principal">
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
                <?php } ?>
              
              	<?php if($scrip_video==true){ ?>
                <div id="slide_superior" class="limpiar">
                    
                    <a href="femip.mp4" style="display:block;width:580px;height:300px" id="player">
                    	<img src="imagenes/marca-peru.jpg" alt="Marca Perú" />
                    </a>
                    
                    <script>
						flowplayer("player", "video/flowplayer-3.2.8.swf");
						clip: { autoPlay: false };
						canvas: {backgroundColor: "transparent"}
					</script>
                
                </div><!--FIN SLIDER -->
                <?php } ?>
                                
            </div><!-- FIN INTERIOR -->
            
        </div><!--FIN HADER INFERIOR -->
    
  <script type="text/javascript">
swfobject.registerObject("FlashID");
        </script>
</header><!--FIN HEADER -->