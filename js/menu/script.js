$(document).ready(function () {
	Cufon.replace('.logo .title');	
		
	InitMenuEffects ();
	

});


/* *********************************************************************
 * Main Menu
 * *********************************************************************/
function InitMenuEffects () {
	/* Sliding submenus */
	$('.sidebar .menu ul ul').hide();
	$('.sidebar .menu ul li.active ul').show();
	
	$('.sidebar .menu ul li').click(function () {
		submenu = $(this).find('ul');
		if (submenu.is(':visible'))
			submenu.slideUp(150);					
		else
			submenu.slideDown(200);									
		return false;
	});
	
	/* Hover effect on links */
	$('.sidebar .menu li a').hover(
		function () { $(this).stop().animate({'paddingLeft': '18px'}, 200); },
		function () { $(this).stop().animate({'paddingLeft': '12px'}, 200); }
	)
}
