<?php get_header(); ?>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/archive.js"></script>
</head>

<body id="archiveDefault" >
  <?php get_template_part('parts_site_header'); ?>

    <main class="contents">
      <div class="bigTitle noto">
        <p class="eng">BLOG</p>
        <h1 class="ja">ブログ</h1>
      </div>


      <div class="section">      
        <div class="innerPC noMgnT noMgnB">

        <!--カテゴリ一覧-->
          <div class="cate_wrap">
            <ul class="catelist">
            <?php
            $args = array(
                'orderby' => 'slug',
                'order' => 'asc',
                'parent' => 0, // ← 'parent=0'
                'hide_empty' => false // ← 投稿記事が無い場合表示しないかどうか
            );
            $categories = get_categories($args);
            foreach($categories as $category) {
              echo '<li class="' . $category->slug . '"' . '><a href="'.get_category_link($category->term_id).'">'.$category->name.'</a></li>';
            }
            ?>
            </ul>
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

