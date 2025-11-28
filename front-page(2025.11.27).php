<?php get_header(); ?>

<main>
        <div class="fv">
          <!-- Swiper START -->
          <div class="swiper fv__swiper">
            <!-- メイン表示部分 -->
            <div class="swiper-wrapper">
              <!-- 各スライド -->
              <a href="https://cosmedical.jp/clinic/menu/" class="swiper-slide">
                <picture>
                  <!-- ブラウザ幅1023～768pxまでsampleの画像が表示 -->
                  <source
                    srcset="<?php bloginfo( 'stylesheet_directory' ); ?>/img/top/MV01-sp.png"
                    media="(max-width: 767px)"
                    type="image/png"
                  />
                  <!-- ブラウザ幅767px～から最小幅までsample2の画像が表示 -->
                  <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/top/MV01.png" alt="シンシアにお任せください" />
                </picture>
              </a>
              <a href="https://cosmedical.jp/clinic/menu/kuma/" class="swiper-slide">
                <picture>
                  <!-- ブラウザ幅1023～768pxまでsampleの画像が表示 -->
                  <source
                    srcset="<?php bloginfo( 'stylesheet_directory' ); ?>/img/top/MV02-sp.png"
                    media="(max-width: 767px)"
                    type="image/png"
                  />
                  <!-- ブラウザ幅767px～から最小幅までsample2の画像が表示 -->
                  <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/top/MV02.png" alt="シンシア式経結膜脱脂術" />
                </picture>
              </a>
              <!-- <a href="https://cosmedical.jp/clinic/menu/reverse-aging/" class="swiper-slide">
                <picture> -->
                  <!-- ブラウザ幅1023～768pxまでsampleの画像が表示 -->
                  <!-- <source
                    srcset="<?php bloginfo( 'stylesheet_directory' ); ?>/img/top/MV03-sp.png"
                    media="(max-width: 767px)"
                    type="image/png"
                  /> -->
                  <!-- ブラウザ幅767px～から最小幅までsample2の画像が表示 -->
                  <!-- <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/top/MV03.png" alt="ナチュラルな美しさ" />
                </picture>
              </a> -->
              <a href="#access" class="swiper-slide">
                <picture>
                  <!-- ブラウザ幅1023～768pxまでsampleの画像が表示 -->
                  <source
                    srcset="<?php bloginfo( 'stylesheet_directory' ); ?>/img/top/MV04-sp.png"
                    media="(max-width: 767px)"
                    type="image/png"
                  />
                  <!-- ブラウザ幅767px～から最小幅までsample2の画像が表示 -->
                  <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/top/MV01-1.png" alt="銀座移転OPEN" />
                </picture>
              </a>
            </div>
          </div>

          <div class="fv__nav sp_n">
            <div class="fv__pagination"></div>
          </div>
          <!-- Swiper END -->
        </div>

        <section class="campaign">
          <div class="campaign__inner">
            <h2 class="title">Monthly Campaign</h2>

            <div class="campaign__content">
              <h3 class="campaign__subtitle">両院共通</h3>

              <!-- Swiper START -->
              <div class="swiper campaign__swiper">
                <!-- メイン表示部分 -->
                <div class="swiper-wrapper">
                  <!-- 各スライド -->
                  <?php
                  // 「pickup-menu」カスタム投稿タイプから「両院共通」カテゴリーのみ取得、かつスラッグが32, 33, 34の投稿を除外
                  $exclude_slugs = ['32','33','34'];
                  // スラッグから投稿IDを取得
                  $exclude_ids = [];
                  foreach ( $exclude_slugs as $slug ) {
                      $post = get_page_by_path( $slug, OBJECT, 'pickup-menu' );
                      if ( $post ) {
                        $exclude_ids[] = $post->ID;
                      }
                  }

                  $campaign_args = [
                    'post_type'      => 'pickup-menu',
                    'posts_per_page' => -1, // 全件取得
                    'post_status'    => 'publish',
                    'orderby'        => 'date',
                    'order'          => 'DESC',
                    'post__not_in'   => $exclude_ids, // 除外
                    'tax_query'      => [
                      [
                        'taxonomy' => 'pickup-menu__category', // タクソノミースラッグ
                        'field'    => 'name',                 // 「カテゴリ名」で絞り込み
                        'terms'    => ['両院共通'],
                        'operator' => 'IN',
                      ],
                    ],
                  ];
                  $campaign_query = new WP_Query($campaign_args);
                  if ($campaign_query->have_posts()) :
                    while ($campaign_query->have_posts()) : $campaign_query->the_post();
                      // アイキャッチ画像
                      $image_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
                      // タイトル
                      $title = get_the_title();
                  ?>
                    <div class="swiper-slide">
                      <div class="campaign__item">
                        <div class="campaign__image">
                          <?php if ($image_url): ?>
                            <img src="<?php echo esc_url($image_url); ?>" alt="<?php echo esc_attr($title); ?>" />
                          <?php else: ?>
                            <img src="<?php bloginfo('stylesheet_directory'); ?>/img/common/noimg.png" alt="No Image" />
                          <?php endif; ?>
                        </div>

                      </div>
                    </div>
                  <?php
                    endwhile;
                    wp_reset_postdata();
                  else:
                  ?>
                    <div class="swiper-slide">
                      <div class="campaign__item">
                        <div class="campaign__image">
                          <img src="<?php bloginfo('stylesheet_directory'); ?>/img/common/noimg.png" alt="No Campaign" />
                        </div>
                        <p class="campaign__text">現在キャンペーンはありません。</p>
                      </div>
                    </div>
                  <?php endif; ?>


                </div>

                <div class="campaign__nav">
                  <div class="campaign__next">
                    <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/top/btn01.png" alt="" />
                  </div>
                  <div class="campaign__pagination"></div>
                  <div class="campaign__prev">
                    <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/top/btn01.png" alt="" />
                  </div>
                </div>
              </div>
              <!-- Swiper END -->
            </div>

            <div class="campaign__content02">
              <h3 class="campaign__subtitle">各院限定</h3>

              <!-- Swiper START -->
              <div class="swiper campaign__swiper campaign__swiper2">
                <!-- メイン表示部分 -->
                <div class="swiper-wrapper">
                  <!-- 各スライド -->
                  <?php
                  // 「pickup-menu」カスタム投稿タイプから「銀座院」と「渋谷院」両方の「カテゴリ名」で絞り込み
                  $args = array(
                    'post_type' => 'pickup-menu',
                    'posts_per_page' => 10,
                    'tax_query' => array(
                      array(
                        'taxonomy' => 'pickup-menu__category', // タクソノミースラッグ（必要であれば修正）
                        'field'    => 'name',                  // 「カテゴリ名」で絞り込み
                        'terms'    => array('銀座院', '渋谷院'),
                        'operator' => 'IN',
                      ),
                    ),
                  );
                  $campaigns_query = new WP_Query($args);
                  if ($campaigns_query->have_posts()):
                    while ($campaigns_query->have_posts()): $campaigns_query->the_post();
                      // カテゴリ名（日本語）を取得
                      $cats = get_the_terms(get_the_ID(), 'pickup-menu__category');
                      $cat_label = '';
                      if ($cats && !is_wp_error($cats)) {
                        foreach ($cats as $cat) {
                          if ($cat->name === '銀座院' || $cat->name === '渋谷院') {
                            $cat_label = $cat->name;
                            break;
                          }
                        }
                      }
                      if (has_post_thumbnail()) {
                        $img_url = get_the_post_thumbnail_url(get_the_ID(), 'medium');
                      } else {
                        $img_url = get_template_directory_uri() . '/img/common/noimg.png';
                      }
                  ?>
                  <div class="swiper-slide">
                    <div class="campaign__item">
                      <div class="campaign__image">
                        <img src="<?php echo esc_url($img_url); ?>" alt="<?php echo esc_attr($cat_label . 'キャンペーン'); ?>" />
                      </div>
                    </div>
                  </div>
                  <?php
                    endwhile;
                    wp_reset_postdata();
                  else:
                  ?>
                  <div class="swiper-slide">
                    <div class="campaign__item">
                      <div class="campaign__image">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/common/noimg.png" alt="No Campaign" />
                      </div>
                      <p class="campaign__text">現在キャンペーンはありません。</p>
                    </div>
                  </div>
                  <?php endif; ?>

                </div>

                <div class="campaign__nav">
                  <div class="campaign__next">
                    <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/top/btn01.png" alt="" />
                  </div>
                  <div class="campaign__pagination"></div>
                  <div class="campaign__prev">
                    <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/top/btn01.png" alt="" />
                  </div>
                </div>
              </div>
              <!-- Swiper END -->
            </div>

            <a href="<?php echo esc_url( home_url('campaign') ); ?>" class="btn access__btn"> VIEW MORE </a>

          </div>
        </section>

        <!-- <section class="menu">
          <div class="inner">
            <h2 class="title">Pickup <br class="pc_n" />Menu</h2>

            <div class="menu__content">
              <a class="menu__item" href="https://cosmedical.jp/clinic/menu/removal/">
                <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/top/pickup01.png" alt="医療脱毛 女性" />
              </a>
              <a class="menu__item" href="https://cosmedical.jp/clinic/menu/removal-mens/">
                <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/top/pickup02.png" alt="医療脱毛 男性" />
              </a>
            </div>


          </div>
        </section> -->

        <section class="recommend">
          <div class="inner">
            <h2 class="title">Recommend Menu</h2>

            <div class="recommend__content">
              <a
                class="recommend__item"
                href="https://cosmedical.jp/clinic/menu/kuma/"
              >
                <img
                  src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/top/cards01.jpg"
                  alt="目の下のクマ・たるみ治療のイメージ画像"
                />
                <p class="recommend__text">目の下のクマ・たるみ治療</p>
                <div class="recommend__text--hover">
                  <p>目の下のクマ・たるみ治療</p>
                  <p>
                    老け顔や疲れ顔といったマイナスの印象の原因となるクマやたるみを改善する治療です。
                  </p>
                </div>
              </a>
              <a
                class="recommend__item"
                href="https://cosmedical.jp/clinic/menu/golgo/"
              >
                <img
                  src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/top/cards02.jpg"
                  alt="ゴルゴ線治療のイメージ画像"
                />
                <p class="recommend__text">
                  ゴルゴ線治療<span>（ゴルゴライン、インディアンライン）</span>
                </p>
                <div class="recommend__text--hover">
                  <p>
                    ゴルゴ線治療<br /><span
                      >（ゴルゴライン、インディアンライン）</span
                    >
                  </p>
                  <p>
                    目頭から頬にかけてと斜めに入るゴルゴ線<br />（ミッドチークライン）を改善する治療です。
                  </p>
                </div>
              </a>
              <a
                class="recommend__item"
                href="https://cosmedical.jp/clinic/menu/facelift/"
              >
                <img
                  src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/top/cards03.jpg"
                  alt="フェイスリフトのイメージ画像"
                />
                <p class="recommend__text">フェイスリフト</p>
                <div class="recommend__text--hover">
                  <p>シンシアシグネチャー<br />フェイスリフト</p>
                  <p>
                    若返り度・クオリティ 共にNo.1！<br />シンシアオリジナルの本格リフトアップ治療です。
                  </p>
                </div>
                </a><a class="recommend__item" href="https://cosmedical.jp/clinic/menu/crf/">
                <img
                  src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/top/cards04.jpg"
                  alt="コンデンスリッチファット（CRF）豊胸のイメージ画像"
                />
                <p class="recommend__text">
                  コンデンスリッチファット（CRF）豊胸
                </p>
                <div class="recommend__text--hover">
                  <p>コンデンスリッチファット<br class="pc_n" />（CRF）豊胸</p>
                  <p>
                    シリコンバッグなどの人工物を使用しないので安全<br />
                    で、見た目も触感も注入後の仕上がりが自然でバレ<br />
                    にくく、年をとっても不自然にならない豊胸です。
                  </p>
                </div>
              </a>
              <a
                class="recommend__item"
                href="https://cosmedical.jp/clinic/menu/vaser-acquicell/"
              >
                <img
                  src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/top/cards05.jpg"
                  alt="ベイザー®脂肪吸引×アキーセル脂肪吸引のイメージ画像"
                />
                <p class="recommend__text">
                  ベイザー®脂肪吸引×<br class="pc_n" />アキーセル脂肪吸引
                </p>
                <div class="recommend__text--hover">
                  <p>ベイザー®脂肪吸引×<br class="pc_n" />アキーセル脂肪吸引</p>
                  <p>
                    超音波振動により、溶解した脂肪は、カニューレで<br />
                    優しく吸引除去することができるため、<br />
                    従来の方法に比べ、術後の出血や腫れや痛みが少な<br />
                    くダウンタイムが短い脂肪吸引といわれています。
                  </p>
                </div>
              </a>
              <a
                class="recommend__item"
                href="https://cosmedical.jp/clinic/menu/medical-laser/"
              >
                <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/top/cards06.jpg" alt="医療脱毛のイメージ画像" />
                <p class="recommend__text">医療脱毛</p>
                <div class="recommend__text--hover">
                  <p>医療脱毛</p>
                  <p>
                    患者様のスキンタイプ・毛質に合わせた施術が<br />
                    可能で、高品質・安全な脱毛を実現しました。<br />
                    痛みも少なく、効果が高い医療脱毛が、<br />
                    即時予約で、都度払いにて利用いただけます。
                  </p>
                </div>
              </a>
            </div>

            <a href="https://cosmedical.jp/clinic/menu/" class="btn recommend__btn">
              View More
            </a>
          </div>
        </section>

        <section class="ploblem">
          <div class="inner">
            <h2 class="title">Problem <br class="pc_n" />Menu</h2>

            <div class="ploblem__contents">
              <div class="ploblem__content">
                <div class="ploblem__content-title">美容外科</div>

                <div class="ploblem__tabs" role="tablist" aria-label="お悩みカテゴリ" >
                  <button class="ploblem__tab is-active" role="tab" aria-selected="true" aria-controls="panel-eye" id="tab-eye" data-target="panel-eye" >
                    <span class="ploblem__icon"><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/top/icon-eye.svg" alt="目のアイコン"/></span>
                    <div class="ploblem__tab-title">目元・<br>ゴルゴ線</div>
                  </button>

                  <button class="ploblem__tab" role="tab" aria-selected="false" aria-controls="panel-body" id="tab-body" data-target="panel-body" >
                    <span class="ploblem__icon"><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/top/icon-body.svg" alt="体のアイコン"/></span>
                    <div class="ploblem__tab-title">身体</div>
                  </button>

                  <button class="ploblem__tab" role="tab" aria-selected="false" aria-controls="panel-bust" id="tab-bust" data-target="panel-bust" >
                    <span class="ploblem__icon"><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/top/icon-bust.svg" alt="バストのアイコン"/></span>
                    <div class="ploblem__tab-title">バスト</div>
                  </button>

                  <button class="ploblem__tab" role="tab" aria-selected="false" aria-controls="panel-nose" id="tab-nose" data-target="panel-nose" >
                    <span class="ploblem__icon"><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/top/icon-nose.svg" alt="鼻のアイコン"/></span>
                    <div class="ploblem__tab-title">鼻</div>
                  </button>

                  <button class="ploblem__tab" role="tab" aria-selected="false" aria-controls="panel-mouth" id="tab-mouth" data-target="panel-mouth" >
                    <span class="ploblem__icon"><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/top/icon-mouth.svg" alt="口のアイコン"/></span>
                    <div class="ploblem__tab-title">口</div>
                  </button>

                  <button class="ploblem__tab" role="tab" aria-selected="true" aria-controls="panel-face-line" id="tab-face-line" data-target="panel-face-line" >
                    <span class="ploblem__icon"><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/top/icon-face-line.svg" alt="輪郭のアイコン"/></span>
                    <div class="ploblem__tab-title">輪郭</div>
                  </button>
                </div>

                <div class="ploblem__body">
                  <div class="ploblem__panels">
                    <div class="ploblem__panel is-active" id="panel-eye" role="tabpanel" aria-labelledby="tab-eye" >
                      <div class="ploblem__list">
                        <a href="https://cosmedical.jp/clinic/menu/futae/" class="ploblem__item">
                          <span class="ploblem__label">二重</span>
                        </a>
                        <a href="https://cosmedical.jp/clinic/menu/kuma/" class="ploblem__item">
                          <span class="ploblem__label">目の下のくま（ヘルニア）</span>
                        </a>
                        <a href="https://cosmedical.jp/clinic/menu/tarumi-ue/" class="ploblem__item">
                          <span class="ploblem__label">瞼のたるみ</span>
                        </a>
                        <a href="https://cosmedical.jp/clinic/menu/ganken/" class="ploblem__item">
                          <span class="ploblem__label">眼瞼下垂</span>
                        </a>
                        <a href="https://cosmedical.jp/clinic/menu/megashira/" class="ploblem__item">
                          <span class="ploblem__label">目頭切開</span>
                        </a>
                        <a href="https://cosmedical.jp/clinic/menu/microcat/" class="ploblem__item">
                          <span class="ploblem__label">瞼の脂肪取り</span>
                        </a>
                        <a href="https://cosmedical.jp/clinic/menu/golgo/" class="ploblem__item">
                          <span class="ploblem__label">ゴルゴ線剥離</span>
                        </a>
                      </div>
                    </div>
                    <div class="ploblem__panel" id="panel-body" role="tabpanel" aria-labelledby="tab-body" hidden >
                      <div class="ploblem__list">
                        <a href="https://cosmedical.jp/clinic/menu/lipo-body/" class="ploblem__item">
                          <span class="ploblem__label">脂肪吸引</span>
                        </a>
                        <a href="https://cosmedical.jp/clinic/menu/waki-about/" class="ploblem__item">
                          <span class="ploblem__label">ワキガ</span>
                        </a>
                        <a href="https://cosmedical.jp/clinic/menu/gynecology/" class="ploblem__item">
                          <span class="ploblem__label">婦人科形成</span>
                        </a>
                      </div>
                    </div>
                    <div class="ploblem__panel" id="panel-bust" role="tabpanel" aria-labelledby="tab-bust" hidden >
                      <div class="ploblem__list">
                        <a href="https://cosmedical.jp/clinic/menu/crf/" class="ploblem__item">
                          <span class="ploblem__label">コンデンスリッチファット豊胸</span>
                        </a>
                        <a href="https://cosmedical.jp/clinic/menu/nipple/" class="ploblem__item">
                          <span class="ploblem__label">陥没乳頭</span>
                        </a>
                        <a href="https://cosmedical.jp/clinic/menu/nipple/" class="ploblem__item">
                          <span class="ploblem__label">乳頭縮小</span>
                        </a>
                        <a href="https://cosmedical.jp/clinic/menu/implant/" class="ploblem__item">
                          <span class="ploblem__label">他院バックインプラント除去</span>
                        </a>
                      </div>
                    </div>
                    <div class="ploblem__panel" id="panel-nose" role="tabpanel" aria-labelledby="tab-nose" hidden >
                      <div class="ploblem__list">
                        <a href="https://cosmedical.jp/clinic/menu/nose-detail/" class="ploblem__item">
                          <span class="ploblem__label">隆鼻術（プロテーゼ・ヒアルロン酸）</span>
                        </a>
                        <a href="https://cosmedical.jp/clinic/menu/nose-detail/" class="ploblem__item">
                          <span class="ploblem__label">鼻尖形成</span>
                        </a>
                        <a href="https://cosmedical.jp/clinic/menu/nose/" class="ploblem__item">
                          <span class="ploblem__label">小鼻縮小</span>
                        </a>
                      </div>
                    </div>
                    <div class="ploblem__panel" id="panel-mouth" role="tabpanel" aria-labelledby="tab-mouth" hidden >
                      <div class="ploblem__list">
                        <a href="https://cosmedical.jp/clinic/menu/lip/" class="ploblem__item">
                          <span class="ploblem__label">口唇縮小術</span>
                        </a>
                      </div>
                    </div>

                    <div class="ploblem__panel" id="panel-face-line" role="tabpanel" aria-labelledby="tab-face-line" hidden >
                      <div class="ploblem__list">
                        <a href="https://cosmedical.jp/clinic/menu/facelift-signature/" class="ploblem__item">
                          <span class="ploblem__label">フェイスリフト<br class="pc_n" />（シグネチャー、トータルSMAS）</span>
                        </a>
                        <a href="https://cosmedical.jp/clinic/menu/facelift-mini/" class="ploblem__item">
                          <span class="ploblem__label">部分フェイスリフト<br class="pc_n" />（全額リフト・ミニリフト）</span>
                        </a>
                        <a href="https://cosmedical.jp/clinic/menu/itolift/" class="ploblem__item">
                          <span class="ploblem__label">糸リフト</span>
                        </a>
                        <a href="https://cosmedical.jp/clinic/menu/bnls/" class="ploblem__item">
                          <span class="ploblem__label">BNLS治療</span>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="ploblem__content-2">
              <div class="ploblem__content-title">美容皮膚科</div>

                <div class="ploblem__tabs" role="tablist" aria-label="お悩みカテゴリ" >
                  <button class="ploblem__tab-2 is-active" role="tab" aria-selected="true" aria-controls="panel-skin" id="tab-skin" data-target="panel-skin" >
                    <span class="ploblem__icon"><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/top/icon-skin.svg" alt="お肌のアイコン"/></span>
                    <div class="ploblem__tab-title">お肌</div>
                  </button>

                  <button class="ploblem__tab-2" role="tab" aria-selected="false" aria-controls="panel-laxity" id="tab-laxity" data-target="panel-laxity" >
                    <span class="ploblem__icon"><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/top/icon-laxity.svg" alt="たるみのアイコン"/></span>
                    <div class="ploblem__tab-title">たるみ</div>
                  </button>

                  <button class="ploblem__tab-2" role="tab" aria-selected="false" aria-controls="panel-injection" id="tab-injection" data-target="panel-injection" >
                    <span class="ploblem__icon"><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/top/icon-injection.svg" alt="注入のアイコン"/></span>
                    <div class="ploblem__tab-title">注入</div>
                  </button>

                  <button class="ploblem__tab-2" role="tab" aria-selected="false" aria-controls="panel-others" id="tab-others" data-target="panel-others" >
                    <span class="ploblem__icon"><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/top/icon-others.svg" alt="その他のアイコン"/></span>
                    <div class="ploblem__tab-title">その他</div>
                  </button>

                </div>

                <div class="ploblem__body-2">
                  <div class="ploblem__panels-2">
                    <div class="ploblem__panel-2 is-active" id="panel-skin" role="tabpanel" aria-labelledby="tab-skin" >
                      <div class="ploblem__list-2">
                        <a href="https://cosmedical.jp/clinic/menu/bihaku-bihada/" class="ploblem__item-2">
                          <span class="ploblem__label-2">しみ・くすみ・そばかす</span>
                        </a>
                        <a href="https://cosmedical.jp/clinic/menu/kanpan-bihaku/" class="ploblem__item-2">
                          <span class="ploblem__label-2">肝斑</span>
                        </a>
                        <a href="https://cosmedical.jp/clinic/menu/acne/" class="ploblem__item-2">
                          <span class="ploblem__label-2">にきび・にきび痕</span>
                        </a>
                        <a href="https://cosmedical.jp/clinic/menu/genesis/" class="ploblem__item-2">
                          <span class="ploblem__label-2">毛穴</span>
                        </a>
                        <a href="https://cosmedical.jp/clinic/menu/akaragao/" class="ploblem__item-2">
                          <span class="ploblem__label-2">赤ら顔 (酒さ) ・毛細血管拡張</span>
                        </a>
                        <a href="https://cosmedical.jp/clinic/menu/ibo-hokuro/" class="ploblem__item-2">
                          <span class="ploblem__label-2">いぼ・ホクロ除去</span>
                        </a>
                        <a href="https://cosmedical.jp/clinic/menu/lichen-pilaris/" class="ploblem__item-2">
                          <span class="ploblem__label-2">毛孔性苔癬 (ダーマローラー)</span>
                        </a>
                      </div>
                    </div>

                    <div class="ploblem__panel-2" id="panel-laxity" role="tabpanel" aria-labelledby="tab-laxity" hidden >
                      <div class="ploblem__list-2">
                        <a href="https://cosmedical.jp/clinic/menu/thermacool-flx/" class="ploblem__item-2">
                          <span class="ploblem__label-2">サーマクール</span>
                        </a>
                        <a href="https://cosmedical.jp/clinic/menu/ulthera/" class="ploblem__item-2">
                          <span class="ploblem__label-2">ウルセラ</span>
                        </a>
                        <a href="https://cosmedical.jp/clinic/menu/ultracel-zi-q/" class="ploblem__item-2">
                          <span class="ploblem__label-2">医療HIFU</span>
                        </a>
                        <a href="https://cosmedical.jp/clinic/menu/density/" class="ploblem__item-2">
                          <span class="ploblem__label-2">高周波</span>
                        </a>
                      </div>
                    </div>

                    <div class="ploblem__panel-2" id="panel-injection" role="tabpanel" aria-labelledby="tab-injection" hidden >
                      <div class="ploblem__list-2">
                        <a href="https://cosmedical.jp/clinic/menu/botox/" class="ploblem__item-2">
                          <span class="ploblem__label-2">ボトックス</span>
                        </a>
                        <a href="https://cosmedical.jp/clinic/menu/hyaluronic-top/" class="ploblem__item-2">
                          <span class="ploblem__label-2">ヒアルロン酸</span>
                        </a>
                        <a href="https://cosmedical.jp/clinic/menu/pluryal-densifier/" class="ploblem__item-2">
                          <span class="ploblem__label-2">肌育治療</span>
                        </a>
                      </div>
                    </div>

                    <div class="ploblem__panel-2" id="panel-others" role="tabpanel" aria-labelledby="tab-others" hidden >
                      <div class="ploblem__list-2">
                        <a href="https://cosmedical.jp/clinic/menu/medical-artmake/" class="ploblem__item-2">
                          <span class="ploblem__label-2">アートメイク</span>
                        </a>
                        <a href="https://cosmedical.jp/clinic/menu/removal-tattoo-laser/" class="ploblem__item-2">
                          <span class="ploblem__label-2">タトゥー除去</span>
                        </a>
                        <a href="https://cosmedical.jp/clinic/menu/ed/" class="ploblem__item-2">
                          <span class="ploblem__label-2">ED治療</span>
                        </a>
                        <a href="https://cosmedical.jp/clinic/menu/glossfactor/" class="ploblem__item-2">
                          <span class="ploblem__label-2">毛髪再生治療</span>
                        </a>
                        <a href="https://cosmedical.jp/clinic/menu/cosme/" class="ploblem__item-2">
                          <span class="ploblem__label-2">化粧品</span>
                        </a>
                        <a href="https://cosmedical.jp/clinic/menu/supplement/" class="ploblem__item-2">
                          <span class="ploblem__label-2">内服</span>
                        </a>
                        <a href="https://cosmedical.jp/clinic/menu/beauty-injection/" class="ploblem__item-2">
                          <span class="ploblem__label-2">点滴</span>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>


            </div>
          </div>
        </section>

        <!-- <section class="case">
          <div class="inner">
            <h2 class="title">Case</h2>

            <div class="case__content swiper case__swiper">
              <div class="swiper-wrapper">
                <div class="case__item swiper-slide">
                  <div class="case__before">
                    <div class="case__image"></div>
                    <p class="case__label">Before</p>
                  </div>

                  <div class="case__after">
                    <div class="case__image"></div>
                    <p class="case__label">After</p>
                  </div>

                  <div class="case__info">
                    <div class="case__detail">
                      <p class="case__detail-title">施術名</p>
                      <p class="case__detail-text">テキストテキスト</p>
                    </div>
                    <div class="case__detail">
                      <p class="case__detail-title">費用目安</p>
                      <p class="case__detail-text">￥00,000(税込)</p>
                    </div>
                    <div class="case__detail">
                      <p class="case__detail-title">リスク・副作用</p>
                      <p class="case__detail-text">
                        リスク・副作用が入ります。リスク・副作用が入ります。
                      </p>
                    </div>
                    <div class="case__detail">
                      <p class="case__detail-title">更新日</p>
                      <p class="case__detail-text">2025年５月20日</p>
                    </div>
                  </div>
                </div>
                <div class="case__item swiper-slide">
                  <div class="case__before">
                    <div class="case__image"></div>
                    <p class="case__label">Before</p>
                  </div>

                  <div class="case__after">
                    <div class="case__image"></div>
                    <p class="case__label">After</p>
                  </div>

                  <div class="case__info">
                    <div class="case__detail">
                      <p class="case__detail-title">施術名</p>
                      <p class="case__detail-text">テキストテキスト</p>
                    </div>
                    <div class="case__detail">
                      <p class="case__detail-title">費用目安</p>
                      <p class="case__detail-text">￥00,000(税込)</p>
                    </div>
                    <div class="case__detail">
                      <p class="case__detail-title">リスク・副作用</p>
                      <p class="case__detail-text">
                        リスク・副作用が入ります。リスク・副作用が入ります。
                      </p>
                    </div>
                    <div class="case__detail">
                      <p class="case__detail-title">更新日</p>
                      <p class="case__detail-text">2025年５月20日</p>
                    </div>
                  </div>
                </div>
                <div class="case__item swiper-slide">
                  <div class="case__before">
                    <div class="case__image"></div>
                    <p class="case__label">Before</p>
                  </div>

                  <div class="case__after">
                    <div class="case__image"></div>
                    <p class="case__label">After</p>
                  </div>

                  <div class="case__info">
                    <div class="case__detail">
                      <p class="case__detail-title">施術名</p>
                      <p class="case__detail-text">テキストテキスト</p>
                    </div>
                    <div class="case__detail">
                      <p class="case__detail-title">費用目安</p>
                      <p class="case__detail-text">￥00,000(税込)</p>
                    </div>
                    <div class="case__detail">
                      <p class="case__detail-title">リスク・副作用</p>
                      <p class="case__detail-text">
                        リスク・副作用が入ります。リスク・副作用が入ります。
                      </p>
                    </div>
                    <div class="case__detail">
                      <p class="case__detail-title">更新日</p>
                      <p class="case__detail-text">2025年５月20日</p>
                    </div>
                  </div>
                </div>
                <div class="case__item swiper-slide">
                  <div class="case__before">
                    <div class="case__image"></div>
                    <p class="case__label">Before</p>
                  </div>

                  <div class="case__after">
                    <div class="case__image"></div>
                    <p class="case__label">After</p>
                  </div>

                  <div class="case__info">
                    <div class="case__detail">
                      <p class="case__detail-title">施術名</p>
                      <p class="case__detail-text">テキストテキスト</p>
                    </div>
                    <div class="case__detail">
                      <p class="case__detail-title">費用目安</p>
                      <p class="case__detail-text">￥00,000(税込)</p>
                    </div>
                    <div class="case__detail">
                      <p class="case__detail-title">リスク・副作用</p>
                      <p class="case__detail-text">
                        リスク・副作用が入ります。リスク・副作用が入ります。
                      </p>
                    </div>
                    <div class="case__detail">
                      <p class="case__detail-title">更新日</p>
                      <p class="case__detail-text">2025年５月20日</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <a href="<?php echo esc_url( home_url('case/') ); ?>" class="btn case__btn"> VIEW MORE </a>
          </div>
        </section> -->

        <section class="doctor">
          <div class="inner">
            <div class="doctor__content">
              <div class="doctor__text">
                <h2 class="title doctor__title">Doctor</h2>

                <p class="doctor__description">
                  シンシアでは、資格を持たないカウンセラーによるカウンセリングは行っておりません。<br />
                  カウンセリングからアフターフォローまで担当の医師が責任を持って対応しています。
                </p>
              </div>

              <!-- <div class="doctor__image">
                <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/top/doctor.jpg" alt="" />
              </div> -->
              <div class="doctor__list">
                <div class="doctor-list__content">
                  <!-- 又吉 秀樹 -->
                  <div class="doctor-list__card">
                    <div class="doctor-list__card__img">
                      <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/staff/doctor-matayoshi.png" alt="又吉 秀樹" width="328" height="188">
                    </div>
                    <div class="doctor-list__card__info">
                      <div class="doctor-list__card__info--place">
                        <p>銀座院</p>
                      </div>
                      <p class="doctor-list__card__info--post">総院長　銀座院院長</p>
                      <p class="doctor-list__card__info--name">又吉 秀樹</p>
                      <div class="doctor-list__card__info--roman">Hideki Matayoshi</div>
                      <div class="doctor-list__card__info--sns">
                        <a href="https://www.instagram.com/dr.matayoshi/" target="_blank" class="doctor-list__card__info--link doctor-instagram">
                          <p>Instagram</p>
                          <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/staff/icon-instagram.png" alt="" width="26" height="26">
                        </a>
                        <a href="https://twitter.com/MatayoshiHideki" target="_blank" class="doctor-list__card__info--link doctor-x">
                          <p>X</p>
                          <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/staff/icon-x.png" alt="" width="18" height="18">
                        </a>
                        <a href="https://www.youtube.com/@CYNTHIA_Dr.Matayoshi" target="_blank" class="doctor-list__card__info--link doctor-youtube">
                          <p>YouTube</p>
                          <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/staff/icon-youtube.png" alt="" width="28" height="20">
                        </a>
                        <a href="https://cosmedical.jp/drcynthia/" target="_blank" class="doctor-list__card__info--link doctor-blog">
                          <p>ブログ</p>
                        </a>
                      </div>
                    </div>
                  </div>

                  <!-- 村住 昌彦 -->
                  <div class="doctor-list__card">
                    <div class="doctor-list__card__img">
                      <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/staff/doctor-murazumi.png" alt="村住 昌彦" width="328" height="188">
                    </div>
                    <div class="doctor-list__card__info">
                      <div class="doctor-list__card__info--place">
                        <p>渋谷院</p>
                      </div>
                      <p class="doctor-list__card__info--post">渋谷院 院長</p>
                      <p class="doctor-list__card__info--name">村住 昌彦</p>
                      <div class="doctor-list__card__info--roman">Murazumi</div>
                      <div class="doctor-list__card__info--sns">
                        <a href="https://www.instagram.com/mz_cynthia.sby/" target="_blank" class="doctor-list__card__info--link doctor-instagram">
                          <p>Instagram</p>
                          <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/staff/icon-instagram.png" alt="" width="26" height="26">
                        </a>
                        <a href="https://ameblo.jp/cynthia-dr-murazumi/" target="_blank" class="doctor-list__card__info--link doctor-blog">
                          <p>ブログ</p>
                        </a>
                      </div>
                    </div>
                  </div>

                  <!-- 野口 道男 -->
                  <div class="doctor-list__card">
                    <div class="doctor-list__card__img">
                      <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/staff/doctor-noguchi.png" alt="野口 道男" width="328" height="188">
                    </div>
                    <div class="doctor-list__card__info">
                      <div class="doctor-list__card__info--place">
                        <p>銀座院</p>
                        <p>渋谷院</p>
                      </div>
                      <p class="doctor-list__card__info--post">医師</p>
                      <p class="doctor-list__card__info--name">野口 道男</p>
                      <div class="doctor-list__card__info--roman">Noguchi</div>
                      <div class="doctor-list__card__info--sns">
                        <a href="https://www.instagram.com/noguchi_michio/" target="_blank" class="doctor-list__card__info--link doctor-instagram">
                          <p>Instagram</p>
                          <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/staff/icon-instagram.png" alt="" width="26" height="26">
                        </a>
                        <a href="https://ameblo.jp/cynthia-dr-noguchi" target="_blank" class="doctor-list__card__info--link doctor-blog">
                          <p>ブログ</p>
                        </a>
                      </div>
                    </div>
                  </div>

                  <!-- 村松 正法 -->
                  <div class="doctor-list__card">
                    <div class="doctor-list__card__img">
                      <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/staff/doctor-muramatsu.png" alt="村松 正法" width="328" height="188">
                    </div>
                    <div class="doctor-list__card__info">
                      <div class="doctor-list__card__info--place">
                        <p>銀座院</p>
                        <p>渋谷院</p>
                      </div>
                      <p class="doctor-list__card__info--post">医師</p>
                      <p class="doctor-list__card__info--name">村松 正法</p>
                      <div class="doctor-list__card__info--roman">Muramatsu</div>
                      <div class="doctor-list__card__info--sns">
                        <a href="https://www.instagram.com/dr.masanori31/" target="_blank" class="doctor-list__card__info--link doctor-instagram">
                          <p>Instagram</p>
                          <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/staff/icon-instagram.png" alt="" width="26" height="26">
                        </a>
                        <a href="https://www.youtube.com/@CYNTHIA_Dr.Muramatsu" target="_blank" class="doctor-list__card__info--link doctor-youtube">
                          <p>YouTube</p>
                          <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/staff/icon-youtube.png" alt="" width="28" height="20">
                        </a>
                        <a href="https://ameblo.jp/cynthia-dr-muramatu" target="_blank" class="doctor-list__card__info--link doctor-blog">
                          <p>ブログ</p>
                        </a>
                      </div>
                    </div>
                  </div>

                  <!-- 梁 淑姫 -->
                  <div class="doctor-list__card">
                    <div class="doctor-list__card__img">
                      <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/staff/doctor-ryo.png" alt="梁 淑姫" width="328" height="188">
                    </div>
                    <div class="doctor-list__card__info">
                      <div class="doctor-list__card__info--place">
                        <p>銀座院</p>
                        <p>渋谷院</p>
                      </div>
                      <p class="doctor-list__card__info--post">医師</p>
                      <p class="doctor-list__card__info--name">梁 淑姫</p>
                      <div class="doctor-list__card__info--roman">Ryo</div>
                      <div class="doctor-list__card__info--sns">
                        <a href="https://www.instagram.com/cynthia_dr.ryo/" target="_blank" class="doctor-list__card__info--link doctor-instagram">
                          <p>Instagram</p>
                          <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/staff/icon-instagram.png" alt="" width="26" height="26">
                        </a>
                        <a href="https://ameblo.jp/cynthia-dr-ryo/" target="_blank" class="doctor-list__card__info--link doctor-blog">
                          <p>ブログ</p>
                        </a>
                      </div>
                    </div>
                  </div>

                  <!-- 吉武 彰子 -->
                  <div class="doctor-list__card">
                    <div class="doctor-list__card__img">
                      <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/staff/doctor-yoshitake.png" alt="吉武 彰子" width="328" height="188">
                    </div>
                    <div class="doctor-list__card__info">
                      <div class="doctor-list__card__info--place">
                        <p>銀座院</p>
                        <p>渋谷院</p>
                      </div>
                      <p class="doctor-list__card__info--post">医師</p>
                      <p class="doctor-list__card__info--name">吉武 彰子</p>
                      <div class="doctor-list__card__info--roman">Yoshitake</div>
                      <div class="doctor-list__card__info--sns">
                        <a href="https://www.instagram.com/dr.shoko_y/" target="_blank" class="doctor-list__card__info--link doctor-instagram">
                          <p>Instagram</p>
                          <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/staff/icon-instagram.png" alt="" width="26" height="26">
                        </a>
                        <a href="https://ameblo.jp/cynthia-dr-yoshitake/" target="_blank" class="doctor-list__card__info--link doctor-blog">
                          <p>ブログ</p>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <a href="https://cosmedical.jp/clinic/doctor/" class="btn doctor__btn">
                VIEW MORE
              </a>
            </div>
          </div>
        </section>

        <section class="sns" id="l-top_sns">
          <div class="inner">
            <h2 class="title sns__title">SNS</h2>

            <div class="sns__content">
              <div class="sns__item">
                <div class="sns__header">
                  <div class="sns__icon">
                    <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/top/ico_youtube.png" alt="" />
                  </div>
                  <h3 class="sns__name">美容外科Dr.又吉のコスメディカルCh</h3>
                </div>

                <div class="sns__posts">
                  <div class="sns__post">
                    <iframe
                      src="https://www.youtube.com/embed/4xjMFoxNy5w?si=f3OonFxsOevNR6da"
                      title="YouTube video player"
                      frameborder="0"
                      allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                      referrerpolicy="strict-origin-when-cross-origin"
                      allowfullscreen
                    ></iframe>
                  </div>
                  <div class="sns__post">
                    <iframe
                      width="560"
                      height="315"
                      src="https://www.youtube.com/embed/wxWt2Fm1BUE?si=aooDDr711CCc1IB9"
                      title="YouTube video player"
                      frameborder="0"
                      allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                      referrerpolicy="strict-origin-when-cross-origin"
                      allowfullscreen
                    ></iframe>
                  </div>
                  <div class="sns__post">
                    <iframe
                      width="560"
                      height="315"
                      src="https://www.youtube.com/embed/rloNy8-neog?si=dHXJC93gPox0JOyF"
                      title="YouTube video player"
                      frameborder="0"
                      allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                      referrerpolicy="strict-origin-when-cross-origin"
                      allowfullscreen
                    ></iframe>
                  </div>
                  <div class="sns__post">
                    <iframe
                      width="560"
                      height="315"
                      src="https://www.youtube.com/embed/602COaae8AM?si=IkmT9wSqzKOUHzQs"
                      title="YouTube video player"
                      frameborder="0"
                      allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                      referrerpolicy="strict-origin-when-cross-origin"
                      allowfullscreen
                    ></iframe>
                  </div>
                </div>
              </div>

              <!-- <div class="sns__item sns__item--instagram">
                <div class="sns__header">
                  <div class="sns__icon">
                    <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/top/Instagram_icon.png" alt="" />
                  </div>
                  <h3 class="sns__name">又吉院長　Instagram</h3>
                </div>

                <div class="sns__posts">
                  <div class="sns__post"></div>
                  <div class="sns__post"></div>
                  <div class="sns__post"></div>
                  <div class="sns__post"></div>
                </div>
              </div> -->
            </div>
          </div>
        </section>

        <section class="clinicsns">
          <div class="inner">
            <h2 class="title clinic-sns__title"><span class="clinic-sns-title-small">CLINIC</span> SNS</h2>

            <div class="clinicsns__content">
              <!-- 銀座院 -->
              <div class="clinicsns__item">
                <div class="clinicsns__header">
                  <h3 class="clinicsns__clinic-name">銀座院</h3>
                </div>

                <div class="clinicsns__sns-links">
                  <a href="https://www.instagram.com/cosmedical_gnz/" target="_blank" class="clinicsns__sns-link clinicsns__sns-link--instagram">
                    <span class="clinicsns__sns-text">Instagram</span>
                    <span class="clinicsns__sns-icon">
                      <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/staff/icon-instagram.png" alt="Instagram" width="26" height="26">
                    </span>
                  </a>
                </div>

                <div class="clinicsns__blog">
                  <a href="<?php echo home_url('/ginza-blog/'); ?>" class="clinicsns__blog-title">
                    <span class="clinicsns__blog-icon"><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/top/clinicsns-blog.png" alt="ブログ" width="26" height="26"></span>
                    銀座院 スタッフブログ
                  </a>
                  <ul class="clinicsns__blog-list">
                    <?php
                    $ginza_args = array(
                      'post_type' => 'ginza-blog',
                      'posts_per_page' => 3,
                      'orderby' => 'date',
                      'order' => 'DESC',
                    );
                    $ginza_query = new WP_Query($ginza_args);
                    if ($ginza_query->have_posts()) :
                      while ($ginza_query->have_posts()) : $ginza_query->the_post();
                    ?>
                    <li class="clinicsns__blog-item">
                      <a href="<?php the_permalink(); ?>" class="clinicsns__blog-link">
                        <div class="clinicsns__blog-content">
                          <span class="clinicsns__blog-date"><?php echo get_the_date('Y/m/d'); ?></span>
                          <span class="clinicsns__blog-text"><?php echo wp_trim_words(get_the_title(), 20); ?></span>
                        </div>
                        <span class="clinicsns__blog-arrow"><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/top/clinicsns-arrow.svg" alt="矢印" width="4" height="8"></span>
                      </a>
                    </li>
                    <?php
                      endwhile;
                      wp_reset_postdata();
                    else :
                    ?>
                    <li class="clinicsns__blog-item">
                      <a href="#" class="clinicsns__blog-link">
                        <div class="clinicsns__blog-content">
                          <span class="clinicsns__blog-date">YYYY/MM/DD</span>
                          <span class="clinicsns__blog-text">記事がありません</span>
                        </div>
                        <span class="clinicsns__blog-arrow"><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/top/clinicsns-arrow.svg" alt="矢印" width="4" height="8"></span>
                      </a>
                    </li>
                    <?php endif; ?>
                  </ul>
                </div>
              </div>

              <!-- 渋谷院 -->
              <div class="clinicsns__item">
                <div class="clinicsns__header">
                  <h3 class="clinicsns__clinic-name">渋谷院</h3>
                </div>

                <div class="clinicsns__sns-links">
                  <a href="https://www.instagram.com/cynthia_sby/" target="_blank" class="clinicsns__sns-link clinicsns__sns-link--instagram">
                    <span class="clinicsns__sns-text">Instagram</span>
                    <span class="clinicsns__sns-icon">
                      <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/staff/icon-instagram.png" alt="Instagram" width="26" height="26">
                    </span>
                  </a>
                  <a href="https://x.com/cynthia_sby" target="_blank" class="clinicsns__sns-link clinicsns__sns-link--x">
                    <span class="clinicsns__sns-text">X</span>
                    <span class="clinicsns__sns-icon">
                      <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/staff/icon-x.png" alt="X" width="18" height="18">
                    </span>
                  </a>
                </div>

                <div class="clinicsns__blog"><!-- 非表示設定 -->
                  <a href="<?php echo home_url('/shibuya-blog/'); ?>" class="clinicsns__blog-title">
                    <span class="clinicsns__blog-icon"><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/top/clinicsns-blog.png" alt="ブログ" width="26" height="26"></span>
                    渋谷院 スタッフブログ
                  </a>
                  <ul class="clinicsns__blog-list">
                    <?php
                    $shibuya_args = array(
                      'post_type' => 'shibuya-blog',
                      'posts_per_page' => 3,
                      'orderby' => 'date',
                      'order' => 'DESC',
                    );
                    $shibuya_query = new WP_Query($shibuya_args);
                    if ($shibuya_query->have_posts()) :
                      while ($shibuya_query->have_posts()) : $shibuya_query->the_post();
                    ?>
                    <li class="clinicsns__blog-item">
                      <a href="<?php the_permalink(); ?>" class="clinicsns__blog-link">
                        <div class="clinicsns__blog-content">
                          <span class="clinicsns__blog-date"><?php echo get_the_date('Y/m/d'); ?></span>
                          <span class="clinicsns__blog-text"><?php echo wp_trim_words(get_the_title(), 20); ?></span>
                        </div>
                        <span class="clinicsns__blog-arrow"><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/top/clinicsns-arrow.svg" alt="矢印" width="4" height="8"></span>
                      </a>
                    </li>
                    <?php
                      endwhile;
                      wp_reset_postdata();
                    else :
                    ?>
                    <li class="clinicsns__blog-item">
                      <a href="#" class="clinicsns__blog-link">
                        <div class="clinicsns__blog-content">
                          <span class="clinicsns__blog-date">YYYY/MM/DD</span>
                          <span class="clinicsns__blog-text">記事がありません</span>
                        </div>
                        <span class="clinicsns__blog-arrow"><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/top/clinicsns-arrow.svg" alt="矢印" width="4" height="8"></span>
                      </a>
                    </li>
                    <?php endif; ?>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </section>

        <!-- <section class="notice">
          <div class="notice__inner">
            <h2 class="title">Notice</h2>

            <div class="notice__content">
              <?php
              $args = array(
                'post_type'      => 'notice',
                'posts_per_page' => 3,
                'orderby'        => 'date',
                'order'          => 'DESC',
              );
              $notice_query = new WP_Query($args);

              if ($notice_query->have_posts()):
                while ($notice_query->have_posts()): $notice_query->the_post();
              ?>
              <div class="notice__item">
                <div class="notice__image">
                  <?php if (has_post_thumbnail()): ?>
                    <a href="<?php the_permalink(); ?>">
                      <?php the_post_thumbnail('notice-thumb', array('alt' => get_the_title())); ?>
                    </a>
                  <?php else: ?>
                    <a href="<?php the_permalink(); ?>">
                      <img src="<?php echo get_template_directory_uri(); ?>/img/notice/notice01.jpg" alt="<?php echo esc_attr(get_the_title()); ?>">
                    </a>
                  <?php endif; ?>
                </div>

                <div class="notice__info">
                  <div class="notice__meta">
                    <p class="notice__date"><?php echo get_the_date('Y/m/d'); ?></p>
                    <?php
                    $categories = get_the_category();
                    if ($categories && !is_wp_error($categories)) {
                      $category = $categories[0];
                      if ($category->name !== 'Uncategorized' && $category->name !== '未分類') :
                    ?>
                      <p class="notice__category">
                        <?php echo esc_html($category->name); ?>
                      </p>
                    <?php
                      endif;
                    }
                    ?>
                  </div>

                  <p class="notice__text">
                    <?php echo wp_trim_words(get_the_excerpt(), 20); ?>
                  </p>
                </div>
              </div>
              <?php
                endwhile;
              endif;
              wp_reset_postdata();
              ?>
            </div>

            <a href="<?php echo esc_url(home_url('/notice/')); ?>" class="btn notice__btn">VIEW MORE</a>
          </div>
        </section> -->



        <!-- <section class="column">
          <div class="column__inner">
            <h2 class="title">Column</h2>

            <div class="swiper column__swiper">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
									<a href="<?php echo esc_url( home_url('column/column01') ); ?>" class="column__card">
										<div class="column__image">
											<img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/top/Column01.jpg" alt="" />
										</div>
										<p class="column__category">カテゴリり</p>
										<h3 class="column__title">見出しがはいります</h3>
										<p class="column__text">
											説明テキストがはいります説明テキストがはいります説明テキストがはいります説明テキストがはいります
										</p>
									</a>
                </div>
                <div class="swiper-slide">
									<a href="<?php echo esc_url( home_url('column/column02') ); ?>" class="column__card">
										<div class="column__image">
											<img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/top/Column02.jpg" alt="" />
										</div>
										<p class="column__category">カテゴリ</p>
										<h3 class="column__title">見出しがはいります</h3>
										<p class="column__text">
											説明テキストがはいります説明テキストがはいります説明テキストがはいります説明テキストがはいります
										</p>
									</a>
                </div>
                <div class="swiper-slide">
									<a href="<?php echo esc_url( home_url('column/column03') ); ?>" class="column__card">
										<div class="column__image">
											<img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/top/Column03.jpg" alt="" />
										</div>
										<p class="column__category">カテゴリ</p>
										<h3 class="column__title">見出しがはいります</h3>
										<p class="column__text">
											説明テキストがはいります説明テキストがはいります説明テキストがはいります説明テキストがはいります
										</p>
									</a>
                </div>
                <div class="swiper-slide">
									<a href="<?php echo esc_url( home_url('column/column04') ); ?>" class="column__card">
										<div class="column__image">
											<img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/top/Column04.jpg" alt="" />
										</div>
										<p class="column__category">カテゴリ</p>
										<h3 class="column__title">見出しがはいります</h3>
										<p class="column__text">
											説明テキストがはいります説明テキストがはいります説明テキストがはいります説明テキストがはいります
										</p>
									</a>
                </div>

              </div>

              <div class="column__nav">
                <div class="column__pagination"></div>
              </div>
            </div>

            <a href="<?php echo esc_url( home_url('column/') ); ?>" class="btn column__btn">
              VIEW MORE
            </a>
          </div>
        </section> -->


        <section id="access" class="access">
          <div class="inner">
            <h2 class="title">Access</h2>

            <div class="access-table" role="region" aria-label="アクセス情報">
              <div class="access__tabs" role="tablist" aria-label="院の選択">
                <button
                  class="access__tab is-active"
                  role="tab"
                  aria-selected="true"
                  aria-controls="access-ginza"
                  id="access-tab-ginza"
                  data-target="access-ginza"
                >
                  銀座院
                </button>
                <button
                  class="access__tab"
                  role="tab"
                  aria-selected="false"
                  aria-controls="access-shibuya"
                  id="access-tab-shibuya"
                  data-target="access-shibuya"
                >
                  渋谷院
                </button>
              </div>

              <div class="access__panels">
                <div
                  class="access__panel is-active"
                  id="access-ginza"
                  role="tabpanel"
                  aria-labelledby="access-tab-ginza"
                >
                  <div class="access__content">
                    <div class="access__info">
                      <ul class="access__sns" aria-label="公式アカウント">
                        <li>
                          <a
                            href="https://www.instagram.com/cosmedical_gnz/"
                            target="_blank"
                            rel="noopener noreferrer"
                            ><img
                              src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/top/access-insta.png"
                              alt="Instagram"
                          /></a>
                        </li>
                        <!-- <li>
                          <a
                            href="https://www.facebook.com/%E3%82%B3%E3%82%B9%E3%83%A1%E3%83%87%20%E3%82%A3%E3%82%AB%E3%83%AB%E3%82%AF%E3%83%AA%E3%83%8B%E3%83%83%E3%82%AF-%E3%82%B7%E3%83%B3%E3%82%B7%E3%82%A2-1762967397250263/"
                            target="_blank"
                            rel="noopener noreferrer"
                            ><img
                              src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/top/access-facebook.png"
                              alt="Facebook"
                          /></a>
                        </li> -->
                        <!-- <li>
                          <a
                            href="https://twitter.com/MatayoshiHideki"
                            target="_blank"
                            rel="noopener noreferrer"
                            ><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/top/access-x.png" alt="X"
                          /></a>
                        </li> -->
                        <!-- <li>
                          <a
                            href="https://ameblo.jp/cynthia0567/"
                            target="_blank"
                            rel="noopener noreferrer"
                            ><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/top/access-blog.png" alt="Youtube"
                          /></a>
                        </li> -->
                      </ul>

                      <dl class="access__list">
                        <div class="access__row">
                          <dt>住所</dt>
                          <dd>
                            <p>〒104-0061</p>
                            <p>東京都中央区銀座6丁目9-2</p>
                            <p>KUROSAWA <br class="pc_n" />BUILDING 10F</p>
                          </dd>
                        </div>
                        <div class="access__row">
                          <dt>診療時間</dt>
                          <dd>午前10時〜午後8時</dd>
                        </div>
                        <div class="access__row">
                          <dt>受付時間</dt>
                          <dd>午前10時〜午後8時</dd>
                        </div>
                        <div class="access__row">
                          <dt>休診日</dt>
                          <dd>無休</dd>
                        </div>
                        <div class="access__row">
                          <dt>アクセス</dt>
                          <dd>
                            <p>東京メトロ銀座線・丸の内線・日比谷線</p>
                            <p>銀座駅A2出口より徒歩1分</p>
                          </dd>
                        </div>
                      </dl>
                    </div>

                    <div class="access__map">
                      <iframe
                        title="銀座院マップ"
                        src="https://www.google.com/maps?q=東京都中央区銀座6-9-2&output=embed"
                        style="border: 0"
                        allowfullscreen=""
                        loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"
                      ></iframe>
                    </div>
                  </div>
                  <a href="<?php echo esc_url( home_url('access-ginza') ); ?>" class="btn access__btn"> VIEW MORE </a>
                </div>

                <div
                  class="access__panel"
                  id="access-shibuya"
                  role="tabpanel"
                  aria-labelledby="access-tab-shibuya"
                  hidden
                >
                  <div class="access__content">
                    <div class="access__info">
                      <ul class="access__sns" aria-label="公式アカウント">
                        <li>
                          <a
                            href="https://www.instagram.com/cynthia_sby/"
                            target="_blank"
                            rel="noopener noreferrer"
                            ><img
                              src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/top/access-insta.png"
                              alt="Instagram"
                          /></a>
                        </li>
                        <!-- <li>
                          <a
                            href="https://www.facebook.com/CYNTHIA.SBY/"
                            target="_blank"
                            rel="noopener noreferrer"
                            ><img
                              src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/top/access-facebook.png"
                              alt="Facebook"
                          /></a>
                        </li> -->
                        <li>
                          <a
                            href="https://twitter.com/cynthia_sby"
                            target="_blank"
                            rel="noopener noreferrer"
                            ><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/top/access-x.png" alt="X"
                          /></a>
                        </li>
                        <!-- <li>
                          <a
                            href="https://ameblo.jp/cynthia-sby/"
                            target="_blank"
                            rel="noopener noreferrer"
                            ><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/top/access-blog.png" alt="Youtube"
                          /></a>
                        </li> -->
                      </ul>
                      <dl class="access__list">
                        <div class="access__row">
                          <dt>住所</dt>
                          <dd>
                            <p>〒150-0042</p>
                            <p>東京都渋谷区宇田川町33-8</p>
                            <p>塚田ビル4F・5F</p>
                          </dd>
                        </div>
                        <div class="access__row">
                          <dt>診療時間</dt>
                          <dd>午前10時～午後8時</dd>
                        </div>
                        <div class="access__row">
                          <dt>受付時間</dt>
                          <dd>午前10時～午後8時</dd>
                        </div>
                        <div class="access__row">
                          <dt>休診日</dt>
                          <dd>無休</dd>
                        </div>
                        <div class="access__row">
                          <dt>アクセス</dt>
                          <dd>JR山手線/渋谷駅(ハチ公口)より徒歩5分</dd>
                        </div>
                      </dl>
                    </div>
                    <div class="access__map">
                      <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1620.8280434984613!2d139.69443519839473!3d35.660844!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188ca948b40001%3A0xdc4372f0ef01ff45!2z44K344Oz44K344KiIOa4i-iwt-mZog!5e0!3m2!1sja!2sjp!4v1759664601321!5m2!1sja!2sjp"
                        width="600"
                        height="450"
                        style="border: 0"
                        allowfullscreen=""
                        loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"
                      ></iframe>
                    </div>
                  </div>
                  <a href="<?php echo esc_url( home_url('access-shibuya') ); ?>" class="btn access__btn"> VIEW MORE </a>

                </div>
              </div>

            </div>
          </div>
        </section>


        <!--
<section class="calendar">
          <div class="inner">
            <div class="calendar__inner">
              <h2 class="title">Calendar</h2>
            </div>

            <div class="access-table" role="region" aria-label="アクセス情報">
              <div class="access__tabs" role="tablist" aria-label="院の選択">
                <button
                  class="access__tab is-active"
                  role="tab"
                  aria-selected="true"
                  aria-controls="access-ginza"
                  id="access-tab-ginza"
                  data-target="access-ginza"
                >
                  銀座院
                </button>
                <button
                  class="access__tab"
                  role="tab"
                  aria-selected="false"
                  aria-controls="access-shibuya"
                  id="access-tab-shibuya"
                  data-target="access-shibuya"
                >
                  渋谷院
                </button>
              </div>

              <div class="access__panels">
                <div
                  class="access__panel is-active"
                  id="access-ginza"
                  role="tabpanel"
                  aria-labelledby="access-tab-ginza"
                >
                  <div class="calendar__months">
                    <div class="calendar__month">
                      <p class="calendar__caption">2025,09</p>
                      <table
                        class="cal-table"
                        aria-label="2025年9月 営業カレンダー（銀座院）"
                      >
                        <thead>
                          <tr>
                            <th class="is-sun">日</th>
                            <th>月</th>
                            <th>火</th>
                            <th>水</th>
                            <th>木</th>
                            <th>金</th>
                            <th class="is-sat">土</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>
                              <span class="cal-day">1</span>
                              <div class="cal-badges">
                                <span class="cal-badge">Dr.</span
                                ><span class="cal-badge-alt">Dr.</span>
                              </div>
                            </td>
                            <td>
                              <span class="cal-day">2</span>
                              <div class="cal-badges">
                                <span class="cal-badge">Dr.</span
                                ><span class="cal-badge-alt">Dr.</span>
                              </div>
                            </td>
                            <td>
                              <span class="cal-day">3</span>
                              <div class="cal-badges">
                                <span class="cal-badge">Dr.</span
                                ><span class="cal-badge-alt">Dr.</span>
                              </div>
                            </td>
                            <td>
                              <span class="cal-day">4</span>
                              <div class="cal-badges">
                                <span class="cal-badge">Dr.</span
                                ><span class="cal-badge-alt">Dr.</span>
                              </div>
                            </td>
                            <td>
                              <span class="cal-day">5</span>
                              <div class="cal-badges">
                                <span class="cal-badge">Dr.</span
                                ><span class="cal-badge-alt">Dr.</span>
                              </div>
                            </td>
                            <td>
                              <span class="cal-day">6</span>
                              <div class="cal-badges">
                                <span class="cal-badge">Dr.</span
                                ><span class="cal-badge-alt">Dr.</span>
                              </div>
                            </td>
                            <td>
                              <span class="cal-day">7</span>
                              <div class="cal-badges">
                                <span class="cal-badge">Dr.</span
                                ><span class="cal-badge-alt">Dr.</span>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <span class="cal-day">8</span>
                              <div class="cal-badges">
                                <span class="cal-badge">Dr.</span
                                ><span class="cal-badge-alt">Dr.</span>
                              </div>
                            </td>
                            <td>
                              <span class="cal-day">9</span>
                              <div class="cal-badges">
                                <span class="cal-badge">Dr.</span
                                ><span class="cal-badge-alt">Dr.</span>
                              </div>
                            </td>
                            <td>
                              <span class="cal-day">10</span>
                              <div class="cal-badges">
                                <span class="cal-badge">Dr.</span
                                ><span class="cal-badge-alt">Dr.</span>
                              </div>
                            </td>
                            <td>
                              <span class="cal-day">11</span>
                              <div class="cal-badges">
                                <span class="cal-badge">Dr.</span
                                ><span class="cal-badge-alt">Dr.</span>
                              </div>
                            </td>
                            <td>
                              <span class="cal-day">12</span>
                              <div class="cal-badges">
                                <span class="cal-badge">Dr.</span
                                ><span class="cal-badge-alt">Dr.</span>
                              </div>
                            </td>
                            <td>
                              <span class="cal-day">13</span>
                              <div class="cal-badges">
                                <span class="cal-badge">Dr.</span
                                ><span class="cal-badge-alt">Dr.</span>
                              </div>
                            </td>
                            <td>
                              <span class="cal-day">14</span>
                              <div class="cal-badges">
                                <span class="cal-badge">Dr.</span
                                ><span class="cal-badge-alt">Dr.</span>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <span class="cal-day">15</span>
                              <div class="cal-badges">
                                <span class="cal-badge">Dr.</span
                                ><span class="cal-badge-alt">Dr.</span>
                              </div>
                            </td>
                            <td>
                              <span class="cal-day">16</span>
                              <div class="cal-badges">
                                <span class="cal-badge">Dr.</span
                                ><span class="cal-badge-alt">Dr.</span>
                              </div>
                            </td>
                            <td>
                              <span class="cal-day">17</span>
                              <div class="cal-badges">
                                <span class="cal-badge">Dr.</span
                                ><span class="cal-badge-alt">Dr.</span>
                              </div>
                            </td>
                            <td>
                              <span class="cal-day">18</span>
                              <div class="cal-badges">
                                <span class="cal-badge">Dr.</span
                                ><span class="cal-badge-alt">Dr.</span>
                              </div>
                            </td>
                            <td>
                              <span class="cal-day">19</span>
                              <div class="cal-badges">
                                <span class="cal-badge">Dr.</span
                                ><span class="cal-badge-alt">Dr.</span>
                              </div>
                            </td>
                            <td>
                              <span class="cal-day">20</span>
                              <div class="cal-badges">
                                <span class="cal-badge">Dr.</span
                                ><span class="cal-badge-alt">Dr.</span>
                              </div>
                            </td>
                            <td>
                              <span class="cal-day">21</span>
                              <div class="cal-badges">
                                <span class="cal-badge">Dr.</span
                                ><span class="cal-badge-alt">Dr.</span>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <span class="cal-day">22</span>
                              <div class="cal-badges">
                                <span class="cal-badge">Dr.</span
                                ><span class="cal-badge-alt">Dr.</span>
                              </div>
                            </td>
                            <td>
                              <span class="cal-day">23</span>
                              <div class="cal-badges">
                                <span class="cal-badge">Dr.</span
                                ><span class="cal-badge-alt">Dr.</span>
                              </div>
                            </td>
                            <td>
                              <span class="cal-day">24</span>
                              <div class="cal-badges">
                                <span class="cal-badge">Dr.</span
                                ><span class="cal-badge-alt">Dr.</span>
                              </div>
                            </td>
                            <td>
                              <span class="cal-day">25</span>
                              <div class="cal-badges">
                                <span class="cal-badge">Dr.</span
                                ><span class="cal-badge-alt">Dr.</span>
                              </div>
                            </td>
                            <td>
                              <span class="cal-day">26</span>
                              <div class="cal-badges">
                                <span class="cal-badge">Dr.</span
                                ><span class="cal-badge-alt">Dr.</span>
                              </div>
                            </td>
                            <td>
                              <span class="cal-day">27</span>
                              <div class="cal-badges">
                                <span class="cal-badge">Dr.</span
                                ><span class="cal-badge-alt">Dr.</span>
                              </div>
                            </td>
                            <td>
                              <span class="cal-day">28</span>
                              <div class="cal-badges">
                                <span class="cal-badge">Dr.</span
                                ><span class="cal-badge-alt">Dr.</span>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <span class="cal-day">29</span>
                              <div class="cal-badges">
                                <span class="cal-badge">Dr.</span
                                ><span class="cal-badge-alt">Dr.</span>
                              </div>
                            </td>
                            <td>
                              <span class="cal-day">30</span>
                              <div class="cal-badges">
                                <span class="cal-badge">Dr.</span
                                ><span class="cal-badge-alt">Dr.</span>
                              </div>
                            </td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                          </tr>
                        </tbody>
                      </table>
                    </div>

                    <div class="calendar__month">
                      <p class="calendar__caption">2025,10</p>
                      <table
                        class="cal-table"
                        aria-label="2025年10月 営業カレンダー（銀座院）"
                      >
                        <thead>
                          <tr>
                            <th class="is-sun">日</th>
                            <th>月</th>
                            <th>火</th>
                            <th>水</th>
                            <th>木</th>
                            <th>金</th>
                            <th class="is-sat">土</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td></td>
                            <td></td>
                            <td>
                              <span class="cal-day">1</span>
                              <div class="cal-badges">
                                <span class="cal-badge">Dr.</span
                                ><span class="cal-badge-alt">Dr.</span>
                              </div>
                            </td>
                            <td>
                              <span class="cal-day">2</span>
                              <div class="cal-badges">
                                <span class="cal-badge">Dr.</span
                                ><span class="cal-badge-alt">Dr.</span>
                              </div>
                            </td>
                            <td>
                              <span class="cal-day">3</span>
                              <div class="cal-badges">
                                <span class="cal-badge">Dr.</span
                                ><span class="cal-badge-alt">Dr.</span>
                              </div>
                            </td>
                            <td>
                              <span class="cal-day">4</span>
                              <div class="cal-badges">
                                <span class="cal-badge">Dr.</span
                                ><span class="cal-badge-alt">Dr.</span>
                              </div>
                            </td>
                            <td>
                              <span class="cal-day">5</span>
                              <div class="cal-badges">
                                <span class="cal-badge">Dr.</span
                                ><span class="cal-badge-alt">Dr.</span>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <span class="cal-day">5</span>
                              <div class="cal-badges">
                                <span class="cal-badge">Dr.</span
                                ><span class="cal-badge-alt">Dr.</span>
                              </div>
                            </td>
                            <td>
                              <span class="cal-day">6</span>
                              <div class="cal-badges">
                                <span class="cal-badge">Dr.</span
                                ><span class="cal-badge-alt">Dr.</span>
                              </div>
                            </td>
                            <td>
                              <span class="cal-day">7</span>
                              <div class="cal-badges">
                                <span class="cal-badge">Dr.</span
                                ><span class="cal-badge-alt">Dr.</span>
                              </div>
                            </td>
                            <td>
                              <span class="cal-day">8</span>
                              <div class="cal-badges">
                                <span class="cal-badge">Dr.</span
                                ><span class="cal-badge-alt">Dr.</span>
                              </div>
                            </td>
                            <td>
                              <span class="cal-day">9</span>
                              <div class="cal-badges">
                                <span class="cal-badge">Dr.</span
                                ><span class="cal-badge-alt">Dr.</span>
                              </div>
                            </td>
                            <td>
                              <span class="cal-day">10</span>
                              <div class="cal-badges">
                                <span class="cal-badge">Dr.</span
                                ><span class="cal-badge-alt">Dr.</span>
                              </div>
                            </td>
                            <td>
                              <span class="cal-day">11</span>
                              <div class="cal-badges">
                                <span class="cal-badge">Dr.</span
                                ><span class="cal-badge-alt">Dr.</span>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <span class="cal-day">12</span>
                              <div class="cal-badges">
                                <span class="cal-badge">Dr.</span
                                ><span class="cal-badge-alt">Dr.</span>
                              </div>
                            </td>
                            <td>
                              <span class="cal-day">13</span>
                              <div class="cal-badges">
                                <span class="cal-badge">Dr.</span
                                ><span class="cal-badge-alt">Dr.</span>
                              </div>
                            </td>
                            <td>
                              <span class="cal-day">14</span>
                              <div class="cal-badges">
                                <span class="cal-badge">Dr.</span
                                ><span class="cal-badge-alt">Dr.</span>
                              </div>
                            </td>
                            <td>
                              <span class="cal-day">15</span>
                              <div class="cal-badges">
                                <span class="cal-badge">Dr.</span
                                ><span class="cal-badge-alt">Dr.</span>
                              </div>
                            </td>
                            <td>
                              <span class="cal-day">16</span>
                              <div class="cal-badges">
                                <span class="cal-badge">Dr.</span
                                ><span class="cal-badge-alt">Dr.</span>
                              </div>
                            </td>
                            <td>
                              <span class="cal-day">17</span>
                              <div class="cal-badges">
                                <span class="cal-badge">Dr.</span
                                ><span class="cal-badge-alt">Dr.</span>
                              </div>
                            </td>
                            <td>
                              <span class="cal-day">18</span>
                              <div class="cal-badges">
                                <span class="cal-badge">Dr.</span
                                ><span class="cal-badge-alt">Dr.</span>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <span class="cal-day">19</span>
                              <div class="cal-badges">
                                <span class="cal-badge">Dr.</span
                                ><span class="cal-badge-alt">Dr.</span>
                              </div>
                            </td>
                            <td>
                              <span class="cal-day">20</span>
                              <div class="cal-badges">
                                <span class="cal-badge">Dr.</span
                                ><span class="cal-badge-alt">Dr.</span>
                              </div>
                            </td>
                            <td>
                              <span class="cal-day">21</span>
                              <div class="cal-badges">
                                <span class="cal-badge">Dr.</span
                                ><span class="cal-badge-alt">Dr.</span>
                              </div>
                            </td>
                            <td>
                              <span class="cal-day">22</span>
                              <div class="cal-badges">
                                <span class="cal-badge">Dr.</span
                                ><span class="cal-badge-alt">Dr.</span>
                              </div>
                            </td>
                            <td>
                              <span class="cal-day">23</span>
                              <div class="cal-badges">
                                <span class="cal-badge">Dr.</span
                                ><span class="cal-badge-alt">Dr.</span>
                              </div>
                            </td>
                            <td>
                              <span class="cal-day">24</span>
                              <div class="cal-badges">
                                <span class="cal-badge">Dr.</span
                                ><span class="cal-badge-alt">Dr.</span>
                              </div>
                            </td>
                            <td>
                              <span class="cal-day">25</span>
                              <div class="cal-badges">
                                <span class="cal-badge">Dr.</span
                                ><span class="cal-badge-alt">Dr.</span>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <span class="cal-day">26</span>
                              <div class="cal-badges">
                                <span class="cal-badge">Dr.</span
                                ><span class="cal-badge-alt">Dr.</span>
                              </div>
                            </td>
                            <td>
                              <span class="cal-day">27</span>
                              <div class="cal-badges">
                                <span class="cal-badge">Dr.</span
                                ><span class="cal-badge-alt">Dr.</span>
                              </div>
                            </td>
                            <td>
                              <span class="cal-day">28</span>
                              <div class="cal-badges">
                                <span class="cal-badge">Dr.</span
                                ><span class="cal-badge-alt">Dr.</span>
                              </div>
                            </td>
                            <td>
                              <span class="cal-day">29</span>
                              <div class="cal-badges">
                                <span class="cal-badge">Dr.</span
                                ><span class="cal-badge-alt">Dr.</span>
                              </div>
                            </td>
                            <td>
                              <span class="cal-day">30</span>
                              <div class="cal-badges">
                                <span class="cal-badge">Dr.</span
                                ><span class="cal-badge-alt">Dr.</span>
                              </div>
                            </td>
                            <td>
                              <span class="cal-day">31</span>
                              <div class="cal-badges">
                                <span class="cal-badge">Dr.</span
                                ><span class="cal-badge-alt">Dr.</span>
                              </div>
                            </td>
                            <td></td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>

                <div
                  class="access__panel"
                  id="access-shibuya"
                  role="tabpanel"
                  aria-labelledby="access-tab-shibuya"
                  hidden
                >
                  <div class="calendar__months">
                    <div class="calendar__month">
                      <p class="calendar__caption">2025,09</p>
                      <table
                        class="cal-table"
                        aria-label="2025年9月 営業カレンダー（渋谷院）"
                      >
                        <thead>
                          <tr>
                            <th class="is-sun">日</th>
                            <th>月</th>
                            <th>火</th>
                            <th>水</th>
                            <th>木</th>
                            <th>金</th>
                            <th class="is-sat">土</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>
                              <span class="cal-day">1</span>
                              <div class="cal-badges">
                                <span class="cal-badge">Dr.</span
                                ><span class="cal-badge-alt">Dr.</span>
                              </div>
                            </td>
                            <td>
                              <span class="cal-day">2</span>
                              <div class="cal-badges">
                                <span class="cal-badge">Dr.</span
                                ><span class="cal-badge-alt">Dr.</span>
                              </div>
                            </td>
                            <td>
                              <span class="cal-day">3</span>
                              <div class="cal-badges">
                                <span class="cal-badge">Dr.</span
                                ><span class="cal-badge-alt">Dr.</span>
                              </div>
                            </td>
                            <td>
                              <span class="cal-day">4</span>
                              <div class="cal-badges">
                                <span class="cal-badge">Dr.</span
                                ><span class="cal-badge-alt">Dr.</span>
                              </div>
                            </td>
                            <td>
                              <span class="cal-day">5</span>
                              <div class="cal-badges">
                                <span class="cal-badge">Dr.</span
                                ><span class="cal-badge-alt">Dr.</span>
                              </div>
                            </td>
                            <td>
                              <span class="cal-day">6</span>
                              <div class="cal-badges">
                                <span class="cal-badge">Dr.</span
                                ><span class="cal-badge-alt">Dr.</span>
                              </div>
                            </td>
                            <td>
                              <span class="cal-day">7</span>
                              <div class="cal-badges">
                                <span class="cal-badge">Dr.</span
                                ><span class="cal-badge-alt">Dr.</span>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <span class="cal-day">8</span>
                              <div class="cal-badges">
                                <span class="cal-badge">Dr.</span
                                ><span class="cal-badge-alt">Dr.</span>
                              </div>
                            </td>
                            <td>
                              <span class="cal-day">9</span>
                              <div class="cal-badges">
                                <span class="cal-badge">Dr.</span
                                ><span class="cal-badge-alt">Dr.</span>
                              </div>
                            </td>
                            <td>
                              <span class="cal-day">10</span>
                              <div class="cal-badges">
                                <span class="cal-badge">Dr.</span
                                ><span class="cal-badge-alt">Dr.</span>
                              </div>
                            </td>
                            <td>
                              <span class="cal-day">11</span>
                              <div class="cal-badges">
                                <span class="cal-badge">Dr.</span
                                ><span class="cal-badge-alt">Dr.</span>
                              </div>
                            </td>
                            <td>
                              <span class="cal-day">12</span>
                              <div class="cal-badges">
                                <span class="cal-badge">Dr.</span
                                ><span class="cal-badge-alt">Dr.</span>
                              </div>
                            </td>
                            <td>
                              <span class="cal-day">13</span>
                              <div class="cal-badges">
                                <span class="cal-badge">Dr.</span
                                ><span class="cal-badge-alt">Dr.</span>
                              </div>
                            </td>
                            <td>
                              <span class="cal-day">14</span>
                              <div class="cal-badges">
                                <span class="cal-badge">Dr.</span
                                ><span class="cal-badge-alt">Dr.</span>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <span class="cal-day">15</span>
                              <div class="cal-badges">
                                <span class="cal-badge">Dr.</span
                                ><span class="cal-badge-alt">Dr.</span>
                              </div>
                            </td>
                            <td>
                              <span class="cal-day">16</span>
                              <div class="cal-badges">
                                <span class="cal-badge">Dr.</span
                                ><span class="cal-badge-alt">Dr.</span>
                              </div>
                            </td>
                            <td>
                              <span class="cal-day">17</span>
                              <div class="cal-badges">
                                <span class="cal-badge">Dr.</span
                                ><span class="cal-badge-alt">Dr.</span>
                              </div>
                            </td>
                            <td>
                              <span class="cal-day">18</span>
                              <div class="cal-badges">
                                <span class="cal-badge">Dr.</span
                                ><span class="cal-badge-alt">Dr.</span>
                              </div>
                            </td>
                            <td>
                              <span class="cal-day">19</span>
                              <div class="cal-badges">
                                <span class="cal-badge">Dr.</span
                                ><span class="cal-badge-alt">Dr.</span>
                              </div>
                            </td>
                            <td>
                              <span class="cal-day">20</span>
                              <div class="cal-badges">
                                <span class="cal-badge">Dr.</span
                                ><span class="cal-badge-alt">Dr.</span>
                              </div>
                            </td>
                            <td>
                              <span class="cal-day">21</span>
                              <div class="cal-badges">
                                <span class="cal-badge">Dr.</span
                                ><span class="cal-badge-alt">Dr.</span>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <span class="cal-day">22</span>
                              <div class="cal-badges">
                                <span class="cal-badge">Dr.</span
                                ><span class="cal-badge-alt">Dr.</span>
                              </div>
                            </td>
                            <td>
                              <span class="cal-day">23</span>
                              <div class="cal-badges">
                                <span class="cal-badge">Dr.</span
                                ><span class="cal-badge-alt">Dr.</span>
                              </div>
                            </td>
                            <td>
                              <span class="cal-day">24</span>
                              <div class="cal-badges">
                                <span class="cal-badge">Dr.</span
                                ><span class="cal-badge-alt">Dr.</span>
                              </div>
                            </td>
                            <td>
                              <span class="cal-day">25</span>
                              <div class="cal-badges">
                                <span class="cal-badge">Dr.</span
                                ><span class="cal-badge-alt">Dr.</span>
                              </div>
                            </td>
                            <td>
                              <span class="cal-day">26</span>
                              <div class="cal-badges">
                                <span class="cal-badge">Dr.</span
                                ><span class="cal-badge-alt">Dr.</span>
                              </div>
                            </td>
                            <td>
                              <span class="cal-day">27</span>
                              <div class="cal-badges">
                                <span class="cal-badge">Dr.</span
                                ><span class="cal-badge-alt">Dr.</span>
                              </div>
                            </td>
                            <td>
                              <span class="cal-day">28</span>
                              <div class="cal-badges">
                                <span class="cal-badge">Dr.</span
                                ><span class="cal-badge-alt">Dr.</span>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <span class="cal-day">29</span>
                              <div class="cal-badges">
                                <span class="cal-badge">Dr.</span
                                ><span class="cal-badge-alt">Dr.</span>
                              </div>
                            </td>
                            <td>
                              <span class="cal-day">30</span>
                              <div class="cal-badges">
                                <span class="cal-badge">Dr.</span
                                ><span class="cal-badge-alt">Dr.</span>
                              </div>
                            </td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                          </tr>
                        </tbody>
                      </table>
                    </div>

                    <div class="calendar__month">
                      <p class="calendar__caption">2025,10</p>
                      <table
                        class="cal-table"
                        aria-label="2025年10月 営業カレンダー（渋谷院）"
                      >
                        <thead>
                          <tr>
                            <th class="is-sun">日</th>
                            <th>月</th>
                            <th>火</th>
                            <th>水</th>
                            <th>木</th>
                            <th>金</th>
                            <th class="is-sat">土</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td></td>
                            <td></td>
                            <td>
                              <span class="cal-day">1</span>
                              <div class="cal-badges">
                                <span class="cal-badge">Dr.</span
                                ><span class="cal-badge-alt">Dr.</span>
                              </div>
                            </td>
                            <td>
                              <span class="cal-day">2</span>
                              <div class="cal-badges">
                                <span class="cal-badge">Dr.</span
                                ><span class="cal-badge-alt">Dr.</span>
                              </div>
                            </td>
                            <td>
                              <span class="cal-day">3</span>
                              <div class="cal-badges">
                                <span class="cal-badge">Dr.</span
                                ><span class="cal-badge-alt">Dr.</span>
                              </div>
                            </td>
                            <td>
                              <span class="cal-day">4</span>
                              <div class="cal-badges">
                                <span class="cal-badge">Dr.</span
                                ><span class="cal-badge-alt">Dr.</span>
                              </div>
                            </td>
                            <td>
                              <span class="cal-day">5</span>
                              <div class="cal-badges">
                                <span class="cal-badge">Dr.</span
                                ><span class="cal-badge-alt">Dr.</span>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <span class="cal-day">5</span>
                              <div class="cal-badges">
                                <span class="cal-badge">Dr.</span
                                ><span class="cal-badge-alt">Dr.</span>
                              </div>
                            </td>
                            <td>
                              <span class="cal-day">6</span>
                              <div class="cal-badges">
                                <span class="cal-badge">Dr.</span
                                ><span class="cal-badge-alt">Dr.</span>
                              </div>
                            </td>
                            <td>
                              <span class="cal-day">7</span>
                              <div class="cal-badges">
                                <span class="cal-badge">Dr.</span
                                ><span class="cal-badge-alt">Dr.</span>
                              </div>
                            </td>
                            <td>
                              <span class="cal-day">8</span>
                              <div class="cal-badges">
                                <span class="cal-badge">Dr.</span
                                ><span class="cal-badge-alt">Dr.</span>
                              </div>
                            </td>
                            <td>
                              <span class="cal-day">9</span>
                              <div class="cal-badges">
                                <span class="cal-badge">Dr.</span
                                ><span class="cal-badge-alt">Dr.</span>
                              </div>
                            </td>
                            <td>
                              <span class="cal-day">10</span>
                              <div class="cal-badges">
                                <span class="cal-badge">Dr.</span
                                ><span class="cal-badge-alt">Dr.</span>
                              </div>
                            </td>
                            <td>
                              <span class="cal-day">11</span>
                              <div class="cal-badges">
                                <span class="cal-badge">Dr.</span
                                ><span class="cal-badge-alt">Dr.</span>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <span class="cal-day">12</span>
                              <div class="cal-badges">
                                <span class="cal-badge">Dr.</span
                                ><span class="cal-badge-alt">Dr.</span>
                              </div>
                            </td>
                            <td>
                              <span class="cal-day">13</span>
                              <div class="cal-badges">
                                <span class="cal-badge">Dr.</span
                                ><span class="cal-badge-alt">Dr.</span>
                              </div>
                            </td>
                            <td>
                              <span class="cal-day">14</span>
                              <div class="cal-badges">
                                <span class="cal-badge">Dr.</span
                                ><span class="cal-badge-alt">Dr.</span>
                              </div>
                            </td>
                            <td>
                              <span class="cal-day">15</span>
                              <div class="cal-badges">
                                <span class="cal-badge">Dr.</span
                                ><span class="cal-badge-alt">Dr.</span>
                              </div>
                            </td>
                            <td>
                              <span class="cal-day">16</span>
                              <div class="cal-badges">
                                <span class="cal-badge">Dr.</span
                                ><span class="cal-badge-alt">Dr.</span>
                              </div>
                            </td>
                            <td>
                              <span class="cal-day">17</span>
                              <div class="cal-badges">
                                <span class="cal-badge">Dr.</span
                                ><span class="cal-badge-alt">Dr.</span>
                              </div>
                            </td>
                            <td>
                              <span class="cal-day">18</span>
                              <div class="cal-badges">
                                <span class="cal-badge">Dr.</span
                                ><span class="cal-badge-alt">Dr.</span>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <span class="cal-day">19</span>
                              <div class="cal-badges">
                                <span class="cal-badge">Dr.</span
                                ><span class="cal-badge-alt">Dr.</span>
                              </div>
                            </td>
                            <td>
                              <span class="cal-day">20</span>
                              <div class="cal-badges">
                                <span class="cal-badge">Dr.</span
                                ><span class="cal-badge-alt">Dr.</span>
                              </div>
                            </td>
                            <td>
                              <span class="cal-day">21</span>
                              <div class="cal-badges">
                                <span class="cal-badge">Dr.</span
                                ><span class="cal-badge-alt">Dr.</span>
                              </div>
                            </td>
                            <td>
                              <span class="cal-day">22</span>
                              <div class="cal-badges">
                                <span class="cal-badge">Dr.</span
                                ><span class="cal-badge-alt">Dr.</span>
                              </div>
                            </td>
                            <td>
                              <span class="cal-day">23</span>
                              <div class="cal-badges">
                                <span class="cal-badge">Dr.</span
                                ><span class="cal-badge-alt">Dr.</span>
                              </div>
                            </td>
                            <td>
                              <span class="cal-day">24</span>
                              <div class="cal-badges">
                                <span class="cal-badge">Dr.</span
                                ><span class="cal-badge-alt">Dr.</span>
                              </div>
                            </td>
                            <td>
                              <span class="cal-day">25</span>
                              <div class="cal-badges">
                                <span class="cal-badge">Dr.</span
                                ><span class="cal-badge-alt">Dr.</span>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <span class="cal-day">26</span>
                              <div class="cal-badges">
                                <span class="cal-badge">Dr.</span
                                ><span class="cal-badge-alt">Dr.</span>
                              </div>
                            </td>
                            <td>
                              <span class="cal-day">27</span>
                              <div class="cal-badges">
                                <span class="cal-badge">Dr.</span
                                ><span class="cal-badge-alt">Dr.</span>
                              </div>
                            </td>
                            <td>
                              <span class="cal-day">28</span>
                              <div class="cal-badges">
                                <span class="cal-badge">Dr.</span
                                ><span class="cal-badge-alt">Dr.</span>
                              </div>
                            </td>
                            <td>
                              <span class="cal-day">29</span>
                              <div class="cal-badges">
                                <span class="cal-badge">Dr.</span
                                ><span class="cal-badge-alt">Dr.</span>
                              </div>
                            </td>
                            <td>
                              <span class="cal-day">30</span>
                              <div class="cal-badges">
                                <span class="cal-badge">Dr.</span
                                ><span class="cal-badge-alt">Dr.</span>
                              </div>
                            </td>
                            <td>
                              <span class="cal-day">31</span>
                              <div class="cal-badges">
                                <span class="cal-badge">Dr.</span
                                ><span class="cal-badge-alt">Dr.</span>
                              </div>
                            </td>
                            <td></td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        -->

        <section class="gallery">
          <h2 class="title">Gallery</h2>
          <div class="gallery__inner">
            <!-- Swiper START -->
            <div class="swiper gallery__swiper">
              <!-- メイン表示部分 -->
              <div class="swiper-wrapper">
                <!-- 各スライド -->
                <div class="swiper-slide">
                  <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/top/slider01.jpg" alt="" />
                </div>
                <div class="swiper-slide">
                  <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/top/slider02.jpg" alt="" />
                </div>
                <div class="swiper-slide">
                  <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/top/slider03.jpg" alt="" />
                </div>
                <div class="swiper-slide">
                  <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/top/slider04.jpg" alt="" />
                </div>
              </div>
            </div>

            <div class="gallery__pagination">
              <div class="swiper-pagination"></div>
            </div>

            <!-- Swiper END -->
          </div>
        </section>
<?php get_footer(); ?>
