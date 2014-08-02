var $menu  = $('#menu');

function mostrarOcultarMenu(MenuResponsive){
	MenuResponsive.preventDefault();
	MenuResponsive.stopPropagation();
	$menu.slideToggle();
}

$('#boton a').click( mostrarOcultarMenu );
