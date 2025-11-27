<!DOCTYPE html>
<html lang="ja">
  <!--ページの言語とOGP設定 -->
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width" />
    <!-- コンテンツ幅をデバイスに合わせる -->
    <meta name="format-detection" content="telephone=no" />

    <link rel="icon" href="<?php bloginfo( 'stylesheet_directory' ); ?>/favicon.ico" type="image/x-icon">
    <!-- iPhoneでの電話番号の自動リンク無効 -->

    <?php if (is_post_type_archive('doctor')) : ?>
    <meta name="description" content="東京銀座・渋谷の美容外科シンシアのドクター紹介ページです。銀座院 院長 又吉秀樹をはじめ、渋谷院 院長 村住昌彦といった経験豊富な医師が、カウンセリングからアフターケアまで責任をもって対応します。">
    <?php endif; ?>

    <?php if (is_post_type_archive('case')) : ?>
    <meta name="description" content="東京銀座・渋谷の美容外科シンシアの症例紹介ページです。脂肪吸引や目の下のクマ・たるみ、コンデンスリッチファット豊胸など、症例紹介を豊富に掲載しています。ビフォーアフターで違いを比較し、患者様の施術にお役立てください。">
    <?php endif; ?>

    <?php if (is_post_type_archive('column')) : ?>
    <meta name="description" content="東京銀座・渋谷の美容外科シンシアのコラムページです。美容治療をお考えの方向けに、脂肪吸引や目の下のクマ・たるみ、コンデンスリッチファット豊胸など、各施術について役立つコラムを掲載しています。">
    <?php endif; ?>

    <?php if (is_page('pickup-menu')) : ?>
    <meta name="description" content="東京銀座・渋谷の美容外科シンシアの今月のおすすめメニューページです。クリニック限定やリピーター、モニター様に嬉しい情報を掲載。毎月新しい情報をピックアップしてご紹介しています。">
    <?php endif; ?>


    <?php wp_head(); ?>
  </head>

  <body <?php body_class(); ?>>
    <div class="wrap">
      <header class="header">
        <div class="header__top">
          <h1 class="header__clinic-name"><span>銀座・渋谷の美容外科</span>コスメディカルクリニック　シンシア</h1>
          <p class="header__hours">受付時間　10:00〜20:00 不定休</p>
        </div>

        <div class="header__main">
          <div class="header__logo">
            <a href="<?php echo esc_url( home_url('') ); ?>">
              <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/top/logo.gif.png" alt="COSMEDICAL CLINIC CYNTHIA" />
            </a>
          </div>

          <div class="header__content sp_n">
            <div class="header__actions">
              <div class="header__phone" role="region" aria-label="電話タブ">
                <div class="phone-tabs" role="tablist" aria-label="院の選択">
                  <button
                    class="phone-tab is-active"
                    role="tab"
                    aria-selected="true"
                    aria-controls="panel-ginza"
                    id="tab-ginza"
                    data-target="panel-ginza"
                  >
                    銀座院
                  </button>
                  <button
                    class="phone-tab"
                    role="tab"
                    aria-selected="false"
                    aria-controls="panel-shibuya"
                    id="tab-shibuya"
                    data-target="panel-shibuya"
                  >
                    渋谷院
                  </button>
                </div>
                <div class="phone-panels">
                  <div
                    class="phone-panel is-active"
                    id="panel-ginza"
                    role="tabpanel"
                    aria-labelledby="tab-ginza"
                  >
                    <a
                      class="phone-call"
                      href="tel:0362814100"
                      aria-label="銀座院に電話 03-6281-4100"
                    >
                      <span class="phone-icon" aria-hidden="true">
                        <img
                          src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/top/Phone.png"
                          alt=""
                          width="16"
                          height="16"
                        />
                      </span>
                      <span class="phone-number">03-6281-4100</span>
                    </a>
                  </div>
                  <div
                    class="phone-panel"
                    id="panel-shibuya"
                    role="tabpanel"
                    aria-labelledby="tab-shibuya"
                    hidden
                  >
                    <a
                      class="phone-call"
                      href="tel:03-6809-0029"
                      aria-label="渋谷院に電話 03-6809-0029"
                    >
                      <span class="phone-icon" aria-hidden="true">
                        <img
                          src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/top/Phone.png"
                          alt=""
                          width="16"
                          height="16"
                        />
                      </span>
                      <span class="phone-number">03-6809-0029</span>
                    </a>
                  </div>
                </div>
              </div>

              <div class="header__line header__action--has-branches">
                <a href="<?php echo esc_url( home_url('') ); ?>#contact" class="header__line-btn" aria-haspopup="true" aria-expanded="false">
									<svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 28 28" fill="none">
										<g clip-path="url(#clip0_1_14499)">
											<path d="M14 0.487549C5.854 0.487549 0 5.58755 0 11.8876C0 16.2185 2.43 19.9876 6.985 21.9126C7.23925 22.0167 7.44289 22.2159 7.55267 22.4678C7.66246 22.7196 7.66975 23.0044 7.573 23.2616C7.131 24.4296 6.373 26.2136 6.086 26.7946C6.04418 26.876 6.02589 26.9675 6.03316 27.0588C6.04044 27.1501 6.07301 27.2376 6.12721 27.3114C6.18141 27.3852 6.2551 27.4425 6.34002 27.4768C6.42494 27.5111 6.51774 27.521 6.608 27.5056C9.48799 26.6873 12.1609 25.2654 14.449 23.3345C14.4995 23.2975 14.5604 23.2772 14.623 23.2766C22.479 23.0156 27.999 18.0176 27.999 11.8876C28 5.58755 22.146 0.487549 14 0.487549ZM8.471 15.3026C8.471 15.4145 8.42654 15.5218 8.3474 15.601C8.26826 15.6801 8.16092 15.7245 8.049 15.7245H4.724C4.61208 15.7245 4.50474 15.6801 4.4256 15.601C4.34646 15.5218 4.302 15.4145 4.302 15.3026V9.26555C4.302 9.15363 4.34646 9.0463 4.4256 8.96716C4.50474 8.88801 4.61208 8.84355 4.724 8.84355H5.255C5.36692 8.84355 5.47426 8.88801 5.5534 8.96716C5.63254 9.0463 5.677 9.15363 5.677 9.26555V14.1506C5.677 14.2625 5.72146 14.3698 5.8006 14.449C5.87974 14.5281 5.98708 14.5726 6.099 14.5726H8.05C8.16192 14.5726 8.26926 14.617 8.3484 14.6962C8.42754 14.7753 8.472 14.8826 8.472 14.9946L8.471 15.3026ZM11.043 15.3026C11.043 15.4145 10.9985 15.5218 10.9194 15.601C10.8403 15.6801 10.7329 15.7245 10.621 15.7245H10.091C9.97908 15.7245 9.87174 15.6801 9.7926 15.601C9.71346 15.5218 9.669 15.4145 9.669 15.3026V9.26555C9.669 9.15363 9.71346 9.0463 9.7926 8.96716C9.87174 8.88801 9.97908 8.84355 10.091 8.84355H10.622C10.7339 8.84355 10.8413 8.88801 10.9204 8.96716C10.9995 9.0463 11.044 9.15363 11.044 9.26555L11.043 15.3026ZM17.988 15.3026C17.988 15.4145 17.9435 15.5218 17.8644 15.601C17.7853 15.6801 17.6779 15.7245 17.566 15.7245H16.847C16.771 15.7245 16.6964 15.704 16.6311 15.6651C16.5658 15.6262 16.5122 15.5704 16.476 15.5036L14.614 12.0575L14.604 12.0366L13.913 10.5705H13.861C13.926 11.3135 14.028 12.1766 14.028 12.9706V15.3065C14.028 15.4185 13.9835 15.5258 13.9044 15.6049C13.8253 15.6841 13.7179 15.7286 13.606 15.7286H13.15C13.0381 15.7286 12.9307 15.6841 12.8516 15.6049C12.7725 15.5258 12.728 15.4185 12.728 15.3065V9.26555C12.728 9.15363 12.7725 9.0463 12.8516 8.96716C12.9307 8.88801 13.0381 8.84355 13.15 8.84355H13.88C13.9559 8.84346 14.0304 8.86385 14.0957 8.90257C14.161 8.94129 14.2147 8.9969 14.251 9.06355L16.121 12.4986L16.133 12.5236L16.814 13.9966H16.861C16.796 13.2816 16.685 12.3715 16.685 11.5965V9.26555C16.685 9.15363 16.7295 9.0463 16.8086 8.96716C16.8877 8.88801 16.9951 8.84355 17.107 8.84355H17.563C17.6749 8.84355 17.7823 8.88801 17.8614 8.96716C17.9405 9.0463 17.985 9.15363 17.985 9.26555L17.988 15.3026ZM24.005 15.3026C24.005 15.4145 23.9605 15.5218 23.8814 15.601C23.8023 15.6801 23.6949 15.7245 23.583 15.7245H20.109C19.9971 15.7245 19.8897 15.6801 19.8106 15.601C19.7315 15.5218 19.687 15.4145 19.687 15.3026V9.26555C19.687 9.15363 19.7315 9.0463 19.8106 8.96716C19.8897 8.88801 19.9971 8.84355 20.109 8.84355H23.481C23.5929 8.84355 23.7003 8.88801 23.7794 8.96716C23.8585 9.0463 23.903 9.15363 23.903 9.26555V9.57355C23.903 9.68548 23.8585 9.79281 23.7794 9.87195C23.7003 9.95109 23.5929 9.99555 23.481 9.99555H21.481C21.3691 9.99555 21.2617 10.04 21.1826 10.1192C21.1035 10.1983 21.059 10.3056 21.059 10.4175V11.1616C21.059 11.2735 21.1035 11.3808 21.1826 11.46C21.2617 11.5391 21.3691 11.5835 21.481 11.5835H23.051C23.1629 11.5835 23.2703 11.628 23.3494 11.7072C23.4285 11.7863 23.473 11.8936 23.473 12.0056V12.3136C23.473 12.4255 23.4285 12.5328 23.3494 12.612C23.2703 12.6911 23.1629 12.7355 23.051 12.7355H21.481C21.3691 12.7355 21.2617 12.78 21.1826 12.8592C21.1035 12.9383 21.059 13.0456 21.059 13.1576V14.1525C21.059 14.2645 21.1035 14.3718 21.1826 14.451C21.2617 14.5301 21.3691 14.5746 21.481 14.5746H23.581C23.6929 14.5746 23.8003 14.619 23.8794 14.6982C23.9585 14.7773 24.003 14.8846 24.003 14.9966L24.005 15.3026Z"/>
										</g>
										<defs>
											<clipPath id="clip0_1_14499">
												<rect width="28" height="27.025" fill="white" transform="translate(0 0.487549)"/>
											</clipPath>
										</defs>
									</svg>
									<p>LINE予約</p>
								</a>
                <ul class="header__submenu" aria-label="LINE予約（院を選択）">
                  <li class="header__submenu-item">
                    <a href="https://page.line.me/wdy1996b" target="_blank" rel="noopener noreferrer">銀座院</a>
                  </li>
                  <li class="header__submenu-item">
                    <a href="https://page.line.me/oiu9031z" target="_blank" rel="noopener noreferrer">渋谷院</a>
                  </li>
                </ul>
              </div>

              <div class="header__web">
                <a href="https://cosmedical.jp/clinic/contact/" class="header__web-btn">
									<svg xmlns="http://www.w3.org/2000/svg" width="25" height="26" viewBox="0 0 25 26" fill="none">
										<g clip-path="url(#clip0_1_14506)">
											<path d="M22.167 3.33325H2.83366C1.50449 3.33325 0.429076 4.42075 0.429076 5.74992L0.416992 20.2499C0.416992 21.5791 1.50449 22.6666 2.83366 22.6666H22.167C23.4962 22.6666 24.5837 21.5791 24.5837 20.2499V5.74992C24.5837 4.42075 23.4962 3.33325 22.167 3.33325ZM16.1253 20.2499H2.83366V15.4166H16.1253V20.2499ZM16.1253 14.2083H2.83366V9.37492H16.1253V14.2083ZM22.167 20.2499H17.3337V9.37492H22.167V20.2499Z"/>
										</g>
										<defs>
											<clipPath id="clip0_1_14506">
												<rect width="25" height="25" fill="white" transform="translate(0 0.5)"/>
											</clipPath>
										</defs>
									</svg>
                  <p>WEB予約</p>
                </a>
              </div>

              <div class="header__instagram header__action--has-branches">
                <a href="<?php echo esc_url( home_url('') ); ?>#contact" class="header__instagram-btn" aria-haspopup="true" aria-expanded="false">
                  <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/top/Instagram_Glyph_Gradient 1.png" alt="Instagram" />
                  <p>Instagram</p>
                </a>
                <ul class="header__submenu" aria-label="Instagram（院を選択）">
                  <li class="header__submenu-item">
                    <a href="https://www.instagram.com/cosmedical_gnz/" target="_blank" rel="noopener noreferrer">銀座院</a>
                  </li>
                  <li class="header__submenu-item">
                    <a href="https://www.instagram.com/cynthia_sby/" target="_blank" rel="noopener noreferrer">渋谷院</a>
                  </li>
                </ul>
              </div>
            </div>

            <nav class="header__nav">
              <ul class="header__nav-list">
                <li class="header__nav-item">
                  <a href="https://cosmedical.jp/clinic/menu/"> 施術メニュー </a>
                </li>
                <li class="header__nav-item">
                  <a href="https://cosmedical.jp/clinic/price/"> 料金表 </a>
                </li>
                <li class="header__nav-item">
                  <a href="https://cosmedical.jp/clinic/doctor/"> ドクター紹介 </a>
                </li>
                <li class="header__nav-item">
                  <a href="<?php echo esc_url( home_url('/#l-top_sns') ); ?>"> SNS一覧 </a>
                </li>
                <li class="header__nav-item">
                  <a href="<?php echo esc_url( home_url('/about/') ); ?>"> 当院について </a>
                </li>
                <li class="header__nav-item header__nav-item--has-branches">
                  <a href="<?php echo esc_url( home_url('/access') ); ?>" aria-haspopup="true" aria-expanded="false"> アクセス </a>
                  <ul class="header__submenu" aria-label="アクセス（院を選択）">
                    <li class="header__submenu-item">
                      <a href="<?php echo esc_url( home_url('/access-ginza/') ); ?>">銀座院</a>
                    </li>
                    <li class="header__submenu-item">
                      <a href="<?php echo esc_url( home_url('/access-shibuya/') ); ?>">渋谷院</a>
                    </li>
                  </ul>
                </li>
                <!-- <li class="header__nav-item">
                  <a href="<?php echo esc_url( home_url('/qa') ); ?>"> よくある質問 </a>
                </li> -->
              </ul>
            </nav>
          </div>

          <div class="pc_n">
            <div class="header__mobile">
              <a href="https://www.instagram.com/cosmedical_gnz/" class="header__social" target="_blank" rel="noopener noreferrer">
                <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/top/Instagram_Glyph_Gradient 1.png" alt="銀座院Instagram" />
                <span>銀座院</span>
              </a>
              <a href="https://www.instagram.com/cynthia_sby/" class="header__social" target="_blank" rel="noopener noreferrer">
                <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/top/Instagram_Glyph_Gradient 1.png" alt="渋谷院Instagram" />
                <span>渋谷院</span>
              </a>

              <button class="header__menu-btn">
                <span></span>
                <span></span>
                <span></span>
              </button>
            </div>
            <!-- SP Drawer Menu -->
            <div
              class="drawer"
              aria-hidden="true"
              role="dialog"
              aria-modal="true"
            >
              <div class="drawer__top">
                <p class="drawer__clinic-name">
                  コスメディカルクリニック　シンシア
                </p>
                <p class="drawer__hours">受付時間　9:00〜20:00</p>
              </div>
              <div class="drawer__header">
                <div class="drawer__logo">
                  <img
                    src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/top/logo.gif.png"
                    alt="COSMEDICAL CLINIC CYNTHIA"
                  />
                </div>
                <div class="drawer__icons">
                  <a
                    class="drawer__instagram"
                    href="https://www.instagram.com/cosmedical_gnz/"
                    target="_blank"
                    rel="noopener noreferrer"
                  >
                    <img
                      src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/top/Instagram_Glyph_Gradient 1.png"
                      alt="銀座院Instagram"
                    />
                    <span>銀座院</span>
                  </a>
                  <a
                    class="drawer__instagram"
                    href="https://www.instagram.com/cynthia_sby/"
                    target="_blank"
                    rel="noopener noreferrer"
                  >
                    <img
                      src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/top/Instagram_Glyph_Gradient 1.png"
                      alt="渋谷院Instagram"
                    />
                    <span>渋谷院</span>
                  </a>
                  <button
                    class="drawer__close"
                    aria-label="メニューを閉じる"
                  ></button>
                </div>
              </div>

              <nav class="drawer__nav" aria-label="モバイルメニュー">
                <ul class="drawer__list">
                  <li class="drawer__item">
                    <a href="https://cosmedical.jp/clinic/menu/">施術メニュー</a>
                  </li>
                  <li class="drawer__item">
                    <a href="https://cosmedical.jp/clinic/price/">料金表</a>
                  </li>
                
                  <li class="drawer__item">
                    <a href="<?php echo esc_url( home_url('#l-top_sns') ); ?>">SNS一覧</a>
                  </li>
                  <li class="drawer__item">
                    <a href="https://cosmedical.jp/clinic/doctor/">ドクター紹介</a>
                  </li>
                  <li class="drawer__item">
                    <a href="<?php echo esc_url( home_url('/about/') ); ?>">当院について</a>
                  </li>
                  <li class="drawer__item"><a href="<?php echo esc_url( home_url('/access') ); ?>">アクセス</a></li>
                  <li class="drawer__item"><a href="<?php echo esc_url( home_url('/qa') ); ?>">よくある質問</a></li>
                </ul>
              </nav>

              <div class="drawer__note">
                <p>受付時間<br />10:00〜20:00</p>
              </div>

              <div class="drawer__actions">
                <a class="drawer__btn drawer__btn--tel" href="tel:0362814100">
                  <span class="drawer__btn-label">銀座院</span>
                  <span class="drawer__btn-phone"
                    ><img
                      src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/top/Phone-white.png"
                      alt=""
                      width="16"
                      height="16"
                    />03-6281-4100</span
                  >
                </a>
                <a class="drawer__btn drawer__btn--tel" href="tel:0368090029">
                  <span class="drawer__btn-label">渋谷院</span>
                  <span class="drawer__btn-phone"
                    ><img
                      src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/top/Phone-white.png"
                      alt=""
                      width="16"
                      height="16"
                    />03-6809-0029</span
                  >
                </a>
                <a
                  class="drawer__btn drawer__btn--web"
                  href="https://cosmedical.jp/clinic/contact/"
                  target="_blank"
                  rel="noopener noreferrer"
                >
                  <span class="drawer__btn-webicon"
                    ><img
                      src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/top/Web-white.png"
                      alt=""
                      width="16"
                      height="16"
                  /></span>
                  WEB予約
                </a>
              </div>
            </div>
          </div>
        </div>
      </header>
