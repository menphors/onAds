(function($){
	$(document).ready(function(){
		$(".navscroll").hide();
		$(function() {
			$(window).scroll(function(){

				if($(this).scrollTop() > 400) {
					$('.navscroll').fadeIn();
				}else{
					$('.navscroll').fadeOut();
				}
			});
		});
});
	}(jQuery));
/**$(document).ready(function() {
	$(window).scroll(function() {
  	if($(document).scrollTop() > 10) {
    	$('#nav').addClass('change');
    }
    else {
    $('#nav').removeClass('change');
    }
  });
});

**/
