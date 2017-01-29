
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
    slideWidth: 200,
    minSlides: 1,
    maxSlides: 4,
    slideMargin: 10
  });


        var clock;

      // clock = $('.clock').FlipClock({
      //       clockFace: 'DailyCounter',
      //       autoStart: false,
      //       callbacks: {
      //         stop: function() {
      //           $('.message').html('The clock has stopped!')
      //         }
      //       }
      //   });



            
      //   clock.setTime(220880);
      //   clock.setCountdown(true);
      //   clock.start();


      var clock = $('.clock').FlipClock(2020485, {
    clockFace: 'Counter'
  });

  setTimeout(function() {
    setInterval(function() {
      clock.increment();
    }, 1000);
  });

 






}); // ready	




	




