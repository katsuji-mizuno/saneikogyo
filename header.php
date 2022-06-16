<!DOCTYPE HTML>

<html lang="ja">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<meta name="format-detection" content="telephone=no">
<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/images/common/favicon.png">

<?php $myCorpName = get_bloginfo('name'); ?>
<?php $mySiteName = '株式会社サンエイ興業 | 横浜に本社を構える建築測量工事を行う専門工事会社です。'; ?>
<?php $myDiscripton = get_bloginfo( 'description' ) ?>
<?php $myURL = home_url(); ?>

<link rel="author" title="<?php echo $myCorpName ?>" href="<?php echo $myURL ?>">
<meta name="description" content="<?php echo $myDiscripton; ?>">
<meta name="keywords" content="建築測量,測量,施工管理">
<meta name="copyright" content="<?php echo $myCorpName ?>">

<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery-3.3.1.min.js"></script>

<?php echo '<script type="text/javascript">var templatePath = "' . get_template_directory_uri() . '";</script>'; ?>
<?php echo '<script type="text/javascript">var homeURL = "' . home_url() . '";</script>'; ?>
<?php echo '<script type="text/javascript">var blnIsHome = "' . is_home() . '";</script>'; ?>


<meta property='og:title' content='<?php echo $mySiteName ?>'/>
<meta property='og:description' content='<?php echo $myDiscripton ?>'/>
<meta property='og:url' content='<?php echo $myURL ?>'/>
<meta property='og:site_name' content='<?php echo $mySiteName ?>'/>
<meta property='og:type' content='website'/>
<meta property='og:image' content='<?php bloginfo('template_directory'); ?>/images/common/ogp.png'/>
<?php wp_head(); ?>
<!--以下不要なプラグインは削除-->
<!--CSS-->
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/hover-min.css">
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/hover.css">
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/animate.min.css">

<!--JS-->
<!-- <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/smoothscroll.js"></script> -->
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.matchHeight-min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/ofi.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.inview.min.js"></script>

<!--ここまでプラグインは削除-->
<!--Font-->
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500&display=swap" rel="stylesheet">
<script>
  (function(d) {
    var config = {
      kitId: 'kuj8ffz',
      scriptTimeout: 3000,
      async: true
    },
    h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
  })(document);
</script>



<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/common.css">
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/common.js"></script>

