<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<html lang="es">
	<title>Instructivo de opciones de accesibilidad de MREC</title> 
	<link rel="stylesheet" title="normal" type="text/css" href="/css/barra-de-accesibilidad.css">
	<script src="http://<?php echo $_SERVER['SERVER_NAME'];?>/js/apps-accesibilidad.js" language="JavaScript" type="text/javascript"></script>
</head>
<body class="barra-de-accesibilidad-informacion">
	<p class="cerrar-esta-ventana"><a href="#" onclick="cerrar_ventana_ayuda()"><img src="/images/square-remove-button.png" class="img-cerrar-ventana" alt="Cerrar esta ventana.">Cerrar esta ventana</a></p>

	<h1>Lector de Pantalla NVDA</h1>
	<p>Ofrecemos un recorrido por las principales acciones accesibles a través de "atajos de teclado" del Lector de Pantalla "NVDA" (atualizado en Julio de 2016).
	Puede visitar la web del NVDA (<a href="http://www.nvaccess.org/" target="_blank">NVDA Web >></a>) para obtener una versión actualizada del software y de la documentación.</p>
	<p>La web de NVDA está sólo en idioma Inglés. Hay múltiples sitios que ofrecen traducciones de la documentación en idioma Español.</p>
	<h2>Cambio de la voz del NVDA</h2>
	<p>	Recomendamos luego de la instalación del NVDA, el cambio de la "voz" que trae por defecto, por una voz más cálida y clara.
	Le ofrecemos aquí un instructivo elaborado en base a una "voz" de Microsoft disponible en forma gratuita desde su propia web:</p>
	<p><a href="/pdf/manual_nvda_instalacion_voz_adicional.pdf" target="_blank">Instrucciones para instalar la nueva voz. (archivo PDF)</a></p>
	<h1>Lector de Pantalla NVDA</h1>

	<h2>Teclas rápidas de órdenes Básicas</h2>

	<p>A continuación presentamos las combinaciones de teclas que facilitan el uso del lector de pantalla NVDA por parte de un usuario ciego o con disminución visual grave. </p>

	<h3>Combinaciones de teclado</h3>
	<p><strong>Detener voz:</strong> "Control" Detiene la voz instantáneamente</p>
	<p><strong>Pausar Voz:</strong> "Shift" Pausa la voz instantáneamente, pulsándola nuevamente continuará hablando donde se detuvo (si el pausado se soporta por el sintetizador actual)</p>
	<p><strong>Menú NVDA:</strong> "NVDA" + "n" Despliega el menú NVDA para permitirte acceder a preferencias, herramientas y ayuda etc.</p>
	<p><strong>Conmutar Modo Ayuda de entrada:</strong> "NVDA" + "1" Pulsando cualquier tecla en este modo se anunciará la tecla, y la descripción de cualquier orden de NVDA asociada con ella</p>
	<p><strong>Conmutar Modo de Voz:</strong> "NVDA" + "s" Conmuta el modo voz entre verbalizar, pitidos y desactivado.</p>
	<p><strong>Salir de NVDA:</strong> "NVDA" + "q" Sale de NVDA</p>
	<p><strong>Dejar pasar siguiente tecla:</strong> "NVDA" + "f2" Dice a NVDA que deje pasar la siguiente tecla pulsada directamente a la aplicación activa, si está normalmente tratada como una tecla de órdenes de NVDA</p>
	<p><strong>Activar y desactivar modo de aplicación silencioso:</strong> "NVDA" + "Shift" + "s" El modo silencioso desactiva todas las órdenes de NVDA y la salida de voz/braille para la aplicación actual. Esto es más útil en aplicaciones que proporcionan su propia voz o características de lectura de pantalla. Pulsa esta orden nuevamente para desactivar el modo silencioso.</p>

	<h3>Anunciando Información del Sistema</h3>

	<p><strong>Anunciar fecha/hora:</strong> "NVDA" + "f12" Pulsándola una vez anuncia la hora actual, pulsándola dos veces anuncia la fecha.</p>
	<p><strong>Anunciar estado de la batería:</strong> "NVDA" + "Shift" + "b" Anuncia el estado de la batería, es decir si la electricidad está utilizándose o el porcentaje actual de la carga.</p>
	<p><strong>Anunciar el texto en el portapapeles:</strong> "NVDA" + "c" Anuncia el Texto en el portapapeles si hay alguno.</p>

	<h2>Navegando con NVDA</h2>

	<h3>Navegando con el Foco del Sistema</h3>

	<p><strong>Anunciar foco actual:</strong> "NVDA" + "tab" Anuncia el objeto actual o control que tenga el foco del sistema. Pulsando dos veces deletreará la información</p>
	<p><strong>Anunciar título:</strong> "NVDA" + "t" Anuncia el título de la ventana activa actualmente. Pulsando dos veces deletreará la información. Pulsándolo tres veces la copiará al portapapeles</p>
	<p><strong>Leer la ventana activa:</strong> "NVDA" + "b" Lee todos los controles en la ventana actualmente activa (útil para diálogos)</p>
	<p><strong>Anunciar Barra de Estado:</strong> "NVDA" + "fin" Anuncia la barra de estado si NVDA encuentra una. También mueve el navegador de objetos a esta localización</p>


	<h3>Navegando con el Cursor del Sistema</h3>

	<p><strong>Leer todo:</strong> "NVDA" + "Flecha Abajo" Comienza la lectura desde la posición actual del cursor del sistema, moviéndolo según se desplaza</p>
	<p><strong>Leer línea actual:</strong> "NVDA" + "Flecha Arriba" Lee la línea donde esté situado actualmente el cursor del sistema. Pulsando dos veces deletrea la línea.</p>
	<p><strong>Leer la selección de texto actual:</strong> "NVDA" + "Shift" + "Flecha Arriba" Lee cualquier texto seleccionado actualmente</p>

	Cuando estés en una tabla, las siguientes teclas de órdenes también están disponibles:

	<p><strong>Moverse a la columna anterior:</strong> "Control" + "Alt" + "Flecha Izquierda" Mueve el cursor del sistema a la columna anterior (permaneciendo en la misma fila)</p>
	<p><strong>Moverse a la columna siguiente:</strong> "Control" + "Alt" + "Flecha Derecha" Mueve el cursor del sistema a la columna siguiente (permaneciendo en la misma fila)</p>
	<p><strong>Moverse a la fila anterior:</strong> "Control" + "Alt" + "Flecha Arriba" Mueve el cursor del sistema a la fila anterior (permaneciendo en la misma columna)</p>
	<p><strong>Moverse a la fila siguiente:</strong> "Control" + "Alt" + "Flecha Abajo" Mueve el cursor del sistema a la siguiente fila (permaneciendo en la misma columna)</p>

	<h2>Navegación de Objetos</h2>

	<p><strong>Anunciar objeto actual:</strong> "NVDA" + "5" (Teclado numérico) NVDA+control+i (Teclado portátil) -Anuncia el navegador de objetos actual. Pulsando dos veces deletrea la información y pulsando 3 veces copia este nombre y valor del objeto al portapapeles.</p>
	<p><strong>Navegar a objeto contenedor:</strong> "NVDA" + "8" (teclado numérico) NVDA+shift+i (Teclado portátil) -Navega al contenedor del navegador de objetos actual</p>
	<p><strong>Navegar al objeto anterior:</strong> "NVDA" + "4" (teclado numérico) NVDA+control+j (Teclado portátil) -Navega al objeto directamente antes del actual navegador de objetos</p>
	<p><strong>Navegar al siguiente objeto:</strong> "NVDA" + "6" (teclado numérico) control+NVDA+l (Teclado portátil) -Navega al objeto directamente después del actual navegador de objetos</p>
	<p><strong>Navegar al primer objeto contenido:</strong> "NVDA" + "2" (teclado numérico) NVDA+shift+coma (Teclado portátil) -Navega al primer objeto contenido por el actual navegador de objetos</p>
	<p><strong>Navegar al objeto del foco:</strong> "NVDA" + "Menos" (teclado numérico) NVDA+Retroceso(Teclado portátil) -Navega al objeto que tiene actualmente el foco del sistema, y también coloca el cursor de revisión en la posición del cursor del Sistema, si se muestra</p>
	<p><strong>Activar actual navegador de objetos:</strong> "NVDA" + "Intro" (teclado numérico) NVDA+Intro (Teclado portátil) -Activa el actual navegador de objetos (similar a hacer clic con el ratón o pulsar espacio cuando tiene el foco del sistema)</p>
	<p><strong>Mover foco del Sistema a actual navegador de objetos:</strong> "NVDA" + "Shift" + "Menos" (teclado numérico) "NVDA" + "Shift" + "Retroceso" (teclado portátil) Pulsado una vez Mueve el foco del Sistema al navegador de objetos actual, pulsado dos veces mueve el cursor del sistema a la posición del cursor de revisión</p>
	<p><strong>Anunciar dimensiones del navegador de objetos:</strong> "NVDA" + "Suprimir" (teclado numérico) "NVDA" + "Suprimir" (teclado portátil) Anuncia las dimensiones del actual navegador de objetos en la pantalla en porcentajes (incluyendo distancia desde la izquierda y arriba de la pantalla, y su anchura y altura)</p>


	<h2>Revisando Texto</h2>

	<p><strong>Mover a la línea superior en revisión:</strong> "Shift" + "7" (teclado numérico) "NVDA" + "7" (teclado portátil) Mueve el cursor de revisión a la línea superior del texto</p>
	<p><strong>Mover a la línea anterior en revisión:</strong> "7" (teclado numérico) "NVDA" + "u" (teclado portátil) Mueve el cursor de revisión a la línea anterior de texto</p>
	<p><strong>Anunciar línea actual en revisión:</strong> "8" (teclado numérico) "NVDA" + "i" (teclado portátil) Anuncia la línea actual de texto donde esté colocado el cursor de revisión. Pulsando dos veces deletrea la línea, Pulsando tres veces deletrea la línea utilizando descripciones de carácteres.</p>
	<p><strong>Mover a la línea siguiente en revisión:</strong> "9" (teclado numérico) "NVDA" + "o" (teclado portátil) -Mueve el cursor de revisión a la línea siguiente de texto</p>
	<p><strong>Mover a la línea inferior en revisión:</strong> "Shift" + "9" (teclado numérico) "NVDA" + "9" (teclado portátil) Mueve el cursor de revisión a la línea inferior de texto</p>
	<p><strong>Mover a la palabra anterior en revisión:</strong> "4" (teclado numérico) "NVDA" + "j" (teclado portátil) Mueve el cursor de revisión a la palabra anterior en el texto</p>
	<p><strong>Anunciar palabra actual en revisión:</strong> "5" (teclado numérico) "NVDA" + "k" (teclado portátil) Anuncia la palabra actual en el texto donde esté posicionado el cursor de revisión. Pulsando dos veces deletrea la palabra, pulsando tres veces deletrea la palabra utilizando descripciones de carácteres.</p>
	<p><strong>Mover a la siguiente palabra en revisión:</strong> "6" (teclado numérico) "NVDA" + "l" (teclado portátil) Mueve el cursor de revisión a la siguiente palabra en el texto</p>
	<p><strong>Mover al inicio de la línea en revisión:</strong> "Shift" + "1" (teclado numérico) "NVDA" + "Shift" + "u" (teclado portátil) Mueve el cursor de revisión al comienzo de la línea actual en el texto</p>
	<p><strong>Mover al carácter anterior en revisión:</strong> "1" (teclado numérico) "NVDA" + "m" (teclado portátil) Mueve el cursor de revisión al carácter anterior en la línea actual en el texto</p>
	<p><strong>Anunciar carácter actual en revisión:</strong> "2" (teclado numérico) "NVDA" + "coma" (teclado portátil) Anuncia el carácter actual en la línea de texto donde esté posicionado el cursor de revisión. Pulsando dos veces anuncia una descripción o ejemplo de ese carácter. Pulsando tres veces anuncia el valor numérico del carácter en decimal y hexadecimal.</p>
	<p><strong>Mover al siguiente carácter en revisión:</strong> "3" (teclado numérico) "NVDA" + "punto" (teclado portátil) -Mueve el cursor de revisión al siguiente carácter en la línea actual de texto</p>
	<p><strong>Mover al final de la línea en revisión:</strong> "Shift" + "3" (teclado numérico) "NVDA" + "Shift" + "o" (teclado portátil) Mueve el cursor de revisión al final de la línea actual de texto</p>
	<p><strong>Leer todo con revisión más teclado numérico:</strong> "NVDA" + "Shift" + "Flecha abajo" Lee desde la posición actual del cursor de revisión, moviéndolo según baja</p>
	<p><strong>Copiar desde cursor de revisión:</strong> "NVDA" + "f9" Comienza el copiado de texto desde la posición actual del cursor de revisión. La copia actual no se lleva a cabo hasta que digas a NVDA dónde copiar</p>
	<p><strong>Copiar a cursor de revisión:</strong> "NVDA" + "f10" Copia desde la posición del cursor de revisión actualmente fijada con Copiar desde cursor de revisión, a la actual posición del cursor de revisión. Después de pulsar esta tecla, el texto se copiará al portapapeles de Windows</p>
	<p><strong>Anunciar formato del texto:</strong> "NVDA" + "f" Informa del formato del texto donde esté situado actualmente el cursor de revisión</p>


	<h2>Revisión Plana</h2>

	<p><strong>Cambiar a revisión plana:</strong> "NVDA" + "7" (teclado numérico) "NVDA" + "AvPág" (teclado portátil) Se mueve a revisión plana, colocándote en la posición del navegador de objetos actual, permitiéndote revisar la pantalla (o documento si estás actualmente dentro de uno), con las órdenes de revisión de texto.</p>
	<p><strong>Mover a objeto desde revisión plana:</strong> "NVDA" + "1" (teclado numérico) "NVDA" + "rePág" (teclado portátil) -Navega al objeto representado por el texto en la posición actual del cursor de revisión en revisión plana</p>


	<h2>Navegando con el Ratón</h2>

	<p><strong>Clic botón izquierdo del ratón:</strong> "Dividir" (teclado numérico) "NVDA" + "Flecha izquierda" (teclado portátil) Hace clic en el botón izquierdo del ratón una vez. El común doble clic puede llevarse a cabo pulsando esta tecla dos veces en rápida sucesión</p>
	<p><strong>Bloquear botón izquierdo del ratón:</strong> "Shift" + "Dividir" (teclado numérico) "NVDA" + "Shift" + "Flecha izquierda" (teclado portátil) Mantiene pulsado el botón izquierdo del ratón. Púlsalo de nuevo para liberarlo. Para arrastrar el ratón, pulsa esta tecla para bloquear el botón izquierdo y entonces mueve el ratón físicamente o utiliza una de las otras órdenes de enrutamiento del ratón</p>
	<p><strong>Clic botón derecho del ratón:</strong> "Multiplicar" (teclado numérico) "NVDA" + "Flecha derecha" (teclado portátil) Hace Clic en el botón derecho del ratón una vez.</p>
	<p><strong>Bloquear botón derecho del ratón:</strong> "Shift" + "Multiplicar" (teclado numérico) "NVDA" + "Shift" + "Flecha derecha" (teclado portátil) Mantiene pulsado el botón derecho del ratón. Pulsa otra vez para liberarlo. Para arrastrar el ratón, pulsa esta tecla para bloquear el botón derecho y entonces mueve el ratón físicamente o utiliza una de las otras órdenes de enrutamiento del ratón</p>
	<p><strong>Mover ratón a navegador de objetos actual:</strong> "NVDA" + "Dividir" (teclado numérico) "NVDA" + "Shift" + "f9" (teclado portátil) Mueve el ratón a la posición del navegador de objetos actual y cursor de revisión.</p>
	<p><strong>Navegar al objeto bajo el ratón:</strong></p> "NVDA" + "Multiplicar" (teclado numérico) "NVDA" + "Shift" + "f10" (teclado portátil) -Pone el navegador de objetos en el objeto localizado en la posición del ratón</p>

	<h2>Modo Navegación</h2>

	<p><strong>Conmutar modos navegación/foco:</strong> "NVDA" + "Espacio" Conmuta entre modo foco y modo navegación</p>
	<p><strong>Salir de modo foco:</strong> "Escape" Cambia a modo navegación si el modo foco anteriormente estaba cambiado automáticamente</p>
	<p><strong>Refrescar documento en modo navegación:</strong> "NVDA" + "F5" Recarga el contenido del documento actual (útil si ciertos contenidos parecen estar desaparecidos del documento)</p>
	<p><strong>Buscar:</strong> "NVDA" + "Control" + "F" Despliega un diálogo en el que puedes teclear algún texto a encontrar en el documento actual</p>
	<p><strong>Buscar siguiente:</strong> "NVDA" + "F3" Encuentra la siguiente ocurrencia del texto en el documento que buscaste anteriormente</p>
	<p><strong>Buscar anterior:</strong> "NVDA" + "Shift" + "F3" Encuentra la ocurrencia anterior del texto en el documento buscado anteriormente</p>

	<h3>Navegación con una Sola Letra</h3>
	<p>Las siguientes teclas por sí mismas saltan al siguiente campo, con la tecla shift saltan al anterior campo.</p>
	<ul>
		<li>"h": Encabezado</li>
		<li>"l": lista</li>
		<li>"i": elemento de lista</li>
		<li>"t": tabla</li>
		<li>"k": enlace</li>
		<li>"n": texto que no es enlace</li>
		<li>"f": campo de formulario</li>
		<li>"u": enlace no visitado</li>
		<li>"v": enlace visitado</li>
		<li>"e": campo de edición</li>
		<li>"b": botón</li>
		<li>"x": casilla de verificación</li>
		<li>"c": cuadro combinado</li>
		<li>"r": botón de opción</li>
		<li>"q": cita</li>
		<li>"s": separador</li>
		<li>"m": marco</li>
		<li>"g": gráfico</li>
		<li>"d": zona ARIA</li>
		<li>"o": objeto integrado</li>
		<li>"1" a "6": encabezados de 1 a 6 respectivamente</li>
	</ul>

	<p>Para moverte al comienzo o final de elementos contenedores tales como listas y tablas:</p>

	<p><strong>Mover al comienzo de un contenedor:</strong> "Shift" + "," Se mueve al comienzo del contenedor (lista, tabla etc) donde esté situado el cursor</p>
	<p><strong>Mover al final del contenedor:</strong> "," Se mueve al final del contenedor (lista, tabla etc) donde esté situado el cursor</p>

	<h2>La Lista de Elementos</h2>

	<p><strong>Lista de elementos del Modo Navegación:</strong> "NVDA" + "f7" Despliega la lista de elementos que contiene enlaces, encabezados y zonas ARIA del documento actual</p>

	<h2>Objetos Integrados</h2> 

	<p><strong>Mover al contenido del modo de Navegación:</strong> "NVDA" + "Control" + "Espacio" Mueve el foco fuera del actual objeto integrado y lo pone dentro del documento que lo contiene</p>

	<h1>Órdenes de NVDA Específicas para Aplicación</h1>

	<h2>Preferencias</h2>

	<p>Opciones de Voz (NVDA+control+v)</p>
	<p><strong>Nivel de Puntuación/símbolos:</strong> "NVDA" + "p" (teclado de sobremesa) "NVDA" + "p" (teclado portátil) Esto te permite elegir la cantidad de puntuación y otros símbolos que deberían verbalizarse como palabras.</p>

	<h2>Grupo de Opciones de Sintetizador</h2>
	<p><strong>Mover a la siguiente opción de sintetizador:</strong> "NVDA" + "Control" + "Flecha derecha" (teclado de sobremesa) "NVDA" + "Control" + "Flecha derecha" (teclado portátil) -Se mueve a la siguiente opción de voz disponible después de la actual, pasando por la primera opción de nuevo después de la última</p>
	<p><strong>Mover a la opción de sintetizador anterior:</strong> "NVDA" + "Control" + "Flecha izquierda" (teclado de sobremesa) "NVDA" + "Control" + "Flecha izquierda" (teclado portátil) Se mueve a la opción de voz anterior disponible después de la actual, pasando por la primera opción de nuevo después de la última</p>
	<p><strong>Incrementar actual opción de sintetizador:</strong> "NVDA" + "Control" + "Flecha arriba" (teclado de sobremesa) "NVDA" + "Control" + "Flecha arriba" (teclado portátil) Incrementa la opción de voz actual sobre la que estés. Ej.: incrementa la velocidad, elige la siguiente voz, incrementa el volumen</p>
	<p><strong>Decrementar actual opción de sintetizador:</strong> "NVDA" + "Control" + "Flecha abajo" (teclado de sobremesa) "NVDA" + "Control" + "Flecha abajo" (teclado portátil) Decrementa la opción de voz actual sobre la que estés. Ej.: decrementa la velocidad, elige la voz anterior, decrementa el volumen</p>

	<h2>Opciones de Braille</h2>
	<p><strong>El Braille sigue a:</strong> "NVDA" + "Control" + "t" (teclado de sobremesa) "NVDA" + "control" + "t" (teclado portátil) Esta opción te permite elegir si la línea braille seguirá al foco del sistema, o si seguirá al navegador de objetos / cursor de revisión.</p>

	<h2>Opciones de Teclado (NVDA+control+k)</h2>
	<p><strong>Verbalizar carácteres al escribir:</strong> "NVDA" + "2" (teclado de sobremesa) "NVDA" + "2" (teclado portátil) Cuando está marcada significa que NVDA anunciará todos los carácteres según los escribas en el teclado.</p>
	<p><strong>Verbalizar palabras al escribir:</strong> "NVDA" + "3" (teclado de sobremesa) "NVDA" + "3" (teclado portátil) Cuando está marcada significa que NVDA anunciará todas las palabras al escribirlas en el teclado.</p>
	<p><strong>Verbalizar teclas de órdenes:</strong> "NVDA" + "4" (teclado de sobremesa) "NVDA" + "4" (teclado portátil) Cuando está marcada significa que NVDA anunciará todas las teclas que no sean carácteres al escribirlas en el teclado. Esto incluye combinaciones de teclas tales como control más cualquier otra letra.</p>

	<h2>Opciones del Ratón (NVDA+control+m)</h2>
	<p><strong>Anunciar texto bajo el Ratón:</strong> "NVDA" + "m" (teclado de sobremesa) "NVDA" + "Shift" + "m" (teclado portátil) Cuando está marcada significa que NVDA anunciará el texto actualmente bajo el puntero del ratón, según lo muevas por la pantalla. Esto te permite encontrar cosas en la pantalla, moviendo físicamente el ratón, en lugar de tratar de encontrarlas a través del navegador de objetos.</p>

	<h2>Opciones de Cursor de Revisión</h2>
	<p><strong>Seguir al Foco Del sistema:</strong> "NVDA" + "7" (teclado de sobremesa) "NVDA" + "Control" + "7" (teclado portátil) Cuando se activa, el cursor de revisión siempre se colocará en el mismo objeto tan pronto como el actual foco del sistema cambie.</p>
	<p><strong>Seguir al Cursor del Sistema:</strong> "NVDA" + "6" (teclado de sobremesa) "NVDA" + "6" (teclado portátil) Cuando se activa, el cursor de revisión se moverá automáticamente a la posición del cursor del Sistema cada vez que se mueva.</p>

	<h2>Opciones de Presentación de Objetos ("NVDA" + "Control" + "o")</h2>
	<p><strong>Salida en las Barras de Progreso:</strong> "NVDA" + "u" (teclado de sobremesa) "NVDA" + "control" + "f2" (teclado portátil) Esta opción se te presenta con un cuadro combinado que controla cómo NVDA anuncia las actualizaciones de las barras de progreso.</p>
	<p><strong>Anunciar cambios de contenido dinámico:</strong> "NVDA" + "5" (teclado de sobremesa) "NVDA" + "5" (teclado portátil) Conmuta el anunciado de contenido nuevo en objetos particulares tales como terminales y el control de histórico en programas de chat.</p>

	<h2>Opciones de Modo Navegación ("NVDA" + "Control" + "b")</h2>
	<p><strong>Utilizar diseño de pantalla:</strong> NVDA+v (teclado de sobremesa) "NVDA" + "v" (teclado portátil) Esta opción te permite especificar si el contenido en el modo Navegación debería colocar cosas tales como enlaces y otros campos en su propia línea, o si debería conservarlos en el flujo de texto según sea mostrado visualmente. Si la opción está activada, entonces las cosas permanecerán según sean mostradas visualmente, pero si está desactivada, entonces los campos serán colocados en su propia línea.</p>

	<h2>Guardando y Recargando la configuración</h2>
	<p><strong>Guardar configuración:</strong> "NVDA" + "Control" + "c" (teclado de sobremesa) "NVDA" + "Control" + "c" (teclado portátil) Guarda tu configuración actual tal que no se pierda cuando salgas de NVDA</p>
	<p><strong>Regresar a configuración guardada:</strong> "NVDA" + "Control" + "r" (teclado de sobremesa) "NVDA" + "Control" + "r" (teclado portátil) Restaura a NVDA a las opciones que existían en la última configuración guardada de NVDA</p>
	
	<p>&nbsp</p>

	<p class="cerrar-esta-ventana"><a href="#" onclick="cerrar_ventana_ayuda()"><img src="/images/square-remove-button.png" class="img-cerrar-ventana" alt="Cerrar esta ventana.">Cerrar esta ventana</a></p>	

<script src="http://<?php echo $_SERVER['SERVER_NAME'];?>/js/apps-accesibilidad.js" language="JavaScript" type="text/javascript"></script>

</body>
</html>