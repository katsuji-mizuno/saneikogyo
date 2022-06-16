<?php get_header(); ?>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/contact.js"></script>

</head>

<body id="pageContact" class="black menu_dark">
  <?php get_template_part('parts_site_header'); ?>

  <main class="contents bg_gray addPdgT addPdgB">

    <!-- ぱんくず -->
    <div id="breadcrumb">
      <div class="inner">
        <ul class="breadlist">
          <li>
            <a href="<?php echo home_url(); ?>" class="hvr-underline-from-left">HOME</a>
          </li>
          <li>
            <span>お問い合わせ</span>
          </li>
        </ul>
      </div>
    </div>

    <div class="inner">
      <div class="sectionTitle center">
        <span class="eng futura">Contact</span><h2 class="ja">お問い合わせ</h2>
      </div>

      <div id="post_content">
        <div class="innerPC noMgnT noMgnB">
          <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>

              <?php the_content(); ?>

            <?php endwhile; ?>
          <?php endif; ?>
        </div>
      </div>

    </div><!-- inner -->

  </main>

  <?php get_template_part('parts_site_footer'); ?>


<?php get_footer(); ?>
