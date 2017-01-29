
var fancyGallery = []; // define gallery group
 $(document).ready(function(){ 	

  $(".fancybox").fancybox({
		openEffect	: 'none',
		closeEffect	: 'none'
	});

  $('.bxslider1').bxSlider({
  pagerCustom: '#bx-pager-r',


});

    $('.bxslider2').bxSlider({
       // mode: 'vertical',
    slideWidth: 200,
    
    minSlides: 1,
    maxSlides: 4,
    slideMargin: 10,

  });






}); // ready	




	




