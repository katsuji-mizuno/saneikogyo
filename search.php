<?php get_header(); ?>

</head>

<body id="pageSearch" >
  <?php get_template_part('parts_site_header'); ?>

    <main class="contents">

      <div class="bigTitle noto">
        <p class="eng">SEARCH</p>
        <h1 class="ja">検索</h1>
      </div>

      <div class="section">      
        <div class="innerPC noMgnT noMgnB">
          <div class="search_query">
            <p class="search_key">「<?php the_search_query(); ?>」の検索</p>
            <p class="search_count"><span class="bold"><?php echo $wp_query->found_posts; ?></span>Results</p>
          </div>

          <?php $paged = get_query_var('paged'); ?>
            <?php if(have_posts()): ?>

              <div class="lists">
                <ul class="topics">
                  <?php while ( have_posts() ) : the_post(); ?>
                  <?php
                    //サムネイル
                    $thumb = get_template_directory_uri().'/images/common/no_image.jpg';
                    if (has_post_thumbnail()) :
                      $thumb = get_the_post_thumbnail_url( get_the_ID(), 'large' );
                    endif;
                  ?>
                  <li>
                    <a href="<?php the_permalink(); ?>">
                      <div class="image">
                        <img src="<?php echo $thumb; ?>" class="fit-cover" alt="">
                          <?php
                          $categories = get_the_category();
                          if($categories) {
                            foreach($categories as $category){
                              echo '<span class="cate">' . $category->name . '</span>';
                            }
                          }
                          ?>
                      </div>
                      <div class="texts">
                        <h2 class="title"><?php the_title() ;?></h2>
                      </div>
                    </a>
                    
                    <!-- <div class="body"><?php the_excerpt() ;?></div> -->
                  </li>
                  <?php endwhile; ?>
                </ul>
              </div>
              <div class="pagination">
                <?php wp_pagenavi(); ?>
              </div>

            <?php else : ?>
              <p class="noPost">記事はありません。</p>
            <?php endif; ?>
          </div>
        
        </div>

        
      <!--COIN CHOICE-->
      <?php get_template_part('parts_coin_choice') ; ?>


      <!--Follow Us-->
      <?php get_template_part('parts_follow_us') ; ?>


      <!--パンくず-->
      <div id="breadcrumb">
        <div class="inner noMgnT noMgnB">
          <ul class="breadlist">
            <li><a href="<?php echo home_url(); ?>" class="hvr-">HOME</a></li>
            <li><span>BLOG</span></li>
          </ul>
        </div>
      </div>


      <!--SNS-->
      <?php get_template_part('parts_sns_foot') ; ?>


    </main>

    <?php get_template_part('parts_site_footer'); ?>

<?php get_footer(); ?>

