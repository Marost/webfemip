<?php if($script_estilos==true){ ?>
<link href="css/normalize.css" rel="stylesheet" type="text/css">
<link href="css/estilos.css" rel="stylesheet" type="text/css">
<?php } ?>

<?php if($script_fonts==true){ ?>
<link href='http://fonts.googleapis.com/css?family=Vollkorn|Signika|Lobster' rel='stylesheet' type='text/css'>
<?php } ?>

<?php if($script_ie==true){ ?>
<!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <script src="js/html5.js"></script>
    <link href="css/ie.css" rel="stylesheet" type="text/css">
<![endif]-->

<!--[if gte IE 9]>
  <style type="text/css"> .gradient { filter: none; } </style>
<![endif]-->
<?php } ?>

<?php if($script_slider==true){ ?>
<script type="text/javascript" src="js/jquery-1.4.2.js"></script>
<script type="text/javascript" src="libs/coinslider/coin-slider.min.js"></script>
<link rel="stylesheet" href="libs/coinslider/coin-slider-styles.css" type="text/css" />
<script type="text/javascript">
var jcsl = jQuery.noConflict();
jcsl(document).ready(function() {
	jcsl('#slide_imagenes').coinslider({
		width: 570, height: 290, spw: 2, sph: 10, delay: 5000, sDelay: 30, opacity: 1, 
		effect: 'rain', navigation: false, links : false, hoverPause: true
	});
});
</script>
<?php } ?>

<?php if($script_form_inscripcion==true){ ?>
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
<script type="text/javascript" src="js/funciones-inscripcion.js"></script>
<?php } ?>

<?php if($script_form_inscripcion_japon==true){ ?>
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
<script type="text/javascript" src="js/funciones-inscripcion-japon.js"></script>
<?php } ?>

<?php if($script_galeria_femip==true){ ?>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script src="libs/galleria/galleria-1.2.6.min.js"></script>
<?php } ?>

<?php if($script_noticia==true){ ?>
<script type="text/javascript">
function imprSelec(muestra){
	var ficha=document.getElementById(muestra);
	var ventimp=window.open(' ','popimpr');
	ventimp.document.write(ficha.innerHTML);
	ventimp.document.close();
	ventimp.print();
	ventimp.close()
}
</script>
<?php } ?>

<?php if($script_popup==true){ ?>
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
<!--[if IE]>
<style type="text/css" media="all">
    #capaPopUp  {filter:alpha(opacity=65);}
</style>
<![endif]-->

<script type="text/javascript"> 
//Variable que almacenará la posición del scroll, por defecto tiene valor 0.
var scrollCachePosition = 0;

var jpopup = jQuery.noConflict();
jpopup(function() {
	jcsl(document).ready(function() {
        scrollCachePosition = jpopup(window).scrollTop();
        //Envío el scroll a la posición 0 (left), 0 (top), es decir, arriba de todo.
        window.top.scroll(0,0);
 
        //Si el body es mas grande que la capa 'wrapper' incrementa la altura del body a la capa 'capaPopUp'.
        if (jpopup("body").outerHeight()>jpopup("#wrapper").outerHeight()){
            var altura=jpopup("body").outerHeight();
        }else{
        //Si la capa 'wrapper' es más grande que el body incrementa la altura de la capa 'wrapper' a la capa 'capaPopUp'.
            var altura=jpopup("#wrapper").outerHeight();
        }
        window.document.getElementById("capaPopUp").style.height=altura+"px";
        event.preventDefault();
        //Muestro la capa con el efecto 'slideToggle'.
        jpopup("#capaPopUp").slideToggle();
 
        //Calculo la altura de la capa 'popUpDiv' y lo divido entre 2 para darle un margen negativo.
        var altura=jpopup("#popUpDiv").outerHeight();
        jpopup("#popUpDiv").css("margin-top","-"+parseInt(altura/2)+"px");
 
        //Calculo la anchura de la capa 'popUpDiv' y lo divido entre 2 para darle un margen negativo.
        var anchura=jpopup("#popUpDiv").outerWidth();
        jpopup("#popUpDiv").css("margin-left","-"+parseInt(anchura/2)+"px");
 
        //Muestro la capa con el efecto 'slideToggle'.
        jpopup("#popUpDiv").slideToggle();
    });
    jpopup("#cerrar").click(function(event) {
        event.preventDefault();
        //Cierro las capas con el efecto 'slideToggle'.
        jpopup("#capaPopUp").slideToggle();
        jpopup("#popUpDiv").slideToggle();
        //Si la variable scrollCachePosition es mayor que 0 incrementará la posición del scroll al valor que se almacenó.
        if (scrollCachePosition > 0) {
            window.top.scroll(0,scrollCachePosition);
            //Reseteamos la variable scrollCachePosition a 0 para poder ejecutar el script tantas veces sea necesario.
            scrollCachePosition = 0;
        }
    });
});
</script>
<?php } ?>

<?php if($script_video==true){ ?>
<script type="text/javascript" src="libs/flowplayer/flowplayer-3.2.8.min.js"></script>
<?php } ?>

<script type="text/javascript">
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-20229980-15']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>