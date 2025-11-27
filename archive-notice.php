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
              <h1 class="title">Notice</h1>
              <p class="fv-low__titles--text">お知らせ</p>
            </div>
          </div>
        </div>

        <section class="notice-list">
          <div class="notice-list__inner">
            <div class="notice-list__body">
              <div class="notice-list__content">
                <!-- 静的な投稿アイテム -->
                <!-- <div class="notice-list__item">
                  <div class="notice-list__image">
                    <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/notice/notice01.jpg" alt="" />
                  </div>

                  <div class="notice-list__info">
                    <div class="notice-list__meta">
                      <p class="notice-list__date">YYYY/MM/DD</p>
                      <p class="notice-list__category">カテゴリ名</p>
                    </div>
                    <p class="notice-list__title">Titleコラムタイトルが入りますコラムタイトルが入ります</p>
                    <p class="notice-list__text">テキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入ります</p>
                  </div>
                </div> -->
                <!-- 静的な投稿アイテム -->

                <?php
                // カテゴリフィルタリングの設定
                $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                $args = array(
                  'post_type' => 'notice',
                  'posts_per_page' => 10,
                  'paged' => $paged,
                  'orderby' => 'date',
                  'order' => 'DESC',
                );

                // カテゴリで絞り込む場合（カテゴリアーカイブページまたはクエリパラメータの場合）
                if (is_category()) {
                  $current_category = get_queried_object();
                  $args['cat'] = $current_category->term_id;
                } elseif (isset($_GET['cat']) && !empty($_GET['cat'])) {
                  $args['cat'] = intval($_GET['cat']);
                }
                
                $notice_query = new WP_Query($args);
                
                if ($notice_query->have_posts()) :
                  while ($notice_query->have_posts()) : $notice_query->the_post();
                ?>
                <div class="notice-list__item">
                  <div class="notice-list__image">
                    <?php if (has_post_thumbnail()) : ?>
                      <a href="<?php the_permalink(); ?>">
                        <?php the_post_thumbnail('notice-thumb', array('alt' => get_the_title())); ?>
                      </a>
                    <?php else : ?>
                      <a href="<?php the_permalink(); ?>">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/notice/notice01.jpg" alt="<?php echo esc_attr(get_the_title()); ?>" />
                      </a>
                    <?php endif; ?>
                  </div>

                  <div class="notice-list__info">
                    <div class="notice-list__meta">
                      <p class="notice-list__date"><?php echo get_the_date('Y/m/d'); ?></p>
                      <?php
                      $categories = get_the_category();
                      if ($categories && !is_wp_error($categories)) {
                        $category = $categories[0];
                        if ($category->name !== 'Uncategorized' && $category->name !== '未分類') :
                      ?>
                        <p class="notice-list__category"><?php echo esc_html($category->name); ?></p>
                      <?php
                        endif;
                      }
                      ?>
                    </div>
                    <p class="notice-list__title">
                      <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    </p>
                    <p class="notice-list__text"><?php echo wp_trim_words(get_the_excerpt(), 30); ?></p>
                  </div>
                </div>
                <?php
                  endwhile;
                else :
                ?>
                <p>お知らせがありません。</p>
                <?php
                endif;
                wp_reset_postdata();
                ?>
              </div>
              
              <!-- 静的なページネーション（参考用） -->
              <!-- <div class="wp-pagenavi">
                <span class="current">1</span>
                <a class="page larger" href="<?php echo esc_url( home_url('') ); ?>">2</a>
                <a class="page larger" href="<?php echo esc_url( home_url('') ); ?>">3</a>
                <span class="extend">…</span>
                <a class="page larger" href="<?php echo esc_url( home_url('') ); ?>">10</a>
                <a class="nextpostslink" rel="next" href="<?php echo esc_url( home_url('') ); ?>">»</a>
              </div> -->
              
              <?php
              // ページネーション（複数ページがある場合のみ表示）
              if (isset($notice_query) && $notice_query->max_num_pages > 1) :
                // ベースURLの設定
                if (is_category()) {
                  $current_category = get_queried_object();
                  $base_url = get_category_link($current_category->term_id);
                  $base_url = add_query_arg('post_type', 'notice', $base_url);
                } else {
                  $base_url = get_post_type_archive_link('notice');
                  if (isset($_GET['cat']) && !empty($_GET['cat'])) {
                    $base_url = add_query_arg('cat', intval($_GET['cat']), $base_url);
                  }
                }
                
                // ページネーションリンクの生成
                $current_page = max(1, $paged);
                $total_pages = $notice_query->max_num_pages;
              ?>
              <div class="wp-pagenavi">
                <?php
                // 前のページへのリンク
                if ($current_page > 1) {
                  $prev_url = ($current_page == 2) ? remove_query_arg('paged', $base_url) : add_query_arg('paged', $current_page - 1, $base_url);
                  echo '<a class="previouspostslink" rel="prev" href="' . esc_url($prev_url) . '">«</a>';
                }
                
                // ページ番号の表示
                $start_page = max(1, $current_page - 1);
                $end_page = min($total_pages, $current_page + 1);
                
                // 最初のページ
                if ($start_page > 1) {
                  $first_url = ($start_page == 1) ? remove_query_arg('paged', $base_url) : add_query_arg('paged', 1, $base_url);
                  echo '<a class="page larger" href="' . esc_url($first_url) . '">1</a>';
                  if ($start_page > 2) {
                    echo '<span class="extend">…</span>';
                  }
                }
                
                // 現在のページ周辺
                for ($i = $start_page; $i <= $end_page; $i++) {
                  if ($i == $current_page) {
                    echo '<span class="current">' . $i . '</span>';
                  } else {
                    $page_url = ($i == 1) ? remove_query_arg('paged', $base_url) : add_query_arg('paged', $i, $base_url);
                    echo '<a class="page larger" href="' . esc_url($page_url) . '">' . $i . '</a>';
                  }
                }
                
                // 最後のページ
                if ($end_page < $total_pages) {
                  if ($end_page < $total_pages - 1) {
                    echo '<span class="extend">…</span>';
                  }
                  $last_url = add_query_arg('paged', $total_pages, $base_url);
                  echo '<a class="page larger" href="' . esc_url($last_url) . '">' . $total_pages . '</a>';
                }
                
                // 次のページへのリンク
                if ($current_page < $total_pages) {
                  $next_url = add_query_arg('paged', $current_page + 1, $base_url);
                  echo '<a class="nextpostslink" rel="next" href="' . esc_url($next_url) . '">»</a>';
                }
                ?>
              </div>
              <?php
              endif;
              ?>
            </div>
            <div class="notice-list__side">
              <div class="notice-list__category__area">
                <!-- <p class="notice-list__category__button"><a href="<?php echo esc_url( home_url('') ); ?>">All Category</a></p> -->
                <p class="notice-list__category__button"><a href="<?php echo esc_url( get_post_type_archive_link('notice') ); ?>">All Category</a></p>
                <div class="notice-list__category__list">
                  <h2>Category</h2>
                  <ul>
                    <?php
                    // notice に紐づくカテゴリ一覧を取得
                    $categories = get_terms(array(
                      'taxonomy' => 'category',
                      'hide_empty' => true,
                    ));

                    if ($categories && !is_wp_error($categories)) :
                      foreach ($categories as $category) :
                        // このカテゴリに notice が1件でもあるか確認
                        $args = array(
                          'post_type' => 'notice',
                          'posts_per_page' => 1,
                          'tax_query' => array(
                            array(
                              'taxonomy' => 'category',
                              'field' => 'term_id',
                              'terms' => $category->term_id,
                            ),
                          ),
                        );
                        $query = new WP_Query($args);

                        if ($query->have_posts()) :
                          // 絞り込みリンク（正しい生成方法）
                          $category_link = add_query_arg(
                            array(
                              'post_type' => 'notice'
                            ),
                            get_term_link($category)
                          );
                    ?>
                          <li>
                            <a href="<?php echo esc_url($category_link); ?>">
                              <span><?php echo esc_html($category->name); ?></span>
                            </a>
                          </li>
                    <?php
                        endif;

                        wp_reset_postdata();
                      endforeach;
                    endif;
                    ?>
                  </ul>

                </div>
              </div>
              </div>
          </div>
        </section>

        <section class="contact" id="contact">
          <div class="inner">
            <h2 class="title">Contact</h2>

            <p class="contact__text">
              カウンセリングのご相談はこちらから承ります。
            </p>

            <div class="contact__content">
              <div class="contact__clinic">
                <p class="contact__clinic-name">銀座院</p>
                <div class="contact__clinic-info">
                  <div class="contact__reservations">
                    <a
                      class="contact__reservation"
                      href="https://page.line.me/wdy1996b"
                      target="_blank"
                      rel="noopener noreferrer"
                    >
                      <p class="contact__reservation-title">
                        <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/top/ico_line.svg.png" alt="" />
                        LINE予約
                      </p>
                      <p class="contact__reservation-desc">
                        銀座院のLINE予約は<br class="pc_n" />こちらから
                      </p>
                    </a>
                    <a
                      class="contact__reservation"
                      href="https://cosmedical.jp/contact/"
                      target="_blank"
                      rel="noopener noreferrer"
                    >
                      <p class="contact__reservation-title">
                        <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/top/Web.png" alt="" />
                        WEB予約
                      </p>
                      <p class="contact__reservation-desc">
                        銀座院のWEB予約は<br class="pc_n" />こちらから
                      </p>
                    </a>
                  </div>
                  <a class="contact__phone" href="tel:03-6281-4100">
                    <p class="contact__phone-number">
                      <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/top/Phone.png" alt="" />
                      03-6281-4100
                    </p>
                    <p class="contact__phone-hours">
                      営業時間：10:00〜20:00<br />
                      (年中無休)
                    </p>
                  </a>
                </div>
              </div>
              <div class="contact__clinic">
                <p class="contact__clinic-name is-ginza">渋谷院</p>
                <div class="contact__clinic-info">
                  <div class="contact__reservations">
                    <a
                      class="contact__reservation"
                      href="https://line.me/R/ti/p/%40400hhfgq"
                    >
                      <p class="contact__reservation-title">
                        <img
                          src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/top/ico_line.svg.png"
                          alt="https://page.line.me/oiu9031z"
                          target="_blank"
                          rel="noopener noreferrer"
                        />
                        LINE予約
                      </p>
                      <p class="contact__reservation-desc">
                        渋谷院のLINE予約は<br class="pc_n" />こちらから
                      </p>
                    </a>
                    <a
                      class="contact__reservation"
                      href="https://www.cancer-chika.jp/reservation/shibuya"
                      target="_blank"
                      rel="noopener noreferrer"
                    >
                      <p class="contact__reservation-title">
                        <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/top/Web.png" alt="" />
                        WEB予約
                      </p>
                      <p class="contact__reservation-desc">
                        渋谷院のWEB予約は<br class="pc_n" />こちらから
                      </p>
                    </a>
                  </div>
                  <a class="contact__phone" href="tel:03-6281-4100">
                    <p class="contact__phone-number">
                      <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/top/Phone.png" alt="" />
                      03-6809-0029
                    </p>
                    <p class="contact__phone-hours">
                      営業時間：10:00〜20:00<br />
                      (年中無休)
                    </p>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </section>

        <div class="footer-links">
          <div class="footer-links__item">
            <a
              href="https://cosmedical.jp/monitor/"
              target="_blank"
              rel="noopener noreferrer"
              >モニター募集</a
            >
          </div>
          <div class="footer-links__item">
            <a
              href="https://cosmedical.jp/point-card/"
              target="_blank"
              rel="noopener noreferrer"
              >ポイントカード</a
            >
          </div>
          <div class="footer-links__item">
            <a
              href="https://cosmedical.jp/recruit/"
              target="_blank"
              rel="noopener noreferrer"
              >採用情報</a
            >
          </div>
          <div class="footer-links__item">
            <a
              href="https://cosmedical.jp/under-age/"
              target="_blank"
              rel="noopener noreferrer"
              >未成年者</a
            >
          </div>
        </div>
      </main>


<?php get_footer(); ?> 