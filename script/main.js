$(document).ready(function() {
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

    $('#all-post-btn').click(function() {
		$(this).addClass('active-button');
		$('#top-post-btn').removeClass('active-button');
		$('.top-post').hide(500);
		$('.all-post').show(500);
	});
	$('#top-post-btn').click(function() {
		$(this).addClass('active-button');
		$('#all-post-btn').removeClass('active-button');
		$('.all-post').hide(500);
		$('.top-post').show(500);	
    });
})
