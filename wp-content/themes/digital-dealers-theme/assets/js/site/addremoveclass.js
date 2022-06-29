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
		}

    },
	

};