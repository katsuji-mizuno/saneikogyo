/*--------------------------------------
  プライバシーポリシーのエラー入れ替え
--------------------------------------*/
jQuery(function($){
  if ($('.privacy .error')) {
    $('.privacy .error').before($('#privacy_policy'));
  }
});