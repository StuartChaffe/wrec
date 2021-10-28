jQuery(document).ready(function($) {
	// Primary nav
	var $menuBtn = $(".global-header--nav-btn");
	var $menuContainer = $(".global-header--nav__mobile");
	$menuBtn.click(function() {
		$(this).toggleClass("is-active");
		$("body").toggleClass("menu-active");
		$menuContainer.toggleClass("is-active");
	});
	// $(window).scroll(function() {    
	// 	var scroll = $(window).scrollTop();
	// 	if (scroll >= 0) {
	// 		$(".global-header--nav__mobile").addClass("darkHeader");
	// 	} else {
	// 		$('.global-header--nav__mobile').removeClass('darkHeader');
	// 	 }
	// });
});