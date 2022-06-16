<?php get_header(); ?>


<!-- for Page -->
</head>

<body id="taxoWorks" class="artworks white_head">

  <?php get_template_part('parts_site_header_artworks'); ?>

  <main class="contents addPdgT addPdgB">

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

    <div class="inner">
      <div class="sectionTitle center">
        <span class="eng futura">Works</span><h2 class="ja">撮影事例</h2>
      </div>

      <!-- タクソノミー 一覧 -->
      <ul class="tarms">
        <li>
          <a href="<?php echo home_url(); ?>/photo_works/">すべて</a></li>
        </li>
      <?php
        $current_term = $term;
        $terms = get_terms('works_category', array('hide_empty' => false));
        foreach ( $terms as $term ){
          if ($current_term == $term->slug) {
            echo '<li class="current"><a href="'.get_term_link($term->slug,'works_category').'">'.$term->name.'</a></li>';
          }else{
            echo '<li><a href="'.get_term_link($term->slug,'works_category').'">'.$term->name.'</a></li>';
          }
        }
        ?>
      </ul>


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
                    <a href="<?php the_permalink(); ?>">
                      <div class="meta">
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
                      <div class="image" class="fit-cover">
                        <?php if (has_post_thumbnail()) : ?>
                            <?php the_post_thumbnail(); ?>
                        <?php else : ?>
                            <img src="<?php bloginfo('template_url'); ?>/images/photograph/noimage.png" alt="noimage">
                        <?php endif ; ?>
                      </div>
                      <div class="texts">
                        
                        <h3 class="w_title"><?php the_title(); ?></h3>
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

            <!-- go to upsite -->
            <div class="btnWrap goto_up">
              <a href="<?php echo home_url(); ?>/photograph/" class="hvr-underline-from-left">PHOTOGRAPH PAGE</a>
            </div>

          </div>
        </div>
    </div>

    </div><!-- inner -->

  </main>

  <?php get_template_part('parts_site_footer_artworks'); ?>


<?php get_footer(); ?>
