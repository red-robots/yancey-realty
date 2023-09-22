"use strict";

/**
 *	Custom jQuery Scripts
 *
 *	Developed by: Austin Crane
 *	Designed by: Austin Crane
 */
jQuery(document).ready(function ($) {
  $("label[for='omnibar']").text("Search by Zip");
  $("input[type=text].idx-omnibar-input").val("Search by Zip");
  $("input[type=text].idx-omnibar-input").on('click focusin', function () {
    this.value = '';
  });
  $('label#IDX-qsIdxIDLabel-12569').html('Select an Area');
  /*
  *
  *	Current Page Active
  *
  ------------------------------------*/

  $("[href]").each(function () {
    if (this.href == window.location.href) {
      $(this).addClass("active");
    }
  });
  $('#select-anchor').change(function () {
    var targetPosition = $($(this).val()).offset().top;
    $('html,body').animate({
      scrollTop: targetPosition
    }, 'slow');
  });
  /*
  *
  *	Responsive iFrames
  *
  ------------------------------------*/

  var $all_oembed_videos = $("iframe[src*='youtube']");
  $all_oembed_videos.each(function () {
    $(this).removeAttr('height').removeAttr('width').wrap("<div class='embed-container'></div>");
  });
  /*
  *
  *	Flexslider
  *
  ------------------------------------*/

  $('.flexslider').flexslider({
    animation: "slide"
  }); // end register flexslider

  /*
  *
  *	Colorbox
  *
  ------------------------------------*/

  $('a.gallery').colorbox({
    rel: 'gal',
    width: '80%',
    height: '80%'
  });
  /*
  *
  *	Isotope with Images Loaded
  *
  ------------------------------------*/

  var $container = $('#container').imagesLoaded(function () {
    $container.isotope({
      // options
      itemSelector: '.item',
      masonry: {
        gutter: 15
      }
    });
  });
  /*
  *
  *	Smooth Scroll to Anchor
  *
  ------------------------------------*/

  $('a[href*="#"]').not('[href="#"]').not('[href="#0"]').not('[href="#search"]').click(function (event) {
		if (
      location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname
    ) {

			var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');

			if (target.length) {
        event.preventDefault();
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 1000, function() {
          var $target = $(target);
          $target.focus();
          if ($target.is(":focus")) {
            return false;
          } else {
            $target.attr('tabindex','-1');
            $target.focus();
          };
        });
      }
		}
  });
  /*
  *
  *	Equal Heights Divs
  *
  ------------------------------------*/

  $('.js-blocks').matchHeight();
  /*
  *
  *	Wow Animation
  *
  ------------------------------------*/

  new WOW().init();
}); // END #####################################    END
