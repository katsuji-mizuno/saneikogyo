/*==================================
  スライダー 
==================================*/
jQuery(function(){
  $('#works_slide').slick({
    autoplay:true,
    dots: false,
    arrows: false,
    centerMode: true,
    slidesToShow: 2,
    responsive: [{
      breakpoint: 750,
      settings: {
        slidesToShow: 1
      }
    }]
  });
});