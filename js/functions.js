jQuery(document).ready(function($) {

	//slider
	$(".slideshow").owlCarousel({
    	autoPlay : 2000,
    	stopOnHover : true,
    	navigation: false,
    	paginationSpeed : 1000,
    	goToFirstSpeed : 2000,
    	singleItem : true,
    	autoHeight : true,
    	transitionStyle:"fade"
	});
});