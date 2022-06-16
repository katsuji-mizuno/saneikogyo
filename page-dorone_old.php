<?php get_header(); ?>

<!-- for Page -->
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@700&display=swap" rel="stylesheet">
<!-- <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/home.css" media="all"/> -->
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/dorone.js"></script>

</head>

<body id="pageDorone">

  <?php get_template_part('parts_site_header'); ?>

  <main class="contents bg_gray">

    <!-- タイトル -->
    <div id="mv">
      <img src="<?php bloginfo('template_directory'); ?>/images/dorone/mv_sp.jpg" class="js_img_change_tb fit-cover" alt=""> 
      <div class="mainTitle">
        <span class="eng"><img src="<?php bloginfo('template_directory'); ?>/images/dorone/title_text.svg" class="js_img_change_tb" alt="about"></span>
        <h1 class="ja">ドローン空撮</h1>
        <p class="lead">こちらはダミーテキストです。こちらはダミーテキストです。こちらはダミーテキストです。こちらはダミーテキストです。こちらはダミーテキストです。</p>
      </div>
      <a href="#tab_set" class="top_scroll">
        <img src="<?php bloginfo('template_directory'); ?>/images/common/scroll_white.svg" alt="scroll">
      </a>
    </div>

    <!-- ぱんくず -->
    <div id="breadcrumb">
      <div class="inner">
        <ul class="breadlist">
          <li>
            <a href="<?php echo home_url(); ?>" class="hvr-underline-from-left">HOME</a>
          </li>
          <li>
            <span>ドローン空撮</span>
          </li>
        </ul>
      </div>
    </div>


    <!-- 動画 -->
    <div class="section">
      <div class="inner">
        <div class="movie_wrap">
          <iframe width="560" height="315" src="https://www.youtube.com/embed/KP_XnoNVcBc"  allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
      </div>
    </div>



  </main>
 
  <?php get_template_part('parts_site_footer'); ?>

<?php get_footer(); ?>
