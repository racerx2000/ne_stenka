$(function() {

$('#hamburger').click(function(){
		$(this).toggleClass('open');
    $('.header-nav').slideToggle();
	});

});
