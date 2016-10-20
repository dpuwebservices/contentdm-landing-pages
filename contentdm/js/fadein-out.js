
$(document).ready(function() {

	$('.fade').hover(
function(){
$(this).find('.caption').stop().fadeTo('slow',0.8);
},
function(){
$(this).find('.caption').stop().fadeTo('slow',0);
});
});
