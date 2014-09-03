var $menu  = $('#menu');

function mostrarOcultarMenu(MenuResponsive){
	$menu.slideToggle();
}

$('#boton a').click( mostrarOcultarMenu );
