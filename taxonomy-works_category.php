<?php get_header(); ?>
<!--modal-->
  <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/remodal.css" >
  <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/remodal-default-theme.css">
  <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/remodal.js"></script>

<!-- slider -->
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/slick/slick.css" media="all"/>
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/slick/slick-theme.css" media="all"/>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/slick/slick.min.js"></script>

<!-- for Page -->
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/photo_works.js"></script>
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/creative.css" media="all"/>

</head>

<body id="taxoWorks" class="artworks white_head">

  <?php get_template_part('parts_site_header_artworks'); ?>

  <main class="contents addPdgT addPdgB bg_deepblue">

  <div class="inner backlogo">
      <div class="sectionTitle flex">
        <span class="eng futura">Project</span><h2 class="ja">撮影実績</h2>
      </div>

      <div class="bread_tarm">

        <!-- ぱんくず -->
        <div id="breadcrumb">
          <div class="inner">
            <ul class="breadlist">
              <li>
                <a href="<?php echo home_url(); ?>" class="hvr-underline-from-left">HOME</a>
              </li>
              <li>
                <a href="<?php echo home_url(); ?>/creative/photograph/" class="hvr-underline-from-left">施工・竣工写真</a>
              </li>
              <li>
                <a href="<?php echo home_url(); ?>/photo_works/" class="hvr-underline-from-left">撮影事例</a>
              </li>
              <li>
                <span><?php single_term_title(); ?></span>
              </li>
            </ul>
          </div>
        </div>

        <!-- タクソノミー 一覧 -->
        <ul class="tarms">
          <li>
            <a href="<?php echo home_url(); ?>/photo_works/" class="hvr-underline-from-left">ALL</a></li>
          </li>
          <?php
            $current_term = $term;
            $terms = get_terms('works_category', array('hide_empty' => false));
            foreach ( $terms as $term ){
              if ($current_term == $term->slug) {
                echo '<li class="current"><a href="'.get_term_link($term->slug,'works_category').'">'.$term->name.'</a></li>';
              }else{
                echo '<li><a href="'.get_term_link($term->slug,'works_category').'" class="hvr-underline-from-left">'.$term->name.'</a></li>';
              }
            }
            ?>

        </ul>
      </div>

      <!-- 一覧 -->
      <div class="section" id="works">
        <div class="rel">
          <div class="inner">

            <div class="listWrap">

              <?php $paged = get_query_var('paged') ? get_query_var('paged') : 1 ; ?>
              <?php if (have_posts()) : ?>


                <ul class="lists">

                  <?php while (have_posts()) : the_post(); ?>
                  <li>
                  <!-- <a href="<?php the_permalink(); ?>" -->
                  <a href="javascript:void(0)" class="modal_open" data-remodal-target="modal"

                    data-title    = "<?php the_title(); ?>"
                    data-terms    = "[<?php
                      $terms = get_the_terms($post->ID,'works_category');
                      $count = count($terms);//タクソノミーの個数カウント
                      if ($count >= 1) {
                        $idx=0;
                        foreach( $terms as $term ) {
                          if ($idx > 0) {
                            echo ",";
                          }
                          echo "&quot;". $term->name . "&quot;";
                          $idx++;
                        }
                      }else{
                        echo "&quot;". "なし" . "&quot;";
                      }
                    ?>]"
                    data-time       = "<?php the_field('time'); ?>"
                    data-cut        = "<?php the_field('cut'); ?>"
                    data-service    = "<?php the_field('service'); ?>"
                    data-imageset   = "[<?php
                      $idx=0;
                      if(have_rows('photos')):
                        while(have_rows('photos')): the_row();
                          if ($idx > 0) {
                            echo ",";
                          }
                          echo "&quot;";
                          the_sub_field('photo');
                          echo "&quot;";
                          $idx++;
                        endwhile;
                      endif;
                    ?>]"
                  >

                    <div class="image" class="fit-cover">
                      <?php if (has_post_thumbnail()) : ?>
                          <?php the_post_thumbnail(); ?>
                      <?php else : ?>
                          <img src="<?php bloginfo('template_url'); ?>/images/photograph/noimage.png" alt="noimage">
                      <?php endif ; ?>
                    </div>
                    <div class="texts">
                      <h3 class="w_title"><?php the_title(); ?></h3>
                      <div class="meta2">
                      <?php
                        $terms = get_the_terms($post->ID,'works_category');
                        $count = count($terms);//タクソノミーの個数カウント
                        if ($count >= 1) {
                          foreach( $terms as $term ) {
                            echo '<span>'. $term->name . '</span>';
                          }
                        }else{
                          echo '<span>なし</span>';
                        }
                      ?>
                    </div>
                    </div>
                  </a>
                </li>
                  <?php endwhile;?>
                </ul>
              <?php else: ?>
                <p class="nodata align_center">該当する撮影事例はありません。</p>
              <?php endif; ?>

              <div class="pagination rubik">
                <?php wp_pagenavi(); ?>
              </div>

            </div><!-- listWrap -->



          </div>
        </div>
    </div>

    </div><!-- inner -->

  </main>

  <?php get_template_part('parts_works_modal'); ?>
  <?php get_template_part('parts_site_footer_artworks'); ?>


<?php get_footer(); ?>
