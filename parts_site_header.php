  <!--parts_site_header.php-->
  <?php get_template_part('parts_link_icon'); ?>
  <div id="loader-bg">
    <div class="loader">
      <span class="loader1">
        <img src="<?php bloginfo('template_directory'); ?>/images/common/loading_icon.svg" alt="ローディング">
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
              <a href="<?php echo home_url(); ?>">
                <?php if (is_post_type_archive('emp_voice') || is_singular( 'emp_voice' )) : ?>
                  <img class="js_logo_img" src="<?php bloginfo('template_directory'); ?>/images/common/logo_default.png" alt="株式会社サンエイ興業">
                <?php else : ?>
                  <img class="js_logo_img" src="<?php bloginfo('template_directory'); ?>/images/common/logo_white.png" alt="株式会社サンエイ興業">
                <?php endif; ?>
              </a>
            </div>
          </li>



          <li>
            <div id="nav_cover"></div>
            <nav id="menu">


              <ul class="g_top_menu">
                <li class="lv1 bound">
                  <a href="<?php echo home_url() ?>/"><span class="eng futura" data-text="Home">Home</span><span class="ja" data-text="ホーム">ホーム</span></a>
                </li>
                <li class="lv1 bound">
                  <a href="<?php echo home_url() ?>/about/" ><span class="eng futura" data-text="About">About</span><span class="ja" data-text="会社概要">会社概要</span></a>
                </li>
                <li class="lv1 bound">
                  <a href="<?php echo home_url() ?>#top_feature" ><span class="eng futura" data-text="Our Feature">Our Feature</span><span class="ja" data-text="特徴">特徴</span></a>
                </li>
                <li class="lv1 bound">
                  <a href="<?php echo home_url() ?>#top_service" ><span class="eng futura" data-text="Service">Service</span><span class="ja" data-text="事業内容">事業内容</span></a>
                  <ul class="g_sub_menu">
                    <li class="lv2">
                      <a href="<?php echo home_url() ?>/architecture/" ><span class="eng futura" data-text="Architecture">Architecture</span><span class="ja" data-text="建設事業">建設事業</span></a>
                    </li>
                    <li class="lv2">
                      <a href="<?php echo home_url() ?>/creative/" ><span class="eng futura" data-text="Creative">Creative</span><span class="ja" data-text="クリエイション事業">クリエイション事業</span></a>
                    </li>
                  </ul>
                </li>

                <li class="lv1 bound">
                  <a href="<?php echo home_url() ?>/recruit/" ><span class="eng futura" data-text="Recruit">Recruit</span><span class="ja" data-text="採用情報">採用情報</span></a>
                  <ul class="g_sub_menu">
                    <li class="lv2">
                      <a href="<?php echo home_url() ?>/recruit#message" ><span class="eng futura" data-text="Message">Message</span><span class="ja" data-text="代表メッセージ・募集要項">代表メッセージ・募集要項</span></a>
                    </li>
                    <li class="lv2">
                      <a href="<?php echo home_url() ?>/emp_voice/" ><span class="eng futura" data-text="Voice">Voice</span><span class="ja" data-text="先輩社員の声">先輩社員の声</span></a>
                    </li>
                  </ul>
                </li>
                <li class="lv1 bound">
                  <a href="<?php echo home_url() ?>/contact/"><span class="eng futura" data-text="Contact">Contact</span><span class="ja" data-text="お問い合わせ">お問い合わせ</span></a>
                </li>
                <li class="lv1 bound">
                  <a href="<?php echo home_url() ?>/about#access"><span class="eng futura" data-text="Access">Access</span><span class="ja" data-text="アクセス">アクセス</span></a>
                </li>

                <li class="lv1 bound">
                  <ul class="g_sns_menu">
                    <li class="lv2 btn_fb">
                      <a href="https://www.facebook.com/sanei.kogyo.official/" target="_blank" rel="noopener noreferrer">Facebook</a>
                    </li>
                    <li class="lv2 btn_tw">
                      <a href="https://mobile.twitter.com/sanei_official_" target="_blank" rel="noopener noreferrer">Twitter</a>
                    </li>
                    <li class="lv2 btn_ig">
                      <a href="https://www.instagram.com/sanei_kogyo_official" target="_blank" rel="noopener noreferrer">Instagram</a>
                    </li>
                  </ul>

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