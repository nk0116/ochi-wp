<?php get_header(); ?>

<main>
  <div class="fv-low">
    <div class="fv-low__inner">
      <div class="fv-low__titles">
        <h1 class="title">BLOG</h1>
        <p class="fv-low__titles--text">銀座院　ブログ</p>
      </div>
    </div>
  </div>

  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  <section class="blog-detail">
    <div class="inner">
      <div class="blog-detail__inner">
        <?php
        // 見出しを取得して目次を生成
        $content = get_the_content();
        $pattern = '/<h([2-4])[^>]*>(.*?)<\/h[2-4]>/i';
        preg_match_all($pattern, $content, $matches, PREG_SET_ORDER);
        
        if (!empty($matches)) :
        ?>
        <div class="blog-body__toc">
          <div class="table-of-contents">
            <ol class="wp-block-list">
              <?php
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
              ?>
            </ol>
          </div>
        </div>
        <?php endif; ?>
        <div class="blog-detail__box">
          <div class="blog-head">
            <div class="blog-head__meta">
              <p class="blog-head__date"><?php echo get_the_date('Y.m.d'); ?></p>
              <?php
              $categories = get_the_category();
              if ($categories && !is_wp_error($categories)) {
                $category = $categories[0];
                if ($category->name !== 'Uncategorized' && $category->name !== '未分類') :
              ?>
                <p class="blog-head__category"><?php echo esc_html($category->name); ?></p>
              <?php
                endif;
              }
              ?>
            </div>
            <h1 class="blog-head__title"><?php the_title(); ?></h1>
            <?php if (has_post_thumbnail()) : ?>
              <div class="blog-head__thumbnail">
                <?php the_post_thumbnail('large', array('alt' => get_the_title())); ?>
              </div>
            <?php endif; ?>
          </div>
          <div class="blog-body__content">
            <?php the_content(); ?>
          </div>
          <div class="blog-foot">
            <a href="<?php echo esc_url(get_post_type_archive_link('ginza-blog')); ?>" class="btn__back">
              <span>一覧に戻る</span>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="blog-recommended">
    <div class="inner">
      <h2 class="blog-recommended__title">人気のブログ</h2>
      <div class="blog-list__recommended">
        <?php
        $popular_args = array(
          'post_type' => 'ginza-blog',
          'posts_per_page' => 3,
          'meta_key' => 'post_views_count',
          'orderby' => array(
            'meta_value_num' => 'DESC',
            'date' => 'DESC'
          ),
          'post__not_in' => array(get_the_ID()),
        );
        $popular_query = new WP_Query($popular_args);
        
        if ($popular_query->have_posts()) :
          while ($popular_query->have_posts()) : $popular_query->the_post();
        ?>
        <div class="blog-list__item">
          <a href="<?php the_permalink(); ?>" class="blog-list__card">
            <div class="blog-list__image">
              <?php if (has_post_thumbnail()) : ?>
                <?php the_post_thumbnail('notice-thumb', array('alt' => get_the_title())); ?>
              <?php else : ?>
                <img src="<?php echo get_template_directory_uri(); ?>/img/notice/notice01.jpg" alt="<?php echo esc_attr(get_the_title()); ?>" />
              <?php endif; ?>
            </div>
            <div class="blog-list__box">
              <p class="blog-list__date"><?php echo get_the_date('Y.m.d'); ?></p>
              <h3 class="blog-list__title"><?php the_title(); ?></h3>
            </div>
          </a>
        </div>
        <?php
          endwhile;
        endif;
        wp_reset_postdata();
        ?>
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
  <?php endwhile; endif; ?>
</main>

<?php get_footer(); ?>
