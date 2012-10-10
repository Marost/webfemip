<?php
include("panel@femip/conexion/conexion.php");
include("panel@femip/conexion/funciones.php");

//VARIABLES HEADER
$script_estilos=true;
$script_fonts=true;
$script_ie=true;
$script_noticia=true;

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
$rst_noticia=mysql_query("SELECT * FROM fmp_noticia WHERE id=$idnoticia AND url='$urlnoticia'", $conexion);
$num_noticia=mysql_num_rows($rst_noticia);
if($num_noticia>0){
	$fila_noticia=mysql_fetch_array($rst_noticia);
	
	//VARIABLES
	$noticia_titulo=$fila_noticia["titulo"];
	$noticia_contenido=$fila_noticia["contenido"];
	$noticia_fecha=$fila_noticia["fecha_publicacion"];
	$noticia_imagen=$fila_noticia["imagen"];
	$noticia_imagen_carpeta=$fila_noticia["carpeta_imagen"];
	$noticia_video=$fila_noticia["video"];
	$noticia_video_carpeta=$fila_noticia["carpeta_video"];
	$noticia_video_tipo=$fila_noticia["tipo_video"];
	
	//GALERIA DE FOTOS
	$rst_noticia_fotos=mysql_query("SELECT * FROM fmp_noticia_slide WHERE noticia=$idnoticia ORDER BY orden ASC;", $conexion);
	$num_noticia_fotos=mysql_fetch_array($rst_noticia_fotos);
	
	//VARIABLE
	if($num_noticia_fotos>0){ $script_galeria_femip=true; };
	
}else{ header("Location: ".$web); }

?>
<!DOCTYPE HTML>
<html lang="es">
<head>
<meta charset="utf-8">
<title><?php echo $noticia_titulo; ?></title>
<base href="<?php echo $web; ?>">
<meta property="og:title" content="<?php echo $noticia_titulo; ?>" />
<meta property="og:type" content="article" />
<meta property="og:url" content="<?php echo $urlweb; ?>" />
<meta property="og:image" content="<?php echo $web."imagenes/upload/".$noticia_imagen_carpeta."".$noticia_imagen; ?>" />
<meta property="og:image:width" content="140" />
<meta property="og:image:height" content="140" />
<meta property="og:description" content="<?php echo soloDescripcion($noticia_contenido); ?>" />
<meta property="og:site_name" content="<?php echo $web_nombre; ?>" />
<meta property="fb:admins" content="1376286793" />

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
                	<h2><?php echo $noticia_titulo; ?></h2>
                </div>
                
                <div class="sctpii_detalle">
                	<ul>
                    	<li><a href="noticia/enviar-<?php echo $idnoticia; ?>" target="_blank" class="not_enviar_correo" title="Envia la noticia a un amigo">Enviar a un amigo</a></li>                        
                        <li><a href="javascript:imprSelec('section_pizq');" class="not_imprimir" title="Imprimir">Imprimir</a></li>
                    </ul>
                    <p><?php echo $noticia_fecha; ?></p>                    
                </div>
               
                <div class="sctpii_imagen">
                	<?php if($noticia_imagen!=""){ ?>
                    	<img src="imagenes/upload/<?php echo $noticia_imagen_carpeta."".$noticia_imagen; ?>" alt="<?php echo $noticia_titulo ?>">
                    <?php }elseif($noticia_video!=""){ ?>
                    	<?php echo tipoVideo($noticia_video_tipo,$noticia_video_carpeta,$noticia_video,$noticia_imagen,$noticia_imagen_carpeta,$idnoticia,600,400,$web); ?>
                    <?php }elseif($num_noticia_fotos<>0){ ?>
                        <div id="noticia_galeria">
                        
	                        <?php while($fila_noticia_fotos=mysql_fetch_array($rst_noticia_fotos)){ ?>
                        
                                <a href="imagenes/upload/<?php echo $fila_noticia_fotos["carpeta"]."".$fila_noticia_fotos["imagen"];  ?>">
                                    <img title="<?php echo $fila_noticia_fotos["titulo"]; ?>"
                                         alt="<?php echo $fila_noticia_fotos["titulo"]; ?>"
                                         src="<?php echo $web; ?>imagenes/upload/<?php echo $fila_noticia_fotos["carpeta"]."thumb/".$fila_noticia_fotos["imagen"];  ?>" width="66" height="42">
                                </a>
                        
	                        <?php } ?>
                        
                        </div>
                    <?php } ?>
                </div>
                
                <div class="sctpii_contenido">
                <?php echo $noticia_contenido; ?>
                </div>
                
                <div class="sctpii_notweb_social">
                	
                    <span>Comparte: </span>
                    
                    <div class="notweb_facebook">
                    	<a href="http://www.facebook.com/sharer.php?u=<?php echo $web."noticia/".$idnoticia."-".$urlnoticia; ?>&t=<?php echo $noticia_titulo; ?>" target="blank">
                        	<img src="imagenes/compartirfb.jpg" width="82" height="18" alt="Compartir"></a>
                    </div>
                    
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
                        data-text="<?php echo $noticia_titulo; ?>" 
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

<?php if($num_noticia_fotos>0){ ?>
<script>
	var jgalfemip = jQuery.noConflict();
	Galleria.loadTheme('libs/galleria/galleria.classic.min.js');
	jgalfemip('#noticia_galeria').galleria();
</script>
<?php } ?>

</body>
</html>