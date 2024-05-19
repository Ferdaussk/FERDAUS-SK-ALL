(function ($) {
	("use strict");


	$(document).ready(function(){
		$('.bwd_progress-title > span').each(function(){
			$(this).prop('Counter',0).animate({
				Counter: $(this).text()
			},{
				duration: 1500,
				easing: 'swing',
				step: function (now){
					$(this).text(Math.ceil(now));
				}
			});
		});
	});


	$(document).ready(function(){
		$('.bwd_progress-value > span').each(function(){
			$(this).prop('Counter',0).animate({
				Counter: $(this).text()
			},{
				duration: 1500,
				easing: 'swing',
				step: function (now){
					$(this).text(Math.ceil(now));
				}
			});
		});
	});


	

})(jQuery);



