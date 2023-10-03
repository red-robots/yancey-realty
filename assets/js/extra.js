/**
 *	Custom jQuery Scripts
 *
 *	Developed by: Lisa DeBona
 */
jQuery(document).ready(function ($) {

    $(document).on('click','#contactNums', function(e){
      e.preventDefault();
      $(this).toggleClass('show-numbers');
      $('.phonePopUp').toggleClass('show-numbers');
      $('.phonePopUp').slideToggle();
    });

		$(document).on('click','ul#primary-menu a[href="#search"]', function(e){
			e.preventDefault();
			$(this).toggleClass('show');
			$(this).parent().toggleClass('show');
			$('#SEARCH-FORM').toggleClass('show');
			$('#SEARCH-FORM input.search-field').focus();
		});


    adjustGalleryBlock();
    $(window).on('resize orientationchange', function(){
      adjustGalleryBlock();
    });
    function adjustGalleryBlock() {
      if( $('.gallery-item').length ) {
        $('.gallery-item').each(function(){
          var galleryHeight = $(this).find('.inside').height();
          var imageHeight = $(this).find('figure').height();
          var contentBottom = galleryHeight - imageHeight;
          $(this).find('.gallery-info').css('height',contentBottom+'px');
        });
      }
    }

});
