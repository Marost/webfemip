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
$wg_eventos=true;
$wg_galeria=true;
$wg_encuesta=true;

//VARIABLES
$idnoticia=$_REQUEST["id"];
$urlnoticia=$_REQUEST["url"];
$urlweb=$web."noticia/".$idnoticia."-".$urlnoticia;

//NOTICIA
$rst_noticia=mysql_query("SELECT * FROM fmp_evento WHERE url='$urlnoticia'", $conexion);
$num_noticia=mysql_num_rows($rst_noticia);
if($num_noticia>0){
	$fila_noticia=mysql_fetch_array($rst_noticia);
}else{ header("Location: ".$web); }

?>
<!DOCTYPE HTML>
<html lang="es">
<head>
<meta charset="utf-8">
<base href="<?php echo $web; ?>">
<title><?php echo $fila_noticia["titulo"]; ?> | Federación Mundial de Instituciones Peruanas</title>
<link rel="image_src" href="<?php echo $web."imagenes/upload/".$fila_noticia["carpeta_imagen"]."".$fila_noticia["imagen"]; ?>" id="image_src">

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
            
                <div class="sctpii_cabecera"><h2>
                	<?php echo $fila_noticia["titulo"]; ?></h2>
                </div>
                
                <div class="sctpii_imagen">
                	<img src="imagenes/upload/<?php echo $fila_noticia["carpeta_imagen"]."".$fila_noticia["imagen"]; ?>" alt="<?php echo $fila_noticia["titulo"]; ?>" >
                </div>
                
                <div class="sctpii_contenido">
                <?php echo $fila_noticia["contenido"]; ?>
                </div>
                
                <div class="sctpii_notweb_social">
                	
                    <span>Comparte: </span>
                    
                    <div class="notweb_facebook">
                    	
                        <div id="fb-root"></div>
						<script>(function(d, s, id) {
                          var js, fjs = d.getElementsByTagName(s)[0];
                          if (d.getElementById(id)) return;
                          js = d.createElement(s); js.id = id;
                          js.src = "//connect.facebook.net/es_LA/all.js#xfbml=1&appId=217179171676130";
                          fjs.parentNode.insertBefore(js, fjs);
                        }(document, 'script', 'facebook-jssdk'));</script>

						<div class="fb-like" 
                        data-href="<?php echo $urlweb; ?>" 
                        data-send="false" 
                        data-layout="button_count" 
                        data-width="120" data-show-faces="false"></div>
                        
                    </div><!-- NOTWEB FACEBOOK -->
                    
                    <div class="notweb_twitter">
                    	
                        <a href="https://twitter.com/share" 
                        class="twitter-share-button" 
                        data-url="<?php echo $urlweb; ?>" 
                        data-text="<?php echo $fila_noticia["titulo"]; ?>" 
                        data-lang="es" data-hashtags="FEMIP">Twittear</a>
						<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
                        
                    </div><!-- NOTWEB TWITTER -->
                    
                    <div class="notweb_google">
                    
                        <div class="g-plusone" data-size="medium" data-href="<?php echo $urlweb; ?>"></div>
                        
                        <script type="text/javascript">
                          window.___gcfg = {lang: 'es-419'};
                        
                          (function() {
                            var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
                            po.src = 'https://apis.google.com/js/plusone.js';
                            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
                          })();
                        </script>
                    
                    </div><!-- NOTWEB GOOGLE -->
                                    
                </div><!-- FIN NOTA WEB SOCIAL -->
                
            </div><!-- FIN SECTION ITEM -->
            
        </div><!-- FIN SECTION IZQUIERDA -->
        
    </div>
</section><!--FIN SECTION -->

<?php require_once("footer.php"); ?>

</body>
</html>