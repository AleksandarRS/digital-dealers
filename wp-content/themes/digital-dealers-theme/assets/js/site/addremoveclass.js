"use strict";

// const Global = require('./global');

// let	_this;

let _this = module.exports = {

	
	/*-------------------------------------------------------------------------------
		# Cache dom and strings
	-------------------------------------------------------------------------------*/
	$dom: {
		// window: $(window),
		mainHeader: $('.site-header'),
		// anchorLink: $('.anchor-product-list > li'),
		// scrollToTop: $('#back2Top')
		
    },

    vars: {
	},

	/*-------------------------------------------------------------------------------
		# Initialize
	-------------------------------------------------------------------------------*/
	init: function () {
		if( _this ){
			// $(window).on('scroll load', function () {
			// 	_this.$dom.mainHeader.scroll(function() {    
			// 		var scroll = _this.$dom.mainHeader.scrollTop();
				
			// 		if (scroll >= 50) {
			// 			_this.$dom.mainHeader.addClass("fixed-site-header");
			// 		} else {
			// 			_this.$dom.mainHeader.removeClass("fixed-site-header");
			// 		}
	
			// 	});
			// });
			$(window).scroll(function(){
				if ($(this).scrollTop() > 50) {
					_this.$dom.mainHeader.addClass('fixed-site-header');
				} else {
					_this.$dom.mainHeader.removeClass('fixed-site-header');
				}
			});

			// //Detect element .contact-global-details to window and animation items
			// var $animation_elements = $('.element-should-be-detected');
			// var $window = $(window);
			// $window.on('scroll resize', check_if_in_view);
			// function check_if_in_view() {
			// 	var window_height = $window.height();
			// 	var window_top_position = $window.scrollTop();
			// 	var window_bottom_position = (window_top_position + window_height);

			// 	$.each($animation_elements, function() {
			// 		//var $element = $(this);
			// 		var $element = $(this);
			// 		var element_height = $element.outerHeight();
			// 		var element_top_position = $element.offset().top;
			// 		var element_bottom_position = (element_top_position + element_height);

			// 		//check to see if this current container is within viewport
			// 		if ((element_bottom_position >= window_top_position) &&
			// 			(element_top_position <= window_bottom_position)) {
			// 			$element.addClass('in-view');
			// 		} else {
			// 			$element.removeClass('in-view');
			// 		}
			// 	});
			// }
		}

    },
	

};