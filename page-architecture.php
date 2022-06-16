<?php get_header(); ?>

<!-- for Page -->
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@700&display=swap" rel="stylesheet">
<!-- <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/home.css" media="all"/> -->
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/architecture.js"></script>

</head>

<body id="pageArchitecture">

  <?php get_template_part('parts_site_header'); ?>

  <main class="contents">

    <!-- タイトル -->
    <div id="mv">
      <img src="<?php bloginfo('template_directory'); ?>/images/architecture/mv_sp.jpg" class="js_img_change_tb fit-cover" alt=""> 
      <div class="mainTitle">
        <span class="eng"><img src="<?php bloginfo('template_directory'); ?>/images/architecture/title_text.svg" class="js_img_change_tb" alt="about"></span>
        <h1 class="ja">建設事業</h1>
        <p class="lead">当社では超高層ビルや大型倉庫・商業施設をはじめ、学校・病院・公共施設などのインフラストラクチャーとなる大規模な建築現場から、広大な敷地での土木工事現場など、幅広い分野を手掛けております。経験豊富なスタッフが高い技術力で様々な施工を提供致します。</p>
      </div>
      <a href="#tab_set" class="top_scroll">
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
            <span>建設事業</span>
          </li>
        </ul>
      </div>
    </div>


    <!-- タブコンテンツ -->
    <div id="architecture" class="section noPdgT">
      <div id="tab_set">

        <!-- タブボタン -->
        <div class="inner">
          <ul id="tab_btns">
            <li class="active"><a href="javascript:void(0)">建築測量</a></li>
            <li><a href="javascript:void(0)">計測</a></li>
            <li><a href="javascript:void(0)">監督派遣・工事写真撮影</a></li>
          </ul>
        </div>


        <!-- タブ本文 -->
        <ul id="tab_contents">

          <!-- １ -->
          <li class="active">
            <div class="tab_content tc1">
              <div class="sectionTitle fadeFromBottom">
                <span class="eng futura">Architectural<br class="forSP inline"> Surveying</span><h2 class="ja">建築測量</h2>
              </div>
              <div class="lead fadeFromBottom">
                建築測量は、建物を建築する上で必要不可欠な設計図書を、原寸大のサイズで実際に現場で位置出し行う業務です。一般的に「墨出し」と総称されますが、着工から竣工までほぼすべての工程に携わり、専門的なノウハウがなくては施工することができない作業が数多くあるため、建築現場では非常に重要な役割を担っています。当社では豊富な経験を積んだ多くのプロフェッショナルにより、準備工事の現況測量から竣工間際の完了検査立会いまで、高品質な施工をお約束します。
              </div>

              <div class="articles">

                <!-- １−１ -->
                <div class="article image_left">
                  <div class="texts">
                    <div class="inbox fadeFromRight">
                      <h3 class="num_title"><span class="roboto no">01</span><span class="ja">準備工事</span>
                      </h3>
                      <p class="text big">
                        建築工事のすべての始まり
                      </p>
                      <p class="text">
                        配置図をもとに高い精度で建物の通り芯を設定します。当社では専門のスタッフが現況測量を行い、CADソフトとトータルステーションを連携させて準備工事を行うため、あらゆる形状の敷地に対応することが可能です。また、自主検査を立会いのもと実施するため、後工程を安心して進めることが可能となります。
                      </p>
                    </div>
                  </div>

                  <div class="image">
                    <div class="fadeFromLeft delay">
                      <img src="<?php bloginfo('template_directory'); ?>/images/architecture/sec1_1_sp.jpg" class="js_image_switch" alt="">
                    </div>
                  </div>
                </div>

                <!-- １−２ -->
                <div class="article image_right">
                  <div class="texts ">
                    <div class="inbox fadeFromLeft">
                      <h3 class="num_title"><span class="roboto no">02</span><span class="ja">土工事</span>
                      </h3>
                      <p class="text big">
                        建物の「基礎の基礎」となる土工事
                      </p>
                      <p class="text">
                        基礎躯体のさらに基礎となる杭芯・山留位置出しや、掘削位置出しなどをCADデータを座標化することにより高精度かつ、高効率な施工を実現します。土工事段階では間違った位置で施工してしまうと取り返しのつかない重要な作業が多いため、こちらでも立会いのもと自主検査を行い安心・安全な施工を提供致します。
                      </p>
                    </div>
                  </div>

                  <div class="image">
                    <div class="fadeFromRight delay">
                      <img src="<?php bloginfo('template_directory'); ?>/images/architecture/sec1_2_sp.jpg" class="js_image_switch" alt="">
                    </div>
                  </div>
                </div>


                <!-- １−３ -->
                <div class="article image_left">
                  <div class="texts">
                    <div class="inbox fadeFromRight">
                      <h3 class="num_title"><span class="roboto no">03</span><span class="ja">躯体工事/仕上げ工事</span>
                      </h3>
                      <p class="text big">
                        建築物の全ての”カタチ”を導く
                      </p>
                      <p class="text">
                        躯体工事では施工の基本となる基準地墨(親墨)を高い精度で施工します。また、仕上げ工事では各部の納まりを考慮した墨出しを行うことで、スムーズな施工をお約束します。建築測量を行う上で誤差は常に付きまとっており、気象条件によって発生する誤差や、コンクリートの収縮、器械誤差など、さまざまな要因によってミリ単位の誤差が常に発生しています。この誤差を最小限に抑える“墨出し屋”ならではのノウハウを全担当者が持つことにより、コンマ数ミリの精度を追求して現場に1/1の設計図として施工を行います。
                      </p>
                    </div>
                  </div>

                  <div class="image">
                    <div class="fadeFromLeft delay">
                      <img src="<?php bloginfo('template_directory'); ?>/images/architecture/sec1_3_sp.jpg" class="js_image_switch" alt="">
                    </div>
                  </div>
                </div>

                <!-- １−４ -->
                <div class="article image_right">
                  <div class="texts ">
                    <div class="inbox fadeFromLeft">
                      <h3 class="num_title"><span class="roboto no">04</span><span class="ja">完了検査</span>
                      </h3>
                      <p class="text big">
                        始まりから終わりまで
                      </p>
                      <p class="text">
                        着工段階から携わり、竣工間際まで施工に携わる我々が最後に行う仕事が完了検査になります。ここでは一連の工事の流れを把握した担当者が建物の配置や、最高高さなどの確認作業をスムーズに行います。
                      </p>
                    </div>
                  </div>

                  <div class="image ">
                    <div class="fadeFromRight delay">
                      <img src="<?php bloginfo('template_directory'); ?>/images/architecture/sec1_4_sp.jpg" class="js_image_switch" alt="">
                    </div>
                  </div>
                </div>

              </div>

            </div>
          </li>


          <!-- ２ -->
          <li >
            <div class="tab_content tc2">
              <div class="sectionTitle fadeFromBottom">
                <span class="eng futura">Measurement</span><h2 class="ja">計測</h2>
              </div>
              <div class="lead fadeFromBottom">
                3Dレーザースキャナーを用いた計測は、従来の方式と比べ複雑な地形でも測量でき、短時間で数万点もの点データを計測できるので作業時間が大幅に短縮できます。また、対象物に接触することもないので作業の危険度が下がり、安全な作業が実現します。また、地上からの計測が困難な場合はドローンを使用したUAV測量を行うことにより、作業効率と安全性を担保して高精度な成果品の提供を実現しています。
              </div>

              <div class="articles">

                <!-- ２−１ -->
                <div class="article image_right">
                  <div class="texts">
                    <div class="inbox fadeFromLeft">
                      <h3 class="num_title"><span class="roboto no">01</span><span class="ja">現況実測</span>
                      </h3>
                      <p class="text big">
                        人が立ち入れない場所でも<br class="forSP inline">短時間・少人数で施工
                      </p>
                      <p class="text">
                        3Dレーザースキャナを使用することによって従来の施工方法より大幅な省人化・短納期で測定することが可能です。また、人が立ち入れない場所はUAV測量(ドローン測量)を行うことで安全に測定することができます。
                      </p>
                    </div>
                  </div>

                  <div class="image">
                    <div class="fadeFromRight">
                      <img src="<?php bloginfo('template_directory'); ?>/images/architecture/sec2_1_sp.jpg" class="js_image_switch" alt="">
                    </div>
                  </div>
                </div>

                <!-- ２−２ -->
                <div class="article image_left">
                  <div class="texts">
                    <div class="inbox fadeFromRight">
                      <h3 class="num_title"><span class="roboto no">02</span><span class="ja">点群作成・処理</span>
                      </h3>
                      <p class="text big">
                        必要なものだけを抽出
                      </p>
                      <p class="text">
                        測定したデータを専用ソフトにて点群データとして出力します。不要なデータ(人や車などの動くもの)をフィルタリングすることによって扱いやすいデータに加工することが可能です。
                      </p>
                    </div>
                  </div>

                  <div class="image">
                    <div class="fadeFromLeft">
                      <img src="<?php bloginfo('template_directory'); ?>/images/architecture/sec2_2_sp.jpg" class="js_image_switch" alt="">
                    </div>
                  </div>
                </div>


                <!-- ２−３ -->
                <div class="article image_right">
                  <div class="texts">
                    <div class="inbox fadeFromLeft">
                      <h3 class="num_title"><span class="roboto no">03</span><span class="ja">各種データ出力</span>
                      </h3>
                      <p class="text big">
                        さまざまなデータ出力に対応
                      </p>
                      <p class="text">
                        お客様のニーズに合わせた幅広いフォーマットへ<br>出力可能です。
                      </p>
                    </div>
                  </div>

                  <div class="image">
                    <div class="fadeFromRight">
                      <img src="<?php bloginfo('template_directory'); ?>/images/architecture/sec2_3_sp.jpg" class="js_image_switch" alt="">
                    </div>
                  </div>
                </div>

                <!-- ２−４ -->
                <div class="article image_left">
                  <div class="texts">
                    <div class="inbox fadeFromRight">
                      <h3 class="num_title"><span class="roboto no">04</span><span class="ja">納品</span>
                      </h3>
                      <p class="text big">
                       計測の“プロ”として分かりやすくご報告
                      </p>
                      <p class="text">
                        成果品について当社スタッフが分かりやすくご説明いたします。CD-R・DVD-Rでの納品からクラウドサーバーを利用したダウンロード納品まで対応致します。
                      </p>
                    </div>
                  </div>

                  <div class="image ">
                    <div class="fadeFromLeft">
                      <img src="<?php bloginfo('template_directory'); ?>/images/architecture/sec2_4_sp.jpg" class="js_image_switch" alt="">
                    </div>
                  </div>
                </div>

              </div>

            </div>
          </li>
          <!-- ３ -->
          <li >
            <div class="tab_content tc3">
              <div class="sectionTitle fadeFromBottom">
                <span class="eng futura">Temporary<br class="forSP inline"> Staffing</span><h2 class="ja">監督派遣・工事写真撮影</h2>
              </div>
              <div class="lead fadeFromBottom ">
                施工管理を専門に数多くの経験を積んだスタッフが監督補助業務を行います。新築から小規模な改修まで、あらゆる現場でキメ細かな工程管理を行い、スムーズな施工を実現します。
              </div>

              <div class="articles">

                <!-- ３−１ -->
                <div class="article image_left">
                  <div class="texts">
                    <div class="inbox fadeFromRight">
                      <h3 class="underline_title">監督派遣業務</h3>
                      <p class="text big">
                        専門の社員によるキメ細かな工程管理
                      </p>
                      <p class="text">
                        施工管理を専門に数多くの経験を積んだ当社社員が、監督業務を行います。新築から小規模な改修まで、あらゆる現場でキメ細かな工程管理を行い、スムーズな施工を実現します。
                      </p>
                      <p class="text big">
                        徹底した安全管理で<br>安心・安全な施工を実現
                      </p>
                      <p class="text">
                        当社では安全管理専門の部署を設置し、社員に対して定期的に安全教育を行っています。リスクマネジメントに精通した当社社員が徹底した安全管理を行うことで、安心・安全な施工を実現します。
                      </p>
                    </div>
                  </div>

                  <div class="image fadeFromLeft">
                    <img src="<?php bloginfo('template_directory'); ?>/images/architecture/sec3_1_sp.jpg" class="js_image_switch" alt="">
                  </div>
                </div>

                <!-- ３−２ -->
                <div class="article image_right">
                  <div class="texts">
                    <div class="inbox fadeFromLeft">
                      <h3 class="underline_title">工事写真撮影管理</h3>
                      <p class="text big">
                        断面図の切り出しと配筋写真撮影
                      </p>
                      <p class="text">
                        構造図をもとに断面図を切り出し、PC上に画像として取込みます。また、現場では断面図に対応する配筋写真を当社が撮影し、断面図と対応する配筋写真をPC上で一括管理します。
                      </p>
                      <p class="text big">
                        帳票出力
                      </p>
                      <p class="text">
                        切り出した断面図や取り込んだ写真等の情報は、簡単な操作で帳票化が可能です。これらの業務も当社が一括して行うことで、面倒な帳簿作成の手間を大幅に削減します。
                      </p>
                      <p class="text big">
                        配筋写真以外の工事写真も一括管理
                      </p>
                      <p class="text">
                        配筋以外の工事写真も当社がシステム上にて一括管理。営繕工事電子納品要領に準拠した写真や、工事完成図書データの出力なども簡単に行えます。
                      </p>
                    </div>
                  </div>

                  <div class="image">
                    <div class="fadeFromRight">
                      <img src="<?php bloginfo('template_directory'); ?>/images/architecture/sec3_2_sp.jpg" class="js_image_switch" alt="">
                    </div>
                  </div>
                </div>



              </div>

            </div>
          </li>
        </ul>

      </div>
    </div>

  </main>
 
  <?php get_template_part('parts_site_footer'); ?>

<?php get_footer(); ?>
