//change-style.js

  // *** TO BE CUSTOMISED ***

  var style_cookie_name = "css-estilo-de-color" ;
  var style_cookie_cursor = "tamanio-cursor"
  var style_cookie_duration = 30 ;

  // *** END OF CUSTOMISABLE SECTION ***
  // You do not need to customise anything below this line

  function switch_style ( css_title )
  {
  // You may use this script on your site free of charge provided
  // you do not remove this notice or the URL below. Script from
  // http://www.thesitewizard.com/javascripts/change-style-sheets.shtml
  var i, link_tag ;
  for (i = 0, link_tag = document.getElementsByTagName("link") ;
    i < link_tag.length ; i++ ) {
    if ((link_tag[i].rel.indexOf( "stylesheet" ) != -1) &&
      link_tag[i].title) {
      link_tag[i].disabled = true ;
    if (link_tag[i].title == css_title) {
      link_tag[i].disabled = false ;
    }
  }

  set_cookie( style_cookie_name, css_title,
    style_cookie_duration );
}
}

function set_style_from_cookie()
{
  var css_title = get_cookie( style_cookie_name );
  if (css_title.length) {
    switch_style( css_title );
  }

  var css_cursor = get_cookie( style_cookie_cursor );
  if (css_cursor.length) {
    set_cursor_from_cookie( css_cursor );
  }
}

function set_cookie ( cookie_name, cookie_value,
  lifespan_in_days, valid_domain )
{
      // http://www.thesitewizard.com/javascripts/cookies.shtml
      var domain_string = valid_domain ?
      ("; domain=" + valid_domain) : '' ;
      document.cookie = cookie_name +
      "=" + encodeURIComponent( cookie_value ) +
      "; max-age=" + 60 * 60 *
      24 * lifespan_in_days +
      "; path=/" + domain_string ;
    }

    function get_cookie ( cookie_name )
    {

      // http://www.thesitewizard.com/javascripts/cookies.shtml
      var cookie_string = document.cookie ;
      if (cookie_string.length !== 0) {
        return (document.cookie.match('(^|; )'+cookie_name+'=([^;]*)')||0)[2];
      }

      return '' ;
    }

//fin change-style.js

//-----------------------------------------------------------------------

//Zoom

var r = document.getElementById('tipografia-slider');

var getValStr = function(el, p) {
 val=el.value;
 return val;
};

  //IE no tiene addEventListener, por eso este if

  if (navigator.userAgent.indexOf('MSIE') !== -1 || navigator.appVersion.indexOf('Trident/') > 0) {
    //Es Internet Explorer

  } else {
    //NO es Internet Explorer
    r.addEventListener('input', function() {aumentarZoom(getValStr(this));} , false);
  }


  function aumentarZoom($value) { 
    //halfDiferencia contiene la mitad de la resta entre el ancho de la ventana (resolución de monitor más o menos) y 
    //el ancho del contenedor. Esto es para que transform-origin no se despegue tanto desde la izquierda.
    var halfDiferencia = parseInt((jQuery(window).width() - jsAncho) / 2, 10);

    document.getElementById('container-accesibilidad-zoom').style.cssText = 'transform: scale('+ $value +'); transform-origin: '+halfDiferencia+'px 0 0;';

  }

  jQuery('#minima-magnificacion').click(function() { 
    aumentarZoom(1); 
    document.getElementById("tipografia-slider").value = "0";
  });

  jQuery('#maxima-magnificacion').click(function() { 
    aumentarZoom(3); 
    document.getElementById("tipografia-slider").value = "100";
  });


//fin Zoom

//-----------------------------------------------------------------------

//Tamaño del puntero/cursor del mouse grande

jQuery('#puntero-del-mouse-chico').click(reset_cursor);

jQuery('#puntero-del-mouse-grande').click(grow_cursor);

function set_cursor_from_cookie (css_cursor){
  if(css_cursor == "big"){
    grow_cursor();
  } else {
    reset_cursor(); 
  }

}

function grow_cursor()
{

  jQuery("*").css("cursor", "url("+servidor+"/images/cursores/cursor-mouse-grande.png), url("+servidor+"/images/cursores/cursor-mouse-grande.cur), auto");
  jQuery("a").css("cursor", "url("+servidor+"/images/cursores/pointer-big-hand.png) 15 0, url("+servidor+"/images/cursores/pointer-big-hand.cur) 15 0, auto");
  jQuery("a img").css("cursor", "url("+servidor+"/images/cursores/pointer-big-hand.png) 15 0, url("+servidor+"/images/cursores/pointer-big-hand.cur) 15 0, auto");

  set_cookie( style_cookie_cursor, "big",
    style_cookie_duration );

  return false;
}

function reset_cursor(){
    jQuery("*").css("cursor", "auto");

  set_cookie( style_cookie_cursor, "small",
    style_cookie_duration );

  return false;
}

//fin tamaño del puntero/cursor del mouse grande

//-----------------------------------------------------------------------

// alterar alto de una div segun alto de la barra de accesibilidad

// Cuando la web se angosta, la barra toma dos o tres renglones de alto. En este caso, "empujamos" toda la web, aumentando el alto de una div
// que se ubica arriba de todo.
var altura_barra; 
var quite_las_lineas = false;

jQuery("#barra-accesibilidad").hover(
    function(){
      check_altura_hover(true);
    },
    function(){
      check_altura_hover(false);
  });

function check_altura_hover(inner){
  if (jQuery(window).width() < 1534 && inner){
    jQuery("#ul-barra-accesibilidad li").css ({"border-left-style":"none"});
    quite_las_lineas=true;
  } else if (jQuery(window).width() < 1534 && !inner && !quite_las_lineas) {
    jQuery("#ul-barra-accesibilidad li").css ({"border-left-style":"solid"});
    quite_las_lineas=false;
  }
}

function ajustar_div_variable() { 
    altura_barra = jQuery("#ul-barra-accesibilidad").outerHeight(); //tomo la altura actual de la barra
    document.getElementById('div-altura-variable').style.cssText = 'height: '+ altura_barra +'px;'; //escribo la altura actual de la barra en el div de altura variable

      //Quito las vertical lines de la barra si tiene más de un renglón.
      if (altura_barra > 54){
        jQuery("#ul-barra-accesibilidad li").css ({"border-left-style":"none"});
        quite_las_lineas=true;
      } else {
        jQuery("#ul-barra-accesibilidad li").css ({"border-left-style":"solid"});
        quite_las_lineas=false;
      }

      console.log("altura barra : " + altura_barra);
    }

//fin alterar alto de una div segun alto de la barra de accesibilidad

//-----------------------------------------------------------------------

//Cerrar ventana

function cerrar_ventana_ayuda() {
  this.close();
}

//fin cerrar ventana

//-----------------------------------------------------------------------

//detect mobile

if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|windows phone/i.test(navigator.userAgent) ) {

    //On mobile YES
    jQuery('.barra-accesibilidad-esconder-items-en-movil').css({"display":"none"})
    jQuery('#div-altura-variable').css({"display":"none"})//en mobile no se muestra la barra
    jQuery('#barra-accesibilidad').addClass("no-hover-on-mobile");

  } else {

    //On mobile NO
    jQuery('.barra-accesibilidad-esconder-items-en-movil').css({"display":"inline-block", "display":"inline \9"})
    jQuery('#barra-accesibilidad').removeClass("no-hover-on-mobile");

  }

//fin detect mobile

//-----------------------------------------------------------------------