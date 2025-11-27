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

        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <section class="notice-detail">
          <div class="inner">
            <div class="notice-detail__inner">
              <div class="notice-body__toc">
                <div class="table-of-contents">
                  <ol class="wp-block-list">
                    <?php
                    // 見出しを取得して目次を生成
                    $content = get_the_content();
                    $pattern = '/<h([2-4])[^>]*>(.*?)<\/h[2-4]>/i';
                    preg_match_all($pattern, $content, $matches, PREG_SET_ORDER);
                    
                    if (!empty($matches)) {
                      $current_h2_index = 0;
                      $current_h3_index = 0;
                      $heading_count = 0;
                      
                      foreach ($matches as $match) {
                        $level = (int)$match[1];
                        $title = strip_tags($match[2]);
                        $heading_count++;
                        $id = 'heading-' . $heading_count;
                        
                        if ($level == 2) {
                          $current_h2_index++;
                          $current_h3_index = 0;
                          if ($current_h2_index > 1) {
                            echo '</li>';
                          }
                          echo '<li>';
                          echo '<a href="#' . esc_attr($id) . '"><b>' . esc_html($current_h2_index . '. ' . $title) . '</b></a>';
                        } elseif ($level == 3) {
                          $current_h3_index++;
                          echo '<a href="#' . esc_attr($id) . '">' . esc_html($title) . '</a>';
                        }
                      }
                      if ($current_h2_index > 0) {
                        echo '</li>';
                      }
                    }
                    ?>
                  </ol>
                </div>
              </div>
              <div class="notice-detail__box">
                <div class="notice-head">
                  <div class="notice-head__meta">
                    <p class="notice-head__date"><?php echo get_the_date('Y.m.d'); ?></p>
                    <?php
                    $categories = get_the_category();
                    if ($categories && !is_wp_error($categories)) {
                      $category = $categories[0];
                      if ($category->name !== 'Uncategorized' && $category->name !== '未分類') :
                    ?>
                      <p class="notice-head__category"><?php echo esc_html($category->name); ?></p>
                    <?php
                      endif;
                    }
                    ?>
                  </div>
                  <h1 class="notice-head__title"><?php the_title(); ?></h1>
                  <?php if (has_post_thumbnail()) : ?>
                    <div class="notice-head__thumbnail">
                      <?php the_post_thumbnail('large', array('alt' => get_the_title())); ?>
                    </div>
                  <?php endif; ?>
                </div>
                <div class="notice-body__content">
                  <?php the_content(); ?>
                </div>
                <div class="notice-foot">
                  <a href="<?php echo esc_url(get_post_type_archive_link('notice')); ?>" class="btn__back">
                    <span>一覧に戻る</span>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </section>
        <?php endwhile; endif; ?>

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