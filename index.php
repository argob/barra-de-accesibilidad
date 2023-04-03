<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="IE=edge">
    <title>Barra de Herramientas de Accesibilidad - Ministerio de Relaciones Exteriores y Culto</title> 

    <link rel="stylesheet" title="normal" type="text/css" href="/css/overrides-color-original.css">
    <link rel="alternate stylesheet" title="alto-contraste" type="text/css" href="/css/overrides-alto-contraste.css">
    <link rel="stylesheet" type="text/css" href="/css/styles-local-repositorio.css">

    <script src="/js/jquery-3.6.3.min.js"></script>
</head>

<body onload="set_style_from_cookie()" onresize="ajustar_div_variable()">

    <div id="div-altura-variable">
        <?php 
        $phpAncho = 1140;
        include ("barra-accesibilidad.php"); 
        ?>
    </div>

    <div id="container-accesibilidad-zoom"> 

        <div class="barra-de-accesibilidad-informacion">

            <div class="encabezado_ayuda"><img alt="Logo del Ministerio de Relaciones Exteriores, Comercio Internacional y Culto. República Argentina" src="/images/ministerio-relaciones-exteriores-y-culto-logo.png"></div>

            <div role="main" id="contenido_principal">
                <?php require 'ayuda-texto-inicial.php';?>
            </div>
        </div>  

        <footer class="clearfix">
            <div class="footer-container">
                <div class="footer-left">
                    <p>Ministerio de Relaciones Exteriores, Comercio Internacional y Culto de la República Argentina.<br/>
                    Esmeralda 1212, C.A.B.A. C1007ABR - República Argentina<br/>
                    Tel. + 54 (11) 4819-7000<br/>
                    <a href="mailto:info@cancilleria.gob.ar?subject=Contacto desde el repositorio de GIT de la Barra de Accesibilidad">info@cancilleria.gob.ar</a><br/>
                    <a href="http://www.cancilleria.gob.ar/" target="_blank">www.cancilleria.gob.ar</a><br/>
                    </p>
                </div>
                <div class="footer-right"><a href="http://www.cancilleria.gob.ar" target="_blank"><img alt="Ministerio de Relaciones Exteriores, Comercio Internacional y Culto. República Argentina. Dirige al sitio web oficial. Abre en una nueva pestaña." src="/images/ministerio-relaciones-exteriores-y-culto-logo.png" width="275"></a></div>
            </div>
        </footer>


    </div>

</body>
</html>
<script src="jquery.min.js"></script>