<?php get_header(); ?>
<!-- for Page -->

</head>

<body id="pageDelivery" class="artworks white_head">

  <?php get_template_part('parts_site_header_artworks'); ?>

  <main class="contents addPdgT addPdgB">


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
              <span>納品について</span>
            </li>
          </ul>
        </div>

        <div class="sectionTitle center">
          <span class="eng futura">Delivery</span><h2 class="ja">納品について</h2>
        </div>
        <p class="lead">撮影データは撮影日より7営業日以内に発送します。ご利用シーンを想定し超高解像度版とWEB圧縮版の2種類のデータをオリジナルDVDに収容し納品します。</p>

      </div><!-- inner -->
    </div><!-- box_title -->


    <!-- 納品 -->
    <div id="delivery" class="section bg_gray" >
      <div class="inner">
        <h2 class="barTitle fadeFromBottom">超高解像度版・WEB版の<br class="forSP inline">2種類をご納品</h2>
        <ul class="delivery_types">
          <li class="bg_white">
            <div class="fadeFromBottom">
              <h3 class="type_title">超高解像度版（JPG形式）</h3>
              <div class="texts">
                <p class="type_size">長辺　7952px/600dpi(最大)</p>
                <p class="text">
                  カタログ・雑誌広告・コンテスト・大判インクジェット・看板などにご利用ください。<br>
                  ※オフセット印刷時にはCMYKへの色変換をしてご使用ください。<br>
                  ※TIFF画像をご希望の場合は、別途（1カット/5,000円）が発生します。<br>
                  ※RAWデータの提供は行っておりません。
                </p>                
<!--                 <p class="text">
                  ※RGBとは<br>
                  RGBとは、Red（レッド）・Green（グリーン）・Blue（ブルー）の頭文字です。光の三原色であるこの3色が掛け合わされることで白に近付きます。デジタルカメラで撮影した画像は基本的にRGBです。パソコンなどのモニター上で見る画像も、RGBで表現されています。 
                </p> -->
              </div>
            </div>
          </li>
          <li class="bg_white">
            <div class="fadeFromBottom">
              <h3 class="type_title">WEB用圧縮版（JPG形式）</h3>
              <div class="texts">
                <p class="type_size">長辺　1920px /250dpi</p>
                <p class="text">
                  お客様が運営するウェブサイトやSNS投稿用にご利用ください。WEB圧縮版のデータは、解像度を落とし軽量化、そしてシャープネスをやや強め、インターネット利用に最適化されたデータを予め作成し納品しています。
                </p>
                <p class="text">
                  ※画像品質を落とさない圧縮方式<br>
                  1920px（250dpi）へ通常圧縮した場合のサイズは1枚あたり1.2～2.5MB程度となります。独自の圧縮方式により品質を落さず最大80％の圧縮を行い納品します。
                </p>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </div>


    <div class="section bg_white noPdgB" id="output">
      <div class="inner">

        <h2 class="mid_title noMgnT fadeFromBottom">出力対応表</h2>
        <p class="ot_title fadeFromBottom">A版　出力対応表（単位mm）</p>
        <ul class="outputs fadeFromBottom">
          <li><span class="col dark_gray"><span>A4</span><span>210×297</span></span><span class="col light_gray"><span>◎</span><span>350dpi</span></span></li>
          <li><span class="col dark_gray"><span>A3</span><span>297×420</span></span><span class="col light_gray"><span>◎</span><span>350dpi</span></span></li>
          <li><span class="col dark_gray"><span>A2</span><span>420×597</span></span><span class="col light_gray"><span>◎</span><span>350dpi</span></span></li>
          <li><span class="col dark_gray"><span>A1</span><span>594×841</span></span><span class="col light_gray"><span>〇</span><span>250dpi</span></span></li>
          <li><span class="col dark_gray"><span>A0</span><span>841×1189</span></span><span class="col light_gray"><span>▲</span><span>200dpi</span></span></li>
        </ul>
        <ul class="hanrei fadeFromBottom">
          <li>◎：フル解像度350dpiで出力できます。</li>
          <li>〇：大判インクジェットプリンターで鮮明な出力が可能です。</li>
          <li>▲：至近距離で見るとドットが目立ちます。</li>
        </ul>


        <h2 class="mid_title fadeFromBottom">出力対応表</h2>
        <p class="ot_title fadeFromBottom">B版　出力対応表（単位mm）</p>
        <ul class="outputs fadeFromBottom">
          <li><span class="col dark_gray"><span>B4</span><span>257×364</span></span><span class="col light_gray"><span>◎</span><span>350dpi</span></span></li>
          <li><span class="col dark_gray"><span>B3</span><span>364×515</span></span><span class="col light_gray"><span>◎</span><span>350dpi</span></span></li>
          <li><span class="col dark_gray"><span>B2</span><span>515×726</span></span><span class="col light_gray"><span>〇</span><span>250dpi</span></span></li>
          <li><span class="col dark_gray"><span>B1</span><span>728×1030</span></span><span class="col light_gray"><span>〇</span><span>200dpi</span></span></li>
          <li><span class="col dark_gray"><span>B0</span><span>1030×1456</span></span><span class="col light_gray"><span>▲</span><span>170dpi</span></span></li>
        </ul>
        <ul class="hanrei fadeFromBottom">
          <li>◎：フル解像度350dpiで出力できます。</li>
          <li>〇：大判インクジェットプリンターで鮮明な出力が可能です。</li>
          <li>▲：至近距離で見るとドットが目立ちます。</li>
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
