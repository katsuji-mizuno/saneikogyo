<?php get_header(); ?>

<!-- for Page -->
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/home.css" media="all"/>


  </head>
  <body id="pageCreative" >
    <?php get_template_part('parts_site_header'); ?>

    <main class="contents">
      <div class="cols">
        <a class="col photograph"  href="<?php echo home_url(); ?>/photograph/">
          <div class="titleImage">
            <p class="eng">
              <img src="<?php bloginfo('template_directory'); ?>/images/creative/photograph.svg" alt="photograph">
            </p>
            <h1 class="ja">建築・竣工写真</h1>
            <div class="btnWrap">
              <!-- <a href="<?php echo home_url(); ?>/photograph/"> -->
                <div class="link_icon"  data-delay="500">
                  <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40" class="over">
                    <g id="btn_round_navy" transform="translate(-133 -531)">
                      <g id="circle" transform="translate(133 531)" fill="none" stroke="#000000" stroke-width="1">
                        <circle cx="20" cy="20" r="20" stroke="none" class="svg-elem-1"></circle>
                        <circle cx="20" cy="20" r="19.5" fill="none" class="svg-elem-2"></circle>
                      </g>
                      <path id="yoko" d="M-5199.842,9545.573h10.041" transform="translate(5347.452 -8994.423)" fill="none" stroke="#000000" stroke-width="1" class="svg-elem-3"></path>
                      <path id="arrow" d="M-5192.348,9541.014l3.884,3.093-3.884,3.462" transform="translate(5346.211 -8992.983)" fill="none" stroke="#000000" stroke-width="1" class="svg-elem-4"></path>
                    </g>
                  </svg>
                  <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40" class="base">
                    <g id="btn_round_navy" transform="translate(-133 -531)">
                      <g id="circle" transform="translate(133 531)" fill="none" stroke="#000000" stroke-width="1">
                        <circle cx="20" cy="20" r="20" stroke="none" class="svg-elem-1"></circle>
                        <circle cx="20" cy="20" r="19.5" fill="none" class="svg-elem-2"></circle>
                      </g>
                      <path id="yoko" d="M-5199.842,9545.573h10.041" transform="translate(5347.452 -8994.423)" fill="none" stroke="#000000" stroke-width="1" class="svg-elem-3"></path>
                      <path id="arrow" d="M-5192.348,9541.014l3.884,3.093-3.884,3.462" transform="translate(5346.211 -8992.983)" fill="none" stroke="#000000" stroke-width="1" class="svg-elem-4"></path>
                    </g>
                  </svg>
                </div>
              <!-- </a> -->
            </div>
          </div>
        </a>
        <a class="col drone" href="<?php echo home_url(); ?>/dorone/">
          <div class="titleImage">
            <p class="eng">
              <img src="<?php bloginfo('template_directory'); ?>/images/creative/drone_sp.svg" class="js_image_switch_tb" alt="photograph">
            </p>
            <h1 class="ja">ドローン空撮</h1>
            <div class="btnWrap">
              <!-- <a href="<?php echo home_url(); ?>/dorone/"> -->
                <div class="link_icon" data-delay="1000">
                  <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40" class="over">
                    <g id="btn_round_navy" transform="translate(-133 -531)">
                      <g id="circle" transform="translate(133 531)" fill="none" stroke="#ffffff" stroke-width="1">
                        <circle cx="20" cy="20" r="20" stroke="none" class="svg-elem-1"></circle>
                        <circle cx="20" cy="20" r="19.5" fill="none" class="svg-elem-2"></circle>
                      </g>
                      <path id="yoko" d="M-5199.842,9545.573h10.041" transform="translate(5347.452 -8994.423)" fill="none" stroke="#ffffff" stroke-width="1" class="svg-elem-3"></path>
                      <path id="arrow" d="M-5192.348,9541.014l3.884,3.093-3.884,3.462" transform="translate(5346.211 -8992.983)" fill="none" stroke="#ffffff" stroke-width="1" class="svg-elem-4"></path>
                    </g>
                  </svg>
                  <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40" class="base">
                    <g id="btn_round_navy" transform="translate(-133 -531)">
                      <g id="circle" transform="translate(133 531)" fill="none" stroke="#ffffff" stroke-width="1">
                        <circle cx="20" cy="20" r="20" stroke="none" class="svg-elem-1"></circle>
                        <circle cx="20" cy="20" r="19.5" fill="none" class="svg-elem-2"></circle>
                      </g>
                      <path id="yoko" d="M-5199.842,9545.573h10.041" transform="translate(5347.452 -8994.423)" fill="none" stroke="#ffffff" stroke-width="1" class="svg-elem-3"></path>
                      <path id="arrow" d="M-5192.348,9541.014l3.884,3.093-3.884,3.462" transform="translate(5346.211 -8992.983)" fill="none" stroke="#ffffff" stroke-width="1" class="svg-elem-4"></path>
                    </g>
                  </svg>
                </div>
              <!-- </a> -->
            </div>
          </div>
        </a>
      </div>
    </main>

<?php get_footer(); ?>
