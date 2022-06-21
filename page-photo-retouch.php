<?php get_header(); ?>
<!-- for Page -->
<!-- twentytwenty -->
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/twentytwenty.css" media="all"/>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/event.move.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/twentytwenty.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/retouch.js"></script>
</head>

<body id="pagePhotoRetouch" class="artworks white_head">

  <?php get_template_part('parts_site_header_artworks'); ?>

  <main class="contents addPdgT addPdgB bg_gray">


    <div class="box_title">

      <!-- ぱんくず -->
      <div class="inner">
        <div id="breadcrumb">
          <ul class="breadlist">
            <li>
              <a href="<?php echo home_url(); ?>" class="hvr-underline-from-left">HOME</a>
            </li>
            <li>
              <a href="<?php echo home_url(); ?>/creative/photograph/" class="hvr-underline-from-left">施工・竣工写真</a>
            </li>
            <li>
              <span>フォトレタッチ</span>
            </li>
          </ul>
        </div>

        <div class="sectionTitle center">
          <span class="eng futura">Photo Retouch</span><h2 class="ja">フォトレタッチ</h2>
        </div>
        <p class="lead"> 建築写真の加工・レタッチを行います。青空加工、電線・電柱等の不要物除去、窓の写り込み反射の消去、床合成などが可能です、お気軽にご相談ください。</p>

      </div><!-- inner -->
    </div><!-- box_title -->

    <div class="inner">
      <div class="section" id="beforeafter">
        <ul class="retouch">
          <li>
            <h2 class="subTitle align_center fadeFromBottom">基本補正</h2>
            <!-- <div class="images fadeFromBottom">
              <div class="image before">
                <img src="<?php bloginfo('template_directory'); ?>/images/retouch/basic_before_sp.jpg" alt="基本補正BEFORE">
              </div>
              <div class="image after">
                <img src="<?php bloginfo('template_directory'); ?>/images/retouch/basic_after_sp.jpg" alt="基本補正AFTER ">
              </div>
            </div> -->
            <div class="beforeafter">
              <img src="<?php bloginfo('template_directory'); ?>/images/retouch/basic_before_sp.jpg" class="js_image_switch" alt="基本補正BEFORE">
              <img src="<?php bloginfo('template_directory'); ?>/images/retouch/basic_after_sp.jpg" class="js_image_switch" alt="基本補正AFTER ">
            </div>
            <div class="texts fadeFromBottom">
              <p class="text noMgn">
              当社ではすべてのカットに対し、基本的な補正を「現像」という形で1枚1枚丁寧に施します。
              </p>
              <p class="text">
                <span class="point">POINT</span>上記の写真では階段奥に設置されたレリーフのハイライト部を抑えつつ全体の露出を適正に整え、0.1度の傾き補正、適切なシャープネス処理のほか、色かぶりの除去を丁寧に行い、建材本来の色味を再現しています。
              </p>
            </div>
          </li>
          <li>
            <h2 class="subTitle align_center fadeFromBottom">HDR処理</h2>
            <!-- <div class="images fadeFromBottom">
              <div class="image before">
                <img src="<?php bloginfo('template_directory'); ?>/images/retouch/hdr_before_sp.jpg" alt="HDR処理BEFORE">
              </div>
              <div class="image after">
                <img src="<?php bloginfo('template_directory'); ?>/images/retouch/hdr_after_sp.jpg" alt="HDR処理AFTER">
              </div>
            </div> -->
            <div class="beforeafter">
              <img src="<?php bloginfo('template_directory'); ?>/images/retouch/hdr_before_sp.jpg" class="js_image_switch" alt="HDR処理BEFORE">
              <img src="<?php bloginfo('template_directory'); ?>/images/retouch/hdr_after_sp.jpg" class="js_image_switch" alt="HDR処理AFTER ">
            </div>
            <div class="texts fadeFromBottom">
              <p class="text noMgn">
              明暗のギャップが激しいシーンでも、HDR処理を施すことで自然な仕上がりとなり、肉眼で見たままのリアルな描写を再現する事ができます。
              </p>
              <p class="text">
                <span class="point">POINT</span>上記の写真では浴室側の露出と外部の露出に大きな明暗差があるためHDR処理を行いました。弊社では専用のソフトを使用して、適切なカット数と露出設定で処理を施すことにより、より自然で階調豊かな写真に仕上げることを可能にしています。
              </p>
            </div>
          </li>
          <li>
            <h2 class="subTitle align_center fadeFromBottom">電線・電柱の除去</h2>
            <!-- <div class="images fadeFromBottom">
              <div class="image before">
                <img src="<?php bloginfo('template_directory'); ?>/images/retouch/ew1_before_sp.jpg" alt="電線・電柱の除去BEFORE">
              </div>
              <div class="image after">
                <img src="<?php bloginfo('template_directory'); ?>/images/retouch/ew1_after_sp.jpg" alt="電線・電柱の除去AFTER">
              </div>
            </div> -->
            <div class="beforeafter">
              <img src="<?php bloginfo('template_directory'); ?>/images/retouch/ew1_before_sp.jpg" class="js_image_switch" alt="基本補正BEFORE">
              <img src="<?php bloginfo('template_directory'); ?>/images/retouch/ew1_after_sp.jpg" class="js_image_switch" alt="基本補正AFTER ">
            </div>
            <div class="texts fadeFromBottom">
              <p class="text noMgn">
                建物に被ってしまう電線や電柱を除去することですっきりとした外観写真にすることが可能です。販促用で使用される場合には特にお勧めしております。
              </p>
              <p class="text">
                <span class="point">POINT</span>上記の写真では外壁だけではなく様々なものに重なっている電線も、最初から存在しなかったかのような仕上がりに修正しています。

              </p>
            </div>
          </li>
          <li>
            <h2 class="subTitle align_center fadeFromBottom">不要物の除去</h2>
           <!--  <div class="images fadeFromBottom">
              <div class="image before">
                <img src="<?php bloginfo('template_directory'); ?>/images/retouch/ut_before_sp.jpg" alt="不要物の除去BEFORE">
              </div>
              <div class="image after">
                <img src="<?php bloginfo('template_directory'); ?>/images/retouch/ut_after_sp.jpg" alt="不要物の除去AFTER">
              </div>
            </div> -->
            <div class="beforeafter">
              <img src="<?php bloginfo('template_directory'); ?>/images/retouch/ut_before_sp.jpg" class="js_image_switch" alt="不要物の除去BEFORE">
              <img src="<?php bloginfo('template_directory'); ?>/images/retouch/ut_after_sp.jpg" class="js_image_switch" alt="不要物の除去AFTER ">
            </div>
            <div class="texts fadeFromBottom">
              <p class="text noMgn">
                やむを得ず写り込んでしまう不要なものを除去することにより、引き渡し後や、工事中でも竣工直後の風景に修正する事ができます。
              </p>
              <p class="text">
                <span class="point">POINT</span>上記の写真では天候の関係で引き渡しが終わり、施設稼働後の外観撮影となったため、竣工写真としてふさわしくないものが写り込んでしまう状況での撮影となりましたが、問題となる不要物を除去することで竣工直後の状況を再現しています。

              </p>
            </div>
          </li>
          <li>
            <h2 class="subTitle align_center fadeFromBottom">空と日照の合成</h2>
            <!-- <div class="images">
              <div class="image before">
                <img src="<?php bloginfo('template_directory'); ?>/images/retouch/sky_before_sp.jpg" alt="空と日照の合成BEFORE">
              </div>
              <div class="image after">
                <img src="<?php bloginfo('template_directory'); ?>/images/retouch/sky_after_sp.jpg" alt="空と日照の合成AFTER">
              </div>
            </div> -->
            <div class="beforeafter">
              <img src="<?php bloginfo('template_directory'); ?>/images/retouch/sky_before_sp.jpg" class="js_image_switch" alt="空と日照の合成BEFORE">
              <img src="<?php bloginfo('template_directory'); ?>/images/retouch/sky_after_sp.jpg" class="js_image_switch" alt="空と日照の合成AFTER ">
            </div>
            <div class="texts fadeFromBottom">
              <p class="text noMgn">
                外観撮影は天候に大きく影響され、時には日程調整ができない案件がありますが、空や日照状況を合成することでドラマチックな写真に仕上げることが可能です。
              </p>
              <p class="text">
                <span class="point">POINT</span>上記の写真では当日が悪天候で曇天でしたが、引き渡し直前の露天風呂という特殊な状況でその日しか撮影ができなかったため、クライアントと相談の上壮観な夕景に仕上げました。
              </p>
            </div>
          </li>
          <li>
            <h2 class="subTitle align_center fadeFromBottom">その他の合成</h2>
            <!-- <div class="images fadeFromBottom">
              <div class="image before">
                <img src="<?php bloginfo('template_directory'); ?>/images/retouch/composition_before_sp.jpg" alt="その他の合成BEFORE">
              </div>
              <div class="image after">
                <img src="<?php bloginfo('template_directory'); ?>/images/retouch/composition_before_pc.jpg" alt="その他の合成AFTER">
              </div>
            </div> -->
            <div class="beforeafter">
              <img src="<?php bloginfo('template_directory'); ?>/images/retouch/composition_before_sp.jpg" class="js_image_switch" alt="その他の合成BEFORE">
              <img src="<?php bloginfo('template_directory'); ?>/images/retouch/composition_after_pc.jpg" class="js_image_switch" alt="その他の合成AFTER ">
            </div>
            <div class="texts fadeFromBottom">
              <p class="text noMgn">
                竣工写真の撮影では工期や天候等、様々な要因で設備や意匠などが万全な状態を迎える前に撮影が必要となる場合がありますが、完全な状態に修正することでより高いクオリティの写真に昇華させることができます。
              </p>
              <p class="text">
                <span class="point">POINT</span>上記の写真では給湯設備が稼働前のため、露天風呂の湯が張られていない状態での撮影でしたが、クライアントの要望により湯で満たされた状態にするため、水面の写り込みや、水中の状況、表面張力の具合などを再現し、リアルな写真に修整しました。
              </p>
            </div>
          </li>
        </ul>
      </div>

    </div>

    <!-- go to upsite -->
    <div class="btnWrap goto_up">
      <a href="<?php echo home_url(); ?>/photograph/" class="hvr-underline-from-left">PHOTOGRAPH HOME</a>
    </div>




  </main>







  <?php get_template_part('parts_site_footer_artworks'); ?>


<?php get_footer(); ?>
