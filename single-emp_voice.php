<?php get_header(); ?>
<?php $current_id = get_the_ID(); ?>
<!-- slider -->
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/slick/slick.css" media="all"/>
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/slick/slick-theme.css" media="all"/>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/slick/slick.min.js"></script>

<!-- for Page -->
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/recruit.js"></script>

</head>

<body id="singleEmpVoice" class="menu_dark">
  <?php get_template_part('parts_site_header'); ?>

  <main class="contents addPdgT">

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
            <a href="<?php echo home_url(); ?>/emp_voice" class="hvr-underline-from-left">先輩社員の声</a>
          </li>
          <li>
            <span><?php the_title(); ?></span>
          </li>
        </ul>
        
      </div>
    </div>

    <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>


    <!-- タイトル -->
    <div class="sectionTitleBg"  style="background-image:url(<?php the_field('header_photo'); ?>);">
      <div class="mainTitle">
        <span class="eng futura">Voice</span><h2 class="ja">先輩社員の声</h2>
      </div>
    </div>



    <!-- 本文 -->
    <div class="section bg_gray" id="voice_body">
      <div class="inner">
        <article class="article bg_white">
          
              <div class="fbox">

                <div class="image fadeFromBottom">
                  <?php if( has_post_thumbnail() ): ?>
                        <?php the_post_thumbnail(); ?>
                    <?php else : //画像がなければ代替画像を表示する ?>　
                        <img src="<?php bloginfo('template_directory'); ?>/images/recruit/noimage.png" alt="no image" alt="" />
                    <?php endif; ?>
                </div>

                <div class="texts">
                  <!-- 役職 -->
                  <?php if (get_field('position')) : ?>
                    <div class="position fadeFromBottom">
                      <?php the_field('position'); ?>
                    </div>
                  <?php endif; ?>
                  <h2 class="v_title fadeFromBottom"><?php the_title(); ?></h2>
                  <p class="v_info fadeFromBottom"><?php the_field('hire_date'); ?>年 入社（キャリア<?php the_field('career'); ?>年）</p>

                  <?php 
                  if(have_rows('episodes')):
                    while(have_rows('episodes')): the_row(); 
                  ?>
                    <div class="episode">
                      <h3 class="ques fadeFromBottom"><?php echo the_sub_field('question') ?></h3>
                      <p class="ans fadeFromBottom"><?php echo the_sub_field('answer') ?></p>
                    </div>
                  <?php 
                    endwhile;
                  endif; 
                  ?>
                  </div>
                </div>
              </div>

            
        </article>
      </div>
    </div>

    <?php endwhile; ?>
    <?php endif; ?>

    <!-- スライダー  -->
    <div id="voice" class="section">
      <div class="sectionTitle align_center fadeFromBottom">
        <span class="eng futura">Other Stary</span>
        <h2 class="ja">その他のキャリアストーリー</h2>
      </div>

      <?php
      $args = array(
        'post_type' => 'emp_voice',
        'posts_per_page' => -1,
        'paged' => $paged,
      ); ?>

      <?php query_posts($args); ?>
      <?php if (have_posts()) :  ?>
        <ul class="lists fadeFromBottom" id="slideRecruit">
          <?php while (have_posts()) : the_post(); ?>
            <?php 
            $check_id = get_the_ID();
            if ($check_id !== $current_id) :
            ?>
              <li>
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
            <?php endif; ?>
          <?php endwhile; ?>
        </ul>
      <?php endif; ?>
      <?php wp_reset_query(); ?>


      <!-- go to upsite -->
      <div class="btnWrap goto_list">
        <a href="<?php echo home_url(); ?>/emp_voice/" class="hvr-underline-from-left">VIEW LIST</a>
      </div>
    </div>



  </main>

    <?php get_template_part('parts_site_footer'); ?>


<?php get_footer(); ?>
