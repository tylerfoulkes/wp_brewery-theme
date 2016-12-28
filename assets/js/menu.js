
// adds toggle functionality to sub menu
$('.menu-item-has-children').hover(function () {
	$(this).find('.sub-menu').toggle();
	console.log('the');
});


// adds navigation toggle down functionality on mobile view
$("#mobile_menu").click(function () {
	$(".menu").toggle();
});


/* gets length call to action and adds css to center it above
the background image */
$(document).ready(function() {
	var banner = document.getElementById('banner_cont');
	var slogan = banner.querySelector('p');
	slogan = slogan.querySelector('a');
	var slogan_width = slogan.offsetWidth;
	slogan_width = -1 * (slogan_width/2);
	slogan.style.marginLeft = slogan_width;
});


// adds placeholder text to search box
$("#s").attr("placeholder", "search");