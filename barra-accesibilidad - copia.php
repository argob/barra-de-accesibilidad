<?php 

/*
Notas:
1) Para incluir la barra en otro sitio agregar 
    a) en el local_config.php la siguiente linea, y soliciar a operaciones@mrecic.gov.ar se agregue también
     en el local_config.php del sitio correspondiente:

        $barra_accesibilidad='http://desa.default-accesibilidad.mrec.ar/barra-accesibilidad.php?ancho="940"';

      Si se incluye via php include...:
        $_GET['ancho'] = 940;
        include ("barra-accesibilidad.php"); 

    b) en una página (html) que levante siempre (En drupal, puede ir por ejemplo en el <head> de html.tpl.php... ) las siguiente lineas PHP:

        <?php 
            require "local_config.php";
            $ch = curl_init($barra_accesibilidad);
            curl_setopt($ch, CURLOPT_TIMEOUT, 5);
            curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $data_barra_accesibilidad = curl_exec($ch);
            curl_close($ch); ?>

    c) en el lugar en que necesitamos que se imprima 

      <div id="div-altura-variable">
        <?php echo $data_barra_accesibilidad;?>
      </div>

      Si se incluye via php include...:
      <div id="div-altura-variable">
        $_GET['ancho'] = 940;
        include ("barra-accesibilidad.php"); 
      </div>

      El atributo id="div-altura-variable", permite que desde jquery, se "empuje" la web destino hacia abajo, dejando lugar para la barra.

    d) Lo que será ampliado con el slider de la barra, debe tener un:
        id="container-accesibilidad-zoom"

2) Se deben generar e incluir en el destino estos dos css, con sus rutas correctas,
  contienen la información de color extraída de su hoja de estilos principal (overrides-color-original.css), 
  y una hoja de estilo con los colores de alto contraste (overrides-alto-contraste.css)
  ((En drupal, puede ir por ejemplo en el <head> de html.tpl.php... luego de 1-b )

    <link rel="stylesheet" title="normal" type="text/css" href="VERIFICAR RUTA/overrides-color-original.css">
    <link rel="alternate stylesheet" title="alto-contraste" type="text/css" href="VERIFICAR RUTA/overrides-alto-contraste.css">

3) Estos IDs deben estar en el código de destino para que funcionen los "Saltar a" de la barra:
  El anchor link de Navegación es:
    <a id="navegacion"></a> y
  el anchor link de Contenido principal es:
    <a id="contenido_principal"></a>

4) En el body debe estar este "onload", para que funcione la cookie de elección de la versión de color original o de alto 
  contraste, y este "onresize" es para que cuando la barra tenga más de un renglón, que "empuje" el contenido de la web.
  
  <body onload="set_style_from_cookie()" onresize="ajustar_div_variable()">

5) En el HEAD debe decir:
    <meta http-equiv="x-ua-compatible" content="IE=edge">
  Esto es para que IE no se ponga en algún modo de compatibilidad. Si emula IE7 por ejemplo, muchas cosas no funcionarán. 
  Nosotros damos soporte hasta IE9 incluído.

  */ ?>

<!--       comienzo barra de accesibilidad rep.          --> 

<!-- - - - - - - - - - - - -->
    <?php
      //tomo la variable del ancho del sitio en phpAncho
      if(isset($_GET['ancho'])) {
        $phpAncho = addslashes($_GET['ancho']);
      } else {
        $phpAncho = 1140; //valor arbitrario si no viene seteado por $GET
      }
      
    ?>

    <script>
      <?php //acá transfiero phpAncho a la variable jsAncho en Javascript ?>
      var jsAncho = "<?php echo $phpAncho; ?>" ;
      document.write("<span aria-hidden=\"true\" class=\"esconder\">jsAncho = " + jsAncho + "</span>");
    </script>

<!-- - - - - - - - - - - - -->
  <style>
    #barra-accesibilidad {
      max-width: <?php echo $phpAncho; echo "px"; ?> !important;
    }
  </style>

  <?php // incluir css de la barra de accesibilidad ?>
  <link rel="stylesheet" type="text/css" href="http://<?php echo $_SERVER['SERVER_NAME'];?>/css/barra-de-accesibilidad.css">

  <?php // incluir css del range slider ?>
  <link rel="stylesheet" type="text/css" href="http://<?php echo $_SERVER['SERVER_NAME'];?>/js/rangeslider/rangeslider.css">

  <?php //este noscript muestra un mensaje en caso en que javascript esté desactivado, y desabilita las Opciones
        //de la barra que necesitan javascript.
  ?>

  <noscript>
    <p class="estilo-noscript"><span class="signo-de-alerta">‼ </span>La funcionalidad de la Barra de Accesibilidad está reducida porque depende de una "librería" que no está disponible. (JQuery/JavaScript).</p>
    <style>
      #barra-accesibilidad ul li:nth-child(3), #barra-accesibilidad ul li:nth-child(4), #barra-accesibilidad ul li:nth-child(5) {display:none;}
    </style>
  </noscript>

  <?php // HTML de la barra de accesibilidad  ?>
  <div id="accesibilidad-background">
    <div id="barra-accesibilidad">
      <div id="caja-titulo" style="cursor: auto;">
        <span class="opciones-accesibilidad-titulo" style="cursor: auto;">Herramientas de Accesibilidad</span>
        <br style="cursor: auto;">
        Cancillería Argentina
        <a href="http://<?php echo $_SERVER['SERVER_NAME'];?>/ayuda.php" target="_blank" title="Información y ayuda sobre las Herramientas de Accesibilidad" class="informacion-adicional"><img src="http://<?php echo $_SERVER['SERVER_NAME'];?>/images/icono-mas-informacion.svg" alt="Ayuda y más información." width="16" height="16" style="cursor: auto;"></a>
      </div>
      <ul id="ul-barra-accesibilidad">
        <li><a href="#contenido_principal" class="esconder">Saltar al Contenido principal</a></li>

        <li><a href="#navegacion"><span class="esconder">Saltar a Navegación</span></a></li>

        <li class="barra-accesibilidad-esconder-items-en-movil"><?php // slider de tamaño de fuente ?>Tamaño
          <a href="#" id="minima-magnificacion"><span class="esconder">Haga click en la siguiente letra "A" para minimizar la magnificación.</span><img src="http://<?php echo $_SERVER['SERVER_NAME'];?>/images/icono-zoom-minimo.svg" alt="Icono de magnificación mínima." width="13" height="36"></a>
          <label class="label-tipografia-slider" for="tipografia-slider"><span class="esconder">Para manejar la magnificación (zoom) de la página, presione Enter en el cuadro de edición siguiente y pulse las flechas izquierda o derecha para aumentar o disminuir.</span></label>
          <input id="tipografia-slider" type="range" min="1" max="3" step="0.01" value="0">
          <a href="#" id="maxima-magnificacion"><span class="esconder">Haga click en la siguiente letra "A" para maximizar la magnificación.</span><img src="http://<?php echo $_SERVER['SERVER_NAME'];?>/images/icono-zoom-maximo.svg" alt="Icono de magnificación máxima." width="27" height="36"></a>
        </li>

        <li class="barra-accesibilidad-esconder-items-en-movil">Puntero
          <a href="#" id="puntero-del-mouse-chico">
            <img src="http://<?php echo $_SERVER['SERVER_NAME'];?>/images/icono-puntero-chico.svg" alt="Puntero del mouse original." width="27" height="36">
          </a>
          <a href="#" id="puntero-del-mouse-grande">
            <img src="http://<?php echo $_SERVER['SERVER_NAME'];?>/images/icono-puntero-grande.svg" alt="Puntero del mouse grande." width="28" height="36">
          </a>
        </li>

        <li><?php // CSS alto contraste o normal?>Color
          <a href="#" onclick="switch_style('alto-contraste');return false;">
            <span class="esconder">Versión de color de Alto contraste</span>
            <img src="http://<?php echo $_SERVER['SERVER_NAME'];?>/images/icono-color-alto-contraste.svg" alt="Icono de color de alto contraste.">
          </a>

          <a href="#" onclick="switch_style('normal');return false;">
            <span class="esconder">Versión de Color original</span>
            <img src="http://<?php echo $_SERVER['SERVER_NAME'];?>/images/icono-color-original.svg" alt="Icono de color original.">
          </a>
        </li>

      </ul>
    </div>

  </div>
  <?php // fin HTML de la barra de accesibilidad ?>

<?php /* incluir los js de la barra:
  JS para Zoom Slider
  JS para cambiar css en vivo, para la versión de alto contraste
  JS para...
*/
  ?>
<script>
var servidor='http://<?php echo $_SERVER['SERVER_NAME'];?>';
</script>
  <script src="http://<?php echo $_SERVER['SERVER_NAME'];?>/js/apps-accesibilidad.js" language="JavaScript" type="text/javascript"></script>
  <script src="http://<?php echo $_SERVER['SERVER_NAME'];?>/js/rangeslider/rangeslider.min.js" language="JavaScript" type="text/javascript"></script><!-- range slider -->
  
<!--         fin barra de accesibilidad          -->  
