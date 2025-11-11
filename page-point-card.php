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
              <h1 class="title">POINT CARD</h1>
              <p class="fv-low__titles--text">ポイントカード</p>
            </div>
          </div>
        </div>

        <section class="point-card">
          <div class="point-card__inner">
            <p class="point-card__title">お友達紹介キャンペーン実施中</p>

            <div class="point-card__content">
              <div class="point-card__about pt20">
                <p class="point-card__lead">お友達紹介ポイントについて</p>
                <p class="point-card__text mt39">
                  初診時カウンセリングのみの方には、ご紹介ポイントの付与はございません。<br>
                  ※カウンセリング当日に施術または施術のご予約をされた場合のみ、ご紹介ポイントが付与されます。<br>
                      （付与は施術当日）
                </p>
              </div>
              <div class="point-card__rule mt39">
                <p class="point-card__lead">ポイントカード規約</p>
              </div>
            </div>

            <div class="point-card__container">
              <div class="point-card__container__inner">
                <div class="point-card__container__block">
                  <p class="point-card__container__lead--bold">◆ポイント還元率</p>
                  <div class="point-card__container__check mt30">
                    <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/point-card/icon-check.png" alt="" width="24" height="24">
                    <p class="point-card__container__text">
                      税抜きの合計金額に対して現金のお支払いは5％分、クレジットカードのお支払いは3％分のポイントが付与されます。
                    </p>
                  </div>
                  <p class="point-card__container__text--min mt10">※誕生月にご来院いただいたら1,000ポイント贈呈！(1回限り)</p>
                  <p class="point-card__container__text--min mt10">※モニター様の場合、ポイントの付与はございません</p>
                </div>

                <div class="point-card__container__block">
                  <p class="point-card__container__lead">◆紹介ポイント制</p>
                  <div class="point-card__container__introduce">
                    <div class="point-card__container__do mt30">
                      <p class="point-card__container__introduce--title">【紹介した方】</p>
                      <div class="point-card__container__check mt10">
                        <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/point-card/icon-check.png" alt="">
                        <p class="point-card__container__text">
                          ご紹介された方が30,000円（税込 33,000円）以上の施術を行った場合、5,000ポイント贈呈
                        </p>
                      </div>
                      <div class="point-card__container__check mt10">
                        <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/point-card/icon-check.png" alt="">
                        <p class="point-card__container__text">
                          ご紹介された方が10,000円（税込 11,000円）以上の施術を行った場合、1,000ポイント贈呈
                        </p>
                      </div>
                    </div>
                    <div class="point-card__container__done mt30">
                      <p class="point-card__container__introduce--title">【紹介された方】</p>
                      <div class="point-card__container__check mt10">
                        <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/point-card/icon-check.png" alt="">
                        <p class="point-card__container__text">
                          ご来院して30,000円（税込 33,000円）以上の施術を行った場合、3,000ポイント贈呈+施術に応じてのポイントを付与
                        </p>
                      </div>
                      <div class="point-card__container__check mt10">
                        <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/point-card/icon-check.png" alt="">
                        <p class="point-card__container__text">
                          ご来院して10,000円（税込 11,000円）以上30,000円（税込 33,000円）未満の施術を行った場合、　1,000ポイント贈呈＋施術に応じてのポイントを付与
                        </p>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="point-card__container__block">
                  <p class="point-card__container__lead">◆有効期限</p>
                  <div class="point-card__container__check mt30">
                    <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/point-card/icon-check.png" alt="">
                    <p class="point-card__container__text">
                      ポイントが発生した日から1年間有効
                    </p>
                  </div>
                </div>

                <div class="point-card__container__block">
                  <p class="point-card__container__lead">◆注意事項</p>
                  <ul class="mt30">
                    <li class="point-card__container__text">・いかなる理由でも現金での返金には一切応じかねます。</li>
                    <li class="point-card__container__text">・貯まったポイントは次回のご来院から適用できます。</li>
                    <li class="point-card__container__text">・一部ポイントが適用できない薬品や化粧品がございます。</li>
                    <li class="point-card__container__text">・一部併用できないキャンペーンもございます。</li>
                  </ul>
                  <p class="point-card__container__text">詳しくはクリニックまでご確認ください。</p>
                </div>

                <p class="point-card__container__text--bold mt30">
                  当院では、度重なる遅刻・キャンセル・暴言・暴力・迷惑行為などがあった場合、ご来院をお断りすることがございます。ご来院をお断りされた方の保有しているポイントはすべて無効となります。
                </p>
              </div>
            </div>

            <a href="<?php echo esc_url( home_url('point-card-detail') ); ?>" class="btn point-card__btn">詳細はこちら</a>
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
              href="<?php echo esc_url( home_url('https://cosmedical.jp/monitor/') ); ?>"
              target="_blank"
              rel="noopener noreferrer"
              >モニター募集</a
            >
          </div>
          <div class="footer-links__item">
            <a
              href="<?php echo esc_url( home_url('https://cosmedical.jp/point-card/') ); ?>"
              target="_blank"
              rel="noopener noreferrer"
              >ポイントカード</a
            >
          </div>
          <div class="footer-links__item">
            <a
              href="<?php echo esc_url( home_url('https://cosmedical.jp/recruit/') ); ?>"
              target="_blank"
              rel="noopener noreferrer"
              >採用情報</a
            >
          </div>
          <div class="footer-links__item">
            <a
              href="<?php echo esc_url( home_url('https://cosmedical.jp/under-age/') ); ?>"
              target="_blank"
              rel="noopener noreferrer"
              >未成年者</a
            >
          </div>
        </div>
      </main>


<?php get_footer(); ?> 