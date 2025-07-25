// menus 
function professional_portfolio_menu_open_nav() {
	window.professional_portfolio_responsiveMenu=true;
	jQuery(".sidenav").addClass('show');
}
function professional_portfolio_menu_close_nav() {
	window.professional_portfolio_responsiveMenu=false;
 	jQuery(".sidenav").removeClass('show');
}
jQuery(function($){
 	"use strict";
 	jQuery('.main-menu > ul').superfish({
		delay: 500,
		animation: {opacity:'show',height:'show'},
		speed: 'fast'
 	});
});

jQuery(document).ready(function () {
	window.professional_portfolio_currentfocus=null;
  	professional_portfolio_checkfocusdElement();
	var professional_portfolio_body = document.querySelector('body');
	professional_portfolio_body.addEventListener('keyup', professional_portfolio_check_tab_press);
	var professional_portfolio_gotoHome = false;
	var professional_portfolio_gotoClose = false;
	window.professional_portfolio_responsiveMenu=false;
 	function professional_portfolio_checkfocusdElement(){
	 	if(window.professional_portfolio_currentfocus=document.activeElement.className){
		 	window.professional_portfolio_currentfocus=document.activeElement.className;
	 	}
 	}
 	function professional_portfolio_check_tab_press(e) {
		"use strict";
		// pick passed event or global event object if passed one is empty
		e = e || event;
		var activeElement;

		if(window.innerWidth < 999){
		if (e.keyCode == 9) {
			if(window.professional_portfolio_responsiveMenu){
			if (!e.shiftKey) {
				if(professional_portfolio_gotoHome) {
					jQuery( ".main-menu ul:first li:first a:first-child" ).focus();
				}
			}
			if (jQuery("a.closebtn.mobile-menu").is(":focus")) {
				professional_portfolio_gotoHome = true;
			} else {
				professional_portfolio_gotoHome = false;
			}

		}else{

			if(window.professional_portfolio_currentfocus=="responsivetoggle"){
				jQuery( "" ).focus();
			}}}
		}
		if (e.shiftKey && e.keyCode == 9) {
		if(window.innerWidth < 999){
			if(window.professional_portfolio_currentfocus=="header-search"){
				jQuery(".responsivetoggle").focus();
			}else{
				if(window.professional_portfolio_responsiveMenu){
				if(professional_portfolio_gotoClose){
					jQuery("a.closebtn.mobile-menu").focus();
				}
				if (jQuery( ".main-menu ul:first li:first a:first-child" ).is(":focus")) {
					professional_portfolio_gotoClose = true;
				} else {
					professional_portfolio_gotoClose = false;
				}

			}else{

			if(window.professional_portfolio_responsiveMenu){
			}}}}
		}
	 	professional_portfolio_checkfocusdElement();
	}
});

jQuery('document').ready(function($){
	// preloader
  setTimeout(function () {
		jQuery("#preloader").fadeOut("slow");
  },1000);

  // Sticky Header
  $(window).scroll(function(){
		var sticky = $('.header-sticky'),
			scroll = $(window).scrollTop();

		if (scroll >= 100) sticky.addClass('header-fixed');
		else sticky.removeClass('header-fixed');
	});
});

// Scroller
jQuery(document).ready(function () {
	jQuery(window).scroll(function () {
    if (jQuery(this).scrollTop() > 100) {
      jQuery('.scrollup i').fadeIn();
    } else {
      jQuery('.scrollup i').fadeOut();
    }
	});
	jQuery('.scrollup i').click(function () {
    jQuery("html, body").animate({
      scrollTop: 0
    }, 600);
    return false;
	});
});

// homepage sidebar
jQuery(document).ready(function () {
	function professional_portfolio_search_loop_focus(element) {
		var professional_portfolio_focus = element.find('select, input, textarea, button, a[href]');
		var professional_portfolio_firstFocus = professional_portfolio_focus[0];  
		var professional_portfolio_lastFocus = professional_portfolio_focus[professional_portfolio_focus.length - 1];
		var KEYCODE_TAB = 9;

		element.on('keydown', function professional_portfolio_search_loop_focus(e) {
			var isTabPressed = (e.key === 'Tab' || e.keyCode === KEYCODE_TAB);

			if (!isTabPressed) { 
			  return; 
			}

			if ( e.shiftKey ) /* shift + tab */ {
			  if (document.activeElement === professional_portfolio_firstFocus) {
		    professional_portfolio_lastFocus.focus();
		      e.preventDefault();
		    }
		  } else /* tab */ {
		  	if (document.activeElement === professional_portfolio_lastFocus) {
		    	professional_portfolio_firstFocus.focus();
		      e.preventDefault();
		    }
		  }
		});
	}

  jQuery('.toggle-btn a').click(function(){
    jQuery(".header-sidebar").addClass('show');
  	professional_portfolio_search_loop_focus(jQuery('.header-sidebar'));
  });

  jQuery('.header-sidebar .close-pop a').click(function(){
    jQuery(".header-sidebar").removeClass('show');
  });
});

// Banner image
function professional_portfolio_callParallax(e) {
	if (jQuery('.banner-title').length > 0) {
	  professional_portfolio_parallaxIt(e, '.banner-title', 'before', -50);
	  professional_portfolio_parallaxIt(e, '.banner-title', 'after', -30);
	}
}

function professional_portfolio_parallaxIt(e, target, pseudo, movement) {
  var $this = jQuery(target);
  var professional_portfolio_relX = e.pageX - $this.offset().left;
  var professional_portfolio_relY = e.pageY - $this.offset().top;

  var professional_portfolio_moveX = (professional_portfolio_relX - $this.width() / 2) / $this.width() * movement;
  var professional_portfolio_moveY = (professional_portfolio_relY - $this.height() / 2) / $this.height() * movement;

  $this.css(`--parallax-${pseudo}-x`, `${professional_portfolio_moveX}px`);
  $this.css(`--parallax-${pseudo}-y`, `${professional_portfolio_moveY}px`);
}

jQuery(document).on('mousemove', professional_portfolio_callParallax);