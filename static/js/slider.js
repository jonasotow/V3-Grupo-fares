// SLIDERS SIMPLE-FADE
// uso: basicSlider(claseSlider, intervalo);
// intervalo en milisegundos: 1000 = 1 segundo.

function basicSlider(slide, interval) {
	$('.' + slide + ' li:gt(0)').hide();
	setInterval(function(){
		$('.' + slide + ' li:first').fadeOut(000)
				.next('.' + slide + ' li').fadeIn(1000)
				.end().appendTo('.' + slide); }, 
	  interval);
	$(window).resize(function() {
	    var alto = $('.' + slide + ' img:first').height();
	    $('.' + slide).css("height", alto);
	});
} // basicSlider functio
basicSlider('slider', 6000);