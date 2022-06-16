<?php get_header(); ?>

<!-- slider -->
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/slick/slick.css" media="all"/>
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/slick/slick-theme.css" media="all"/>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/slick/slick.min.js"></script>


<!-- for Page -->
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/recruit.js"></script>

</head>

<body id="pageRecruit">

	<?php get_template_part('parts_site_header'); ?>

	<main class="contents">

		<!-- タイトル -->
		<div id="mv">
			<img src="<?php bloginfo('template_directory'); ?>/images/recruit/mv_sp.jpg" class="js_img_change_tb fit-cover" alt="">
			<div class="mainTitle">
				<span class="eng"><img src="<?php bloginfo('template_directory'); ?>/images/recruit/title_text.svg" class="js_img_change_tb" alt="about"></span>
				<h1 class="ja">採用情報</h1>
				<p class="text_mid">チャレンジする人にチャンスはおとずれる</p>
				<p class="lead">サンエイでは誰もが平等にチャレンジできる環境を社員全員で作り上げて皆様をお待ちしています。</p>
			</div>
			<a href="#message" class="top_scroll">
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
						<span>採用情報</span>
					</li>
				</ul>
			</div>
		</div>


		<!-- メッセージ -->
		<div id="message">
			<div class="inner">
				<div class="rel">
					<div class="bg_shadow"></div>
					<div class="bg_white">
						<div class="pc_cols">
							<div class="sectionTitle fadeFromBottom">
								<span class="eng futura">Message</span>
								<h2 class="ja">代表メッセージ</h2>
							</div>
							<div class="lead fadeFromBottom">
								すべては、新たな「カタチ」のために。
							</div>
						</div>
						<div class="image rel">
							<div class="fadeFromBottom">
								<img src="<?php bloginfo('template_directory'); ?>/images/recruit/boss_sp.jpg" class="js_image_switch" alt="代表取締役 社長 三谷 英暁">
							</div>
							<!--
              <p class="caption"><span class="pos">代表取締役 社長</span><span class="name">三谷 英暁</span></p>
              -->
						</div>
						<div class="text_wrap">
							<div class="texts fadeFromBottom">
								初めまして、代表取締役社長の三谷です。私達、サンエイ興業には大切にしているひとつの言葉があります。それは「協働」という言葉です。全員で協力し、お互いが不足を補いながら目標に向かっていこう。という意味になります。<br>
								<br>
								私にとっての社員は、家族同然であり社員全員が立派な社会人となって活躍してほしいと考えております。これまで数多くの方々がサンエイ興業に入社し、サンエイ興業の事業を通じて社会に貢献していく姿を見ています。年々進化や成長を遂げていくＩＴ、ＡＩ技術と同じくらい、もしくはそれ以上に社員達が成長していく姿を毎日楽しみに見ています。<br>
								<br>
								その成長の礎となっている取り組みとして、当社にはサンエイキャリアデザインシステム(SCDS)があります。他社にはない、独自の教育プログラムを導入することにより、入社後に自分のスキルに合わせた成長指標をもとに、定期的に先輩社員が指導する事により、より高い技術を効率的に習得することが可能となっています。<br>
								<br>
								また、社員の成長と同じように、誰よりも私自身がみんなに負けないように成長していかなければならず、全社員と「協働」できている事に日々喜びを感じています。これからサンエイ興業社員として働く方の毎日が、笑顔と躍動感に満ち溢れ、自分のレベルアップを肌で感じられるような社内環境を全員で一緒に作って行きたいと思います。最後に、私自身が何よりも大切にしているのは笑顔です。笑顔は周囲の人たちを幸せにしてくれます。家族や友人、仲間やお客様、私達と関わりのある全ての方々へ感謝して成長出来るよう、希望が溢れるサンエイ興業を目指して共に歩んで行きましょう。
								<span class="boss_name"><img src="<?php bloginfo('template_directory'); ?>/images/recruit/signature.png" alt="三谷 英暁"></span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- 募集要項 -->
		<div id="detail">
			<div class="inner">
				<div class="pc_cols">
					<div class="col">
						<div class="sectionTitle fadeFromBottom">
							<span class="eng futura">Detail</span>
							<h2 class="ja">募集要項</h2>
						</div>
					</div>
					<div class="col">
						<ul class="list">
							<li class="fadeFromBottom">
								<span class="label">募集職種</span>
								<span class="data">測量・墨出し・配筋写真、管理・監督業務</span>
							</li>
							<li class="fadeFromBottom">
								<span class="label">募集対象</span>
								<span class="data">墨出し経験者・配筋写真撮影、管理経験者・未経験者の方でもお気軽にご相談下さい。</span>
							</li>
							<li class="fadeFromBottom">
								<span class="label">勤務地</span>
								<span class="data">主に神奈川県内及び首都圏近郊</span>
							</li>
							<li class="fadeFromBottom">
								<span class="label">給与</span>
								<span class="data">正社員：月給22万円～</span>
							</li>
							<li class="fadeFromBottom">
								<span class="label">諸手当</span>
								<span class="data">残業手当 / 皆勤手当 / 家族手当 / 各報奨金 / 昇給年1回 / 交通費 / 制服貸与 / 社会保険完備 / 車、バイク通勤可能 / 社員登用あり</span>
							</li>
							<li class="fadeFromBottom">
								<span class="label">勤務時間</span>
								<span class="data">8:00 ～ 17:00</span>
							</li>
							<li class="fadeFromBottom">
								<span class="label">休日休暇</span>
								<span class="data">日曜、夏季休暇、年末年始休暇、GW、その他社内規定内有給休暇有</span>
							</li>
							<li class="fadeFromBottom">
								<span class="label">応募方法</span>
								<span class="data">下記連絡先迄ご連絡下さい。</span>
							</li>
							<li class="fadeFromBottom">
								<span class="label">資料請求先</span>
								<span class="data">人事部<br>
									〒234-0056　神奈川県横浜市港南区野庭町679-8　トミーズビル2F<br>
									TEL：<a href="tel:045-370-7690" class="hvr-underline-from-left tel">045-370-7690</a>　FAX：045-370-7691</span>
							</li>
							<li>
								<div class="btnWrap">
									<a href="<?php echo home_url(); ?>/contact/" class="btn_read_more svg-circle-change">
										<span class="link_text">エントリーはこちら</span>
										<?php drawIcon('navy', 1000); //parts_link_icon 
										?>
									</a>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>



		<!-- 社員の声 -->
		<div id="voice" class="section">
			<div class="sectionTitle align_center fadeFromBottom">
				<span class="eng futura">Voice</span>
				<h2 class="ja">先輩社員の声</h2>
			</div>

			<?php
			$args = array(
				'post_type' => 'emp_voice',
				'posts_per_page' => -1,
				'paged' => $paged,
			); ?>

			<?php query_posts($args); ?>
			<?php if (have_posts()) :  ?>
				<ul class="lists fadeFromBottom" id="slideRecruit">
					<?php while (have_posts()) : the_post(); ?>
						<li>
							<a href="<?php the_permalink(); ?>">
								<?php if (get_field('position')) : ?>
									<div class="position">
										<?php the_field('position'); ?>
									</div>
								<?php endif; ?>
								<div class="image" class="fit-cover">
									<?php if (has_post_thumbnail()) : ?>
										<?php the_post_thumbnail(); ?>
									<?php else : ?>
										<img src="<?php bloginfo('template_url'); ?>/images/photograph/noimage.png" alt="noimage">
									<?php endif; ?>
								</div>
							</a>
							<div class="texts">
								<h3 class="v_title"><?php the_title(); ?></h3>
								<p class="v_info">
                  <?php the_field('hire_date'); ?>年 入社（キャリア<?php the_field('career'); ?>年）
                </p>
							</div>
						</li>
					<?php endwhile; ?>
				</ul>
			<?php endif; ?>
			<?php wp_reset_query(); ?>


			<!-- go to upsite -->
      <div class="btnWrap goto_list">
        <a href="<?php echo home_url(); ?>/emp_voice/" class="hvr-underline-from-left">VIEW LIST</a>
      </div>
		</div>




		</div><!-- bg_white -->
	</main>

	<?php get_template_part('parts_site_footer'); ?>

	<?php get_footer(); ?>