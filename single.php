<?php get_header(); ?>
<?php $category = get_the_category(); ?>

</head>

<body id="singleDefault">
  <?php get_template_part('parts_site_header'); ?>

  <main class="contents">
    <div class="bigTitle">
      <p class="eng">BLOG</p>
      <p class="ja">ブログ</p>
    </div>


    <div id="post_content">
      <div class="section">      
        <div class="innerPC noMgnT noMgnB">

          <div class="layout">


            <article class="p_article">
              <?php if (have_posts()) : ?>
              <?php while (have_posts()) : the_post(); ?>

                <div class="post_meta">
                  <p class="date"><?php echo get_the_date('Y年m月d日');  ?></p>
                  <p class="cate"><?php echo $category[0]->name; ?></p>
                </div>

                <h1 class="post_title"><?php the_title() ; ?></h1>
                <div class="post_body">
                  <?php the_content(); ?>
                </div>

              <?php endwhile; ?>
              <?php endif; ?>
            </article>


            <aside class="aside_menu">
              <p class="aside_menu_title">CATEGORY</p>
              <ul class="aside_entries">
              <?php
              $args = array(
                  'orderby' => 'slug',
                  'order' => 'asc',
                  'parent' => 0, // ← 'parent=0'
                  'hide_empty' => false // ← 投稿記事が無い場合表示しないかどうか
              );
              $categories = get_categories($args);
              foreach($categories as $category) {
                echo '<li class="' . $category->slug . '"' . '><a href="'.get_category_link($category->term_id).'">'.$category->name.'（' . $category->count .'）</a></li>';
              }
              ?>
              </ul>
            </aside>


          </div><!--layout-->

        </div><!--innner-->
      </div><!--section-->
    </div>


      <!--COIN CHOICE-->
      <?php get_template_part('parts_coin_choice') ; ?>

      <!--Follow Us-->
      <?php get_template_part('parts_follow_us') ; ?>


      <!--パンくず-->
      <?php $category = get_the_category(); ?>
      <div id="breadcrumb">
        <div class="inner noMgnT noMgnB">
          <ul class="breadlist">
            <li><a href="<?php echo home_url(); ?>" class="hvr-underline-from-left">HOME</a></li>
            <li><a href="<?php echo home_url(); ?>/blog/" class="hvr-underline-from-left">BLOG</a></li>
            <li><a href="<?php echo home_url(); ?>/blog/<?php echo $category[0]->slug; ?>/" class="hvr-underline-from-left"><?php echo $category[0]->name; ?></a></li>
            <li><span><?php the_title() ; ?></span></li>
          </ul>
        </div>
      </div>


      <!--SNS-->
      <?php get_template_part('parts_sns_foot') ; ?>


    </main>

    <?php get_template_part('parts_site_footer'); ?>


<?php get_footer(); ?>
