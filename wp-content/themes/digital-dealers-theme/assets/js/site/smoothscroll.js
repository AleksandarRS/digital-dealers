"use strict";

// const Global = require('./global');

// let	_this;

let _this = module.exports = {

	
	/*-------------------------------------------------------------------------------
		# Cache dom and strings
	-------------------------------------------------------------------------------*/
	$dom: {
		// window: $(window),
		
		
    },

    vars: {
	},

	/*-------------------------------------------------------------------------------
		# Initialize
	-------------------------------------------------------------------------------*/
	init: function () {
		if( _this ){

			$('.main-menu-container > ul > .menu-item > a').click(function(e){
				e.preventDefault();
				var target = $($(this).attr('href'));
				if(target.length){
					var scrollTo = target.offset().top-80;
					$('body, html').animate({scrollTop: scrollTo+'px'}, 800);
				}
			});
	
		}
	}

};