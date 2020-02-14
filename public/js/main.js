$(document).ready(function () {
	
	$('#filters-toggle').on('click', function () {
		$('.filters-single').slideToggle();
	});

	$('.tab-link').on('click', function () {
		var tabID = $(this).attr('data-tab');

		$('.tab-link').removeClass('active');
		$('.tab-content').removeClass('active');
		
		$(this).addClass('active');
		$('#'+tabID).addClass('active');
		
	});
});