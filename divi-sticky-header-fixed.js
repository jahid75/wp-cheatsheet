jQuery(document).ready(function($) {
	jQuery(window).scroll(function(event) {
		var scroll = jQuery(window).scrollTop();
    // you can adjust 200
		if(scroll >= 200){ 
			jQuery('#top-header').addClass('et-fixed-header');
			jQuery('#main-header').addClass('et-fixed-header');
		} else {
			jQuery('#top-header').removeClass('et-fixed-header');
			jQuery('#main-header').removeClass('et-fixed-header');
		}
	});
});
