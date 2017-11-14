# Barra de "Herramientas de Accesibilidad"
# Instrucciones y Notas (marzo 2017)

La barra de "Herramientas de Accesibilidad" es una solución y propuesta para dar visibilidad a la accesibilidad de un sitio web, y ofrecer accesos directos a funciones que puedan mejorar la experiencia del visitante.

## IMPORTANTE
**La barra de "Herramientas de Accesibilidad" trabaja en relación intrínseca con el código de la web en la que está implementada.
El sitio web debe ser previamente "accesible" según las WCAG 2.0 - nivel A.**

## ¿QUÉ ES LA ACCESIBILIDAD WEB?

Es la posibilidad de que un Sitio Web pueda ser visitado y utilizado de forma satisfactoria por todas las personas, teniendo en cuenta y brindando facilidades a quienes tienen movilidad y/o comunicación reducida.
Es poder percibir, entender, navegar e interactuar con la web independientemente de las condiciones particulares de cada persona.

## ¿QUIÉN DEFINE LOS PARÁMETROS DE LA ACCESIBILIDAD WEB?

Está construida de acuerdo a la **Disposición Nº 2/2014 ** de la **Oficina Nacional de Tecnologías de la Información** establece los requisitos de accesibilidad para contenidos web basándose en las **Pautas de Accesibilidad para el Contenido Web** (WCAG, Web Content Accessibility Guidelines) en su versión 2.0 publicadas en el año 2008 por uno de los grupos de trabajo de la **“Iniciativa para la Accesibilidad Web”** (WAI, Web Accesibility Initiative) del **Consorcio de la Web** (W3C, World Wide Web Consortium). Además, adopta el estándar internacional ISO/IEC 40500:2012 que aprueba las pautas de accesibilidad web WCAG 2.0.

## ¿QUÉ HERRAMIENTAS DE ACCESIBILIDAD OFRECE ESTE SITIO WEB?

### NAVEGACIÓN

El contenido del sitio se encuentra distribuido en diferentes regiones que permiten estructurar e identificar la información, posibilitando evitar los contextos repetitivos para ir directamente al contenido buscado.
Esta funcionalidad es especialmente útil para las personas que utilizan lectores de pantalla. 
Para lograr este objetivo se implementó la definición de WAI Arias según las directrices de la W3C.

### AUMENTO DE TAMAÑO

Utilizando la herramienta de aumento de tamaño se consigue ampliar hasta en un 300% el tamaño de textos, imágenes y elementos gráficos situados en la pantalla.

### ALTO CONTRASTE

Esta utilidad permite que la paleta de colores del sitio se transforme y ofrezca únicamente combinaciones de alto contraste.

### TAMAÑO DEL PUNTERO

Se puede optar por un tamaño de puntero mayor al habitual para facilitar su visualización en la pantalla.

## ¿CUÁL ES EL ESTÁNDAR DE ACCESIBILIDAD QUE PERSIGUE ESTE SITIO WEB?

De acuerdo a la normativa vigente para el Estado Nacional **(Disposición Nº 2/2014​** de la **Oficina Nacional de Tecnologías de la Información), este sitio web se adecua al nivel A de las Pautas de Accesibilidad para el Contenido Web 2.0 (WCAG 2.0)​** y persigue el objetivo de alcanzar niveles más altos en el corto plazo.

## IMPLEMENTACIÓN Y ACCESIBILIDAD WEB
El proceso de implementación de la barra de "Herramientas de Accesibilidad" se realiza como parte integral con un conjunto de acciones para convertir el sitio web en un sitio web Accesible.

Antes de implementarla, es necesario:

1. realizar un análisis de accesibilidad completo de la web y de su código,

2. corregir y actualizar el código de la web acorde a los estándares WCAG 2.0 nivel A, en cuanto a regiones lógicas y configuración de cada sección.

3. generar y actualizar los archivos de estilos (CSS) para permitir el cambio entre "Color original" y "Alto contraste",

4. actualizar el código de la web con las etiquetas correspondientes para poder:
    * recibir el "Saltar al contenido principal", "Saltar a Navegación" y "Volver arriba"
    * hacer el "zoom global"
    * ser recorrida con ayudas técnicas (Software Lector de Pantalla, etc.)

## INSTRUCCIONES

Primero se deberá incorporar al repositorio el código de la barra de "Herramientas de Accesibilidad"
Luego:

1) en el lugar del código donde necesitamos que se "imprima" la barra.

```HTML
 <div id="div-altura-variable">
    <?php
        $phpAncho = 1140;
        include ("barra-accesibilidad.php");
    ?>
 </div>
 ```

Para que la barra tenga el mismo ancho del sitio web, seteamos el ancho determinado del sitio en $phpAncho.
En este ejemplo, se setea un ancho de 1140px;

El ID *div-altura-variable*, permitirá que se modifique la web si se modificara el alto de la barra.

2) Lo que será ampliado con el Zoom global (el slider de la barra), debe estar identificado
con el siguiente "id":

```HTML
<div id="container-accesibilidad-zoom">
    ...el código en este div será alcanzado por el zoom global...
</div>
 ```

En este ejemplo, este div con el id indicado, debe "envolver" todo el contenido de la web que será ampliado con el zoom global.

## CSS

3) Para efectuar la gestión de Color y ofrecer una alternativa de Alto Contraste se separa de la hoja de estilos principal toda la información de color (la hoja de estilos principal queda sin información de color y sin definiciones de imágenes de fondo).

Con esto quedarán 3 CSS. El original y los dos nuevos que se generan. El original se llama y se mantiene siempre activo, y además de él, se alternará luego entre "color original" y "color de alto contraste" para que aporten la información de color que corresponda.

a. *"styles.css"* (por ejemplo) este es el css original, pero sin información de color.

b. *"overrides-color-original.css"* se construye con toda la información de color y background images quitadas de la hoja de estilos original.

c. *"overrides-alto-contraste.css"* se construye reemplazando los colores originales por colores que representen "alto contraste". Se chequean los contrastes con herramientas de Accesibilidad online, por ejemplo: 

Llamada al CSS de color original:
```HTML
<link rel="stylesheet" title="normal" type="text/css" 
href="overrides-color-original.css">
 ```

Llamada al CSS de alto contraste:
 ```HTML
<link rel="alternate stylesheet" title="alto-contraste" type="text/css"
href="overrides-alto-contraste.css">
 ```
## IDs

4) Estos IDs deben estar en el código para que funcionen los "Saltar a..." de la barra y el "Volver arriba" que se agrega luego del footer:

El anchor link de Navegación se debe ubicar en dónde esté la navegación principal del sitio:

```HTML
<div id="navegacion"></div>
 ```
El anchor link de Contenido principal se debe ubicar donde esté el contenido principal del sitio:

```HTML
<div id="contenido_principal"></div>
 ```
El anchor link para Volver Arriba se debe ubicar en una posición lo más cercana al inicio del sitio:

```HTML
<div id="arriba-top"></div>
 ```

## BODY

4) En el body debe estar este "onload", para que funcione la cookie de elección de la versión de color original o de alto contraste. Y debe estar este "onresize" para que cuando la barra tenga más de un renglón (cuando la ventana es muy angosta por ejemplo), se "empuje" el contenido de la web hacia abajo.

```HTML
<body onload="set_style_from_cookie()" onresize="ajustar_div_variable()">
 ```

## HEAD

5) En el Head debe decir:
```HTML
<meta http-equiv="x-ua-compatible" content="IE=edge">
 ```

## FOOTER
6) En el footer se debe incorporar:
```HTML
<a class="esconder" href="#arriba-top">Volver arriba</a>
 ```

## CONTACTO

Son bienvenidas todas las consultas y sugerencias. Por favor, comuníquese a webmaster@cancilleria.gob.ar

