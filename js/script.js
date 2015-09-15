$(document).ready(function() {

	$('.carouselFooter').owlCarousel({
		items: 4,
		margin: 20,
		autoplay: true,
		autoplayTimeout: 3000,
		loop: true
	});

	$('#quote-carousel').carousel({
    pause: true,
    interval: 4000,
  });


});