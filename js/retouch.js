/*--------------------------------------
  ビフォーアフター
--------------------------------------*/



$(window).on('load resize',function(){


  // if (window.innerWidth > 750) {
    $(".beforeafter").twentytwenty({
      orientation: 'horizontal',
    });
  // }


  $('.beforeafter').on('touchstart', function() {
    $('.ba_expl').fadeOut(500);
  });
  $('.beforeafter').on('mousedown', function() {
    $('.ba_expl').fadeOut(500);
  });


});
