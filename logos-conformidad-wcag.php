<!-- Accesibilidad. Logos de conformidad WCAG 2.0 AA a utilizar en el pie de página de una web Accesible-->
<!-- Notas: 
	CSS correspondiente: barra-de-accesibilidad.css 
  
  	Se debe también habilitar una sola de las siguientes clases desde el css, según si el sitio es sólo castellano, o drupal con más idiomas además de castellano.
  	class="solo-castellano"
  	class="multilingue"
  -->
  
  <div class="container-conformidad solo-castellano">

  	<div class="logos-conformidad">
  		<a href="http://www.w3.org/WAI/WCAG2AA-Conformance" target="_blank" title="Explicación de las WCAG 2.0, nivel de conformidad AA. En Inglés. Abre en una nueva pestaña.">
	  		<img height="32" width="88" src="http://www.w3.org/WAI/wcag2AA-blue" alt="Nivel de conformidad AA, W3C WAI Pautas de Accesibilidad para el Contenido Web 2.0.">
  		</a>
  	</div>

	<div class="texto-conformidad">
	  	Este sitio está diseñado de acuerdo a las Pautas de Accesibilidad para el Contenido Web 2.0 dispuestas por el W3C, en conformidad al nivel WAI-AA.
	</div>

</div>

<div class="container-conformidad multilingue">
	
	<div class="logos-conformidad">
		<a href="http://www.w3.org/WAI/WCAG2AA-Conformance" target="_blank" title="<?php echo t("Explanation of WCAG 2.0 Level Double-A Conformance"); ?>">
			<img height="32" width="88" src="http://www.w3.org/WAI/wcag2AA-blue" alt="<?php echo t("Level Double-A conformance, W3C WAI Web Content Accessibility Guidelines 2.0"); ?>">
		</a>
	</div>

	<div class="texto-conformidad">
		<?php echo t("This site is designed according to the W3C Web Content Accessibility Guidelines 2.0 with Level Double-A conformance."); ?>
	</div>

</div>
<!-- Fin logos de conformidad -->