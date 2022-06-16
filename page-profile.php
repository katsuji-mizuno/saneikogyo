<?php get_header(); ?>
</head>

<body id="pageProfile">
  <?php get_template_part('parts_site_header'); ?>

    <main class="contents">
      <div class="bigTitle noto">
        <p class="eng">PROFILE</p>
        <h1 class="ja">小俣卓也について</h1>
      </div>


      <!--profile-->
      <div class="section" id="profile">
        <div class="innerPC">
          <div class="columns">
            <div class="column image">
                <img src="<?php bloginfo('template_directory'); ?>/images/profile/prof_sp.jpg" class="js-image-switch" alt="profile">
            </div>
            <div class="column text">
                行政と連携しクリーンエネルギーを活用した暗号資産（仮想通貨）マイニング事業で成功を収める。 その時期から、マイニングは価格が減少した場合に収益性が低くなってしまう弱点を克服するため、自ら暗号資産のトレードを開始。<br>その後、２４時間３６５日の暗号資産取引に体力的、精神的に不安を感じ、自動売買システムの開発にも着手。<br>マイニングによる暗号資産の根源的な原理の理解と、ファンダメンタルに基づくマーケット分析には定評がある。<br> 日夜、トレーダーやプログラマーと情報交換を行い、最新の投資手法を研究する日々を送っている。<br>
                行政と連携しクリーンエネルギーを活用した暗号資産（仮想通貨）マイニング事業で成功を収める。 その時期から、マイニングは価格が減少した場合に収益性が低くなってしまう弱点を克服するため、自ら暗号資産のトレードを開始。<br>その後、２４時間３６５日の暗号資産取引に体力的、精神的に不安を感じ、自動売買システムの開発にも着手。<br>マイニングによる暗号資産の根源的な原理の理解と、ファンダメンタルに基づくマーケット分析には定評がある。<br> 日夜、トレーダーやプログラマーと情報交換を行い、最新の投資手法を研究する日々を送っている。<br>
            </div>
          </div>
        </div>
      </div>


      <!--COIN CHOICE-->
      <?php get_template_part('parts_coin_choice') ; ?>


      <!--Follow Us-->
      <?php get_template_part('parts_follow_us') ; ?>


      <!--パンくず-->
      <div id="breadcrumb">
        <div class="inner noMgnT noMgnB">
          <ul class="breadlist">
            <li><a href="<?php echo home_url(); ?>" class="hvr-">HOME</a></li>
            <li><span>PROFILE</span></li>
          </ul>
        </div>
      </div>


      <!--SNS-->
      <?php get_template_part('parts_sns_foot') ; ?>


    </main>


  <?php get_template_part('parts_site_footer'); ?>


<?php get_footer(); ?>

