//*---------------------------------*/
//  タブの切り替え処理
//*---------------------------------*/

jQuery(function(){

  $('#tab_btns li').on('click', function(){
    var index = $('#tab_btns li').index(this);
    $('#tab_btns li').removeClass('active');
    $(this).addClass('active');
    //初期化
    var target = $(this).closest('#tab_set').find('#tab_contents li')
    target.each(function(i, elem) {
      $(elem).removeClass('active').hide();
    });
    //表示
    $('#tab_set #tab_contents li').eq(index).addClass('active');
    $('#tab_set #tab_contents li').eq(index).fadeIn(500,'easeInCubic');
  });

});
