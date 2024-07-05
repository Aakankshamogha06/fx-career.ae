/* 
	Website : Eres
	Author  : DexignZone
	File    : Custom JS
	URL     : https://eres.dexignzone.com/aspnet/
*/

var dzProductDoc = function(){
	'use strict';
	
	/* Sidebar ============ */
	var handleSidebarCollapse = function(){
		if(jQuery('#sidebarCollapse').length > 0){
			$('#sidebarCollapse').on('click', function () {
				$('#nevbarleft').toggleClass('active');
				$('#content').toggleClass('active');
				$(this).toggleClass('active');
				
				$('#mobileCloseBtn').on('click', function () {
					$('#nevbarleft').removeClass('active');
				});
			});
		}
	}
	
	/* Scroll Top ============ */
	var handleScrollTop = function (){
		var scrollTop = jQuery(".scroltop");
		
		/* page scroll top on click function */	
		scrollTop.on('click',function() {
			jQuery("html, body").animate({
				scrollTop: 0
			}, 1000);
			return false;
		})

		jQuery(window).bind("scroll", function() {
			var scroll = jQuery(window).scrollTop();
			if (scroll > 900) {
				jQuery(".scroltop").fadeIn(1000);
			} else {
				jQuery(".scroltop").fadeOut(1000);
			}
		});
		/* page scroll top on click function end*/
	}
	
	/* Navbar Nav ============ */
	var handleNavbarNav = function(){
		if(jQuery('.navbar-nav').length > 0){
			$(".navbar-nav a").on('click', function(event) {
				// Make sure this.hash has a value before overriding default behavior
				if (this.hash !== "") {
					// Prevent default anchor click behavior
					event.preventDefault();
					
					// Store hash
					var hash = this.hash;

					// Using jQuery's animate() method to add smooth page scroll
					// The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
					$('html, body').animate({
						scrollTop: $(hash).offset().top
					});
				} // End if
			});
		}
	}
	
	/* handleDZTree ============ */
	var handleDZTree = function(){
		if(jQuery('#dzTree').length > 0){
			$("#dzTree").jstree({
				"core": {
					"themes": {
						"responsive": false
					}
				},
				"types": {
					"default": {
						"icon": "fa fa-folder"
					},
					"file": {
						"icon": "fa fa-file-text"
					}
				},
				"plugins": ["types"]
			});
		}
		if(jQuery('#dzTree2').length > 0){
			$("#dzTree2").jstree({
				"core": {
					"themes": {
						"responsive": false
					}
				},
				"types": {
					"default": {
						"icon": "fa fa-folder"
					},
					"file": {
						"icon": "fa fa-file-text"
					}
				},
				"plugins": ["types"]
			});
		}
	}
	
	/* Handle Support ============ */
	var handleSupport = function(){
		var support = '<script id="DZScript" src="https://dzassets.s3.amazonaws.com/w3-global.js?btn_dir=right"></script>';
		jQuery('body').append(support);
	}

	/* Function ============ */
	return {
		init:function(){
			handleSidebarCollapse();
			handleScrollTop();
			handleNavbarNav();
			handleDZTree();
			handleSupport();
		},
	}

}();

jQuery(document).ready(function() {
    dzProductDoc.init();
});