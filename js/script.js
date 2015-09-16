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


  	function initMap() {
  	var myLatLng = {lat: 48.473369, lng: 1.0117314999999962};

	  	// Create a map object and specify the DOM element for display.
	  	var map = new google.maps.Map(document.getElementById('map'), {
	    center: myLatLng,
	    scrollwheel: false,
	    zoom: 16
	  	});

		// Create a marker and set its position.
		var marker = new google.maps.Marker({
	    map: map,
	    position: myLatLng,
	    title: 'KM120.CYCLE'
	  	});

	}


});