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
              <h1 class="title privacy-policy__title">Menu</h2>
              <p class="fv-low__titles--text privacy-policy__fv-low__titles--text"></p>
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
              <span class="current-page">施術メニュー</span>
            </li>
          </ol>
        </nav>
        <!-- パンくずリスト -->

        <section class="menu">
          <div class="inner">
            <div class="menu__tabs" role="tablist" aria-label="施術メニュー">
              <button class="menu__tab is-active" role="tab" aria-selected="true" aria-controls="panel-surgery" id="tab-surgery" data-target="panel-surgery">美容外科</button>
              <button class="menu__tab" role="tab" aria-selected="false" aria-controls="panel-dermatology" id="tab-dermatology" data-target="panel-dermatology">美容皮膚科</button>
              <button class="menu__tab" role="tab" aria-selected="false" aria-controls="panel-injection" id="tab-injection" data-target="panel-injection">注入治療</button>
              <button class="menu__tab" role="tab" aria-selected="false" aria-controls="panel-other" id="tab-other" data-target="panel-other">その他</button>
            </div>

            <div class="menu__body">
              <div class="menu__panels">
                <div class="menu__panel is-active" id="panel-surgery" role="tabpanel" aria-labelledby="tab-surgery">
                  <div class="menu-list">
                    <div class="menu-list__item">
                      <h3 class="menu-list__title">目元のエイジングケア治療</h3>
                      <ul class="menu-list__content">
                        <li><a href="<?php echo esc_url( home_url('') ); ?>">目の下のクマ・たるみ治療<br>【経結膜脱脂術・眼窩脂肪注入・マイクロCRF】</a></li>
                        <li><a href="<?php echo esc_url( home_url('') ); ?>">ゴルゴ線治療<br>【ゴルゴ線剥離・脂肪注入・マイクロCRF】</a></li>
                        <li><a href="<?php echo esc_url( home_url('') ); ?>">上まぶたのたるみ取り<br>【眉下切開術・二重ライン切開術】</a></li>
                        <li><a href="<?php echo esc_url( home_url('') ); ?>">眼瞼下垂症手術【挙筋前転法、腱膜固定法】</a></li>
                        <li><a href="<?php echo esc_url( home_url('') ); ?>">リジュランI</a></li>
                      </ul>
                    </div>
                    <!-- <div class="menu-list__item">
                      <h3 class="menu-list__title">脂肪吸引</h3>
                      <ul class="menu-list__content">
                        <li><a href="<?php echo esc_url( home_url('') ); ?>">リジュランI</a></li>
                        <li><a href="<?php echo esc_url( home_url('') ); ?>">リジュランI</a></li>
                        <li><a href="<?php echo esc_url( home_url('') ); ?>">リジュランI</a></li>
                        <li><a href="<?php echo esc_url( home_url('') ); ?>">リジュランI</a></li>
                        <li><a href="<?php echo esc_url( home_url('') ); ?>">リジュランI</a></li>
                        <li><a href="<?php echo esc_url( home_url('') ); ?>">リジュランI</a></li>
                      </ul>
                    </div> -->
                    <!-- <div class="menu-list__item">
                      <h3 class="menu-list__title">豊胸・バスト整形</h3>
                      <ul class="menu-list__content">
                        <li><a href="<?php echo esc_url( home_url('') ); ?>">リジュランI</a></li>
                        <li><a href="<?php echo esc_url( home_url('') ); ?>">リジュランI</a></li>
                        <li><a href="<?php echo esc_url( home_url('') ); ?>">リジュランI</a></li>
                        <li><a href="<?php echo esc_url( home_url('') ); ?>">リジュランI</a></li>
                        <li><a href="<?php echo esc_url( home_url('') ); ?>">リジュランI</a></li>
                        <li><a href="<?php echo esc_url( home_url('') ); ?>">リジュランI</a></li>
                      </ul>
                    </div> -->
                    <!-- <div class="menu-list__item">
                      <h3 class="menu-list__title">フェイスリフト</h3>
                      <ul class="menu-list__content">
                        <li><a href="<?php echo esc_url( home_url('') ); ?>">リジュランI</a></li>
                        <li><a href="<?php echo esc_url( home_url('') ); ?>">リジュランI</a></li>
                        <li><a href="<?php echo esc_url( home_url('') ); ?>">リジュランI</a></li>
                        <li><a href="<?php echo esc_url( home_url('') ); ?>">リジュランI</a></li>
                        <li><a href="<?php echo esc_url( home_url('') ); ?>">リジュランI</a></li>
                        <li><a href="<?php echo esc_url( home_url('') ); ?>">リジュランI</a></li>
                      </ul>
                    </div>
                    <div class="menu-list__item">
                      <h3 class="menu-list__title">二重まぶた・二重形成術・目元</h3>
                      <ul class="menu-list__content">
                        <li><a href="<?php echo esc_url( home_url('') ); ?>">リジュランI</a></li>
                        <li><a href="<?php echo esc_url( home_url('') ); ?>">リジュランI</a></li>
                        <li><a href="<?php echo esc_url( home_url('') ); ?>">リジュランI</a></li>
                        <li><a href="<?php echo esc_url( home_url('') ); ?>">リジュランI</a></li>
                        <li><a href="<?php echo esc_url( home_url('') ); ?>">リジュランI</a></li>
                        <li><a href="<?php echo esc_url( home_url('') ); ?>">リジュランI</a></li>
                      </ul>
                    </div>
                    <div class="menu-list__item">
                      <h3 class="menu-list__title">ワキガ・多汗症治療</h3>
                      <ul class="menu-list__content">
                        <li><a href="<?php echo esc_url( home_url('') ); ?>">リジュランI</a></li>
                        <li><a href="<?php echo esc_url( home_url('') ); ?>">リジュランI</a></li>
                        <li><a href="<?php echo esc_url( home_url('') ); ?>">リジュランI</a></li>
                        <li><a href="<?php echo esc_url( home_url('') ); ?>">リジュランI</a></li>
                        <li><a href="<?php echo esc_url( home_url('') ); ?>">リジュランI</a></li>
                        <li><a href="<?php echo esc_url( home_url('') ); ?>">リジュランI</a></li>
                      </ul>
                    </div>
                    <div class="menu-list__item">
                      <h3 class="menu-list__title">糸によるリフトアップ治療</h3>
                      <ul class="menu-list__content">
                        <li><a href="<?php echo esc_url( home_url('') ); ?>">リジュランI</a></li>
                        <li><a href="<?php echo esc_url( home_url('') ); ?>">リジュランI</a></li>
                        <li><a href="<?php echo esc_url( home_url('') ); ?>">リジュランI</a></li>
                        <li><a href="<?php echo esc_url( home_url('') ); ?>">リジュランI</a></li>
                        <li><a href="<?php echo esc_url( home_url('') ); ?>">リジュランI</a></li>
                        <li><a href="<?php echo esc_url( home_url('') ); ?>">リジュランI</a></li>
                      </ul>
                    </div>
                    <div class="menu-list__item">
                      <h3 class="menu-list__title">小顔・輪郭形成</h3>
                      <ul class="menu-list__content">
                        <li><a href="<?php echo esc_url( home_url('') ); ?>">リジュランI</a></li>
                        <li><a href="<?php echo esc_url( home_url('') ); ?>">リジュランI</a></li>
                        <li><a href="<?php echo esc_url( home_url('') ); ?>">リジュランI</a></li>
                        <li><a href="<?php echo esc_url( home_url('') ); ?>">リジュランI</a></li>
                        <li><a href="<?php echo esc_url( home_url('') ); ?>">リジュランI</a></li>
                        <li><a href="<?php echo esc_url( home_url('') ); ?>">リジュランI</a></li>
                      </ul>
                    </div>
                    <div class="menu-list__item">
                      <h3 class="menu-list__title">鼻の整形</h3>
                      <ul class="menu-list__content">
                        <li><a href="<?php echo esc_url( home_url('') ); ?>">リジュランI</a></li>
                        <li><a href="<?php echo esc_url( home_url('') ); ?>">リジュランI</a></li>
                        <li><a href="<?php echo esc_url( home_url('') ); ?>">リジュランI</a></li>
                        <li><a href="<?php echo esc_url( home_url('') ); ?>">リジュランI</a></li>
                        <li><a href="<?php echo esc_url( home_url('') ); ?>">リジュランI</a></li>
                        <li><a href="<?php echo esc_url( home_url('') ); ?>">リジュランI</a></li>
                      </ul>
                    </div>
                    <div class="menu-list__item">
                      <h3 class="menu-list__title">口の整形</h3>
                      <ul class="menu-list__content">
                        <li><a href="<?php echo esc_url( home_url('') ); ?>">リジュランI</a></li>
                        <li><a href="<?php echo esc_url( home_url('') ); ?>">リジュランI</a></li>
                        <li><a href="<?php echo esc_url( home_url('') ); ?>">リジュランI</a></li>
                        <li><a href="<?php echo esc_url( home_url('') ); ?>">リジュランI</a></li>
                        <li><a href="<?php echo esc_url( home_url('') ); ?>">リジュランI</a></li>
                        <li><a href="<?php echo esc_url( home_url('') ); ?>">リジュランI</a></li>
                      </ul>
                    </div> -->
                  </div>
                </div>

                <!-- <div class="menu__panel" id="panel-dermatology" role="tabpanel" aria-labelledby="tab-dermatology" hidden>
                  <div class="menu-list">
                    <div class="menu-list__item">
                      <h3 class="menu-list__title">二重まぶた・二重形成術・目元</h3>
                      <ul class="menu-list__content">
                        <li><a href="<?php echo esc_url( home_url('') ); ?>">リジュランI</a></li>
                        <li><a href="<?php echo esc_url( home_url('') ); ?>">リジュランI</a></li>
                        <li><a href="<?php echo esc_url( home_url('') ); ?>">リジュランI</a></li>
                        <li><a href="<?php echo esc_url( home_url('') ); ?>">リジュランI</a></li>
                        <li><a href="<?php echo esc_url( home_url('') ); ?>">リジュランI</a></li>
                        <li><a href="<?php echo esc_url( home_url('') ); ?>">リジュランI</a></li>
                      </ul>
                    </div>
                  </div>
                </div> -->

                <!-- <div class="menu__panel" id="panel-injection" role="tabpanel" aria-labelledby="tab-injection" hidden>
                  <div class="menu-list">
                    <div class="menu-list__item">
                      <h3 class="menu-list__title">小顔・輪郭形成</h3>
                      <ul class="menu-list__content">
                        <li><a href="<?php echo esc_url( home_url('') ); ?>">リジュランI</a></li>
                        <li><a href="<?php echo esc_url( home_url('') ); ?>">リジュランI</a></li>
                        <li><a href="<?php echo esc_url( home_url('') ); ?>">リジュランI</a></li>
                        <li><a href="<?php echo esc_url( home_url('') ); ?>">リジュランI</a></li>
                        <li><a href="<?php echo esc_url( home_url('') ); ?>">リジュランI</a></li>
                        <li><a href="<?php echo esc_url( home_url('') ); ?>">リジュランI</a></li>
                      </ul>
                    </div>
                  </div>
                </div> -->

                <!-- <div class="menu__panel" id="panel-other" role="tabpanel" aria-labelledby="tab-other" hidden>

                  <div class="menu-list">
                    <div class="menu-list__item">
                      <h3 class="menu-list__title">口の整形</h3>
                      <ul class="menu-list__content">
                        <li><a href="<?php echo esc_url( home_url('') ); ?>">リジュランI</a></li>
                        <li><a href="<?php echo esc_url( home_url('') ); ?>">リジュランI</a></li>
                        <li><a href="<?php echo esc_url( home_url('') ); ?>">リジュランI</a></li>
                        <li><a href="<?php echo esc_url( home_url('') ); ?>">リジュランI</a></li>
                        <li><a href="<?php echo esc_url( home_url('') ); ?>">リジュランI</a></li>
                        <li><a href="<?php echo esc_url( home_url('') ); ?>">リジュランI</a></li>
                      </ul>
                    </div>
                  </div>
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