/***************************************************************************

  汎用関数

****************************************************************************/
//コンスタント文字列
const SP_BP = 750;    //スマホ判定のブレイクポイント
const MENU_BP = 750;  //グローバルメニューの表示ブレイクポイント

/*------------------------------------
ウィンドウ幅取得
--------------------------------------*/
var wWidth = 0;
function getWidth() {
  wWidth = window.innerWidth;
  return wWidth;
}

/*------------------------------------
  SPとPCで画像の入れ替え
  画像変更対象の<img>にスタイル「js-image-switch」を追加する。
  画像の命名規則：最後に_pc,_spとする。
  ※スタイルはJSコントロール用でCSSに無し。
--------------------------------------*/
/*-------------
SP<=>PC切り替え
--------------*/
$(function() {
  // 置換の対象とするclass属性。
  var $elem = $('.js_image_switch');
  // 置換の対象とするsrc属性の末尾の文字列。
  var sp = '_sp.';
  var pc = '_pc.';
  // 画像を切り替えるウィンドウサイズ。
  var replaceWidth = SP_BP;

  function imageSwitch() {
    // ウィンドウサイズを取得する。
    var windowWidth = parseInt($(window).width());

    // ページ内にあるすべての`.js-image-switch`に適応される。
    $elem.each(function() {
      var $this = $(this);
      // ウィンドウサイズが768px以上であれば_spを_pcに置換する。
      if(windowWidth >= replaceWidth) {
        $this.attr('src', $this.attr('src').replace(sp, pc));

      // ウィンドウサイズが768px未満であれば_pcを_spに置換する。
      } else {
        $this.attr('src', $this.attr('src').replace(pc, sp));
      }
    });
  }
  imageSwitch();

  // 動的なリサイズは操作後0.2秒経ってから処理を実行する。
  var resizeTimer;
  $(window).on('resize', function() {
    clearTimeout(resizeTimer);
    resizeTime = setTimeout(function() {
      imageSwitch();
    }, 200);
  });
});
/*----------------------
SP<=>TB<=>PC切り替え(3段階)
-----------------------*/
$(function() {
  // 置換の対象とするclass属性。
  var $elem2 = $('.js_img_change_tb');
  pcName = '_pc',
  tbName = '_tb',
  spName = '_sp',
  replaceWidthTb = 1024,
  replaceWidthSp = 750;

  function imageSwitchTB() {
    // ウィンドウサイズを取得する。
    var windowWidth = parseInt($(window).width());

    // ページ内にあるすべての`.js-image-switch`に適応される。
    $elem2.each(function() {
      var $this = $(this);
      // ウィンドウサイズが768px以上であれば_spを_pcに置換する。
      if(windowWidth > replaceWidthTb) {
        $this.attr('src',$this.attr('src').replace(spName,pcName));
        $this.attr('src',$this.attr('src').replace(tbName,pcName));
      } else if(windowWidth <= replaceWidthTb && windowWidth > replaceWidthSp) {
        $this.attr('src',$this.attr('src').replace(pcName,tbName));
        $this.attr('src',$this.attr('src').replace(spName,tbName));
      } else if(windowWidth < replaceWidthSp) {
        $this.attr('src',$this.attr('src').replace(pcName,spName));
        $this.attr('src',$this.attr('src').replace(tbName,spName));
      }
    });
  }
  imageSwitchTB();

  // 動的なリサイズは操作後0.2秒経ってから処理を実行する。
  var resizeTimer;
  $(window).on('resize', function() {
    clearTimeout(resizeTimer);
    resizeTime = setTimeout(function() {
      imageSwitchTB();
    }, 200);
  });
});

/*------------------------------------
画像トリミング
--------------------------------------*/
$(function() {
  objectFitImages();
});

/*-------------------------------------
VHの高さ調整
--------------------------------------*/
var setFillHeight = function() {
// const setFillHeight() => {
  const vh = window.innerHeight * 0.01;
  //document.documentElement.style.setProperty('--vh', `${vh}px`);
  document.documentElement.style.setProperty('--vh', vh + 'px');
}

// 画面のサイズ変動があった時に高さを再計算する
window.addEventListener('resize', setFillHeight);

// 初期化
setFillHeight();



/*-------------------------------------
要素の高さ調整
--------------------------------------*/
var matchHeight = function() {
  if($('.auto')[0]){
    $('.auto').matchHeight();
  }
}
window.addEventListener('resize', matchHeight);
// 初期化
matchHeight();

/*-------------------------------------
ローディング
--------------------------------------*/

jQuery(function($){
  var h = $(window).height();
  var ofsh = window.pageYOffset ;

  //$('#loadingWrap').css('display','none');
  
  $('#loader-bg').css({'display':'block','position':'fixed','top': '0' + 'px'});
  $('.loader').css({'visibility':'visible'});
  $('#loadingWrap').css({'visibility':'hidden','opacity':'0'});
  

/*
  $('#js-mv-image')
    .css({opacity: '0.0'})
    .animate({opacity: '1'}, 3000);
  $('#js-mv-text')
      .css({'opacity': '0.0','bottom':'0%'});
  setTimeout(function() {
    $(".loader").animate({'opacity': '1','bottom':'40px'}, 300);
  }, 2000);
*/
});

$(window).on("load",function(){
  
  if ($('#pageHome')[0]) {
    //ホームページの場合
    setTimeout(function() {
      $(".loader").animate(
        {width:"29.97px"}
        // ,
        // { duration: '500', easing: "easeInOutQuint", }
      );
    }, 300);
    
    setTimeout(function() {
      $('body').addClass('loading');
    }, 800);
    setTimeout(function() {
      $('#loadingWrap').css({'visibility':'visible',opacity: '1'});
      $('#loader-bg').delay(0).slideUp(300);
    }, 1800);
    setTimeout(function() {
      $('body').removeClass('loading');
      $('#slide').addClass('ani');
    }, 2300);
  }else{
    //下層ページ
    $('#loader-bg').delay(500).fadeOut(200);
    $('.loader').css({'visibility':'visible'});
    $('.loader1').css({'opacity':'1'});

    setTimeout(function() {
      $('#loadingWrap').css({'visibility':'visible',opacity: '1'});
      $('body').removeClass('loading');
    }, 200);
  }
  
});

//10秒たったら強制的にロード画面を非表示
$(function(){
  setTimeout('stopload()',10000);
});

function stopload(){
  $('#loadingWrap').css({'visibility':'visible',opacity: '1'});
  $('body').removeClass('loading');
  $('#loader-bg').delay(900).fadeOut(200);
}

/*-------------------------------------
画像hover(フェード)
--------------------------------------*/

function smartRollover() {
  if(document.getElementsByTagName) {
    var images = document.getElementsByTagName("img");

    for(var i=0; i < images.length; i++) {
      if(images[i].getAttribute("src").match("_off."))
      {
        images[i].onmouseover = function() {
            this.setAttribute("src", this.getAttribute("src").replace("_off.", "_on."));
        }
        images[i].onmouseout = function() {
            this.setAttribute("src", this.getAttribute("src").replace("_on.", "_off."));
        }
      }
    }
  }
}
 
if(window.addEventListener) {
  window.addEventListener("load", smartRollover, false);
}
else if(window.attachEvent) {
  window.attachEvent("onload", smartRollover);
}
 
 
// cross fade
 
new function(){
  function setRollOver2(){
    if(!document.images){return;}
    var imgs = document.images;
    var insert = [];
    for(var i=0;i<imgs.length;i++){
      var splitname = imgs[i].src.split('_off.');
      if((splitname[1])&&(imgs[i].parentNode.tagName=='A')){
        var rolloverImg = document.createElement('img');
        rolloverImg.src = splitname[0]+'_on.'+splitname[1];
        var alpha = 0;
        rolloverImg.currentAlpha = alpha;
        rolloverImg.style.opacity = alpha/100;
        rolloverImg.style.filter = 'alpha(opacity='+alpha+')';
        rolloverImg.style.position = 'absolute';
 
        addEvent(rolloverImg,'mouseover',function(){setFader(this,100);});
        addEvent(rolloverImg,'mouseout',function(){setFader(this,0);});
 
        insert[insert.length] = {position:imgs[i],element:rolloverImg};
      }
    }
    for(var i=0;i<insert.length;i++){
      var parent = insert[i].position.parentNode;
      parent.insertBefore(insert[i].element,insert[i].position);
    }
  }
 
 
  function setFader(targetObj,targetAlpha){
    targetObj.targetAlpha = targetAlpha;
    if(targetObj.currentAlpha==undefined){
      targetObj.currentAlpha = 100;
    }
    if(targetObj.currentAlpha==targetObj.targetAlpha){
      return;
    }
    if(!targetObj.fading){
      if(!targetObj.fader){
        targetObj.fader = fader;
      }
      targetObj.fading = true;
      targetObj.fader();
    }
  }
 
  function fader(){
    this.currentAlpha += (this.targetAlpha - this.currentAlpha)*0.2;
    if(Math.abs(this.currentAlpha-this.targetAlpha)<1){
      this.currentAlpha = this.targetAlpha;
      this.fading = false;
    }
    var alpha = parseInt(this.currentAlpha);
    this.style.opacity = alpha/100;
    this.style.filter = 'alpha(opacity='+alpha+')';
    if(this.fading){
      var scope = this;
      setTimeout(function(){fader.apply(scope)},10);
    }
  }
 
  function addEvent(eventTarget, eventName, func){
    if(eventTarget.addEventListener){
      eventTarget.addEventListener(eventName, func, false);
    }else if(window.attachEvent){
      // IE
      eventTarget.attachEvent('on'+eventName, function(){func.apply(eventTarget);});
    }
  }
 
  addEvent(window,'load',setRollOver2);
 
}




/***************************************************************************

  共通動作

****************************************************************************/


/*--------------------------------------
  メニューボタン
--------------------------------------*/
jQuery(function($){
  $("#btnMenu").click(function () {
    $('body').toggleClass("open");
    if ($('body').hasClass("open")) {
      var start = 500;
      var interval = 100;
      var runTime = 0;
      $(".lv1.bound").each(function(idx,elem) {
        runTime = (interval*idx) + start;
        setTimeout(function(){
           $(elem).addClass('on');
        },runTime);
      });
    }else{
      $(".lv1.bound").removeClass('on');
    }
  });
});


/*--------------------------------------
  smooth scroll
--------------------------------------*/
jQuery(function($){
  $('a[href^="#"]').on('click', function(){
    if  (!($('#pageHome')[0])) {
      if(wWidth < 751) {
        var offset = 100;
      } else {
        offset = 0;
      }
      var href= $(this).attr("href");
      if (href.match('modal') == null) {
        var target = $(href == "#" || href == "" ? 'html' : href);
        var position = target.offset().top - offset;
        $('body,html').animate({scrollTop:position}, 800, 'swing');
        return false;
      }
    }
  });

  $('.toPageTop').click(function () {
    $("html,body").animate({scrollTop:0},'300');
  });
});
//パラメータ付でスクロール
jQuery.event.add(window,"load",function(){
  setTimeout(function() {
    if(wWidth < 751) {
      var offset = 0;
    } else {
      offset = 0;
    }
    var idHash   = location.hash;
    if(idHash){
      if (idHash.match('modal') == null) {
        var target = $(idHash);
        var position = target.offset().top - offset;
        $('body,html').animate({scrollTop:position}, 400, 'swing');
      }
    }
  }, 600);
});

/*--------------------------------------
  GO TOPの位置とヘッダーの高さ設定
  (使用する場合に復活)
--------------------------------------*/

$(function(){
 
  $(window).scroll(function(){
    //if (window.innerWidth < 751) {
      scrollHeight = $(document).height();
      scrollPosition = $(window).height() + $(window).scrollTop();
      if($(this).scrollTop()>568){

        if ((scrollHeight - scrollPosition ) > 100) {
            //それ以外のスクロールの位置の場合
            // pagetop.css('bottom','30px');
            $('body').addClass('scroll');
        }
      }else{
        //---- 画面が1000pxより上ならボタンを表示しない
        $('body').removeClass('scroll');
      }
    // }else{
    //   //PCの場合はなし
    //   if ($('body').hasClass("scroll")) {
    //     $('body').removeClass('scroll');
    //   }
    // }
  });
  
});

/*--------------------------------------
  ヘッダー部分余白調整とタイトル表示
  (使用する場合に復活)
--------------------------------------*/
$(function(){
  if (!$('#pageHome')[0]) {
    if ($('.mainTitle')) {
      $('.mainTitle .eng').css({opacity:0});
      $('.mainTitle .ja').css({opacity:0});
      $('.mainTitle .lead').css({opacity:0});
    }
  }
});
$(window).on('load',function(){
  var logo_white    = "_white";
  var logo_default  = "_default";
  if (!$('#pageHome')[0]) {
    if ($('body').hasClass('black')) {
      $('.js_logo_img').attr('src',$('.js_logo_img').attr('src').replace(logo_white, logo_default));
    }
  }
  if (!$('#pageHome')[0]) {
    if ($('.mainTitle')) {
      $('.mainTitle .eng').delay(1000).animate({opacity:1}, 500);
      $('.mainTitle .ja').delay(1300).animate({opacity:1}, 500);
      $('.mainTitle .lead').delay(2000).animate({opacity:1}, 1000);
    }
  }
});


/*--------------------------------------
  スクロールアニメーション
  fadeFromBottom:下から
  fadeFromLeft：左から
  fadeFromRight：右から
  （OPTION）
  delay:遅延表示
--------------------------------------*/
jQuery(function($){
  //上から
  $('.fadeFromBottom').css({top:'30px',opacity:0,position:'relative'});
  $('.fadeFromBottom').one('inview', function(event, isInView1, visiblePartX, visiblePartY) {
    if (isInView1) {
      $(this).stop();
      $(this).stop().animate({top:'0px',opacity:1}, 500);
    }
    else {
      $(this).stop();
      $(this).stop().animate({top:'30px',opacity:0}, 500);
    }
  });
  //左から
  $('.fadeFromLeft').css({right:'50%',opacity:0,position:'relative'});
  $('.fadeFromLeft').one('inview', function(event, isInView2, visiblePartX, visiblePartY) {

    var delayleft = 1;
    if ($(this).hasClass('delay')){
      if (window.innerWidth > 750){
        var delayleft = 500;
      }
    }
    if (isInView2) {
      $(this).stop();
      $(this).delay(delayleft).animate({right:'0px',opacity:1}, 800);
      // console.log("left=" + delayleft);
    }
    else {
      $(this).stop();
      $(this).stop().animate({right:'50%',opacity:0}, 800);
    }
  });
  //右から
  $('.fadeFromRight').css({left:'50%',opacity:0,position:'relative'});
  $('.fadeFromRight').one('inview', function(event, isInView3, visiblePartX, visiblePartY) {
    var delayRight = 1;
    if ($(this).hasClass('delay')){
      if (window.innerWidth > 750){
        var delayRight = 500;
      }
    }
    if (isInView3) {
      $(this).stop();
      $(this).delay(delayRight).animate({left:'0px',opacity:1}, 800);
      // console.log("right=" + delayRight);
    }
    else {
      $(this).stop();
      $(this).stop().animate({left:'50%',opacity:0}, 800);
    }
  });

  //フェードインのみ
  $('.fadeIn').css({opacity:0});
  $('.fadeIn').one('inview', function(event, isInView4, visiblePartX, visiblePartY) {
    if (isInView4) {
      $(this).stop();
      $(this).stop().animate({opacity:1}, 500);
    }
    else {
      $(this).stop();
      $(this).stop().animate({opacity:0}, 500);
    }
  });

  //アイコン
  $('.link_icon').removeClass('view');
  $('.link_icon').on('inview', function(event, isInView9, visiblePartX, visiblePartY) {
    var ani_delay_s = 700;
    var ani_delay_e = 1000;

    if (isInView9) {
      if ($(this).data('delay')) {
        ani_delay_s = parseInt($(this).data('delay'));
        ani_delay_e = ani_delay_s + 300;
      }
      $(this).stop();
      $(this).delay(ani_delay_s).queue(function(){
        $(this).addClass('view').dequeue();
      });
      $(this).delay(ani_delay_e).queue(function(){
        $(this).removeClass('view').dequeue();
      });
    }
    else {
      $(this).stop();
      $(this).delay(ani_delay_s).queue(function() {
          $(this).removeClass('view').dequeue();
      });
    }
  });

});