$(".toggle").click(function() {
	$(".mainMenuMobile").slideToggle("slow");
	/* get rid of menu if click outside of it */
	$(document).mouseup(function (e) {
    	var container = $(".mainMenuMobile, .toggle");
    	if (!container.is(e.target)
        && container.has(e.target).length === 0)
        {
        	$(".mainMenuMobile").slideUp("slow");
        }
    });
});

// add dropdown indicator where needed
$(".mainMenuMobile li:has(ul)").prepend("<div class='triangleContainer'><div class='triangle triangleClosed'></div></div>");

$(".triangleContainer").click(function() {
	$(this).children().toggleClass("triangleClosed");
	$(this).children().toggleClass("triangleOpen");
	$(this).siblings("ul").toggleClass("visibleUL");
});

$(".triangleContainer").hover(function() {
	$( this ).next('.mainMenuMobile li a').toggleClass( "hoverBG" );
});

// get rid of menu dropdown on tablet when clicking outside of menu
// this isn't working properly for tablets. first this code should be in a separate file as it doesn't have anything to do with the mobile menu. Also, when a submenu is clicked on, and then clicked outside, the submenu will disappear for good
/*$( document ).ready(function() {*/
	/* get rid of menu if click outside of it */
	/*$(document).mouseup(function (e) {
    	var container = $(".mainMenu");
    	if (!container.is(e.target)
        && container.has(e.target).length === 0)
        {
        	$(".mainMenu li ul").hide();
        }
    });
});*/
