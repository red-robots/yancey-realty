/**
 *	Custom jQuery Scripts
 *
 *	Developed by: Lisa DeBona
 */
jQuery(document).ready(function ($) {


		$(document).on('click','ul#primary-menu a[href="#search"]', function(e){
			e.preventDefault();
			$(this).toggleClass('show');
			$('#SEARCH-FORM').toggleClass('show');
			$('#SEARCH-FORM input.search-field').focus();
		});

});
