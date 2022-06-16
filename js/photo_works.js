/*--------------------------------------
  MODAL起動
--------------------------------------*/
var title;
var terms;
var time;
var cut;
var service;
var images;


var slider;
var thumbnailItem;
var idx;
var retSlick;


// リサイズの解除
var timer = false;
var winWidth = window.innerWidth;
var winWidth_resized;



jQuery(function($){

  $(window).on('load', function() {
    //ロード時にモーダルが開いていたら閉じる
    if(location.hash){
      location.href = window.location.href.split('#')[0];
    }
    //PCの場合画像のサイズをテキストの最大長に合わせる
    // if (window.innerWidth > 750) {
    //   var height = $('.colums .texts').innerHeight();
    //   $('.colums .image img').css('max-height',height);
    // }

  });

  $(".modal_open").click(function () {

    //値の取得
    title     = $(this).data('title');
    terms     = $(this).data('terms');
    time      = $(this).data('time');
    cut       = $(this).data('cut');
    service   = $(this).data('service');
    images    = $(this).data('imageset');

  });

});

$(document).on('opened', '.remodal', function () {
    var modal = $(this);

    //スライダーを空にする
    $('#modal_slider').empty();
    $('#thumbnail-list').empty();
    $('#modal_category').empty();

     //MODALに設定
    $('#modal_time_title').html('撮影時間：');
    $('#modal_cut_title').html('　|　カット数：');
    $('#modal_service_title').html('　|　サービス：');
    $('#modal_title').html(title);
    $('#modal_time').html(time);
    $('#modal_cut').html(cut);
    $('#modal_service').html(service);

    //カテゴリーの一覧
    $.each(terms, function(index, elem) {
      $('#modal_category').append('<li>' + elem + '</li>');
    });
    
    //スライダーの画像を取得
    $.each(images, function(index, elem) {
      $('#modal_slider').append('<li><img src="' + elem + '" alt=""></li>');
      $('#thumbnail-list').append('<li class="thumbnail-item" data-index="' + index + '"><img src="' + elem + '" class="fit-cover" alt=""></li>');
    });

    //スライダー 起動
    slider = "#modal_slider"; // スライダー
    thumb_slider = "#thumbnail-list";
    thumbnailItem = "#thumbnail-list .thumbnail-item"; // サムネイル画像アイテム
    
    // サムネイル画像アイテムに data-index でindex番号を付与
    $(thumbnailItem).each(function(){
     idx = $(thumbnailItem).index(this);
     $(this).attr("data-index",idx);
    });
    
    // スライダー初期化後、カレントのサムネイル画像にクラス「thumbnail-current」を付ける
    // 「slickスライダー作成」の前にこの記述は書いてください。
    $(slider).on('init',function(slick){
     index = $(".slide-item.slick-slide.slick-current").attr("data-slick-index");
     $(thumbnailItem+'[data-index="'+index+'"]').addClass("thumbnail-current");
    });

    //slickスライダー初期化  
    $(slider).slick({
      //autoplay: true,
      speed: 1000,
      arrows: true,
      lazyLoad: 'progressive',
      prevArrow:  '<div class="prev_icon link_icon prev-arrow">'+
                  '<svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40" class="over">' + 
                      '<g id="btn_round_navy" transform="translate(4363 -16439)">' + 
                        '<g id="circle" transform="translate(-4323 16479) rotate(180)" fill="none" stroke="#ffffff" stroke-width="1">' + 
                        '<circle cx="20" cy="20" r="20" stroke="none" class="svg-elem-1"></circle>' + 
                        '<circle cx="20" cy="20" r="19.5" fill="none" class="svg-elem-2"></circle>' + 
                      '</g>' + 
                      '<path id="yoko" d="M-5199.842,9545.573h10.041" transform="translate(-9537.452 26004.422) rotate(180)" fill="none" stroke="#ffffff" stroke-width="1" class="svg-elem-3"></path>' + 
                      '<path id="arrow" d="M-5192.348,9541.014l3.884,3.093-3.884,3.462" transform="translate(-9536.211 26002.982) rotate(180)" fill="none" stroke="#ffffff" stroke-width="1" class="svg-elem-4"></path>' + 
                      '</g>' + 
                        '</svg>' + 
                        '<svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40" class="base">' + 
                          '<g id="btn_round_navy" transform="translate(4363 -16439)">' + 
                      '<g id="circle" transform="translate(-4323 16479) rotate(180)" fill="none" stroke="#ffffff" stroke-width="1">' + 
                      '<circle cx="20" cy="20" r="20" stroke="none" class="svg-elem-1"></circle>' + 
                      '<circle cx="20" cy="20" r="19.5" fill="none" class="svg-elem-2"></circle>' + 
                      '</g>' + 
                      '<path id="yoko" d="M-5199.842,9545.573h10.041" transform="translate(-9537.452 26004.422) rotate(180)" fill="none" stroke="#ffffff" stroke-width="1" class="svg-elem-3"></path>' + 
                      '<path id="arrow" d="M-5192.348,9541.014l3.884,3.093-3.884,3.462" transform="translate(-9536.211 26002.982) rotate(180)" fill="none" stroke="#ffffff" stroke-width="1" class="svg-elem-4"></path>' + 
                      '</g>' + 
                  '</svg>' + 
                  '</div>',
      nextArrow:  '<div class="next_icon link_icon">'+
                  '<svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40" class="over">'+
                    '<g id="btn_round_navy" transform="translate(-133 -531)">'+
                      '<g id="circle" transform="translate(133 531)" fill="none" stroke="#ffffff" stroke-width="1">'+
                        '<circle cx="20" cy="20" r="20" stroke="none" class="svg-elem-1"></circle>'+
                        '<circle cx="20" cy="20" r="19.5" fill="none" class="svg-elem-2"></circle>'+
                      '</g>'+
                      '<path id="yoko" d="M-5199.842,9545.573h10.041" transform="translate(5347.452 -8994.423)" fill="none" stroke="#ffffff" stroke-width="1" class="svg-elem-3"></path>'+
                      '<path id="arrow" d="M-5192.348,9541.014l3.884,3.093-3.884,3.462" transform="translate(5346.211 -8992.983)" fill="none" stroke="#ffffff" stroke-width="1" class="svg-elem-4"></path>'+
                    '</g>'+
                  '</svg>'+
                  '<svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40" class="base">'+
                    '<g id="btn_round_navy" transform="translate(-133 -531)">'+
                      '<g id="circle" transform="translate(133 531)" fill="none" stroke="#ffffff" stroke-width="1">'+
                        '<circle cx="20" cy="20" r="20" stroke="none" class="svg-elem-1"></circle>'+
                        '<circle cx="20" cy="20" r="19.5" fill="none" class="svg-elem-2"></circle>'+
                      '</g>'+
                      '<path id="yoko" d="M-5199.842,9545.573h10.041" transform="translate(5347.452 -8994.423)" fill="none" stroke="#ffffff" stroke-width="1" class="svg-elem-3"></path>'+
                      '<path id="arrow" d="M-5192.348,9541.014l3.884,3.093-3.884,3.462" transform="translate(5346.211 -8992.983)" fill="none" stroke="#ffffff" stroke-width="1" class="svg-elem-4"></path>'+
                    '</g>'+
                  '</svg>'+
                  '</div>',
      fade: true,
      adaptiveHeight: true,
      asNavFor: thumb_slider,
      infinite: true
    });
    
    //サムネイル画像アイテムをクリックしたときにスライダー切り替え
    $(thumb_slider).on('click', 'li' , function() {
      idx = $(this).attr("data-index");
      $(slider).slick("slickGoTo",idx,false);

    });
    //サムネイル画像アイテムをクリックしたときにスライダー切り替え
    // $(thumbnailItem).on('click',function(){
    //   var index = $(this).attr("data-index");
    //   $(slider).slick("slickGoTo",index,false);
    // });
    
    //サムネイル画像のカレントを切り替え
    $(slider).on('beforeChange',function(event,slick, currentSlide,nextSlide){
      $(thumbnailItem).each(function(){
        $(this).removeClass("thumbnail-current");
      });
      $(thumbnailItem+'[data-index="'+nextSlide+'"]').addClass("thumbnail-current");
    });

    
    


    /*----------------------------
    サムネイル用スライダー (for SP)
    ------------------------------*/
    var runThumbSlider = function() {
      //スライダー 起動
      $("#thumbnail-list").not('.slick-initialized').slick({
        slidesToShow: 3,
        speed: 1000,
        lazyLoad: 'progressive',
        prevArrow:  '<div class="prev_icon link_icon prev-arrow">'+
                    '<svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40" class="over">' + 
                        '<g id="btn_round_navy" transform="translate(4363 -16439)">' + 
                          '<g id="circle" transform="translate(-4323 16479) rotate(180)" fill="none" stroke="#ffffff" stroke-width="1">' + 
                          '<circle cx="20" cy="20" r="20" stroke="none" class="svg-elem-1"></circle>' + 
                          '<circle cx="20" cy="20" r="19.5" fill="none" class="svg-elem-2"></circle>' + 
                        '</g>' + 
                        '<path id="yoko" d="M-5199.842,9545.573h10.041" transform="translate(-9537.452 26004.422) rotate(180)" fill="none" stroke="#ffffff" stroke-width="1" class="svg-elem-3"></path>' + 
                        '<path id="arrow" d="M-5192.348,9541.014l3.884,3.093-3.884,3.462" transform="translate(-9536.211 26002.982) rotate(180)" fill="none" stroke="#ffffff" stroke-width="1" class="svg-elem-4"></path>' + 
                        '</g>' + 
                          '</svg>' + 
                          '<svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40" class="base">' + 
                            '<g id="btn_round_navy" transform="translate(4363 -16439)">' + 
                        '<g id="circle" transform="translate(-4323 16479) rotate(180)" fill="none" stroke="#ffffff" stroke-width="1">' + 
                        '<circle cx="20" cy="20" r="20" stroke="none" class="svg-elem-1"></circle>' + 
                        '<circle cx="20" cy="20" r="19.5" fill="none" class="svg-elem-2"></circle>' + 
                        '</g>' + 
                        '<path id="yoko" d="M-5199.842,9545.573h10.041" transform="translate(-9537.452 26004.422) rotate(180)" fill="none" stroke="#ffffff" stroke-width="1" class="svg-elem-3"></path>' + 
                        '<path id="arrow" d="M-5192.348,9541.014l3.884,3.093-3.884,3.462" transform="translate(-9536.211 26002.982) rotate(180)" fill="none" stroke="#ffffff" stroke-width="1" class="svg-elem-4"></path>' + 
                        '</g>' + 
                    '</svg>' + 
                    '</div>',
        nextArrow:  '<div class="next_icon link_icon">'+
                    '<svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40" class="over">'+
                      '<g id="btn_round_navy" transform="translate(-133 -531)">'+
                        '<g id="circle" transform="translate(133 531)" fill="none" stroke="#ffffff" stroke-width="1">'+
                          '<circle cx="20" cy="20" r="20" stroke="none" class="svg-elem-1"></circle>'+
                          '<circle cx="20" cy="20" r="19.5" fill="none" class="svg-elem-2"></circle>'+
                        '</g>'+
                        '<path id="yoko" d="M-5199.842,9545.573h10.041" transform="translate(5347.452 -8994.423)" fill="none" stroke="#ffffff" stroke-width="1" class="svg-elem-3"></path>'+
                        '<path id="arrow" d="M-5192.348,9541.014l3.884,3.093-3.884,3.462" transform="translate(5346.211 -8992.983)" fill="none" stroke="#ffffff" stroke-width="1" class="svg-elem-4"></path>'+
                      '</g>'+
                    '</svg>'+
                    '<svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40" class="base">'+
                      '<g id="btn_round_navy" transform="translate(-133 -531)">'+
                        '<g id="circle" transform="translate(133 531)" fill="none" stroke="#ffffff" stroke-width="1">'+
                          '<circle cx="20" cy="20" r="20" stroke="none" class="svg-elem-1"></circle>'+
                          '<circle cx="20" cy="20" r="19.5" fill="none" class="svg-elem-2"></circle>'+
                        '</g>'+
                        '<path id="yoko" d="M-5199.842,9545.573h10.041" transform="translate(5347.452 -8994.423)" fill="none" stroke="#ffffff" stroke-width="1" class="svg-elem-3"></path>'+
                        '<path id="arrow" d="M-5192.348,9541.014l3.884,3.093-3.884,3.462" transform="translate(5346.211 -8992.983)" fill="none" stroke="#ffffff" stroke-width="1" class="svg-elem-4"></path>'+
                      '</g>'+
                    '</svg>'+
                    '</div>',   
        asNavFor: slider,
      });
      if(window.innerWidth > 750){
        //解除
        $('#thumbnail-list.slick-initialized').slick('unslick');
      }
    }

    runThumbSlider();

    /*----------------------------
    リサイズ用の処理
    ------------------------------*/
    //$(function(){
      // ウインドウのリサイズイベントに処理をバインド
      $(window).on("resize", function(){
        // リサイズ後の放置時間が指定ミリ秒以下なら何もしない(リサイズ中に何度も処理が行われるのを防ぐ)
        if (timer !== false) {
          clearTimeout(timer);
        }
        // 放置時間が指定ミリ秒以上なので処理を実行
        timer = setTimeout(function() {
          // リサイズ後のウインドウの横幅を取得
          winWidth_resized = window.innerWidth;

          // リサイズ前のウインドウ幅とリサイズ後のウインドウ幅が異なる場合
          if ( winWidth != winWidth_resized ) {
            
            runThumbSlider();

            // 次回以降使えるようにリサイズ後の幅をウインドウ幅に設定する
            winWidth = window.innerWidth;
          }
        }, 200);
      });

    //});
});







$(document).on('closed', '.remodal', function (e) {

  // Reason: 'confirmation', 'cancellation'
  $('#modal_time_title').html('');
  $('#modal_cut_title').html('');
  $('#modal_service_title').html('');
  $('#modal_title').html('');
  $('#modal_time').html('');
  $('#modal_cut').html('');
  $('#modal_service').html('');
  console.log('Modal is closed' + (e.reason ? ', reason: ' + e.reason : ''));
  $('#modal_slider').slick('unslick');
  $('#thumbnail-list').slick('unslick');
  $('#modal_slider').removeClass('slick-initialized');
  $('#thumbnail-list').removeClass('slick-initialized');
});



// $(document).on('closed', '.remodal', function (e) {

//     // Reason: 'confirmation', 'cancellation'
//     console.log('Modal is closed' + (e.reason ? ', reason: ' + e.reason : ''));
//     $("#modal_slider").slick("unslick");
// });

/*

jQuery(function($){
  $(document).on('opening', '.remodal', function () {
    console.log('Modal is opening');
  });

  $(document).on('opened', '.remodal', function () {
    console.log('Modal is opened');
    console.log($('.remodal .texts_bg').css('background-image'));
  });

  $(document).on('closing', '.remodal', function (e) {

    // Reason: 'confirmation', 'cancellation'
    console.log('Modal is closing' + (e.reason ? ', reason: ' + e.reason : ''));
  });

  $(document).on('closed', '.remodal', function (e) {

    // Reason: 'confirmation', 'cancellation'
    console.log('Modal is closed' + (e.reason ? ', reason: ' + e.reason : ''));
  });

  $(document).on('confirmation', '.remodal', function () {
    console.log('Confirmation button is clicked');
  });

  $(document).on('cancellation', '.remodal', function () {
    console.log('Cancel button is clicked');
  });
});
*/