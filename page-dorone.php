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
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/dorone.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/photo_works.js"></script>
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/drone.css" media="all"/>


</head>

<body id="pageDorone"  class="artworks">

  <?php get_template_part('parts_site_header_artworks'); ?>

  <main class="contents bg_gray">

    <!-- タイトル -->
    <div id="mv">
      <img src="<?php bloginfo('template_directory'); ?>/images/dorone/mv_sp.jpg" class="js_img_change_tb fit-cover" alt="">
      <div class="mainTitle">
        <span class="eng"><img src="<?php bloginfo('template_directory'); ?>/images/dorone/title_text.svg" class="js_img_change_tb" alt="about"></span>
        <h1 class="ja">ドローン空撮</h1>
        <p class="lead" style="text-align: center;">新しい感動との出会い</p>
      </div>
      <a href="#movie" class="top_scroll">
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
    <div class="section noPdgT" id="movie">
      <div class="inner">
        <div class="movie_wrap">
          <iframe width="560" height="315" src="https://www.youtube.com/embed/KP_XnoNVcBc"  allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
      </div>
    </div>


    <!-- 撮影事例 -->
    <div class="section" id="works">
      <div class="rel">
        <div class="inner">
          <div class="cols">
            <div class="col">
              <div class="sectionTitle fadeFromBottom">
                <span class="eng futura">Works</span><h2 class="ja">撮影事例</h2>
              </div>
            </div>
            <div class="col">
              <!-- <p class="text">
                こちらはダミーテキストです。こちらはダミーテキストです。こちらはダミーテキストです。こちらはダミーテキストです。こちらはダミーテキストです。こちらはダミーテキストです。こちらはダミーテキストです。
              </p> -->
            </div>
          </div>

          <!-- スライダー-->
          <div class="w_slideWrap">


           <?php

            $args = array(
                'post_type' => 'photo_works',
                'posts_per_page' => $tmpPostPerPage,
                'paged' => $paged,
            ); ?>
            <?php query_posts( $args ); ?>
              <?php if ( have_posts() ) :  ?>


            <ul id="works_slide" class="fadeFromBottom">

              <?php while ( have_posts() ) : the_post(); ?>
              <li>
                <!-- <a href="<?php the_permalink(); ?>"> -->
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
                    <h3 class="w_title"><?php the_title(); ?></h3>
                  </div>
                </a>
              </li>
              <?php endwhile;?>
            </ul>

            <div class="btnWrap">
              <a href="<?php echo home_url(); ?>/photo_works/" class="btn_view_more svg-circle-change">
                <span class="link_text">VIEW MORE</span>
                <?php drawIcon('black',500); //parts_link_icon ?>
              </a>
            </div>


            <?php endif; ?>
            <?php wp_reset_query(); ?>
          </div><!-- w_slideWrap -->


        </div>
      </div>
    </div>




    <!-- 価格 -->
    <div class="section noPdgB" id="price">
      <div class="inner">
        <div class="cols">
          <div class="sectionTitle">
            <span class="eng futura">Price List</span><h2 class="ja">価格</h2>
          </div>
          <div class="text">
            日本全国一律で、静止画、静止画＋動画、映像制作の３つのプランをご用意しています。<br class="nonSP">お客様のご要望をお聞きしながら、安心価格で空撮サービスをご提供します。
          </div>
        </div>
        <ul class="drone_pricelist">
          <li>
            <div class="label"><span>プラン名</span></div>
            <div class="data align_center">
                <img src="<?php bloginfo('template_directory'); ?>/images/dorone/price1_sp.png" class="js_img_change" alt="静止画+動画プラン">
              <p class="caption">静止画or動画撮影プラン</p>
            </div>
            <div class="data align_center">
                <img src="<?php bloginfo('template_directory'); ?>/images/dorone/price2_sp.png" class="js_img_change" alt="映像制作プラン">
              <p class="caption">映像制作プラン</p>
            </div>
          </li>
          <li>
            <div class="label"><span>料金(税込)</span></div>
            <div class="data align_center">
              <p class="price">60,000円〜</p>
            </div>
            <div class="data align_center">
              <p class="price">200,000円〜</p>
            </div>
          </li>
          <li>
            <div class="label"><span>業務内容</span></div>
            <div class="data">
              <p class="text">
              お好みのアングルで静止画もしくは動画を撮影します。
              </p>
            </div>
            <div class="data">
              <p class="text">
              企業様や団体様のプロモーションムービーを撮影し、BGMや字幕を挿入した映像を製作します。お客様のご要望に応じた編集を行い、イメージ通りの作品をお届けいたします。
              </p>
            </div>
          </li>
        </ul>
      </div>
    </div>


    <!-- スペック -->
    <div class="section" id="spec">
      <div class="inner">
        <h3 class="sub_title">お渡しする動画(画像)データのスペック</h3>
        <table>
          <tr>
          <td class="tbl_tit">静止画</td>
          <td>サイズ：JPEG5472×3078ピクセル（約6MB）　DNG5472×3078ピクセル（約40MB）</td>
          </tr>
          <tr>
          <td class="tbl_tit" rowspan="4">動画</td>
          <td>解像度：3840×2160ピクセル（4K）</td>
          </tr>
          <tr>
          <td>フレームレート：29.97fps</td>
          </tr>
          <tr>
          <td>コーデック：H264</td>
          </tr>
          <tr>
          <td>フォーマット：MP4</td>
          </tr>
        </table>
      </div>
    </div>


    <!-- 保険 -->
    <div class="section bg_black" id="insurance">
      <div class="inner">
        <div class="cols">
          <div class="sectionTitle color_white">
            <span class="eng futura">Insurance</span><h2 class="ja">保険のご案内</h2>
          </div>
          <div class="text color_white">
            ドローンの運用にあたり、安全確保には最新の注意を払っていますが、万が一の場合に備えて担当する全てのオペレーターと機体が賠償保険に加入しています。
          </div>
        </div>
        <ul class="ins_list">
          <li>
            <div class="label">
              対人最大10億円
            </div>
            <div class="data">
            万が一事故が発生してしまい、損害賠償などを請求された場合、最大10億円までの補償が行われます。
            </div>
          </li>
          <li>
            <div class="label">
              対物最大10億円
            </div>
            <div class="data">
            万が一事故が発生してしまい、他者の所有物などを破損させてしまった場合、最大10億円までの補償が行われます。
            </div>
          </li>
        </ul>
        <div class="btnWrap">
          <a href="<?php echo home_url(); ?>/contact/" class="btn_contact svg-circle-change text_min">
            <span class="link_text">ドローン空撮の保険の詳細はお問い合わせください</span>
            <?php drawIcon('white',500); //parts_link_icon ?>
          </a>
        </div>
      </div>
    </div>

  </main>

  <?php get_template_part('parts_works_modal'); ?>

  <?php get_template_part('parts_site_footer_artworks'); ?>

<?php get_footer(); ?>
