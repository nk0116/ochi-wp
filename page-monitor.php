<!-- <?php get_header(); ?> -->


<?php
/*
Template Name: モニター募集
*/
?>
<?php get_header(); ?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/page.css?<?php echo date_i18n("YmdHis"); ?>" type="text/css" />
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/clinic/css/monitor.css?<?php echo date_i18n("YmdHis"); ?>" type="text/css" />
<?php wp_head(); ?>
</head>
<body>
<?php get_header(2); ?>

<main class="page-monitor">
        <div class="fv-low">
          <div class="fv-low__inner">
            <picture>
              <source
                srcset="<?php bloginfo( 'stylesheet_directory' ); ?>/img/access/access-fv-sp.png"
                media="(max-width: 767px)"
                type="image/png"
              />
              <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/access/access-fv-pc.png" alt="" />
            </picture>
            <div class="fv-low__titles">
              <h1 class="title">monitor</h1>
              <p class="fv-low__titles--text">モニター募集</p>
            </div>
          </div>
        </div>

        <section class="monitor">
          <div class="monitor__inner">
            <p class="monitor__title">
              シンシアではモニター募集をしております。<br>
              対象の施術メニューやモニター価格についてはクリニックにお問い合わせください。
            </p>

            <div class="monitor__container">
              <div class="monitor__card">
                <div class="monitor__card--img">
                  <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/monitor/icon01.png" alt="" width="101" height="101">
                </div>
                <p class="monitor__text">SNS・動画配信・TV・雑誌・WEBサイトなど全ての媒体及び院の広告や院内資料に写真・映像の掲載が可能な方</p>
              </div>
              <div class="monitor__card">
                <div class="monitor__card--img">
                  <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/monitor/icon02.png" alt="" width="128" height="87">
                </div>
                <p class="monitor__text">施術のリスク、合併症をよく理解している事</p>
              </div>
              <div class="monitor__card">
                <div class="monitor__card--img">
                  <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/monitor/icon03.png" alt="" width="79" height="101">
                </div>
                <p class="monitor__text">指定された期日に体験報告書を提出</p>
              </div>
              <div class="monitor__card">
                <div class="monitor__card--img">
                  <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/monitor/icon04.png" alt="" width="91" height="91">
                </div>
                <p class="monitor__text">モニター写真撮影後のアクセサリーやタトゥーなどの修正は一切行いません</p>
              </div>
              <div class="monitor__card">
                <div class="monitor__card--img">
                  <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/monitor/icon05.png" alt="" width="69" height="66">
                </div>
                <p class="monitor__text center">身分証明書をご用意ください（原則として20歳以上の方）</p>
              </div>
              <div class="monitor__card">
                <div class="monitor__card--img">
                  <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/monitor/icon06.png" alt="" width="90" height="80">
                </div>
                <p class="monitor__text">ご来院時に長期経過の写真撮影及び、使用させていただく場合もございます</p>
              </div>
            </div>

            <ul class="monitor__list">
              <li class="monitor__text--min">※定員に達し次第終了とさせていただきます。ご了承ください。</li>
              <li class="monitor__text--min">※モニターとは症例モデルのことです。</li>
              <li class="monitor__text--min">※医療の発展・目的とした資料作成のため、写真・検査数値・組織標本などを提供していただきます。個人情報が明らかになることはありません。</li>
              <li class="monitor__text--min">※写真の使用範囲は、目的以外の部分を可能な限り制限します。 当院基準によりモニター不適となる場合がございます。ご了承ください。</li>
            </ul>
          </div>
        </section>
      </main>


<?php get_footer(); ?> 