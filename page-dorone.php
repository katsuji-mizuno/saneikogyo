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
              <p class="caption">静止画＋動画プラン</p>
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
                静止画に加えて動画の撮影も行います。飛行高度を調節したり、チルト（傾き）やタイムラプス（コマ送り）といった変化も加えられます。
              </p>
            </div>
            <div class="data">
              <p class="text">
                撮影した静止画や動画から、プロモーション用の映像を制作します。ご要望に合わせて各シーンの編集を行い、イメージ通りの作品に仕上げます。
              </p>
            </div>
          </li>
          <li>
            <div class="label"><span>業務内容</span></div>
            <div class="data wide">
              航空法関連の飛行申請、対人対物1事故10億円の保険加入、各種手配費用<br>
              ※人件費、機材費、交通費等別途
            </div>
        </ul>
      </div>
    </div>


    <!-- スペック -->
    <div class="section" id="spec">
      <div class="inner">
        <h3 class="sub_title">お渡しする動画(画像)データのスペック</h3>
        <ul class="spec_list">
          <li>
            4K解像度：3840px×2160px
          </li>
          <li>
            有効画素数：2,000万画素
          </li>
          <li>
            フレームレート：29.97fps
          </li>
          <li>
            コーディック：H264
          </li>
          <li>
            動画フォーマット：MP4
          </li>
          <li>
            ビットレート：動画の内容により「40～60Mbps」となります。
          </li>
          <li>
            カラーモード：Dlog-M※4K撮影はDlog-M方式で撮影が行われます。
          </li>
          <li>
            120秒前後の動画容量は「80MB～1GB」となります。
          </li>
          <li>
            編集後の動画は「YouTube 2160p 4K UlrraHD形式」でお渡しいたしますので、そのままYouTubeに4K動画としてアップすることができます。
          </li>
          <li>
            空撮写真データーはJPEG＆DNGデーター渡しとなります。ご自身で静止画のレタッチをされる場合はDNGデーターを画像ソフトで修正ください。
          </li>
          <li>
            空撮写真データー容量はJPEG5472px×3078px(約6MB)、DNG5464px×3070px(約33MB)となります。<br>HPに使用しているお写真はドローンからの空撮写真ですのでご参考にしてください。
          </li>
        </ul>
      </div>
    </div>

    <!-- キャンセルポリシー -->
    <div class="section bg_white" id="cancel">
      <div class="inner">
        <div class="cols">
          <div class="sectionTitle">
            <span class="eng futura">Cancelpolicy</span><h2 class="ja">キャンセルポリシー</h2>
          </div>
          <div class="text">
            ご依頼いただいた後のキャンセルについては、<br>以下の通りキャンセル料を承ります。
          </div>
        </div>
        <ul class="cancel_list">
          <li>
            <div class="label">
              撮影7日前の<br class="tb">キャンセル
            </div>
            <div class="data">
              各サービス料金の25％を<br>
              ご請求させていただきます。
            </div>
          </li>
          <li>
            <div class="label">
              撮影2日前の<br class="tb">キャンセル
            </div>
            <div class="data">
              各サービス料金の50％を<br>
              ご請求させていただきます。
            </div>
          </li>
          <li>
            <div class="label">
              撮影前日の<br class="tb">キャンセル
            </div>
            <div class="data">
              各サービス料金の75％を<br>
              ご請求させていただきます。
            </div>
          </li>
          <li>
            <div class="label">
              撮影当日の<br class="tb">キャンセル
            </div>
            <div class="data">
              全額料金の100％を<br>
              ご請求させていただきます。
            </div>
          </li>
        </ul>
        <ul class="kome text">
          <li>
            【共通】ご依頼後のキャンセルは、手配済みの実費（交通費、駐車代、宿泊費等）は別途ご請求させていただきます。
          </li>
          <li>
            【天候の判断について】1～2日前までに弊社にて実施可否判断を行います。
          </li>
          <li>
            ※弊社が雨天、強風などで中止と判断した場合のキャンセル費用は発生いたしません。
          </li>
        </ul>
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
              ドローンの事故で人を巻き込む結果となってしまった場合、損害賠償などに対して、保険会社から最大10億円までの補償が行われます。
            </div>
          </li>
          <li>
            <div class="label">
              対物最大10億円
            </div>
            <div class="data">
              墜落したドローンが家や車、太陽光パネルなどを破損させてしまった場合に、保険会社から最大で10億円までの補償が行われます。
            </div>
          </li>
          <li>
            <div class="label">
              プライバシー侵害最大10億円
            </div>
            <div class="data">
              空撮を実施する際には、飛行エリアの地権者・管理者の承諾を得て行いますが、万が一写真や映像に写り込んでいた人物や団体等かプライバシーの侵害などで訴訟を受けた場合などに、 保険会社から最大で10億円までの補償が行われます。
            </div>
          </li>
          <li>
            <div class="label">
              2次災害最大10億円
            </div>
            <div class="data">
              「墜落したドローンのバッテリーから出火し、山林が火事になった」というような二次災害に関する損害に対しても、保険会社から最大で10億円までの補償が行われます。
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

    <!-- 許可申請 -->
    <div class="section" id="permission">
      <div class="inner">
        <div class="cols">
          <div class="col">
            <div class="sectionTitle">
              <span class="eng futura">Appication<br>For Permission</span><h2 class="ja">許可申請について</h2>
            </div>
          </div>
          <div class="col">
            <div class="rel">
              <div class="bg_shadow"></div>
              <div class="texts">
                <h3 class="big">許可申請について</h3>
                <p class="text">
                  許可が必要だったり、飛行が禁止されるケースを下記に記載しましたので、撮影を依頼される前にご確認ください。<br>
                  なお撮影が許可されるまで、申請から2週間～1ヶ月かかる場合もあります。不明点はお問合せ画面よりお気軽にご連絡ください。
                </p>

                <p class="no">01</p>
                <p class="text noMgnT">
                  航空法で定められたドローン飛行の「許可」が必要な場合<br>（飛行禁止空域でのドローン飛行）
                </p>
                <ul class="text noMgnT">
                  <li>１）空港周辺の上空</li>
                  <li>２）地表又は水面から１５０ｍ以上の高さの空域</li>
                  <li>３）人または家屋が密集している人口集中（DID）地区の上空</li>
                </ul>
                <ul class="text noMgnT">
                  <li>※人口集中地区に該当するか否かは、総務省統計局が提供している、国土地理院地図をご覧ください。</li>
                  <li>※私有地内や、人が少ない河川敷・農地での飛行であっても、人口集中地区で飛行させるには許可が必要です。</li>
                  <li>※屋内での飛行の場合には許可は不要です。</li>
                </ul>

                <p class="no">02</p>
                <p class="text noMgnT">
                  航空法で定められた所定の飛行ルールによらずに飛行をさせる場合
                </p>
                <ul class="text noMgnT">   
                  <li>・夜間（日没後）飛行</li>
                  <li>・ドローンを目視できる範囲外での飛行</li>
                  <li>・他人や物件からの距離が３０ｍ以内での飛行（※１）</li>
                  <li>・イベントなど多数の人が集まる催し上空の飛行（※２）</li>
                  <li>・爆発物など危険物の輸送</li>
                  <li>・ドローンから物を投下（※３）</li>
                </ul>
                <ul class="text noMgnT">
                  <li>※１: 物件の具体例：車両等（自動車、電車、船、飛行機　等 ）・ 工作物（ビル、住居、工場、電線 等）</li>
                  <li>※２: 多数の人が集まる催しの例：スポーツ試合・大会、運動会、屋外で開催されるコンサート、 デモ活動　等</li>
                  <li>※３: 水や農薬等の液体を散布する行為も該当します。</li>
                </ul>

                <p class="no">03</p>
                <p class="text noMgnT">
                  航空法以外の規制
                </p>
                <ul class="text noMgnT">   
                  <li>・国の重要な施設、外国公館、原子力事業所などの周辺<br>
                  小型無人機等の飛行禁止法により、国会議事堂、内閣総理大臣官邸等の周辺での飛行は禁止されています。</li>
                  <li>・私有地の上空<br>
                  民法では「土地所有権の範囲」として、土地の所有権は、その土地の上下にも及ぶと定めています。<br>
                  所有権が及ぶ高さは明記されていませんが、不要なトラブル回避のために土地所有者の許可は必要です。</li>
                  <li>・地方自治体の条例による制限<br>
                  自治体によって独自の条例を定めている場合があります。<br>
                  東京都は200グラム以下のドローンでも都立公園での飛行は全面的に禁止されています。</li>
                  <li>・道路上での離発着及び道路上空<br>
                  道路交通法で、交通の妨げとなる行為が禁止されています。</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>

  <?php get_template_part('parts_works_modal'); ?>
 
  <?php get_template_part('parts_site_footer_artworks'); ?>

<?php get_footer(); ?>
