

// loadPolyfills(); //this module last section


// スムーススクロール
var prev_panel="top_mv";
$(function() {

  const pagersNodeList = document.querySelectorAll(".top_pagination a");
  const pagers = Array.prototype.slice.call(pagersNodeList, 0);
  pagers.forEach(function(pager) {
    pager.addEventListener("click", function(e) {
      e.preventDefault();
      const targetId = e.target.hash;
      const target = document.querySelector(targetId);
      target.scrollIntoView({ behavior: "smooth" });
    });
  });


  // スムーススクロール(scrollTop)
  const scrolltopNodeList = document.querySelectorAll(".top_scroll");
  const scroll_tops = Array.prototype.slice.call(scrolltopNodeList, 0);
   scroll_tops.forEach(function(scroll_top) {
    scroll_top.addEventListener("click", function(e) {
      e.preventDefault();
      const targetId2 = e.currentTarget.dataset.href;
      const target2 = document.querySelector(targetId2);
      target2.scrollIntoView({ behavior: "smooth" });
    });
  });

  // Intersection Observer
  const sectionsNodeList = document.querySelectorAll(".panel");
  const sections = Array.prototype.slice.call(sectionsNodeList, 0);
  const observerRoot = document.querySelector(".fullPageScroll");
  const options = {
    root: observerRoot,
    rootMargin: "-50% 0px",
    threshold: 0
  };
  const observer = new IntersectionObserver(doWhenIntersect, options);
  sections.forEach(function(section) {
    observer.observe(section);
    console.log(section.id);
  });




  /**
   * 交差したときに呼び出す関数
   * @param entries - IntersectionObserverEntry IntersectionObserverが交差したときに渡されるオブジェクトです。
   */
  function doWhenIntersect(entriesNodeList) {
    const entries = Array.prototype.slice.call(entriesNodeList, 0);
    entries.forEach(function(entry) {
      if (entry.isIntersecting) {
        console.log("doWhenIntersect=" + entry.target.id);
        activatePagination(entry.target);
      }
    });
  }

  /**
   * ページネーションの大きさを変える関数
   * @param element - HTMLElement 現在表示中のスライドのHTML要素を引数に取ります。
   */
  function activatePagination(element) {
    const currentActiveIndex = document.querySelector(
      "#top_pagination .active"
    );
    if (currentActiveIndex !== null) {
      currentActiveIndex.classList.remove("active");

    }
    //古いビューを消す
    const oldElem = document.querySelector("#" + prev_panel + ' .panel_ani');
    oldElem.classList.remove('view');
    console.log("activatePagination=" + element.id);
    const newActiveIndex = document.querySelector(
      "[data-hash='#" + element.id + "']"
    );


    newActiveIndex.classList.add("active");
    const newElem =  document.querySelector("#"+element.id + ' .panel_ani');
    newElem.classList.add('view');
    prev_panel = element.id;
  }
});

$(window).on('load',function(){
  $('#pagination1').addClass('active');
});

/*--------------------------------------
  現在のセクションによってロゴを変更
--------------------------------------*/

$(function(){

  var secArr        = new Array();
  var current       = -1;
  var cur_logo      = "default";
  var logo_white    = "_white";
  var logo_default  = "_default";
  /* ここに背景色を順に記述する*/
  //var secColor = new Array('#36ab77','#e04747', '#e7ff03', '#035fff');
  $('.panel').each(function (i) {
      secArr[i] = $(this).offset().top;
  });
  function changeColor(prmlogo,prmPGcolor,prmMenucolor) {
    if (prmlogo == "white") {
      $('.js_logo_img').attr('src',$('.js_logo_img').attr('src').replace(logo_default, logo_white));
      //$('.top_scroll img').attr('src',$('.top_scroll img').attr('src').replace(logo_default, logo_white));
      $('body').removeClass('black');
    }else{
      $('.js_logo_img').attr('src',$('.js_logo_img').attr('src').replace(logo_white, logo_default));
      //$('.top_scroll img').attr('src',$('.top_scroll img').attr('src').replace(logo_white, logo_default));
      $('body').addClass('black');
    }
    if ($('.fullPageScroll').scrollTop() < 10) {
      $('body').addClass('top');
    }else{
      $('body').removeClass('top');
    }
    if (prmPGcolor == "dark") {
      $('body').removeClass('pg_white');
      $('body').addClass('pg_dark');
    }else{
      $('body').removeClass('pg_dark');
      $('body').addClass('pg_white');
    }
    if (prmMenucolor == "dark") {
      $('body').removeClass('menu_white');
      $('body').addClass('menu_dark');
    }else{
      $('body').removeClass('menu_dark');
      $('body').addClass('menu_white');
    }
  }
  $(window).on('load',function(){
    for (var i = secArr.length-1; i>=0; i--) {
      if ($('.fullPageScroll').scrollTop() >= secArr[i]){
        cur_pg_color = $('.panel').eq(i).data('pagenation');
        if (window.innerWidth > 1024) {
          cur_logo        = $('.panel').eq(i).data('logo-pc');
          cur_menu_color  = $('.panel').eq(i).data('menu-pc');
        }else{
          cur_logo        = $('.panel').eq(i).data('logo-sp');
          cur_menu_color  = $('.panel').eq(i).data('menu-sp');
        }
        changeColor(cur_logo,cur_pg_color,cur_menu_color);
        break;
      }
    }
  });
  var timer = false;
  $(window).on(' resize',function(){
    if (timer !== false) {
        clearTimeout(timer);
    }
    timer = setTimeout(function() {
      for (var i = secArr.length-1; i>=0; i--) {
      if ($('.fullPageScroll').scrollTop() >= secArr[i]){
        cur_pg_color = $('.panel').eq(i).data('pagenation');
        if (window.innerWidth > 1024) {
          cur_logo        = $('.panel').eq(i).data('logo-pc');
          cur_menu_color  = $('.panel').eq(i).data('menu-pc');
        }else{
          cur_logo        = $('.panel').eq(i).data('logo-sp');
          cur_menu_color  = $('.panel').eq(i).data('menu-sp');
        }
        changeColor(cur_logo,cur_pg_color,cur_menu_color);
        break;
      }
    }
    }, 200);
  });
  $('.fullPageScroll').on('scroll',function(){
    for (var i = secArr.length-1; i>=0; i--) {
      if ($('.fullPageScroll').scrollTop() >= secArr[i]){
        cur_pg_color = $('.panel').eq(i).data('pagenation');
        if (window.innerWidth > 1024) {
          cur_logo        = $('.panel').eq(i).data('logo-pc');
          cur_menu_color  = $('.panel').eq(i).data('menu-pc');
        }else{
          cur_logo        = $('.panel').eq(i).data('logo-sp');
          cur_menu_color  = $('.panel').eq(i).data('menu-sp');
        }
        changeColor(cur_logo,cur_pg_color,cur_menu_color);
        break;
      }
    }
  });
});




/*--------------------------------------
  スライダー 
--------------------------------------*/
$(function(){
  $('#top_service_slider').slick({
    dots: false,
    infinite: true,
    speed: 800,
    autoplay: true,
    autoplaySpeed: 3000,
    slidesToShow: 1,
  });
});
/*--------------------------------------
  選ばれる理由の選択
--------------------------------------*/
$(function(){
  //初期設定
  $('.f_panels li').hide();
  $('.f_panels li').eq(0).show();
  $('#fp_total').text($('.f_panels li').length);

  //次へ
  $('.feature_pagenation .next').on('click', function(){
    next();
  });

  //前へ
  $('.feature_pagenation .prev').on('click', function(){
    previous();
  });

  /*--------------------------------------
    スワイプ 
  --------------------------------------*/

  /** ①初期メッセージ出力 */
  // $("#msg").text("スマホで下の枠を指でスワイプしてください");
 
  /** ②指が触れたか検知 */
  $(".f_panels li").on("touchstart", start_check);
 
  /** ③指が動いたか検知 */
  $(".f_panels li").on("touchmove", move_check);
 
  /** ④指が離れたか検知 */
  $(".f_panels li").on("touchend", end_check);
 
  /** 変数宣言 */
  var moveY,modeX, posiY, posiX;
 
 
  // ⑤タッチ開始時の処理
  function start_check(event) 
  {
    /** 現在の座標取得 */
    posiY = getY(event);
    posiX = getX(event);
 
    /** 移動距離状態を初期化 */
    moveY = '';
    moveX = '';
 
    /** 表示メッセージを初期化 */
    msgY = '';
    msgX = '';
  }
 
  // ⑥スワイプ中の処理
  function move_check(event) {
    if (posiX - getX(event) > 70) {// 70px以上移動でスワイプと判断
      /** 右→左と判断 */
      moveX = "left";
    } else if (posiX - getX(event) < -70) { // 70px以上移動でスワイプと判断
      /** 左→右と判断 */     
      moveX = "right";
    }
 
    if (posiY - getY(event) > 70) { // 70px以上移動でスワイプと判断
      /** 下→上と判断 */
      moveY = "top";
    } else if (posiY - getY(event) < -70) { // 70px以上移動でスワイプと判断
      /** 上→下と判断 */     
      moveY = "bottom";
    }
  }
 
  // ⑦指が離れた時の処理
  function end_check(event) {
    if (moveX == "left") {
      msgX = "左へ移動";
      next();

    } else if (moveX == "right") {
      msgX = "右へ移動";
      previous();
    } else {
      msgX = "移動なし";
    }
 
 
    if (moveY == "top") {
      msgY = "上へ移動";
    } else if (moveY == "bottom") {
      msgY = "下へ移動";
    } else {
      msgY = "移動なし";
    }
 

    // $("#msg").text("（横移動）"+msgX+":"+"（縦移動）"+msgY);
 
  }
 
 
  // 座標取得処理
  function getY(event) 
  {
    //縦方向の座標を取得
    return (event.originalEvent.touches[0].pageY);
  }
 
  function getX(event) 
  {
    //横方向の座標を取得
    return (event.originalEvent.touches[0].pageX);
  }


  /*
   * グローバル変数
   */

  // var no = 1;       // 数値格納用
  // var number;   // 数値表示部分のDOM取得用            

  /*
   * スワイプイベント設定
   */

  // function setSwipe(elem) {
  //   let t = document.querySelector(elem);
  //   let startX;   // タッチ開始 x座標
  //   let startY;   // タッチ開始 y座標
  //   let moveX;  // スワイプ中の x座標
  //   let moveY;  // スワイプ中の y座標
  //   let dist = 50;  // スワイプを感知する最低距離（ピクセル単位）
    
  //   // タッチ開始時： xy座標を取得
  //   t.addEventListener("touchstart", function(e) {
  //     e.preventDefault();
  //     startX = e.touches[0].pageX;
  //     startY = e.touches[0].pageY;
  //   });
    
  //   // スワイプ中： xy座標を取得
  //   t.addEventListener("touchmove", function(e) {
  //     e.preventDefault();
  //     moveX = e.changedTouches[0].pageX;
  //     moveY = e.changedTouches[0].pageY;
  //   });
    
  //   // タッチ終了時： スワイプした距離から左右どちらにスワイプしたかを判定する/距離が短い場合何もしない
  //   t.addEventListener("touchend", function(e) {
  //     if (startX > moveX && startX > moveX + dist) {    // 右から左にスワイプ
  //       next();
  //     }
  //     else if (startX < moveX && startX + dist < moveX) { // 左から右にスワイプ
  //       previous();
  //     }
  //     else if() {

  //     }

  //   });
  // }

  /*
   * 次の番号を表示
   */
  function next(){
    no ++;
    setNumber();


    var total_page      = $('.f_panels li').length;
    var current_index   = Number($('#fp_current').text());
    
    if (current_index >= (total_page - 1)) {
      //最終ページには次へボタン動かないようにする
      $('.feature_pagenation .next').addClass('disabled');
    }else if (current_index < (total_page - 1)) {
      if ($('.feature_pagenation .next').hasClass('disabled')) {
        $('.feature_pagenation .next').show(0);
      }
    }
    $('.feature_pagenation .prev').removeClass('disabled');
    //コンテンツの入れ替え
    if (current_index <= (total_page - 1)) {
      $('.f_panels li').eq(current_index-1).fadeOut();
      $('.f_panels li').eq(current_index).fadeIn();
      $('#fp_current').text(current_index+1);
    }
  }

  /*
   * 前の番号を表示
   */
  function previous(){
    no --;
    setNumber();

    var total_page      = $('.f_panels li').length;
    var current_index   = Number($('#fp_current').text());
    
    if (current_index <= 2) {
      //最初のページには前へボタンを動かないようにする
      $('.feature_pagenation .prev').addClass('disabled');
    }else if (current_index > 1) {
      if ($('.feature_pagenation .prev').hasClass('disabled')) {
        $('.feature_pagenation .prev').show(0);
      }
    }
    $('.feature_pagenation .next').removeClass('disabled');
    //コンテンツの入れ替え
    if (current_index > 1) {
      $('.f_panels li').eq(current_index-1).fadeOut();
      $('.f_panels li').eq(current_index-2).fadeIn();
      $('#fp_current').text(current_index-1);
    }

  }

  /*
   * 数値を画面に表示する
   */
  function setNumber(){
    //number.innerHTML = no;

  }

  /*
   * 起動時の処理
   */

  window.addEventListener("load", function(){
    // 数値表示部分のDOM取得
    number = document.getElementById("number");
    
    // 数値を画面に表示
    no = 0;
    setNumber();

    // スワイプイベント設定
    //setSwipe("#top_feature");

  });


});
/*------------------------------------
  serviceのホバー処理
------------------------------------*/
$(function() {
 
  var logo_white    = "_white";
  var logo_default  = "_default";

  //マウスを乗せたら発動
  $('#top_service a').hover(function() {
 
    //マウスを乗せたら色が変わる
    if (window.innerWidth > 1024 ) {
      if ($(this).hasClass('architecture')) {
        $(this).closest('#top_service').find('.creative').addClass('hvr');
        $('.js_logo_img').attr('src',$('.js_logo_img').attr('src').replace(logo_default, logo_white));
      }else if ($(this).hasClass('creative')) {
        $(this).closest('#top_service').find('.architecture').addClass('hvr');
        $('.js_logo_img').attr('src',$('.js_logo_img').attr('src').replace(logo_white, logo_default));
      }
      $(this).find('.link_icon').addClass('view');
    }
    //ここにはマウスを離したときの動作を記述
  }, function() {
    //色指定を空欄にすれば元の色に戻る
    //$(this).closest('#top_service').find('.hvr_image').removeClass('background-image', '');
    if (window.innerWidth > 1024 ) {
      if ($(this).hasClass('architecture')) {
        $(this).closest('#top_service').find('.creative').removeClass('hvr');
      }else if ($(this).hasClass('creative')) {
        $(this).closest('#top_service').find('.architecture').removeClass('hvr');
      }
      $(this).find('.link_icon').removeClass('view');
      $('.js_logo_img').attr('src',$('.js_logo_img').attr('src').replace(logo_default, logo_white));
    }
  });
});
