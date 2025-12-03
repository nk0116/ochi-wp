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
              <h1 class="title">Case</h1>
              <p class="fv-low__titles--text">症例紹介</p>
            </div>
          </div>
        </div>

        <!-- パンくずリスト -->
        <nav class="breadcrumb" aria-label="パンくずリスト">
          <ol class="breadcrumb__list">
            <li class="breadcrumb__item">
              <a href="<?php echo esc_url( home_url('') ); ?>" class="breadcrumb__link">
                <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/about-cynthia/home.svg" alt="" width="16" height="14">
              </a>
            </li>
            <li><span>/</span></li>
            <li class="breadcrumb__item breadcrumb__item--current" aria-current="page">
              <span class="current-page">症例紹介一覧</span>
            </li>
          </ol>
        </nav>
        <!-- パンくずリスト -->

        <section class="case-list">
          <div class="inner">
            <div class="case-list__search">
              <form action="" method="get">
                <div class="case-search">
                  <div class="case-search__item">
                    <button type="button">施術名で絞り込む</button>
                  </div>
                  <div class="case-search__item">
                    <button type="button">年代で絞り込む</button>
                  </div>
                  <div class="case-search__item">
                    <button type="button">性別で絞り込む</button>
                  </div>
                  <div class="case-search__submit">
                    <button type="submit" class="btn">search</button>
                  </div>
                </div>
              </form>
            </div>
			  
			<div class="case-list__content">
			  <?php if ( have_posts() ) : ?>
				<?php while ( have_posts() ) : the_post(); ?>
				  <?php
					$name         = get_field('name');
					$price        = get_field('price');
					$risk         = get_field('risk');
					$memo         = get_field('memo');
					$updated_date = get_the_modified_time('Y年n月j日');
					$before_image = get_field('before_image');
					$after_image  = get_field('after_image');

					$before_id = '';
					if ( $before_image ) {
					  $before_id = is_array( $before_image ) ? $before_image['ID'] : $before_image;
					}

					$after_id = '';
					if ( $after_image ) {
					  $after_id = is_array( $after_image ) ? $after_image['ID'] : $after_image;
					}
				  ?>
				  <div class="case-list__item">
					<a href="<?php the_permalink(); ?>" class="case-list__card">
					  <div class="case-list__before">
						<?php if ( $before_id ) : ?>
						  <?php echo wp_get_attachment_image( $before_id, 'medium' ); ?>
						<?php endif; ?>
					  </div>
					  <div class="case-list__after">
						<?php if ( $after_id ) : ?>
						  <?php echo wp_get_attachment_image( $after_id, 'medium' ); ?>
						<?php endif; ?>
					  </div>

					  <?php if ( $name ) : ?>
						<p class="case-list__card--item" data-title="施術名">
						  <?php echo esc_html( $name ); ?>
						</p>
					  <?php endif; ?>

					  <?php if ( $price ) : ?>
						<p class="case-list__card--item" data-title="費用目安">
						  <?php echo esc_html( $price ); ?>
						</p>
					  <?php endif; ?>

					  <?php if ( $risk ) : ?>
						<p class="case-list__card--item" data-title="リスク・副作用">
						  <?php echo nl2br( esc_html( $risk ) ); ?>
						</p>
					  <?php endif; ?>

					  <?php if ( $updated_date ) : ?>
						<p class="case-list__card--item" data-title="更新日">
						  <?php echo esc_html( $updated_date ); ?>
						</p>
					  <?php endif; ?>
					</a>
				  </div>
				<?php endwhile; ?>
			  <?php else : ?>
				<p class="case-list__empty">現在、症例は準備中です。</p>
			  <?php endif; ?>
			</div>
			  
            <div class="case-list__pagination">
			  <?php
			  if ( function_exists( 'wp_pagenavi' ) ) {
				echo '<div class="wp-pagenavi">';
				wp_pagenavi();
				echo '</div>';
			  } else {
				the_posts_pagination( array(
				  'mid_size'  => 2,
				  'prev_text' => '«',
				  'next_text' => '»',
				) );
			  }
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
      </main>


<?php get_footer(); ?> 