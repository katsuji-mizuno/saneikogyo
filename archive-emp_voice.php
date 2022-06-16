<?php get_header(); ?>
<!-- slider -->
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/slick/slick.css" media="all"/>
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/slick/slick-theme.css" media="all"/>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/slick/slick.min.js"></script>

<!-- for Page -->
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/recruit.js"></script>

</head>

<body id="archiveEmpVoice" class="menu_dark">

  <?php get_template_part('parts_site_header'); ?>

  <main class="contents addPdgT addPdgB">

    <!-- ぱんくず -->
    <div id="breadcrumb">

      <div class="inner">
        <ul class="breadlist">
          <li>
            <a href="<?php echo home_url(); ?>" class="hvr-underline-from-left">HOME</a>
          </li>
          <li>
            <a href="<?php echo home_url(); ?>/recruit/" class="hvr-underline-from-left">採用情報</a>
          </li>
          <li>
            <span>先輩社員の声</span>
          </li>
        </ul>

      </div>
    </div>

    <div class="inner">
      <div class="sectionTitle center fadeFromBottom">
        <span class="eng futura">Voice</span><h2 class="ja">先輩社員の声</h2>
      </div>


      <!-- 一覧 -->
      <div class="section noPdgT" id="voice">
        <div class="rel">
          <div class="listWrap">

            <?php $paged = get_query_var('paged') ? get_query_var('paged') : 1 ; ?>
            <?php if (have_posts()) : ?>

            <ul class="lists">

              <?php while ( have_posts() ) : the_post(); ?>
              <li class="fadeFromBottom">
                <a href="<?php the_permalink(); ?>">
                  <?php if (get_field('position')) : ?>
                    <div class="position">
                      <?php the_field('position'); ?>
                    </div>
                  <?php endif; ?>
                  <div class="image" class="fit-cover">
                    <?php if (has_post_thumbnail()) : ?>
                      <?php the_post_thumbnail(); ?>
                    <?php else : ?>
                      <img src="<?php bloginfo('template_url'); ?>/images/photograph/noimage.png" alt="noimage">
                    <?php endif; ?>
                  </div>
                </a>
                <div class="texts">
                  <h3 class="v_title"><?php the_title(); ?></h3>
                  <p class="v_info">
                    <?php the_field('hire_date'); ?>年 入社（キャリア<?php the_field('career'); ?>年）
                  </p>
                </div>
              </li>
              <?php endwhile;?>
            </ul>
            <?php else: ?>
              <p class="nodata align_center">準備中です。</p>
            <?php endif; ?>


            <div class="pagination rubik">
              <?php wp_pagenavi(); ?>
            </div>

            <?php wp_reset_query(); ?>
          </div><!-- listWrap -->

          <!-- go to upsite -->
          <div class="btnWrap goto_up">
            <a href="<?php echo home_url(); ?>/recruit/" class="hvr-underline-from-left">RECRUIT HOME</a>
          </div>
        </div>
      </div>

    </div><!-- inner -->

  </main>


  <?php get_template_part('parts_site_footer'); ?>


<?php get_footer(); ?>
