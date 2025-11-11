<?php get_header(); ?>

<main>
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
              <h1 class="title">Monthly Campaign</h1>
              <p class="fv-low__titles--text">今月のおすすめメニュー</p>
            </div>
          </div>
        </div>

        <section class="campaigns">
          <div class="inner">
            <div class="campaigns__tabs" role="tablist" aria-label="今月のおすすめメニュー">
              <button class="campaigns__tab is-active" role="tab" aria-selected="true" aria-controls="panel-all" id="tab-all" data-target="panel-all">ALL</button>
              <button class="campaigns__tab" role="tab" aria-selected="false" aria-controls="panel-pickup" id="tab-pickup" data-target="panel-pickup">ピックアップ</button>
              <button class="campaigns__tab" role="tab" aria-selected="false" aria-controls="panel-monitor" id="tab-monitor" data-target="panel-monitor">モニター募集</button>
              <button class="campaigns__tab" role="tab" aria-selected="false" aria-controls="panel-ginza" id="tab-ginza" data-target="panel-ginza">銀座院</button>
              <button class="campaigns__tab" role="tab" aria-selected="false" aria-controls="panel-shibuya" id="tab-shibuya" data-target="panel-shibuya">渋谷院</button>
              <button class="campaigns__tab" role="tab" aria-selected="false" aria-controls="panel-both" id="tab-both" data-target="panel-both">両院共通</button>
            </div>

            <div class="campaigns__body">
              <div class="campaigns__panels">
                <?php require_once get_template_directory() . '/inc/campaigns-data.php'; ?>
                                <div class="campaigns__panel is-active" id="panel-all" role="tabpanel" aria-labelledby="tab-all" >
                                  <div class="campaigns-list">

                <?php
                $args = array(
                    'post_type'      => 'pickup-menu',
                    'posts_per_page' => -1,
                    'post_status'    => 'publish',
                    'orderby'        => 'date',
                    'order'          => 'DESC'
                );
                $pickup_menu_query = new WP_Query($args);
                if ($pickup_menu_query->have_posts()): 
                    while ($pickup_menu_query->have_posts()): $pickup_menu_query->the_post();
                        $image_url = get_the_post_thumbnail_url(get_the_ID(), 'large');
                        $title = get_the_title();
                        $categories = get_the_terms(get_the_ID(), 'pickup-menu__category');
                        $category_names = array();
                        if ($categories && !is_wp_error($categories)) {
                            foreach ($categories as $cat) {
                                $category_names[] = esc_html($cat->name);
                            }
                        }
                        $content = get_the_content();
                ?>
                    <div class="campaigns-list__item">
                      <p class="campaigns-list__image">
                        <?php if ($image_url): ?>
                          <img src="<?php echo esc_url($image_url); ?>" alt="<?php echo esc_attr($title); ?>">
                        <?php else: ?>
                          <img src="<?php bloginfo('stylesheet_directory'); ?>/img/common/noimg.png" alt="<?php echo esc_attr($title); ?>">
                        <?php endif; ?>
                      </p>
                      <div class="campaigns-list__info">
                        <!-- <p class="campaigns-list__date"><?php echo get_the_date('Y.m.d'); ?></p> -->
                        <?php if (!empty($category_names)): ?>
                        <ul class="campaigns-list__category">
                            <?php foreach ($category_names as $c_name): ?>
                                <li><?php echo $c_name; ?></li>
                            <?php endforeach; ?>
                        </ul>
                        <?php endif; ?>
                        <!-- <p class="campaigns-list__title"><?php echo esc_html($title); ?></p> -->
                        <div class="campaigns-list__text">

                        </div>
                        <div class="campaigns-list__treatment">
                          <!-- 施術詳細やカスタムフィールドがあればここに出力 -->
                        </div>
                      </div>
                    </div>
                <?php
                    endwhile;
                    wp_reset_postdata();
                else:
                ?>
                    <div class="campaigns-list__item">
                      <p class="campaigns-list__image">
                        <img src="<?php bloginfo('stylesheet_directory'); ?>/img/common/noimg.png" alt="No Campaign">
                      </p>
                      <div class="campaigns-list__info">
                        <ul class="campaigns-list__category"><li>キャンペーンなし</li></ul>
                        <p class="campaigns-list__title">現在キャンペーンはありません。</p>
                        <p class="campaigns-list__text"></p>
                        <div class="campaigns-list__treatment"></div>
                      </div>
                    </div>
                <?php endif; ?>


                  </div>
                </div>


                <!-- モニター-->
                <div class="campaigns__panel" id="panel-pickup" role="tabpanel" aria-labelledby="tab-pickup" hidden >
                  <div class="campaigns-list">

                  </div>
                </div>

                <!-- モニター -->
                <div class="campaigns__panel" id="panel-monitor" role="tabpanel" aria-labelledby="tab-monitor" hidden >
                  <div class="campaigns-list">
                    <?php
                    // 「pickup-menu」カスタム投稿タイプのうち「モニター」カテゴリーのみ取得
                    $monitor_args = [
                      'post_type'      => 'pickup-menu',
                      'posts_per_page' => -1,
                      'post_status'    => 'publish',
                      'orderby'        => 'date',
                      'order'          => 'DESC',
                      'tax_query'      => [
                        [
                          'taxonomy' => 'pickup-menu__category',
                          'field'    => 'name',
                          'terms'    => ['モニター募集'],
                          'operator' => 'IN',
                        ],
                      ],
                    ];
                    $monitor_query = new WP_Query($monitor_args);
                    if ($monitor_query->have_posts()) :
                      while ($monitor_query->have_posts()) : $monitor_query->the_post();
                        $image_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
                        $title = get_the_title();
                        $content = get_the_content();
                    ?>
                    <div class="campaigns-list__item">
                      <p class="campaigns-list__image">
                        <?php if ($image_url): ?>
                          <img src="<?php echo esc_url($image_url); ?>" alt="<?php echo esc_attr($title); ?>">
                        <?php else: ?>
                          <img src="<?php bloginfo('stylesheet_directory'); ?>/img/common/noimg.png" alt="No Campaign">
                        <?php endif; ?>
                      </p>
                      <div class="campaigns-list__info">
                        <!-- <p class="campaigns-list__date"><?php echo get_the_date('Y.m.d'); ?></p> -->
                        <ul class="campaigns-list__category">
                          <li>モニター</li>
                        </ul>
                        <div class="campaigns-list__text">
        
                        </div>
                        <div class="campaigns-list__treatment"></div>
                      </div>
                    </div>
                    <?php
                      endwhile;
                      wp_reset_postdata();
                    else:
                    ?>
                    <div class="campaigns-list__item">
                      <p class="campaigns-list__image">
                        <img src="<?php bloginfo('stylesheet_directory'); ?>/img/common/noimg.png" alt="No Campaign">
                      </p>
                      <div class="campaigns-list__info">
                        <ul class="campaigns-list__category"><li>モニター</li></ul>
                        <p class="campaigns-list__title">現在モニターキャンペーンはありません。</p>
                        <p class="campaigns-list__text"></p>
                        <div class="campaigns-list__treatment"></div>
                      </div>
                    </div>
                    <?php endif; ?>
                  </div>
                </div>

                <div class="campaigns__panel" id="panel-ginza" role="tabpanel" aria-labelledby="tab-ginza" hidden >
                  <div class="campaigns-list">
                    <?php
                    // 「pickup-menu」カスタム投稿タイプの「銀座院」カテゴリーの投稿のみを取得
                    $ginza_args = array(
                      'post_type'      => 'pickup-menu',
                      'posts_per_page' => -1,
                      'post_status'    => 'publish',
                      'orderby'        => 'date',
                      'order'          => 'DESC',
                      'tax_query'      => array(
                        array(
                          'taxonomy' => 'pickup-menu__category',
                          'field'    => 'name',
                          'terms'    => array('銀座院'),
                          'operator' => 'IN',
                        ),
                      ),
                    );
                    $ginza_query = new WP_Query($ginza_args);
                    if ($ginza_query->have_posts()) :
                      while ($ginza_query->have_posts()) : $ginza_query->the_post();
                        $image_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
                        $title = get_the_title();
                        $content = get_the_content();
                        // カテゴリー名取得（銀座院のみ出力）
                        $cats = get_the_terms(get_the_ID(), 'pickup-menu__category');
                        $ginza_cat = '';
                        if ($cats && !is_wp_error($cats)) {
                          foreach ($cats as $cat) {
                            if ($cat->name === '銀座院') {
                              $ginza_cat = $cat->name;
                              break;
                            }
                          }
                        }
                    ?>
                    <div class="campaigns-list__item">
                      <p class="campaigns-list__image">
                        <?php if ($image_url): ?>
                          <img src="<?php echo esc_url($image_url); ?>" alt="<?php echo esc_attr($title); ?>">
                        <?php else: ?>
                          <img src="<?php bloginfo('stylesheet_directory'); ?>/img/common/noimg.png" alt="No Image">
                        <?php endif; ?>
                      </p>
                      <div class="campaigns-list__info">
                        <ul class="campaigns-list__category">
                          <?php if ($ginza_cat): ?>
                            <li><?php echo esc_html($ginza_cat); ?></li>
                          <?php endif; ?>
                        </ul>
                        <div class="campaigns-list__text">
                  
                        </div>
                      </div>
                    </div>
                    <?php
                      endwhile;
                      wp_reset_postdata();
                    else:
                    ?>
                    <div class="campaigns-list__item">
                      <p class="campaigns-list__image">
                        <img src="<?php bloginfo('stylesheet_directory'); ?>/img/common/noimg.png" alt="No Campaign">
                      </p>
                      <div class="campaigns-list__info">
                        <ul class="campaigns-list__category"><li>銀座院</li></ul>
                        <p class="campaigns-list__text"></p>
                      </div>
                    </div>
                    <?php endif; ?>

                  </div>
                </div>


                <!-- 渋谷 -->
                <div class="campaigns__panel" id="panel-shibuya" role="tabpanel" aria-labelledby="tab-shibuya" hidden >
                  <div class="campaigns-list">

                    <?php
                    // 「pickup-menu」カスタム投稿タイプから「渋谷院」カテゴリーのみ取得
                    $shibuya_args = [
                      'post_type'      => 'pickup-menu',
                      'posts_per_page' => -1,
                      'post_status'    => 'publish',
                      'orderby'        => 'date',
                      'order'          => 'DESC',
                      'tax_query'      => [
                        [
                          'taxonomy' => 'pickup-menu__category',
                          'field'    => 'name',
                          'terms'    => ['渋谷院'],
                          'operator' => 'IN',
                        ],
                      ],
                    ];
                    $shibuya_query = new WP_Query($shibuya_args);
                    if ($shibuya_query->have_posts()) :
                      while ($shibuya_query->have_posts()) : $shibuya_query->the_post();
                        $image_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
                        $title = get_the_title();
                        $content = get_the_content();
                        // カテゴリー名「渋谷院」のみ抽出
                        $cats = get_the_terms(get_the_ID(), 'pickup-menu__category');
                        $shibuya_cat = '';
                        if ($cats && !is_wp_error($cats)) {
                          foreach ($cats as $cat) {
                            if ($cat->name === '渋谷院') {
                              $shibuya_cat = $cat->name;
                              break;
                            }
                          }
                        }
                    ?>
                    <div class="campaigns-list__item">
                      <p class="campaigns-list__image">
                        <?php if ($image_url): ?>
                          <img src="<?php echo esc_url($image_url); ?>" alt="<?php echo esc_attr($title); ?>">
                        <?php else: ?>
                          <img src="<?php bloginfo('stylesheet_directory'); ?>/img/common/noimg.png" alt="No Image">
                        <?php endif; ?>
                      </p>
                      <div class="campaigns-list__info">
                        <ul class="campaigns-list__category">
                          <?php if ($shibuya_cat): ?>
                            <li><?php echo esc_html($shibuya_cat); ?></li>
                          <?php endif; ?>
                        </ul>

                        <div class="campaigns-list__text">
                 
                        </div>
                      </div>
                    </div>
                    <?php
                      endwhile;
                      wp_reset_postdata();
                    else:
                    ?>
                    <div class="campaigns-list__item">
                      <p class="campaigns-list__image">
                        <img src="<?php bloginfo('stylesheet_directory'); ?>/img/common/noimg.png" alt="No Campaign">
                      </p>
                      <div class="campaigns-list__info">
                        <ul class="campaigns-list__category"><li>渋谷院</li></ul>
                        <p class="campaigns-list__title">現在渋谷院のキャンペーンはありません。</p
                        <p class="campaigns-list__text"></p>
                      </div>
                    </div>
                    <?php endif; ?>

                    
                  </div>
                </div>


                <!-- 両院共通 -->
                <div class="campaigns__panel" id="panel-both" role="tabpanel" aria-labelledby="tab-both" hidden >
                  <div class="campaigns-list">


                    <?php
                    // 「pickup-menu」カスタム投稿タイプから「両院共通」カテゴリーのみ取得
                    $both_campaign_args = [
                      'post_type'      => 'pickup-menu',
                      'posts_per_page' => -1, // 全件取得
                      'post_status'    => 'publish',
                      'orderby'        => 'date',
                      'order'          => 'DESC',
                      'tax_query'      => [
                        [
                          'taxonomy' => 'pickup-menu__category', // タクソノミースラッグ
                          'field'    => 'name',                 // 「カテゴリ名」で絞り込み
                          'terms'    => ['両院共通'],
                          'operator' => 'IN',
                        ],
                      ],
                    ];
                    $both_campaign_query = new WP_Query($both_campaign_args);
                    if ($both_campaign_query->have_posts()) :
                      while ($both_campaign_query->have_posts()) : $both_campaign_query->the_post();
                        // アイキャッチ画像
                        $image_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
                        // タイトル
                        $title = get_the_title();
                        // 本文内容
                        $content = get_the_content();
                        // タクソノミー取得（両院共通のみ出力したいのでフィルタ）
                        $cats = get_the_terms(get_the_ID(), 'pickup-menu__category');
                        $show_category = '';
                        if ($cats && !is_wp_error($cats)) {
                          foreach ($cats as $cat) {
                            if ($cat->name === '両院共通') {
                              $show_category = $cat->name;
                              break;
                            }
                          }
                        }
                    ?>
                    <div class="campaigns-list__item">
                      <p class="campaigns-list__image">
                        <?php if ($image_url): ?>
                          <img src="<?php echo esc_url($image_url); ?>" alt="<?php echo esc_attr($title); ?>">
                        <?php else: ?>
                          <img src="<?php bloginfo('stylesheet_directory'); ?>/img/common/noimg.png" alt="No Image">
                        <?php endif; ?>
                      </p>
                      <div class="campaigns-list__info">
                        <ul class="campaigns-list__category">
                          <?php if ($show_category): ?>
                            <li><?php echo esc_html($show_category); ?></li>
                          <?php endif; ?>
                        </ul>
                        <div class="campaigns-list__text">
               
                        </div>
                      </div>
                    </div>
                    <?php
                      endwhile;
                      wp_reset_postdata();
                    else:
                    ?>
                    <div class="campaigns-list__item">
                      <p class="campaigns-list__image">
                        <img src="<?php bloginfo('stylesheet_directory'); ?>/img/common/noimg.png" alt="No Campaign">
                      </p>
                      <div class="campaigns-list__info">
                        <ul class="campaigns-list__category"><li>両院共通</li></ul>
                        <p class="campaigns-list__title">現在両院共通のキャンペーンはありません。</p>
                        <p class="campaigns-list__text"></p>
                      </div>
                    </div>
                    <?php endif; ?>

                  </div>
                </div>

              </div>
            </div>
          </div>
        </section>

<?php get_footer(); ?> 