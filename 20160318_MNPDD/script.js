/**
 * 
 */

$(document).ready(function(){
	
	$(".menu-trigger").click(function(){

		$("#navigation ul").slideToggle(400, function() {

			//$(this).toggleClass("#nav-expand").css('display','');

		});
	});
});

$(function(){
    $('.photoslider img:gt(0)').hide();
    setInterval(function(){
      $('.photoslider :first-child').hide()
         .next('img').fadeIn()
         .end().appendTo('.photoslider');}, 
      3200);
});