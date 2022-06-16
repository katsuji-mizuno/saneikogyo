/*-----------------------------
  スライダー
-----------------------------*/
$(function() {
  function sliderSetting(){
    var width = $(window).width();
    // if(width >= 750){
      $('#slideRecruit').not('.slick-initialized').slick({

        //appendArrows: $('#arrows'),
        arrows: true,
        autoplay: true,
        infinite: true,
        variableWidth:true,
        //slidesToShow: 7,
        initialSlide: 3,
        slidesToScroll: 1,
        centerMode: true,
        centerPadding: '113px',
        responsive: [
          {
            breakpoint: 1024,
            settings: {
              centerPadding: '80px'
            }
          },
          {
            breakpoint: 750,
            settings: {
              centerPadding: '40px',
            }
          }
        ]
      });
     // }else{
     //    $('#slideRecruit.slick-initialized').slick('unslick');
     // }
  }

  // 初期表示時の実行
  sliderSetting();

  // リサイズ時の実行
  $(window).resize( function() {
    sliderSetting();
  });
});

/*-----------------------------
  ロゴの変更(黒から白へ)
-----------------------------*/
$(function(){

  var logo_white    = "_white";
  var logo_default  = "_default";

  $(window).scroll(function(){

    if (!$('#pageRecruit')[0]) { 
      if ($('body').hasClass('scroll')) {
        $('.js_logo_img').attr('src',$('.js_logo_img').attr('src').replace(logo_default, logo_white));
      }else {
        $('.js_logo_img').attr('src',$('.js_logo_img').attr('src').replace(logo_white, logo_default));
      }
    }
  });
  
});
