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
			
			$(window).scroll(function(){
				if ($(this).scrollTop() > 50) {
					_this.$dom.mainHeader.addClass('fixed-site-header');
				} else {
					_this.$dom.mainHeader.removeClass('fixed-site-header');
				}
			});


			$('[data-toggle]').on('click', function(event) {
				event.preventDefault();
				var target = $(this.hash);
				target.toggle();
			});

			// Cache selectors
			var lastId,
				topMenu = $("#primary-menu"),
				topMenuHeight = topMenu.outerHeight() + 65,
				// All list items
				menuItems = topMenu.find("a"),
				// Anchors corresponding to menu items
				scrollItems = menuItems.map(function() {
					var item = $(this).attr("href");
					if(item !== '#') {return $(item)}
				});

			console.log(scrollItems)


			// Bind click handler to menu items
			// so we can get a fancy scroll animation
			menuItems.click(function(e) {
				var href = $(this).attr("href"),
					offsetTop = href === "#" ? 0 : $(href).offset().top - topMenuHeight + 1;
				$('html, body').stop().animate({
					scrollTop: offsetTop
				}, 1300);
				e.preventDefault();
			});

			// Bind to scroll
			$(window).scroll(function() {
				// Get container scroll position
				var fromTop = $(this).scrollTop() + topMenuHeight;

				// Get id of current scroll item
				var cur = scrollItems.map(function() {
					if ($(this).offset().top < fromTop)
						// console.log(this)
						return this;
				});
				// Get the id of the current element
				cur = cur[cur.length - 1];
				var id = cur && cur.length ? cur[0].id : "";

				if (lastId !== id) {
					lastId = id;
					// Set/remove active class
					menuItems
						.parent().removeClass("active-menu-item")
						.end().filter("[href='#" + id + "']").parent().addClass("active-menu-item");
				}
			});
			
		}

    },
	

};