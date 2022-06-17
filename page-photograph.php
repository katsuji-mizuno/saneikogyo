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
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/photograph.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/photo_works.js"></script>
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/creative.css" media="all"/>

</head>

<body id="pagePhotograph"  class="artworks">

  <?php get_template_part('parts_site_header_artworks'); ?>
  <main class="contents bg_black">

    <!-- タイトル -->
    <div id="mv">
      <img src="<?php bloginfo('template_directory'); ?>/images/photograph/mv_sp.jpg" class="js_img_change_tb fit-cover" alt="">
      <div class="mainTitle">
        <span class="eng"><img src="<?php bloginfo('template_directory'); ?>/images/photograph/title_text.svg" class="js_img_change_tb" alt="about"></span>
        <h1 class="ja">建築・竣工写真</h1>
      </div>
      <a href="#features" class="top_scroll">
        <img src="<?php bloginfo('template_directory'); ?>/images/common/scroll_white.svg" alt="scroll">
      </a>
    </div>

    <!-- ぱんくず -->
    <div id="breadcrumb">
      <div class="inner">
        <ul class="breadlist">
          <li>
            <a href="<?php echo home_url(); ?>/creative/" class="hvr-underline-from-left">HOME</a>
          </li>
          <li>
            <span>建築・竣工写真</span>
          </li>
        </ul>
      </div>
    </div>

    <!-- 特徴 -->
    <div class="section" id="features">
        <div class="features_border">
          <div class="feature_tit">
            <div class="sectionTitle fadeFromBottom ">
              <span class="eng futura">Feature</span><h2 class="ja">特長</h2>
            </div>
          </div>
          <div class="features_text_wrap">
            <div class="features_text">
              <h3>その建物の最も美しい瞬間を切り取る。</h3>
              竣工写真は、建物が完成したその瞬間の一度きりだけ撮影する事ができる、とても大切な写真です。<br />
              サンエイアートワークスでは、建築主様の大切な建物の最も美しい瞬間を、意匠に合わせて1カットずつ丁寧に撮影します。<br />
              また、撮影した写真を納品先のお客様には可能な限り、制限なく利用して頂きたいと考え、<br />
              著作権の取り扱いにも柔軟に対応いたします。詳しくは<a href="">こちら</a>をご覧ください。
            </div>
          </div>
        </div>
    </div>


    <!-- 撮影事例 -->
    <div class="section" id="works">
      <div class="rel">
        <div class="inner">

            <div class="sectionTitle fadeFromBottom ">
              <span class="eng futura">Project</span><h2 class="ja">撮影実績</h2>
            </div>

          <div class="works_images">

           <?php

            $args = array(
                'post_type' => 'photo_works',
                'posts_per_page' => 4,
                'paged' => $paged,
            ); ?>
            <?php query_posts( $args ); ?>
              <?php if ( have_posts() ) :  ?>


            <ul class="fadeFromBottom">

              <?php while ( have_posts() ) : the_post(); ?>
              <li>
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
                            echo  $term->name ;
                          }
                        }else{
                          echo 'なし';
                        }
                      ?>
                    </div>
                  </div>
                </a>
              </li>
              <?php endwhile;?>
            </ul>

            <div class="btnWrap">
              <a href="<?php echo home_url(); ?>/photo_works/" class="btn_view_more svg-circle-change">
                <span class="link_text">VIEW MORE</span>
                <?php drawIcon('white',500); //parts_link_icon ?>
              </a>
            </div>

            <?php endif; ?>
            <?php wp_reset_query(); ?>
          </div><!-- w_slideWrap -->


        </div>
      </div>
    </div>


    <!-- フォトブック -->
    <div class="section" id="photobook">
      <div class="inner">


        <div class="cols">
          <div class="texts">
            <div class="sectionTitle fadeFromBottom">
              <span class="eng futura">Photo book</span><h2 class="ja">フォトブック</h2>
            </div>
            <p class="text">
              <div class="fadeFromRight">
                当社フォトブックは印刷解像度2,400×1,200dpiを誇るCanon製最高級プリンターによる印刷で製作。立体感と透明感をリアルに表現し、外壁材やクロスなどの建材のデティールや、色の再現性など、高画質・高精細の美しさが魅力です。また、サイズ展開も豊富なためバリエーションに富んだフォトブックを製作する事ができます。
              </div>
            </p>
            <div class="btnWrap">
              <dif class="fadeFromBottom">
                <a href="<?php echo home_url(); ?>/creative/photograph/photobook/" class="btn_read_more svg-circle-change">
                  <span class="link_text">READ MORE</span>
                  <?php drawIcon('white',500); //parts_link_icon ?>
                </a>
              </dif>
            </div>
          </div>
          <div class="image">
            <div class="fadeFromLeft">
              <img src="<?php bloginfo('template_directory'); ?>/images/photograph/photobook_sp.jpg" class="js_img_change" alt="photobook">
            </div>
          </div>
        </div>
      </div>
    </div>


    <!-- フォトレタッチ -->
    <div id="retouch">
      <div class="bg_sp">
        <div class="inner">
          <div class="bg_pc">
            <div class="texts section">
              <div class="sectionTitle white align_center fadeFromBottom">
                <span class="eng futura">Photo Retouch</span><h2 class="ja">画像修正</h2>
              </div>
              <p class="text lead fadeFromBottom">
                当社ではお客様のニーズにお応えできるよう各種レタッチを行っております。<br />専属のレタッチャーによるハイクオリティーなレタッチを行うことで、宣材写真としての付加価値をプラスすることができます。
              </p>
              <div class="btnWrap">
                <div class="fadeFromBottom">
                  <a href="<?php echo home_url(); ?>/creative/photograph/photo-retouch/" class="btn_read_more white svg-circle-change">
                    <span class="link_text">READ MORE</span>
                    <?php drawIcon('white',500); //parts_link_icon ?>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


    <!-- お渡しするデータの詳細 -->

    <div id="awlinks">
      <div class="innerPC">
        <div class="sectionTitle fadeFromBottom">
          <span class="eng futura">Detail of delivery Deta</span><h2 class="ja">お渡しするデータの詳細</h2>
        </div>
        <div class="data_column">
          <div class="high">
            <h3>JPGハイレゾリューション</h3>
            <div class="data_column_text">
              <p>長辺：約8,000ピクセル/600dpi(最大)<br />
              パンフレット・雑誌・サイン(看板)などにご利用いただけます。</p>
              <span>■RAWデータの提供はできかねます。<br />■PSD・TIFF形式をご希望の際はご相談ください。</span>
            </div>
          </div>
          <div class="standard">
            <h3>JPGスタンダード</h3>
            <div class="data_column_text">
              <p>
                長辺：約2,000ピクセル/250dpi<br />
                SNSやウェブサイト掲載用にご利用いただけます。<br />
                1カットあたり約1.2MB～2.5MB程度となります。
              </p>
            </div>
          </div>
        </div>

        <div class="contact">
          <div class="fadeFromLeft">
            <a href="<?php echo home_url(); ?>/contact/" class="contact">
              <div class="sectionTitle white align_center">
                <span class="eng futura">Contact</span><h2 class="ja">お問い合わせ</h2>
              </div>
              <?php drawIcon('black',500); //parts_link_icon ?>
            </a>
          </div>
        </div>
      </div>
    </div>

  </main>



  <?php get_template_part('parts_works_modal'); ?>

  <?php get_template_part('parts_site_footer_artworks'); ?>

<?php get_footer(); ?>
