  <!--parts_site_header.php-->
  <?php get_template_part('parts_link_icon'); ?>
  <div id="loader-bg" class="black">
    <div class="loader">
      <span class="loader1">
        <img src="<?php bloginfo('template_directory'); ?>/images/common/loading_icon_artworks.svg" alt="ローディング">
      </span>
    </div>
   <!-- <p class="loadingText">Loading<span class="count" data-num="100">0</span>%</p> -->
  </div>

  <!--loader-bg end-->

  <div id="loadingWrap">

    <header id="header" class="header">
      <div class="inner_header">
        <ul class="gmenu">
          <li>
            <div class="logo_h">
              <a href="<?php echo home_url(); ?>/creative/">
                <?php if (is_page('photograph') || is_page('dorone')) : ?>
                  <img class="js_logo_img" src="<?php bloginfo('template_directory'); ?>/images/common/logo_artworks.png" alt="ArtWorks presented by 株式会社サンエイ興業 ">
                <?php else: ?>
                  <img class="js_logo_img" src="<?php bloginfo('template_directory'); ?>/images/common/logo_artworks_black.png" alt="ArtWorks presented by 株式会社サンエイ興業 ">
                <?php endif; ?>
              </a>
            </div>
          </li>
          <li>
            <div id="nav_cover"></div>
            <nav id="menu">

              <div class="logo_h">
                <a href="<?php echo home_url(); ?>">
                  <img class="js_logo_img" src="<?php bloginfo('template_directory'); ?>/images/common/logo_artworks.png" alt="ArtWorks presented by 株式会社サンエイ興業 ">
                </a>
              </div>

              <ul class="g_top_menu">
                
                <li class="lv1 bound">
                  <a href="<?php echo home_url() ?>/creative/photograph/" ><span class="eng futura" data-text="Photograph">Photograph</span><span class="ja" data-text="建築・竣工写真">建築・竣工写真</span></a>
                  <ul class="g_sub_menu">
                    <li class="lv2">
                      <a href="<?php echo home_url() ?>/creative/photograph#features" ><span class="eng futura" data-text="Features">Features</span><span class="ja" data-text="4つの特長">4つの特長</span></a>
                    </li>
                    <li class="lv2">
                      <a href="<?php echo home_url() ?>/photo_works/" ><span class="eng futura" data-text="Works">Works</span><span class="ja" data-text="撮影事例">撮影事例</span></a>
                    </li>
                    <li class="lv2">
                      <a href="<?php echo home_url() ?>/creative/photograph/photobook/" ><span class="eng futura" data-text="Photo Book">Photo Book</span><span class="ja" data-text="フォトブック">フォトブック</span></a>
                    </li>
                    <li class="lv2">
                      <a href="<?php echo home_url() ?>/creative/photograph/photo-retouch/" ><span class="eng futura" data-text="Photo-Retouch">Photo Retouch</span><span class="ja" data-text="フォトレタッチ">フォトレタッチ</span></a>
                    </li>
                    <li class="lv2">
                      <a href="<?php echo home_url() ?>/contact/"><span class="eng futura" data-text="Contact">Contact</span><span class="ja" data-text="お問い合わせ">お問い合わせ</span></a>
                    </li>
                    <li class="lv2">
                      <a href="<?php echo home_url() ?>/creative/photograph/delivery/" ><span class="eng futura" data-text="Delivery">Delivery</span><span class="ja" data-text="納品について">納品について</span></a>
                    </li>
                  </ul>
                </li>

                <li class="lv1 bound">
                  <a href="<?php echo home_url() ?>/creative/dorone/" ><span class="eng futura" data-text="Drone aerial photography">Drone aerial photography</span><span class="ja" data-text="ドローン空撮">ドローン空撮</span></a>
                  <ul class="g_sub_menu">
                    <li class="lv2">
                      <a href="<?php echo home_url() ?>/creative/dorone#price" ><span class="eng futura" data-text="Price List">Price List</span><span class="ja" data-text="価格">価格</span></a>
                    </li>
                    <li class="lv2">
                      <a href="<?php echo home_url() ?>/creative/dorone#cancel" ><span class="eng futura" data-text="CancelPolicy">CancelPolicy</span><span class="ja" data-text="キャンセルポリシー">キャンセルポリシー</span></a>
                    </li>
                    <li class="lv2">
                      <a href="<?php echo home_url() ?>/creative/dorone#insurance"><span class="eng futura" data-text="Insurance">Insurance</span><span class="ja" data-text="保険のご案内">保険のご案内</span></a>
                    </li>
                    <li class="lv2 long">
                      <a href="<?php echo home_url() ?>/creative/dorone#permission"><span class="eng futura" data-text="Application For Permission">Application For Permission</span><span class="ja" data-text="許可申請について">許可申請について</span></a>
                    </li>
                  </ul>
                </li>
                

                <li class="lv1">
                  <a href="<?php echo home_url() ?>">
                    <span class="eng"><img class="js_logo_img" src="<?php bloginfo('template_directory'); ?>/images/common/logo_aw_menu.png" alt="株式会社サンエイ興業"></span>
                    <span class="ja">サンエイ興業ホームページ</span>
                  </a>
                </li>

              </ul>
              
            </nav>
          </li>
        </ul>
      </div>
      <a href="javascript:void(0)" id="btnMenu">
        <span></span><span></span><span></span>
      </a>
    </header>
    

  <!--parts_site_header.php end-->