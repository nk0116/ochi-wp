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
        <h1 class="title">Price</h1>
        <p class="fv-low__titles--text">料金表</p>
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
        <span class="current-page">料金表</span>
      </li>
    </ol>
  </nav>
  <!-- パンくずリスト -->

  <div class="price-list">
    <div class="price-list-top">
      <div class="price-list-top__inner">
        <div class="price-list-top__attention">
          <p>※料金表はすべて税込みです。</p>
          <p>※モニターには審査があり、採用枠に制限がございますのでご了承ください。</p>
          <p>※治療はすべて自費診療です。</p>
        </div>

        <p class="price-list-top__pay-method">お支払い方法について</p>

        <div class="price-list-tabs" role="tablist" aria-label="お悩みカテゴリ">
          <button
            class="price-list-tab is-active"
            role="tab"
            aria-selected="true"
            aria-controls="panel-common"
            id="tab-common"
            data-target="panel-common"
          >
            共通
          </button>
          <button
            class="price-list-tab"
            role="tab"
            aria-selected="false"
            aria-controls="panel-surgery"
            id="tab-surgery"
            data-target="panel-surgery"
          >
            美容外科
          </button>
          <button
            class="price-list-tab"
            role="tab"
            aria-selected="false"
            aria-controls="panel-dermatology"
            id="tab-dermatology"
            data-target="panel-dermatology"
          >
            美容皮膚科
          </button>
          <button
            class="price-list-tab"
            role="tab"
            aria-selected="false"
            aria-controls="panel-pouring"
            id="tab-pouring"
            data-target="panel-pouring"
          >
            注入治療
          </button>
          <button
            class="price-list-tab"
            role="tab"
            aria-selected="false"
            aria-controls="panel-others"
            id="tab-others"
            data-target="panel-others"
          >
            その他
          </button>
        </div><!-- price-list-tabs -->

        <!-- SP用ドロップダウン -->
        <div class="price-list-dropdown">
          <button class="price-list-dropdown__toggle">
            <span> 施術メニューを選択</span>
            <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/price-list/icon-top-arrow-sp.svg" alt="" width='10' height='14'/>
          </button>
          <ul class="price-list-dropdown__menu" hidden>
            <li class="price-list-dropdown__group">
              <button class="price-list-dropdown__group-btn">共通</button>
              <ul class="price-list-dropdown__sub" hidden>
                <li data-target="common-1">初診料・再診料</li>
                <li data-target="common-2">麻酔・検査費用</li>
              </ul>
            </li>
            <li class="price-list-dropdown__group">
              <button class="price-list-dropdown__group-btn">美容外科</button>
              <ul class="price-list-dropdown__sub" hidden>
                <li data-target="cosmetic-surgery-1">目元のエイジングケア治療</li>
                <li data-target="cosmetic-surgery-2">脂肪吸引</li>
                <li data-target="cosmetic-surgery-3">豊胸・バスト整形</li>
                <li data-target="cosmetic-surgery-4">フェイスリフト</li>
                <li data-target="cosmetic-surgery-5">二重まぶた・二重形成術・目元</li>
                <li data-target="cosmetic-surgery-6">ワキガ・多汗症治療</li>
                <li data-target="cosmetic-surgery-7">糸によるリフトアップ治療</li>
                <li data-target="cosmetic-surgery-8">小顔・輪郭形成</li>
                <li data-target="cosmetic-surgery-9">鼻の整形</li>
                <li data-target="cosmetic-surgery-10">口の整形</li>
              </ul>
            </li>
            <li class="price-list-dropdown__group">
              <button class="price-list-dropdown__group-btn">美容皮膚科</button>
              <ul class="price-list-dropdown__sub" hidden>
                <li data-target="cosmetic-dermatology-1">シワ・たるみ治療</li>
                <li data-target="cosmetic-dermatology-2">シミ・そばかす・くすみなどの美白・美肌治療</li>
                <li data-target="cosmetic-dermatology-3">肝斑・美白治療</li>
                <li data-target="cosmetic-dermatology-4">ニキビ・ニキビ痕治療</li>
                <li data-target="cosmetic-dermatology-5">赤ら顔（酒さ）・毛細血管拡張症治療</li>
                <li data-target="cosmetic-dermatology-6">毛孔性苔癬治療</li>
                <li data-target="cosmetic-dermatology-7">いぼ・ほくろ除去</li>
              </ul>
            </li>
            <li class="price-list-dropdown__group">
              <button class="price-list-dropdown__group-btn">注入治療</button>
              <ul class="price-list-dropdown__sub" hidden>
                <li data-target="injection-treatment-1">美肌・リバースエイジング 注入治療</li>
                <li data-target="injection-treatment-2">ヒアルロン酸注入</li>
                <li data-target="injection-treatment-3">ボトックス注射</li>
              </ul>
            </li>
            <li class="price-list-dropdown__group">
              <button class="price-list-dropdown__group-btn">その他</button>
              <ul class="price-list-dropdown__sub" hidden>
                <li data-target="other-1">痩身全身</li>
                <li data-target="other-2">医療レーザー脱毛</li>
                <li data-target="other-3">傷痕・刺青・タトゥー除去</li>
                <li data-target="other-4">医療アートメイク</li>
                <li data-target="other-5">毛髪再生</li>
                <li data-target="other-6">男性のお悩み治療</li>
                <li data-target="other-7">女性のお悩みに治療</li>
                <li data-target="other-8">コスメ・美肌・美容アイテム</li>
              </ul>
            </li>
          </ul>
        </div>


        <div class="price-list__body">
          <div class="price-list__panels">
            <!-- 共通 -->
            <div class="price-list__panel is-active" id="panel-common" role="tabpanel" aria-labelledby="tab-common" >
              <div class="price-list__list">
                <a href="<?php echo esc_url( home_url('') ); ?>" class="price-list__item">
                  <span class="price-list__label">初診料・再診料</span>
                  <span class="price-list__icon">
                    <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/price-list/icon-top-arrow.svg" alt="" width='4' height='8'/>
                  </span>
                </a>
                <a href="<?php echo esc_url( home_url('') ); ?>" class="price-list__item">
                  <span class="price-list__label">麻酔・検査費用</span>
                  <span class="price-list__icon">
                    <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/price-list/icon-top-arrow.svg" alt="" width='4' height='8'/>
                  </span>
                </a>
              </div>
            </div>
            <!-- 美容整形 -->
            <div class="price-list__panel" id="panel-surgery" role="tabpanel" aria-labelledby="tab-surgery" hidden>
              <div class="price-list__list">
                <a href="#cosmetic-surgery-1" class="price-list__item">
                  <span class="price-list__label">目元のエイジングケア治療</span>
                  <span class="price-list__icon">
                    <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/price-list/icon-top-arrow.svg" alt="" width='4' height='8'/>
                  </span>
                </a>
                <a href="#cosmetic-surgery-2" class="price-list__item">
                  <span class="price-list__label">脂肪吸引</span>
                  <span class="price-list__icon">
                    <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/price-list/icon-top-arrow.svg" alt="" width='4' height='8'/>
                  </span>
                </a>
                <a href="#cosmetic-surgery-3" class="price-list__item">
                  <span class="price-list__label">豊胸・バスト整形</span>
                  <span class="price-list__icon">
                    <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/price-list/icon-top-arrow.svg" alt="" width='4' height='8'/>
                  </span>
                </a>
                <a href="#cosmetic-surgery-4" class="price-list__item">
                  <span class="price-list__label">フェイスリフト</span>
                  <span class="price-list__icon">
                    <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/price-list/icon-top-arrow.svg" alt="" width='4' height='8'/>
                  </span>
                </a>
                <a href="#cosmetic-surgery-5" class="price-list__item">
                  <span class="price-list__label">二重まぶた・二重形成術・目元</span>
                  <span class="price-list__icon">
                    <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/price-list/icon-top-arrow.svg" alt="" width='4' height='8'/>
                  </span>
                </a>
                <a href="#cosmetic-surgery-6" class="price-list__item">
                  <span class="price-list__label">ワキガ・多汗症治療</span>
                  <span class="price-list__icon">
                    <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/price-list/icon-top-arrow.svg" alt="" width='4' height='8'/>
                  </span>
                </a>
                <a href="#cosmetic-surgery-7" class="price-list__item">
                  <span class="price-list__label">糸によるリフトアップ治療</span>
                  <span class="price-list__icon">
                    <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/price-list/icon-top-arrow.svg" alt="" width='4' height='8'/>
                  </span>
                </a>
                <a href="#cosmetic-surgery-8" class="price-list__item">
                  <span class="price-list__label">小顔・輪郭形成</span>
                  <span class="price-list__icon">
                    <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/price-list/icon-top-arrow.svg" alt="" width='4' height='8'/>
                  </span>
                </a>
                <a href="#cosmetic-surgery-9" class="price-list__item">
                  <span class="price-list__label">鼻の整形</span>
                  <span class="price-list__icon">
                    <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/price-list/icon-top-arrow.svg" alt="" width='4' height='8'/>
                  </span>
                </a>
                <a href="#cosmetic-surgery-10" class="price-list__item">
                  <span class="price-list__label">口の整形</span>
                  <span class="price-list__icon">
                    <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/price-list/icon-top-arrow.svg" alt="" width='4' height='8'/>
                  </span>
                </a>
              </div>
            </div>
            <!-- 美容皮膚科 -->
            <div class="price-list__panel" id="panel-dermatology" role="tabpanel" aria-labelledby="tab-dermatology" hidden>
              <div class="price-list__list">
                <a href="#cosmetic-dermatology-1" class="price-list__item">
                  <span class="price-list__label">シワ・たるみ治療</span>
                  <span class="price-list__icon">
                    <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/price-list/icon-top-arrow.svg" alt="" width='4' height='8'/>
                  </span>
                </a>
                <a href="#cosmetic-dermatology-2" class="price-list__item">
                  <span class="price-list__label">シミ・そばかす・くすみなどの美白・美肌治療</span>
                  <span class="price-list__icon">
                    <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/price-list/icon-top-arrow.svg" alt="" width='4' height='8'/>
                  </span>
                </a>
                <a href="#cosmetic-dermatology-3" class="price-list__item">
                  <span class="price-list__label">肝斑・美白治療</span>
                  <span class="price-list__icon">
                    <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/price-list/icon-top-arrow.svg" alt="" width='4' height='8'/>
                  </span>
                </a>
                <a href="#cosmetic-dermatology-4" class="price-list__item">
                  <span class="price-list__label">ニキビ・ニキビ痕治療</span>
                  <span class="price-list__icon">
                    <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/price-list/icon-top-arrow.svg" alt="" width='4' height='8'/>
                  </span>
                </a>
                <a href="#cosmetic-dermatology-5" class="price-list__item">
                  <span class="price-list__label">赤ら顔（酒さ）・毛細血管拡張症治療</span>
                  <span class="price-list__icon">
                    <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/price-list/icon-top-arrow.svg" alt="" width='4' height='8'/>
                  </span>
                </a>
                <a href="#cosmetic-dermatology-6" class="price-list__item">
                  <span class="price-list__label">毛孔性苔癬治療</span>
                  <span class="price-list__icon">
                    <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/price-list/icon-top-arrow.svg" alt="" width='4' height='8'/>
                  </span>
                </a>
                <a href="#cosmetic-dermatology-7" class="price-list__item">
                  <span class="price-list__label">いぼ・ほくろ除去</span>
                  <span class="price-list__icon">
                    <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/price-list/icon-top-arrow.svg" alt="" width='4' height='8'/>
                  </span>
                </a>
              </div>
            </div>
            <!-- 注入治療 -->
            <div class="price-list__panel" id="panel-pouring" role="tabpanel" aria-labelledby="tab-pouring" hidden>
              <div class="price-list__list">
                <a href="#injection-treatment-1" class="price-list__item">
                  <span class="price-list__label">美肌・リバースエイジング 注入治療</span>
                  <span class="price-list__icon">
                    <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/price-list/icon-top-arrow.svg" alt="" width='4' height='8'/>
                  </span>
                </a>
                <a href="#injection-treatment-2" class="price-list__item">
                  <span class="price-list__label">ヒアルロン酸注入</span>
                  <span class="price-list__icon">
                    <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/price-list/icon-top-arrow.svg" alt="" width='4' height='8'/>
                  </span>
                </a>
                <a href="#injection-treatment-3" class="price-list__item">
                  <span class="price-list__label">ボトックス注射</span>
                  <span class="price-list__icon">
                    <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/price-list/icon-top-arrow.svg" alt="" width='4' height='8'/>
                  </span>
                </a>
              </div>
            </div>
            <!-- その他 -->
            <div class="price-list__panel" id="panel-others" role="tabpanel" aria-labelledby="tab-others" hidden>
              <div class="price-list__list">
                <a href="#other-1" class="price-list__item">
                  <span class="price-list__label">痩身全身</span>
                  <span class="price-list__icon">
                    <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/price-list/icon-top-arrow.svg" alt="" width='4' height='8'/>
                  </span>
                </a>
                <a href="#other-2" class="price-list__item">
                  <span class="price-list__label">医療レーザー脱毛</span>
                  <span class="price-list__icon">
                    <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/price-list/icon-top-arrow.svg" alt="" width='4' height='8'/>
                  </span>
                </a>
                <a href="#other-3" class="price-list__item">
                  <span class="price-list__label">傷痕・刺青・タトゥー除去</span>
                  <span class="price-list__icon">
                    <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/price-list/icon-top-arrow.svg" alt="" width='4' height='8'/>
                  </span>
                </a>
                <a href="#other-4" class="price-list__item">
                  <span class="price-list__label">医療アートメイク</span>
                  <span class="price-list__icon">
                    <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/price-list/icon-top-arrow.svg" alt="" width='4' height='8'/>
                  </span>
                </a>
                <a href="#other-5" class="price-list__item">
                  <span class="price-list__label">毛髪再生</span>
                  <span class="price-list__icon">
                    <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/price-list/icon-top-arrow.svg" alt="" width='4' height='8'/>
                  </span>
                </a>
                <a href="#other-6" class="price-list__item">
                  <span class="price-list__label">男性のお悩み治療</span>
                  <span class="price-list__icon">
                    <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/price-list/icon-top-arrow.svg" alt="" width='4' height='8'/>
                  </span>
                </a>
                <a href="#other-7" class="price-list__item">
                  <span class="price-list__label">女性のお悩みに治療</span>
                  <span class="price-list__icon">
                    <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/price-list/icon-top-arrow.svg" alt="" width='4' height='8'/>
                  </span>
                </a>
                <a href="#other-8" class="price-list__item">
                  <span class="price-list__label">コスメ・美肌・美容アイテム</span>
                  <span class="price-list__icon">
                    <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/price-list/icon-top-arrow.svg" alt="" width='4' height='8'/>
                  </span>
                </a>
              </div>
            </div>
          </div><!-- price-list__panels -->
        </div><!-- price-list__body -->
      </div><!-- price-list-top__inner -->
    </div><!-- price-list-top -->


    <!-- 下部コンテント入れ替え部分 -->
    <!-- 共通 -->
    <div class="price-list-bottom is-active" id="bottom-panel-common">
      <div class="price-list-bottom__inner">
        <div class="price-list__title">
          <h2 class="price-list__title--en">Cosmetic <br class='pc-hidden'>Dermatology</h2>
          <p class="price-list__title--ja">美容皮膚科</p>
        </div><!-- price-list__title -->

        <div class="price-list-bottom__container">
          <aside class="price-list-bottom__side">
            <p class="price-list-bottom__side--index">INDEX</p>
            <!-- 共通 -->
            <div class="price-list-bottom__item">
              <p class="price-list-bottom__item--title">共通</p>
              <ul class="price-list-bottom__list">
                <li>
                  <a href="" class="price-list-bottom__link">
                    <span>
                      <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/price-list/icon-bottom-arrow.svg" alt="" width="6" height="6">
                    </span>
                    <span class="price-list-bottom__link--text">初診料・再診料</span>
                  </a>
                </li>
                <li>
                  <a href="" class="price-list-bottom__link">
                    <span>
                      <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/price-list/icon-bottom-arrow.svg" alt="" width="6" height="6">
                    </span>
                    <span class="price-list-bottom__link--text">麻酔・検査費用</span>
                  </a>
                </li>
              </ul>
            </div><!-- price-list-bottom__item -->

            <!-- 美容外科 -->
            <div class="price-list-bottom__item">
              <p class="price-list-bottom__item--title">美容外科</p>
              <ul class="price-list-bottom__list">
                <li>
                  <a href="#cosmetic-surgery-1" class="price-list-bottom__link">
                    <span>
                      <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/price-list/icon-bottom-arrow.svg" alt="" width="6" height="6">
                    </span>
                    <span class="price-list-bottom__link--text">目元のエイジングケア治療</span>
                  </a>
                </li>
                <li>
                  <a href="#cosmetic-surgery-2" class="price-list-bottom__link">
                    <span>
                      <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/price-list/icon-bottom-arrow.svg" alt="" width="6" height="6">
                    </span>
                    <span class="price-list-bottom__link--text">脂肪吸引</span>
                  </a>
                </li>
                <li>
                  <a href="#cosmetic-surgery-3" class="price-list-bottom__link">
                    <span>
                      <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/price-list/icon-bottom-arrow.svg" alt="" width="6" height="6">
                    </span>
                    <span class="price-list-bottom__link--text">豊胸・バスト整形</span>
                  </a>
                </li>
                <li>
                  <a href="#cosmetic-surgery-4" class="price-list-bottom__link">
                    <span>
                      <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/price-list/icon-bottom-arrow.svg" alt="" width="6" height="6">
                    </span>
                    <span class="price-list-bottom__link--text">フェイスリフト</span>
                  </a>
                </li>
                <li>
                  <a href="#cosmetic-surgery-5" class="price-list-bottom__link">
                    <span>
                      <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/price-list/icon-bottom-arrow.svg" alt="" width="6" height="6">
                    </span>
                    <span class="price-list-bottom__link--text">二重まぶた・二重形成術・目元</span>
                  </a>
                </li>
                <li>
                  <a href="#cosmetic-surgery-6" class="price-list-bottom__link">
                    <span>
                      <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/price-list/icon-bottom-arrow.svg" alt="" width="6" height="6">
                    </span>
                    <span class="price-list-bottom__link--text">ワキガ・多汗症治療</span>
                  </a>
                </li>
                <li>
                  <a href="#cosmetic-surgery-7" class="price-list-bottom__link">
                    <span>
                      <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/price-list/icon-bottom-arrow.svg" alt="" width="6" height="6">
                    </span>
                    <span class="price-list-bottom__link--text">糸によるリフトアップ治療</span>
                  </a>
                </li>
                <li>
                  <a href="#cosmetic-surgery-8" class="price-list-bottom__link">
                    <span>
                      <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/price-list/icon-bottom-arrow.svg" alt="" width="6" height="6">
                    </span>
                    <span class="price-list-bottom__link--text">小顔・輪郭形成</span>
                  </a>
                </li>
                <li>
                  <a href="#cosmetic-surgery-9" class="price-list-bottom__link">
                    <span>
                      <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/price-list/icon-bottom-arrow.svg" alt="" width="6" height="6">
                    </span>
                    <span class="price-list-bottom__link--text">鼻の整形</span>
                  </a>
                </li>
                <li>
                  <a href="#cosmetic-surgery-10" class="price-list-bottom__link">
                    <span>
                      <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/price-list/icon-bottom-arrow.svg" alt="" width="6" height="6">
                    </span>
                    <span class="price-list-bottom__link--text">口の整形</span>
                  </a>
                </li>
              </ul>
            </div><!-- price-list-bottom__item -->

            <!-- 美容皮膚科 -->
            <div class="price-list-bottom__item">
              <p class="price-list-bottom__item--title">美容皮膚科</p>
              <ul class="price-list-bottom__list">
                <li>
                  <a href="#cosmetic-dermatology-1" class="price-list-bottom__link">
                    <span>
                      <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/price-list/icon-bottom-arrow.svg" alt="" width="6" height="6">
                    </span>
                    <span class="price-list-bottom__link--text">シワ・たるみ治療</span>
                  </a>
                </li>
                <li>
                  <a href="#cosmetic-dermatology-2" class="price-list-bottom__link">
                    <span>
                      <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/price-list/icon-bottom-arrow.svg" alt="" width="6" height="6">
                    </span>
                    <span class="price-list-bottom__link--text">シミ・そばかす・くすみなどの美白・美肌治療</span>
                  </a>
                </li>
                <li>
                  <a href="#cosmetic-dermatology-3" class="price-list-bottom__link">
                    <span>
                      <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/price-list/icon-bottom-arrow.svg" alt="" width="6" height="6">
                    </span>
                    <span class="price-list-bottom__link--text">肝斑・美白治療</span>
                  </a>
                </li>
                <li>
                  <a href="#cosmetic-dermatology-4" class="price-list-bottom__link">
                    <span>
                      <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/price-list/icon-bottom-arrow.svg" alt="" width="6" height="6">
                    </span>
                    <span class="price-list-bottom__link--text">ニキビ・ニキビ痕治療</span>
                  </a>
                </li>
                <li>
                  <a href="#cosmetic-dermatology-5" class="price-list-bottom__link">
                    <span>
                      <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/price-list/icon-bottom-arrow.svg" alt="" width="6" height="6">
                    </span>
                    <span class="price-list-bottom__link--text">赤ら顔（酒さ）・毛細血管拡張症治療</span>
                  </a>
                </li>
                <li>
                  <a href="#cosmetic-dermatology-6" class="price-list-bottom__link">
                    <span>
                      <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/price-list/icon-bottom-arrow.svg" alt="" width="6" height="6">
                    </span>
                    <span class="price-list-bottom__link--text">毛孔性苔癬治療</span>
                  </a>
                </li>
                <li>
                  <a href="#cosmetic-dermatology-7" class="price-list-bottom__link">
                    <span>
                      <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/price-list/icon-bottom-arrow.svg" alt="" width="6" height="6">
                    </span>
                    <span class="price-list-bottom__link--text">いぼ・ほくろ除去</span>
                  </a>
                </li>
              </ul>
            </div><!-- price-list-bottom__item -->

            <!-- 注入施術 -->
            <div class="price-list-bottom__item">
              <p class="price-list-bottom__item--title">注入施術</p>
              <ul class="price-list-bottom__list">
                <li>
                  <a href="#injection-treatment-1" class="price-list-bottom__link">
                    <span>
                      <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/price-list/icon-bottom-arrow.svg" alt="" width="6" height="6">
                    </span>
                    <span class="price-list-bottom__link--text">美肌・リバースエイジング 注入治療</span>
                  </a>
                </li>
                <li>
                  <a href="#injection-treatment-2" class="price-list-bottom__link">
                    <span>
                      <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/price-list/icon-bottom-arrow.svg" alt="" width="6" height="6">
                    </span>
                    <span class="price-list-bottom__link--text">ヒアルロン酸注入</span>
                  </a>
                </li>
                <li>
                  <a href="#injection-treatment-3" class="price-list-bottom__link">
                    <span>
                      <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/price-list/icon-bottom-arrow.svg" alt="" width="6" height="6">
                    </span>
                    <span class="price-list-bottom__link--text">ボトックス注射</span>
                  </a>
                </li>
              </ul>
            </div><!-- price-list-bottom__item -->

            <!-- その他の施術 -->
            <div class="price-list-bottom__item">
              <p class="price-list-bottom__item--title">その他の施術</p>
              <ul class="price-list-bottom__list">
                <li>
                  <a href="#other-1" class="price-list-bottom__link">
                    <span>
                      <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/price-list/icon-bottom-arrow.svg" alt="" width="6" height="6">
                    </span>
                    <span class="price-list-bottom__link--text">痩身全身</span>
                  </a>
                </li>
                <li>
                  <a href="#other-2" class="price-list-bottom__link">
                    <span>
                      <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/price-list/icon-bottom-arrow.svg" alt="" width="6" height="6">
                    </span>
                    <span class="price-list-bottom__link--text">医療レーザー脱毛</span>
                  </a>
                </li>
                <li>
                  <a href="#other-3" class="price-list-bottom__link">
                    <span>
                      <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/price-list/icon-bottom-arrow.svg" alt="" width="6" height="6">
                    </span>
                    <span class="price-list-bottom__link--text">傷痕・刺青・タトゥー除去</span>
                  </a>
                </li>
                <li>
                  <a href="#other-4" class="price-list-bottom__link">
                    <span>
                      <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/price-list/icon-bottom-arrow.svg" alt="" width="6" height="6">
                    </span>
                    <span class="price-list-bottom__link--text">医療アートメイク</span>
                  </a>
                </li>
                <li>
                  <a href="#other-5" class="price-list-bottom__link">
                    <span>
                      <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/price-list/icon-bottom-arrow.svg" alt="" width="6" height="6">
                    </span>
                    <span class="price-list-bottom__link--text">毛髪再生</span>
                  </a>
                </li>
                <li>
                  <a href="#other-6" class="price-list-bottom__link">
                    <span>
                      <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/price-list/icon-bottom-arrow.svg" alt="" width="6" height="6">
                    </span>
                    <span class="price-list-bottom__link--text">男性のお悩み治療</span>
                  </a>
                </li>
                <li>
                  <a href="#other-7" class="price-list-bottom__link">
                    <span>
                      <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/price-list/icon-bottom-arrow.svg" alt="" width="6" height="6">
                    </span>
                    <span class="price-list-bottom__link--text">女性のお悩みに治療</span>
                  </a>
                </li>
                <li>
                  <a href="#other-8" class="price-list-bottom__link">
                    <span>
                      <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/price-list/icon-bottom-arrow.svg" alt="" width="6" height="6">
                    </span>
                    <span class="price-list-bottom__link--text">コスメ・美肌・美容アイテム</span>
                  </a>
                </li>
              </ul>
            </div><!-- price-list-bottom__item -->
          </aside><!-- price-list-bottom__side -->

          <div class="price-list-bottom__body">
            <!-- 目元のエイジングケア治療 -->
            <div class="price-list-bottom__content" id="">
              <div class="price-list-bottom__content__headline">
                <p class="price-list-bottom__content__headline--text">目元のエイジングケア治療</p>
                <a href="" class="price-list-btn">施術詳細を見る</a>
              </div>

              <table class="price-list-table">
                <caption class="price-list-table__caption">
                  目の下のクマ・たるみ治療<br class="pc-hidden"><span class="sp-min12">【経結膜脱脂術・眼窩脂肪注入・マイクロCRF】</span>
                </caption>
                <tbody>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">経結膜脱脂術（単独）</td>
                    <td class="price-list-table__cost">242,000<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">下眼瞼皮膚切開たるみ取り（単独）</td>
                    <td class="price-list-table__cost">297,000<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">経結膜脱脂術 ＋ 眼窩脂肪注入術</td>
                    <td class="price-list-table__cost">275,000<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">経結膜脱脂術 ＋ 下眼瞼皮膚切開たるみ取り</td>
                    <td class="price-list-table__cost">352,000<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">経結膜脱脂術 ＋ マイクロコンデンスリッチファット（マイクロCRF）<br>目の下 中顔面注入術</td>
                    <td class="price-list-table__cost">495,000<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">経結膜脱脂術 ＋ マイクロコンデンスリッチファット（マイクロCRF）<br>目の下 中顔面・ほうれい線注入術</td>
                    <td class="price-list-table__cost">528,000<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">経結膜脱脂術 ＋ マイクロコンデンスリッチファット（マイクロCRF）<br>目の下 中顔面・ほうれい線・<br class="pc-hidden">オトガイマリオネットライン注入術</td>
                    <td class="price-list-table__cost">561,000<span>円</span></td>
                  </tr>
                </tbody>
              </table>
            </div><!-- price-list-bottom__content -->
          </div><!-- price-list-bottom__body -->
        </div><!-- price-list-bottom__container -->
      </div><!-- price-list-bottom__inner -->
    </div><!-- price-list-bottom -->
    
    <!-- 美容整形 -->
    <div class="price-list-bottom" id="bottom-panel-surgery" hidden>
      <div class="price-list-bottom__inner">
        <div class="price-list__title">
          <h2 class="price-list__title--en">Cosmetic <br class='pc-hidden'>Surgery</h2>
          <p class="price-list__title--ja">美容外科</p>
        </div><!-- price-list__title -->

        <div class="price-list-bottom__container">
          <aside class="price-list-bottom__side">
            <p class="price-list-bottom__side--index">INDEX</p>
            <!-- 共通 -->
            <div class="price-list-bottom__item">
              <p class="price-list-bottom__item--title">共通</p>
              <ul class="price-list-bottom__list">
                <li>
                  <a href="" class="price-list-bottom__link">
                    <span>
                      <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/price-list/icon-bottom-arrow.svg" alt="" width="6" height="6">
                    </span>
                    <span class="price-list-bottom__link--text">初診料・再診料</span>
                  </a>
                </li>
                <li>
                  <a href="" class="price-list-bottom__link">
                    <span>
                      <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/price-list/icon-bottom-arrow.svg" alt="" width="6" height="6">
                    </span>
                    <span class="price-list-bottom__link--text">麻酔・検査費用</span>
                  </a>
                </li>
              </ul>
            </div><!-- price-list-bottom__item -->

            <!-- 美容外科 -->
            <div class="price-list-bottom__item">
              <p class="price-list-bottom__item--title">美容外科</p>
              <ul class="price-list-bottom__list">
                <li>
                  <a href="#cosmetic-surgery-1" class="price-list-bottom__link">
                    <span>
                      <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/price-list/icon-bottom-arrow.svg" alt="" width="6" height="6">
                    </span>
                    <span class="price-list-bottom__link--text">目元のエイジングケア治療</span>
                  </a>
                </li>
                <li>
                  <a href="#cosmetic-surgery-2" class="price-list-bottom__link">
                    <span>
                      <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/price-list/icon-bottom-arrow.svg" alt="" width="6" height="6">
                    </span>
                    <span class="price-list-bottom__link--text">脂肪吸引</span>
                  </a>
                </li>
                <li>
                  <a href="#cosmetic-surgery-3" class="price-list-bottom__link">
                    <span>
                      <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/price-list/icon-bottom-arrow.svg" alt="" width="6" height="6">
                    </span>
                    <span class="price-list-bottom__link--text">豊胸・バスト整形</span>
                  </a>
                </li>
                <li>
                  <a href="#cosmetic-surgery-4" class="price-list-bottom__link">
                    <span>
                      <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/price-list/icon-bottom-arrow.svg" alt="" width="6" height="6">
                    </span>
                    <span class="price-list-bottom__link--text">フェイスリフト</span>
                  </a>
                </li>
                <li>
                  <a href="#cosmetic-surgery-5" class="price-list-bottom__link">
                    <span>
                      <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/price-list/icon-bottom-arrow.svg" alt="" width="6" height="6">
                    </span>
                    <span class="price-list-bottom__link--text">二重まぶた・二重形成術・目元</span>
                  </a>
                </li>
                <li>
                  <a href="#cosmetic-surgery-6" class="price-list-bottom__link">
                    <span>
                      <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/price-list/icon-bottom-arrow.svg" alt="" width="6" height="6">
                    </span>
                    <span class="price-list-bottom__link--text">ワキガ・多汗症治療</span>
                  </a>
                </li>
                <li>
                  <a href="#cosmetic-surgery-7" class="price-list-bottom__link">
                    <span>
                      <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/price-list/icon-bottom-arrow.svg" alt="" width="6" height="6">
                    </span>
                    <span class="price-list-bottom__link--text">糸によるリフトアップ治療</span>
                  </a>
                </li>
                <li>
                  <a href="#cosmetic-surgery-8" class="price-list-bottom__link">
                    <span>
                      <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/price-list/icon-bottom-arrow.svg" alt="" width="6" height="6">
                    </span>
                    <span class="price-list-bottom__link--text">小顔・輪郭形成</span>
                  </a>
                </li>
                <li>
                  <a href="#cosmetic-surgery-9" class="price-list-bottom__link">
                    <span>
                      <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/price-list/icon-bottom-arrow.svg" alt="" width="6" height="6">
                    </span>
                    <span class="price-list-bottom__link--text">鼻の整形</span>
                  </a>
                </li>
                <li>
                  <a href="#cosmetic-surgery-10" class="price-list-bottom__link">
                    <span>
                      <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/price-list/icon-bottom-arrow.svg" alt="" width="6" height="6">
                    </span>
                    <span class="price-list-bottom__link--text">口の整形</span>
                  </a>
                </li>
              </ul>
            </div><!-- price-list-bottom__item -->

            <!-- 美容皮膚科 -->
            <div class="price-list-bottom__item">
              <p class="price-list-bottom__item--title">美容皮膚科</p>
              <ul class="price-list-bottom__list">
                <li>
                  <a href="#cosmetic-dermatology-1" class="price-list-bottom__link">
                    <span>
                      <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/price-list/icon-bottom-arrow.svg" alt="" width="6" height="6">
                    </span>
                    <span class="price-list-bottom__link--text">シワ・たるみ治療</span>
                  </a>
                </li>
                <li>
                  <a href="#cosmetic-dermatology-2" class="price-list-bottom__link">
                    <span>
                      <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/price-list/icon-bottom-arrow.svg" alt="" width="6" height="6">
                    </span>
                    <span class="price-list-bottom__link--text">シミ・そばかす・くすみなどの美白・美肌治療</span>
                  </a>
                </li>
                <li>
                  <a href="#cosmetic-dermatology-3" class="price-list-bottom__link">
                    <span>
                      <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/price-list/icon-bottom-arrow.svg" alt="" width="6" height="6">
                    </span>
                    <span class="price-list-bottom__link--text">肝斑・美白治療</span>
                  </a>
                </li>
                <li>
                  <a href="#cosmetic-dermatology-4" class="price-list-bottom__link">
                    <span>
                      <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/price-list/icon-bottom-arrow.svg" alt="" width="6" height="6">
                    </span>
                    <span class="price-list-bottom__link--text">ニキビ・ニキビ痕治療</span>
                  </a>
                </li>
                <li>
                  <a href="#cosmetic-dermatology-5" class="price-list-bottom__link">
                    <span>
                      <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/price-list/icon-bottom-arrow.svg" alt="" width="6" height="6">
                    </span>
                    <span class="price-list-bottom__link--text">赤ら顔（酒さ）・毛細血管拡張症治療</span>
                  </a>
                </li>
                <li>
                  <a href="#cosmetic-dermatology-6" class="price-list-bottom__link">
                    <span>
                      <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/price-list/icon-bottom-arrow.svg" alt="" width="6" height="6">
                    </span>
                    <span class="price-list-bottom__link--text">毛孔性苔癬治療</span>
                  </a>
                </li>
                <li>
                  <a href="#cosmetic-dermatology-7" class="price-list-bottom__link">
                    <span>
                      <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/price-list/icon-bottom-arrow.svg" alt="" width="6" height="6">
                    </span>
                    <span class="price-list-bottom__link--text">いぼ・ほくろ除去</span>
                  </a>
                </li>
              </ul>
            </div><!-- price-list-bottom__item -->

            <!-- 注入施術 -->
            <div class="price-list-bottom__item">
              <p class="price-list-bottom__item--title">注入施術</p>
              <ul class="price-list-bottom__list">
                <li>
                  <a href="#injection-treatment-1" class="price-list-bottom__link">
                    <span>
                      <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/price-list/icon-bottom-arrow.svg" alt="" width="6" height="6">
                    </span>
                    <span class="price-list-bottom__link--text">美肌・リバースエイジング 注入治療</span>
                  </a>
                </li>
                <li>
                  <a href="#injection-treatment-2" class="price-list-bottom__link">
                    <span>
                      <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/price-list/icon-bottom-arrow.svg" alt="" width="6" height="6">
                    </span>
                    <span class="price-list-bottom__link--text">ヒアルロン酸注入</span>
                  </a>
                </li>
                <li>
                  <a href="#injection-treatment-3" class="price-list-bottom__link">
                    <span>
                      <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/price-list/icon-bottom-arrow.svg" alt="" width="6" height="6">
                    </span>
                    <span class="price-list-bottom__link--text">ボトックス注射</span>
                  </a>
                </li>
              </ul>
            </div><!-- price-list-bottom__item -->

            <!-- その他の施術 -->
            <div class="price-list-bottom__item">
              <p class="price-list-bottom__item--title">その他の施術</p>
              <ul class="price-list-bottom__list">
                <li>
                  <a href="#other-1" class="price-list-bottom__link">
                    <span>
                      <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/price-list/icon-bottom-arrow.svg" alt="" width="6" height="6">
                    </span>
                    <span class="price-list-bottom__link--text">痩身全身</span>
                  </a>
                </li>
                <li>
                  <a href="#other-2" class="price-list-bottom__link">
                    <span>
                      <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/price-list/icon-bottom-arrow.svg" alt="" width="6" height="6">
                    </span>
                    <span class="price-list-bottom__link--text">医療レーザー脱毛</span>
                  </a>
                </li>
                <li>
                  <a href="#other-3" class="price-list-bottom__link">
                    <span>
                      <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/price-list/icon-bottom-arrow.svg" alt="" width="6" height="6">
                    </span>
                    <span class="price-list-bottom__link--text">傷痕・刺青・タトゥー除去</span>
                  </a>
                </li>
                <li>
                  <a href="#other-4" class="price-list-bottom__link">
                    <span>
                      <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/price-list/icon-bottom-arrow.svg" alt="" width="6" height="6">
                    </span>
                    <span class="price-list-bottom__link--text">医療アートメイク</span>
                  </a>
                </li>
                <li>
                  <a href="#other-5" class="price-list-bottom__link">
                    <span>
                      <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/price-list/icon-bottom-arrow.svg" alt="" width="6" height="6">
                    </span>
                    <span class="price-list-bottom__link--text">毛髪再生</span>
                  </a>
                </li>
                <li>
                  <a href="#other-6" class="price-list-bottom__link">
                    <span>
                      <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/price-list/icon-bottom-arrow.svg" alt="" width="6" height="6">
                    </span>
                    <span class="price-list-bottom__link--text">男性のお悩み治療</span>
                  </a>
                </li>
                <li>
                  <a href="#other-7" class="price-list-bottom__link">
                    <span>
                      <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/price-list/icon-bottom-arrow.svg" alt="" width="6" height="6">
                    </span>
                    <span class="price-list-bottom__link--text">女性のお悩みに治療</span>
                  </a>
                </li>
                <li>
                  <a href="#other-8" class="price-list-bottom__link">
                    <span>
                      <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/price-list/icon-bottom-arrow.svg" alt="" width="6" height="6">
                    </span>
                    <span class="price-list-bottom__link--text">コスメ・美肌・美容アイテム</span>
                  </a>
                </li>
              </ul>
            </div><!-- price-list-bottom__item -->
          </aside><!-- price-list-bottom__side -->

          <div class="price-list-bottom__body">
            <!-- 目元のエイジングケア治療 -->
            <div class="price-list-bottom__content" id="cosmetic-surgery-1">
              <div class="price-list-bottom__content__headline">
                <p class="price-list-bottom__content__headline--text">目元のエイジングケア治療</p>
                <a href="" class="price-list-btn">施術詳細を見る</a>
              </div>

              <table class="price-list-table">
                <caption class="price-list-table__caption">
                  目の下のクマ・たるみ治療<br class="pc-hidden"><span class="sp-min12">【経結膜脱脂術・眼窩脂肪注入・マイクロCRF】</span>
                </caption>
                <tbody>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">経結膜脱脂術（単独）</td>
                    <td class="price-list-table__cost">242,000<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">下眼瞼皮膚切開たるみ取り（単独）</td>
                    <td class="price-list-table__cost">297,000<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">経結膜脱脂術 ＋ 眼窩脂肪注入術</td>
                    <td class="price-list-table__cost">275,000<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">経結膜脱脂術 ＋ 下眼瞼皮膚切開たるみ取り</td>
                    <td class="price-list-table__cost">352,000<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">経結膜脱脂術 ＋ マイクロコンデンスリッチファット（マイクロCRF）<br>目の下 中顔面注入術</td>
                    <td class="price-list-table__cost">495,000<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">経結膜脱脂術 ＋ マイクロコンデンスリッチファット（マイクロCRF）<br>目の下 中顔面・ほうれい線注入術</td>
                    <td class="price-list-table__cost">528,000<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">経結膜脱脂術 ＋ マイクロコンデンスリッチファット（マイクロCRF）<br>目の下 中顔面・ほうれい線・<br class="pc-hidden">オトガイマリオネットライン注入術</td>
                    <td class="price-list-table__cost">561,000<span>円</span></td>
                  </tr>
                </tbody>
              </table>

              <table class="price-list-table">
                <caption class="price-list-table__caption center">
                  又吉総院長による施術
                </caption>
                <tbody>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">経結膜脱脂術（単独）</td>
                    <td class="price-list-table__cost">297,000<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">下眼瞼皮膚切開たるみ取り（単独）</td>
                    <td class="price-list-table__cost">330,000<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">経結膜脱脂術 ＋ 眼窩脂肪注入術</td>
                    <td class="price-list-table__cost">330,000<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">経結膜脱脂術 ＋ 下眼瞼皮膚切開たるみ取り</td>
                    <td class="price-list-table__cost">440,000<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">経結膜脱脂術 ＋ マイクロコンデンスリッチファット（マイクロCRF）<br>目の下 中顔面注入術</td>
                    <td class="price-list-table__cost">550,000<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">経結膜脱脂術 ＋ マイクロコンデンスリッチファット（マイクロCRF）<br>目の下 中顔面・ほうれい線注入術</td>
                    <td class="price-list-table__cost">583,000<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">経結膜脱脂術 ＋ マイクロコンデンスリッチファット（マイクロCRF）<br>目の下 中顔面・ほうれい線・<br class="pc-hidden">オトガイマリオネットライン注入術</td>
                    <td class="price-list-table__cost">616,000<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item min-height-auto"  colspan="2">
                    <td class="price-list-table__text--attention">
                      ※又吉総院長による術後チェックを受ける場合、+11,000円<br>
                      お支払いにポイントは適用できません。
                    </td>
                  </tr>
                </tbody>
              </table>

              <table class="price-list-table option">
                <caption class="price-list-table__caption center">オプション</caption>
                <tbody>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">静脈麻酔</td>
                    <td class="price-list-table__cost">55,000～99,000<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">
                      他院下眼瞼手術術後の場合<br>
                      <span class="min">（経結膜脱脂術、下まぶた切開を伴うたるみ取り、<br class="pc-hidden">グラマラスラインなど）</span>
                    </td>
                    <td class="price-list-table__cost">55,000<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">他院ハムラ法手術後修正</td>
                    <td class="price-list-table__cost">110,000～220,000<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">大腿部、腹部以外からの脂肪採取の場合</td>
                    <td class="price-list-table__cost">55,000<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item min-height-auto"  colspan="2">
                    <td class="price-list-table__text--attention">
                      ※又吉総院長のカウンセリング後、<br class="pc-hidden">他の医師による施術を受ける場合 +22,000円
                    </td>
                  </tr>
                </tbody>
              </table>

              <table class="price-list-table">
                <caption class="price-list-table__caption">
                  <p class="sp-hidden">ゴルゴ線（ゴルゴライン、インディアンライン）治療</p>
                  <p class="pc-hidden">ゴルゴ線治療<br class="pc-hidden"><span class="sp-min14">（ゴルゴライン、インディアンライン）</span></p>
                </caption>
                <tbody>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">ゴルゴ線剥離<br class="pc-hidden">（別途マイクロCRF料金が必要です。）</td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li><span>（両側）</span>220,000<span>円</span></li>
                        <li><span>（片側）</span>132,000<span>円</span></li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">マイクロCRF（中顔面）</td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li><span>（1箇所）</span>330,000<span>円</span></li>
                        <li><span>（2箇所）</span>407,000<span>円</span></li>
                        <li><span>（3箇所）</span>440,000<span>円</span></li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">静脈麻酔</td>
                    <td class="price-list-table__cost">44,000～66,000<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text pi-min">
                      <p>経結膜脱脂術＋マイクロCRF（目の下 中顔面）＋ゴルゴ線剥離（両側）</p>
                      <ul>
                        <li>・経結膜脱脂術＋マイクロコンデンスリッチファット（目の下 中顔面）</li>
                        <li>・ゴルゴ線剥離（両側）</li>
                        <li>・静脈麻酔</li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">781,000<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text pi-min">
                      <p>頬アゴ下VASERアキーセル脂肪吸引＋マイクロCRF＋ゴルゴ線剥離（両側）</p>
                      <ul>
                        <li>・ベイザー脂肪吸引（頬アゴ下）アキーセル</li>
                        <li>・マイクロコンデンスリッチファット（中顔面）</li>
                        <li>・ゴルゴ線剥離（両側）</li>
                        <li>・静脈麻酔</li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">1,023,000<span>円</span></td>
                  </tr>
                </tbody>
              </table>

              <table class="price-list-table">
                <caption class="price-list-table__caption center">又吉総院長による施術</caption>
                <tbody>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text pi-min">
                      <p>経結膜脱脂術＋マイクロCRF（目の下・中顔面）＋ゴルゴ線剥離（両側）</p>
                      <ul>
                        <li>・経結膜脱脂術＋マイクロコンデンスリッチファット（目の下・中顔面） </li>
                        <li>・ゴルゴ線剥離（両側）</li>
                        <li>・静脈麻酔</li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">825,000<span>円</span></td>
                  </tr>
                </tbody>
              </table>

              <table class="price-list-table">
                <caption class="price-list-table__caption">上まぶたのたるみ取り<br class="pc-hidden">【眉下切開術・二重ライン切開術】</caption>
                <tbody>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">眉下切開</td>
                    <td class="price-list-table__cost">275,000<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">二重ライン切開</td>
                    <td class="price-list-table__cost">308,000<span>円</span></td>
                  </tr>
                </tbody>
              </table>

              <table class="price-list-table option">
                <caption class="price-list-table__caption center">オプション</caption>
                <tbody>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">静脈麻酔</td>
                    <td class="price-list-table__cost">55,000～99,000<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">上まぶたの脂肪除去</td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li><span>内側</span>77,000<span>円</span></li>
                        <li><span>外側</span>77,000<span>円</span></li>
                      </ul>
                    </td>
                  </tr>
                </tbody>
              </table>

              <table class="price-list-table">
                <caption class="price-list-table__caption">眼瞼下垂症手術<br class="pc-hidden">【挙筋前転法、腱膜固定法】</caption>
                <tbody>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">挙筋前転術法・腱膜固定法</td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li><span>（両側）</span>275,000<span>円</span></li>
                        <li><span>（片側）</span>440,000<span>円</span></li>
                      </ul>
                    </td>
                  </tr>
                </tbody>
              </table>

              <table class="price-list-table">
                <caption class="price-list-table__caption">リジュランi(アイ)【サーモン注射】</caption>
                <tbody>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text pi-min">
                      <p>リジュランi(アイ)【サーモン注射】</p>
                      <ul>
                        <li>1か月以内に再施術の場合はトライアル価格でお受けいただけます。</li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li><span>トライアル</span>27,500<span>円</span></li>
                        <li><span>1本1㏄&ensp;</span>33,000<span>円</span></li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text pi-min">
                      <p>モデル注射<br class="pc-hidden">【リジュランi(アイ)＋ボトックスビスタ】</p>
                      <ul>
                        <li>2か月以内に再施術の場合はトライアル価格でお受けいただけます。</li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li><span>トライアル</span>40,700<span>円</span></li>
                        <li><span>1本1㏄&ensp;</span>46,200<span>円</span></li>
                      </ul>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div><!-- price-list-bottom__content -->

            <!-- 脂肪吸引 -->
            <div class="price-list-bottom__content" id="cosmetic-surgery-2">
              <div class="price-list-bottom__content__headline">
                <p class="price-list-bottom__content__headline--text">脂肪吸引</p>
                <a href="" class="price-list-btn">施術詳細を見る</a>
              </div>

              <table class="price-list-table">
                <caption class="price-list-table__caption center">頬・アゴ下</caption>
                <tbody>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">頬・アゴ下</td>
                    <td class="price-list-table__cost pi5">
                      <ul>
                        <li class="text-left">
                          <span>ベイザー®</span>242,000<span>円</span>
                        </li>
                        <li class="text-left">
                          <span>ベイザー®×アキーセル</span>495,000<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                </tbody>
              </table>

              <table class="price-list-table">
                <caption class="price-list-table__caption center">二の腕・腕まわり</caption>
                <tbody>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">二の腕・肩</td>
                    <td class="price-list-table__cost pi5">
                      <ul>
                        <li class="text-left">
                          <span>ベイザー®</span>330,000<span>円</span>
                        </li>
                        <li class="text-left">
                          <span>ベイザー®×アキーセル</span>385,000<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">ワキ後ろ・肩甲骨上</td>
                    <td class="price-list-table__cost pi5">
                      <ul>
                        <li class="text-left">
                          <span>ベイザー®</span>330,000<span>円</span>
                        </li>
                        <li class="text-left">
                          <span>ベイザー®×アキーセル</span>385,000<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">二の腕・肩＋ワキ後ろ・肩甲骨上</td>
                    <td class="price-list-table__cost pi5">
                      <ul>
                        <li class="text-left">
                          <span>ベイザー®</span>440,000<span>円</span>
                        </li>
                        <li class="text-left">
                          <span>ベイザー®×アキーセル</span>517,000<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                </tbody>
              </table>

              <table class="price-list-table">
                <caption class="price-list-table__caption center">おなか・腰周り</caption>
                <tbody>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">上腹部</td>
                    <td class="price-list-table__cost pi5">
                      <ul>
                        <li class="text-left">
                          <span>ベイザー®</span>330,000<span>円</span>
                        </li>
                        <li class="text-left">
                          <span>ベイザー®×アキーセル</span>440,000<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">側腹部</td>
                    <td class="price-list-table__cost pi5">
                      <ul>
                        <li class="text-left">
                          <span>ベイザー®</span>330,000<span>円</span>
                        </li>
                        <li class="text-left">
                          <span>ベイザー®×アキーセル</span>440,000<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">下腹部</td>
                    <td class="price-list-table__cost pi5">
                      <ul>
                        <li class="text-left">
                          <span>ベイザー®</span>330,000<span>円</span>
                        </li>
                        <li class="text-left">
                          <span>ベイザー®×アキーセル</span>440,000<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">腹部全体</td>
                    <td class="price-list-table__cost pi5">
                      <ul>
                        <li class="text-left">
                          <span>ベイザー®</span>660,000<span>円</span>
                        </li>
                        <li class="text-left">
                          <span>ベイザー®×アキーセル</span>770,000<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">腰部</td>
                    <td class="price-list-table__cost pi5">
                      <ul>
                        <li class="text-left">
                          <span>ベイザー®</span>330,000<span>円</span>
                        </li>
                        <li class="text-left">
                          <span>ベイザー®×アキーセル</span>440,000<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">腹部全体＋腰部</td>
                    <td class="price-list-table__cost pi5">
                      <ul>
                        <li class="text-left">
                          <span>ベイザー®</span>880,000<span>円</span>
                        </li>
                        <li class="text-left">
                          <span>ベイザー®×アキーセル</span>990,000<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                </tbody>
              </table>

              <table class="price-list-table">
                <caption class="price-list-table__caption center">腹部</caption>
                <tbody>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">たるみ取り</td>
                    <td class="price-list-table__cost">660,000<span>円</span></td>
                  </tr>
                </tbody>
              </table>

              <table class="price-list-table">
                <caption class="price-list-table__caption center">太もも・お尻</caption>
                <tbody>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">太もも前部</td>
                    <td class="price-list-table__cost pi5">
                      <ul>
                        <li class="text-left">
                          <span>ベイザー®</span>330,000<span>円</span>
                        </li>
                        <li class="text-left">
                          <span>ベイザー®×アキーセル</span>385,000<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">太もも内側</td>
                    <td class="price-list-table__cost pi5">
                      <ul>
                        <li class="text-left">
                          <span>ベイザー®</span>330,000<span>円</span>
                        </li>
                        <li class="text-left">
                          <span>ベイザー®×アキーセル</span>385,000<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">太もも後部</td>
                    <td class="price-list-table__cost pi5">
                      <ul>
                        <li class="text-left">
                          <span>ベイザー®</span>330,000<span>円</span>
                        </li>
                        <li class="text-left">
                          <span>ベイザー®×アキーセル</span>385,000<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">太もも外側</td>
                    <td class="price-list-table__cost pi5">
                      <ul>
                        <li class="text-left">
                          <span>ベイザー®</span>330,000<span>円</span>
                        </li>
                        <li class="text-left">
                          <span>ベイザー®×アキーセル</span>385,000<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">お尻</td>
                    <td class="price-list-table__cost pi5">
                      <ul>
                        <li class="text-left">
                          <span>ベイザー®</span>330,000<span>円</span>
                        </li>
                        <li class="text-left">
                          <span>ベイザー®×アキーセル</span>440,000<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">膝まわり</td>
                    <td class="price-list-table__cost pi5">
                      <ul>
                        <li class="text-left">
                          <span>ベイザー®</span>220,000<span>円</span>
                        </li>
                        <li class="text-left">
                          <span>ベイザー®×アキーセル</span>275,000<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">太もも前面＋内側＋膝まわり</td>
                    <td class="price-list-table__cost pi5">
                      <ul>
                        <li class="text-left">
                          <span>ベイザー®</span>660,000<span>円</span>
                        </li>
                        <li class="text-left">
                          <span>ベイザー®×アキーセル</span>770,000<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">太もも（片側 左右それぞれ）＋お尻＋膝まわり</td>
                    <td class="price-list-table__cost pi5">
                      <ul>
                        <li class="text-left">
                          <span>ベイザー®</span>660,000<span>円</span>
                        </li>
                        <li class="text-left">
                          <span>ベイザー®×アキーセル</span>770,000<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">太もも後面＋外側＋お尻</td>
                    <td class="price-list-table__cost pi5">
                      <ul>
                        <li class="text-left">
                          <span>ベイザー®</span>660,000<span>円</span>
                        </li>
                        <li class="text-left">
                          <span>ベイザー®×アキーセル</span>770,000<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">太もも全周＋お尻＋膝まわり</td>
                    <td class="price-list-table__cost pi5">
                      <ul>
                        <li class="text-left">
                          <span>ベイザー®</span>990,000<span>円</span>
                        </li>
                        <li class="text-left small-margin">
                          <span>ベイザー®×アキーセル</span>1,100,000<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                </tbody>
              </table>

              <table class="price-list-table">
                <caption class="price-list-table__caption center">下腿（ふくらはぎ・足首）</caption>
                <tbody>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">ふくらはぎ</td>
                    <td class="price-list-table__cost pi5">
                      <ul>
                        <li class="text-left">
                          <span>ベイザー®</span>330,000<span>円</span>
                        </li>
                        <li class="text-left">
                          <span>ベイザー®×アキーセル</span>385,000<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">足首</td>
                    <td class="price-list-table__cost pi5">
                      <ul>
                        <li class="text-left">
                          <span>ベイザー®</span>330,000<span>円</span>
                        </li>
                        <li class="text-left">
                          <span>ベイザー®×アキーセル</span>385,000<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">ふくらはぎ＋足首</td>
                    <td class="price-list-table__cost pi5">
                      <ul>
                        <li class="text-left">
                          <span>ベイザー®</span>440,000<span>円</span>
                        </li>
                        <li class="text-left">
                          <span>ベイザー®×アキーセル</span>517,000<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                </tbody>
              </table>

              <table class="price-list-table option">
                <caption class="price-list-table__caption center">オプション</caption>
                <tbody>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">術後インディバ 30分</td>
                    <td class="price-list-table__cost">7,700<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">術後インディバ 30分</td>
                    <td class="price-list-table__cost">9,350<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">麻酔・処方代</td>
                    <td class="price-list-table__cost">66,000～121,000<span>円</span></td>
                  </tr>
                </tbody>
              </table>
            </div><!-- price-list-bottom__content -->

            <!-- 豊胸・バスト整形 -->
            <div class="price-list-bottom__content" id="cosmetic-surgery-3">
              <div class="price-list-bottom__content__headline">
                <p class="price-list-bottom__content__headline--text">豊胸・バスト整形</p>
                <a href="" class="price-list-btn">施術詳細を見る</a>
              </div>

              <table class="price-list-table">
                <caption class="price-list-table__caption center">コンデンスリッチファット（CRF）豊胸</caption>
                <tbody>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">
                      <p>各部位ごとの脂肪吸引料金に加算</p>
                      <ul>
                        <li class="link"><a href="" target=_blank>（※脂肪吸引項目🔗）</a></li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost pi5">+660,000<span>円</span></td>
                  </tr>
                </tbody>
              </table>

              <table class="price-list-table option">
                <caption class="price-list-table__caption center">オプション</caption>
                <tbody>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">血流改善薬　1か月分</td>
                    <td class="price-list-table__cost">16,500<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">
                      <p>静脈麻酔</p>
                      <ul>
                        <li>（範囲により異なります）</li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">55,000～77,000<span>円</span></td>
                  </tr>
                </tbody>
              </table>

              <table class="price-list-table">
                <caption class="price-list-table__caption center">陥没乳頭</caption>
                <tbody>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">陥没乳頭</td>
                    <td class="price-list-table__cost pi5">ご相談ください</td>
                  </tr>
                </tbody>
              </table>

              <table class="price-list-table">
                <caption class="price-list-table__caption center">乳頭縮小</caption>
                <tbody>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">乳頭縮小</td>
                    <td class="price-list-table__cost pi5">275,000<span>円</span></td>
                  </tr>
                </tbody>
              </table>

              <table class="price-list-table">
                <caption class="price-list-table__caption center">乳輪縮小</caption>
                <tbody>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">乳輪縮小</td>
                    <td class="price-list-table__cost pi5">275,000<span>円</span></td>
                  </tr>
                </tbody>
              </table>

              <table class="price-list-table">
                <caption class="price-list-table__caption center">他院バックインプラント</caption>
                <tbody>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">他院バックインプラント</td>
                    <td class="price-list-table__cost pi5">330,000<span>円</span></td>
                  </tr>
                </tbody>
              </table>

              <table class="price-list-table option">
                <caption class="price-list-table__caption center">オプション</caption>
                <tbody>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">術後インディバ　30分</td>
                    <td class="price-list-table__cost">7,700<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">拘縮予防薬　1ヶ月分</td>
                    <td class="price-list-table__cost">5,500<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">静脈麻酔</td>
                    <td class="price-list-table__cost">33,000～66,000<span>円</span></td>
                  </tr>
                </tbody>
              </table>
            </div><!-- price-list-bottom__content -->

            <!-- フェイスリフト -->
            <div class="price-list-bottom__content" id="cosmetic-surgery-4">
              <div class="price-list-bottom__content__headline">
                <p class="price-list-bottom__content__headline--text">フェイスリフト</p>
                <a href="" class="price-list-btn">施術詳細を見る</a>
              </div>

              <table class="price-list-table">
                <caption class="price-list-table__caption center">シンシアシグネチャーフェイスリフト</caption>
                <tbody>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">シンシアシグネチャーフェイスリフト</td>
                    <td class="price-list-table__cost pi5">
                      <ul>
                        <li class="text-left">
                          <span></span>770,000<span>円</span>
                        </li>
                        <li class="text-left">
                          <span>又吉総院長による施術</span>990,000<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                </tbody>
              </table>

              <table class="price-list-table option">
                <caption class="price-list-table__caption center">オプション</caption>
                <tbody>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">
                      <p>術後インディバ 30分 1回</p>
                      <ul>
                        <li>（施術日から1ヶ月以内の方）</li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">7,700<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">
                      <p>術後インディバ 30分 1回</p>
                      <ul>
                        <li>（施術日から1ヶ月過ぎた方）</li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">9,350<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">麻酔代</td>
                    <td class="price-list-table__cost">88,000〜121,000<span>円</span></td>
                  </tr>
                </tbody>
              </table>

              <table class="price-list-table">
                <caption class="price-list-table__caption">頬・アゴ下<br class="pc-hidden"> ベイザー®×アキーセル脂肪吸引</caption>
                <tbody>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">
                      <p>頬・アゴ下 ベイザー®×アキーセル脂肪吸引</p>
                      <ul>
                        <li>※シンシアシグネチャーフェイスリフトと同時施術の場合</li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">330,000<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">お顔の脂肪注入(マイクロCRF注入)</td>
                    <td class="price-list-table__cost pi5">
                      <ul>
                        <li>
                          <span>（1箇所）</span>231,000<span>円</span>
                        </li>
                        <li>
                          <span>（2箇所）</span>264,000<span>円</span>
                        </li>
                        <li>
                          <span>（3箇所）</span>297,000<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                </tbody>
              </table>

              <table class="price-list-table">
                <caption class="price-list-table__caption center">トータルフェイスリフトSMAS法</caption>
                <tbody>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">トータル（フル）フェイスリフト</td>
                    <td class="price-list-table__cost">440,000<span>円</span></td>
                  </tr>
                </tbody>
              </table>

              <table class="price-list-table option">
                <caption class="price-list-table__caption center">オプション</caption>
                <tbody>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">
                      <p>術後インディバ 30分 1回</p>
                      <ul>
                        <li>（施術日から1ヶ月以内の方）</li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">7,700<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">
                      <p>術後インディバ 30分 1回</p>
                      <ul>
                        <li>（施術日から1ヶ月過ぎた方）</li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">9,350<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">麻酔代</td>
                    <td class="price-list-table__cost">33,000〜66,000<span>円</span></td>
                  </tr>
                </tbody>
              </table>

              <table class="price-list-table">
                <caption class="price-list-table__caption center">部分フェイスリフト</caption>
                <tbody>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">前額リフト</td>
                    <td class="price-list-table__cost">440,000<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">ミニリフト（こめかみリフト）</td>
                    <td class="price-list-table__cost">250,800<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">ミニリフト（頬リフト）</td>
                    <td class="price-list-table__cost">330,000<span>円</span></td>
                  </tr>
                </tbody>
              </table>

              <table class="price-list-table option">
                <caption class="price-list-table__caption center">オプション</caption>
                <tbody>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">
                      <p>術後インディバ 30分 1回</p>
                      <ul>
                        <li>（施術日から1ヶ月以内の方）</li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">7,700<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">
                      <p>術後インディバ 30分 1回</p>
                      <ul>
                        <li>（施術日から1ヶ月過ぎた方）</li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">9,350<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">麻酔代</td>
                    <td class="price-list-table__cost">33,000〜66,000<span>円</span></td>
                  </tr>
                </tbody>
              </table>
            </div><!-- price-list-bottom__content -->

            <!-- 二重まぶた・二重形成術・目元 -->
            <div class="price-list-bottom__content" id="cosmetic-surgery-5">
              <div class="price-list-bottom__content__headline">
                <p class="price-list-bottom__content__headline--text">二重まぶた・二重形成術・目元</p>
                <a href="" class="price-list-btn">施術詳細を見る</a>
              </div>

              <table class="price-list-table">
                <caption class="price-list-table__caption">
                  セミプレミアムクイック法<br class="pc-hidden">（1年保証付き）<br>
                  <span class="small">※又吉総院長による<br class="pc-hidden">「セミプレミアムクイック法」はございません。</span>
                </caption>
                <tbody>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">1線留</td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span>（片目）</span>27,500<span>円</span>
                        </li>
                        <li>
                          <span>（両目）</span>33,000<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">2線留</td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span>（片目）</span>33,000<span>円</span>
                        </li>
                        <li>
                          <span>（両目）</span>51,700<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                </tbody>
              </table>

              <table class="price-list-table">
                <caption class="price-list-table__caption center">プレミアムクイック法（3年保証付き）</caption>
                <tbody>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">1線留</td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span>（片目）</span>55,000<span>円</span>
                        </li>
                        <li>
                          <span>（両目）</span>66,000<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">2線留</td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span>（片目）</span>66,000<span>円</span>
                        </li>
                        <li>
                          <span>（両目）</span>104,500<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">2線留：又吉総院長による手術</td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span>（片目）</span>110,000<span>円</span>
                        </li>
                        <li>
                          <span>（両目）</span>165,000<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">※8-0ナイロン（極細糸）を使用する場合</td>
                    <td class="price-list-table__cost">+11,000<span>円</span></td>
                  </tr>
                </tbody>
              </table>

              <table class="price-list-table">
                <caption class="price-list-table__caption center">シークレットプレミアム法（5年保証付き）</caption>
                <tbody>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">シークレットプレミアム法</td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span>（片目）</span>132,000<span>円</span>
                        </li>
                        <li>
                          <span>（両目）</span>198,000<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">※8-0ナイロン（極細糸）を使用する場合</td>
                    <td class="price-list-table__cost">+11,000<span>円</span></td>
                  </tr>
                </tbody>
              </table>

              <table class="price-list-table">
                <caption class="price-list-table__caption center">グランドプレミアム法（5年保証付き）</caption>
                <tbody>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">グランドプレミアム法（5年保証付き）</td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span>（片目）</span>132,000<span>円</span>
                        </li>
                        <li>
                          <span>（両目）</span>198,000<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">※8-0ナイロン（極細糸）を使用する場合</td>
                    <td class="price-list-table__cost">+11,000<span>円</span></td>
                  </tr>
                </tbody>
              </table>

              <table class="price-list-table">
                <caption class="price-list-table__caption center">埋没法の年齢による加算（全プラン）<br class="pc-hidden">※施術日の年齢</caption>
                <tbody>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">45歳以上</td>
                    <td class="price-list-table__cost">+11,000<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">50歳以上</td>
                    <td class="price-list-table__cost">+22,000<span>円</span></td>
                  </tr>
                </tbody>
              </table>

              <table class="price-list-table option">
                <caption class="price-list-table__caption center">オプション</caption>
                <tbody>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">1点追加につき</td>
                    <td class="price-list-table__cost">55,000～99,000<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">静脈麻酔</td>
                    <td class="price-list-table__cost">55,000<span>円</span></td>
                  </tr>

                  <tr class="price-list-table__item min-height-auto" colspan="2">
                    <td class="price-list-table__text--attention">
                    【当院での埋没法手術による糸を外す場合】<br>
                    ※詳しくはクリニックにお問い合わせください。
                    </td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">セミプレミアムクイック法</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li>
                          保証期間内の抜糸&ensp;<span>※保証回数消化</span>
                        </li>
                        <li>
                          保証期間外の抜糸</span>
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li class="text-left">
                          <span class="pc-hidden">保証期間内の抜糸&ensp;※保証回数消化</span>11,000<span>円</span>
                        </li>
                        <li class="text-left">
                          <span class="pc-hidden">保証期間外の抜糸</span>22,000<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">プレミアムクイック法</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li>
                          保証期間内の抜糸&ensp;<span>※保証回数消化</span>
                        </li>
                        <li>
                          保証期間外の抜糸</span>
                        </li>
                        <li>
                          保証期間外の抜糸</span>
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li class="text-left pl14">
                          <span class="pc-hidden">保証期間内の抜糸&ensp;※保証回数消化</span>22,000<span>円</span>
                        </li>
                        <li class="text-left pl14">
                          <span class="pc-hidden">保証期間外の抜糸</span>33,000<span>円</span>
                        </li>
                        <li class="text-left">
                          <span class="pc-hidden">保証期間外の抜糸</span>+22,000<span>円/線</span>
                        </li>
                      </ul>
                    </td>
                  </tr>

                  <tr class="price-list-table__item min-height-auto" colspan="2">
                    <td class="price-list-table__text--attention">【他院での埋没法手術による糸を外す場合】</td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">2線留まで</td>
                    <td class="price-list-table__cost">22,000<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">3線留以上<br>（1線あたり）</td>
                    <td class="price-list-table__cost">11,000<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">他院埋没法の抜糸＋当院で埋没法を行う場合</td>
                    <td class="price-list-table__cost">上記抜糸料金に<br>当院埋没法料金が加算されます</td>
                  </tr>
                  <tr class="price-list-table__item min-height-auto" colspan="2">
                    <td class="price-list-table__text--attention">※他院抜糸料金例：両目各2線留の場合、4線留となり44,000円</td>
                  </tr>
                </tbody>
              </table>

              <table class="price-list-table">
                <caption class="price-list-table__caption center">二重まぶた全切開法</caption>
                <tbody>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">二重まぶた全切開法</td>
                    <td class="price-list-table__cost">275,000<span>円</span></td>
                  </tr>
                </tbody>
              </table>

              <table class="price-list-table option">
                <caption class="price-list-table__caption center">オプション</caption>
                <tbody>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">まぶたのたるみ取り</td>
                    <td class="price-list-table__cost">55,000<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">静脈麻酔</td>
                    <td class="price-list-table__cost">55,000<span>円</span></td>
                  </tr>
                </tbody>
              </table>

              <table class="price-list-table">
                <caption class="price-list-table__caption center">マイクロカット脂肪除去</caption>
                <tbody>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">マイクロカット脂肪除去</td>
                    <td class="price-list-table__cost">104,500<span>円</span></td>
                  </tr>
                </tbody>
              </table>

              <table class="price-list-table">
                <caption class="price-list-table__caption center">目頭切開法</caption>
                <tbody>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">目頭切開法</td>
                    <td class="price-list-table__cost"><span>（両目）</span>220,000<span>円</span></td>
                  </tr>
                </tbody>
              </table>

              <table class="price-list-table option">
                <caption class="price-list-table__caption center">オプション</caption>
                <tbody>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">静脈麻酔</td>
                    <td class="price-list-table__cost">44,000<span>円</span></td>
                  </tr>
                </tbody>
              </table>

              <table class="price-list-table">
                <caption class="price-list-table__caption center">涙袋形成術</caption>
                <tbody>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">ジュビダーム®ウルトラ2</td>
                    <td class="price-list-table__cost"><span>0.55㏄&emsp;&emsp;</span>35,200<span>円</span></td>
                  </tr>
                </tbody>
              </table>
            </div><!-- price-list-bottom__content -->

            <!-- ワキガ・多汗症治療 -->
            <div class="price-list-bottom__content" id="cosmetic-surgery-6">
              <div class="price-list-bottom__content__headline">
                <p class="price-list-bottom__content__headline--text">ワキガ・多汗症治療</p>
                <a href="" class="price-list-btn">施術詳細を見る</a>
              </div>

              <table class="price-list-table">
                <caption class="price-list-table__caption text-15">
                  ワキガ治療<br class="pc-hidden"> ベイザー・フォーミュラシェーバーシステム<br>
                  <span class="small">※ワキガの料金は、すべて両ワキを治療する場合の料金です。</span>
                </caption>
                <tbody>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">ベイザー・フォーミュラシェーバーシステム</td>
                    <td class="price-list-table__cost">330,000<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">フォーミュラシェーバーシステム</td>
                    <td class="price-list-table__cost">275,000<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">フォーミュラシェーバーシステム（他院修正）</td>
                    <td class="price-list-table__cost">385,000<span>円</span></td>
                  </tr>
                </tbody>
              </table>

              <table class="price-list-table">
                <caption class="price-list-table__caption">
                  ワキガ治療<br class="pc-hidden"> 皮弁法（剪除法）<br>
                  <span class="small">※ワキガの料金は、すべて両ワキを治療する場合の料金です。</span>
                </caption>
                <tbody>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">皮弁法（剪除法）</td>
                    <td class="price-list-table__cost">275,000<span>円</span></td>
                  </tr>
                </tbody>
              </table>

              <table class="price-list-table">
                <caption class="price-list-table__caption">
                  多汗症治療<br class="pc-hidden"> ボツリヌストキシン注射<br class="pc-hidden">（ワキボトックス）<br>
                  <span class="small">※多汗症の料金は、すべて両ワキを治療する場合の料金です。</span>
                </caption>
                <tbody>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text pi-min">ボツリヌストキシン注射</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li>
                          韓国製ジェネリック&ensp;50単位
                        </li>
                        <li>
                          ボトックスビスタ®&emsp;50単位
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li class="text-left">
                          <span class="pc-hidden">韓国製ジェネリック&ensp;50単位</span>38,500<span>円</span>
                        </li>
                        <li class="text-left">
                          <span class="pc-hidden">ボトックスビスタ®&emsp;50単位</span>55,000<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item min-height-auto" colspan="2">
                    <td class="price-list-table__text--attention">※クリーム麻酔・笑気麻酔は料金に含まれます。</td>
                  </tr>
                </tbody>
              </table>
            </div><!-- price-list-bottom__content -->

            <!-- 糸によるリフトアップ治療 -->
            <div class="price-list-bottom__content" id="cosmetic-surgery-7">
              <div class="price-list-bottom__content__headline">
                <p class="price-list-bottom__content__headline--text">糸によるリフトアップ治療</p>
                <a href="" class="price-list-btn">施術詳細を見る</a>
              </div>

              <table class="price-list-table">
                <caption class="price-list-table__caption center">ミントリフト</caption>
                <tbody>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">4本×4本</td>
                    <td class="price-list-table__cost">440,000<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">5本×5本</td>
                    <td class="price-list-table__cost">506,000<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">静脈麻酔</td>
                    <td class="price-list-table__cost">44,000<span>円</span></td>
                  </tr>
                </tbody>
              </table>

              <table class="price-list-table">
                <caption class="price-list-table__caption center">TESSリフト（テスリフト）</caption>
                <tbody>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">1本<span class="pc-hidden-contents">/回</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li>
                          1回
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">48,400<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">2本<span class="pc-hidden-contents">/回</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li>
                          1回
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">89,100<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">4本<span class="pc-hidden-contents">/回</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li>
                          1回
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">178,200<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">6本<span class="pc-hidden-contents">/回</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li>
                          1回
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">207,900<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">8本<span class="pc-hidden-contents">/回</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li>
                          1回
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">273,900<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">10本<span class="pc-hidden-contents">/回</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li>
                          モニター
                        </li>
                        <li class="center">
                          1回
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li class="text-left">
                          <span class="pc-hidden">モニター</span>250,800<span>円</span>
                        </li>
                        <li class="text-left">
                          <span class="pc-hidden">1回</span>327,800<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">笑気麻酔</td>
                    <td class="price-list-table__cost">22,000<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">静脈麻酔</td>
                    <td class="price-list-table__cost">44,000<span>円</span></td>
                  </tr>
                </tbody>
              </table>

              <table class="price-list-table">
                <caption class="price-list-table__caption center">N-COGスパイラル</caption>
                <tbody>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">6本（片側3本×2）</td>
                    <td class="price-list-table__cost">121,000<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">12本（片側6本×2）</td>
                    <td class="price-list-table__cost">217,800<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">追加1本につき</td>
                    <td class="price-list-table__cost">+24,200<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">ブロック注射麻酔</td>
                    <td class="price-list-table__cost">3,300<span>円</span></td>
                  </tr>
                </tbody>
              </table>

              <table class="price-list-table">
                <caption class="price-list-table__caption center">PDOモノスレッド（ショッピングリフト）</caption>
                <tbody>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">10本</td>
                    <td class="price-list-table__cost">26,400<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">20本</td>
                    <td class="price-list-table__cost">52,800<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">30本</td>
                    <td class="price-list-table__cost">69,300<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">40本</td>
                    <td class="price-list-table__cost">79,200<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">50本</td>
                    <td class="price-list-table__cost">99,000<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">60本</td>
                    <td class="price-list-table__cost">118,800<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">80本</td>
                    <td class="price-list-table__cost">145,200<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">100本</td>
                    <td class="price-list-table__cost">181,500<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">ブロック注射麻酔</td>
                    <td class="price-list-table__cost">3,300<span>円</span></td>
                  </tr>
                </tbody>
              </table>

              <table class="price-list-table">
                <caption class="price-list-table__caption center">Derma Spring EYE（アイ・スレッド）</caption>
                <tbody>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">10本</td>
                    <td class="price-list-table__cost">49,500<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">20本</td>
                    <td class="price-list-table__cost">79,200<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">ブロック注射麻酔</td>
                    <td class="price-list-table__cost">3,300<span>円</span></td>
                  </tr>
                </tbody>
              </table>
            </div><!-- price-list-bottom__content -->

            <!-- 小顔・輪郭形成 -->
            <div class="price-list-bottom__content" id="cosmetic-surgery-8">
              <div class="price-list-bottom__content__headline">
                <p class="price-list-bottom__content__headline--text">小顔・輪郭形成</p>
                <a href="" class="price-list-btn">施術詳細を見る</a>
              </div>

              <table class="price-list-table">
                <caption class="price-list-table__caption center">BNLS 脂肪溶解注射</caption>
                <tbody>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">BNLS アルティメット</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          1cc
                        </li>
                        <li>
                          10㏄以上の場合 1㏄あたり
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li class="text-left">
                          <span class="pc-hidden">1cc</span>3,300<span>円</span>
                        </li>
                        <li class="text-left">
                          <span class="pc-hidden">10㏄以上の場合 1㏄あたり</span>2,970<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                </tbody>
              </table>

              <table class="price-list-table option">
                <caption class="price-list-table__caption center">オプション</caption>
                <tbody>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">34G針（超極細針）</td>
                    <td class="price-list-table__cost">1,100<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">27Gマイクロカニューレ</td>
                    <td class="price-list-table__cost">3,300<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">クリーム麻酔</td>
                    <td class="price-list-table__cost">3,300<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">笑気麻酔</td>
                    <td class="price-list-table__cost">3,300<span>円</span></td>
                  </tr>
                </tbody>
              </table>

              <table class="price-list-table">
                <caption class="price-list-table__caption center">アゴ（おとがい）形成術</caption>
                <tbody>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">
                      <ul>
                        <li>ヒアルロン酸 </li>
                        <li>（ジュビダームビスタ®ボリューマXC）</li>
                      </ul>
                    </td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          1cc
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li class="text-left">
                          <span class="pc-hidden">1cc</span>77,000<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">
                      <ul>
                        <li>ヒアルロン酸 </li>
                        <li>（ジュビダームビスタ®ボラックスXC）</li>
                      </ul>
                    </td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          1cc
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li class="text-left">
                          <span class="pc-hidden">1cc</span>77,000<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                </tbody>
              </table>

              <table class="price-list-table">
                <caption class="price-list-table__caption center">アゴ（おとがい）形成術</caption>
                <tbody>
                  <tr class="price-list-table__item min-height-auto" colspan="2">
                    <td class="price-list-table__text--blue">ウルトラセルZi【ドット＋リニア】</td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">全顔 （目周り含む）/<br>ドット 430shot + リニア 380shot</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          トライアル
                        </li>
                        <li class="center">
                          1cc
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li class="text-left">
                          <span class="pc-hidden">トライアル</span>77,000<span>円</span>
                        </li>
                        <li class="text-left">
                          <span class="pc-hidden">1cc</span>99,000<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item min-height-auto" colspan="2">
                    <td class="price-list-table__text--blue">ウルトラセルZi【ドットハイフ】</td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">全顔 （目周り含む）/250shot</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          トライアル
                        </li>
                        <li class="center">
                          1cc
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li class="text-left">
                          <span class="pc-hidden">トライアル</span>23,100<span>円</span>
                        </li>
                        <li class="text-left">
                          <span class="pc-hidden">1cc</span>45,100<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">全顔 （目周り含む）/430shot</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          トライアル
                        </li>
                        <li class="center">
                          1cc
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li class="text-left">
                          <span class="pc-hidden">トライアル</span>55,000<span>円</span>
                        </li>
                        <li class="text-left">
                          <span class="pc-hidden">1cc</span>77,000<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">全顔 （目周り含む）/630shot</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          トライアル
                        </li>
                        <li class="center">
                          1cc
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li class="center">
                          <span class="pc-hidden">トライアル</span>88,000<span>円</span>
                        </li>
                        <li class="text-left">
                          <span class="pc-hidden">1cc</span>110,000<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item min-height-auto" colspan="2">
                    <td class="price-list-table__text--blue">ウルトラセルZi【リニアハイフ】</td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">頬＋ アゴ下/380shot</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          トライアル
                        </li>
                        <li class="center">
                          1cc
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li class="text-left">
                          <span class="pc-hidden">トライアル</span>33,000<span>円</span>
                        </li>
                        <li class="text-left">
                          <span class="pc-hidden">1cc</span>38,500<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">その他 二の腕・膝上 ・ボディ<br>/300shot （目安）</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          1cc
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li class="text-left">
                          <span class="pc-hidden">1cc</span>33,000<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">その他 二の腕・膝上 ・ボディ<br>/600shot （目安）</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          1cc
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li class="text-left">
                          <span class="pc-hidden">1cc</span>63,800<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item min-height-auto" colspan="2">
                    <td class="price-list-table__text--attention-min">
                      ※医師によるプレミアム照射は、＋55,000円追加となります（又吉総院長による施術は除く）<br>
                      ※ナース照射（オーダーメイド）は、＋11,000円追加となります<br>
                      ※[リピーター割引対象施術]3か月以内に再施術の場合はトライアル価格でお受けいただけます
                    </td>
                  </tr>
                  <tr class="price-list-table__item min-height-auto" colspan="2">
                    <td class="price-list-table__text--blue">ウルトラセルQ+（渋谷院4階）</td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">ドットハイフ（全顔、目周り含む）430shot</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          1cc
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li class="text-left">
                          <span class="pc-hidden">1cc</span>44,000<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">リニアハイフ（頬+アゴ下）380shot</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          1cc
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li class="text-left">
                          <span class="pc-hidden">1cc</span>22,000<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item min-height-auto" colspan="2">
                    <td class="price-list-table__text--attention-min">
                      ※医師による施術は上記価格＋55,000円となります。（又吉総院長による施術は除く） 
                    </td>
                  </tr>
                </tbody>
              </table>

              <table class="price-list-table option">
                <caption class="price-list-table__caption center">オプション</caption>
                <tbody>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">34G針（超極細針）</td>
                    <td class="price-list-table__cost">1,100<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">27Gマイクロカニューレ</td>
                    <td class="price-list-table__cost">3,300<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">クリーム麻酔</td>
                    <td class="price-list-table__cost">3,300<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">笑気麻酔</td>
                    <td class="price-list-table__cost">3,300<span>円</span></td>
                  </tr>
                </tbody>
              </table>

              <table class="price-list-table">
                <caption class="price-list-table__caption center">デンシティ</caption>
                <tbody>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text pi-min">
                    頬＋アゴ下　300shot<br>
                    <span class="min">【リピーター割引対象施術】<br>
                    6ヶ月以内に再施術の場合はトライアル価格でお受けいただけます。</span>
                    </td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          トライアル
                        </li>
                        <li class="center">
                          1cc
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li class="text-left">
                          <span class="pc-hidden">トライアル</span>77,000<span>円</span>
                        </li>
                        <li class="text-left">
                          <span class="pc-hidden">1cc</span>99,000<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">フェイスライン＋アゴ下　150shot</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          1cc
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li class="text-left">
                          <span class="pc-hidden">1cc</span>49,500<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item min-height-auto" colspan="2">
                    <td class="price-list-table__text--attention">※医師による施術は上記価格＋55,000円となります。（又吉総院長による施術は除く）</td>
                  </tr>
                </tbody>
              </table>

              <table class="price-list-table option">
                <caption class="price-list-table__caption center">オプション</caption>
                <tbody>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">額全体＋首　100shot</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          モノポーラ
                        </li>
                        <li class="center">
                          モノポーラ
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li class="text-left">
                          <span class="pc-hidden">モノポーラ</span>22,000<span>円</span>
                        </li>
                        <li class="text-left">
                          <span class="pc-hidden">モノポーラ</span>33,000<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                </tbody>
              </table>

              <table class="price-list-table">
                <caption class="price-list-table__caption center">デンシティアイ</caption>
                <tbody>
                  <tr class="price-list-table__item row3">
                    <td class="price-list-table__text">ドクター照射　300shot（点眼麻酔込）</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          1回
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li class="text-left">
                          <span class="pc-hidden">1回</span>82,500<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                </tbody>
              </table>

              <table class="price-list-table option">
                <caption class="price-list-table__caption center">オプション</caption>
                <tbody>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">笑気麻酔</td>
                    <!-- <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          モノポーラ
                        </li>
                        <li class="center">
                          モノポーラ
                        </li>
                      </ul>
                    </td> -->
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          22,000<span>円</span>
                        </li>
                        <li>
                          33,000<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                </tbody>
              </table>

              <table class="price-list-table">
                <caption class="price-list-table__caption center">エラボトックス</caption>
                <tbody>
                  <tr class="price-list-table__item row3">
                    <td class="price-list-table__text">エラ(50単位)</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          韓国製ジェネリック
                        </li>
                        <li class="center">
                          ボトックスビスタ
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li class="text-left">
                          <span class="pc-hidden">韓国製ジェネリック</span>33,000<span>円</span>
                        </li>
                        <li class="text-left">
                          <span class="pc-hidden">ボトックスビスタ</span>38,500<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item row3">
                    <td class="price-list-table__text">エラ(100単位)</td>
                    <td class="price-list-table__middle min-height-12">
                      <ul>
                        <li class="center">
                          韓国製ジェネリック
                        </li>
                        <li class="center">
                          韓国製ジェネリック（モニター）
                        </li>
                        <li class="center">
                          ボトックスビスタ
                        </li>
                        <li class="center">
                          ボトックスビスタ（モニター）
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost min-height-12">
                      <ul>
                        <li class="text-left">
                          <span class="pc-hidden">韓国製ジェネリック</span>57,750<span>円</span>
                        </li>
                        <li class="text-left">
                          <span class="pc-hidden">韓国製ジェネリック（モニター）</span>44,000<span>円</span>
                        </li>
                        <li class="text-left">
                          <span class="pc-hidden">ボトックスビスタ</span>70,400<span>円</span>
                        </li>
                        <li class="text-left">
                          <span class="pc-hidden">ボトックスビスタ（モニター）</span>55,000<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item row3">
                    <td class="price-list-table__text">エラ(100単位)</td>
                    <td class="price-list-table__middle min-height-12">
                      <ul>
                        <li class="center">
                          韓国製ジェネリック
                        </li>
                        <li class="center">
                          韓国製ジェネリック（モニター）
                        </li>
                        <li class="center">
                          ボトックスビスタ
                        </li>
                        <li class="center">
                          ボトックスビスタ（モニター）
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost min-height-12">
                      <ul>
                        <li class="text-left">
                          <span class="pc-hidden">韓国製ジェネリック</span>80,300<span>円</span>
                        </li>
                        <li class="text-left">
                          <span class="pc-hidden">韓国製ジェネリック（モニター）</span>60,500<span>円</span>
                        </li>
                        <li class="text-left">
                          <span class="pc-hidden">ボトックスビスタ</span>92,400<span>円</span>
                        </li>
                        <li class="text-left">
                          <span class="pc-hidden">ボトックスビスタ（モニター）</span>77,000<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                </tbody>
              </table>

              <table class="price-list-table">
                <caption class="price-list-table__caption center">頬・アゴ下</caption>
                <tbody>
                  <tr class="price-list-table__item row3">
                    <td class="price-list-table__text">頬・アゴ下</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          ベイザー®
                        </li>
                        <li class="center">
                          ベイザー®×アキーセル
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li class="text-left">
                          <span class="pc-hidden">ベイザー®</span>440,000<span>円</span>
                        </li>
                        <li class="text-left">
                          <span class="pc-hidden">ベイザー®×アキーセル</span>495,000<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div><!-- price-list-bottom__content -->

            <!-- 鼻の整形 -->
            <div class="price-list-bottom__content" id="cosmetic-surgery-9">
              <div class="price-list-bottom__content__headline">
                <p class="price-list-bottom__content__headline--text">鼻の整形</p>
                <a href="" class="price-list-btn">施術詳細を見る</a>
              </div>

              <table class="price-list-table">
                <caption class="price-list-table__caption center">小鼻のボトックス</caption>
                <tbody>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">小鼻のボトックス</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          韓国製ジェネリック
                        </li>
                        <li>
                          ボトックスビスタ
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li class="text-left">
                          <span class="pc-hidden">韓国製ジェネリック</span>22,000<span>円</span>
                        </li>
                        <li class="text-left">
                          <span class="pc-hidden">ボトックスビスタ</span>26,400<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                </tbody>
              </table>

              <table class="price-list-table">
                <caption class="price-list-table__caption center">プロテーゼによる隆鼻術</caption>
                <tbody>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">隆鼻術（プロテーゼ）</td>
                    <td class="price-list-table__cost">192,500<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">隆鼻術（プロテーゼ）＋鼻尖修正</td>
                    <td class="price-list-table__cost">244,200<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">鼻プロテーゼ 型取り</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          1回
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li class="text-left">
                          <span class="pc-hidden">1回</span>11,000<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                </tbody>
              </table>

              <table class="price-list-table">
                <caption class="price-list-table__caption center">ヒアルロン酸による隆鼻術</caption>
                <tbody>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">ヒアルロン酸<br>（ジュビダームビスタ®ボリューマXC）</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          1㏄
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li class="text-left">
                          <span class="pc-hidden">1㏄</span>77,000<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">ヒアルロン酸<br>（ジュビダームビスタ®ボラックスXC）</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          1㏄
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li class="text-left">
                          <span class="pc-hidden">1㏄</span>77,000<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                </tbody>
              </table>

              <table class="price-list-table">
                <caption class="price-list-table__caption center">鼻尖修正</caption>
                <tbody>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">鼻尖修正</td>
                    <td class="price-list-table__cost">77,000<span>円</span></td>
                  </tr>
                </tbody>
              </table>

              <table class="price-list-table">
                <caption class="price-list-table__caption center">小鼻縮小術</caption>
                <tbody>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">鼻尖修正</td>
                    <td class="price-list-table__cost">77,000<span>円</span></td>
                  </tr>
                </tbody>
              </table>
            </div><!-- price-list-bottom__content -->

            <!-- 口の整形 -->
            <div class="price-list-bottom__content" id="cosmetic-surgery-10">
              <div class="price-list-bottom__content__headline">
                <p class="price-list-bottom__content__headline--text">口の整形</p>
                <a href="" class="price-list-btn">施術詳細を見る</a>
              </div>

              <table class="price-list-table">
                <caption class="price-list-table__caption center">笑顔のボトックス</caption>
                <tbody>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">笑顔のボトックス</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          韓国製ジェネリック
                        </li>
                        <li class="center">
                          ボトックスビスタ
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li class="text-left">
                          <span class="pc-hidden">韓国製ジェネリック</span>26,400<span>円</span>
                        </li>
                        <li class="text-left">
                          <span class="pc-hidden">ボトックスビスタ</span>31,900<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                </tbody>
              </table>

              <table class="price-list-table">
                <caption class="price-list-table__caption center">人中のボトックス</caption>
                <tbody>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">人中のボトックス治療</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          韓国製ジェネリック
                        </li>
                        <li class="center">
                          ボトックスビスタ
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li class="text-left">
                          <span class="pc-hidden">韓国製ジェネリック</span>22,000<span>円</span>
                        </li>
                        <li class="text-left">
                          <span class="pc-hidden">ボトックスビスタ</span>26,400<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                </tbody>
              </table>

              <table class="price-list-table">
                <caption class="price-list-table__caption center">ガミースマイル</caption>
                <tbody>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">人中のボトックス治療</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          韓国製ジェネリック
                        </li>
                        <li class="center">
                          ボトックスビスタ
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li class="text-left">
                          <span class="pc-hidden">韓国製ジェネリック</span>22,000<span>円</span>
                        </li>
                        <li class="text-left">
                          <span class="pc-hidden">ボトックスビスタ</span>26,400<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                </tbody>
              </table>

              <table class="price-list-table">
                <caption class="price-list-table__caption center">唇のヒアルロン酸注入</caption>
                <tbody>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">ヒアルロン酸（ジュビダーム®ウルトラXC）</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          1㏄
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li class="text-left">
                          <span class="pc-hidden">1㏄</span>44,000<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">ヒアルロン酸（ジュビダーム®ウルトラ2）</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          1㏄
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li class="text-left">
                          <span class="pc-hidden">0.55㏄</span>35,200<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                </tbody>
              </table>

              <table class="price-list-table">
                <caption class="price-list-table__caption center">口唇縮小術</caption>
                <tbody>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">上・下いずれか</td>
                    <td class="price-list-table__cost">220,000<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">上・下両方</td>
                    <td class="price-list-table__cost">330,000<span>円</span></td>
                  </tr>
                </tbody>
              </table>
            </div><!-- price-list-bottom__content -->
          </div><!-- price-list-bottom__body -->
        </div><!-- price-list-bottom__container -->
      </div><!-- price-list-bottom__inner -->
    </div><!-- price-list-bottom -->

    <!-- 美容皮膚科 -->
    <div class="price-list-bottom" id="bottom-panel-dermatology" hidden>
      <div class="price-list-bottom__inner">
        <div class="price-list__title">
          <h2 class="price-list__title--en">Cosmetic <br class='pc-hidden'>Dermatology</h2>
          <p class="price-list__title--ja">美容皮膚科</p>
        </div><!-- price-list__title -->

        <div class="price-list-bottom__container">
          <aside class="price-list-bottom__side">
            <p class="price-list-bottom__side--index">INDEX</p>
            <!-- 共通 -->
            <div class="price-list-bottom__item">
              <p class="price-list-bottom__item--title">共通</p>
              <ul class="price-list-bottom__list">
                <li>
                  <a href="" class="price-list-bottom__link">
                    <span>
                      <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/price-list/icon-bottom-arrow.svg" alt="" width="6" height="6">
                    </span>
                    <span class="price-list-bottom__link--text">初診料・再診料</span>
                  </a>
                </li>
                <li>
                  <a href="" class="price-list-bottom__link">
                    <span>
                      <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/price-list/icon-bottom-arrow.svg" alt="" width="6" height="6">
                    </span>
                    <span class="price-list-bottom__link--text">麻酔・検査費用</span>
                  </a>
                </li>
              </ul>
            </div><!-- price-list-bottom__item -->

            <!-- 美容外科 -->
            <div class="price-list-bottom__item">
              <p class="price-list-bottom__item--title">美容外科</p>
              <ul class="price-list-bottom__list">
                <li>
                  <a href="#cosmetic-surgery-1" class="price-list-bottom__link">
                    <span>
                      <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/price-list/icon-bottom-arrow.svg" alt="" width="6" height="6">
                    </span>
                    <span class="price-list-bottom__link--text">目元のエイジングケア治療</span>
                  </a>
                </li>
                <li>
                  <a href="#cosmetic-surgery-2" class="price-list-bottom__link">
                    <span>
                      <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/price-list/icon-bottom-arrow.svg" alt="" width="6" height="6">
                    </span>
                    <span class="price-list-bottom__link--text">脂肪吸引</span>
                  </a>
                </li>
                <li>
                  <a href="#cosmetic-surgery-3" class="price-list-bottom__link">
                    <span>
                      <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/price-list/icon-bottom-arrow.svg" alt="" width="6" height="6">
                    </span>
                    <span class="price-list-bottom__link--text">豊胸・バスト整形</span>
                  </a>
                </li>
                <li>
                  <a href="#cosmetic-surgery-4" class="price-list-bottom__link">
                    <span>
                      <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/price-list/icon-bottom-arrow.svg" alt="" width="6" height="6">
                    </span>
                    <span class="price-list-bottom__link--text">フェイスリフト</span>
                  </a>
                </li>
                <li>
                  <a href="#cosmetic-surgery-5" class="price-list-bottom__link">
                    <span>
                      <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/price-list/icon-bottom-arrow.svg" alt="" width="6" height="6">
                    </span>
                    <span class="price-list-bottom__link--text">二重まぶた・二重形成術・目元</span>
                  </a>
                </li>
                <li>
                  <a href="#cosmetic-surgery-6" class="price-list-bottom__link">
                    <span>
                      <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/price-list/icon-bottom-arrow.svg" alt="" width="6" height="6">
                    </span>
                    <span class="price-list-bottom__link--text">ワキガ・多汗症治療</span>
                  </a>
                </li>
                <li>
                  <a href="#cosmetic-surgery-7" class="price-list-bottom__link">
                    <span>
                      <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/price-list/icon-bottom-arrow.svg" alt="" width="6" height="6">
                    </span>
                    <span class="price-list-bottom__link--text">糸によるリフトアップ治療</span>
                  </a>
                </li>
                <li>
                  <a href="#cosmetic-surgery-8" class="price-list-bottom__link">
                    <span>
                      <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/price-list/icon-bottom-arrow.svg" alt="" width="6" height="6">
                    </span>
                    <span class="price-list-bottom__link--text">小顔・輪郭形成</span>
                  </a>
                </li>
                <li>
                  <a href="#cosmetic-surgery-9" class="price-list-bottom__link">
                    <span>
                      <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/price-list/icon-bottom-arrow.svg" alt="" width="6" height="6">
                    </span>
                    <span class="price-list-bottom__link--text">鼻の整形</span>
                  </a>
                </li>
                <li>
                  <a href="#cosmetic-surgery-10" class="price-list-bottom__link">
                    <span>
                      <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/price-list/icon-bottom-arrow.svg" alt="" width="6" height="6">
                    </span>
                    <span class="price-list-bottom__link--text">口の整形</span>
                  </a>
                </li>
              </ul>
            </div><!-- price-list-bottom__item -->

            <!-- 美容皮膚科 -->
            <div class="price-list-bottom__item">
              <p class="price-list-bottom__item--title">美容皮膚科</p>
              <ul class="price-list-bottom__list">
                <li>
                  <a href="#cosmetic-dermatology-1" class="price-list-bottom__link">
                    <span>
                      <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/price-list/icon-bottom-arrow.svg" alt="" width="6" height="6">
                    </span>
                    <span class="price-list-bottom__link--text">シワ・たるみ治療</span>
                  </a>
                </li>
                <li>
                  <a href="#cosmetic-dermatology-2" class="price-list-bottom__link">
                    <span>
                      <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/price-list/icon-bottom-arrow.svg" alt="" width="6" height="6">
                    </span>
                    <span class="price-list-bottom__link--text">シミ・そばかす・くすみなどの美白・美肌治療</span>
                  </a>
                </li>
                <li>
                  <a href="#cosmetic-dermatology-3" class="price-list-bottom__link">
                    <span>
                      <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/price-list/icon-bottom-arrow.svg" alt="" width="6" height="6">
                    </span>
                    <span class="price-list-bottom__link--text">肝斑・美白治療</span>
                  </a>
                </li>
                <li>
                  <a href="#cosmetic-dermatology-4" class="price-list-bottom__link">
                    <span>
                      <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/price-list/icon-bottom-arrow.svg" alt="" width="6" height="6">
                    </span>
                    <span class="price-list-bottom__link--text">ニキビ・ニキビ痕治療</span>
                  </a>
                </li>
                <li>
                  <a href="#cosmetic-dermatology-5" class="price-list-bottom__link">
                    <span>
                      <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/price-list/icon-bottom-arrow.svg" alt="" width="6" height="6">
                    </span>
                    <span class="price-list-bottom__link--text">赤ら顔（酒さ）・毛細血管拡張症治療</span>
                  </a>
                </li>
                <li>
                  <a href="#cosmetic-dermatology-6" class="price-list-bottom__link">
                    <span>
                      <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/price-list/icon-bottom-arrow.svg" alt="" width="6" height="6">
                    </span>
                    <span class="price-list-bottom__link--text">毛孔性苔癬治療</span>
                  </a>
                </li>
                <li>
                  <a href="#cosmetic-dermatology-7" class="price-list-bottom__link">
                    <span>
                      <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/price-list/icon-bottom-arrow.svg" alt="" width="6" height="6">
                    </span>
                    <span class="price-list-bottom__link--text">いぼ・ほくろ除去</span>
                  </a>
                </li>
              </ul>
            </div><!-- price-list-bottom__item -->

            <!-- 注入施術 -->
            <div class="price-list-bottom__item">
              <p class="price-list-bottom__item--title">注入施術</p>
              <ul class="price-list-bottom__list">
                <li>
                  <a href="#injection-treatment-1" class="price-list-bottom__link">
                    <span>
                      <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/price-list/icon-bottom-arrow.svg" alt="" width="6" height="6">
                    </span>
                    <span class="price-list-bottom__link--text">美肌・リバースエイジング 注入治療</span>
                  </a>
                </li>
                <li>
                  <a href="#injection-treatment-2" class="price-list-bottom__link">
                    <span>
                      <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/price-list/icon-bottom-arrow.svg" alt="" width="6" height="6">
                    </span>
                    <span class="price-list-bottom__link--text">ヒアルロン酸注入</span>
                  </a>
                </li>
                <li>
                  <a href="#injection-treatment-3" class="price-list-bottom__link">
                    <span>
                      <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/price-list/icon-bottom-arrow.svg" alt="" width="6" height="6">
                    </span>
                    <span class="price-list-bottom__link--text">ボトックス注射</span>
                  </a>
                </li>
              </ul>
            </div><!-- price-list-bottom__item -->

            <!-- その他の施術 -->
            <div class="price-list-bottom__item">
              <p class="price-list-bottom__item--title">その他の施術</p>
              <ul class="price-list-bottom__list">
                <li>
                  <a href="#other-1" class="price-list-bottom__link">
                    <span>
                      <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/price-list/icon-bottom-arrow.svg" alt="" width="6" height="6">
                    </span>
                    <span class="price-list-bottom__link--text">痩身全身</span>
                  </a>
                </li>
                <li>
                  <a href="#other-2" class="price-list-bottom__link">
                    <span>
                      <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/price-list/icon-bottom-arrow.svg" alt="" width="6" height="6">
                    </span>
                    <span class="price-list-bottom__link--text">医療レーザー脱毛</span>
                  </a>
                </li>
                <li>
                  <a href="#other-3" class="price-list-bottom__link">
                    <span>
                      <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/price-list/icon-bottom-arrow.svg" alt="" width="6" height="6">
                    </span>
                    <span class="price-list-bottom__link--text">傷痕・刺青・タトゥー除去</span>
                  </a>
                </li>
                <li>
                  <a href="#other-4" class="price-list-bottom__link">
                    <span>
                      <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/price-list/icon-bottom-arrow.svg" alt="" width="6" height="6">
                    </span>
                    <span class="price-list-bottom__link--text">医療アートメイク</span>
                  </a>
                </li>
                <li>
                  <a href="#other-5" class="price-list-bottom__link">
                    <span>
                      <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/price-list/icon-bottom-arrow.svg" alt="" width="6" height="6">
                    </span>
                    <span class="price-list-bottom__link--text">毛髪再生</span>
                  </a>
                </li>
                <li>
                  <a href="#other-6" class="price-list-bottom__link">
                    <span>
                      <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/price-list/icon-bottom-arrow.svg" alt="" width="6" height="6">
                    </span>
                    <span class="price-list-bottom__link--text">男性のお悩み治療</span>
                  </a>
                </li>
                <li>
                  <a href="#other-7" class="price-list-bottom__link">
                    <span>
                      <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/price-list/icon-bottom-arrow.svg" alt="" width="6" height="6">
                    </span>
                    <span class="price-list-bottom__link--text">女性のお悩みに治療</span>
                  </a>
                </li>
                <li>
                  <a href="#other-8" class="price-list-bottom__link">
                    <span>
                      <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/price-list/icon-bottom-arrow.svg" alt="" width="6" height="6">
                    </span>
                    <span class="price-list-bottom__link--text">コスメ・美肌・美容アイテム</span>
                  </a>
                </li>
              </ul>
            </div><!-- price-list-bottom__item -->
          </aside><!-- price-list-bottom__side -->

          <div class="price-list-bottom__body">
            <!-- シワ・たるみ治療 -->
            <div class="price-list-bottom__content" id="cosmetic-dermatology-1">
              <div class="price-list-bottom__content__headline">
                <p class="price-list-bottom__content__headline--text">シワ・たるみ治療</p>
                <a href="" class="price-list-btn">施術詳細を見る</a>
              </div>

              <table class="price-list-table">
                <caption class="price-list-table__caption center">ウルセラ（Dr.HIFU）</caption>
                <tbody>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">(1) 眉毛の上 20shot（3mm）</td>
                    <td class="price-list-table__cost">66,000<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">(2) 目じり～コメカミ 20shot（3mm）</td>
                    <td class="price-list-table__cost">66,000<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">(3) 目の下 18shot（3mm）</td>
                    <td class="price-list-table__cost">66,000<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">(4) 頬 210shot（4.5mm130shot+3.0mm 80shot）</td>
                    <td class="price-list-table__cost">198,000<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">(5) 首・アゴ下　100shot<br class="pc-hidden">（4.5mm50shot+3.0mm 50shot）</td>
                    <td class="price-list-table__cost">132,000<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">顔(1)＋ (2)＋ (3)＋ (4) 268shot</td>
                    <td class="price-list-table__cost">242,000<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">顔＋（5）  368shot</td>
                    <td class="price-list-table__cost">330,000<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">追加40shot</td>
                    <td class="price-list-table__cost">55,000<span>円</span></td>
                  </tr>
                </tbody>
              </table>

              <table class="price-list-table option">
                <caption class="price-list-table__caption center">オプション</caption>
                <tbody>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">静脈麻酔</td>
                    <td class="price-list-table__cost">33,000<span>円</span></td>
                  </tr>
                </tbody>
              </table>

              <table class="price-list-table">
                <caption class="price-list-table__caption center">サーマクールFLX</caption>
                <tbody>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">
                      全顔（2時間以内に600shotを照射）<br>
                      <span class="min">サーマクールFLX　4.0平方センチ600shot</span>
                    </td>
                    <td class="price-list-table__cost">330,000<span>円</span></td>
                  </tr>
                </tbody>
              </table>

              <table class="price-list-table option">
                <caption class="price-list-table__caption center">オプション</caption>
                <tbody>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">静脈麻酔</td>
                    <td class="price-list-table__cost">33,000<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item min-height-auto" colspan="2">
                    <td class="price-list-table__text--attention">※最初麻酔を希望せず施術途中からの麻酔の場合、静脈麻酔料金は66,000円となります。</td>
                  </tr>
                </tbody>
              </table>

              <table class="price-list-table">
                <caption class="price-list-table__caption center">サーマクールアイ</caption>
                <tbody>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">
                      ドクター照射　450shot（点眼麻酔込）<br>
                      <span class="min">上まぶた＋下まぶた、上まぶた中心、下まぶた中心 から選択</span>
                    </td>
                    <td class="price-list-table__cost">165,000<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">又吉総院長による施術</td>
                    <td class="price-list-table__cost">187,000<span>円</span></td>
                  </tr>
                </tbody>
              </table>

              <table class="price-list-table option">
                <caption class="price-list-table__caption center">オプション</caption>
                <tbody>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">笑気麻酔</td>
                    <td class="price-list-table__cost">8,800<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">静脈麻酔</td>
                    <td class="price-list-table__cost">33,000<span>円</span></td>
                  </tr>
                </tbody>
              </table>

              <table class="price-list-table">
                <caption class="price-list-table__caption center">サーマクールFLX+ウルセラ <br class="pc-hidden">コンビネーション治療</caption>
                <tbody>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">ウルセラ＋サーマクールFLX 600shot 全顔</td>
                    <td class="price-list-table__cost">514,800<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">ウルセラ＋サーマクールFLX 600shot <br class="pc-hidden">全顔＋首・アゴ下</td>
                    <td class="price-list-table__cost">594,000<span>円</span></td>
                  </tr>
                </tbody>
              </table>

              <table class="price-list-table option">
                <caption class="price-list-table__caption center">オプション</caption>
                <tbody>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">静脈麻酔</td>
                    <td class="price-list-table__cost">44,000<span>円</span></td>
                  </tr>
                </tbody>
              </table>

              <table class="price-list-table">
                <caption class="price-list-table__caption center">【医療ハイフ(HIFU)】<br class="pc-hidden">ウルトラセルZi/ウルトラセルQ+</caption>
                <tbody>
                  <tr class="price-list-table__item min-height-auto"  colspan="2">
                    <td class="price-list-table__text--blue">
                      ウルトラセルZi【ドット＋リニア】<br>
                      <span class="min">※同日施術</span>
                    </td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">
                      全顔 （目周り含む）/<br>
                      ドット430shot + リニア 380shot
                    </td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          トライアル
                        </li>
                        <li class="center">
                          1回
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li class="text-left">
                          <span class="pc-hidden">トライアル</span>77,000<span>円</span>
                        </li>
                        <li class="text-left">
                          <span class="pc-hidden">1回</span>99,000<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item min-height-auto"  colspan="2">
                    <td class="price-list-table__text--attention-min">
                      ※医師によるプレミアム照射は、＋55,000円追加となります（又吉総院長による施術は除く） <br>
                      ※ナース照射（オーダーメイド）は、＋11,000円追加となります<br>
                      ※[リピーター割引対象施術]3か月以内に再施術の場合はトライアル価格でお受けいただけます。
                    </td>
                  </tr>

                  <tr class="price-list-table__item min-height-auto"  colspan="2">
                    <td class="price-list-table__text--blue">ウルトラセルZi【ドットハイフ】</td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">全顔 （目周り含む）/250shot</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          トライアル
                        </li>
                        <li class="center">
                          1回
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li class="text-left">
                          <span class="pc-hidden">トライアル</span>23,100<span>円</span>
                        </li>
                        <li class="text-left">
                          <span class="pc-hidden">1回</span>45,100<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">全顔 （目周り含む）/430shot</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          トライアル
                        </li>
                        <li class="center">
                          1回
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li class="text-left">
                          <span class="pc-hidden">トライアル</span>55,000<span>円</span>
                        </li>
                        <li class="text-left">
                          <span class="pc-hidden">1回</span>77,000<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">全顔＋ アゴ下・首/630shot</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          トライアル
                        </li>
                        <li class="center">
                          1回
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li class="text-left">
                          <span class="pc-hidden">トライアル</span>88,000<span>円</span>
                        </li>
                        <li class="text-left">
                          <span class="pc-hidden">1回</span>110,000<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item min-height-auto"  colspan="2">
                    <td class="price-list-table__text--attention-min">
                      ※医師によるプレミアム照射は、＋55,000円追加となります（又吉総院長による施術は除く） <br>
                      ※ナース照射（オーダーメイド）は、＋11,000円追加となります<br>
                      ※[リピーター割引対象施術]3か月以内に再施術の場合はトライアル価格でお受けいただけます。
                    </td>
                  </tr>

                  <tr class="price-list-table__item min-height-auto"  colspan="2">
                    <td class="price-list-table__text--blue">ウルトラセルZi【リニアハイフ】</td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">頬＋ アゴ下/380shot</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          トライアル
                        </li>
                        <li class="center">
                          1回
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li class="text-left">
                          <span class="pc-hidden">トライアル</span>33,000<span>円</span>
                        </li>
                        <li class="text-left">
                          <span class="pc-hidden">1回</span>38,500<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">
                      その他 二の腕・膝上 ・ボディ/<br>
                      300shot （目安）
                    </td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          1回
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li class="text-left">
                          <span class="pc-hidden">1回</span>33,000<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">
                      その他 二の腕・膝上 ・ボディ/<br>
                      /600shot （目安）
                    </td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          1回
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li class="text-left">
                          <span class="pc-hidden">1回</span>63,800<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item min-height-auto"  colspan="2">
                    <td class="price-list-table__text--attention-min">
                      ※医師によるプレミアム照射は、＋55,000円追加となります（又吉総院長による施術は除く） <br>
                      ※ナース照射（オーダーメイド）は、＋11,000円追加となります<br>
                      ※[リピーター割引対象施術]3か月以内に再施術の場合はトライアル価格でお受けいただけます。
                    </td>
                  </tr>

                  <tr class="price-list-table__item min-height-auto"  colspan="2">
                    <td class="price-list-table__text--blue">ウルトラセルQ+（渋谷院4階）</td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">ドットハイフ（全顔、目周り含む）430shot</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          1回
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li class="text-left">
                          <span class="pc-hidden">1回</span>44,000<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">リニアハイフ（頬+アゴ下）380shot</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          1回
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li class="text-left">
                          <span class="pc-hidden">1回</span>22,000<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                </tbody>
              </table>

              <table class="price-list-table">
                <caption class="price-list-table__caption center">タイタンXL</caption>
                <tbody>
                  <tr class="price-list-table__item min-height-auto"  colspan="2">
                    <td class="price-list-table__text--blue">【たるみ治療】タイタンXL</td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">トライアル</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          全顔 2パス 120shot
                        </li>
                        <li class="center">
                          首 2パス 100shot
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li class="text-left">
                          <span class="pc-hidden">全顔 2パス 120shot</span>22,000<span>円</span>
                        </li>
                        <li class="text-left">
                          <span class="pc-hidden">首 2パス 100shot</span>19,800<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">1回</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          全顔 2パス 120shot
                        </li>
                        <li class="center">
                          首 2パス 100shot
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li class="text-left">
                          <span class="pc-hidden">全顔 2パス 120shot</span>55,000<span>円</span>
                        </li>
                        <li class="text-left">
                          <span class="pc-hidden">首 2パス 100shot</span>39,600<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">3回コース</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          全顔 2パス 120shot
                        </li>
                        <li class="center">
                          首 2パス 100shot
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li class="text-left">
                          <span class="pc-hidden">全顔 2パス 120shot</span>139,700<span>円</span>
                        </li>
                        <li class="text-left">
                          <span class="pc-hidden">首 2パス 100shot</span>99,000<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">5回コース</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          全顔 2パス 120shot
                        </li>
                        <li class="center">
                          首 2パス 100shot
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li class="text-left">
                          <span class="pc-hidden">全顔 2パス 120shot</span>205,700<span>円</span>
                        </li>
                        <li class="text-left">
                          <span class="pc-hidden">首 2パス 100shot</span>154,000<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>

                  <tr class="price-list-table__item min-height-auto"  colspan="2">
                    <td class="price-list-table__text--blue">【たるみ治療】 タイタンXL　プレミアム</td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">トライアル</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          全顔 3パス 180shot
                        </li>
                        <li class="center">
                          首 3パス150shot
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li class="text-left">
                          <span class="pc-hidden">全顔 3パス 180shot</span>33,000<span>円</span>
                        </li>
                        <li class="text-left">
                          <span class="pc-hidden">首 3パス150shot</span>30,800<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">1回</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          全顔 3パス 180shot
                        </li>
                        <li class="center">
                          首 3パス150shot
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li class="text-left">
                          <span class="pc-hidden">全顔 3パス 180shot</span>79,200<span>円</span>
                        </li>
                        <li class="text-left">
                          <span class="pc-hidden">首 3パス150shot</span>71,500<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">3回コース</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          全顔 3パス 180shot
                        </li>
                        <li class="center">
                          首 3パス150shot
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li class="text-left">
                          <span class="pc-hidden">全顔 3パス 180shot</span>178,200<span>円</span>
                        </li>
                        <li class="text-left">
                          <span class="pc-hidden">首 3パス150shot</span>143,000<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">5回コース</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          全顔 3パス 180shot
                        </li>
                        <li class="center">
                          首 3パス150shot
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li class="text-left">
                          <span class="pc-hidden">全顔 3パス 180shot</span>264,000<span>円</span>
                        </li>
                        <li class="text-left">
                          <span class="pc-hidden">首 3パス150shot</span>206,800<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>

                  <tr class="price-list-table__item min-height-auto"  colspan="2">
                    <td class="price-list-table__text--blue">【若返り・たるみ治療】ウルセラ+タイタンXL</td>
                  </tr>
                  <tr class="price-list-table__item row3">
                    <td class="price-list-table__text">ウルセラ（全顔）＋タイタンXL 120shot</td>
                    <td class="price-list-table__cost">275,000<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item row3">
                    <td class="price-list-table__text">ウルセラ（全顔・アゴ・首）＋タイタンXL 120shot</td>
                    <td class="price-list-table__cost">363,000<span>円</span></td>
                  </tr>
                </tbody>
              </table>

              <table class="price-list-table">
                <caption class="price-list-table__caption center">デンシティ（DENSITY）</caption>
                <tbody>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">
                      頬＋アゴ下　300shot<br>
                      <span class="min">【リピーター割引対象施術】<br>
                      6ヶ月以内に再施術の場合はトライアル価格で
                      お受けいただけます。</span>
                    </td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          トライアル
                        </li>
                        <li class="center">
                          1回
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li class="text-left">
                          <span class="pc-hidden">トライアル</span>77,000<span>円</span>
                        </li>
                        <li class="text-left">
                          <span class="pc-hidden">1回</span>99,000<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">フェイスライン＋アゴ下　150shot</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          1回
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li class="text-left">
                          <span class="pc-hidden">1回</span>49,500<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item min-height-auto"  colspan="2">
                    <td class="price-list-table__text--attention">※医師による施術は上記価格＋55,000円となります。（又吉総院長による施術は除く）</td>
                  </tr>
                </tbody>
              </table>

              <table class="price-list-table option">
                <caption class="price-list-table__caption center">オプション【額全体＋首　100shot】</caption>
                <tbody>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">モノポーラ</td>
                    <td class="price-list-table__cost">22,000<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">モノポーラ＋バイポーラ</td>
                    <td class="price-list-table__cost">33,000<span>円</span></td>
                  </tr>
                </tbody>
              </table>

              <table class="price-list-table">
                <caption class="price-list-table__caption center">デンシティアイ</caption>
                <tbody>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">ドクター照射　300shot（点眼麻酔込）</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          1回
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li class="text-left">
                          <span class="pc-hidden">1回</span>82,500<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                </tbody>
              </table>

              <table class="price-list-table option">
                <caption class="price-list-table__caption center">オプション</caption>
                <tbody>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">笑気麻酔</td>
                    <td class="price-list-table__cost">8,800<span>円</span></td>
                  </tr>
                </tbody>
              </table>

              <table class="price-list-table">
                <caption class="price-list-table__caption center">お顔の表情ジワ改善</caption>
                <tbody>
                  <tr class="price-list-table__item min-height-auto"  colspan="2">
                    <td class="price-list-table__text--blue">ボツリヌストキシン注射</td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">額上・下部(12.5単位)</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          韓国製ジェネリック
                        </li>
                        <li class="center">
                          ボトックスビスタ
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li class="text-left">
                          <span class="pc-hidden">韓国製ジェネリック</span><span>各</span>22,000<span>円</span>
                        </li>
                        <li class="text-left">
                          <span class="pc-hidden">ボトックスビスタ</span><span>各</span>26,400<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">額全体(20単位)</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          韓国製ジェネリック
                        </li>
                        <li class="center">
                          ボトックスビスタ
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li class="text-left">
                          <span class="pc-hidden">韓国製ジェネリック</span>26,400<span>円</span>
                        </li>
                        <li class="text-left">
                          <span class="pc-hidden">ボトックスビスタ</span>31,900<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">目尻(20単位)</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          韓国製ジェネリック
                        </li>
                        <li class="center">
                          ボトックスビスタ
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li class="text-left">
                          <span class="pc-hidden">韓国製ジェネリック</span>26,400<span>円</span>
                        </li>
                        <li class="text-left">
                          <span class="pc-hidden">ボトックスビスタ</span>31,900<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">眉間(12.5単位)</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          韓国製ジェネリック
                        </li>
                        <li class="center">
                          ボトックスビスタ
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li class="text-left">
                          <span class="pc-hidden">韓国製ジェネリック</span>23,650<span>円</span>
                        </li>
                        <li class="text-left">
                          <span class="pc-hidden">ボトックスビスタ</span>29,150<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">目の下(15単位)</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          韓国製ジェネリック
                        </li>
                        <li class="center">
                          ボトックスビスタ
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li class="text-left">
                          <span class="pc-hidden">韓国製ジェネリック</span>23,650<span>円</span>
                        </li>
                        <li class="text-left">
                          <span class="pc-hidden">ボトックスビスタ</span>29,150<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">鼻根部(10単位)</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          韓国製ジェネリック
                        </li>
                        <li class="center">
                          ボトックスビスタ
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li class="text-left">
                          <span class="pc-hidden">韓国製ジェネリック</span>22,000<span>円</span>
                        </li>
                        <li class="text-left">
                          <span class="pc-hidden">ボトックスビスタ</span>26,400<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>

                  <tr class="price-list-table__item min-height-auto"  colspan="2">
                    <td class="price-list-table__text--blue">エラボトックス</td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">エラ(50単位)</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          韓国製ジェネリック
                        </li>
                        <li class="center">
                          ボトックスビスタ
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li class="text-left">
                          <span class="pc-hidden">韓国製ジェネリック</span>33,000<span>円</span>
                        </li>
                        <li class="text-left">
                          <span class="pc-hidden">ボトックスビスタ</span>38,500<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">エラ(50単位)</td>
                    <td class="price-list-table__middle min-height-12">
                      <ul>
                        <li class="center">
                          韓国製ジェネリック
                        </li>
                        <li class="center">
                          韓国製ジェネリック（モニター）
                        </li>
                        <li class="center">
                          ボトックスビスタ
                        </li>
                        <li class="center">
                          ボトックスビスタ（モニター）
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li class="text-left">
                          <span class="pc-hidden">韓国製ジェネリック</span>57,750<span>円</span>
                        </li>
                        <li class="text-left">
                          <span class="pc-hidden">韓国製ジェネリック（モニター）</span>44,000<span>円</span>
                        </li>
                        <li class="text-left">
                          <span class="pc-hidden">ボトックスビスタ</span>70,400<span>円</span>
                        </li>
                        <li class="text-left">
                          <span class="pc-hidden">ボトックスビスタ（モニター）</span>55,000<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">エラ(150単位)</td>
                    <td class="price-list-table__middle min-height-12">
                      <ul>
                        <li class="center">
                          韓国製ジェネリック
                        </li>
                        <li class="center">
                          韓国製ジェネリック（モニター）
                        </li>
                        <li class="center">
                          ボトックスビスタ
                        </li>
                        <li class="center">
                          ボトックスビスタ（モニター）
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost min-height-12">
                      <ul>
                        <li class="text-left">
                          <span class="pc-hidden">韓国製ジェネリック</span>80,300<span>円</span>
                        </li>
                        <li class="text-left">
                          <span class="pc-hidden">韓国製ジェネリック（モニター）</span>60,500<span>円</span>
                        </li>
                        <li class="text-left">
                          <span class="pc-hidden">ボトックスビスタ</span>92,400<span>円</span>
                        </li>
                        <li class="text-left">
                          <span class="pc-hidden">ボトックスビスタ（モニター）</span>77,000<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>

                  <tr class="price-list-table__item min-height-auto"  colspan="2">
                    <td class="price-list-table__text--blue">アゴ梅干し治療</td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">アゴ梅干し治療</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          韓国製ジェネリック
                        </li>
                        <li class="center">
                          ボトックスビスタ
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li class="text-left">
                          <span class="pc-hidden">韓国製ジェネリック</span>23,650<span>円</span>
                        </li>
                        <li class="text-left">
                          <span class="pc-hidden">ボトックスビスタ</span>29,150<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>

                  <tr class="price-list-table__item min-height-auto"  colspan="2">
                    <td class="price-list-table__text--blue">笑顔のボトックス治療</td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">笑顔のボトックス治療</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          韓国製ジェネリック
                        </li>
                        <li class="center">
                          ボトックスビスタ
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li class="text-left">
                          <span class="pc-hidden">韓国製ジェネリック</span>26,400<span>円</span>
                        </li>
                        <li class="text-left">
                          <span class="pc-hidden">ボトックスビスタ</span>31,900<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>

                  <tr class="price-list-table__item min-height-auto"  colspan="2">
                    <td class="price-list-table__text--blue">笑顔のボトックス治療</td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">笑顔のボトックス治療</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          韓国製ジェネリック
                        </li>
                        <li class="center">
                          ボトックスビスタ
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li class="text-left">
                          <span class="pc-hidden">韓国製ジェネリック</span>26,400<span>円</span>
                        </li>
                        <li class="text-left">
                          <span class="pc-hidden">ボトックスビスタ</span>31,900<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>

                  <tr class="price-list-table__item min-height-auto"  colspan="2">
                    <td class="price-list-table__text--blue">人中ボトックス</td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">人中ボトックス</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          韓国製ジェネリック
                        </li>
                        <li class="center">
                          ボトックスビスタ
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li class="text-left">
                          <span class="pc-hidden">韓国製ジェネリック</span>22,000<span>円</span>
                        </li>
                        <li class="text-left">
                          <span class="pc-hidden">ボトックスビスタ</span>26,400<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>

                  <tr class="price-list-table__item min-height-auto"  colspan="2">
                    <td class="price-list-table__text--blue">ガミースマイル</td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">ガミースマイル</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          韓国製ジェネリック
                        </li>
                        <li class="center">
                          ボトックスビスタ
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li class="text-left">
                          <span class="pc-hidden">韓国製ジェネリック</span>22,000<span>円</span>
                        </li>
                        <li class="text-left">
                          <span class="pc-hidden">ボトックスビスタ</span>26,400<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>

                  <tr class="price-list-table__item min-height-auto"  colspan="2">
                    <td class="price-list-table__text--blue">小鼻のボトックス</td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">小鼻のボトックス</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          韓国製ジェネリック
                        </li>
                        <li class="center">
                          ボトックスビスタ
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li class="text-left">
                          <span class="pc-hidden">韓国製ジェネリック</span>22,000<span>円</span>
                        </li>
                        <li class="text-left">
                          <span class="pc-hidden">ボトックスビスタ</span>26,400<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>

                  <tr class="price-list-table__item min-height-auto"  colspan="2">
                    <td class="price-list-table__text--blue">美脚のボトックス治療</td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">美脚のボトックス治療</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          韓国製ジェネリック
                        </li>
                        <li class="center">
                          ボトックスビスタ
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li class="text-left">
                          <span class="pc-hidden">韓国製ジェネリック</span>88,000<span>円</span>
                        </li>
                        <li class="text-left">
                          <span class="pc-hidden">ボトックスビスタ</span>99,000<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>

                  <tr class="price-list-table__item min-height-auto"  colspan="2">
                    <td class="price-list-table__text--attention">※クリーム麻酔・笑気麻酔は料金に含まれます。</td>
                  </tr>
                </tbody>
              </table>

              <table class="price-list-table">
                <caption class="price-list-table__caption center">ベビーコラーゲン</caption>
                <tbody>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">ベビーコラーゲン</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          1本
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li class="text-left">
                          <span class="pc-hidden">1本</span>88,000<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div><!-- price-list-bottom__content -->

            <!-- シミ・そばかす・くすみなどの美白・美肌治療 -->
            <div class="price-list-bottom__content" id="cosmetic-dermatology-2">
              <div class="price-list-bottom__content__headline">
                <p class="price-list-bottom__content__headline--text">シミ・そばかす・くすみなどの美白・美肌治療</p>
                <a href="" class="price-list-btn">施術詳細を見る</a>
              </div>

              <table class="price-list-table">
                <caption class="price-list-table__caption center">
                  水光注射<span class="small">(高濃度非架橋ヒアルロン酸注入)</span>
                </caption>
                <tbody>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">1回</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          3cc 80shot
                        </li>
                        <li class="center">
                          6cc 160shot
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li class="text-left">
                          <span class="pc-hidden">3cc 80shot</span>29,700<span>円</span>
                        </li>
                        <li class="text-left">
                          <span class="pc-hidden">6cc 160shot</span>38,500<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                </tbody>
              </table>

              <table class="price-list-table option">
                <caption class="price-list-table__caption center">オプション</caption>
                <tbody>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">プルリアルデンシファイ追加</td>
                    <td class="price-list-table__cost">+38,500<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">セクレトーム追加</td>
                    <td class="price-list-table__cost">+60,500<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">コラーゲンブースター追加</td>
                    <td class="price-list-table__cost">+11,000<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">美白成分（アルブチン）追加</td>
                    <td class="price-list-table__cost">+11,000<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">コラーゲンブースター ＋ アルブチン追加</td>
                    <td class="price-list-table__cost">+16,500<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">シカ（CICA）パック</td>
                    <td class="price-list-table__cost">3,300<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item min-height-auto" colspan="2">
                    <td class="price-list-table__text--attention">※クリーム麻酔は料金に含まれます。</td>
                  </tr>
                </tbody>
              </table>

              <table class="price-list-table">
                <caption class="price-list-table__caption center">
                  スーパーフォトセラピー ICON MaxG（IPL：光治療）
                </caption>
                <tbody>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">
                      全顔<br>
                      <span class="min">【リピーター割引】<br>
                      2か月以内に再施術の場合はトライアル価格で
                      お受けいただけます。</span>
                    </td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          トライアル
                        </li>
                        <li class="center">
                          1回
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li class="text-left">
                          <span class="pc-hidden">トライアル</span>14,300<span>円</span>
                        </li>
                        <li class="text-left">
                          <span class="pc-hidden">1回</span>19,800<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">
                      全顔＋頬 重ね打ち（1.5倍照射）<br>
                      <span class="min">【リピーター割引】<br>
                      2か月以内に再施術の場合はトライアル価格で
                      お受けいただけます。</span>
                    </td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          トライアル
                        </li>
                        <li class="center">
                          1回
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li class="text-left">
                          <span class="pc-hidden">トライアル</span>18,700<span>円</span>
                        </li>
                        <li class="text-left">
                          <span class="pc-hidden">1回</span>24,200<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">スポット</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          5shot
                        </li>
                        <li class="center">
                          20shot
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li class="text-left">
                          <span class="pc-hidden">5shot</span>5,500<span>円</span>
                        </li>
                        <li class="text-left">
                          <span class="pc-hidden">20shot</span>11,000<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item min-height-auto" colspan="2">
                    <td class="price-list-table__text--attention-min">
                      ※看護師による照射となります。<br>
                      ※2回目以降の施術はリピーター割引が適用されます。それぞれ1回あたりの価格です。<br>
                      ※リピーター割引は2ヶ月以内の来院で適用となります。
                    </td>
                  </tr>
                </tbody>
              </table>

              <table class="price-list-table">
                <caption class="price-list-table__caption center">ライムライト（IPL：光治療）</caption>
                <tbody>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">トライアル</td>
                    <td class="price-list-table__cost">11,000<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">1回</td>
                    <td class="price-list-table__cost">25,300<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">4回コース</td>
                    <td class="price-list-table__cost">77,000<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">6回コース</td>
                    <td class="price-list-table__cost">110,000<span>円</span></td>
                  </tr>
                </tbody>
              </table>

              <table class="price-list-table">
                <caption class="price-list-table__caption center">ジェネシス</caption>
                <tbody>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">トライアル</td>
                    <td class="price-list-table__cost">11,000<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">1回</td>
                    <td class="price-list-table__cost">16,500<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">4回コース</td>
                    <td class="price-list-table__cost">56,100<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">6回コース</td>
                    <td class="price-list-table__cost">79,200<span>円</span></td>
                  </tr>
                </tbody>
              </table>

              <table class="price-list-table">
                <caption class="price-list-table__caption center">ジェネシス　プレミアム</caption>
                <tbody>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">トライアル</td>
                    <td class="price-list-table__cost">15,400<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">1回</td>
                    <td class="price-list-table__cost">25,300<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">4回コース</td>
                    <td class="price-list-table__cost">77,000<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">6回コース</td>
                    <td class="price-list-table__cost">110,000<span>円</span></td>
                  </tr>
                </tbody>
              </table>

              <table class="price-list-table">
                <caption class="price-list-table__caption center">ダーマインフューズ<br class="pc-hidden">（エレクトロポレーション）</caption>
                <tbody>
                  <tr class="price-list-table__item min-height-auto" colspan="2">
                    <td class="price-list-table__text--blue">ダーマインフューズ（エレクトロポレーション）</td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">ベーストリートメントジェル</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          顔　1回
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li class="text-left">
                          <span class="pc-hidden">顔　1回</span>9,900<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">
                      下記メニューと同時施術の場合<br>
                      <span class="min">カスタマイザーIPL/ICON MaxG/ライムライト/
                      ジェネシス/タイタン/レーザートーニング/
                      ポテンツァ ダイヤモンドチップ</span>
                    </td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          顔　1回
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li class="text-left">
                          <span class="pc-hidden">顔　1回</span>8,800<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">
                      下記メニュー２つと同時施術の場合<br>
                      <span class="min">カスタマイザーIPL/ICON MaxG/ライムライト/
                      ジェネシス/タイタン/レーザートーニング/
                      ポテンツァ ダイヤモンドチップ</span>
                    </td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          顔　1回
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li class="text-left">
                          <span class="pc-hidden">顔　1回</span>7,700<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item min-height-auto" colspan="2">
                    <td class="price-list-table__text--blue">ダーマインフューズ（エレクトロポレーション）＋マヌカハニーMIXピール</td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">ダーマインフューズ＋マヌカハニー<br>MIXピール</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          顔　1回
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li class="text-left">
                          <span class="pc-hidden">顔　1回</span>18,700<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                </tbody>
              </table>

              <table class="price-list-table option">
                <caption class="price-list-table__caption center">オプション</caption>
                <tbody>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">トラネキサム酸導入</td>
                    <td class="price-list-table__cost">1,100<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">スクライバー</td>
                    <td class="price-list-table__cost">3,300<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">DRMマスク</td>
                    <td class="price-list-table__cost">3,300<span>円</span></td>
                  </tr>
                </tbody>
              </table>

              <table class="price-list-table">
                <caption class="price-list-table__caption center">イオン導入</caption>
                <tbody>
                  <tr class="price-list-table__item min-height-auto" colspan="2">
                    <td class="price-list-table__text--blue">イオン導入（ビタミンC＋16種アミノ酸）</td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">背中</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          1回
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span class="pc-hidden">1回</span>8,250<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">顔</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          1回
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span class="pc-hidden">1回</span>5,500<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">
                      下記メニューと同時施術の場合<br>
                      <span class="min">カスタマイザーIPL/ICON MaxG/ライムライト/
                      ジェネシス/タイタン/レーザートーニング/
                      ポテンツァ ダイヤモンドチップ</span>
                    </td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          背中　1回
                        </li>
                        <li class="center">
                          顔　1回
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span class="pc-hidden">背中　1回</span>7,150<span>円</span>
                        </li>
                        <li>
                          <span class="pc-hidden">顔　1回</span>4,400<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item min-height-auto" colspan="2">
                    <td class="price-list-table__text--blue">イオン導入 ＋ マヌカハニーMIXピール</td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">背中</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          1回
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span class="pc-hidden">1回</span>20,900<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">顔</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          1回
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span class="pc-hidden">1回</span>14,300<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">顔</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          5回セット
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span class="pc-hidden">5回セット</span>60,500<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                </tbody>
              </table>

              <table class="price-list-table option">
                <caption class="price-list-table__caption center">オプション</caption>
                <tbody>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">トラネキサム酸導入</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          1回
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span class="pc-hidden">1回</span>1,100<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                </tbody>
              </table>

              <table class="price-list-table">
                <caption class="price-list-table__caption center">メドライトC6 （QスイッチNd:YAGレーザー）</caption>
                <tbody>
                  <tr class="price-list-table__item min-height-auto" colspan="2">
                    <td class="price-list-table__text--blue">【肝斑治療】レーザートーニング</td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">
                      全顔<br>
                      <span class="min">【リピーター割引】<br>
                      1か月以内に再施術の場合はトライアル価格で
                      お受けいただけます。</span>
                    </td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          トライアル
                        </li>
                        <li class="center">
                          1回
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span class="pc-hidden">トライアル</span>7,700<span>円</span>
                        </li>
                        <li>
                          <span class="pc-hidden">1回</span>9,680<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">頬：肝斑部</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          1回
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span class="pc-hidden">1回</span>6,050<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item min-height-auto" colspan="2">
                    <td class="price-list-table__text--blue">【シミ・あざ・タトゥー除去】 QスイッチYAGレーザー</td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">1cm2</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          1回
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span class="pc-hidden">1回</span>11,000<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">5～50cm2</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          1回
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span class="pc-hidden">1回</span>55,000<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">50～100cm2</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          1回
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span class="pc-hidden">1回</span>77,000<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">100cm2～</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          1回
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">ご相談ください</td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">目まわり（※）</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          1回
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span class="pc-hidden">1回</span>22,000<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item min-height-auto" colspan="2">
                    <td class="price-list-table__text--attention">（※）コンタクトアイガードは+11,000円</td>
                  </tr>
                </tbody>
              </table>

              <table class="price-list-table">
                <caption class="price-list-table__caption center">ポテンツァ（POTENZA）</caption>
                <tbody>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">POTENZA CPチップ</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          トライアル
                        </li>
                        <li class="center">
                          1回
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span class="pc-hidden">トライアル</span>49,500<span>円</span>
                        </li>
                        <li>
                          <span class="pc-hidden">1回</span>77,000<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">POTENZA Sチップ</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          トライアル
                        </li>
                        <li class="center">
                          1回
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span class="pc-hidden">トライアル</span>27,500<span>円</span>
                        </li>
                        <li>
                          <span class="pc-hidden">1回</span>49,500<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">POTENZA　DIAMOND</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          トライアル
                        </li>
                        <li class="center">
                          1回
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span class="pc-hidden">トライアル</span>38,500<span>円</span>
                        </li>
                        <li>
                          <span class="pc-hidden">1回</span>55,000<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item min-height-auto" colspan="2">
                    <td class="price-list-table__text--attention">
                      ※【リピーター割引】<br>
                      3か月以内に再施術の場合はトライアル価格でお受けいただけます。
                    </td>
                  </tr>
                </tbody>
              </table>

              <table class="price-list-table option">
                <caption class="price-list-table__caption center">オプション（ドラックデリバリー用薬液）</caption>
                <tbody>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">浄化濃縮幹細胞セクレトーム</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          1回
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span class="pc-hidden">1回</span>71,500<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">エクソソーム</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          1回
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span class="pc-hidden">1回</span>38,500<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">スネコス</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          1回
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span class="pc-hidden">1回</span>33,000<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">コラーゲンブースタ―　6cc(150μg)</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          1回
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span class="pc-hidden">1回</span>26,400<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">コラーゲンブースタ―　4cc(100μg)</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          1回
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span class="pc-hidden">1回</span>19,800<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">コラーゲンブースタ―　2cc(50μg)</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          1回
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span class="pc-hidden">1回</span>11,000<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">ボトックス</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          1回
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span class="pc-hidden">1回</span>22,000<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">ボトックス（韓国製ジェネリック）</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          1回
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span class="pc-hidden">1回</span>16,500<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                </tbody>
              </table>

              <table class="price-list-table">
                <caption class="price-list-table__caption center">マヌカハニーMIXピール<br class="pc-hidden">（ケミカルピーリング）</caption>
                <tbody>
                  <tr class="price-list-table__item min-height-auto" colspan="2">
                    <td class="price-list-table__text--blue">マヌカハニーMIXピール （ケミカルピーリング）</td>
                  </tr>
                  <tr class="price-list-table__item row3">
                    <td class="price-list-table__text">背中1回</td>
                    <td class="price-list-table__cost">17,600<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item row3">
                    <td class="price-list-table__text">顔1回</td>
                    <td class="price-list-table__cost">12,100<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item row3">
                    <td class="price-list-table__text">顔3回</td>
                    <td class="price-list-table__cost">33,000<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item row3">
                    <td class="price-list-table__text">顔5顔</td>
                    <td class="price-list-table__cost">52,800<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">
                      下記メニューと同時施術<br>
                      <span class="min">カスタマイザーIPL/ICON MaxG/ライムライト/
                      ジェネシス/タイタン/レーザートーニング/
                      ポテンツァ ダイヤモンドチップ</span>
                    </td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          顔1回
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span class="pc-hidden">顔1回</span>9,900<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">
                      下記メニュー２つと同時施術<br>
                      <span class="min">カスタマイザーIPL/ICON MaxG/ライムライト/
                      ジェネシス/タイタン/レーザートーニング/
                      ポテンツァ ダイヤモンドチップ</span>
                    </td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          顔1回
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span class="pc-hidden">顔1回</span>7,700<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item min-height-auto" colspan="2">
                    <td class="price-list-table__text--blue">マヌカハニーMIXピール（ケミカルピーリング）＋ ジェネシス背中6000shot</td>
                  </tr>
                  <tr class="price-list-table__item row3">
                    <td class="price-list-table__text">1回</td>
                    <td class="price-list-table__cost">30,800<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item row3">
                    <td class="price-list-table__text">6回</td>
                    <td class="price-list-table__cost">154,000<span>円</span></td>
                  </tr>
                </tbody>
              </table>

              <table class="price-list-table">
                <caption class="price-list-table__caption center">美容点的・注射</caption>
                <tbody>
                  <tr class="price-list-table__item min-height-auto" colspan="2">
                    <td class="price-list-table__text--blue">トータルケア</td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">シンシアプレミアム点滴</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          60分
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span class="pc-hidden">60分</span>13,200<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item min-height-auto" colspan="2">
                    <td class="price-list-table__text--blue">次世代のエイジングケア治療「NMN点滴」</td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">150mg</td>
                    <td class="price-list-table__middle min-height-12">
                      <ul>
                        <li class="center">
                          トライアル
                        </li>
                        <li class="center">
                          1回
                        </li>
                        <li class="center">
                          3回
                        </li>
                        <li class="center">
                          5回
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost min-height-12">
                      <ul>
                        <li>
                          <span class="pc-hidden">トライアル</span>22,000<span>円</span>
                        </li>
                        <li>
                          <span class="pc-hidden">1回</span>33,000<span>円</span>
                        </li>
                        <li>
                          <span class="pc-hidden">3回</span>89,100<span>円</span>
                        </li>
                        <li>
                          <span class="pc-hidden">5回</span>137,500<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">300mg</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          1回
                        </li>
                        <li class="center">
                          3回
                        </li>
                        <li class="center">
                          5回
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span class="pc-hidden">1回</span>57,200<span>円</span>
                        </li>
                        <li>
                          <span class="pc-hidden">3回</span>154,440<span>円</span>
                        </li>
                        <li>
                          <span class="pc-hidden">5回</span>243,100<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>

                  <tr class="price-list-table__item min-height-auto" colspan="2">
                    <td class="price-list-table__text--blue">美白・美肌治療</td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">白玉点滴</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          20分
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span class="pc-hidden">20分</span>7,920<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item row3">
                    <td class="price-list-table__text">白玉点滴</td>
                    <td class="price-list-table__cost">6,820<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">白玉点滴＋高濃度ビタミンC点滴</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          60分
                        </li>
                        <li class="center">
                          60分 5回コース
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span class="pc-hidden">60分</span>12,100<span>円</span>
                        </li>
                        <li>
                          <span class="pc-hidden">60分 5回コース</span>48,400<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">プチ白玉＋ビタミンC注射（時間がなくお急ぎの方・手早く済ませたい方に）</td>
                    <td class="price-list-table__cost">3,300<span>円</span></td>
                  </tr>

                  <tr class="price-list-table__item min-height-auto" colspan="2">
                    <td class="price-list-table__text--blue">高濃度ビタミンC点滴</td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">高濃度ビタミンC 10g＋ラクテック250ml</td>
                    <td class="price-list-table__cost">4,400<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">高濃度ビタミンC 15g＋ラクテック250ml</td>
                    <td class="price-list-table__cost">5,500<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">高濃度ビタミンC 20g＋ラクテック250ml</td>
                    <td class="price-list-table__cost">6,600<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">高濃度ビタミンC 25g＋ラクテック250ml</td>
                    <td class="price-list-table__cost">7,700<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">高濃度ビタミンC 30g＋ラクテック250ml</td>
                    <td class="price-list-table__cost">8,800<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">高濃度ビタミンC 40g＋ラクテック500ml</td>
                    <td class="price-list-table__cost">13,200<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">高濃度ビタミンC 50g＋ラクテック500ml</td>
                    <td class="price-list-table__cost">16,500<span>円</span></td>
                  </tr>

                  <tr class="price-list-table__item min-height-auto" colspan="2">
                    <td class="price-list-table__text--blue">疲労回復治療</td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">にんにく注射</td>
                    <td class="price-list-table__cost">1,650<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">にんにく注射プラス</td>
                    <td class="price-list-table__cost">2,200<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">スーパーにんにく注射</td>
                    <td class="price-list-table__cost">2,750<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">最強にんにく注射</td>
                    <td class="price-list-table__cost">3,300<span>円</span></td>
                  </tr>

                  <tr class="price-list-table__item min-height-auto" colspan="2">
                    <td class="price-list-table__text--blue">基本点滴</td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">シンシア基本点滴</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          20分
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span class="pc-hidden">20分</span>2,750<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>

                  <tr class="price-list-table__item min-height-auto" colspan="2">
                    <td class="price-list-table__text--blue">目的別スペシャル点滴</td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">ダイエット点滴</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          20分
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span class="pc-hidden">20分</span>4,400<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">疲労回復点滴</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          20分
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span class="pc-hidden">20分</span>4,400<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">二日酔い点滴</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          20分
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span class="pc-hidden">20分</span>3,850<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">ニキビ・花粉症点滴</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          20分
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span class="pc-hidden">20分</span>4,950<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">プラセンタ点滴（スマホ点滴）</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          20分
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span class="pc-hidden">20分</span>6,600<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">
                      プラセンタ注射<br>
                      （時間がなくお急ぎの方・手早く済ませたい方に）
                    </td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center none">
                          追加1Aごと
                        </li>
                        <li class="center">
                          追加1Aごと
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span class="pc-hidden">追加1Aごと</span>1,100<span>円</span>
                        </li>
                        <li>
                          <span class="pc-hidden">追加1Aごと</span>1,100<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>

                  <tr class="price-list-table__item min-height-auto" colspan="2">
                    <td class="price-list-table__text--blue">追加成分メニュー</td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">プラセンタ</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          1回 2A
                        </li>
                        <li class="center">
                          追加 1Aごと
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span class="pc-hidden">1回 2A</span>2,200<span>円</span>
                        </li>
                        <li>
                          <span class="pc-hidden">追加 1Aごと</span>1,100<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">カルニチン</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          1A<br>（最大2Aまで）
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span class="pc-hidden">1A（最大2Aまで）</span>770<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">αリポ酸（25mg）</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          1A<br>（最大2Aまで）
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span class="pc-hidden">1A（最大2Aまで）</span>770<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">ビタミンC（2000mg）</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          1A<br>（最大2Aまで）
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span class="pc-hidden">1A（最大2Aまで）</span>770<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">ビタミンB1（10mg）</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          1A<br>（最大2Aまで）
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span class="pc-hidden">1A（最大2Aまで）</span>770<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">ビタミンB2（10mg）</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          1A<br>（最大2Aまで）
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span class="pc-hidden">1A（最大2Aまで）</span>770<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">ビタミンB5（100mg）</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          1A<br>（最大2Aまで）
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span class="pc-hidden">1A（最大2Aまで）</span>770<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">ビタミンB6（10mg）</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          1A<br>（最大2Aまで）
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span class="pc-hidden">1A（最大2Aまで）</span>770<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">ビタミンB12（1mg）</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          1A<br>（最大2Aまで）
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span class="pc-hidden">1A（最大2Aまで）</span>770<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">ビタミンH（1mg）</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          1A<br>（最大2Aまで）
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span class="pc-hidden">1A（最大2Aまで）</span>770<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">グリチルリチン（20ml）</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          1A<br>（最大2Aまで）
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span class="pc-hidden">1A（最大2Aまで）</span>770<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">トラネキサム酸（250mg）</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          1A<br>（最大2Aまで）
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span class="pc-hidden">1A（最大2Aまで）</span>770<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item row3">
                    <td class="price-list-table__text">ラクテック（補液療法500ml）</td>
                    <td class="price-list-table__cost">1,100</td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">グルタチオン（200mg）</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          1A<br>（最大2Aまで）
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span class="pc-hidden">1A（最大2Aまで）</span>770<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                </tbody>
              </table>

              <table class="price-list-table">
                <caption class="price-list-table__caption center">美白・美肌・肝斑 処方医薬品</caption>
                <tbody>
                  <tr class="price-list-table__item min-height-auto" colspan="2">
                    <td class="price-list-table__text--blue">外用薬</td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">モイストリペアクリーム</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          36g
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span class="pc-hidden">36g</span>3,300<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>

                  <tr class="price-list-table__item min-height-auto" colspan="2">
                    <td class="price-list-table__text--blue">内服薬</td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">
                      美肌内服セット <br>
                      （ビタミンC＋トラネキサム酸）
                    </td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          30日
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span class="pc-hidden">30日</span>4,400<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>

                  <tr class="price-list-table__item min-height-auto" colspan="2">
                    <td class="price-list-table__text--blue">サプリメント</td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">
                      ビタノイリン<br>
                      （ビタミンB1、B2、B6、B12混合）
                    </td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          100カプセル
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span class="pc-hidden">100カプセル</span>4,400<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">ビタミンB5</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          100錠
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span class="pc-hidden">100錠</span>4,400<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">ビタミンH</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          50包
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span class="pc-hidden">50包</span>3,300<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">シナール（ビタミンC）200mg錠</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          150錠
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span class="pc-hidden">150錠</span>3,300<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">トラネキサム酸 250mgカプセル</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          150カプセル
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span class="pc-hidden">150カプセル</span>4,400<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div><!-- price-list-bottom__content -->

            <!-- 肝斑・美白治療 -->
            <div class="price-list-bottom__content" id="cosmetic-dermatology-3">
              <div class="price-list-bottom__content__headline">
                <p class="price-list-bottom__content__headline--text">肝斑・美白治療</p>
                <a href="" class="price-list-btn">施術詳細を見る</a>
              </div>

              <table class="price-list-table">
                <caption class="price-list-table__caption center">マッサージピール（コラーゲンピール）</caption>
                <tbody>
                  <tr class="price-list-table__item min-height-auto" colspan="2">
                    <td class="price-list-table__text--blue">マッサージピール</td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">全顔</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          1回
                        </li>
                        <li class="center">
                          5回
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span class="pc-hidden">1回</span>16,500<span>円</span>
                        </li>
                        <li>
                          <span class="pc-hidden">5回</span>69,300<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">首</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          1回
                        </li>
                        <li class="center">
                          5回
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span class="pc-hidden">1回</span>11,000<span>円</span>
                        </li>
                        <li>
                          <span class="pc-hidden">5回</span>49,500<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">鎖骨下10cm</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          1回
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span class="pc-hidden">1回</span>16,500<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item min-height-auto" colspan="2">
                    <td class="price-list-table__text--blue">ヴェルベットスキン<br class="pc-hidden">（ダーマペン4＋マッサージピール）</td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">全顔</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          1回
                        </li>
                        <li class="center">
                          5回
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span class="pc-hidden">1回</span>26,400<span>円</span>
                        </li>
                        <li>
                          <span class="pc-hidden">5回</span>126,500<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                </tbody>
              </table>

              <table class="price-list-table">
                <caption class="price-list-table__caption center">ダーマペン</caption>
                <tbody>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">全顔</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          1回
                        </li>
                        <li class="center">
                          5回
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span class="pc-hidden">1回</span>16,500<span>円</span>
                        </li>
                        <li>
                          <span class="pc-hidden">5回</span>66,000<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">目の下（目元の小ジワ）</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          1回
                        </li>
                        <li class="center">
                          5回
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span class="pc-hidden">1回</span>11,000<span>円</span>
                        </li>
                        <li>
                          <span class="pc-hidden">5回</span>44,000<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">両頬</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          1回
                        </li>
                        <li class="center">
                          5回
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span class="pc-hidden">1回</span>10,780<span>円</span>
                        </li>
                        <li>
                          <span class="pc-hidden">5回</span>44,000<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">鼻</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          1回
                        </li>
                        <li class="center">
                          5回
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span class="pc-hidden">1回</span>11,000<span>円</span>
                        </li>
                        <li>
                          <span class="pc-hidden">5回</span>44,000<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">首</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          1回
                        </li>
                        <li class="center">
                          5回
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span class="pc-hidden">1回</span>13,200<span>円</span>
                        </li>
                        <li>
                          <span class="pc-hidden">5回</span>52,800<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">全顔＋首</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          1回
                        </li>
                        <li class="center">
                          5回
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span class="pc-hidden">1回</span>27,500<span>円</span>
                        </li>
                        <li>
                          <span class="pc-hidden">5回</span>110,000<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">手の甲～指</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          1回
                        </li>
                        <li class="center">
                          5回
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span class="pc-hidden">1回</span>16,500<span>円</span>
                        </li>
                        <li>
                          <span class="pc-hidden">5回</span>66,000<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">Body：～5×5cm</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          1回
                        </li>
                        <li class="center">
                          5回
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span class="pc-hidden">1回</span>11,000<span>円</span>
                        </li>
                        <li>
                          <span class="pc-hidden">5回</span>44,000<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">Body：～10×10cm</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          1回
                        </li>
                        <li class="center">
                          5回
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span class="pc-hidden">1回</span>16,500<span>円</span>
                        </li>
                        <li>
                          <span class="pc-hidden">5回</span>66,000<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">Body：～20×20cm</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          1回
                        </li>
                        <li class="center">
                          5回
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span class="pc-hidden">1回</span>22,000<span>円</span>
                        </li>
                        <li>
                          <span class="pc-hidden">5回</span>88,000<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">Body：20×20cm以上</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          1回
                        </li>
                        <li class="center">
                          5回
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          要相談
                        </li>
                        <li>
                          要相談
                        </li>
                      </ul>
                    </td>
                  </tr>

                  <tr class="price-list-table__item option min-height-auto" colspan="2">
                    <td class="price-list-table__text--blue">組み合わせ治療</td>
                  </tr>
                  <tr class="price-list-table__item option-gray row3">
                    <td class="price-list-table__text">
                      ヴェルベットスキン<br>
                      ダーマペン4＋マッサージピール 全顔
                    </td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          1回
                        </li>
                        <li class="center">
                          5回
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span class="pc-hidden">1回</span>26,400<span>円</span>
                        </li>
                        <li>
                          <span class="pc-hidden">5回</span>126,500<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item option-gray row3">
                    <td class="price-list-table__text">
                      マイクロボトックス<br>
                      （ダーマペン4＋ボトックス）
                    </td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          韓国製ジェネリック1回
                        </li>
                        <li class="center">
                          ボトックスビスタ1回
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span class="pc-hidden">韓国製ジェネリック1回</span>33,000<span>円</span>
                        </li>
                        <li>
                          <span class="pc-hidden">ボトックスビスタ1回</span>38,500<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item option-gray row3">
                    <td class="price-list-table__text">ダーマペン4＋エクソソーム 全顔</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          1回
                        </li>
                        <li class="center">
                          3回
                        </li>
                        <li class="center">
                          5回
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span class="pc-hidden">1回</span>55,000<span>円</span>
                        </li>
                        <li>
                          <span class="pc-hidden">3回</span>148,500<span>円</span>
                        </li>
                        <li>
                          <span class="pc-hidden">5回</span>231,000<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item option-gray row3">
                    <td class="price-list-table__text">ダーマペン4＋エクソソーム 首</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          1回
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span class="pc-hidden">1回</span>49,500<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item option-gray row3">
                    <td class="price-list-table__text">ダーマペン4＋エクソソーム 全顔+首</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          1回
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span class="pc-hidden">1回</span>99,000<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>

                  <tr class="price-list-table__item option min-height-auto" colspan="2">
                    <td class="price-list-table__text--blue">組み合わせ薬剤</td>
                  </tr>
                  <tr class="price-list-table__item option-gray">
                    <td class="price-list-table__text">浄化濃縮 幹細胞セクレトーム</td>
                    <td class="price-list-table__cost">71,500<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item option-gray">
                    <td class="price-list-table__text">コラーゲンブースタ― 2cc(50μg)</td>
                    <td class="price-list-table__cost">11,000<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item option-gray">
                    <td class="price-list-table__text">コラーゲンブースタ― 4cc(100μg)</td>
                    <td class="price-list-table__cost">19,800<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item option-gray">
                    <td class="price-list-table__text">コラーゲンブースタ― 6cc(150μg)</td>
                    <td class="price-list-table__cost">26,400<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item option-gray">
                    <td class="price-list-table__text">シカ（CICA）パック</td>
                    <td class="price-list-table__cost">3,300<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item option-gray">
                    <td class="price-list-table__text">リジェンスキンマスク</td>
                    <td class="price-list-table__cost">2,200<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item option-gray">
                    <td class="price-list-table__text">トラネキサム酸</td>
                    <td class="price-list-table__cost">2,200<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item option-gray">
                    <td class="price-list-table__text">プラセンタ</td>
                    <td class="price-list-table__cost">2,200<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item option-gray">
                    <td class="price-list-table__text">ビタミンC</td>
                    <td class="price-list-table__cost">1,100<span>円</span></td>
                  </tr>
                </tbody>
              </table>

              <table class="price-list-table">
                <caption class="price-list-table__caption center">
                  水光注射<span class="small">(高濃度非架橋ヒアルロン酸注入)</span>
                </caption>
                <tbody>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">1回</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          3cc 80shot
                        </li>
                        <li class="center">
                          6cc 160shot
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li class="text-left">
                          <span class="pc-hidden">3cc 80shot</span>29,700<span>円</span>
                        </li>
                        <li class="text-left">
                          <span class="pc-hidden">6cc 160shot</span>38,500<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                </tbody>
              </table>

              <table class="price-list-table option">
                <caption class="price-list-table__caption center">オプション</caption>
                <tbody>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">プルリアルデンシファイ追加</td>
                    <td class="price-list-table__cost">+38,500<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">セクレトーム追加</td>
                    <td class="price-list-table__cost">+60,500<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">コラーゲンブースター追加</td>
                    <td class="price-list-table__cost">+11,000<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">美白成分（アルブチン）追加</td>
                    <td class="price-list-table__cost">+11,000<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">コラーゲンブースター ＋ アルブチン追加</td>
                    <td class="price-list-table__cost">+16,500<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">シカ（CICA）パック</td>
                    <td class="price-list-table__cost">3,300<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item min-height-auto" colspan="2">
                    <td class="price-list-table__text--attention">※クリーム麻酔は料金に含まれます。</td>
                  </tr>
                </tbody>
              </table>

              <table class="price-list-table">
                <caption class="price-list-table__caption center">ライムライト（IPL：光治療）</caption>
                <tbody>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">トライアル</td>
                    <td class="price-list-table__cost">11,000<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">1回</td>
                    <td class="price-list-table__cost">25,300<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">4回コース</td>
                    <td class="price-list-table__cost">77,000<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">6回コース</td>
                    <td class="price-list-table__cost">110,000<span>円</span></td>
                  </tr>
                </tbody>
              </table>

              <table class="price-list-table">
                <caption class="price-list-table__caption center">ジェネシス</caption>
                <tbody>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">トライアル</td>
                    <td class="price-list-table__cost">11,000<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">1回</td>
                    <td class="price-list-table__cost">16,500<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">4回コース</td>
                    <td class="price-list-table__cost">56,100<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">6回コース</td>
                    <td class="price-list-table__cost">79,200<span>円</span></td>
                  </tr>
                </tbody>
              </table>

              <table class="price-list-table">
                <caption class="price-list-table__caption center">ジェネシス　プレミアム</caption>
                <tbody>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">トライアル</td>
                    <td class="price-list-table__cost">15,400<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">1回</td>
                    <td class="price-list-table__cost">25,300<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">4回コース</td>
                    <td class="price-list-table__cost">77,000<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">6回コース</td>
                    <td class="price-list-table__cost">110,000<span>円</span></td>
                  </tr>
                </tbody>
              </table>

              <table class="price-list-table">
                <caption class="price-list-table__caption center">ダーマインフューズ<br class="pc-hidden">（エレクトロポレーション）</caption>
                <tbody>
                  <tr class="price-list-table__item min-height-auto" colspan="2">
                    <td class="price-list-table__text--blue">ダーマインフューズ（エレクトロポレーション）</td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">ベーストリートメントジェル</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          顔　1回
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span class="pc-hidden">顔　1回</span>9,900<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">
                      下記メニューと同時施術の場合<br>
                      <span class="min">カスタマイザーIPL/ICON MaxG/ライムライト/
                      ジェネシス/タイタン/レーザートーニング/
                      ポテンツァ ダイヤモンドチップ</span>
                    </td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          顔　1回
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span class="pc-hidden">顔　1回</span>8,800<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">
                      下記メニュー２つと同時施術の場合<br>
                      <span class="min">カスタマイザーIPL/ICON MaxG/ライムライト/
                      ジェネシス/タイタン/レーザートーニング/
                      ポテンツァ ダイヤモンドチップ</span>
                    </td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          顔　1回
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span class="pc-hidden">顔　1回</span>7,700<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item min-height-auto" colspan="2">
                    <td class="price-list-table__text--blue">ダーマインフューズ（エレクトロポレーション）＋マヌカハニーMIXピール</td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">ダーマインフューズ＋マヌカハニー<br>MIXピール</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          顔　1回
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span class="pc-hidden">顔　1回</span>18,700<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                </tbody>
              </table>

              <table class="price-list-table option">
                <caption class="price-list-table__caption center">オプション</caption>
                <tbody>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">トラネキサム酸導入</td>
                    <td class="price-list-table__cost">1,100<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">スクライバー</td>
                    <td class="price-list-table__cost">3,300<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">DRMマスク</td>
                    <td class="price-list-table__cost">3,300<span>円</span></td>
                  </tr>
                </tbody>
              </table>

              <table class="price-list-table">
                <caption class="price-list-table__caption center">イオン導入</caption>
                <tbody>
                  <tr class="price-list-table__item min-height-auto" colspan="2">
                    <td class="price-list-table__text--blue">イオン導入（ビタミンC＋16種アミノ酸）</td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">背中</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          1回
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span class="pc-hidden">1回</span>8,250<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">顔</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          1回
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span class="pc-hidden">1回</span>5,500<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">
                      下記メニューと同時施術の場合<br>
                      <span class="min">カスタマイザーIPL/ICON MaxG/ライムライト/
                      ジェネシス/タイタン/レーザートーニング/
                      ポテンツァ ダイヤモンドチップ</span>
                    </td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          背中　1回
                        </li>
                        <li class="center">
                          顔　1回
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span class="pc-hidden">背中　1回</span>7,150<span>円</span>
                        </li>
                        <li>
                          <span class="pc-hidden">顔　1回</span>4,400<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>

                  <tr class="price-list-table__item min-height-auto" colspan="2">
                    <td class="price-list-table__text--blue">イオン導入 ＋ マヌカハニーMIXピール</td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">背中</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          1回
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span class="pc-hidden">1回</span>20,900<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">顔</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          1回
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span class="pc-hidden">1回</span>14,300<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">顔</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          5回セット
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span class="pc-hidden">5回セット</span>60,500<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                </tbody>
              </table>

              <table class="price-list-table option">
                <caption class="price-list-table__caption center">オプション</caption>
                <tbody>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">トラネキサム酸導入</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          1回
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span class="pc-hidden">1回</span>1,100<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                </tbody>
              </table>

              <table class="price-list-table">
                <caption class="price-list-table__caption center">ポテンツァ（POTENZA）</caption>
                <tbody>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">POTENZA CPチップ</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          トライアル
                        </li>
                        <li class="center">
                          1回
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span class="pc-hidden">トライアル</span>49,500<span>円</span>
                        </li>
                        <li>
                          <span class="pc-hidden">1回</span>77,000<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">POTENZA Sチップ</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          トライアル
                        </li>
                        <li class="center">
                          1回
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span class="pc-hidden">トライアル</span>27,500<span>円</span>
                        </li>
                        <li>
                          <span class="pc-hidden">1回</span>49,500<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">POTENZA　DIAMOND</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          トライアル
                        </li>
                        <li class="center">
                          1回
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span class="pc-hidden">トライアル</span>38,500<span>円</span>
                        </li>
                        <li>
                          <span class="pc-hidden">1回</span>55,000<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item min-height-auto" colspan="2">
                    <td class="price-list-table__text--attention">
                      ※【リピーター割引】<br>
                      3か月以内に再施術の場合はトライアル価格でお受けいただけます。
                    </td>
                  </tr>
                </tbody>
              </table>

              <table class="price-list-table option">
                <caption class="price-list-table__caption center">オプション（ドラックデリバリー用薬液）</caption>
                <tbody>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">浄化濃縮幹細胞セクレトーム</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          1回
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span class="pc-hidden">1回</span>71,500<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">エクソソーム</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          1回
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span class="pc-hidden">1回</span>38,500<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">スネコス</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          1回
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span class="pc-hidden">1回</span>33,000<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">コラーゲンブースタ―　6cc(150μg)</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          1回
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span class="pc-hidden">1回</span>26,400<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">コラーゲンブースタ―　4cc(100μg)</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          1回
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span class="pc-hidden">1回</span>19,800<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">コラーゲンブースタ―　2cc(50μg)</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          1回
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span class="pc-hidden">1回</span>11,000<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">ボトックス</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          1回
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span class="pc-hidden">1回</span>22,000<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">ボトックス（韓国製ジェネリック）</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          1回
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span class="pc-hidden">1回</span>16,500<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                </tbody>
              </table>

              <table class="price-list-table">
                <caption class="price-list-table__caption center">オプション（ドラックデリバリー用薬液）</caption>
                <tbody>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">
                      全顔<br>
                      <span c;ass="min">【リピーター割引】<br>
                      1か月以内に再施術の場合はトライアル価格で
                      お受けいただけます。</span>
                    </td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          トライアル
                        </li>
                        <li class="center">
                          1回
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span class="pc-hidden">トライアル</span>7,700<span>円</span>
                        </li>
                        <li>
                          <span class="pc-hidden">1回</span>9,680<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">頬：肝斑部</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          1回
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span class="pc-hidden">1回</span>6,050<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                </tbody>
              </table>

              <table class="price-list-table">
                <caption class="price-list-table__caption center">美白・美肌・肝斑 処方医薬品</caption>
                <tbody>
                  <tr class="price-list-table__item min-height-auto" colspan="2">
                    <td class="price-list-table__text--blue">外用薬</td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">モイストリペアクリーム</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          36g
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span class="pc-hidden">36g</span>3,300<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  
                  <tr class="price-list-table__item min-height-auto" colspan="2">
                    <td class="price-list-table__text--blue">内服薬</td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">美肌内服セット<br>（ビタミンC＋トラネキサム酸）</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          30日
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span class="pc-hidden">30日</span>4,400<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>

                  <tr class="price-list-table__item min-height-auto" colspan="2">
                    <td class="price-list-table__text--blue">サプリメント</td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">ビタノイリン<br>（ビタミンB1、B2、B6、B12混合）</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          100カプセル
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span class="pc-hidden">100カプセル</span>4,400<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">ビタミンB5</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          100錠
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span class="pc-hidden">100錠</span>4,400<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">ビタミンH</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          50包
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span class="pc-hidden">50包</span>3,300<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">シナール（ビタミンC）200mg錠</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          150錠
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span class="pc-hidden">150錠</span>3,300<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">トラネキサム酸 250mgカプセル</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          150カプセル
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span class="pc-hidden">150カプセル</span>4,400<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div><!-- price-list-bottom__content -->

            <!-- ニキビ・ニキビ痕治療 -->
            <div class="price-list-bottom__content" id="cosmetic-dermatology-4">
              <div class="price-list-bottom__content__headline">
                <p class="price-list-bottom__content__headline--text">ニキビ・ニキビ痕治療</p>
                <a href="" class="price-list-btn">施術詳細を見る</a>
              </div>

              <table class="price-list-table">
                <caption class="price-list-table__caption center">マッサージピール（コラーゲンピール）</caption>
                <tbody>
                  <tr class="price-list-table__item min-height-auto" colspan="2">
                    <td class="price-list-table__text--blue">マッサージピール</td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">全顔</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          1回
                        </li>
                        <li class="center">
                          5回
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span class="pc-hidden">1回</span>16,500<span>円</span>
                        </li>
                        <li>
                          <span class="pc-hidden">5回</span>69,300<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">首</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          1回
                        </li>
                        <li class="center">
                          5回
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span class="pc-hidden">1回</span>11,000<span>円</span>
                        </li>
                        <li>
                          <span class="pc-hidden">5回</span>49,500<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">鎖骨下10cm</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          1回
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span class="pc-hidden">1回</span>16,500<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item min-height-auto" colspan="2">
                    <td class="price-list-table__text--blue">ヴェルベットスキン<br class="pc-hidden">（ダーマペン4＋マッサージピール）</td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">全顔</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          1回
                        </li>
                        <li class="center">
                          5回
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span class="pc-hidden">1回</span>26,400<span>円</span>
                        </li>
                        <li>
                          <span class="pc-hidden">5回</span>126,500<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                </tbody>
              </table>

              <table class="price-list-table">
                <caption class="price-list-table__caption center">サブシジョン</caption>
                <tbody>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">1回</td>
                    <!-- <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          1回
                        </li>
                        <li class="center">
                          5回
                        </li>
                      </ul>
                    </td> -->
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          16,500<span>円</span>
                        </li>
                        <li>
                          69,300<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                </tbody>
              </table>

              <table class="price-list-table option">
                <caption class="price-list-table__caption center">オプション</caption>
                <tbody>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">非架橋ヒアルロン酸1本</td>
                    <td class="price-list-table__cost">5,500<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">スネコス1回1バイアル</td>
                    <td class="price-list-table__cost">33,000<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">痛み止め筋肉注射</td>
                    <td class="price-list-table__cost">3,300<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">笑気麻酔</td>
                    <td class="price-list-table__cost">3,300<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item min-height-auto" colspan="2">
                    <td class="price-list-table__text--attention">※34G針使用は別途料金がかかります。</td>
                  </tr>
                </tbody>
              </table>

              <table class="price-list-table">
                <caption class="price-list-table__caption center">ロアキュタン （アキュテイン）</caption>
                <tbody>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">１ヶ月分（30錠）</td>
                    <td class="price-list-table__cost">27,500<span>円</span></td>
                  </tr>
                </tbody>
              </table>

              <table class="price-list-table">
                <caption class="price-list-table__caption center">パールフラクショナル</caption>
                <tbody>
                  <tr class="price-list-table__item min-height-auto" colspan="2">
                    <td class="price-list-table__text--blue">【シワ・ニキビ跡】</td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">全顔</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          通常
                        </li>
                        <li class="center">
                          プレミアム
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span class="pc-hidden">通常</span>55,000<span>円</span>
                        </li>
                        <li>
                          <span class="pc-hidden">プレミアム</span>82,500<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">鼻</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          通常
                        </li>
                        <li class="center">
                          プレミアム
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span class="pc-hidden">通常</span>33,000<span>円</span>
                        </li>
                        <li>
                          <span class="pc-hidden">プレミアム</span>44,000<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">頬</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          通常
                        </li>
                        <li class="center">
                          プレミアム
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span class="pc-hidden">通常</span>33,000<span>円</span>
                        </li>
                        <li>
                          <span class="pc-hidden">プレミアム</span>44,000<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">こみかみ（目尻）</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          通常
                        </li>
                        <li class="center">
                          プレミアム
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span class="pc-hidden">通常</span>33,000<span>円</span>
                        </li>
                        <li>
                          <span class="pc-hidden">プレミアム</span>44,000<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">口まわり（フェイスライン）</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          通常
                        </li>
                        <li class="center">
                          プレミアム
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span class="pc-hidden">通常</span>33,000<span>円</span>
                        </li>
                        <li>
                          <span class="pc-hidden">プレミアム</span>44,000<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">眉間・額</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          通常
                        </li>
                        <li class="center">
                          プレミアム
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span class="pc-hidden">通常</span>33,000<span>円</span>
                        </li>
                        <li>
                          <span class="pc-hidden">プレミアム</span>44,000<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>

                  <tr class="price-list-table__item min-height-auto" colspan="2">
                    <td class="price-list-table__text--blue">
                      セレクト照射
                      <span class="min">※ご希望の部位をご選択いただけます</span>
                    </td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">2ヵ所を選択</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          通常
                        </li>
                        <li class="center">
                          プレミアム
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span class="pc-hidden">通常</span>44,000<span>円</span>
                        </li>
                        <li>
                          <span class="pc-hidden">プレミアム</span>55,000<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">3ヵ所を選択</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          通常
                        </li>
                        <li class="center">
                          プレミアム
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span class="pc-hidden">通常</span>55,000<span>円</span>
                        </li>
                        <li>
                          <span class="pc-hidden">プレミアム</span>66,000<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>

                  <tr class="price-list-table__item min-height-auto" colspan="2">
                    <td class="price-list-table__text--blue">
                      パールフラクショナルシグネチャー<br>
                      <span class="min">※通常のパールフラクショナルより高い出力で医師による照射が含まれます</span>
                    </td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">全顔</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          プレミアム
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span class="pc-hidden">プレミアム</span>129,800<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item min-height-auto" colspan="2">
                    <td class="price-list-table__text--attention">
                      ※プレミアムは、医師による照射が含まれます。<br>
                      ※クリーム麻酔・照射後鎮静パック・内服薬（抗生剤・鎮痛剤・保湿剤）は施術料金に含まれます。
                    </td>
                  </tr>
                </tbody>
              </table>

              <table class="price-list-table option">
                <caption class="price-list-table__caption center">オプション</caption>
                <tbody>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">痛み止め点滴</td>
                    <td class="price-list-table__cost">5,500<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">痛み止め筋肉注射</td>
                    <td class="price-list-table__cost">3,300<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">コラーゲンブースタ―導入</td>
                    <td class="price-list-table__cost">11,000<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">プラセンタ導入</td>
                    <td class="price-list-table__cost">3,300<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">トラネキサム酸導入</td>
                    <td class="price-list-table__cost">3,300<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">〈処方〉プラスリストア日焼け止め</td>
                    <td class="price-list-table__cost">3,080<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item min-height-auto" colspan="2">
                    <td class="price-list-table__text--attention">※34G針使用は別途料金がかかります。</td>
                  </tr>
                </tbody>
              </table>

              <table class="price-list-table">
                <caption class="price-list-table__caption center">ニキビ面皰（めんぽう）圧出術</caption>
                <tbody>
                  <tr class="price-list-table__item min-height-auto" colspan="2">
                    <td class="price-list-table__text--blue">面皰（めんぽう）圧出術</td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">当院で面皰圧出を初めて受ける方</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          10個まで
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span class="pc-hidden">10個まで</span>11,000<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">当院で面皰圧出を受けたことがある方</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          10個まで
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span class="pc-hidden">10個まで</span>5,500<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">10個を超える場合</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          1個あたり
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span class="pc-hidden">10個まで</span>330<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>

                  <tr class="price-list-table__item min-height-auto" colspan="2">
                    <td class="price-list-table__text--blue">レーザー面皰（めんぽう）圧出術</td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">10個まで</td>
                    <td class="price-list-table__cost">16,500<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">10個を超える場合</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          1個あたり
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span class="pc-hidden">1個あたり</span>1,100<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                </tbody>
              </table>

              <table class="price-list-table">
                <caption class="price-list-table__caption center">ホルモン療法</caption>
                <tbody>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">マーベロン28</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          1シート（1か月分）
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span class="pc-hidden">1シート（1か月分）</span>3,025<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item min-height-auto" colspan="2">
                    <td class="price-list-table__text--attention">※ロアキュタンと同時購入が必要です。</td>
                  </tr>
                </tbody>
              </table>

              <table class="price-list-table">
                <caption class="price-list-table__caption center">スーパーフォトセラピー ICON MaxG（IPL：光治療）</caption>
                <tbody>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">
                      全顔<br>
                      <span class="min">【リピーター割引】<br>
                      2か月以内に再施術の場合はトライアル価格で
                      お受けいただけます。</span>
                    </td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          トライアル
                        </li>
                        <li class="center">
                          1回
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span class="pc-hidden">トライアル</span>14,300<span>円</span>
                        </li>
                        <li>
                          <span class="pc-hidden">1回</span>19,800<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">
                      全顔＋頬 重ね打ち（1.5倍照射）<br>
                      <span class="min">【リピーター割引】<br>
                      2か月以内に再施術の場合はトライアル価格で
                      お受けいただけます。</span>
                    </td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          トライアル
                        </li>
                        <li class="center">
                          1回
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span class="pc-hidden">トライアル</span>18,700<span>円</span>
                        </li>
                        <li>
                          <span class="pc-hidden">1回</span>24,200<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">スポット</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          5shot
                        </li>
                        <li class="center">
                          20shot
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span class="pc-hidden">5shot</span>5,500<span>円</span>
                        </li>
                        <li>
                          <span class="pc-hidden">20shot</span>11,000<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item min-height-auto" colspan="2">
                    <td class="price-list-table__text--attention">
                      ※看護師による照射となります。<br>
                      ※2回目以降の施術はリピーター割引が適用されます。それぞれ1回あたりの価格です。<br>
                      ※リピーター割引は2ヶ月以内の来院で適用となります。
                    </td>
                  </tr>
                </tbody>
              </table>

              <table class="price-list-table">
                <caption class="price-list-table__caption center">ライムライト（IPL：光治療）</caption>
                <tbody>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">トライアル</td>
                    <td class="price-list-table__cost">11,000<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">1回</td>
                    <td class="price-list-table__cost">25,300<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">4回コース</td>
                    <td class="price-list-table__cost">77,000<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">6回コース</td>
                    <td class="price-list-table__cost">110,000<span>円</span></td>
                  </tr>
                </tbody>
              </table>

              <table class="price-list-table">
                <caption class="price-list-table__caption center">ジェネシス</caption>
                <tbody>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">トライアル</td>
                    <td class="price-list-table__cost">11,000<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">1回</td>
                    <td class="price-list-table__cost">16,500<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">4回コース</td>
                    <td class="price-list-table__cost">56,100<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">6回コース</td>
                    <td class="price-list-table__cost">79,200<span>円</span></td>
                  </tr>
                </tbody>
              </table>

              <table class="price-list-table">
                <caption class="price-list-table__caption center">ジェネシス　プレミアム</caption>
                <tbody>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">トライアル</td>
                    <td class="price-list-table__cost">15,400<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">1回</td>
                    <td class="price-list-table__cost">25,300<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">4回コース</td>
                    <td class="price-list-table__cost">77,000<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">6回コース</td>
                    <td class="price-list-table__cost">110,000<span>円</span></td>
                  </tr>
                </tbody>
              </table>

              <table class="price-list-table">
                <caption class="price-list-table__caption center">ダーマインフューズ<br class="pc-hidden">（エレクトロポレーション）</caption>
                <tbody>
                  <tr class="price-list-table__item min-height-auto" colspan="2">
                    <td class="price-list-table__text--blue">ダーマインフューズ（エレクトロポレーション）</td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">ベーストリートメントジェル</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          顔　1回
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span class="pc-hidden">顔　1回</span>9,900<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">
                      下記メニューと同時施術の場合<br>
                      <span class="min">カスタマイザーIPL/ICON MaxG/ライムライト/
                      ジェネシス/タイタン/レーザートーニング/
                      ポテンツァ ダイヤモンドチップ</span>
                    </td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          顔　1回
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span class="pc-hidden">顔　1回</span>8,800<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">
                      下記メニュー２つと同時施術の場合<br>
                      <span class="min">カスタマイザーIPL/ICON MaxG/ライムライト/
                      ジェネシス/タイタン/レーザートーニング/
                      ポテンツァ ダイヤモンドチップ</span>
                    </td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          顔　1回
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span class="pc-hidden">顔　1回</span>7,700<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item min-height-auto" colspan="2">
                    <td class="price-list-table__text--blue">ダーマインフューズ（エレクトロポレーション）＋マヌカハニーMIXピール</td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">ダーマインフューズ＋マヌカハニー<br>MIXピール</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          顔　1回
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span class="pc-hidden">顔　1回</span>18,700<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                </tbody>
              </table>

              <table class="price-list-table option">
                <caption class="price-list-table__caption center">オプション</caption>
                <tbody>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">トラネキサム酸導入</td>
                    <td class="price-list-table__cost">1,100<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">スクライバー</td>
                    <td class="price-list-table__cost">3,300<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">DRMマスク</td>
                    <td class="price-list-table__cost">3,300<span>円</span></td>
                  </tr>
                </tbody>
              </table>

              <table class="price-list-table">
                <caption class="price-list-table__caption center">イオン導入</caption>
                <tbody>
                  <tr class="price-list-table__item min-height-auto" colspan="2">
                    <td class="price-list-table__text--blue">イオン導入（ビタミンC＋16種アミノ酸）</td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">背中</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          1回
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span class="pc-hidden">1回</span>8,250<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">顔</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          1回
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span class="pc-hidden">1回</span>5,500<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">
                      下記メニューと同時施術の場合<br>
                      <span class="min">カスタマイザーIPL/ICON MaxG/ライムライト/
                      ジェネシス/タイタン/レーザートーニング/
                      ポテンツァ ダイヤモンドチップ</span>
                    </td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          背中　1回
                        </li>
                        <li class="center">
                          顔　1回
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span class="pc-hidden">背中　1回</span>7,150<span>円</span>
                        </li>
                        <li>
                          <span class="pc-hidden">顔　1回</span>4,400<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>

                  <tr class="price-list-table__item min-height-auto" colspan="2">
                    <td class="price-list-table__text--blue">イオン導入 ＋ マヌカハニーMIXピール</td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">背中</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          1回
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span class="pc-hidden">1回</span>20,900<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">顔</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          1回
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span class="pc-hidden">1回</span>14,300<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">顔</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          5回セット
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span class="pc-hidden">5回セット</span>60,500<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                </tbody>
              </table>

              <table class="price-list-table option">
                <caption class="price-list-table__caption center">オプション</caption>
                <tbody>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">トラネキサム酸導入</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          1回
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span class="pc-hidden">1回</span>1,100<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                </tbody>
              </table>

              <table class="price-list-table">
                <caption class="price-list-table__caption center">ポテンツァ（POTENZA）</caption>
                <tbody>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">POTENZA CPチップ</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          トライアル
                        </li>
                        <li class="center">
                          1回
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span class="pc-hidden">トライアル</span>49,500<span>円</span>
                        </li>
                        <li>
                          <span class="pc-hidden">1回</span>77,000<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">POTENZA Sチップ</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          トライアル
                        </li>
                        <li class="center">
                          1回
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span class="pc-hidden">トライアル</span>27,500<span>円</span>
                        </li>
                        <li>
                          <span class="pc-hidden">1回</span>49,500<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">POTENZA　DIAMOND</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          トライアル
                        </li>
                        <li class="center">
                          1回
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span class="pc-hidden">トライアル</span>38,500<span>円</span>
                        </li>
                        <li>
                          <span class="pc-hidden">1回</span>55,000<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item min-height-auto" colspan="2">
                    <td class="price-list-table__text--attention">
                      ※【リピーター割引】<br>
                      3か月以内に再施術の場合はトライアル価格でお受けいただけます。
                    </td>
                  </tr>
                </tbody>
              </table>

              <table class="price-list-table option">
                <caption class="price-list-table__caption center">オプション（ドラックデリバリー用薬液）</caption>
                <tbody>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">浄化濃縮幹細胞セクレトーム</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          1回
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span class="pc-hidden">1回</span>71,500<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">エクソソーム</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          1回
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span class="pc-hidden">1回</span>38,500<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">スネコス</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          1回
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span class="pc-hidden">1回</span>33,000<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">コラーゲンブースタ―　6cc(150μg)</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          1回
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span class="pc-hidden">1回</span>26,400<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">コラーゲンブースタ―　4cc(100μg)</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          1回
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span class="pc-hidden">1回</span>19,800<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">コラーゲンブースタ―　2cc(50μg)</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          1回
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span class="pc-hidden">1回</span>11,000<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">ボトックス</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          1回
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span class="pc-hidden">1回</span>22,000<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">ボトックス（韓国製ジェネリック）</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          1回
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span class="pc-hidden">1回</span>16,500<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                </tbody>
              </table>

              <table class="price-list-table">
                <caption class="price-list-table__caption center">マヌカハニーMIXピール<br class="pc-hidden">（ケミカルピーリング）</caption>
                <tbody>
                  <tr class="price-list-table__item min-height-auto" colspan="2">
                    <td class="price-list-table__text--blue">マヌカハニーMIXピール （ケミカルピーリング）</td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">背中1回</td>
                    <td class="price-list-table__cost">17,600<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">顔1回</td>
                    <td class="price-list-table__cost">12,100<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">顔3回</td>
                    <td class="price-list-table__cost">33,000<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">顔5顔</td>
                    <td class="price-list-table__cost">52,800<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">
                      下記メニューと同時施術<br>
                      <span class="min">カスタマイザーIPL/ICON MaxG/ライムライト/
                      ジェネシス/タイタン/レーザートーニング/
                      ポテンツァ ダイヤモンドチップ</span>
                    </td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          顔1回
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span class="pc-hidden">顔1回</span>9,900<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">
                      下記メニュー２つと同時施術<br>
                      <span class="min">カスタマイザーIPL/ICON MaxG/ライムライト/
                      ジェネシス/タイタン/レーザートーニング/
                      ポテンツァ ダイヤモンドチップ</span>
                    </td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          顔1回
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span class="pc-hidden">顔1回</span>7,700<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>

                  <tr class="price-list-table__item min-height-auto" colspan="2">
                    <td class="price-list-table__text--blue">マヌカハニーMIXピール（ケミカルピーリング）＋ ジェネシス背中6000shot</td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">1回</td>
                    <td class="price-list-table__cost">30,800<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">6回</td>
                    <td class="price-list-table__cost">154,000<span>円</span></td>
                  </tr>
                </tbody>
              </table>

              <table class="price-list-table">
                <caption class="price-list-table__caption center">美容点的・注射</caption>
                <tbody>
                  <tr class="price-list-table__item min-height-auto" colspan="2">
                    <td class="price-list-table__text--blue">トータルケア</td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">シンシアプレミアム点滴</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          60分
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span class="pc-hidden">60分</span>13,200<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>

                  <tr class="price-list-table__item min-height-auto" colspan="2">
                    <td class="price-list-table__text--blue">次世代のエイジングケア治療「NMN点滴」</td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">150mg</td>
                    <td class="price-list-table__middle min-height-12">
                      <ul>
                        <li class="center">
                          トライアル
                        </li>
                        <li class="center">
                          1回
                        </li>
                        <li class="center">
                          3回
                        </li>
                        <li class="center">
                          5回
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost min-height-12">
                      <ul>
                        <li>
                          <span class="pc-hidden">トライアル</span>22,000<span>円</span>
                        </li>
                        <li>
                          <span class="pc-hidden">1回</span>33,000<span>円</span>
                        </li>
                        <li>
                          <span class="pc-hidden">3回</span>89,100<span>円</span>
                        </li>
                        <li>
                          <span class="pc-hidden">5回</span>137,500<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">300mg</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          1回
                        </li>
                        <li class="center">
                          3回
                        </li>
                        <li class="center">
                          5回
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span class="pc-hidden">1回</span>57,200<span>円</span>
                        </li>
                        <li>
                          <span class="pc-hidden">3回</span>154,440<span>円</span>
                        </li>
                        <li>
                          <span class="pc-hidden">5回</span>243,100<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>

                  <tr class="price-list-table__item min-height-auto" colspan="2">
                    <td class="price-list-table__text--blue">美白・美肌治療</td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">白玉点滴</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          20分
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span class="pc-hidden">20分</span>7,920<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item row3">
                    <td class="price-list-table__text">白玉点滴</td>
                    <td class="price-list-table__cost">6,820<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">白玉点滴＋高濃度ビタミンC点滴</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          60分
                        </li>
                        <li class="center">
                          60分 5回コース
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span class="pc-hidden">60分</span>12,100<span>円</span>
                        </li>
                        <li>
                          <span class="pc-hidden">60分 5回コース</span>48,400<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item row3">
                    <td class="price-list-table__text">プチ白玉＋ビタミンC注射<br>（時間がなくお急ぎの方・手早く済ませたい方に）</td>
                    <td class="price-list-table__cost">3,300<span>円</span></td>
                  </tr>

                  <tr class="price-list-table__item min-height-auto" colspan="2">
                    <td class="price-list-table__text--blue">美白・美肌治療</td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">高濃度ビタミンC 10g＋ラクテック250ml</td>
                    <td class="price-list-table__cost">4,400<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">高濃度ビタミンC 15g＋ラクテック250ml</td>
                    <td class="price-list-table__cost">5,500<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">高濃度ビタミンC 20g＋ラクテック250ml</td>
                    <td class="price-list-table__cost">6,600<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">高濃度ビタミンC 25g＋ラクテック250ml</td>
                    <td class="price-list-table__cost">7,700<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">高濃度ビタミンC 30g＋ラクテック250ml</td>
                    <td class="price-list-table__cost">8,800<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">高濃度ビタミンC 40g＋ラクテック500ml</td>
                    <td class="price-list-table__cost">13,200<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">高濃度ビタミンC 50g＋ラクテック500ml</td>
                    <td class="price-list-table__cost">16,500<span>円</span></td>
                  </tr>

                  <tr class="price-list-table__item min-height-auto" colspan="2">
                    <td class="price-list-table__text--blue">疲労回復治療</td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">にんにく注射</td>
                    <td class="price-list-table__cost">1,650<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">にんにく注射プラス</td>
                    <td class="price-list-table__cost">2,200<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">スーパーにんにく注射</td>
                    <td class="price-list-table__cost">2,750<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">最強にんにく注射</td>
                    <td class="price-list-table__cost">3,300<span>円</span></td>
                  </tr>

                  <tr class="price-list-table__item min-height-auto" colspan="2">
                    <td class="price-list-table__text--blue">基本点滴</td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">シンシア基本点滴</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          20分
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span class="pc-hidden">20分</span>2,750<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>

                  <tr class="price-list-table__item min-height-auto" colspan="2">
                    <td class="price-list-table__text--blue">目的別スペシャル点滴</td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">ダイエット点滴</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          20分
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span class="pc-hidden">20分</span>4,400<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">疲労回復点滴</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          20分
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span class="pc-hidden">20分</span>4,400<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">二日酔い点滴</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          20分
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span class="pc-hidden">20分</span>3,850<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">ニキビ・花粉症点滴</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          20分
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span class="pc-hidden">20分</span>4,950<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">プラセンタ点滴（スマホ点滴）</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          20分
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span class="pc-hidden">20分</span>6,600<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">プラセンタ注射<br>（時間がなくお急ぎの方・手早く済ませたい方に）</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center none">
                          追加1Aごと
                        </li>
                        <li class="center">
                          追加1Aごと
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span class="pc-hidden"></span>1,100<span>円</span>
                        </li>
                        <li>
                          <span class="pc-hidden">追加1Aごと</span>1,100<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>

                  <tr class="price-list-table__item min-height-auto" colspan="2">
                    <td class="price-list-table__text--blue">追加成分メニュー</td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">プラセンタ</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          1回 2A
                        </li>
                        <li class="center">
                          追加1Aごと
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span class="pc-hidden">1回 2A</span>2,200<span>円</span>
                        </li>
                        <li>
                          <span class="pc-hidden">追加1Aごと</span>1,100<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">カルニチン</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          1回<br>（最大2Aまで）
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span class="pc-hidden">1回<br>（最大2Aまで）</span>770<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">αリポ酸（25mg）</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          1回<br>（最大2Aまで）
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span class="pc-hidden">1回<br>（最大2Aまで）</span>770<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">ビタミンC（2000mg）</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          1回<br>（最大2Aまで）
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span class="pc-hidden">1回<br>（最大2Aまで）</span>770<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">ビタミンB1（10mg）</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          1回<br>（最大2Aまで）
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span class="pc-hidden">1回<br>（最大2Aまで）</span>770<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">ビタミンB2（10mg）</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          1回<br>（最大2Aまで）
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span class="pc-hidden">1回<br>（最大2Aまで）</span>770<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">ビタミンB5（100mg）</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          1回<br>（最大2Aまで）
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span class="pc-hidden">1回<br>（最大2Aまで）</span>770<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">ビタミンB6（10mg）</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          1回<br>（最大2Aまで）
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span class="pc-hidden">1回<br>（最大2Aまで）</span>770<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">ビタミンB12（1mg）</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          1回<br>（最大2Aまで）
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span class="pc-hidden">1回<br>（最大2Aまで）</span>770<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">ビタミンH（1mg）</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          1回<br>（最大2Aまで）
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span class="pc-hidden">1回<br>（最大2Aまで）</span>770<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">グリチルリチン（20ml）</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          1回<br>（最大2Aまで）
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span class="pc-hidden">1回<br>（最大2Aまで）</span>770<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">トラネキサム酸（250mg）</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          1回<br>（最大2Aまで）
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span class="pc-hidden">1回<br>（最大2Aまで）</span>770<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">ラクテック（補液療法500ml）</td>
                    <td class="price-list-table__cost">1,100<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">グルタチオン（200mg）</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          1回<br>（最大5Aまで）
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span class="pc-hidden">1回<br>（最大5Aまで）</span>990<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div><!-- price-list-bottom__content -->

            <!-- 赤ら顔（酒さ）・毛細血管拡張症治療 -->
            <div class="price-list-bottom__content" id="cosmetic-dermatology-5">
              <div class="price-list-bottom__content__headline">
                <p class="price-list-bottom__content__headline--text">赤ら顔（酒さ）・<br class="pc-hidden">毛細血管拡張症治療</p>
                <a href="" class="price-list-btn">施術詳細を見る</a>
              </div>

              <table class="price-list-table">
                <caption class="price-list-table__caption center">スーパーフォトセラピー ICON MaxG（IPL：光治療）</caption>
                <tbody>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">
                      全顔<br>
                      <span class="min">【リピーター割引】<br>
                      2か月以内に再施術の場合はトライアル価格でお受けいただけます。</span>
                    </td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          トライアル
                        </li>
                        <li class="center">
                          1回
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span class="pc-hidden">トライアル</span>14,300<span>円</span>
                        </li>
                        <li>
                          <span class="pc-hidden">1回</span>19,800<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">
                      全顔＋頬 重ね打ち（1.5倍照射）<br>
                      <span class="min">【リピーター割引】<br>
                      2か月以内に再施術の場合はトライアル価格でお受けいただけます。</span>
                    </td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          トライアル
                        </li>
                        <li class="center">
                          1回
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span class="pc-hidden">トライアル</span>18,700<span>円</span>
                        </li>
                        <li>
                          <span class="pc-hidden">1回</span>24,200<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">スポット</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          5shot
                        </li>
                        <li class="center">
                          20shot
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span class="pc-hidden">5shot</span>5,500<span>円</span>
                        </li>
                        <li>
                          <span class="pc-hidden">20shot</span>11,000<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item min-height-auto" colspan="2">
                    <td class="price-list-table__text--attention">
                      ※看護師による照射となります。<br>
                      ※2回目以降の施術はリピーター割引が適用されます。それぞれ1回あたりの価格です。<br>
                      ※リピーター割引は2ヶ月以内の来院で適用となります。
                    </td>
                  </tr>
                </tbody>
              </table>

              <table class="price-list-table">
                <caption class="price-list-table__caption center">ライムライト（IPL：光治療）</caption>
                <tbody>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">トライアル</td>
                    <td class="price-list-table__cost">11,000<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">1回</td>
                    <td class="price-list-table__cost">25,300<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">4回コース</td>
                    <td class="price-list-table__cost">77,000<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">6回コース</td>
                    <td class="price-list-table__cost">110,000<span>円</span></td>
                  </tr>
                </tbody>
              </table>

              <table class="price-list-table">
                <caption class="price-list-table__caption center">ジェネシス</caption>
                <tbody>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">トライアル</td>
                    <td class="price-list-table__cost">11,000<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">1回</td>
                    <td class="price-list-table__cost">16,500<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">4回コース</td>
                    <td class="price-list-table__cost">56,100<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">6回コース</td>
                    <td class="price-list-table__cost">79,200<span>円</span></td>
                  </tr>
                </tbody>
              </table>

              <table class="price-list-table">
                <caption class="price-list-table__caption center">ジェネシス　プレミアム</caption>
                <tbody>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">トライアル</td>
                    <td class="price-list-table__cost">15,400<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">1回</td>
                    <td class="price-list-table__cost">25,300<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">4回コース</td>
                    <td class="price-list-table__cost">77,000<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">6回コース</td>
                    <td class="price-list-table__cost">110,000<span>円</span></td>
                  </tr>
                </tbody>
              </table>

              <table class="price-list-table">
                <caption class="price-list-table__caption center">スーパーフォトセラピー ICON MaxG（IPL：光治療）</caption>
                <tbody>
                  <tr class="price-list-table__item min-height-auto" colspan="2">
                    <td class="price-list-table__text--blue">ダーマインフューズ（エレクトロポレーション）</td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">ベーストリートメントジェル</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          顔　1回
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span class="pc-hidden">顔　1回</span>9,900<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">
                      下記メニューと同時施術の場合<br>
                      <span class="min">カスタマイザーIPL/ICON MaxG/ライムライト/
                      ジェネシス/タイタン/レーザートーニング/
                      ポテンツァ ダイヤモンドチップ</span>
                    </td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          顔　1回
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span class="pc-hidden">顔　1回</span>8,800<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">
                      下記メニュー２つと同時施術の場合<br>
                      <span class="min">カスタマイザーIPL/ICON MaxG/ライムライト/
                      ジェネシス/タイタン/レーザートーニング/
                      ポテンツァ ダイヤモンドチップ</span>
                    </td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          顔　1回
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span class="pc-hidden">顔　1回</span>7,700<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item min-height-auto" colspan="2">
                    <td class="price-list-table__text--blue">ダーマインフューズ（エレクトロポレーション）＋マヌカハニーMIXピール</td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">ダーマインフューズ＋マヌカハニー<br>MIXピール</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          顔　1回
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span class="pc-hidden">顔　1回</span>18,700<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                </tbody>
              </table>

              <table class="price-list-table">
                <caption class="price-list-table__caption center">ホルモン療法</caption>
                <tbody>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">マーベロン28</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          1シート（1か月分）
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span class="pc-hidden">1シート（1か月分）</span>3,025<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item min-height-auto" colspan="2">
                    <td class="price-list-table__text--attention">※ロアキュタンと同時購入が必要です。</td>
                  </tr>
                </tbody>
              </table>

              <table class="price-list-table option">
                <caption class="price-list-table__caption center">オプション</caption>
                <tbody>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">トラネキサム酸導入</td>
                    <td class="price-list-table__cost">1,100<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">スクライバー</td>
                    <td class="price-list-table__cost">3,300<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">DRMマスク</td>
                    <td class="price-list-table__cost">3,300<span>円</span></td>
                  </tr>
                </tbody>
              </table>

              <table class="price-list-table">
                <caption class="price-list-table__caption center">イオン導入</caption>
                <tbody>
                  <tr class="price-list-table__item min-height-auto" colspan="2">
                    <td class="price-list-table__text--blue">イオン導入（ビタミンC＋16種アミノ酸）</td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">背中</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          1回
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span class="pc-hidden">1回</span>8,250<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">顔</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          1回
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span class="pc-hidden">1回</span>5,500<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">
                      下記メニューと同時施術の場合<br>
                      <span class="min">カスタマイザーIPL/ICON MaxG/ライムライト/
                      ジェネシス/タイタン/レーザートーニング/
                      ポテンツァ ダイヤモンドチップ</span>
                    </td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          背中　1回
                        </li>
                        <li class="center">
                          顔　1回
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span class="pc-hidden">背中　1回</span>7,150<span>円</span>
                        </li>
                        <li>
                          <span class="pc-hidden">顔　1回</span>4,400<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item min-height-auto" colspan="2">
                    <td class="price-list-table__text--blue">イオン導入 ＋ マヌカハニーMIXピール</td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">背中</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          1回
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span class="pc-hidden">1回</span>20,900<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">顔</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          1回
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span class="pc-hidden">1回</span>14,300<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">顔</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          5回セット
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span class="pc-hidden">5回セット</span>60,500<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                </tbody>
              </table>

              <table class="price-list-table">
                <caption class="price-list-table__caption center">ポテンツァ（POTENZA）</caption>
                <tbody>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">POTENZA CPチップ</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          トライアル
                        </li>
                        <li class="center">
                          1回
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span class="pc-hidden">トライアル</span>49,500<span>円</span>
                        </li>
                        <li>
                          <span class="pc-hidden">1回</span>77,000<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">POTENZA Sチップ</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          トライアル
                        </li>
                        <li class="center">
                          1回
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span class="pc-hidden">トライアル</span>27,500<span>円</span>
                        </li>
                        <li>
                          <span class="pc-hidden">1回</span>49,500<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">POTENZA　DIAMOND</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          トライアル
                        </li>
                        <li class="center">
                          1回
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span class="pc-hidden">トライアル</span>38,500<span>円</span>
                        </li>
                        <li>
                          <span class="pc-hidden">1回</span>55,000<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item min-height-auto" colspan="2">
                    <td class="price-list-table__text--attention">
                      ※【リピーター割引】<br>
                      3か月以内に再施術の場合はトライアル価格でお受けいただけます。
                    </td>
                  </tr>
                </tbody>
              </table>

              <table class="price-list-table option">
                <caption class="price-list-table__caption center">オプション（ドラックデリバリー用薬液）</caption>
                <tbody>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">浄化濃縮幹細胞セクレトーム</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          1回
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span class="pc-hidden">1回</span>71,500<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">エクソソーム</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          1回
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span class="pc-hidden">1回</span>38,500<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">スネコス</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          1回
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span class="pc-hidden">1回</span>33,000<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">コラーゲンブースタ―　6cc(150μg)</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          1回
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span class="pc-hidden">1回</span>26,400<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">コラーゲンブースタ―　4cc(100μg)</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          1回
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span class="pc-hidden">1回</span>19,800<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">コラーゲンブースタ―　2cc(50μg)</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          1回
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span class="pc-hidden">1回</span>11,000<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">ボトックス</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          1回
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span class="pc-hidden">1回</span>22,000<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">ボトックス（韓国製ジェネリック）</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          1回
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span class="pc-hidden">1回</span>16,500<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                </tbody>
              </table>

              <table class="price-list-table">
                <caption class="price-list-table__caption center">ダーマローラー</caption>
                <tbody>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">二の腕・前腕</td>
                    <td class="price-list-table__cost">33,000<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">肩</td>
                    <td class="price-list-table__cost">16,500<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">下腿（表側 or 裏側）</td>
                    <td class="price-list-table__cost"><span>各</span>33,000<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">太もも（表側 or 裏側）</td>
                    <td class="price-list-table__cost"><span>各</span>33,000<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">背中上（肩甲骨下縁まで）</td>
                    <td class="price-list-table__cost">33,000<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">背中下（仙骨の上縁まで）</td>
                    <td class="price-list-table__cost">33,000<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">背中全体</td>
                    <td class="price-list-table__cost">49,500<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">臀部</td>
                    <td class="price-list-table__cost">49,500<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">ローラー代（4回使用／半年保管）</td>
                    <td class="price-list-table__cost">49,500<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item min-height-auto" colspan="2">
                    <td class="price-list-table__text--attention">※又吉総院長ご希望の場合、1回につき3部位まで＋33,000円、4部位以上＋55,000円</td>
                  </tr>

                  <tr class="price-list-table__item option min-height-auto" colspan="2">
                    <td class="price-list-table__text--blue">組み合わせ薬剤</td>
                  </tr>
                  <tr class="price-list-table__item option-gray">
                    <td class="price-list-table__text">プラセンタ導入</td>
                    <td class="price-list-table__cost">3,300<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item option-gray">
                    <td class="price-list-table__text">トラネキサム酸導入</td>
                    <td class="price-list-table__cost">3,300<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item option-gray">
                    <td class="price-list-table__text">コラーゲンブースタ―導入</td>
                    <td class="price-list-table__cost">11,000<span>円</span></td>
                  </tr>

                  <tr class="price-list-table__item option min-height-auto" colspan="2">
                    <td class="price-list-table__text--blue">オプション</td>
                  </tr>
                  <tr class="price-list-table__item option-gray">
                    <td class="price-list-table__text">痛み止め点滴</td>
                    <td class="price-list-table__cost">5,500<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item option-gray">
                    <td class="price-list-table__text">痛み止め注射</td>
                    <td class="price-list-table__cost">3,300<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item option-gray">
                    <td class="price-list-table__text">〈処方〉プラスリストア日焼け止め</td>
                    <td class="price-list-table__cost">3,080<span>円</span></td>
                  </tr>

                  <tr class="price-list-table__item option min-height-auto" colspan="2">
                    <td class="price-list-table__text--blue">フラクショナルMEGA導入</td>
                  </tr>
                  <tr class="price-list-table__item option-gray">
                    <td class="price-list-table__text">1回</td>
                    <td class="price-list-table__cost">8,800<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item option-gray">
                    <td class="price-list-table__text">ローラー代（20回使用／1年間保管）</td>
                    <td class="price-list-table__cost">8,800<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item option-gray min-height-auto" colspan="2">
                    <td class="price-list-table__text--attention">
                      ※ローラーに関しましてクリニックでの施術用と自宅用は別々でご使用ください。<br>
                      お持ち帰りは可能ですが、持ち込んでいただいての治療の方はお受けしかねます。
                    </td>
                  </tr>
                </tbody>
              </table>

              <table class="price-list-table">
                <caption class="price-list-table__caption center">マヌカハニーMIXピール<br class="pc-hidden">（ケミカルピーリング）</caption>
                <tbody>
                  <tr class="price-list-table__item min-height-auto" colspan="2">
                    <td class="price-list-table__text--blue">マヌカハニーMIXピール （ケミカルピーリング）</td>
                  </tr>
                  <tr class="price-list-table__item row3">
                    <td class="price-list-table__text">背中1回</td>
                    <td class="price-list-table__cost">17,600<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item row3">
                    <td class="price-list-table__text">顔1回</td>
                    <td class="price-list-table__cost">12,100<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item row3">
                    <td class="price-list-table__text">顔3回</td>
                    <td class="price-list-table__cost">33,000<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item row3">
                    <td class="price-list-table__text">顔5顔</td>
                    <td class="price-list-table__cost">52,800<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">
                      下記メニューと同時施術<br>
                      <span class="min">カスタマイザーIPL/ICON MaxG/ライムライト/
                      ジェネシス/タイタン/レーザートーニング/
                      ポテンツァ ダイヤモンドチップ</span>
                    </td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          顔1回
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span class="pc-hidden">顔1回</span>9,900<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">
                      下記メニュー２つと同時施術<br>
                      <span class="min">カスタマイザーIPL/ICON MaxG/ライムライト/
                      ジェネシス/タイタン/レーザートーニング/
                      ポテンツァ ダイヤモンドチップ</span>
                    </td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          顔1回
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span class="pc-hidden">顔1回</span>7,700<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item min-height-auto" colspan="2">
                    <td class="price-list-table__text--blue">マヌカハニーMIXピール（ケミカルピーリング）＋ ジェネシス背中6000shot</td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">1回</td>
                    <td class="price-list-table__cost">30,800<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">6回</td>
                    <td class="price-list-table__cost">154,000<span>円</span></td>
                  </tr>
                </tbody>
              </table>

              <table class="price-list-table">
                <caption class="price-list-table__caption center">美容点的・注射</caption>
                <tbody>
                  <tr class="price-list-table__item min-height-auto" colspan="2">
                    <td class="price-list-table__text--blue">トータルケア</td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">シンシアプレミアム点滴</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          60分
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span class="pc-hidden">60分</span>13,200<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>

                  <tr class="price-list-table__item min-height-auto" colspan="2">
                    <td class="price-list-table__text--blue">次世代のエイジングケア治療「NMN点滴」</td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">150mg</td>
                    <td class="price-list-table__middle min-height-12">
                      <ul>
                        <li class="center">
                          トライアル
                        </li>
                        <li class="center">
                          1回
                        </li>
                        <li class="center">
                          3回
                        </li>
                        <li class="center">
                          5回
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost min-height-12">
                      <ul>
                        <li>
                          <span class="pc-hidden">トライアル</span>22,000<span>円</span>
                        </li>
                        <li>
                          <span class="pc-hidden">1回</span>33,000<span>円</span>
                        </li>
                        <li>
                          <span class="pc-hidden">3回</span>89,100<span>円</span>
                        </li>
                        <li>
                          <span class="pc-hidden">5回</span>137,500<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">300mg</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          1回
                        </li>
                        <li class="center">
                          3回
                        </li>
                        <li class="center">
                          5回
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span class="pc-hidden">1回</span>57,200<span>円</span>
                        </li>
                        <li>
                          <span class="pc-hidden">3回</span>154,440<span>円</span>
                        </li>
                        <li>
                          <span class="pc-hidden">5回</span>243,100<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>

                  <tr class="price-list-table__item min-height-auto" colspan="2">
                    <td class="price-list-table__text--blue">美白・美肌治療</td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">白玉点滴</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          20分
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span class="pc-hidden">20分</span>7,920<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">白玉点滴</td>
                    <td class="price-list-table__cost">6,820<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">白玉点滴＋高濃度ビタミンC点滴</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          60分
                        </li>
                        <li class="center">
                          60分 5回コース
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span class="pc-hidden">60分</span>12,100<span>円</span>
                        </li>
                        <li>
                          <span class="pc-hidden">60分 5回コース</span>48,400<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">プチ白玉＋ビタミンC注射（時間がなくお急ぎの方・手早く済ませたい方に）</td>
                    <td class="price-list-table__cost">3,300<span>円</span></td>
                  </tr>

                  <tr class="price-list-table__item min-height-auto" colspan="2">
                    <td class="price-list-table__text--blue">高濃度ビタミンC点滴</td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">高濃度ビタミンC 10g＋ラクテック250ml</td>
                    <td class="price-list-table__cost">4,400<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">高濃度ビタミンC 15g＋ラクテック250ml</td>
                    <td class="price-list-table__cost">5,500<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">高濃度ビタミンC 20g＋ラクテック250ml</td>
                    <td class="price-list-table__cost">6,600<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">高濃度ビタミンC 25g＋ラクテック250ml</td>
                    <td class="price-list-table__cost">7,700<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">高濃度ビタミンC 30g＋ラクテック250ml</td>
                    <td class="price-list-table__cost">8,800<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">高濃度ビタミンC 40g＋ラクテック500ml</td>
                    <td class="price-list-table__cost">13,200<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">高濃度ビタミンC 50g＋ラクテック500ml</td>
                    <td class="price-list-table__cost">16,500<span>円</span></td>
                  </tr>

                  <tr class="price-list-table__item min-height-auto" colspan="2">
                    <td class="price-list-table__text--blue">疲労回復治療</td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">にんにく注射</td>
                    <td class="price-list-table__cost">1,650<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">にんにく注射プラス</td>
                    <td class="price-list-table__cost">2,200<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">スーパーにんにく注射</td>
                    <td class="price-list-table__cost">2,750<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">最強にんにく注射</td>
                    <td class="price-list-table__cost">3,300<span>円</span></td>
                  </tr>

                  <tr class="price-list-table__item min-height-auto" colspan="2">
                    <td class="price-list-table__text--blue">基本点滴</td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">シンシア基本点滴</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          20分
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span class="pc-hidden">20分</span>2,750<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>

                  <tr class="price-list-table__item min-height-auto" colspan="2">
                    <td class="price-list-table__text--blue">目的別スペシャル点滴</td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">ダイエット点滴</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          20分
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span class="pc-hidden">20分</span>4,400<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">疲労回復点滴</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          20分
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span class="pc-hidden">20分</span>4,400<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">二日酔い点滴</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          20分
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span class="pc-hidden">20分</span>3,850<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">ニキビ・花粉症点滴</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          20分
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span class="pc-hidden">20分</span>4,950<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">プラセンタ点滴（スマホ点滴）</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          20分
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span class="pc-hidden">20分</span>6,600<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">プラセンタ注射<br>（時間がなくお急ぎの方・手早く済ませたい方に）</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                        </li>
                        <li class="center">
                          追加1Aごと
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span class="pc-hidden">追加1Aごと</span>1,100<span>円</span>
                        </li>
                        <li>
                          <span class="pc-hidden">追加1Aごと</span>1,100<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>

                  <tr class="price-list-table__item min-height-auto" colspan="2">
                    <td class="price-list-table__text--blue">追加成分メニュー</td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">プラセンタ</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          1回 2A
                        </li>
                        <li class="center">
                          追加 1Aごと
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span class="pc-hidden">1回 2A</span>2,200<span>円</span>
                        </li>
                        <li>
                          <span class="pc-hidden">追加 1Aごと</span>1,100<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">カルニチン</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          1A<br>（最大2Aまで）
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span class="pc-hidden">1A<br>（最大2Aまで）</span>770<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">αリポ酸（25mg）</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          1A<br>（最大2Aまで）
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span class="pc-hidden">1A<br>（最大2Aまで）</span>770<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">ビタミンC（2000mg）</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          1A<br>（最大2Aまで）
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span class="pc-hidden">1A<br>（最大2Aまで）</span>770<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">ビタミンB1（10mg）</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          1A<br>（最大2Aまで）
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span class="pc-hidden">1A<br>（最大2Aまで）</span>770<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">ビタミンB2（10mg）</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          1A<br>（最大2Aまで）
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span class="pc-hidden">1A<br>（最大2Aまで）</span>770<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">ビタミンB5（100mg）</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          1A<br>（最大2Aまで）
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span class="pc-hidden">1A<br>（最大2Aまで）</span>770<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">ビタミンB6（10mg）</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          1A<br>（最大2Aまで）
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span class="pc-hidden">1A<br>（最大2Aまで）</span>770<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">ビタミンB12（1mg）</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          1A<br>（最大2Aまで）
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span class="pc-hidden">1A<br>（最大2Aまで）</span>770<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">ビタミンH（1mg）</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          1A<br>（最大2Aまで）
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span class="pc-hidden">1A<br>（最大2Aまで）</span>770<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">グリチルリチン（20ml）</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          1A<br>（最大2Aまで）
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span class="pc-hidden">1A<br>（最大2Aまで）</span>770<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">トラネキサム酸（250mg）</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          1A<br>（最大2Aまで）
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span class="pc-hidden">1A<br>（最大2Aまで）</span>770<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">ラクテック（補液療法500ml）</td>
                    <td class="price-list-table__cost">1,100<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">グルタチオン（200mg）</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          1A<br>（最大5Aまで）
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span class="pc-hidden">1A<br>（最大5Aまで）</span>990<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div><!-- price-list-bottom__content -->

            <!-- 毛孔性苔癬治療 -->
            <div class="price-list-bottom__content" id="cosmetic-dermatology-6">
              <div class="price-list-bottom__content__headline">
                <p class="price-list-bottom__content__headline--text">毛孔性苔癬治療</p>
                <a href="" class="price-list-btn">施術詳細を見る</a>
              </div>

              <table class="price-list-table">
                <caption class="price-list-table__caption center">スーパーフォトセラピー ICON MaxG（IPL：光治療）</caption>
                <tbody>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">二の腕・前腕</td>
                    <td class="price-list-table__cost">33,000<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">肩</td>
                    <td class="price-list-table__cost">16,500<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">下腿（表側 or 裏側）</td>
                    <td class="price-list-table__cost"><span>各</span>33,000<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">太もも（表側 or 裏側）</td>
                    <td class="price-list-table__cost"><span>各</span>33,000<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">背中上（肩甲骨下縁まで）</td>
                    <td class="price-list-table__cost">33,000<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">背中下（仙骨の上縁まで）</td>
                    <td class="price-list-table__cost">33,000<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">背中全体</td>
                    <td class="price-list-table__cost">49,500<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">臀部</td>
                    <td class="price-list-table__cost">49,500<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">ローラー代（4回使用／半年保管）</td>
                    <td class="price-list-table__cost">49,500<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item min-height-auto" colspan="2">
                    <td class="price-list-table__text--attention">※又吉総院長ご希望の場合、1回につき3部位まで＋33,000円、4部位以上＋55,000円</td>
                  </tr>

                  <tr class="price-list-table__item option min-height-auto" colspan="2">
                    <td class="price-list-table__text--blue">組み合わせ薬剤</td>
                  </tr>
                  <tr class="price-list-table__item option-gray">
                    <td class="price-list-table__text">プラセンタ導入</td>
                    <td class="price-list-table__cost">3,300<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item option-gray">
                    <td class="price-list-table__text">トラネキサム酸導入</td>
                    <td class="price-list-table__cost">3,300<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item option-gray">
                    <td class="price-list-table__text">コラーゲンブースタ―導入</td>
                    <td class="price-list-table__cost">11,000<span>円</span></td>
                  </tr>

                  <tr class="price-list-table__item option min-height-auto" colspan="2">
                    <td class="price-list-table__text--blue">オプション</td>
                  </tr>
                  <tr class="price-list-table__item option-gray">
                    <td class="price-list-table__text">痛み止め点滴</td>
                    <td class="price-list-table__cost">5,500<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item option-gray">
                    <td class="price-list-table__text">痛み止め注射</td>
                    <td class="price-list-table__cost">3,300<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item option-gray">
                    <td class="price-list-table__text">〈処方〉プラスリストア日焼け止め</td>
                    <td class="price-list-table__cost">3,080<span>円</span></td>
                  </tr>

                  <tr class="price-list-table__item option min-height-auto" colspan="2">
                    <td class="price-list-table__text--blue">フラクショナルMEGA導入</td>
                  </tr>
                  <tr class="price-list-table__item option-gray">
                    <td class="price-list-table__text">1回</td>
                    <td class="price-list-table__cost">8,800<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item option-gray">
                    <td class="price-list-table__text">ローラー代（20回使用／1年間保管）</td>
                    <td class="price-list-table__cost">8,800<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item option-gray min-height-auto" colspan="2">
                    <td class="price-list-table__text--attention">
                      ※ローラーに関しましてクリニックでの施術用と自宅用は別々でご使用ください。<br>
                      お持ち帰りは可能ですが、持ち込んでいただいての治療の方はお受けしかねます。
                    </td>
                  </tr>
                </tbody>
              </table>
            </div><!-- price-list-bottom__content -->

            <!-- いぼ・ほくろ除去 -->
            <div class="price-list-bottom__content" id="cosmetic-dermatology-7">
              <div class="price-list-bottom__content__headline">
                <p class="price-list-bottom__content__headline--text">いぼ・ほくろ除去</p>
                <a href="" class="price-list-btn">施術詳細を見る</a>
              </div>

              <table class="price-list-table">
                <tbody>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">～1mmまで</td>
                    <td class="price-list-table__cost">11,000<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">1.1～3mmまで</td>
                    <td class="price-list-table__cost">22,000<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">3.1～5mmまで</td>
                    <td class="price-list-table__cost">33,000<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">5.1～7mmまで</td>
                    <td class="price-list-table__cost">44,000<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">7.1～9mmまで</td>
                    <td class="price-list-table__cost">55,000<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">9.1mm以上</td>
                    <td class="price-list-table__cost">ご相談ください</td>
                  </tr>
                  <tr class="price-list-table__item min-height-auto" colspan="2">
                    <td class="price-list-table__text--attention">
                      ※足のいぼの場合は、上記の費用とは別に技術料として、別途11,000円を頂戴します。<br>
                      ※コンタクトアイガード使用の場合は、＋11,000円を頂戴します。
                    </td>
                  </tr>
                </tbody>
              </table>
            </div><!-- price-list-bottom__content -->
          </div><!-- price-list-bottom__body -->
        </div><!-- price-list-bottom__container -->
      </div><!-- price-list-bottom__inner -->
    </div><!-- price-list-bottom -->

    <!-- 注入治療 -->
    <div class="price-list-bottom" id="bottom-panel-pouring" hidden>
      <div class="price-list-bottom__inner">
        <div class="price-list__title">
          <h2 class="price-list__title--en">Injection <br class='pc-hidden'>Treatment</h2>
          <p class="price-list__title--ja">注入治療</p>
        </div><!-- price-list__title -->

        <div class="price-list-bottom__container">
          <aside class="price-list-bottom__side">
            <p class="price-list-bottom__side--index">INDEX</p>
            <!-- 共通 -->
            <div class="price-list-bottom__item">
              <p class="price-list-bottom__item--title">共通</p>
              <ul class="price-list-bottom__list">
                <li>
                  <a href="" class="price-list-bottom__link">
                    <span>
                      <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/price-list/icon-bottom-arrow.svg" alt="" width="6" height="6">
                    </span>
                    <span class="price-list-bottom__link--text">初診料・再診料</span>
                  </a>
                </li>
                <li>
                  <a href="" class="price-list-bottom__link">
                    <span>
                      <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/price-list/icon-bottom-arrow.svg" alt="" width="6" height="6">
                    </span>
                    <span class="price-list-bottom__link--text">麻酔・検査費用</span>
                  </a>
                </li>
              </ul>
            </div><!-- price-list-bottom__item -->

            <!-- 美容外科 -->
            <div class="price-list-bottom__item">
              <p class="price-list-bottom__item--title">美容外科</p>
              <ul class="price-list-bottom__list">
                <li>
                  <a href="#cosmetic-surgery-1" class="price-list-bottom__link">
                    <span>
                      <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/price-list/icon-bottom-arrow.svg" alt="" width="6" height="6">
                    </span>
                    <span class="price-list-bottom__link--text">目元のエイジングケア治療</span>
                  </a>
                </li>
                <li>
                  <a href="#cosmetic-surgery-2" class="price-list-bottom__link">
                    <span>
                      <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/price-list/icon-bottom-arrow.svg" alt="" width="6" height="6">
                    </span>
                    <span class="price-list-bottom__link--text">脂肪吸引</span>
                  </a>
                </li>
                <li>
                  <a href="#cosmetic-surgery-3" class="price-list-bottom__link">
                    <span>
                      <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/price-list/icon-bottom-arrow.svg" alt="" width="6" height="6">
                    </span>
                    <span class="price-list-bottom__link--text">豊胸・バスト整形</span>
                  </a>
                </li>
                <li>
                  <a href="#cosmetic-surgery-4" class="price-list-bottom__link">
                    <span>
                      <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/price-list/icon-bottom-arrow.svg" alt="" width="6" height="6">
                    </span>
                    <span class="price-list-bottom__link--text">フェイスリフト</span>
                  </a>
                </li>
                <li>
                  <a href="#cosmetic-surgery-5" class="price-list-bottom__link">
                    <span>
                      <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/price-list/icon-bottom-arrow.svg" alt="" width="6" height="6">
                    </span>
                    <span class="price-list-bottom__link--text">二重まぶた・二重形成術・目元</span>
                  </a>
                </li>
                <li>
                  <a href="#cosmetic-surgery-6" class="price-list-bottom__link">
                    <span>
                      <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/price-list/icon-bottom-arrow.svg" alt="" width="6" height="6">
                    </span>
                    <span class="price-list-bottom__link--text">ワキガ・多汗症治療</span>
                  </a>
                </li>
                <li>
                  <a href="#cosmetic-surgery-7" class="price-list-bottom__link">
                    <span>
                      <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/price-list/icon-bottom-arrow.svg" alt="" width="6" height="6">
                    </span>
                    <span class="price-list-bottom__link--text">糸によるリフトアップ治療</span>
                  </a>
                </li>
                <li>
                  <a href="#cosmetic-surgery-8" class="price-list-bottom__link">
                    <span>
                      <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/price-list/icon-bottom-arrow.svg" alt="" width="6" height="6">
                    </span>
                    <span class="price-list-bottom__link--text">小顔・輪郭形成</span>
                  </a>
                </li>
                <li>
                  <a href="#cosmetic-surgery-9" class="price-list-bottom__link">
                    <span>
                      <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/price-list/icon-bottom-arrow.svg" alt="" width="6" height="6">
                    </span>
                    <span class="price-list-bottom__link--text">鼻の整形</span>
                  </a>
                </li>
                <li>
                  <a href="#cosmetic-surgery-10" class="price-list-bottom__link">
                    <span>
                      <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/price-list/icon-bottom-arrow.svg" alt="" width="6" height="6">
                    </span>
                    <span class="price-list-bottom__link--text">口の整形</span>
                  </a>
                </li>
              </ul>
            </div><!-- price-list-bottom__item -->

            <!-- 美容皮膚科 -->
            <div class="price-list-bottom__item">
              <p class="price-list-bottom__item--title">美容皮膚科</p>
              <ul class="price-list-bottom__list">
                <li>
                  <a href="#cosmetic-dermatology-1" class="price-list-bottom__link">
                    <span>
                      <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/price-list/icon-bottom-arrow.svg" alt="" width="6" height="6">
                    </span>
                    <span class="price-list-bottom__link--text">シワ・たるみ治療</span>
                  </a>
                </li>
                <li>
                  <a href="#cosmetic-dermatology-2" class="price-list-bottom__link">
                    <span>
                      <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/price-list/icon-bottom-arrow.svg" alt="" width="6" height="6">
                    </span>
                    <span class="price-list-bottom__link--text">シミ・そばかす・くすみなどの美白・美肌治療</span>
                  </a>
                </li>
                <li>
                  <a href="#cosmetic-dermatology-3" class="price-list-bottom__link">
                    <span>
                      <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/price-list/icon-bottom-arrow.svg" alt="" width="6" height="6">
                    </span>
                    <span class="price-list-bottom__link--text">肝斑・美白治療</span>
                  </a>
                </li>
                <li>
                  <a href="#cosmetic-dermatology-4" class="price-list-bottom__link">
                    <span>
                      <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/price-list/icon-bottom-arrow.svg" alt="" width="6" height="6">
                    </span>
                    <span class="price-list-bottom__link--text">ニキビ・ニキビ痕治療</span>
                  </a>
                </li>
                <li>
                  <a href="#cosmetic-dermatology-5" class="price-list-bottom__link">
                    <span>
                      <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/price-list/icon-bottom-arrow.svg" alt="" width="6" height="6">
                    </span>
                    <span class="price-list-bottom__link--text">赤ら顔（酒さ）・毛細血管拡張症治療</span>
                  </a>
                </li>
                <li>
                  <a href="#cosmetic-dermatology-6" class="price-list-bottom__link">
                    <span>
                      <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/price-list/icon-bottom-arrow.svg" alt="" width="6" height="6">
                    </span>
                    <span class="price-list-bottom__link--text">毛孔性苔癬治療</span>
                  </a>
                </li>
                <li>
                  <a href="#cosmetic-dermatology-7" class="price-list-bottom__link">
                    <span>
                      <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/price-list/icon-bottom-arrow.svg" alt="" width="6" height="6">
                    </span>
                    <span class="price-list-bottom__link--text">いぼ・ほくろ除去</span>
                  </a>
                </li>
              </ul>
            </div><!-- price-list-bottom__item -->

            <!-- 注入施術 -->
            <div class="price-list-bottom__item">
              <p class="price-list-bottom__item--title">注入施術</p>
              <ul class="price-list-bottom__list">
                <li>
                  <a href="#injection-treatment-1" class="price-list-bottom__link">
                    <span>
                      <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/price-list/icon-bottom-arrow.svg" alt="" width="6" height="6">
                    </span>
                    <span class="price-list-bottom__link--text">美肌・リバースエイジング 注入治療</span>
                  </a>
                </li>
                <li>
                  <a href="#injection-treatment-2" class="price-list-bottom__link">
                    <span>
                      <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/price-list/icon-bottom-arrow.svg" alt="" width="6" height="6">
                    </span>
                    <span class="price-list-bottom__link--text">ヒアルロン酸注入</span>
                  </a>
                </li>
                <li>
                  <a href="#injection-treatment-3" class="price-list-bottom__link">
                    <span>
                      <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/price-list/icon-bottom-arrow.svg" alt="" width="6" height="6">
                    </span>
                    <span class="price-list-bottom__link--text">ボトックス注射</span>
                  </a>
                </li>
              </ul>
            </div><!-- price-list-bottom__item -->

            <!-- その他の施術 -->
            <div class="price-list-bottom__item">
              <p class="price-list-bottom__item--title">その他の施術</p>
              <ul class="price-list-bottom__list">
                <li>
                  <a href="#other-1" class="price-list-bottom__link">
                    <span>
                      <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/price-list/icon-bottom-arrow.svg" alt="" width="6" height="6">
                    </span>
                    <span class="price-list-bottom__link--text">痩身全身</span>
                  </a>
                </li>
                <li>
                  <a href="#other-2" class="price-list-bottom__link">
                    <span>
                      <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/price-list/icon-bottom-arrow.svg" alt="" width="6" height="6">
                    </span>
                    <span class="price-list-bottom__link--text">医療レーザー脱毛</span>
                  </a>
                </li>
                <li>
                  <a href="#other-3" class="price-list-bottom__link">
                    <span>
                      <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/price-list/icon-bottom-arrow.svg" alt="" width="6" height="6">
                    </span>
                    <span class="price-list-bottom__link--text">傷痕・刺青・タトゥー除去</span>
                  </a>
                </li>
                <li>
                  <a href="#other-4" class="price-list-bottom__link">
                    <span>
                      <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/price-list/icon-bottom-arrow.svg" alt="" width="6" height="6">
                    </span>
                    <span class="price-list-bottom__link--text">医療アートメイク</span>
                  </a>
                </li>
                <li>
                  <a href="#other-5" class="price-list-bottom__link">
                    <span>
                      <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/price-list/icon-bottom-arrow.svg" alt="" width="6" height="6">
                    </span>
                    <span class="price-list-bottom__link--text">毛髪再生</span>
                  </a>
                </li>
                <li>
                  <a href="#other-6" class="price-list-bottom__link">
                    <span>
                      <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/price-list/icon-bottom-arrow.svg" alt="" width="6" height="6">
                    </span>
                    <span class="price-list-bottom__link--text">男性のお悩み治療</span>
                  </a>
                </li>
                <li>
                  <a href="#other-7" class="price-list-bottom__link">
                    <span>
                      <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/price-list/icon-bottom-arrow.svg" alt="" width="6" height="6">
                    </span>
                    <span class="price-list-bottom__link--text">女性のお悩みに治療</span>
                  </a>
                </li>
                <li>
                  <a href="#other-8" class="price-list-bottom__link">
                    <span>
                      <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/price-list/icon-bottom-arrow.svg" alt="" width="6" height="6">
                    </span>
                    <span class="price-list-bottom__link--text">コスメ・美肌・美容アイテム</span>
                  </a>
                </li>
              </ul>
            </div><!-- price-list-bottom__item -->
          </aside><!-- price-list-bottom__side -->

          <div class="price-list-bottom__body">
            <!-- 美肌・リバースエイジング -->
            <div class="price-list-bottom__content" id="injection-treatment-1">
              <div class="price-list-bottom__content__headline">
                <p class="price-list-bottom__content__headline--text">美肌・リバースエイジング <br class="pc-hidden">注入治療</p>
                <a href="" class="price-list-btn">施術詳細を見る</a>
              </div>

              <table class="price-list-table">
                <caption class="price-list-table__caption center">浄化濃縮幹細胞セクレトーム</caption>
                <tbody>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">ダーマペン導入</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          1回
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li class="text-left">
                          <span class="pc-hidden">1回</span>88,000<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">ポテンツァ（CPチップ）導入</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          初回トライアル
                        </li>
                        <li class="center">
                          1回
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li class="text-left">
                          <span class="pc-hidden">初回トライアル</span>132,000<span>円</span>
                        </li>
                        <li class="text-left">
                          <span class="pc-hidden">1回</span>132,000<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                </tbody>
              </table>

              <table class="price-list-table">
                <caption class="price-list-table__caption center">ダーマペン</caption>
                <tbody>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">全顔</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          1回
                        </li>
                        <li class="center">
                          5回
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li class="text-left">
                          <span class="pc-hidden">1回</span>16,500<span>円</span>
                        </li>
                        <li class="text-left">
                          <span class="pc-hidden">5回</span>66,000<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">目の下（目元の小ジワ）</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          1回
                        </li>
                        <li class="center">
                          5回
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li class="text-left">
                          <span class="pc-hidden">1回</span>11,000<span>円</span>
                        </li>
                        <li class="text-left">
                          <span class="pc-hidden">5回</span>44,000<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">両頬</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          1回
                        </li>
                        <li class="center">
                          5回
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li class="text-left">
                          <span class="pc-hidden">1回</span>10,780<span>円</span>
                        </li>
                        <li class="text-left">
                          <span class="pc-hidden">5回</span>44,000<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">鼻</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          1回
                        </li>
                        <li class="center">
                          5回
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li class="text-left">
                          <span class="pc-hidden">1回</span>11,000<span>円</span>
                        </li>
                        <li class="text-left">
                          <span class="pc-hidden">5回</span>44,000<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">首</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          1回
                        </li>
                        <li class="center">
                          5回
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li class="text-left">
                          <span class="pc-hidden">1回</span>13,200<span>円</span>
                        </li>
                        <li class="text-left">
                          <span class="pc-hidden">5回</span>52,800<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">全顔＋首</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          1回
                        </li>
                        <li class="center">
                          5回
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li class="text-left">
                          <span class="pc-hidden">1回</span>27,500<span>円</span>
                        </li>
                        <li class="text-left">
                          <span class="pc-hidden">5回</span>110,000<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">手の甲～指</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          1回
                        </li>
                        <li class="center">
                          5回
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li class="text-left">
                          <span class="pc-hidden">1回</span>16,500<span>円</span>
                        </li>
                        <li class="text-left">
                          <span class="pc-hidden">5回</span>66,000<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">Body：～5×5cm</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          1回
                        </li>
                        <li class="center">
                          5回
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li class="text-left">
                          <span class="pc-hidden">1回</span>11,000<span>円</span>
                        </li>
                        <li class="text-left">
                          <span class="pc-hidden">5回</span>44,000<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">Body：～10×10cm</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          1回
                        </li>
                        <li class="center">
                          5回
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li class="text-left">
                          <span class="pc-hidden">1回</span>16,500<span>円</span>
                        </li>
                        <li class="text-left">
                          <span class="pc-hidden">5回</span>66,000<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">Body：～20×20cm</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          1回
                        </li>
                        <li class="center">
                          5回
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li class="text-left">
                          <span class="pc-hidden">1回</span>22,000<span>円</span>
                        </li>
                        <li class="text-left">
                          <span class="pc-hidden">5回</span>88,000<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">Body：20×20cm以上</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          1回
                        </li>
                        <li class="center">
                          5回
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li class="text-left">
                          <span class="pc-hidden">1回</span>要相談
                        </li>
                        <li class="text-left">
                          <span class="pc-hidden">5回</span>要相談
                        </li>
                      </ul>
                    </td>
                  </tr>
                </tbody>
              </table>

              <table class="price-list-table option">
                <caption class="price-list-table__caption center">組み合わせ治療</caption>
                <tbody>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">
                      ヴェルベットスキン<br>
                      ダーマペン4＋マッサージピール 全顔
                    </td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          1回
                        </li>
                        <li class="center">
                          5回
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li class="text-left">
                          <span class="pc-hidden">1回</span>26,400<span>円</span>
                        </li>
                        <li class="text-left">
                          <span class="pc-hidden">5回</span>126,500<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">
                      マイクロボトックス<br>
                      （ダーマペン4＋ボトックス）
                    </td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          韓国製ジェネリック 1回
                        </li>
                        <li class="center">
                          ボトックスビスタ 1回
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li class="text-left">
                          <span class="pc-hidden">韓国製ジェネリック 1回</span>33,000<span>円</span>
                        </li>
                        <li class="text-left">
                          <span class="pc-hidden">ボトックスビスタ 1回</span>38,500<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">ダーマペン4＋エクソソーム 全顔</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          1回
                        </li>
                        <li class="center">
                          3回
                        </li>
                        <li class="center">
                          5回
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li class="text-left">
                          <span class="pc-hidden">1回</span>55,000<span>円</span>
                        </li>
                        <li class="text-left">
                          <span class="pc-hidden">3回</span>148,500<span>円</span>
                        </li>
                        <li class="text-left">
                          <span class="pc-hidden">5回</span>231,000<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">ダーマペン4＋エクソソーム 首</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          1回
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li class="text-left">
                          <span class="pc-hidden">1回</span>49,500<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                </tbody>
              </table>

              <table class="price-list-table option">
                <caption class="price-list-table__caption center">組み合わせ薬剤</caption>
                <tbody>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">浄化濃縮 幹細胞セクレトーム</td>
                    <td class="price-list-table__cost">71,500<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">コラーゲンブースタ― 2cc(50μg)</td>
                    <td class="price-list-table__cost">11,000<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">コラーゲンブースタ― 4cc(100μg)</td>
                    <td class="price-list-table__cost">19,800<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">コラーゲンブースタ― 6cc(150μg)</td>
                    <td class="price-list-table__cost">26,400<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">シカ（CICA）パック</td>
                    <td class="price-list-table__cost">3,300<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">リジェンスキンマスク</td>
                    <td class="price-list-table__cost">2,200<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">トラネキサム酸</td>
                    <td class="price-list-table__cost">2,200<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">プラセンタ</td>
                    <td class="price-list-table__cost">2,200<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">ビタミンC</td>
                    <td class="price-list-table__cost">1,100<span>円</span></td>
                  </tr>
                </tbody>
              </table>

              <table class="price-list-table">
                <caption class="price-list-table__caption center">プロファイロ</caption>
                <tbody>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">全顔 or 首 or 手の甲</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          1本/2cc
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li class="text-left">
                          <span class="pc-hidden">1本/2cc</span>77,000<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">全顔＋首 or 手の甲</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          2本/4cc
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li class="text-left">
                          <span class="pc-hidden">2本/4cc</span>132,000<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                </tbody>
              </table>

              <table class="price-list-table">
                <caption class="price-list-table__caption center">ハイドロインジェクション</caption>
                <tbody>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">ハイドロ 単体</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          1本/2cc
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li class="text-left">
                          <span class="pc-hidden">1本/2cc</span>77,000<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">
                      ハイドロ+ボトックス※（たまご肌）<br>
                      <span class="min">※韓国製ジェネリック</span>
                    </td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          1回
                        </li>
                        <li class="center">
                          2回コース
                        </li>
                        <li class="center">
                          ※ボトックスビスタに変更（1回あたり）
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li class="text-left">
                          <span class="pc-hidden">1回</span>77,000<span>円</span>
                        </li>
                        <li class="text-left">
                          <span class="pc-hidden">2回コース</span>137,500<span>円</span>
                        </li>
                        <li class="text-left">
                          <span class="pc-hidden">※ボトックスビスタに変更（1回あたり）</span>+11,000<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">ハイドロ+エクソソーム（もち肌）</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          1回
                        </li>
                        <li class="center">
                          2回コース
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li class="text-left">
                          <span class="pc-hidden">1回</span>99,000<span>円</span>
                        </li>
                        <li class="text-left">
                          <span class="pc-hidden">2回コース</span>176,000<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">ハイドロ+浄化濃縮 幹細胞セクレトーム<br>（ツヤ肌）</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          1回
                        </li>
                        <li class="center">
                          2回コース
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li class="text-left">
                          <span class="pc-hidden">1回</span>121,000<span>円</span>
                        </li>
                        <li class="text-left">
                          <span class="pc-hidden">2回コース</span>214,500<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item min-height-auto" colspan="2">
                    <td class="price-list-table__text--attention">※又吉総院長ご希望の場合、1回につき＋22,000円</td>
                  </tr>
                </tbody>
              </table>

              <table class="price-list-table">
                <caption class="price-list-table__caption center">スネコス（1バイアル3cc）</caption>
                <tbody>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">1回</td>
                    <td class="price-list-table__cost">33,000<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">4回</td>
                    <td class="price-list-table__cost">121,000<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item min-height-auto" colspan="2">
                    <td class="price-list-table__text--attention">※又吉総院長ご希望の場合、1回につき＋11,000円</td>
                  </tr>
                </tbody>
              </table>

              <table class="price-list-table option">
                <caption class="price-list-table__caption center">オプション</caption>
                <tbody>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">34G針（超極細針）</td>
                    <td class="price-list-table__cost">1,100<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">27Gマイクロカニューレ</td>
                    <td class="price-list-table__cost">3,300<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">クリーム麻酔</td>
                    <td class="price-list-table__cost">3,300<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">笑気麻酔</td>
                    <td class="price-list-table__cost">3,300<span>円</span></td>
                  </tr>
                </tbody>
              </table>

              <table class="price-list-table">
                <caption class="price-list-table__caption center">プルリアル デンシファイ</caption>
                <tbody>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">全顔・首・デコルテ・手の甲</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          1本/2cc
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li class="text-left">
                          <span class="pc-hidden">1本/2cc</span>70,400<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item min-height-auto" colspan="2">
                    <td class="price-list-table__text--attention">
                      ※又吉総院長ご希望の場合、＋11,000円<br>
                      ※麻酔は別途料金がかかります。<br>
                      ※34G針使用は別途料金がかかります。
                    </td>
                  </tr>
                </tbody>
              </table>

              <table class="price-list-table">
                <caption class="price-list-table__caption center">リジュランi(アイ)【サーモン注射】</caption>
                <tbody>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">
                      リジュランi(アイ)【サーモン注射】<br>
                      <span class="min">1か月以内に再施術の場合はトライアル価格でお受けいただけます。</span>
                    </td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          トライアル
                        </li>
                        <li class="center">
                          1本/2cc
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li class="text-left">
                          <span class="pc-hidden">トライアル</span>27,500<span>円</span>
                        </li>
                        <li class="text-left">
                          <span class="pc-hidden">1本/2cc</span>33,000<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">
                      リジュランi(アイ)＋ボトックスビスタ
                      【モデル注射】<br>
                      <span class="min">2か月以内に再施術の場合はトライアル価格で
                      お受けいただけます。</span>
                    </td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          トライアル
                        </li>
                        <li class="center">
                          1本/2cc
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li class="text-left">
                          <span class="pc-hidden">トライアル</span>40,700<span>円</span>
                        </li>
                        <li class="text-left">
                          <span class="pc-hidden">1本/2cc</span>46,200<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item min-height-auto" colspan="2">
                    <td class="price-list-table__text--attention">
                      ※又吉総院長ご希望の場合、＋11,000円<br>
                      ※クリーム麻酔、笑気麻酔、別途各＋3,300円
                    </td>
                  </tr>
                </tbody>
              </table>

              <table class="price-list-table">
                <caption class="price-list-table__caption center">
                  水光注射<br>
                  <span class="small">(高濃度非架橋ヒアルロン酸注入)</span>
                </caption>
                <tbody>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">1回</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          3cc 80shot
                        </li>
                        <li class="center">
                          6cc 160shot
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li class="text-left">
                          <span class="pc-hidden">3cc 80shot</span>29,700<span>円</span>
                        </li>
                        <li class="text-left">
                          <span class="pc-hidden">6cc 160shot</span>38,500<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                </tbody>
              </table>

              <table class="price-list-table option">
                <caption class="price-list-table__caption center">オプション</caption>
                <tbody>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">プルリアルデンシファイ追加</td>
                    <td class="price-list-table__cost">+38,500<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">セクレトーム追加</td>
                    <td class="price-list-table__cost">+60,500<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">コラーゲンブースター追加</td>
                    <td class="price-list-table__cost">+11,000<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">美白成分（アルブチン）追加</td>
                    <td class="price-list-table__cost">+11,000<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">コラーゲンブースター ＋ アルブチン追加</td>
                    <td class="price-list-table__cost">+16,500<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">シカ（CICA）パック</td>
                    <td class="price-list-table__cost">3,300<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item min-height-auto" colspan="2">
                    <td class="price-list-table__text--attention">※クリーム麻酔は料金に含まれます。</td>
                  </tr>
                </tbody>
              </table>

              <table class="price-list-table">
                <caption class="price-list-table__caption center">ポテンツァ（POTENZA）</caption>
                <tbody>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">POTENZA CPチップ</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          トライアル
                        </li>
                        <li class="center">
                          1回
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li class="text-left">
                          <span class="pc-hidden">トライアル</span>49,500<span>円</span>
                        </li>
                        <li class="text-left">
                          <span class="pc-hidden">1回</span>77,000<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">POTENZA Sチップ</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          トライアル
                        </li>
                        <li class="center">
                          1回
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li class="text-left">
                          <span class="pc-hidden">トライアル</span>27,500<span>円</span>
                        </li>
                        <li class="text-left">
                          <span class="pc-hidden">1回</span>49,500<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">POTENZA　DIAMOND</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          トライアル
                        </li>
                        <li class="center">
                          1回
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li class="text-left">
                          <span class="pc-hidden">トライアル</span>38,500<span>円</span>
                        </li>
                        <li class="text-left">
                          <span class="pc-hidden">1回</span>55,000<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item min-height-auto" colspan="2">
                    <td class="price-list-table__text--attention">[リピーター割引]3か月以内に再施術の場合はトライアル価格でお受けいただけます。</td>
                  </tr>
                </tbody>
              </table>

              <table class="price-list-table option">
                <caption class="price-list-table__caption center">オプション（ドラックデリバリー用薬液）</caption>
                <tbody>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">浄化濃縮幹細胞セクレトーム</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          1回
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li class="text-left">
                          <span class="pc-hidden">1回</span>71,500<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">エクソソーム</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          1回
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li class="text-left">
                          <span class="pc-hidden">1回</span>38,500<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">スネコス</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          1回
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li class="text-left">
                          <span class="pc-hidden">1回</span>33,000<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">コラーゲンブースタ―　6cc(150μg)</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          1回
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li class="text-left">
                          <span class="pc-hidden">1回</span>26,400<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">コラーゲンブースタ―　4cc(100μg)</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          1回
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li class="text-left">
                          <span class="pc-hidden">1回</span>19,800<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">コラーゲンブースタ―　4cc(100μg)</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          1回
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li class="text-left">
                          <span class="pc-hidden">1回</span>11,000<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">ボトックス</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          1回
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li class="text-left">
                          <span class="pc-hidden">1回</span>22,000<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">ボトックス（韓国製ジェネリック）</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          1回
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li class="text-left">
                          <span class="pc-hidden">1回</span>16,500<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                </tbody>
              </table>

              <table class="price-list-table">
                <caption class="price-list-table__caption center">ダーマローラー</caption>
                <tbody>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">二の腕・前腕</td>
                    <td class="price-list-table__cost">33,000<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">肩</td>
                    <td class="price-list-table__cost">16,500<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">下腿（表側 or 裏側）</td>
                    <td class="price-list-table__cost"><span>各</span>33,000<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">太もも（表側 or 裏側）</td>
                    <td class="price-list-table__cost"><span>各</span>33,000<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">背中上（肩甲骨下縁まで）</td>
                    <td class="price-list-table__cost">33,000<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">背中下（仙骨の上縁まで）</td>
                    <td class="price-list-table__cost">33,000<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">背中全体</td>
                    <td class="price-list-table__cost">49,500<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">臀部</td>
                    <td class="price-list-table__cost">49,500<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">ローラー代（4回使用／半年保管）</td>
                    <td class="price-list-table__cost">44,000<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item min-height-auto" colspan="2">
                    <td class="price-list-table__text--attention">※又吉総院長ご希望の場合、1回につき3部位まで＋33,000円、4部位以上＋55,000円</td>
                  </tr>
                </tbody>
              </table>

              <table class="price-list-table option">
                <caption class="price-list-table__caption center">組み合わせ薬剤</caption>
                <tbody>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">プラセンタ導入</td>
                    <td class="price-list-table__cost">3,300<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">トラネキサム酸導入</td>
                    <td class="price-list-table__cost">3,300<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">コラーゲンブースタ―導入</td>
                    <td class="price-list-table__cost">11,000<span>円</span></td>
                  </tr>
                </tbody>
              </table>

              <table class="price-list-table option">
                <caption class="price-list-table__caption center">オプション</caption>
                <tbody>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">痛み止め点滴</td>
                    <td class="price-list-table__cost">5,500<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">痛み止め注射</td>
                    <td class="price-list-table__cost">3,300<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">〈処方〉プラスリストア日焼け止め</td>
                    <td class="price-list-table__cost">3,080<span>円</span></td>
                  </tr>
                </tbody>
              </table>
            </div><!-- price-list-bottom__content -->

            <!-- ヒアルロン酸注入 -->
            <div class="price-list-bottom__content" id="injection-treatment-2">
              <div class="price-list-bottom__content__headline">
                <p class="price-list-bottom__content__headline--text">ヒアルロン酸注入</p>
                <a href="" class="price-list-btn">施術詳細を見る</a>
              </div>

              <table class="price-list-table">
                <caption class="price-list-table__caption">ヒアルロン酸注入初診の方で又吉総院長による施術をご希望の場合</caption>
                <tbody>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">注入手技料</td>
                    <td class="price-list-table__cost">22,000<span>円</span></td>
                  </tr>
                </tbody>
              </table>

              <table class="price-list-table">
                <caption class="price-list-table__caption center">お顔のボリュームアップ・輪郭形成</caption>
                <tbody>
                  <tr class="price-list-table__item min-height-auto">
                    <td class="price-list-table__text--blue">アゴ（おとがい）形成術</td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">
                      ヒアルロン酸 <br>
                      （ジュビダームビスタ®ボリューマXC）
                    </td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          1cc
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li class="text-left">
                          <span class="pc-hidden">1cc</span>77,000<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">
                      ヒアルロン酸 <br>
                      （ジュビダームビスタ®ボラックスXC）
                    </td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          1cc
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li class="text-left">
                          <span class="pc-hidden">1cc</span>77,000<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item min-height-auto">
                    <td class="price-list-table__text--blue">隆鼻術</td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">
                      ヒアルロン酸 <br>
                      （ジュビダームビスタ®ボリューマXC）
                    </td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          1cc
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li class="text-left">
                          <span class="pc-hidden">1cc</span>77,000<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">
                      ヒアルロン酸 <br>
                      （ジュビダームビスタ®ボラックスXC）
                    </td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          1cc
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li class="text-left">
                          <span class="pc-hidden">1cc</span>77,000<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item min-height-auto">
                    <td class="price-list-table__text--blue">ジュビダームビスタ®シリーズ（シワ・たるみ）</td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">ウルトラXC</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          1cc
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li class="text-left">
                          <span class="pc-hidden">1cc</span>44,000<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">ウルトラ2</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          0.55cc
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li class="text-left">
                          <span class="pc-hidden">0.55cc</span>35,200<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">ボリューマXC</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          1cc
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li class="text-left">
                          <span class="pc-hidden">1cc</span>77,000<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">ボラックスXC</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          1cc
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li class="text-left">
                          <span class="pc-hidden">1cc</span>77,000<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">ボリフトXC</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          1cc
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li class="text-left">
                          <span class="pc-hidden">1cc</span>55,000<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">ボライトXC</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          1cc
                        </li>
                        <li class="center">
                          2cc
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li class="text-left">
                          <span class="pc-hidden">1cc</span>55,000<span>円</span>
                        </li>
                        <li class="text-left">
                          <span class="pc-hidden">2cc</span>104,500<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item min-height-auto">
                    <td class="price-list-table__text--blue">レスチレン®シリーズ（シワ・たるみ）</td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">リド</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          1cc
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li class="text-left">
                          <span class="pc-hidden">1cc</span>55,000<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">リフトTMリド</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          1cc
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li class="text-left">
                          <span class="pc-hidden">1cc</span>55,000<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item option min-height-auto">
                    <td class="price-list-table__text--blue">オプション</td>
                  </tr>
                  <tr class="price-list-table__item option-gray">
                    <td class="price-list-table__text">ヒアルロン酸溶解注射</td>
                    <td class="price-list-table__cost">22,000<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item option-gray">
                    <td class="price-list-table__text">34G針（超極細針）</td>
                    <td class="price-list-table__cost">1,100<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item min-height-auto">
                    <td class="price-list-table__text--blue">口唇拡大術（唇ふっくら）</td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">ヒアルロン酸<br>（ジュビダーム®ウルトラXC）</td>
                    <td class="price-list-table__cost">44,000<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">ヒアルロン酸<br>（ジュビダーム®ウルトラ2）</td>
                    <td class="price-list-table__cost">35,200<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item min-height-auto">
                    <td class="price-list-table__text--blue">涙袋形成術</td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">ジュビダーム®ウルトラ2</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          0.55㏄
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li class="text-left">
                          <span class="pc-hidden">0.55㏄</span>35,200<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item min-height-auto">
                    <td class="price-list-table__text--blue">プロファイロ</td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">全顔 or 首 or 手の甲</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          2cc/本
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li class="text-left">
                          <span class="pc-hidden">2cc/本</span>77,000<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">全顔 or 首 or 手の甲</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          4cc/2本
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li class="text-left">
                          <span class="pc-hidden">4cc/2本</span>132,000<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item min-height-auto" colspan="2">
                    <td class="price-list-table__text--attention">※又吉総院長ご希望の場合、＋11,000円</td>
                  </tr>
                </tbody>
              </table>

              <table class="price-list-table">
                <caption class="price-list-table__caption center">ハイドロインジェクション</caption>
                <tbody>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">ハイドロ 単体</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          1回
                        </li>
                        <li class="center">
                          2回コース
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li class="text-left">
                          <span class="pc-hidden">1回</span>66,000<span>円</span>
                        </li>
                        <li class="text-left">
                          <span class="pc-hidden">2回コース</span>121,000<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">ハイドロ+ボトックス<br>（たまご肌）</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          1回
                        </li>
                        <li class="center">
                          2回コース
                        </li>
                        <li class="center">
                          ※ボトックスビスタに変更（1回毎）
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li class="text-left">
                          <span class="pc-hidden">1回</span>77,000<span>円</span>
                        </li>
                        <li class="text-left">
                          <span class="pc-hidden">2回コース</span>137,500<span>円</span>
                        </li>
                        <li class="text-left">
                          <span class="pc-hidden">※ボトックスビスタに変更（1回毎）</span>+11,000<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">ハイドロ+エクソソーム<br>（もち肌）</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          1回
                        </li>
                        <li class="center">
                          2回コース
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li class="text-left">
                          <span class="pc-hidden">1回</span>99,000<span>円</span>
                        </li>
                        <li class="text-left">
                          <span class="pc-hidden">2回コース</span>176,000<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">ハイドロ+浄化濃縮 幹細胞セクレトーム<br>（ツヤ肌）</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          1回
                        </li>
                        <li class="center">
                          2回コース
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li class="text-left">
                          <span class="pc-hidden">1回</span>121,000<span>円</span>
                        </li>
                        <li class="text-left">
                          <span class="pc-hidden">2回コース</span>214,500<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item min-height-auto" colspan="2">
                    <td class="price-list-table__text--attention">※又吉総院長ご希望の場合、1回につき＋22,000円</td>
                  </tr>
                </tbody>
              </table>

              <table class="price-list-table">
                <caption class="price-list-table__caption center">スネコス （1バイアル3cc）</caption>
                <tbody>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">1回</td>
                    <td class="price-list-table__cost">33,000<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">4回</td>
                    <td class="price-list-table__cost">121,000<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item min-height-auto" colspan="2">
                    <td class="price-list-table__text--attention">※又吉総院長ご希望の場合、1回につき＋11,000円</td>
                  </tr>
                </tbody>
              </table>

              <table class="price-list-table option">
                <caption class="price-list-table__caption center">オプション</caption>
                <tbody>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">34G針（超極細針）</td>
                    <td class="price-list-table__cost">1,100<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">27Gマイクロカニューレ</td>
                    <td class="price-list-table__cost">3,300<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">クリーム麻酔</td>
                    <td class="price-list-table__cost">3,300<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">笑気麻酔</td>
                    <td class="price-list-table__cost">3,300<span>円</span></td>
                  </tr>
                </tbody>
              </table>

              <table class="price-list-table">
                <caption class="price-list-table__caption center">プルリアル デンシファイ</caption>
                <tbody>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">全顔・首・デコルテ・手の甲</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          2㏄/本
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li class="text-left">
                          <span class="pc-hidden">2㏄/本</span>70,400<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item min-height-auto" colspan="2">
                    <td class="price-list-table__text--attention">
                      ※又吉総院長ご希望の場合、＋11,000円<br>
                      ※麻酔は別途料金がかかります。<br>
                      ※34G針使用は別途料金がかかります。
                    </td>
                  </tr>
                </tbody>
              </table>
            </div><!-- price-list-bottom__content -->

            <!-- ボトックス注射 -->
            <div class="price-list-bottom__content" id="injection-treatment-3">
              <div class="price-list-bottom__content__headline">
                <p class="price-list-bottom__content__headline--text">ボトックス注射</p>
                <a href="" class="price-list-btn">施術詳細を見る</a>
              </div>

              <table class="price-list-table">
                <caption class="price-list-table__caption">ヒアルロン酸注入初診の方で又吉総院長による施術をご希望の場合</caption>
                <tbody>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">注入手技料</td>
                    <td class="price-list-table__cost">22,000<span>円</span></td>
                  </tr>
                </tbody>
              </table>

              <table class="price-list-table">
                <caption class="price-list-table__caption center">ベビーコラーゲン</caption>
                <tbody>
                  <tr class="price-list-table__item min-height-auto">
                    <td class="price-list-table__text--blue">ボツリヌストキシン注射</td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">額上・下部(12.5単位)</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          韓国製ジェネリック
                        </li>
                        <li class="center">
                          ボトックスビスタ
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li class="text-left">
                          <span class="pc-hidden">韓国製ジェネリック</span><span>各</span>22,000<span>円</span>
                        </li>
                        <li class="text-left">
                          <span class="pc-hidden">ボトックスビスタ</span><span>各</span>26,400<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">額全体(20単位)</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          韓国製ジェネリック
                        </li>
                        <li class="center">
                          ボトックスビスタ
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li class="text-left">
                          <span class="pc-hidden">韓国製ジェネリック</span>26,400<span>円</span>
                        </li>
                        <li class="text-left">
                          <span class="pc-hidden">ボトックスビスタ</span>31,900<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">目尻(20単位)</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          韓国製ジェネリック
                        </li>
                        <li class="center">
                          ボトックスビスタ
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li class="text-left">
                          <span class="pc-hidden">韓国製ジェネリック</span>26,400<span>円</span>
                        </li>
                        <li class="text-left">
                          <span class="pc-hidden">ボトックスビスタ</span>31,900<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">眉間(12.5単位)</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          韓国製ジェネリック
                        </li>
                        <li class="center">
                          ボトックスビスタ
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li class="text-left">
                          <span class="pc-hidden">韓国製ジェネリック</span>23,650<span>円</span>
                        </li>
                        <li class="text-left">
                          <span class="pc-hidden">ボトックスビスタ</span>29,150<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">目の下(15単位)</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          韓国製ジェネリック
                        </li>
                        <li class="center">
                          ボトックスビスタ
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li class="text-left">
                          <span class="pc-hidden">韓国製ジェネリック</span>23,650<span>円</span>
                        </li>
                        <li class="text-left">
                          <span class="pc-hidden">ボトックスビスタ</span>29,150<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">鼻根部(10単位)</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          韓国製ジェネリック
                        </li>
                        <li class="center">
                          ボトックスビスタ
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li class="text-left">
                          <span class="pc-hidden">韓国製ジェネリック</span>22,000<span>円</span>
                        </li>
                        <li class="text-left">
                          <span class="pc-hidden">ボトックスビスタ</span>26,400<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item min-height-auto" colspan="2">
                    <td class="price-list-table__text--blue">エラボトックス</td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">エラ(50単位)</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          韓国製ジェネリック
                        </li>
                        <li class="center">
                          ボトックスビスタ
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li class="text-left">
                          <span class="pc-hidden">韓国製ジェネリック</span>33,000<span>円</span>
                        </li>
                        <li class="text-left">
                          <span class="pc-hidden">ボトックスビスタ</span>38,500<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">エラ(100単位)</td>
                    <td class="price-list-table__middle min-height-12">
                      <ul>
                        <li class="center">
                          韓国製ジェネリック
                        </li>
                        <li class="center">
                          韓国製ジェネリック（モニター）
                        </li>
                        <li class="center">
                          ボトックスビスタ
                        </li>
                        <li class="center">
                          ボトックスビスタ（モニター）
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost min-height-12">
                      <ul>
                        <li class="text-left">
                          <span class="pc-hidden">韓国製ジェネリック</span>57,750<span>円</span>
                        </li>
                        <li class="text-left">
                          <span class="pc-hidden">韓国製ジェネリック（モニター）</span>44,000<span>円</span>
                        </li>
                        <li class="text-left">
                          <span class="pc-hidden">ボトックスビスタ</span>70,400<span>円</span>
                        </li>
                        <li class="text-left">
                          <span class="pc-hidden">ボトックスビスタ（モニター）</span>55,000<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">エラ(150単位)</td>
                    <td class="price-list-table__middle min-height-12">
                      <ul>
                        <li class="center">
                          韓国製ジェネリック
                        </li>
                        <li class="center">
                          韓国製ジェネリック（モニター）
                        </li>
                        <li class="center">
                          ボトックスビスタ
                        </li>
                        <li class="center">
                          ボトックスビスタ（モニター）
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost min-height-12">
                      <ul>
                        <li class="text-left">
                          <span class="pc-hidden">韓国製ジェネリック</span>80,300<span>円</span>
                        </li>
                        <li class="text-left">
                          <span class="pc-hidden">韓国製ジェネリック（モニター）</span>60,500<span>円</span>
                        </li>
                        <li class="text-left">
                          <span class="pc-hidden">ボトックスビスタ</span>92,400<span>円</span>
                        </li>
                        <li class="text-left">
                          <span class="pc-hidden">ボトックスビスタ（モニター）</span>77,000<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item min-height-auto" colspan="2">
                    <td class="price-list-table__text--blue">アゴ梅干し治療</td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">アゴ梅干し治療</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          韓国製ジェネリック
                        </li>
                        <li class="center">
                          ボトックスビスタ
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li class="text-left">
                          <span class="pc-hidden">韓国製ジェネリック</span>23,650<span>円</span>
                        </li>
                        <li class="text-left">
                          <span class="pc-hidden">ボトックスビスタ</span>29,150<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item min-height-auto" colspan="2">
                    <td class="price-list-table__text--blue">笑顔のボトックス治療</td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">笑顔のボトックス治療</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          韓国製ジェネリック
                        </li>
                        <li class="center">
                          ボトックスビスタ
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li class="text-left">
                          <span class="pc-hidden">韓国製ジェネリック</span>26,400<span>円</span>
                        </li>
                        <li class="text-left">
                          <span class="pc-hidden">ボトックスビスタ</span>31,900<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item min-height-auto" colspan="2">
                    <td class="price-list-table__text--blue">人中ボトックス</td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">人中ボトックス</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          韓国製ジェネリック
                        </li>
                        <li class="center">
                          ボトックスビスタ
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li class="text-left">
                          <span class="pc-hidden">韓国製ジェネリック</span>22,000<span>円</span>
                        </li>
                        <li class="text-left">
                          <span class="pc-hidden">ボトックスビスタ</span>26,400<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item min-height-auto" colspan="2">
                    <td class="price-list-table__text--blue">ガミースマイル</td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">ガミースマイル</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          韓国製ジェネリック
                        </li>
                        <li class="center">
                          ボトックスビスタ
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li class="text-left">
                          <span class="pc-hidden">韓国製ジェネリック</span>22,000<span>円</span>
                        </li>
                        <li class="text-left">
                          <span class="pc-hidden">ボトックスビスタ</span>26,400<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item min-height-auto" colspan="2">
                    <td class="price-list-table__text--blue">小鼻のボトックス</td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">小鼻のボトックス</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          韓国製ジェネリック
                        </li>
                        <li class="center">
                          ボトックスビスタ
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li class="text-left">
                          <span class="pc-hidden">韓国製ジェネリック</span>22,000<span>円</span>
                        </li>
                        <li class="text-left">
                          <span class="pc-hidden">ボトックスビスタ</span>26,400<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item min-height-auto" colspan="2">
                    <td class="price-list-table__text--blue">美脚のボトックス治療</td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">美脚のボトックス治療</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          韓国製ジェネリック
                        </li>
                        <li class="center">
                          ボトックスビスタ
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li class="text-left">
                          <span class="pc-hidden">韓国製ジェネリック</span>88,000<span>円</span>
                        </li>
                        <li class="text-left">
                          <span class="pc-hidden">ボトックスビスタ</span>99,000<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item min-height-auto" colspan="2">
                    <td class="price-list-table__text--attention">※クリーム麻酔・笑気麻酔は料金に含まれます。</td>
                  </tr>
                </tbody>
              </table>

              <table class="price-list-table">
                <caption class="price-list-table__caption center">肩こりボトックス</caption>
                <tbody>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">肩こり(100単位)</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          韓国製ジェネリック
                        </li>
                        <li class="center">
                          ボトックスビスタ
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li class="text-left">
                          <span class="pc-hidden">韓国製ジェネリック</span>70,400<span>円</span>
                        </li>
                        <li class="text-left">
                          <span class="pc-hidden">ボトックスビスタ</span>88,000<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">肩こり(50単位)</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          韓国製ジェネリック
                        </li>
                        <li class="center">
                          ボトックスビスタ
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li class="text-left">
                          <span class="pc-hidden">韓国製ジェネリック</span>48,400<span>円</span>
                        </li>
                        <li class="text-left">
                          <span class="pc-hidden">ボトックスビスタ</span>55,000<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                </tbody>
              </table>

              <table class="price-list-table">
                <caption class="price-list-table__caption center">ボトックスリフト</caption>
                <tbody>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">ボトックスリフト（100単位）<br>※首・首筋への注射</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          韓国製ジェネリック
                        </li>
                        <li class="center">
                          ボトックスビスタ
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li class="text-left">
                          <span class="pc-hidden">韓国製ジェネリック</span>49,500<span>円</span>
                        </li>
                        <li class="text-left">
                          <span class="pc-hidden">ボトックスビスタ</span>66,000<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">ボトックスリフトハーフ（50単位）<br>※首・首筋への注射</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          韓国製ジェネリック
                        </li>
                        <li class="center">
                          ボトックスビスタ
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li class="text-left">
                          <span class="pc-hidden">韓国製ジェネリック</span>38,500<span>円</span>
                        </li>
                        <li class="text-left">
                          <span class="pc-hidden">ボトックスビスタ</span>44,000<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item min-height-auto" colspan="2">
                    <td class="price-list-table__text--attention">※クリーム麻酔料金は上記料金に含まれます</td>
                  </tr>
                </tbody>
              </table>

              <table class="price-list-table">
                <caption class="price-list-table__caption center">マイクロボトックス<br class="pc-hidden">（ダーマペン4＋ボトックス）</caption>
                <tbody>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">マイクロボトックス</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          韓国製ジェネリック
                        </li>
                        <li class="center">
                          ボトックスビスタ
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li class="text-left">
                          <span class="pc-hidden">韓国製ジェネリック</span>33,000<span>円</span>
                        </li>
                        <li class="text-left">
                          <span class="pc-hidden">ボトックスビスタ</span>38,500<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                </tbody>
              </table>

              <table class="price-list-table">
                <caption class="price-list-table__caption center">多汗症治療 ボツリヌストキシン注射<br class="pc-hidden">（ワキボトックス）</caption>
                <tbody>
                  <tr class="price-list-table__item  row3">
                    <td class="price-list-table__text">ボツリヌストキシン注射</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          韓国製ジェネリック
                        </li>
                        <li class="center">
                          ボトックスビスタ
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li class="text-left">
                          <span class="pc-hidden">韓国製ジェネリック</span>38,500<span>円</span>
                        </li>
                        <li class="text-left">
                          <span class="pc-hidden">ボトックスビスタ</span>55,000<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item min-height-auto" colspan="2">
                    <td class="price-list-table__text--attention">
                      ※多汗症の料金は、すべて両ワキを治療する場合の料金です。<br>
                      ※クリーム麻酔・笑気麻酔は料金に含まれます。
                    </td>
                  </tr>
                </tbody>
              </table>
            </div><!-- price-list-bottom__content -->
          </div><!-- price-list-bottom__body -->
        </div><!-- price-list-bottom__container -->
      </div><!-- price-list-bottom__inner -->
    </div><!-- price-list-bottom -->

    <!-- その他 -->
    <div class="price-list-bottom" id="bottom-panel-others" hidden>
      <div class="price-list-bottom__inner">
        <div class="price-list__title">
          <h2 class="price-list__title--en">OTHER</h2>
          <p class="price-list__title--ja">その他</p>
        </div><!-- price-list__title -->

        <div class="price-list-bottom__container">
          <aside class="price-list-bottom__side">
            <p class="price-list-bottom__side--index">INDEX</p>
            <!-- 共通 -->
            <div class="price-list-bottom__item">
              <p class="price-list-bottom__item--title">共通</p>
              <ul class="price-list-bottom__list">
                <li>
                  <a href="" class="price-list-bottom__link">
                    <span>
                      <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/price-list/icon-bottom-arrow.svg" alt="" width="6" height="6">
                    </span>
                    <span class="price-list-bottom__link--text">初診料・再診料</span>
                  </a>
                </li>
                <li>
                  <a href="" class="price-list-bottom__link">
                    <span>
                      <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/price-list/icon-bottom-arrow.svg" alt="" width="6" height="6">
                    </span>
                    <span class="price-list-bottom__link--text">麻酔・検査費用</span>
                  </a>
                </li>
              </ul>
            </div><!-- price-list-bottom__item -->

            <!-- 美容外科 -->
            <div class="price-list-bottom__item">
              <p class="price-list-bottom__item--title">美容外科</p>
              <ul class="price-list-bottom__list">
                <li>
                  <a href="#cosmetic-surgery-1" class="price-list-bottom__link">
                    <span>
                      <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/price-list/icon-bottom-arrow.svg" alt="" width="6" height="6">
                    </span>
                    <span class="price-list-bottom__link--text">目元のエイジングケア治療</span>
                  </a>
                </li>
                <li>
                  <a href="#cosmetic-surgery-2" class="price-list-bottom__link">
                    <span>
                      <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/price-list/icon-bottom-arrow.svg" alt="" width="6" height="6">
                    </span>
                    <span class="price-list-bottom__link--text">脂肪吸引</span>
                  </a>
                </li>
                <li>
                  <a href="#cosmetic-surgery-3" class="price-list-bottom__link">
                    <span>
                      <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/price-list/icon-bottom-arrow.svg" alt="" width="6" height="6">
                    </span>
                    <span class="price-list-bottom__link--text">豊胸・バスト整形</span>
                  </a>
                </li>
                <li>
                  <a href="#cosmetic-surgery-4" class="price-list-bottom__link">
                    <span>
                      <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/price-list/icon-bottom-arrow.svg" alt="" width="6" height="6">
                    </span>
                    <span class="price-list-bottom__link--text">フェイスリフト</span>
                  </a>
                </li>
                <li>
                  <a href="#cosmetic-surgery-5" class="price-list-bottom__link">
                    <span>
                      <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/price-list/icon-bottom-arrow.svg" alt="" width="6" height="6">
                    </span>
                    <span class="price-list-bottom__link--text">二重まぶた・二重形成術・目元</span>
                  </a>
                </li>
                <li>
                  <a href="#cosmetic-surgery-6" class="price-list-bottom__link">
                    <span>
                      <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/price-list/icon-bottom-arrow.svg" alt="" width="6" height="6">
                    </span>
                    <span class="price-list-bottom__link--text">ワキガ・多汗症治療</span>
                  </a>
                </li>
                <li>
                  <a href="#cosmetic-surgery-7" class="price-list-bottom__link">
                    <span>
                      <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/price-list/icon-bottom-arrow.svg" alt="" width="6" height="6">
                    </span>
                    <span class="price-list-bottom__link--text">糸によるリフトアップ治療</span>
                  </a>
                </li>
                <li>
                  <a href="#cosmetic-surgery-8" class="price-list-bottom__link">
                    <span>
                      <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/price-list/icon-bottom-arrow.svg" alt="" width="6" height="6">
                    </span>
                    <span class="price-list-bottom__link--text">小顔・輪郭形成</span>
                  </a>
                </li>
                <li>
                  <a href="#cosmetic-surgery-9" class="price-list-bottom__link">
                    <span>
                      <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/price-list/icon-bottom-arrow.svg" alt="" width="6" height="6">
                    </span>
                    <span class="price-list-bottom__link--text">鼻の整形</span>
                  </a>
                </li>
                <li>
                  <a href="#cosmetic-surgery-10" class="price-list-bottom__link">
                    <span>
                      <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/price-list/icon-bottom-arrow.svg" alt="" width="6" height="6">
                    </span>
                    <span class="price-list-bottom__link--text">口の整形</span>
                  </a>
                </li>
              </ul>
            </div><!-- price-list-bottom__item -->

            <!-- 美容皮膚科 -->
            <div class="price-list-bottom__item">
              <p class="price-list-bottom__item--title">美容皮膚科</p>
              <ul class="price-list-bottom__list">
                <li>
                  <a href="#cosmetic-dermatology-1" class="price-list-bottom__link">
                    <span>
                      <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/price-list/icon-bottom-arrow.svg" alt="" width="6" height="6">
                    </span>
                    <span class="price-list-bottom__link--text">シワ・たるみ治療</span>
                  </a>
                </li>
                <li>
                  <a href="#cosmetic-dermatology-2" class="price-list-bottom__link">
                    <span>
                      <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/price-list/icon-bottom-arrow.svg" alt="" width="6" height="6">
                    </span>
                    <span class="price-list-bottom__link--text">シミ・そばかす・くすみなどの美白・美肌治療</span>
                  </a>
                </li>
                <li>
                  <a href="#cosmetic-dermatology-3" class="price-list-bottom__link">
                    <span>
                      <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/price-list/icon-bottom-arrow.svg" alt="" width="6" height="6">
                    </span>
                    <span class="price-list-bottom__link--text">肝斑・美白治療</span>
                  </a>
                </li>
                <li>
                  <a href="#cosmetic-dermatology-4" class="price-list-bottom__link">
                    <span>
                      <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/price-list/icon-bottom-arrow.svg" alt="" width="6" height="6">
                    </span>
                    <span class="price-list-bottom__link--text">ニキビ・ニキビ痕治療</span>
                  </a>
                </li>
                <li>
                  <a href="#cosmetic-dermatology-5" class="price-list-bottom__link">
                    <span>
                      <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/price-list/icon-bottom-arrow.svg" alt="" width="6" height="6">
                    </span>
                    <span class="price-list-bottom__link--text">赤ら顔（酒さ）・毛細血管拡張症治療</span>
                  </a>
                </li>
                <li>
                  <a href="#cosmetic-dermatology-6" class="price-list-bottom__link">
                    <span>
                      <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/price-list/icon-bottom-arrow.svg" alt="" width="6" height="6">
                    </span>
                    <span class="price-list-bottom__link--text">毛孔性苔癬治療</span>
                  </a>
                </li>
                <li>
                  <a href="#cosmetic-dermatology-7" class="price-list-bottom__link">
                    <span>
                      <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/price-list/icon-bottom-arrow.svg" alt="" width="6" height="6">
                    </span>
                    <span class="price-list-bottom__link--text">いぼ・ほくろ除去</span>
                  </a>
                </li>
              </ul>
            </div><!-- price-list-bottom__item -->

            <!-- 注入施術 -->
            <div class="price-list-bottom__item">
              <p class="price-list-bottom__item--title">注入施術</p>
              <ul class="price-list-bottom__list">
                <li>
                  <a href="#injection-treatment-1" class="price-list-bottom__link">
                    <span>
                      <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/price-list/icon-bottom-arrow.svg" alt="" width="6" height="6">
                    </span>
                    <span class="price-list-bottom__link--text">美肌・リバースエイジング 注入治療</span>
                  </a>
                </li>
                <li>
                  <a href="#injection-treatment-2" class="price-list-bottom__link">
                    <span>
                      <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/price-list/icon-bottom-arrow.svg" alt="" width="6" height="6">
                    </span>
                    <span class="price-list-bottom__link--text">ヒアルロン酸注入</span>
                  </a>
                </li>
                <li>
                  <a href="#injection-treatment-3" class="price-list-bottom__link">
                    <span>
                      <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/price-list/icon-bottom-arrow.svg" alt="" width="6" height="6">
                    </span>
                    <span class="price-list-bottom__link--text">ボトックス注射</span>
                  </a>
                </li>
              </ul>
            </div><!-- price-list-bottom__item -->

            <!-- その他の施術 -->
            <div class="price-list-bottom__item">
              <p class="price-list-bottom__item--title">その他の施術</p>
              <ul class="price-list-bottom__list">
                <li>
                  <a href="#other-1" class="price-list-bottom__link">
                    <span>
                      <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/price-list/icon-bottom-arrow.svg" alt="" width="6" height="6">
                    </span>
                    <span class="price-list-bottom__link--text">痩身全身</span>
                  </a>
                </li>
                <li>
                  <a href="#other-2" class="price-list-bottom__link">
                    <span>
                      <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/price-list/icon-bottom-arrow.svg" alt="" width="6" height="6">
                    </span>
                    <span class="price-list-bottom__link--text">医療レーザー脱毛</span>
                  </a>
                </li>
                <li>
                  <a href="#other-3" class="price-list-bottom__link">
                    <span>
                      <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/price-list/icon-bottom-arrow.svg" alt="" width="6" height="6">
                    </span>
                    <span class="price-list-bottom__link--text">傷痕・刺青・タトゥー除去</span>
                  </a>
                </li>
                <li>
                  <a href="#other-4" class="price-list-bottom__link">
                    <span>
                      <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/price-list/icon-bottom-arrow.svg" alt="" width="6" height="6">
                    </span>
                    <span class="price-list-bottom__link--text">医療アートメイク</span>
                  </a>
                </li>
                <li>
                  <a href="#other-5" class="price-list-bottom__link">
                    <span>
                      <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/price-list/icon-bottom-arrow.svg" alt="" width="6" height="6">
                    </span>
                    <span class="price-list-bottom__link--text">毛髪再生</span>
                  </a>
                </li>
                <li>
                  <a href="#other-6" class="price-list-bottom__link">
                    <span>
                      <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/price-list/icon-bottom-arrow.svg" alt="" width="6" height="6">
                    </span>
                    <span class="price-list-bottom__link--text">男性のお悩み治療</span>
                  </a>
                </li>
                <li>
                  <a href="#other-7" class="price-list-bottom__link">
                    <span>
                      <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/price-list/icon-bottom-arrow.svg" alt="" width="6" height="6">
                    </span>
                    <span class="price-list-bottom__link--text">女性のお悩みに治療</span>
                  </a>
                </li>
                <li>
                  <a href="#other-8" class="price-list-bottom__link">
                    <span>
                      <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/price-list/icon-bottom-arrow.svg" alt="" width="6" height="6">
                    </span>
                    <span class="price-list-bottom__link--text">コスメ・美肌・美容アイテム</span>
                  </a>
                </li>
              </ul>
            </div><!-- price-list-bottom__item -->
          </aside><!-- price-list-bottom__side -->

          <div class="price-list-bottom__body">
            <!-- 痩身治療 -->
            <div class="price-list-bottom__content" id="other-1">
              <div class="price-list-bottom__content__headline">
                <p class="price-list-bottom__content__headline--text">痩身治療</p>
                <a href="" class="price-list-btn">施術詳細を見る</a>
              </div>

              <table class="price-list-table">
                <caption class="price-list-table__caption center">インディバトリートメント</caption>
                <tbody>
                  <tr class="price-list-table__item row3">
                    <td class="price-list-table__text">
                      顔（フェイシャル＋デコルテ＋首）60分<br>
                      <span class="min">※お着替え10分、施術50分となっております。</span>
                    </td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          1回
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li class="text-left">
                          <span class="pc-hidden">1回</span>16,500<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item row3">
                    <td class="price-list-table__text">
                      上半身 or 下半身　60分<br>
                      <span class="min">※お着替え10分、施術50分となっております。</span>
                    </td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          1回
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li class="text-left">
                          <span class="pc-hidden">1回</span>17,600<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item row3">
                    <td class="price-list-table__text">
                      当院で脂肪吸引やフェイスリフトを<br>受けられた方 30分 1回<br>
                      <span class="min">※お着替え込みの時間となります。</span>
                    </td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          施術日から1ヶ月以内の方
                        </li>
                        <li class="center">
                          施術日から1ヶ月過ぎた方
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span class="pc-hidden">施術日から1ヶ月以内の方</span>7,700<span>円</span>
                        </li>
                        <li>
                          <span class="pc-hidden">施術日から1ヶ月以内の方</span>9,350<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                </tbody>
              </table>

              <table class="price-list-table option">
                <caption class="price-list-table__caption center">オプション</caption>
                <tbody>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">34G針（超極細針）</td>
                    <td class="price-list-table__cost">1,100<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">27Gマイクロカニューレ</td>
                    <td class="price-list-table__cost">3,300<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">クリーム麻酔</td>
                    <td class="price-list-table__cost">3,300<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">笑気麻酔</td>
                    <td class="price-list-table__cost">3,300<span>円</span></td>
                  </tr>
                </tbody>
              </table>

              <table class="price-list-table">
                <caption class="price-list-table__caption center">BNLS 脂肪溶解注射</caption>
                <tbody>
                  <tr class="price-list-table__item row3">
                    <td class="price-list-table__text">BNLS アルティメット</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          1cc
                        </li>
                        <li class="center">
                          10㏄以上の場合 1㏄あたり
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span class="pc-hidden">1cc</span>3,300<span>円</span>
                        </li>
                        <li>
                          <span class="pc-hidden">10㏄以上の場合 1㏄あたり</span>2,970<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item min-height-auto" colspan="2">
                    <td class="price-list-table__text--attention-min">
                      ※又吉総院長ご希望の場合、技術料として1～9本で11,000円／回、10本以上では22,000円／回が加算されます。<br>
                      ※鼻 or まぶた or 鼻＋まぶた いづれかをご希望の場合、＋3,300円がかかります。（他の部位と同時注入の場合、かかりません）<br>
                      ※耳下腺・顎下腺ご希望の場合、＋3,300円がかかります。（他の部位と同時注入の場合でもかかります）
                    </td>
                  </tr>
                </tbody>
              </table>

              <table class="price-list-table">
                <caption class="price-list-table__caption center">美脚のボトックス治療</caption>
                <tbody>
                  <tr class="price-list-table__item row3">
                    <td class="price-list-table__text">美脚のボトックス治療</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          韓国製ジェネリック
                        </li>
                        <li class="center">
                          ボトックスビスタ
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span class="pc-hidden">韓国製ジェネリック</span>88,000<span>円</span>
                        </li>
                        <li>
                          <span class="pc-hidden">ボトックスビスタ</span>99,000<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item min-height-auto" colspan="2">
                    <td class="price-list-table__text--attention-min">
                      ※クリーム麻酔・笑気麻酔は料金に含まれます。
                    </td>
                  </tr>
                </tbody>
              </table>
            </div><!-- price-list-bottom__content -->

            <!-- 医療レーザー脱毛 -->
            <div class="price-list-bottom__content" id="other-2">
              <div class="price-list-bottom__content__headline">
                <p class="price-list-bottom__content__headline--text">医療レーザー脱毛</p>
                <a href="" class="price-list-btn">施術詳細を見る</a>
              </div>

              <table class="price-list-table">
                <caption class="price-list-table__caption center">剃毛、オプション料金</caption>
                <tbody>
                  <tr class="price-list-table__item min-height-auto" colspan="2">
                    <td class="price-list-table__text--attention center">
                      ご来院前日～当日までにご自身で剃毛していただくようお願いしております。<br>
                      ご自身での剃毛が難しい部位のみ、剃毛のお手伝いをさせていただきます。<br>
                      ※事前にご連絡をお願いします。
                    </td>
                  </tr>
                  <tr class="price-list-table__item row3">
                    <td class="price-list-table__text">剃毛</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          1ヵ所につき
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span class="pc-hidden">1ヵ所につき</span>2,200<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                </tbody>
              </table>

              <table class="price-list-table option">
                <caption class="price-list-table__caption center">オプション</caption>
                <tbody>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">自宅用クリーム麻酔（30g）</td>
                    <td class="price-list-table__cost">11,000<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">笑気麻酔 1ヵ所につき</td>
                    <td class="price-list-table__cost">2,200<span>円</span></td>
                  </tr>
                </tbody>
              </table>

              <table class="price-list-table">
                <caption class="price-list-table__caption space-between">
                  <p>女性医療レーザー脱毛</p>
                  <a href="" class="price-list-btn">WEB予約する</a>
                </caption>
                <tbody>
                  <tr class="price-list-table__item min-height-auto" colspan="2">
                    <td class="price-list-table__text--blue">セットメニュー</td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">
                      腕全体<br>
                      <span class="min">両ワキ＋両二の腕＋両肘下※肘を含む＋両手甲指</span>
                    </td>
                    <td class="price-list-table__cost">11,550<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">
                      脚全体<br>
                      <span class="min">両太もも＋両膝まわり＋両膝下＋両足甲指</span>
                    </td>
                    <td class="price-list-table__cost">12,100<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">
                      肘下＋膝下<br>
                      <span class="min">両肘下※肘を含む＋両手甲指＋膝下＋両足甲指</span>
                    </td>
                    <td class="price-list-table__cost">12,100<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">VIOセット</td>
                    <td class="price-list-table__cost">9,350<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">
                      上半身<br>
                      <span class="min">両ワキ＋両二の腕＋両肘下＋両手甲指＋首(前面) ＋うなじ＋胸+お腹＋背中全体</span>
                    </td>
                    <td class="price-list-table__cost">14,300<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">
                      下半身<br>
                      <span class="min">両太もも＋両膝まわり＋両膝下＋両足甲指 ※VIOは除く</span>
                    </td>
                    <td class="price-list-table__cost">13,200<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">
                      全身＋うなじ<br>
                      <span class="min">首(前面)、うなじを含む全身(首から下) ※VIO除く</span>
                    </td>
                    <td class="price-list-table__cost">19,800<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">
                      全身＋うなじ＋全顔<br>
                      <span class="min">首(前面)、うなじを含む全身(首から下) ※VIO除く</span>
                    </td>
                    <td class="price-list-table__cost">24,200<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">
                      全身＋うなじ＋VIO<br>
                      <span class="min">首(前面)、うなじを含む全身(首から下) ＋VIO</span>
                    </td>
                    <td class="price-list-table__cost">25,300<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">
                      全身＋うなじ＋全顔＋VIO<br>
                      <span class="min">首(前面)、うなじを含む全身(首から下) ＋全顔＋VIO</span>
                    </td>
                    <td class="price-list-table__cost">29,700<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">
                      うなじ＋全顔＋VIO<br>
                      <span class="min">首(前面)、うなじ＋全顔＋VIO</span>
                    </td>
                    <td class="price-list-table__cost">22,000<span>円</span></td>
                  </tr>

                  <tr class="price-list-table__item min-height-auto" colspan="2">
                    <td class="price-list-table__text--blue">顔メニュー</td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">鼻下／ アゴ／アゴ下／もみあげ／頬／額／鼻 各</td>
                    <td class="price-list-table__cost">4,840<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">
                      顔全体<br>
                      <span class="min">※首、うなじを除く</span>
                    </td>
                    <td class="price-list-table__cost">7,700<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">首(前面)</td>
                    <td class="price-list-table__cost">2,530<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">うなじ</td>
                    <td class="price-list-table__cost">5,500<span>円</span></td>
                  </tr>

                  <tr class="price-list-table__item min-height-auto" colspan="2">
                    <td class="price-list-table__text--blue">パーツメニュー</td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">ワキ</td>
                    <td class="price-list-table__cost">2,200<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">
                      肘下<br>
                      <span class="min">※肘を含む</span>
                    </td>
                    <td class="price-list-table__cost">7,700<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">膝下</td>
                    <td class="price-list-table__cost">7,700<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">二の腕</td>
                    <td class="price-list-table__cost">7,700<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">太もも</td>
                    <td class="price-list-table__cost">7,700<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">背中全体</td>
                    <td class="price-list-table__cost">7,700<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">胸</td>
                    <td class="price-list-table__cost">7,700<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">お腹</td>
                    <td class="price-list-table__cost">7,700<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">お尻</td>
                    <td class="price-list-table__cost">7,700<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">背中上部</td>
                    <td class="price-list-table__cost">7,700<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">背中下部</td>
                    <td class="price-list-table__cost">7,700<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">膝まわり</td>
                    <td class="price-list-table__cost">3,850<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">乳輪まわり</td>
                    <td class="price-list-table__cost">3,850<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">へそまわり</td>
                    <td class="price-list-table__cost">3,850<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">V／I／O 各</td>
                    <td class="price-list-table__cost">7,700<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">両手の甲・指</td>
                    <td class="price-list-table__cost">2,530<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">両足の甲・指</td>
                    <td class="price-list-table__cost">2,530<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">
                      足の付根<br>
                      <span class="min">※VIOセットもしくはVと同時施術の場合</span>
                    </td>
                    <td class="price-list-table__cost">3,080<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">
                      shot打ち<br>
                      <span class="min">※3shot以上から承ります</span>
                    </td>
                    <td class="price-list-table__cost">550<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item min-height-auto" colspan="2">
                    <td class="price-list-table__text--attention">※shot打ち不可：アゴ下、全顔、うなじ、VIO</td>
                  </tr>
                </tbody>
              </table>

              <table class="price-list-table">
                <caption class="price-list-table__caption space-between">
                  <p>男性医療レーザー脱毛</p>
                  <a href="" class="price-list-btn">WEB予約する</a>
                </caption>
                <tbody>
                  <tr class="price-list-table__item min-height-auto" colspan="2">
                    <td class="price-list-table__text--blue">セットメニュー</td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">
                      腕全体<br>
                      <span class="min">両ワキ＋両二の腕＋両肘下※肘を含む＋両手甲指</span>
                    </td>
                    <td class="price-list-table__cost">15,730<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">
                      脚全体<br>
                      <span class="min">両太もも＋両膝まわり＋両膝下＋両足甲指</span>
                    </td>
                    <td class="price-list-table__cost">15,840<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">
                      肘下＋膝下<br>
                      <span class="min">両肘下※肘を含む＋両手甲指＋膝下＋両足甲指</span>
                    </td>
                    <td class="price-list-table__cost">15,840<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">VIOセット</td>
                    <td class="price-list-table__cost">13,200<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">VIOセット（陰嚢含む）</td>
                    <td class="price-list-table__cost">17,600<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">
                      上半身<br>
                      <span class="min">両ワキ＋両二の腕＋両肘下＋両手甲指＋首(前面) ＋うなじ＋胸+お腹＋背中全体</span>
                    </td>
                    <td class="price-list-table__cost">18,700<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">
                      下半身<br>
                      <span class="min">両太もも＋両膝まわり＋両膝下＋両足甲指 ※VIOは除く</span>
                    </td>
                    <td class="price-list-table__cost">17,600<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">
                      全身＋うなじ<br>
                      <span class="min">首(前面)、うなじを含む全身(首から下) ※VIO除く</span>
                    </td>
                    <td class="price-list-table__cost">29,700<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">
                      全身＋うなじ＋VIO<br>
                      <span class="min">首(前面)、うなじを含む全身(首から下) ＋VIO</span>
                    </td>
                    <td class="price-list-table__cost">39,600<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">
                      全身＋うなじ＋VIO（陰嚢含む）<br>
                      <span class="min">首(前面)、うなじを含む全身(首から下) ＋VIO（陰嚢含む）</span>
                    </td>
                    <td class="price-list-table__cost">44,000<span>円</span></td>
                  </tr>

                  <tr class="price-list-table__item min-height-auto" colspan="2">
                    <td class="price-list-table__text--blue">顔メニュー</td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">ヒゲ全体(頬＋鼻下＋アゴ＋アゴ下＋もみあげ)</td>
                    <td class="price-list-table__cost">7,150<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">ヒゲ3部位(鼻下＋アゴ＋アゴ下)</td>
                    <td class="price-list-table__cost">6,050<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">鼻下／ アゴ／アゴ下／もみあげ／頬／額／鼻　各</td>
                    <td class="price-list-table__cost">5,500<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">
                      顔全体<br>
                      <span class="min">※首、うなじを除く</span>
                    </td>
                    <td class="price-list-table__cost">8,250<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">首(前面)</td>
                    <td class="price-list-table__cost">4,510<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">うなじ</td>
                    <td class="price-list-table__cost">5,500<span>円</span></td>
                  </tr>

                  <tr class="price-list-table__item min-height-auto" colspan="2">
                    <td class="price-list-table__text--blue">パーツメニュー</td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">ワキ</td>
                    <td class="price-list-table__cost">2,640<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">
                      肘下<br>
                      <span class="min">※肘を含む</span>
                    </td>
                    <td class="price-list-table__cost">9,240<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">膝下</td>
                    <td class="price-list-table__cost">9,240<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">二の腕</td>
                    <td class="price-list-table__cost">9,240<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">太もも</td>
                    <td class="price-list-table__cost">9,240<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">背中全体</td>
                    <td class="price-list-table__cost">9,240<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">胸</td>
                    <td class="price-list-table__cost">9,240<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">お腹</td>
                    <td class="price-list-table__cost">9,240<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">お尻</td>
                    <td class="price-list-table__cost">9,240<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">背中上部</td>
                    <td class="price-list-table__cost">9,240<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">背中下部</td>
                    <td class="price-list-table__cost">9,240<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">膝まわり</td>
                    <td class="price-list-table__cost">5,830<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">乳輪まわり</td>
                    <td class="price-list-table__cost">5,830<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">へそまわり</td>
                    <td class="price-list-table__cost">5,830<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">V／I／O／陰嚢／陰茎 各</td>
                    <td class="price-list-table__cost">9,240<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">両手の甲・指</td>
                    <td class="price-list-table__cost">4,510<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">両足の甲・指</td>
                    <td class="price-list-table__cost">4,510<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">
                      足の付根<br>
                      <span class="min">※VIOセットもしくはVと同時施術の場合</span>
                    </td>
                    <td class="price-list-table__cost">3,740<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">
                      shot打ち<br>
                      <span class="min">※3shot以上から承ります</span>
                    </td>
                    <td class="price-list-table__cost">660<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item min-height-auto" colspan="2">
                    <td class="price-list-table__text--attention">※shot打ち不可：アゴ下、全顔、うなじ、VIO</td>
                  </tr>
                </tbody>
              </table>

              <table class="price-list-table">
                <caption class="price-list-table__caption center">女性医療レーザー脱毛※銀座院</caption>
                <tbody>
                  <tr class="price-list-table__item min-height-auto" colspan="2">
                    <td class="price-list-table__text--attention center">
                      銀座院は電話、LINE、メールフォームからご予約の場合は、下記料金となります。<br>
                      銀座院で看護師をご指名の場合はお電話のみで受け付けとなります。
                    </td>
                  </tr>
                  <tr class="price-list-table__item min-height-auto" colspan="2">
                    <td class="price-list-table__text--blue">セットメニュー</td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">
                      腕全体<br>
                      <span class="min">両ワキ＋両二の腕＋両肘下※肘を含む＋両手甲指</span>
                    </td>
                    <td class="price-list-table__cost">17,325<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">
                      脚全体<br>
                      <span class="min">両太もも＋両膝まわり＋両膝下＋両足甲指</span>
                    </td>
                    <td class="price-list-table__cost">18,150<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">
                      肘下＋膝下<br>
                      <span class="min">両肘下※肘を含む＋両手甲指＋膝下＋両足甲指</span>
                    </td>
                    <td class="price-list-table__cost">18,150<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">VIOセット</td>
                    <td class="price-list-table__cost">14,025<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">
                      上半身<br>
                      <span class="min">両ワキ＋両二の腕＋両肘下＋両手甲指＋首(前面) ＋うなじ＋胸+お腹＋背中全体</span>
                    </td>
                    <td class="price-list-table__cost">21,450<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">
                      下半身<br>
                      <span class="min">両太もも＋両膝まわり＋両膝下＋両足甲指 ※VIOは除く</span>
                    </td>
                    <td class="price-list-table__cost">19,800<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">
                      全身＋うなじ<br>
                      <span class="min">首(前面)、うなじを含む全身(首から下) ※VIO除く</span>
                    </td>
                    <td class="price-list-table__cost">29,700<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">
                      全身＋うなじ＋全顔<br>
                      <span class="min">首(前面)、うなじを含む全身(首から下) ※VIO除く</span>
                    </td>
                    <td class="price-list-table__cost">36,300<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">
                      全身＋うなじ＋VIO<br>
                      <span class="min">首(前面)、うなじを含む全身(首から下) ＋VIO</span>
                    </td>
                    <td class="price-list-table__cost">37,950<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">
                      全身＋うなじ＋全顔＋VIO<br>
                      <span class="min">首(前面)、うなじを含む全身(首から下) ＋全顔＋VIO</span>
                    </td>
                    <td class="price-list-table__cost">44,550<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">
                      うなじ＋全顔＋VIO<br>
                      <span class="min">首(前面)、うなじ＋全顔＋VIO</span>
                    </td>
                    <td class="price-list-table__cost">33,000<span>円</span></td>
                  </tr>

                  <tr class="price-list-table__item min-height-auto" colspan="2">
                    <td class="price-list-table__text--blue">顔メニュー</td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">鼻下／ アゴ／アゴ下／もみあげ／頬／額／鼻 各</td>
                    <td class="price-list-table__cost">7,260<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">
                      顔全体<br>
                      <span class="min">※首、うなじを除く</span>
                    </td>
                    <td class="price-list-table__cost">11,550<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">首(前面)</td>
                    <td class="price-list-table__cost">3,795<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">うなじ</td>
                    <td class="price-list-table__cost">8,250<span>円</span></td>
                  </tr>

                  <tr class="price-list-table__item min-height-auto" colspan="2">
                    <td class="price-list-table__text--blue">パーツメニュー</td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">ワキ</td>
                    <td class="price-list-table__cost">3,300<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">
                      肘下<br>
                      <span class="min">※肘を含む</span>
                    </td>
                    <td class="price-list-table__cost">11,550<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">膝下</td>
                    <td class="price-list-table__cost">11,550<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">二の腕</td>
                    <td class="price-list-table__cost">11,550<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">太もも</td>
                    <td class="price-list-table__cost">11,550<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">背中全体</td>
                    <td class="price-list-table__cost">11,550<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">胸</td>
                    <td class="price-list-table__cost">11,550<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">お腹</td>
                    <td class="price-list-table__cost">11,550<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">お尻</td>
                    <td class="price-list-table__cost">11,550<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">背中上部</td>
                    <td class="price-list-table__cost">11,550<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">背中下部</td>
                    <td class="price-list-table__cost">11,550<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">膝まわり</td>
                    <td class="price-list-table__cost">5,775<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">乳輪まわり</td>
                    <td class="price-list-table__cost">5,775<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">へそまわり</td>
                    <td class="price-list-table__cost">5,775<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">V／I／O 各</td>
                    <td class="price-list-table__cost">11,550<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">両手の甲・指</td>
                    <td class="price-list-table__cost">3,795<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">両足の甲・指</td>
                    <td class="price-list-table__cost">3,795<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">
                      足の付根<br>
                      <span class="min">※VIOセットもしくはVと同時施術の場合</span>
                    </td>
                    <td class="price-list-table__cost">4,620<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">
                      shot打ち<br>
                      <span class="min">※3shot以上から承ります</span>
                    </td>
                    <td class="price-list-table__cost">825<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item min-height-auto" colspan="2">
                    <td class="price-list-table__text--attention">※shot打ち不可：アゴ下、全顔、うなじ、VIO</td>
                  </tr>
                </tbody>
              </table>

              <table class="price-list-table">
                <caption class="price-list-table__caption center">男性医療レーザー脱毛※銀座院</caption>
                <tbody>
                  <tr class="price-list-table__item min-height-auto" colspan="2">
                    <td class="price-list-table__text--attention center">
                      銀座院は電話、LINE、メールフォームからご予約の場合は、下記料金となります。<br>
                      銀座院で看護師をご指名の場合はお電話のみで受け付けとなります。
                    </td>
                  </tr>
                  <tr class="price-list-table__item min-height-auto" colspan="2">
                    <td class="price-list-table__text--blue">セットメニュー</td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">
                      腕全体<br>
                      <span class="min">両ワキ＋両二の腕＋両肘下※肘を含む＋両手甲指</span>
                    </td>
                    <td class="price-list-table__cost">23,595<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">
                      脚全体<br>
                      <span class="min">両太もも＋両膝まわり＋両膝下＋両足甲指</span>
                    </td>
                    <td class="price-list-table__cost">23,760<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">
                      肘下＋膝下<br>
                      <span class="min">両肘下※肘を含む＋両手甲指＋膝下＋両足甲指</span>
                    </td>
                    <td class="price-list-table__cost">23,760<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">VIOセット</td>
                    <td class="price-list-table__cost">19,800<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">VIOセット（陰嚢含む）</td>
                    <td class="price-list-table__cost">26,400<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">
                      上半身<br>
                      <span class="min">両ワキ＋両二の腕＋両肘下＋両手甲指＋首(前面) ＋うなじ＋胸+お腹＋背中全体</span>
                    </td>
                    <td class="price-list-table__cost">28,050<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">
                      下半身<br>
                      <span class="min">両太もも＋両膝まわり＋両膝下＋両足甲指 ※VIOは除く</span>
                    </td>
                    <td class="price-list-table__cost">26,400<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">
                      全身＋うなじ<br>
                      <span class="min">首(前面)、うなじを含む全身(首から下) ※VIO除く</span>
                    </td>
                    <td class="price-list-table__cost">44,550<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">
                      全身＋うなじ＋VIO<br>
                      <span class="min">首(前面)、うなじを含む全身(首から下) ＋VIO</span>
                    </td>
                    <td class="price-list-table__cost">59,400<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">
                      全身＋うなじ＋VIO（陰嚢含む）<br>
                      <span class="min">首(前面)、うなじを含む全身(首から下) ＋VIO（陰嚢含む）</span>
                    </td>
                    <td class="price-list-table__cost">66,000<span>円</span></td>
                  </tr>

                  <tr class="price-list-table__item min-height-auto" colspan="2">
                    <td class="price-list-table__text--blue">顔メニュー</td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">ヒゲ全体(頬＋鼻下＋アゴ＋アゴ下＋もみあげ)</td>
                    <td class="price-list-table__cost">10,725<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">ヒゲ3部位(鼻下＋アゴ＋アゴ下)</td>
                    <td class="price-list-table__cost">9,075<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">鼻下／ アゴ／アゴ下／もみあげ／頬／額／鼻　各</td>
                    <td class="price-list-table__cost">8,250<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">
                      顔全体<br>
                      <span class="min">※首、うなじを除く</span>
                    </td>
                    <td class="price-list-table__cost">12,375<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">首(前面)</td>
                    <td class="price-list-table__cost">6,765<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">うなじ</td>
                    <td class="price-list-table__cost">8,250<span>円</span></td>
                  </tr>

                  <tr class="price-list-table__item min-height-auto" colspan="2">
                    <td class="price-list-table__text--blue">パーツメニュー</td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">ワキ</td>
                    <td class="price-list-table__cost">3,960<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">
                      肘下<br>
                      <span class="min">※肘を含む</span>
                    </td>
                    <td class="price-list-table__cost">13,860<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">膝下</td>
                    <td class="price-list-table__cost">13,860<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">二の腕</td>
                    <td class="price-list-table__cost">13,860<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">太もも</td>
                    <td class="price-list-table__cost">13,860<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">背中全体</td>
                    <td class="price-list-table__cost">13,860<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">胸</td>
                    <td class="price-list-table__cost">13,860<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">お腹</td>
                    <td class="price-list-table__cost">13,860<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">お尻</td>
                    <td class="price-list-table__cost">13,860<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">背中上部</td>
                    <td class="price-list-table__cost">13,860<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">背中下部</td>
                    <td class="price-list-table__cost">13,860<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">膝まわり</td>
                    <td class="price-list-table__cost">8,745<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">乳輪まわり</td>
                    <td class="price-list-table__cost">8,745<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">へそまわり</td>
                    <td class="price-list-table__cost">8,745<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">V／I／O／陰嚢／陰茎 各</td>
                    <td class="price-list-table__cost">13,860<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">両手の甲・指</td>
                    <td class="price-list-table__cost">6,765<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">両足の甲・指</td>
                    <td class="price-list-table__cost">6,765<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">
                      足の付根<br>
                      <span class="min">※VIOセットもしくはVと同時施術の場合</span>
                    </td>
                    <td class="price-list-table__cost">5,610<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">
                      shot打ち<br>
                      <span class="min">※3shot以上から承ります</span>
                    </td>
                    <td class="price-list-table__cost">990<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item min-height-auto" colspan="2">
                    <td class="price-list-table__text--attention">※shot打ち不可：アゴ下、全顔、うなじ、VIO</td>
                  </tr>
                </tbody>
              </table>
            </div><!-- price-list-bottom__content -->

            <!-- 傷痕・刺青・タトゥー除去 -->
            <div class="price-list-bottom__content" id="other-3">
              <div class="price-list-bottom__content__headline">
                <p class="price-list-bottom__content__headline--text">傷痕・刺青・タトゥー除去</p>
                <a href="" class="price-list-btn">施術詳細を見る</a>
              </div>

              <table class="price-list-table">
                <caption class="price-list-table__caption center">傷痕修正・タトゥー除去</caption>
                <tbody>
                  <tr class="price-list-table__item min-height-auto" colspan="2">
                    <td class="price-list-table__text--blue">傷跡修正手術</td>
                  </tr>
                  <tr class="price-list-table__item row3">
                    <td class="price-list-table__text">～3cmまで</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          首・顔
                        </li>
                        <li class="center">
                          首・顔以外
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span class="pc-hidden">首・顔</span>99,000<span>円</span>
                        </li>
                        <li>
                          <span class="pc-hidden">首・顔以外</span>66,000<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item row3">
                    <td class="price-list-table__text">3cm以上は、1cmあたり</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          首・顔
                        </li>
                        <li class="center">
                          首・顔以外
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span class="pc-hidden">首・顔</span>33,000<span>円</span>
                        </li>
                        <li>
                          <span class="pc-hidden">首・顔以外</span>22,000<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item row3">
                    <td class="price-list-table__text">5cm以上の場合</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                        </li>
                        <li class="center">
                          ＋延長1cmあたり
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          110,000<span>円</span>
                        </li>
                        <li>
                          <span class="pc-hidden">＋延長1cmあたり</span>11,000<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>

                  <tr class="price-list-table__item min-height-auto" colspan="2">
                    <td class="price-list-table__text--blue">耳垂裂（ピアスによる耳たぶ切れ）</td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">耳垂裂（ピアスによる耳たぶ切れ）</td>
                    <td class="price-list-table__cost">55,000<span>円〜</span></td>
                  </tr>

                  <tr class="price-list-table__item min-height-auto" colspan="2">
                    <td class="price-list-table__text--blue">タトゥー切除術</td>
                  </tr>
                  <tr class="price-list-table__item row3">
                    <td class="price-list-table__text">顔・首・手指・ 足指・関節に かかる部位</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          ～3cmまで
                        </li>
                        <li class="center">
                          3cm以上は、1cmあたり
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span class="pc-hidden">～3cmまで</span>99,000<span>円</span>
                        </li>
                        <li>
                          <span class="pc-hidden">3cm以上は、1cmあたり</span>33,000<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item row3">
                    <td class="price-list-table__text">上記の部位以外</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          ～3cmまで
                        </li>
                        <li class="center">
                          3cm以上は、1cmあたり
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span class="pc-hidden">～3cmまで</span>66,000<span>円</span>
                        </li>
                        <li>
                          <span class="pc-hidden">3cm以上は、1cmあたり</span>22,000<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item min-height-auto" colspan="2">
                    <td class="price-list-table__text--attention">
                      ※Z形成術またはW形成術を合わせて行う場合：上記価格×1.5倍<br>
                      ※分割切除術　2回目以降：上記価格の60%<br>
                      ※静脈麻酔　別途33,000～44,000円
                    </td>
                  </tr>
                </tbody>
              </table>

              <table class="price-list-table">
                <caption class="price-list-table__caption center">レーザーによるタトゥー除去<br class="pc-hidden">（QスイッチYAGレーザー）</caption>
                <tbody>
                  <tr class="price-list-table__item row3">
                    <td class="price-list-table__text">1cm2あたり</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          1回
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span class="pc-hidden">1回</span>11,000<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item row3">
                    <td class="price-list-table__text">5cm2～50cm2</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          1回
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span class="pc-hidden">1回</span>55,000<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item row3">
                    <td class="price-list-table__text">50cm2～100cm2</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          1回
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span class="pc-hidden">1回</span>77,000<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item row3">
                    <td class="price-list-table__text">100cm2〜</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          1回
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">ご相談ください</td>
                  </tr>
                </tbody>
              </table>
            </div><!-- price-list-bottom__content -->

            <!-- アートメイク・ピアス -->
            <div class="price-list-bottom__content" id="other-4">
              <div class="price-list-bottom__content__headline">
                <p class="price-list-bottom__content__headline--text">アートメイク・ピアス</p>
                <a href="" class="price-list-btn">施術詳細を見る</a>
              </div>

              <table class="price-list-table">
                <caption class="price-list-table__caption center">アートメイク</caption>
                <tbody>
                  <tr class="price-list-table__item min-height-auto" colspan="2">
                    <td class="price-list-table__text--blue">眉・リップ</td>
                  </tr>
                  <tr class="price-list-table__item row3">
                    <td class="price-list-table__text">モニター</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          1回
                        </li>
                        <li class="center">
                          2回目
                        </li>
                        <li class="center">
                          リタッチ(3回目以降) 1年以内 1回
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span class="pc-hidden">1回</span>35,200<span>円</span>
                        </li>
                        <li>
                          <span class="pc-hidden">2回目</span>30,800<span>円</span>
                        </li>
                        <li>
                          <span class="pc-hidden">リタッチ(3回目以降) 1年以内 1回</span>26,400<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item row3">
                    <td class="price-list-table__text">通常</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          1回
                        </li>
                        <li class="center">
                          2回目
                        </li>
                        <li class="center">
                          リタッチ(3回目以降) 1年以内 1回
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span class="pc-hidden">1回</span>44,000<span>円</span>
                        </li>
                        <li>
                          <span class="pc-hidden">2回目</span>38,500<span>円</span>
                        </li>
                        <li>
                          <span class="pc-hidden">リタッチ(3回目以降) 1年以内 1回</span>33,000<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                </tbody>
              </table>

              <table class="price-list-table">
                <caption class="price-list-table__caption center">ピアスの穴あけ</caption>
                <tbody>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">耳たぶ2ヵ所</td>
                    <td class="price-list-table__cost">8,800<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">軟骨1ヵ所</td>
                    <td class="price-list-table__cost">9,700<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item row3">
                    <td class="price-list-table__text">リング状ピアス</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          1回
                        </li>
                        <li class="center">
                          1回
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span class="pc-hidden">1回</span>15,200<span>円</span>
                        </li>
                        <li>
                          <span class="pc-hidden">1回</span>15,200<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">トラガス</td>
                    <td class="price-list-table__cost">10,800<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">鼻・舌</td>
                    <td class="price-list-table__cost">13,200<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">眉・口</td>
                    <td class="price-list-table__cost">15,200<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">へそ</td>
                    <td class="price-list-table__cost">18,700<span>円</span></td>
                  </tr>
                </tbody>
              </table>

              <table class="price-list-table option">
                <caption class="price-list-table__caption center">オプション</caption>
                <tbody>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">麻酔代1ヵ所</td>
                    <td class="price-list-table__cost">2,200<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">クロロマイセチン耳科用液 0.5%<br class="pc-hidden">（トラガス、耳たぶ、軟骨、リング状）</td>
                    <td class="price-list-table__cost">1,650<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">ゲンタマイシン（へそ、眉、鼻）</td>
                    <td class="price-list-table__cost">1,100<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">イソジン（うがい用）：舌、口</td>
                    <td class="price-list-table__cost">1,100<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item min-height-auto"  colspan="2">
                    <td class="price-list-table__text--attention">※アートメイク・ピアスは渋谷院限定の治療です。</td>
                  </tr>
                </tbody>
              </table>
            </div><!-- price-list-bottom__content -->

            <!-- 毛髪再生 -->
            <div class="price-list-bottom__content" id="other-5">
              <div class="price-list-bottom__content__headline">
                <p class="price-list-bottom__content__headline--text">毛髪再生</p>
                <a href="" class="price-list-btn">施術詳細を見る</a>
              </div>

              <table class="price-list-table">
                <caption class="price-list-table__caption center">AGA 男性毛髪再生治療セット</caption>
                <tbody>
                  <tr class="price-list-table__item row3">
                    <td class="price-list-table__text pi-min">ダーマペン × 浄化濃縮 <br class="pc-hidden">幹細胞セクレトーム</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          10回
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span class="pc-hidden">10回</span>605,000<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item row3">
                    <td class="price-list-table__text pi-min">
                      AGAセット<br>
                      <span class="min">（ミノキシジルタブレット＋ビオチン＋リジン）</span>
                    </td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          140日分
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span class="pc-hidden">140日分</span>38,500<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item min-height-auto" colspan="2">
                    <td class="price-list-table__text--attention">※又吉総院長による施術（ダーマペンによる毛髪再生治療）は1回につき＋22,000円</td>
                  </tr>
                </tbody>
              </table>

              <table class="price-list-table">
                <caption class="price-list-table__caption center">FAGA 女性毛髪再生治療セット</caption>
                <tbody>
                  <tr class="price-list-table__item row3">
                    <td class="price-list-table__text pi-min">ダーマペン × 浄化濃縮 <br class="pc-hidden">幹細胞セクレトーム</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          10回
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span class="pc-hidden">10回</span>605,000<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item row3">
                    <td class="price-list-table__text pi-min">ミノキシジルフォーム5%　3本 <br>＋ ビオチン ＋ リジン</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          約140日分
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span class="pc-hidden">約140日分</span>35,200<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item min-height-auto" colspan="2">
                    <td class="price-list-table__text--attention">※又吉総院長による施術（ダーマペンによる毛髪再生治療）は1回につき＋22,000円</td>
                  </tr>
                </tbody>
              </table>

              <table class="price-list-table">
                <caption class="price-list-table__caption center">リジン・ビオチン</caption>
                <tbody>
                  <tr class="price-list-table__item row3">
                    <td class="price-list-table__text">リジン</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          140錠
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span class="pc-hidden">140錠</span>10,450<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item row3">
                    <td class="price-list-table__text">ビオチン</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          140包
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span class="pc-hidden">140包</span>9,350<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                </tbody>
              </table>

              <table class="price-list-table">
                <caption class="price-list-table__caption center">ミノキシジルタブレット<br class="pc-hidden">・ミノキシジルフォーム5%</caption>
                <tbody>
                  <tr class="price-list-table__item row3">
                    <td class="price-list-table__text">ミノキシジルタブレット</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          140錠
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span class="pc-hidden">140錠</span>24,200<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item row3">
                    <td class="price-list-table__text">ミノキシジルフォーム5%</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          1本（約1ヵ月）
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span class="pc-hidden">1本（約1ヵ月）</span>5,500<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                </tbody>
              </table>

              <table class="price-list-table">
                <caption class="price-list-table__caption center">プロペシア（ジェネリック）</caption>
                <tbody>
                  <tr class="price-list-table__item row3">
                    <td class="price-list-table__text">
                      プロペシア（ジェネリック）<br>
                      <span class="min">※当院では薬代以外かかりません。<br>クレジットカード可。</span>
                    </td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          1㎎140錠（1BOX）
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span class="pc-hidden">1㎎140錠（1BOX）</span>24,200<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                </tbody>
              </table>

              <table class="price-list-table">
                <caption class="price-list-table__caption center">毛髪再生療法グロスファクター治療</caption>
                <tbody>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">ダーマペン＋浄化濃縮幹細胞セクレトーム <br class="pc-hidden">毛髪再生療法</td>
                    <td class="price-list-table__cost">71,500<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">頭皮ブロック注射麻酔</td>
                    <td class="price-list-table__cost">3,300<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">笑気麻酔</td>
                    <td class="price-list-table__cost">3,300<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">点滴による鎮痛</td>
                    <td class="price-list-table__cost">5,500<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item min-height-auto" colspan="2">
                    <td class="price-list-table__text--attention">※又吉総院長による施術（ダーマペンによる毛髪再生治療）は1回につき＋22,000円</td>
                  </tr>
                </tbody>
              </table>
            </div><!-- price-list-bottom__content -->

            <!-- 男性のお悩み治療 -->
            <div class="price-list-bottom__content" id="other-6">
              <div class="price-list-bottom__content__headline">
                <p class="price-list-bottom__content__headline--text">男性のお悩み治療</p>
                <a href="" class="price-list-btn">施術詳細を見る</a>
              </div>

              <table class="price-list-table">
                <caption class="price-list-table__caption center">AGA 男性毛髪再生治療セット</caption>
                <tbody>
                  <tr class="price-list-table__item row3">
                    <td class="price-list-table__text">ダーマペン × 浄化濃縮 <br class="pc-hidden">幹細胞セクレトーム</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          10回
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span class="pc-hidden">10回</span>605,000<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item row3">
                    <td class="price-list-table__text pi-min">
                      AGAセット<br>
                      <span class="min">（ミノキシジルタブレット＋ビオチン＋リジン）</span>
                    </td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          140日分
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span class="pc-hidden">140日分</span>38,500<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item min-height-auto"  colspan="2">
                    <td class="price-list-table__text--attention">※又吉総院長による施術（ダーマペンによる毛髪再生治療）は1回につき＋22,000円</td>
                  </tr>
                </tbody>
              </table>

              <table class="price-list-table">
                <caption class="price-list-table__caption center">ED治療</caption>
                <tbody>
                  <tr class="price-list-table__item row3">
                    <td class="price-list-table__text">バイアグラ</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          50mg　1錠
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span class="pc-hidden">50mg　1錠</span>1,870<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item row3">
                    <td class="price-list-table__text">シアリス</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          10mg　1錠
                        </li>
                        <li class="center">
                          20mg　1錠
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span class="pc-hidden">10mg　1錠</span>1,870<span>円</span>
                        </li>
                        <li>
                          <span class="pc-hidden">20mg　1錠</span>2,310<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div><!-- price-list-bottom__content -->

            <!-- 女性のお悩み治療 -->
            <div class="price-list-bottom__content" id="other-7">
              <div class="price-list-bottom__content__headline">
                <p class="price-list-bottom__content__headline--text">女性のお悩み治療</p>
                <a href="" class="price-list-btn">施術詳細を見る</a>
              </div>

              <table class="price-list-table">
                <caption class="price-list-table__caption center">FAGA 女性毛髪再生治療セット</caption>
                <tbody>
                  <tr class="price-list-table__item row3">
                    <td class="price-list-table__text">ダーマペン × 浄化濃縮 <br class="pc-hidden">幹細胞セクレトーム</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          10回
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span class="pc-hidden">10回</span>605,000<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item row3">
                    <td class="price-list-table__text pi-min">
                      ミノキシジルフォーム5%　3本<br>
                      <span class="min">＋ ビオチン ＋ リジン</span>
                    </td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          約140日分
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span class="pc-hidden">約140日分</span>35,200<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item min-height-auto"  colspan="2">
                    <td class="price-list-table__text--attention">※又吉総院長による施術（ダーマペンによる毛髪再生治療）は1回につき＋22,000円</td>
                  </tr>
                </tbody>
              </table>

              <table class="price-list-table">
                <caption class="price-list-table__caption center">婦人科治療</caption>
                <tbody>
                  <tr class="price-list-table__item min-height-auto"  colspan="2">
                    <td class="price-list-table__text--blue">婦人科形成</td>
                  </tr>
                  <tr class="price-list-table__item row3">
                    <td class="price-list-table__text">小陰唇縮小</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          両側
                        </li>
                        <li class="center">
                          片側
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span class="pc-hidden">両側</span>275,000<span>円</span>
                        </li>
                        <li>
                          <span class="pc-hidden">片側</span>198,000<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item row3">
                    <td class="price-list-table__text">大陰唇縮小</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          両側
                        </li>
                        <li class="center">
                          片側
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span class="pc-hidden">両側</span>275,000<span>円</span>
                        </li>
                        <li>
                          <span class="pc-hidden">片側</span>198,000<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item min-height-auto"  colspan="2">
                    <td class="price-list-table__text--attention">※全てのメニューに笑気・局所麻酔料金が含まれています。</td>
                  </tr>
                  <tr class="price-list-table__item min-height-auto"  colspan="2">
                    <td class="price-list-table__text--blue">セット治療</td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">小陰唇縮小・副皮切除セット</td>
                    <td class="price-list-table__cost">341,000<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">小陰唇縮小・副皮切除・クリトリス包茎セット</td>
                    <td class="price-list-table__cost">396,000<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item min-height-auto"  colspan="2">
                    <td class="price-list-table__text--attention">※全てのメニューに笑気・局所麻酔料金が含まれています。</td>
                  </tr>
                </tbody>
              </table>

              <table class="price-list-table option">
                <caption class="price-list-table__caption center">オプション</caption>
                <tbody>
                  <tr class="price-list-table__item row3">
                    <td class="price-list-table__text">院内モニター</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          上記価格より
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span class="pc-hidden">上記価格より</span>-55,000<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">ダーマボンド使用</td>
                    <td class="price-list-table__cost">22,000<span>円</span></td>
                  </tr>
                  <tr class="price-list-table__item">
                    <td class="price-list-table__text">静脈麻酔</td>
                    <td class="price-list-table__cost">44,000<span>円</span></td>
                  </tr>
                </tbody>
              </table>
            </div><!-- price-list-bottom__content -->

            <!-- コスメ・美肌・美容アイテム、その他の取り扱い商品 -->
            <div class="price-list-bottom__content" id="other-8">
              <div class="price-list-bottom__content__headline">
                <p class="price-list-bottom__content__headline--text">コスメ・美肌・美容アイテム、その他の取り扱い商品</p>
                <a href="" class="price-list-btn">施術詳細を見る</a>
              </div>

              <table class="price-list-table">
                <caption class="price-list-table__caption center">サプリメント</caption>
                <tbody>
                  <tr class="price-list-table__item row3">
                    <td class="price-list-table__text">紫外線対策サプリメント U・Vlock </td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          1箱（30粒／30日分）
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span class="pc-hidden">1箱（30粒／30日分）</span>7,020<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                </tbody>
              </table>

              <table class="price-list-table">
                <caption class="price-list-table__caption center">取り扱い化粧品</caption>
                <tbody>
                  <tr class="price-list-table__item min-height-auto"  colspan="2">
                    <td class="price-list-table__text--blue">シンシアり扱い化粧品</td>
                  </tr>
                  <tr class="price-list-table__item row3">
                    <td class="price-list-table__text">スキンピールバー AHAマイルド</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          135g
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span class="pc-hidden">135g</span>2,200<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item row3">
                    <td class="price-list-table__text">スキンピールバー AHA</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          135g
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span class="pc-hidden">135g</span>2,200<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item row3">
                    <td class="price-list-table__text">スキンピールバーティートゥリー</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          135g
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span class="pc-hidden">135g</span>2,750<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item row3">
                    <td class="price-list-table__text">スキンピールバー ハイドロキノール</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          135g
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span class="pc-hidden">135g</span>5,500<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item min-height-auto"  colspan="2">
                    <td class="price-list-table__text--blue">プラスリストア</td>
                  </tr>
                  <tr class="price-list-table__item row3">
                    <td class="price-list-table__text">ナノHQクリーム EX ＜クリーム＞</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          5g
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span class="pc-hidden">5g</span>2,200<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item row3">
                    <td class="price-list-table__text">UVローション［SPF50+ PA++++ ］</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          30ml
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span class="pc-hidden">30ml</span>3,080<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item row3">
                    <td class="price-list-table__text">DT カモフラージュコンシーラー</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          2.7g
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span class="pc-hidden">2.7g</span>1,540<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item min-height-auto"  colspan="2">
                    <td class="price-list-table__text--blue">デルファーマ</td>
                  </tr>
                  <tr class="price-list-table__item row3">
                    <td class="price-list-table__text">メイクオフ クレンズ ＜クレンジング＞</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          120g
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span class="pc-hidden">120g</span>3,080<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item row3">
                    <td class="price-list-table__text">ピールオフ クレンズ ＜洗顔料＞</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          180g
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span class="pc-hidden">180g</span>3,850<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item min-height-auto"  colspan="2">
                    <td class="price-list-table__text--blue">グラングレース</td>
                  </tr>
                  <tr class="price-list-table__item row3">
                    <td class="price-list-table__text">グラングレース クレンジング<br>＜クレンジング＞</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          120g
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span class="pc-hidden">120g</span>3,080<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item row3">
                    <td class="price-list-table__text">グラングレース ウォッシュⅠ＜洗顔料＞</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          150g
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span class="pc-hidden">150g</span>3,080<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item row3">
                    <td class="price-list-table__text">グラングレース ローション＜化粧水＞</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          120g
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span class="pc-hidden">120g</span>10,450<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item row3">
                    <td class="price-list-table__text">グラングレース セラム ＜美容液＞</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          40ml
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span class="pc-hidden">40ml</span>13,200<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item row3">
                    <td class="price-list-table__text">グラングレース デイプロテクター<br>＜日焼け止め下地＞</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          40g
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span class="pc-hidden">40g</span>3,850<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item row3">
                    <td class="price-list-table__text">グラングレース　ナイトクリーム<br>＜クリーム＞</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          30g
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span class="pc-hidden">30g</span>5,500<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                </tbody>
              </table>

              <table class="price-list-table">
                <caption class="price-list-table__caption center">シンシア クリスタルシリーズ</caption>
                <tbody>
                  <tr class="price-list-table__item row3">
                    <td class="price-list-table__text">クリスタル ローション</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          100ml
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span class="pc-hidden">100ml</span>7,700<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item row3">
                    <td class="price-list-table__text">クリスタル セラミドジェル</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          50g
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span class="pc-hidden">50g</span>6,600<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item row3">
                    <td class="price-list-table__text">クリスタル モイスチャーオイルF</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          100ml
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span class="pc-hidden">100ml</span>7,700<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="price-list-table__item row3">
                    <td class="price-list-table__text">クリスタルシリーズ3点セット 3種類</td>
                    <td class="price-list-table__middle">
                      <ul>
                        <li class="center">
                          各1本(計3本)
                        </li>
                      </ul>
                    </td>
                    <td class="price-list-table__cost">
                      <ul>
                        <li>
                          <span class="pc-hidden">各1本(計3本)</span>19,800<span>円</span>
                        </li>
                      </ul>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div><!-- price-list-bottom__content -->
          </div><!-- price-list-bottom__body -->
        </div><!-- price-list-bottom__container -->
      </div><!-- price-list-bottom__inner -->
    </div><!-- price-list-bottom -->
  </div><!-- price-list -->

</main>

<?php get_footer(); ?> 