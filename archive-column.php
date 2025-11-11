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
              <h1 class="title">column</h1>
              <p class="fv-low__titles--text">コラム一覧</p>
            </div>
          </div>
        </div>

        <section class="column-list">
          <div class="column-list__inner">
            <div class="column-list__body">
              <div class="column-list__content">
                <!-- <div class="column-list__item">
                  <a href="<?php echo esc_url( home_url('') ); ?>" class="column-list__card">
										<div class="column-list__image">
											<img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/column/column01.jpg" alt="" />
										</div>
										<p class="column-list__category">カテゴリ</p>
										<h3 class="column-list__title">見出しがはいります</h3>
										<p class="column-list__text">
											説明テキストがはいります説明テキストがはいります説明テキストがはいります説明テキストがはいります
										</p>
									</a>
                </div>
                <div class="column-list__item">
                  <a href="<?php echo esc_url( home_url('') ); ?>" class="column-list__card">
										<div class="column-list__image">
											<img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/column/column01.jpg" alt="" />
										</div>
										<p class="column-list__category">カテゴリ</p>
										<h3 class="column-list__title">見出しがはいります</h3>
										<p class="column-list__text">
											説明テキストがはいります説明テキストがはいります説明テキストがはいります説明テキストがはいります
										</p>
									</a>
                </div>
                <div class="column-list__item">
                  <a href="<?php echo esc_url( home_url('') ); ?>" class="column-list__card">
										<div class="column-list__image">
											<img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/column/column01.jpg" alt="" />
										</div>
										<p class="column-list__category">カテゴリ</p>
										<h3 class="column-list__title">見出しがはいります</h3>
										<p class="column-list__text">
											説明テキストがはいります説明テキストがはいります説明テキストがはいります説明テキストがはいります
										</p>
									</a>
                </div>
                <div class="column-list__item">
                  <a href="<?php echo esc_url( home_url('') ); ?>" class="column-list__card">
										<div class="column-list__image">
											<img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/column/column01.jpg" alt="" />
										</div>
										<p class="column-list__category">カテゴリ</p>
										<h3 class="column-list__title">見出しがはいります</h3>
										<p class="column-list__text">
											説明テキストがはいります説明テキストがはいります説明テキストがはいります説明テキストがはいります
										</p>
									</a>
                </div>
                <div class="column-list__item">
                  <a href="<?php echo esc_url( home_url('') ); ?>" class="column-list__card">
										<div class="column-list__image">
											<img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/column/column01.jpg" alt="" />
										</div>
										<p class="column-list__category">カテゴリ</p>
										<h3 class="column-list__title">見出しがはいります</h3>
										<p class="column-list__text">
											説明テキストがはいります説明テキストがはいります説明テキストがはいります説明テキストがはいります
										</p>
									</a>
                </div>
                <div class="column-list__item">
                  <a href="<?php echo esc_url( home_url('') ); ?>" class="column-list__card">
										<div class="column-list__image">
											<img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/column/column01.jpg" alt="" />
										</div>
										<p class="column-list__category">カテゴリ</p>
										<h3 class="column-list__title">見出しがはいります</h3>
										<p class="column-list__text">
											説明テキストがはいります説明テキストがはいります説明テキストがはいります説明テキストがはいります
										</p>
									</a>
                </div>
                <div class="column-list__item">
                  <a href="<?php echo esc_url( home_url('') ); ?>" class="column-list__card">
										<div class="column-list__image">
											<img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/column/column01.jpg" alt="" />
										</div>
										<p class="column-list__category">カテゴリ</p>
										<h3 class="column-list__title">見出しがはいります</h3>
										<p class="column-list__text">
											説明テキストがはいります説明テキストがはいります説明テキストがはいります説明テキストがはいります
										</p>
									</a>
                </div>
                <div class="column-list__item">
                  <a href="<?php echo esc_url( home_url('') ); ?>" class="column-list__card">
										<div class="column-list__image">
											<img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/column/column01.jpg" alt="" />
										</div>
										<p class="column-list__category">カテゴリ</p>
										<h3 class="column-list__title">見出しがはいります</h3>
										<p class="column-list__text">
											説明テキストがはいります説明テキストがはいります説明テキストがはいります説明テキストがはいります
										</p>
									</a>
                </div> -->
              </div>
              
              <div class="wp-pagenavi">
                <!-- <span class="current">1</span>
                <a class="page larger" href="#">2</a>
                <a class="page larger" href="#">3</a>
                <span class="extend">…</span>
                <a class="page larger" href="#">10</a>
                <a class="nextpostslink" rel="next" href="#">»</a> -->
              </div>
            </div>
            <div class="column-list__side">
              <h2>人気のコラム</h2>
              <div class="column-list__popular">
                <!-- <div class="column-list__item">
                  <a href="<?php echo esc_url( home_url('') ); ?>" class="column-list__card">
										<div class="column-list__image">
											<img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/column/column01.jpg" alt="" />
										</div>
                    <div class="column-list__meta">
                      <p class="column-list__tag">タグタイトル名称</p>
                      <p class="column-list__date">2023/6/10</p>
                    </div>
										<h3 class="column-list__title">コラムタイトルが入りますコラムタイトルが入ります</h3>
										<p class="column-list__text">
											コラムタイトルが入ります。文章の一部が表示されます。文章の一部が表示されます。コラムタイトルが入ります。
										</p>
									</a>
                </div>
                <div class="column-list__item">
                  <a href="<?php echo esc_url( home_url('') ); ?>" class="column-list__card">
										<div class="column-list__image">
											<img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/column/column01.jpg" alt="" />
										</div>
                    <div class="column-list__meta">
                      <p class="column-list__tag">タグタイトル名称</p>
                      <p class="column-list__date">2023/6/10</p>
                    </div>
										<h3 class="column-list__title">コラムタイトルが入りますコラムタイトルが入ります</h3>
										<p class="column-list__text">
											コラムタイトルが入ります。文章の一部が表示されます。文章の一部が表示されます。コラムタイトルが入ります。
										</p>
									</a>
                </div>
                <div class="column-list__item">
                  <a href="<?php echo esc_url( home_url('') ); ?>" class="column-list__card">
										<div class="column-list__image">
											<img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/column/column01.jpg" alt="" />
										</div>
                    <div class="column-list__meta">
                      <p class="column-list__tag">タグタイトル名称</p>
                      <p class="column-list__date">2023/6/10</p>
                    </div>
										<h3 class="column-list__title">コラムタイトルが入りますコラムタイトルが入ります</h3>
										<p class="column-list__text">
											コラムタイトルが入ります。文章の一部が表示されます。文章の一部が表示されます。コラムタイトルが入ります。
										</p>
									</a>
                </div> -->
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