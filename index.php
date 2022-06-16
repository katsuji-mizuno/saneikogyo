<?php get_header(); ?>
<!-- slider -->
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/slick/slick.css" media="all"/>
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/slick/slick-theme.css" media="all"/>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/slick/slick.min.js"></script>


<!-- for Page -->

<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/home.css" media="all"/>
<script src="<?php bloginfo('template_directory'); ?>/js/smoothscroll.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/intersection-observer.js"></script>

<!-- <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/home.js"></script> 動作が不安定のため下に記述あり -->
 
</head>

<body id="pageHome" class="top">

  <?php get_template_part('parts_site_header'); ?>

    <main class="contents">

      <div class="fullPageScroll">
        <!-- <a id="top_scroll" href="javascript:void(0)" data-href="#top_about1" class="top_scroll">
          <img src="<?php bloginfo('template_directory'); ?>/images/common/scroll_white.svg" alt="scroll">
        </a> -->

        <!-- メインビジュアル -->
        <section id="top_mv" class="panel top_mv" data-logo-sp="white" data-logo-pc="white" data-pagenation="white"  data-menu-sp="white" data-menu-pc="white">
          <div class="panel_ani animate view">
            <ul id="slide">
              <li>
                <span></span>
              </li>
              <li>
                <span></span>
              </li>
              <li>
                <span></span>
              </li>
              <li>
                <span></span>
              </li>
              <li>
                <span></span>
              </li>
              <li>
                <span></span>
              </li>
              <li>
                <span></span>
              </li>
              <li>
                <span></span>
              </li>
            </ul>
            <div class="panel_inner">
              <div class="top_big_title ">
                <span class="eng futura">Draw future</span><span class="ja">測量で未来を描く</span>
              </div>
            </div>
            <div id="mvSubMenu">
              <ul class="subMenus">
                <li>
                  <a href="#top_service" class="futura">SERVICE</a>
                </li>
                <li>
                  <a href="<?php echo home_url(); ?>/recruit/" class="futura">RECRUIT</a>
                </li>
              </ul>
            </div>
          </div>
          <a href="javascript:void(0)" data-href="#top_about" class="top_scroll">
            <img src="<?php bloginfo('template_directory'); ?>/images/common/scroll_white.svg" alt="scroll">
          </a>
          
        </section>

        <!-- 会社概要 -->
        <section id="top_about" class="panel top_about animate" data-logo-sp="default" data-logo-pc="white" data-pagenation="dark" data-menu-sp="dark" data-menu-pc="dark">
          <div class="panel_ani animate">
            <div class="pc_cols">
              <div class="box_img forPC">
                <img src="<?php bloginfo('template_directory'); ?>/images/home/about_photo_pc.jpg" class="fit-cover" alt="">
              </div>
              <div class="box_text">
                <div class="panel_inner">
                  <div class="top_big_title">
                    <span class="eng futura">About</span><h2 class="ja">会社概要</h2>
                  </div>
                  <p class="text_mid">
                    数百億円規模のビッグプロジェクトを<br class="nonSP inline">数多く担当
                  </p>
                  <p class="text_min">
                    当社は正確かつ迅速なサービスで業界最大手のゼネコン様からも<br class="nonSP inline">厚い信頼を頂いており、数百億円規模のビッグプロジェクトも<br class="nonSP inline">数多く担当しています。
                  </p>

                  <div class="btnWrap">
                    <a href="<?php echo home_url(); ?>/about/" class="btn_read_more svg-circle-change">
                      <span class="link_text">READ MORE</span>
                      <?php drawIcon('navy',500); //parts_link_icon ?>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            
          </div><!-- panel_ani -->
          <a href="javascript:void(0)" data-href="#top_feature" class="top_scroll">
            <img src="<?php bloginfo('template_directory'); ?>/images/common/scroll_default.svg" alt="scroll">
          </a>
        </section>

        <!-- 選ばれる理由 -->
        <section id="top_feature" class="panel top_feature" data-logo-sp="white" data-logo-pc="white" data-pagenation="white" data-menu-sp="white" data-menu-pc="white">

          <div class="panel_ani animate">


            <ul class="f_panels">
              <!-- Our feature -->
              <li>
                <div class="pc_cols">
                  <div class="box_text">
                    <div class="panel_inner">
                      <div class="top_big_title">
                        <span class="eng futura">Our<br>Features</span><h2 class="ja">選ばれる理由</h2>
                      </div>
                    </div>
                  </div>
                  <div class="box_img nonSP">
                    <img src="<?php bloginfo('template_directory'); ?>/images/home/feature_top_photo_sp.jpg" class="fit-cover js_img_change_tb" alt="">
                  </div>
                </div>
              </li>
              <!-- technology -->
              <li>
                <div class="pc_cols">
                  <div class="box_text">
                    <div class="panel_inner">
                      <h3 class="top_image_title">
                       <img src="<?php bloginfo('template_directory'); ?>/images/home/feature_technology.svg" alt="technology">
                      </h3>
                      <p class="text_mid">
                        先端技術で精度の高い測量と<br>
                        スムーズな施工を実現
                      </p>
                      <p class="text_min">
                        3Dレーザースキャナ―を用いた三次元計測や、トータルステーションとCADソフトを連動させた先端技術を駆使することで精度管理が困難な現場でも精度の高い施工を行うことができます。近年の建築現場では三次元的な施工がスタンダードとなり、図面のやり取りは紙から電子データに移行している中、当社では全担当者が現場でPCを用いてCADデータをリアルタイムに共有して精度管理を行うため、シームレスに高精度な施工を高い次元で実現します。
                      </p>
                    </div>
                  </div>
                  <div class="box_img nonSP">
                    <img src="<?php bloginfo('template_directory'); ?>/images/home/feature_technology_photo_sp.jpg" class="fit-cover js_img_change_tb" alt="">
                  </div>
                </div>
              </li>
              <!-- safety -->
              <li>
                <div class="pc_cols">
                  <div class="box_text">
                    <div class="panel_inner">
                      <h3 class="top_image_title">
                       <img src="<?php bloginfo('template_directory'); ?>/images/home/feature_safety.svg" alt="safety">
                      </h3>
                      <p class="text_mid">
                        社員一人ひとりの<br>
                        安全意識向上を徹底
                      </p>
                      <p class="text_min">
                        当社では専門の安全管理部を設置し、現場では安全知識に長けたスタッフが日々巡回を行い、社内では定期的な安全に関する講習会を開催することによって、社員全員のセーフティーマインドをしっかり高めることで安心・安全な施工を提供します。<br>
                        人が立ち入れない高所や危険な場所も、ドローンやワンオペ可能な測量器などの最新機材を導入することにより、時短・コストカットはもとより、安全性が飛躍的に向上した施工を実現しています。
                      </p>
                    </div>
                  </div>
                  <div class="box_img nonSP">
                    <img src="<?php bloginfo('template_directory'); ?>/images/home/feature_safety_photo_pc.jpg" class="fit-cover js_img_change_tb" alt="">
                  </div>
                </div>
              </li>
              <!-- quality -->
              <li>
                <div class="pc_cols">
                  <div class="box_text">
                    <div class="panel_inner">
                      <h3 class="top_image_title">
                       <img src="<?php bloginfo('template_directory'); ?>/images/home/feature_quality.svg" alt="quality">
                      </h3>
                      <p class="text_mid">
                        徹底的な品質管理体制と<br>
                        きめ細かい教育で実現する高品質な施工
                      </p>
                      <p class="text_min">
                        品質管理部による徹底した管理体制のもと、業界では珍しい人事考課制度としてサンエイキャリアデザインシステム（SCDS）を導入。社員一人ひとりのスキルを見える化することにより、アドバンテージとウィークポイントを洗い出し個人に合った最適な教育プログラムを実施しています。これにより社員全員がハイクオリティーな技術を効率的に身につけることで安定した施工を実現しています。また、重要な工程で行う作業には厳しい自主検査を行うことでお客様からの厚い信頼を獲得しています。
                      </p>
                    </div>
                  </div>
                  <div class="box_img nonSP">
                    <img src="<?php bloginfo('template_directory'); ?>/images/home/feature_quality_photo_sp.jpg" class="fit-cover js_img_change_tb" alt="">
                  </div>
                </div>
              </li>
              <!-- flexible -->
              <li>
                <div class="pc_cols">
                  <div class="box_text">
                    <div class="panel_inner">
                      <h3 class="top_image_title">
                       <img src="<?php bloginfo('template_directory'); ?>/images/home/feature_flexible.svg" alt="flexible">
                      </h3>
                      <p class="text_mid">
                        “痒いところに手が届く”<br>
                        柔軟かつキメ細やかな対応
                      </p>
                      <p class="text_min">
                        IT化が進み刻々と変化する今の建設現場にマッチした、柔軟かつキメ細かい対応力で建築測量だけではなく、「監督派遣」や「工事写真撮影管理」、クリエイション事業部による「竣工写真撮影」や「ドローン空撮」といった多角的なサービスで今の建設現場を力強くサポートします。
                      </p>
                    </div>
                  </div>
                  <div class="box_img nonSP">
                    <img src="<?php bloginfo('template_directory'); ?>/images/home/feature_flexible_photo_sp.jpg" class="fit-cover js_img_change_tb" alt="">
                  </div>
                </div>
              </li>
            </ul>

            <div class="feature_pagenation">
              <a href="javascript:void(0)" class="prev disabled">
                <?php drawIcon('white',500); //parts_link_icon ?>
              </a>
              <div class="f_page">
                <span id="fp_current" class="futura">1</span><span></span><span id="fp_total" class="futura">5</span>
              </div>
              <a href="javascript:void(0)" class="next">
                <?php drawIcon('white',1000); //parts_link_icon ?>
              </a>
            </div>
          </div><!-- panel_ani -->



          <a href="javascript:void(0)" data-href="#top_service" class="top_scroll">
            <img src="<?php bloginfo('template_directory'); ?>/images/common/scroll_white.svg" alt="scroll">
          </a>
        </section>


        <!-- 事業内容 -->
        <section id="top_service" class="panel top_service" data-logo-sp="default" data-logo-pc="white" data-pagenation="dark" data-menu-sp="dark" data-menu-pc="dark">
          <div class="panel_ani animate">
            <div class="cols">
              <div class="col">
                <a href="<?php echo home_url(); ?>/architecture/" class="architecture">
                  <div class="bg">
                    <img src="<?php bloginfo('template_directory'); ?>/images/home/service_architecture_sp.jpg" class="js_img_change_tb fit-cover fit-pos-top architecture" alt="">
                  </div>
                  <div class="f_box">
                    <div class="image">
                      <img src="<?php bloginfo('template_directory'); ?>/images/home/service_archtecture.svg" alt="">
                    </div>
                    <h3 class="subTitle">建設事業</h3>
                    <div class="circleBtnWrap">
                      <?php drawIcon('navy',500); //parts_link_icon ?>
                    </div>
                  </div>
                </a>
              </div>
              <div class="col">
                <a href="<?php echo home_url(); ?>/creative/" class="creative">
                  <div class="bg">
                    <img src="<?php bloginfo('template_directory'); ?>/images/home/service_creative_sp.jpg" class="js_img_change_tb fit-cover fit-pos-bottom creative" alt="">
                  </div>
                  <div class="f_box">
                    <div class="image">
                      <img src="<?php bloginfo('template_directory'); ?>/images/home/service_createve.svg" alt="">
                    </div>
                    <h3 class="subTitle">クリエイション事業</h3>
                    <div class="circleBtnWrap">
                      <?php drawIcon('navy',1500); //parts_link_icon ?>
                    </div>
                  </div>
                </a>
              </div>
            </div>
            <div class="panel_inner">
              <div class="top_big_title align_center">
                <span class="eng futura">Service</span><h2 class="ja">事業内容</h2>
              </div>
            </div>
          </div><!-- panel_ani -->
          <a href="javascript:void(0)" data-href="#top_recruit" class="top_scroll">
            <img src="<?php bloginfo('template_directory'); ?>/images/common/scroll_default.svg" alt="scroll">
          </a>
        </section>


        <!-- 採用情報 -->
        <section id="top_recruit" class="panel top_recruit" data-logo-sp="white" data-logo-pc="white" data-pagenation="white" data-menu-sp="white" data-menu-pc="white">
          <div class="panel_ani animate">
            <div class="pc_cols">
              <div class="box_text">
                <div class="panel_inner">
                  <div class="top_big_title">
                    <span class="eng futura">Recruit</span><h2 class="ja">採用情報</h2>
                  </div>
                  
                  <div class="btn_cols">
                    <div class="btn_col">
                      <div class="image">
                        <img src="<?php bloginfo('template_directory'); ?>/images/home/recruit_message.svg" alt="">
                      </div>

                      <h3 class="subTitle">代表メッセージ/<br>募集要項</h3>
                      <div class="circleBtnWrap">
                        <a href="<?php echo home_url(); ?>/recruit/">
                          <?php //get_template_part('parts_link_icon_white'); ?>
                          <?php drawIcon('white',500); //parts_link_icon ?>
                        </a>
                      </div>
                    </div>
                    <div class="btn_col">
                      <div class="image">
                        <img src="<?php bloginfo('template_directory'); ?>/images/home/recruit_voice.svg" alt=""> 
                      </div>
                      <h3 class="subTitle">先輩社員の声<br><br></h3>
                      <div class="circleBtnWrap">
                        <a href="<?php echo home_url(); ?>/emp_voice/">
                          <?php //get_template_part('parts_link_icon_white'); ?>
                          <?php drawIcon('white',800); //parts_link_icon ?>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="box_img forPC">
                <img src="<?php bloginfo('template_directory'); ?>/images/home/recruit_photo_pc.jpg" class="fit-cover" alt="">
              </div>
            </div>
          </div><!-- panel_ani -->
          <a href="javascript:void(0)" data-href="#top_contact" class="top_scroll">
            <img src="<?php bloginfo('template_directory'); ?>/images/common/scroll_white.svg" alt="scroll">
          </a>
        </section>


        <!-- お問い合わせ -->
        <section id="top_contact" class="panel top_contact" data-logo-sp="default" data-logo-pc="default" data-pagenation="dark" data-menu-sp="dark" data-menu-pc="dark">
          <div class="panel_ani animate">
            <div class="inner_pc">
              <div class="panel_inner">
                <div class="top_big_title align_center">
                  <span class="eng futura">Contact</span><h2 class="ja">お問い合わせ</h2>
                </div>

                <!-- <p class="text_min">ご相談、お見積もりなどお気軽にご連絡くださいませ。</p> -->

                <div class="btnWrap">
                  <a href="<?php echo home_url(); ?>/contact/" class="btn_contact svg-circle-change text_min">
                    <span class="link_text">ご相談、お見積もりなどお気軽にご連絡くださいませ。</span>
                    <?php //get_template_part('parts_link_icon_navy'); ?>
                    <?php drawIcon('navy',500); //parts_link_icon ?>
                  </a>
                </div>

              </div>
              <address>
                <span>株式会社サンエイ興業<br class="forSPTB inline">
                〒234-0056　<br class="forSP inline">神奈川県横浜市港南区野庭町679-8 トミーズビル2F</span>
                <span>TEL.<a href="tel:045-370-7690">045-370-7690</a>&emsp;FAX.<a href="tel:045-370-7691">045-370-7691</a></span>
              </address>
              <p class="copylight">© 2021 SANEI INDUSTRIES. INC. All rights reserved.</p>
            </div>
          </div><!-- panel_ani -->
          <a id="gotop" href="#top_mv">
              <div class="gotop_icon">

                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" class="over">
                  <g id="icon_gotop" transform="translate(0 30) rotate(-90)">
                    <path id="up" d="M0,0H8.607" transform="translate(10.426 15.09)" fill="none" stroke="#002664" stroke-width="1" class="svg-elem-1"></path>
                    <path id="arrow" d="M0,0,3.329,2.651,0,5.618" transform="translate(15.786 12.416)" fill="none" stroke="#002664" stroke-width="1" class="svg-elem-2"></path>
                    <g id="circle" fill="none" stroke="#002664" stroke-width="1">
                      <circle cx="15" cy="15" r="15" stroke="none" class="svg-elem-3"></circle>
                      <circle cx="15" cy="15" r="14.5" fill="none" class="svg-elem-4"></circle>
                    </g>
                  </g>
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30"  class="base">
                  <g id="icon_gotop" transform="translate(0 30) rotate(-90)">
                    <path id="icon_gotop_up" d="M0,0H8.607" transform="translate(10.426 15.09)" fill="none" stroke="#002664" stroke-width="1" class="svg-elem-1"></path>
                    <path id="icon_gotop_arrow" d="M0,0,3.329,2.651,0,5.618" transform="translate(15.786 12.416)" fill="none" stroke="#002664" stroke-width="1" class="svg-elem-2"></path>
                    <g id="circle" fill="none" stroke="#002664" stroke-width="1">
                      <circle cx="15" cy="15" r="15" stroke="none" class="svg-elem-3"></circle>
                      <circle cx="15" cy="15" r="14.5" fill="none" class="svg-elem-4"></circle>
                    </g>
                  </g>
                </svg>
              </div>
              <span class="gotop_text">TOP</span>
            </a>
        </section>

      </div>

      <!-- ページャ -->
      <nav id="top_pagination" class="top_pagination">
        <a id="pagination1" href="#top_mv" class="active" data-hash="#top_mv"></a>
        <a id="pagination2" href="#top_about" data-hash="#top_about"></a>
        <a id="pagination3" href="#top_feature" data-hash="#top_feature"></a>
        <a id="pagination4" href="#top_service" data-hash="#top_service"></a>
        <a id="pagination5" href="#top_recruit" data-hash="#top_recruit"></a>
        <a id="pagination6" href="#top_contact" data-hash="#top_contact"></a>
      </nav>

      
      
    </main>
    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/home.js"></script>


  <?php //get_template_part('parts_site_footer'); ?>



<?php get_footer(); ?>

