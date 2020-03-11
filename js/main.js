jQuery(document).ready(function($) {
	$(".project-banking-corner").click(function () {
		$(this).toggleClass('corner-active');
		$('.project-banking-overlay').toggleClass('none');
	});
	$(".project-education-corner").click(function () {
		$(this).toggleClass('corner-active');
		$('.project-education-overlay').toggleClass('none');
	});
	$(".project-technology-corner").click(function () {
		$(this).toggleClass('corner-active');
		$('.project-technology-overlay').toggleClass('none');
	});
	$(".project-estate-corner").click(function () {
		$(this).toggleClass('corner-active');
		$('.project-estate-overlay').toggleClass('none');
	});
});