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
              <h1 class="title">Doctor</h1>
              <p class="fv-low__titles--text">ドクター紹介</p>
            </div>
          </div>
        </div>

        <section class="doctor-details">
          <div class="doctor-details__inner">
            <div class="doctor-details__left">
              <div class="doctor-details__left__img">
                <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/staff/details-doctor-matayoshi.png" alt="" width="464" height="524">
              </div>
              <div class="doctor-details__left__strong doctor-details--sp-n">
                <p class="doctor-details__left__strong--title">得意施術</p>
                <ul>
                  <li>
                    <a href="<?php echo esc_url( home_url('') ); ?>">ベイザー脂肪吸引</a>
                  </li>
                  <li>
                    <a href="<?php echo esc_url( home_url('') ); ?>">コンデンスリッチファット（CRF）豊胸</a>
                  </li>
                  <li>
                    <a href="<?php echo esc_url( home_url('') ); ?>">目の下のクマ・たるみ治療</a>
                  </li>
                  <li>
                    <a href="<?php echo esc_url( home_url('') ); ?>">フェイスリフト</a>
                  </li>
                  <li>
                    <a href="<?php echo esc_url( home_url('') ); ?>">口唇縮小術・口唇拡大術</a>
                  </li>
                </ul>
              </div>
            </div>

            <div class="doctor-details__right">
              <p class="doctor-details__right__clinic">コスメディカルクリニックシンシア　総院長　</p>
              <p class="doctor-details__right__post">銀座院院長</p>
              <p class="doctor-details__right__name">又吉 秀樹</p>
              <p class="doctor-details__right__roman">Hideki Matayoshi</p>
              <div class="doctor-details__right__sns">
                <a href="<?php echo esc_url( home_url('') ); ?>" target="_blank" class="doctor-details__right__sns--instagram">
                  <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/staff/icon-instagram.png" alt="" width="20" height="20">
                </a>
                <a href="<?php echo esc_url( home_url('') ); ?>" target="_blank" class="doctor-details__right__sns--x">
                  <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/staff/icon-x.png" alt="" width="18" height="18">
                </a>
                <a href="<?php echo esc_url( home_url('') ); ?>" target="_blank" class="doctor-details__right__sns--youtube">
                  <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/staff/icon-youtube.png" alt="" width="28" height="20">
                </a>
              </div>
              <div class="doctor-details__right__career">
                <p class="doctor-details__right__career--title">経歴</p>
                <ul>
                  <li>1973年8月神奈川県生まれ</li>
                  <li>1998年3月慶應義塾大学医学部卒業</li>
                  <li>1998年4月慶應義塾大学医学部 外科学教室入局 麻酔科研修</li>
                  <li>1999年5月水戸赤十字病院外科勤務</li>
                  <li>2000年5月国立療養所晴嵐荘病院胸部外科勤務</li>
                  <li>2001年5月慶応義塾大学病院心臓血管外科勤務</li>
                  <li>2003年5月済生会宇都宮病院心臓血管外科勤務</li>
                  <li>2004年5月大手美容外科勤務</li>
                  <li>2007年2月同美容外科地方院院長就任</li>
                  <li>2008年8月Cosmedical Clinic CYNTHIA 開院</li>
                </ul>
              </div>
              <div class="doctor-details__right__info">
                <p class="doctor-details__right__info--title">資格・所属学会</p>
                <ul>
                  <li>元 外科専門医（日本外科学会認定）</li>
                  <li>日本外科学会</li>
                  <li>日本美容外科学会</li>
                  <li>日本美容外科医師会</li>
                  <li>日本形成外科学会</li>
                </ul>
              </div>
              <div class="doctor-details__left__strong doctor-details--pc-n">
                <p class="doctor-details__left__strong--title">得意施術</p>
                <ul>
                  <li>
                    <a href="<?php echo esc_url( home_url('') ); ?>">ベイザー脂肪吸引</a>
                  </li>
                  <li>
                    <a href="<?php echo esc_url( home_url('') ); ?>">コンデンスリッチファット（CRF）豊胸</a>
                  </li>
                  <li>
                    <a href="<?php echo esc_url( home_url('') ); ?>">目の下のクマ・たるみ治療</a>
                  </li>
                  <li>
                    <a href="<?php echo esc_url( home_url('') ); ?>">フェイスリフト</a>
                  </li>
                  <li>
                    <a href="<?php echo esc_url( home_url('') ); ?>">口唇縮小術・口唇拡大術</a>
                  </li>
                </ul>
              </div>
              <a href="<?php echo esc_url( home_url('') ); ?>" class="btn doctor-details__right__btn">View More</a>
            </div>
          </div>
        </section>

        <section class="doctor-details-message">
          <div class="doctor-details-message__inner">
            <h2 class="title">Message</h2>
            <div class="doctor-details-message__content">
              <div class="doctor-details-message__text">
                <p>はじめまして、シンシア 総院長の又吉秀樹です。</p>
                <p>
                  近年人々の価値観は多様化し、その中でより良く、美しく生きていくという希望は、大きなウェイトを占める様になってきました。それに呼応する様に、アンチエイジング美容医療は大きい進歩を始めています。この流れの中で、新しいクリニックを開業させていただくにあたりその名前にはいろいろな意味を込めさせていただきました。
                </p>
                <p>
                  Cosmedical<br>
                  あまり馴じみのない言葉だと思います。<br>
                  まだ辞書にも載っていないかもしれません。Cosmetic + medical （美容と医療）合成語です。
                </p>
                <p>
                  人間の肉体と精神は時にとても強く、しかしその多くは繊細です。美の追求には、医療のサポートが欠かせないと考えます。そしてそれは surgery （外科）だけではなく internal medicine （内科）だけでもなくdermatology（皮膚科）だけでもない、総合医療を意味する medical が最もふさわしいと思うのです。
                </p>
                <p>
                  Cynthia<br>
                  Cynthiaは美容医療に対してSincere（誠実）でありたいという思いを込めてつけています。
                </p>
              </div>
              <div class="doctor-details-message__img">
                <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/staff/details-message.png" alt="" width="480" height="360">
              </div>
            </div>
          </div>
        </section>
        

        <section class="doctor-details-snss">
          <div class="doctor-details-sns__inner">
            <div class="doctor-details-blog">
              <div class="doctor-details-youtube__titles">
                <h2 class="doctor-details-snss__title">Blog</h2>
              </div>

              <div class="doctor-details-blog__container">
                <a href="<?php echo esc_url( home_url('') ); ?>" class="doctor-details-blog__card">
                  <div class="doctor-details-blog__card__img">
                    <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/staff/details-blog-noimage.png" alt="" width="328" height="264">
                  </div>
                  <div class="doctor-details-blog__card__text">
                    <p class="doctor-details-blog__card__text--category">カテゴリ</p>
                    <h3 class="doctor-details-blog__card__text--headline">見出しがはいります</h3>
                    <p class="doctor-details-blog__card__text-content">
                      説明テキストがはいります説明テキストがはいります説明テキストがはいります説明テキストがはいります
                    </p>
                  </div>
                </a>
                <a href="<?php echo esc_url( home_url('') ); ?>" class="doctor-details-blog__card">
                  <div class="doctor-details-blog__card__img">
                    <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/staff/details-blog-noimage.png" alt="" width="328" height="264">
                  </div>
                  <div class="doctor-details-blog__card__text">
                    <p class="doctor-details-blog__card__text--category">カテゴリ</p>
                    <h3 class="doctor-details-blog__card__text--headline">見出しがはいります</h3>
                    <p class="doctor-details-blog__card__text-content">
                      説明テキストがはいります説明テキストがはいります説明テキストがはいります説明テキストがはいります
                    </p>
                  </div>
                </a>
                <a href="<?php echo esc_url( home_url('') ); ?>" class="doctor-details-blog__card">
                  <div class="doctor-details-blog__card__img">
                    <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/staff/details-blog-noimage.png" alt="" width="328" height="264">
                  </div>
                  <div class="doctor-details-blog__card__text">
                    <p class="doctor-details-blog__card__text--category">カテゴリ</p>
                    <h3 class="doctor-details-blog__card__text--headline">見出しがはいります</h3>
                    <p class="doctor-details-blog__card__text-content">
                      説明テキストがはいります説明テキストがはいります説明テキストがはいります説明テキストがはいります
                    </p>
                  </div>
                </a>
              </div>
            </div>

            <div class="doctor-details-youtube">
              <div class="doctor-details-youtube__titles">
                <h2 class="doctor-details-snss__title">YouTube</h2>
                <a href="<?php echo esc_url( home_url('') ); ?>" target="_blank" class="doctor-details-youtube__title--link">
                  <p>@XXXXXX</p>
                  <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/staff/details-icon-youtube.png" alt="" width="40" height="40">
                </a>
              </div>

              <div class="doctor-details-youtube__container">
                <a href="<?php echo esc_url( home_url('') ); ?>" target="_blank" class="doctor-details-youtube__card">
                  <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/staff/detailas-youtube-noimage.png" alt="" width="340" height="180">
                </a>
                <a href="<?php echo esc_url( home_url('') ); ?>" target="_blank" class="doctor-details-youtube__card">
                  <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/staff/detailas-youtube-noimage.png" alt="" width="340" height="180">
                </a>
                <a href="<?php echo esc_url( home_url('') ); ?>" target="_blank" class="doctor-details-youtube__card">
                  <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/staff/detailas-youtube-noimage.png" alt="" width="340" height="180">
                </a>
              </div>
            </div>

            <div class="doctor-details-instagram">
              <div class="doctor-details-youtube__titles">
                <h2 class="doctor-details-snss__title">Instagram</h2>
                <a href="<?php echo esc_url( home_url('') ); ?>" target="_blank" class="doctor-details-youtube__title--link">
                  <p>@XXXXXX</p>
                  <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/staff/details-icon-instagram.png" alt="" width="40" height="40">
                </a>
              </div>

              <div class="doctor-details-instagram__container">
                <div class="swiper doctor-details-instagram-swiper">
                  <div class="swiper-wrapper">
                    <div class="swiper-slide">
                      <a href="<?php echo esc_url( home_url('') ); ?>" target="_blank" class="doctor-details-instagram__card">
                        <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/staff/details-instagram-noimage.png" alt="" width="180" height="180">
                      </a>
                    </div>
                    <div class="swiper-slide">
                      <a href="<?php echo esc_url( home_url('') ); ?>" target="_blank" class="doctor-details-instagram__card">
                        <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/staff/details-instagram-noimage.png" alt="" width="180" height="180">
                      </a>
                    </div>
                    <div class="swiper-slide">
                      <a href="<?php echo esc_url( home_url('') ); ?>" target="_blank" class="doctor-details-instagram__card">
                        <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/staff/details-instagram-noimage.png" alt="" width="180" height="180">
                      </a>
                    </div>
                    <div class="swiper-slide">
                      <a href="<?php echo esc_url( home_url('') ); ?>" target="_blank" class="doctor-details-instagram__card">
                        <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/staff/details-instagram-noimage.png" alt="" width="180" height="180">
                      </a>
                    </div>
                    <div class="swiper-slide">
                      <a href="<?php echo esc_url( home_url('') ); ?>" target="_blank" class="doctor-details-instagram__card">
                        <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/staff/details-instagram-noimage.png" alt="" width="180" height="180">
                      </a>
                    </div>
                  </div>
                  <div class="swiper-pagination"></div>
                </div>

              </div>
            </div>

            <a href="<?php echo esc_url( home_url('') ); ?>" class="btn doctor-details-btn">Doctors List</a>
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