<?php get_header(); ?>


<main class="crf-breast">

  <section class="page-head">
    <div class="inner">
      <div class="page-head__content">
        <div class="page-head__text">
          <h1 class="page-head__title">
            豊胸・バスト整形
          </h1>
          <p class="page-head__description">自然で柔らかな理想のバストへ</p>
        </div>
      </div>
    </div>
  </section>


  <section class="page-nav">
    <div class="page-nav__inner">
      <!-- PCナビ -->
      <div class="page-nav__list sp_n">
        <a href="<?php echo esc_url(home_url('crf-breast')); ?>#about" class="page-nav__link">豊胸とは？</a>
        <a href="<?php echo esc_url(home_url('crf-breast')); ?>#merit" class="page-nav__link">こんな方におすすめ</a>
        <a href="<?php echo esc_url(home_url('crf-breast')); ?>#feature" class="page-nav__link">CRF豊胸の特徴</a>
        <a href="<?php echo esc_url(home_url('crf-breast')); ?>#merit" class="page-nav__link">CRF豊胸を選ぶ理由</a>
        <a href="<?php echo esc_url(home_url('crf-breast')); ?>#case" class="page-nav__link">症例紹介</a>
        <a href="<?php echo esc_url(home_url('crf-breast')); ?>#flow" class="page-nav__link">施術の流れ</a>
        <a href="<?php echo esc_url(home_url('crf-breast')); ?>#about-page" class="page-nav__link">施術について</a>
        <a href="<?php echo esc_url(home_url('crf-breast')); ?>#faq" class="page-nav__link">よくある質問</a>
      </div>

      <!-- SPナビ（アコーディオンメニュー） -->
      <div class="pc_n">
        <div class="page-nav__menu">
          <p class="page-nav__menu-title">MENU</p>
          <button class="page-nav__menu-btn" aria-expanded="false" aria-controls="page-nav-accordion">
            <span></span>
            <span></span>
            <span></span>
          </button>
        </div>

        <!-- SP Accordion Menu -->
        <div class="page-nav__accordion" id="page-nav-accordion" hidden>
          <a href="<?php echo esc_url(home_url('crf-breast')); ?>#about" class="page-nav__accordion-link">豊胸とは？</a>
          <a href="<?php echo esc_url(home_url('crf-breast')); ?>#merit" class="page-nav__accordion-link">こんな方におすすめ</a>
          <a href="<?php echo esc_url(home_url('crf-breast')); ?>#feature" class="page-nav__accordion-link">CRF豊胸の特徴</a>
          <a href="<?php echo esc_url(home_url('crf-breast')); ?>#merit" class="page-nav__accordion-link">CRF豊胸を選ぶ理由</a>
          <a href="<?php echo esc_url(home_url('crf-breast')); ?>#case" class="page-nav__accordion-link">症例紹介</a>
          <a href="<?php echo esc_url(home_url('crf-breast')); ?>#flow" class="page-nav__accordion-link">施術の流れ</a>
          <a href="<?php echo esc_url(home_url('crf-breast')); ?>#about-page" class="page-nav__accordion-link">施術について</a>
          <a href="<?php echo esc_url(home_url('crf-breast')); ?>#faq" class="page-nav__accordion-link">よくある質問</a>
        </div>
      </div>
    </div>
  </section>


  <section class="about" id="about">
    <div class="about__inner">
      <div class="about__content">
        <div class="about__image">
          <img src="<?php bloginfo('stylesheet_directory'); ?>/img/crf-breast/about-img.png" alt="イメージ画像">
        </div>
      </div>

      <div class="about__text">
        <div class="page-title">
          <h2 class="page-title__title">
            About
          </h2>
          <p class="page-title__subtitle">
            女性らしく自然にバストアップへ
          </p>
        </div>

        <div class="about__description">
          <p>
            シンシアでは、単に「大きくする」だけでなく、形・質感・触れたときの自然さまでこだわった豊胸術を行っています。
          </p>
          <p>
            理想のバストラインは人それぞれ。シリコンバッグ・脂肪注入・CRF (コンデンスリッチファット)などの豊富な施術メニューから、体型・希望・ライフスタイルに合わせた最適な方法を提案します。
            <br>
            また、出産・授乳後や加齢によるバストの下垂・ハリの低下にも対応し、女性らしい自然な美しさを取り戻します。
          </p>
        </div>
      </div>
    </div>
  </section>

  <section class="merit" id="merit">
    <div class="inner">
      <div class="head-title">

        <div class="page-title">
          <h2 class="page-title__title">
            Merit
          </h2>
          <p class="page-title__subtitle">
            こんな方におすすめ
          </p>
        </div>
      </div>
      <div class="merit__content">
        <div class="merit__text">
          <ul class="merit__list">
            <li class="merit__item">
              胸のサイズにコンプレックスがある
            </li>
            <li class="merit__item">
              左右差が気になる
            </li>
            <li class="merit__item">
              授乳・加齢でハリがなくなった
            </li>
            <li class="merit__item">
              痩せ型でデコルテが寂しい印象
            </li>
            <li class="merit__item">
              自然な仕上がりで豊胸したい
            </li>
          </ul>
        </div>

        <div class="merit__image">
          <img src="<?php bloginfo('stylesheet_directory'); ?>/img/crf-breast/merit-img.png" alt="イメージ画像">
        </div>
      </div>
    </div>
  </section>

  <section class="feature" id="feature">
    <div class="inner">
      <div class="head-title">

        <div class="page-title">
          <h2 class="page-title__title">
            Feature
          </h2>
          <p class="page-title__subtitle">
            CRF豊胸の特徴
          </p>
        </div>
      </div>

      <div class="feature__content">
        <div class="feature__item">
          <div class="feature__ribbon">
            <img class="feature__ribbon-image" src="<?php bloginfo('stylesheet_directory'); ?>/img/crf-breast/feature-ribbon.svg" alt="こだわり 01">
            <span class="feature__ribbon-text">こだわり</span>
            <span class="feature__ribbon-number">01</span>
          </div>
          <div class="feature__text-content">
            <h3 class="feature__title">
              豊富な施術バリエーション
            </h3>
            <p class="feature__text">
              シリコンバッグ、脂肪注入、CRF豊胸など、希望と体質に合わせた治療を提案。
            </p>
          </div>
        </div>
        <div class="feature__item">
          <div class="feature__ribbon">
            <img class="feature__ribbon-image" src="<?php bloginfo('stylesheet_directory'); ?>/img/crf-breast/feature-ribbon.svg" alt="こだわり 02">
            <span class="feature__ribbon-text">こだわり</span>
            <span class="feature__ribbon-number">02</span>
          </div>
          <div class="feature__text-content">
            <h3 class="feature__title">
              自然な仕上がりと触感
            </h3>
            <p class="feature__text">
              脂肪注入・CRFでは自己組織を用いるため、やわらかくナチュラルな仕上がりに。
            </p>
          </div>
        </div>
        <div class="feature__item">
          <div class="feature__ribbon">
            <img class="feature__ribbon-image" src="<?php bloginfo('stylesheet_directory'); ?>/img/crf-breast/feature-ribbon.svg" alt="こだわり 03">
            <span class="feature__ribbon-text">こだわり</span>
            <span class="feature__ribbon-number">03</span>
          </div>
          <div class="feature__text-content">
            <h3 class="feature__title">
              シリコンバッグは最新世代を使用
            </h3>
            <p class="feature__text">
              高品質なMotiva®などのシリコンバッグを採用。破損リスクが低く、安全性が高い。
            </p>
          </div>
        </div>
        <div class="feature__item">
          <div class="feature__ribbon">
            <img class="feature__ribbon-image" src="<?php bloginfo('stylesheet_directory'); ?>/img/crf-breast/feature-ribbon.svg" alt="こだわり 04">
            <span class="feature__ribbon-text">こだわり</span>
            <span class="feature__ribbon-number">04</span>
          </div>
          <div class="feature__text-content">
            <h3 class="feature__title">
              脂肪注入では定着率を重視
            </h3>
            <p class="feature__text">
              遠心分離で純度を高めた脂肪を使用。血流促進技術で定着率アップ。
            </p>
          </div>
        </div>
        <div class="feature__item">
          <div class="feature__ribbon">
            <img class="feature__ribbon-image" src="<?php bloginfo('stylesheet_directory'); ?>/img/crf-breast/feature-ribbon.svg" alt="こだわり 05">
            <span class="feature__ribbon-text">こだわり</span>
            <span class="feature__ribbon-number">05</span>
          </div>
          <div class="feature__text-content">
            <h3 class="feature__title">
              傷跡の目立たない丁寧な手技
            </h3>
            <p class="feature__text">
              切開部位を工夫し、自然で目立たない仕上がりを実現。
            </p>
          </div>
        </div>
      </div>

    </div>
  </section>

  <section class="cause-face" id="cause">
    <div class="inner">
      <div class="head-title">
        <div class="page-title">
          <h2 class="page-title__title">
            Cause
          </h2>
          <p class="page-title__subtitle">
            CRFを選ぶ理由
          </p>
        </div>
      </div>

      <div class="cause-face__about">
        <p class="cause__item-text">
          バストは乳腺と脂肪がその主要な構成物となっています。<br>
          吸引した脂肪は自己組織の為、注入部位に生着します。<br>
          この脂肪は年齢とともに痩せてはきますが、その経過は非常に自然です。<br>
          生着率としては、～50％（ベイザー®・コンデンスリッチファット（CRF）の場合50～80％+α）程度といわれています。<br>
          1回あたり、片側最大で220ml+α程度注入しますので、一回の注入で～100cc（100cc～170cc+α）のボリュームアップが期待できます。
          なお、注入量が多すぎると注入脂肪に血流が行き渡らず、かえって生着量が減ることもあります。<br>
          この量の見極めは、医師の経験によるところが大きいといえます。
          またベイザー®で吸引した脂肪組織には、脂肪幹細胞が多数含まれています。<br>
          アキーセルを使用することによって、さらなる生着率の上昇が期待できます。<br>
          なお、豊胸術には他にバッグインプラント・ヒアルロン酸という選択肢もありますが、当院では行っていません。
        </p>

        <div class="cause__item">
          <h3 class="cause__item-title">
            コンデンスリッチファット (CRF) とは
          </h3>
          <p class="cause__item-text">
          コンデンスリッチファット（CRF）は、採取した脂肪をアメリカFDAや厚生労働省が認可した機器で、ウェイトフィルター（特許）を装着し遠心分離にかけ、石灰化や脂肪壊死の原因になる活きの悪い細胞や、破壊された細胞の残骸・油脂などの不純物を除去して精製されたものです。<br>コンデンスリッチファット（CRF）による脂肪注入は高い定着率を実現し、吸引した脂肪を最大限に活かせるようになっています。
          </p>
          <img src="<?php bloginfo('stylesheet_directory'); ?>/img/crf-breast/cause01.png" alt="コンデンスリッチファット (CRF) の施術の流れ">
        </div>

        <div class="cause__item">
          <h3 class="cause__item-title">
            コンデンスリッチファット (CRF) の施術の流れ
          </h3>
          <div class="cause__flow-steps">
            <div class="cause__flow-item">
              <div class="cause__flow-image">
                <img src="<?php bloginfo('stylesheet_directory'); ?>/img/crf-breast/cause02.png" alt="専用シリンジで脂肪を摂取" onerror="this.src='<?php bloginfo('stylesheet_directory'); ?>/img/crf-breast/noimage.jpg'">
              </div>
              <div class="cause__flow-text">
                <h4 class="cause__flow-title">専用シリンジで脂肪を摂取</h4>
                <p class="cause__flow-description">
                  コンデンスリッチファット用の専用シリンジを用いて脂肪吸引を行い、外気に触れないまま脂肪を採取します。<br>
                  従来の脂肪注入では脂肪は空気中で操作されていましたが、コンデンスリッチファットでは全ての段階で空気に触れることなくおこなわれます。このため、空気に含まれる菌やホコリによる汚染が起こりづらく、術後の局所感染などのリスクが大幅に低下しました。
                </p>
              </div>
            </div>
            <div class="cause__flow-item">
              <div class="cause__flow-image">
                <img src="<?php bloginfo('stylesheet_directory'); ?>/img/crf-breast/cause03.png" alt="チュメセント液（麻酔液）を廃棄" onerror="this.src='<?php bloginfo('stylesheet_directory'); ?>/img/crf-breast/noimage.jpg'">
              </div>
              <div class="cause__flow-text">
                <h4 class="cause__flow-title">チュメセント液（麻酔液）を廃棄</h4>
                <p class="cause__flow-description">
                  1のシリンジを10分間立てておくと、脂肪とチュメセント液（麻酔液）とに分離するので、チュメセント液（麻酔液）のみ廃棄します。
                </p>
              </div>
            </div>
            <div class="cause__flow-item">
              <div class="cause__flow-image">
                <img src="<?php bloginfo('stylesheet_directory'); ?>/img/crf-breast/cause04.png" alt="摂取した脂肪を遠心分離" onerror="this.src='<?php bloginfo('stylesheet_directory'); ?>/img/crf-breast/noimage.jpg'">
              </div>
              <div class="cause__flow-text">
                <h4 class="cause__flow-title">摂取した脂肪を遠心分離</h4>
                <p class="cause__flow-description">
                  チュメセント液（麻酔液）を廃棄したシリンジを専用機器LIPOMAX-SCにセットし遠心分離します。
                </p>
              </div>
            </div>
            <div class="cause__flow-item">
              <div class="cause__flow-image">
                <img src="<?php bloginfo('stylesheet_directory'); ?>/img/crf-breast/cause05.png" alt="脂肪以外を廃棄" onerror="this.src='<?php bloginfo('stylesheet_directory'); ?>/img/crf-breast/noimage.jpg'">
              </div>
              <div class="cause__flow-text">
                <h4 class="cause__flow-title">脂肪以外を廃棄</h4>
                <p class="cause__flow-description">
                  三層に分かれたうち、上の排泄オイル（=トリグリ（ 死活／老化細胞））と下の不純物とを廃棄し、脂肪のみをシリンジ内に残します。
                </p>
              </div>
            </div>
            <div class="cause__flow-item">
              <div class="cause__flow-image">
                <img src="<?php bloginfo('stylesheet_directory'); ?>/img/crf-breast/cause06.png" alt="コンデンスリッチファットを注入" onerror="this.src='<?php bloginfo('stylesheet_directory'); ?>/img/crf-breast/noimage.jpg'">
              </div>
              <div class="cause__flow-text">
                <h4 class="cause__flow-title">コンデンスリッチファットを注入</h4>
                <p class="cause__flow-description">
                  シリンジ内に残った脂肪がコンデンスリッチファットです。これをボリュームを出したいバストやフェイスに注入します。
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="treatment">
    <div class="inner">
      <div class="head-title">
        <div class="page-title">
          <h2 class="page-title__title">
            TREATMENT
          </h2>
          <p class="page-title__subtitle">
          バストアップの治療
          </p>
        </div>
      </div>
      <div class="treatment__banner">コンデンスリッチファット(CRF) 豊胸</div>
      <div class="treatment__detail">
        <p class="treatment__subtitle">
          コンデンスリッチファット (CRF)豊胸
        </p>
        <p class="treatment__description">自身から吸引した脂肪の不純物などを取り除いた状態がCRF、健康な脂肪細胞だけを注入するため定着率は80%以上</p>
        <p class="treatment__subtitle">おすすめな方</p>
        <div class="treatment__content">
        <div class="treatment__images">
            <figure class="treatment__image">
              <img src="<?php bloginfo('stylesheet_directory'); ?>/img/crf-breast/treatment01.png" alt="術前" onerror="this.src='<?php bloginfo('stylesheet_directory'); ?>/img/crf-breast/noimage.jpg'">
              <figcaption class="treatment__image-before">術前</figcaption>
              <figcaption class="treatment__image-after">術後4年</figcaption>
            </figure>
          </div>
          <div class="treatment__recommend">
            <ul class="treatment__recommend-list">
              <li>人工物をいれるのに抵抗がある</li>
              <li>安全な方法でバストアップしたい</li>
              <li>ダウンタイムの短い豊胸がよい</li>
              <li>触られたときにバレるのはいや</li>
            </ul>
          </div>
        </div>
      </div>

      <div class="treatment__banner">バッグインプラント除去+コンデンスリッチファット(CRF) 豊胸</div>
      <div class="treatment__detail">
        <p class="treatment__subtitle">
          バッグインプラント除去+コンデンスリッチファット (CRF)豊胸
        </p>
        <p class="treatment__description">
          多発しているバッグインプラントによるトラブルを解消し、自身の脂肪を使った自然なバストアップを行う
        </p>
        
        <p class="treatment__subtitle">
          <span class="treatment__subtitle-content">
            <span class="treatment__subtitle-title">おすすめな方</span>
            <span class="treatment__subtitle-text">※他院でバッグインプラントを挿れた方</span>
          </span>
        </p>
        <div class="treatment__content">
        <div class="treatment__images">
            <figure class="treatment__image">
              <img src="<?php bloginfo('stylesheet_directory'); ?>/img/crf-breast/treatment02.png" alt="術前" onerror="this.src='<?php bloginfo('stylesheet_directory'); ?>/img/crf-breast/noimage.jpg'">
              <figcaption class="treatment__image-before">術前</figcaption>
              <figcaption class="treatment__image-after">術後9年</figcaption>
            </figure>
            <figure class="treatment__image">
            </figure>
          </div>
          
          <div class="treatment__recommend">
            
            <ul class="treatment__recommend-list">
              <li>痛みや違和感を感じる</li>
              <li>しこりやひきつれがある</li>
              <li>形が崩れてきた</li>
              <li>拘縮がある</li>
              <li>中身が破裂している気がする</li>
              <li>左右差や段差が出てきた</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="effect" id="effect">
    <div class="inner">
      <div class="head-title">

        <div class="page-title">
          <h2 class="page-title__title">
            Effect
          </h2>
          <p class="page-title__subtitle">
            シンシアだからできること
          </p>
        </div>
      </div>

      <div class="effect__content">
        <div class="effect__item">
          <p class="effect__number">01</p>
          <h3 class="effect__title">
            医師の経験に基づくデザイン力
          </h3>
          <p class="effect__text">
            全体のボディバランスを考えたバストデザインで、自然なカーブと女性らしさを両立。
          </p>
        </div>
        <div class="effect__item">
          <p class="effect__number">02</p>
          <h3 class="effect__title">
            脂肪注入技術の高さ
          </h3>
          <p class="effect__text">
            定着率と仕上がりを左右する脂肪の加工・注入方法にこだわり、安全で長持ちする豊胸を提供。
          </p>
        </div>
        <div class="effect__item">
          <p class="effect__number">03</p>
          <h3 class="effect__title">
            美しさと安全性の両立
          </h3>
          <p class="effect__text">
            麻酔管理・感染対策を徹底し、術後も安心して過ごせる体制を整えています。
          </p>
        </div>
      </div>
    </div>
  </section>



  <section class="case case-after" id="case">
    <div class="inner">
      <h2 class="title">
        Case
      </h2>

      <div class="case__content swiper case__swiper">
        <div class="swiper-wrapper">
          <div class="case__item swiper-slide">
            <div class="case__before">
              <div class="case__image">

              </div>
              <p class="case__label">
                Before
              </p>
            </div>

            <div class="case__after">
              <div class="case__image">

              </div>
              <p class="case__label">
                After
              </p>
            </div>

            <div class="case__info">
              <div class="case__detail">
                <p class="case__detail-title">
                  施術名
                </p>
                <p class="case__detail-text">
                  テキストテキスト
                </p>
              </div>
              <div class="case__detail">
                <p class="case__detail-title">
                  費用目安
                </p>
                <p class="case__detail-text">
                  ￥00,000(税込)
                </p>
              </div>
              <div class="case__detail">
                <p class="case__detail-title">
                  リスク・副作用
                </p>
                <p class="case__detail-text">
                  リスク・副作用が入ります。リスク・副作用が入ります。
                </p>
              </div>
              <div class="case__detail">
                <p class="case__detail-title">
                  更新日
                </p>
                <p class="case__detail-text">
                  2025年５月20日
                </p>
              </div>
            </div>
          </div>
          <div class="case__item swiper-slide">
            <div class="case__before">
              <div class="case__image">

              </div>
              <p class="case__label">
                Before
              </p>
            </div>

            <div class="case__after">
              <div class="case__image">

              </div>
              <p class="case__label">
                After
              </p>
            </div>

            <div class="case__info">
              <div class="case__detail">
                <p class="case__detail-title">
                  施術名
                </p>
                <p class="case__detail-text">
                  テキストテキスト
                </p>
              </div>
              <div class="case__detail">
                <p class="case__detail-title">
                  費用目安
                </p>
                <p class="case__detail-text">
                  ￥00,000(税込)
                </p>
              </div>
              <div class="case__detail">
                <p class="case__detail-title">
                  リスク・副作用
                </p>
                <p class="case__detail-text">
                  リスク・副作用が入ります。リスク・副作用が入ります。
                </p>
              </div>
              <div class="case__detail">
                <p class="case__detail-title">
                  更新日
                </p>
                <p class="case__detail-text">
                  2025年５月20日
                </p>
              </div>
            </div>
          </div>
          <div class="case__item swiper-slide">
            <div class="case__before">
              <div class="case__image">

              </div>
              <p class="case__label">
                Before
              </p>
            </div>

            <div class="case__after">
              <div class="case__image">

              </div>
              <p class="case__label">
                After
              </p>
            </div>

            <div class="case__info">
              <div class="case__detail">
                <p class="case__detail-title">
                  施術名
                </p>
                <p class="case__detail-text">
                  テキストテキスト
                </p>
              </div>
              <div class="case__detail">
                <p class="case__detail-title">
                  費用目安
                </p>
                <p class="case__detail-text">
                  ￥00,000(税込)
                </p>
              </div>
              <div class="case__detail">
                <p class="case__detail-title">
                  リスク・副作用
                </p>
                <p class="case__detail-text">
                  リスク・副作用が入ります。リスク・副作用が入ります。
                </p>
              </div>
              <div class="case__detail">
                <p class="case__detail-title">
                  更新日
                </p>
                <p class="case__detail-text">
                  2025年５月20日
                </p>
              </div>
            </div>
          </div>
          <div class="case__item swiper-slide">
            <div class="case__before">
              <div class="case__image">

              </div>
              <p class="case__label">
                Before
              </p>
            </div>

            <div class="case__after">
              <div class="case__image">

              </div>
              <p class="case__label">
                After
              </p>
            </div>

            <div class="case__info">
              <div class="case__detail">
                <p class="case__detail-title">
                  施術名
                </p>
                <p class="case__detail-text">
                  テキストテキスト
                </p>
              </div>
              <div class="case__detail">
                <p class="case__detail-title">
                  費用目安
                </p>
                <p class="case__detail-text">
                  ￥00,000(税込)
                </p>
              </div>
              <div class="case__detail">
                <p class="case__detail-title">
                  リスク・副作用
                </p>
                <p class="case__detail-text">
                  リスク・副作用が入ります。リスク・副作用が入ります。
                </p>
              </div>
              <div class="case__detail">
                <p class="case__detail-title">
                  更新日
                </p>
                <p class="case__detail-text">
                  2025年５月20日
                </p>
              </div>
            </div>
          </div>
        </div>

      </div>

      <a href="<?php echo esc_url(home_url('')); ?>#case-after" class="btn case__btn">
        VIEW MORE
      </a>
    </div>

  </section>


  <section class="flow" id="flow">
    <div class="inner">
      <div class="head-title">

        <div class="page-title">
          <h2 class="page-title__title">
            Flow
          </h2>
          <p class="page-title__subtitle">
            ご予約～施術の流れ
          </p>
        </div>
        <div class="flow__content">
          <div class="flow__item">
            <div class="flow__image">
              <img src="<?php bloginfo('stylesheet_directory'); ?>/img/crf-breast/flow-step1.png" alt="受付・診察・カウンセリングのイメージ画像" width="300" height="200">
            </div>
            <div class="flow__text">
              <p class="flow__step">STEP 01</p>
              <h3 class="flow__title">受付・診察・カウンセリング</h3>
              <p class="flow__description">
                ご来院後、まずはお体の状態を詳しく診察いたします。<br>
                患者様のご希望に合わせて最適な治療プランをご提案します。<br>
                治療内容やリスク、アフターケアについても丁寧にご説明いたしますので、ご不安な点はお気軽にご相談ください。
              </p>
            </div>
          </div>
          <div class="flow__item">
            <div class="flow__image">
              <img src="<?php bloginfo('stylesheet_directory'); ?>/img/crf-breast/flow-step2.png" alt="麻酔のイメージ画像" width="300" height="200">
            </div>
            <div class="flow__text">
              <p class="flow__step">STEP 02</p>
              <h3 class="flow__title">麻酔</h3>
              <p class="flow__description">
              必要に応じて麻酔クリームを塗布し、約30分ほどお時間をいただきます。<br>注入治療や脂肪移動術の場合も、痛みに配慮し局所麻酔・笑気麻酔を併用することがあります。
              </p>
            </div>
          </div>
          <div class="flow__item">
            <div class="flow__image">
              <img src="<?php bloginfo('stylesheet_directory'); ?>/img/crf-breast/flow-step3.png" alt="施術のイメージ画像" width="300" height="200">
            </div>
            <div class="flow__text">
              <p class="flow__step">STEP 03</p>
              <h3 class="flow__title">施術</h3>
              <p class="flow__description">
              患者様の症状や治療法に合わせて施術を行います。<br>
              施術時間は方法により異なりますが、目安は2時間〜4時間程度です。
              </p>
            </div>
          </div>
          <div class="flow__item">
            <div class="flow__image">
              <img src="<?php bloginfo('stylesheet_directory'); ?>/img/crf-breast/flow-step4.png" alt="治療後ケアのイメージ画像" width="300" height="200">
            </div>
            <div class="flow__text">
              <p class="flow__step">STEP 04</p>
              <h3 class="flow__title">治療後のケア</h3>
              <p class="flow__description">
                施術後は安静を心がけ激しい運動や動作は避けてください。<br>
                腫れや内出血が出る場合もありますが、数日〜1週間程度で落ち着きます。<br>
                当日から軽いメイクが可能な治療も多く、日常生活に大きな支障はありません。<br>
                アフターケアや注意事項について詳しくご説明し、必要に応じて薬を処方いたします。
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="about-page crf-breast-about" id="about-page">
    <div class="about-page__inner">
      <div class="head-title">

        <div class="page-title">
          <h2 class="page-title__title">
            About the treatment
          </h2>
          <p class="page-title__subtitle">
            施術について
          </p>
        </div>
      </div>

      <div class="about-page__content">
        <div class="about-page__item">
          <p class="about-page__title">施術にかかる時間</p>
          <div class="about-page__text">
            手術時間は2~3時間程度です。<br>
            脂肪吸引の範囲や注入量により前後します。バストの仕上がりや定着の状態を確認しながら丁寧に行うため、個人差があります。
          </div>
        </div>
        <div class="about-page__item">
          <p class="about-page__title">ダウンタイム</p>
          <div class="about-page__text">
            ・脂肪採取部位:1~2週間程度、腫れ・内出血・筋肉痛のような痛みが出ることがあります。<br>
            ・注入部位（胸）：数日間、張り感やむくみが出ることがあります。<br>
            ・多くの方は1週間前後で日常生活に復帰可能です。
          </div>
        </div>
        <div class="about-page__item">
          <p class="about-page__title">洗顔・入浴・シャワー</p>
          <div class="about-page__text">
            洗顔: 当日から可能です。<br>
            入浴・シャワー: 当日はシャワー程度に留め、長時間の入浴は避けてください。翌日以降は体調に応じて入浴が可能です。
          </div>
        </div>
        <div class="about-page__item">
          <p class="about-page__title">治療が受けられない方</p>
          <div class="about-page__text">
            以下の方は治療をお受けいただけない場合があります。<br>
            ・妊娠中・授乳中の方<br>
            ・皮膚に炎症や感染症がある方<br>
            ・ケロイド体質の方<br>
            ・重度の皮膚疾患がある方（アトピー性皮膚炎・感染症など）<br>
            　※ご不明な場合は事前に医師へご相談ください。
          </div>
        </div>
        <div class="about-page__item">
          <p class="about-page__title">副作用・リスク</p>
          <div class="about-page__text">
            ・腫れ、内出血、むくみ、痛みが数日〜数週間出ることがあります。<br>
            ・脂肪の一部が吸収されるため、仕上がりには個人差があります。<br>
            ・まれに脂肪のしこりや左右差が生じることがあります。
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="faq" id="faq">
    <div class="inner">
      <div class="head-title">

        <div class="page-title">
          <h2 class="page-title__title">
            FAQ
          </h2>
          <p class="page-title__subtitle">
            よくある質問
          </p>
        </div>
      </div>

      <div class="faq__content">
        <div class="faq__item">
          <div class="faq__question">
            <span class="faq__q-mark">Q</span>
            <span class="faq__question-text">どのくらいサイズアップできますか?</span>
          </div>
          <div class="faq__answer">
            <span class="faq__a-mark">A.</span>
            <span class="faq__answer-text">1回の施術で約0.5~1カップ程度が目安です。複数回で理想のサイズに近づけることも可能です。</span>
          </div>
        </div>
        <div class="faq__item">
          <div class="faq__question">
            <span class="faq__q-mark">Q</span>
            <span class="faq__question-text">脂肪はどこから採取しますか?</span>
          </div>
          <div class="faq__answer">
            <span class="faq__a-mark">A.</span>
            <span class="faq__answer-text">主に太もも・お腹・腰など、気になる部位から採取します。痩身効果も期待できます。</span>
          </div>
        </div>
        <div class="faq__item">
          <div class="faq__question">
            <span class="faq__q-mark">Q</span>
            <span class="faq__question-text">定着しなかった脂肪はどうなりますか?</span>
          </div>
          <div class="faq__answer">
            <span class="faq__a-mark">A.</span>
            <span class="faq__answer-text">吸収されて自然に体外へ排出されます。しこりになるリスクは非常に少なくなっています。</span>
          </div>
        </div>
        <div class="faq__item">
          <div class="faq__question">
            <span class="faq__q-mark">Q</span>
            <span class="faq__question-text">授乳経験があってもできますか?</span>
          </div>
          <div class="faq__answer">
            <span class="faq__a-mark">A.</span>
            <span class="faq__answer-text">可能です。授乳後にボリュームダウンしたバストにも適した治療です。</span>
          </div>
        </div>
        <div class="faq__item">
          <div class="faq__question">
            <span class="faq__q-mark">Q</span>
            <span class="faq__question-text">バスト以外の部位にも注入できますか?</span>
          </div>
          <div class="faq__answer">
            <span class="faq__a-mark">A.</span>
            <span class="faq__answer-text">顔やヒップなど、他の部位への脂肪注入も可能です。</span>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="face-price">
    <div class="inner">

      <div class="head-title">

        <div class="page-title">
          <h2 class="page-title__title">Price</h2>
          <p class="page-title__subtitle">料金表</p>
        </div>
      </div>

      <div class="price__inner-wrapper--face">

        <h3 class="price__title">豊胸・バスト整形</h3>

        <div class="face-price__block">
          <h3 class="face-price__title">コンデンスリッチファット (CRF) 豊胸</h3>
          <table class="face-price__table">
            <tr>
              <td class="face-price__name">各部位ごとの脂肪吸引料金に加算<br><span>(※脂肪吸引項目)</span></td>
              <td class="face-price__price">+660,000<span>円</span></td>
            </tr>
          </table>

          <h4 class="face-price__option-title">オプション</h4>
          <table class="face-price__table face-price__table--option">
            <tr>
              <td class="face-price__name">血流改善薬　1か月分</td>
              <td class="face-price__price">16,500<span>円</span></td>
            </tr>
            <tr>
              <td class="face-price__name">静脈麻酔<br><span>(範囲により異なります)</span></td>
              <td class="face-price__price">55,000~77,000<span>円</span></td>
            </tr>
          </table>

          <h3 class="face-price__title">他院バックインプラント</h3>
          <table class="face-price__table">
            <tr>
              <td class="face-price__name">他院バックインプラント</td>
              <td class="face-price__price">330,000<span>円</span></td>
            </tr>
          </table>

          <h4 class="face-price__option-title">オプション</h4>
          <table class="face-price__table face-price__table--option">
            <tr>
              <td class="face-price__name">術後インディバ　30分</td>
              <td class="face-price__price">7,700<span>円</span></td>
            </tr>
            <tr>
              <td class="face-price__name">拘縮予防薬　1ヶ月分</td>
              <td class="face-price__price">5,500<span>円</span></td>
            </tr>
            <tr>
              <td class="face-price__name">静脈麻酔</td>
              <td class="face-price__price">33,000~66,000<span>円</span></td>
            </tr>
          </table>
        </div>

      </div>
    </div>
  </section>

  <section class="contact" id="contact">
    <div class="inner">
      <h2 class="title">
        Contact
      </h2>

      <p class="contact__text">
        カウンセリングのご相談はこちらから承ります。
      </p>

      <div class="contact__content">
        <div class="contact__clinic">
          <p class="contact__clinic-name">
            銀座院
          </p>
          <div class="contact__clinic-info">
            <div class="contact__reservations">
              <a class="contact__reservation" href="https://page.line.me/wdy1996b" target="_blank" rel="noopener noreferrer">
                <p class="contact__reservation-title">
                  <img src="<?php bloginfo('stylesheet_directory'); ?>/img/top/ico_line.svg.png" alt="">
                  LINE予約
                </p>
                <p class="contact__reservation-desc">
                  銀座院のLINE予約は<br class="pc_n">こちらから
                </p>
              </a>
              <a class="contact__reservation" href="https://cosmedical.jp/contact/" target="_blank" rel="noopener noreferrer">
                <p class="contact__reservation-title">
                  <img src="<?php bloginfo('stylesheet_directory'); ?>/img/top/Web.png" alt="">
                  WEB予約
                </p>
                <p class="contact__reservation-desc">
                  銀座院のWEB予約は<br class="pc_n">こちらから
                </p>
              </a>
            </div>
            <a class="contact__phone" href="tel:03-6281-4100">
              <p class="contact__phone-number">
                <img src="<?php bloginfo('stylesheet_directory'); ?>/img/top/Phone.png" alt="">
                03-6281-4100
              </p>
              <p class="contact__phone-hours">
                営業時間：10:00〜20:00<br>
                (年中無休)
              </p>
            </a>
          </div>
        </div>
        <div class="contact__clinic">
          <p class="contact__clinic-name is-ginza">
            渋谷院
          </p>
          <div class="contact__clinic-info">
            <div class="contact__reservations">
              <a class="contact__reservation" href="https://line.me/R/ti/p/%40400hhfgq">
                <p class="contact__reservation-title">
                  <img src="<?php bloginfo('stylesheet_directory'); ?>/img/top/ico_line.svg.png" alt="https://page.line.me/oiu9031z">
                  LINE予約
                </p>
                <p class="contact__reservation-desc">
                  渋谷院のLINE予約は<br class="pc_n">こちらから
                </p>
              </a>
              <a class="contact__reservation" href="https://www.cancer-chika.jp/reservation/shibuya" target="_blank" rel="noopener noreferrer">
                <p class="contact__reservation-title">
                  <img src="<?php bloginfo('stylesheet_directory'); ?>/img/top/Web.png" alt="">
                  WEB予約
                </p>
                <p class="contact__reservation-desc">
                  渋谷院のWEB予約は<br class="pc_n">こちらから
                </p>
              </a>
            </div>
            <a class="contact__phone" href="tel:03-6281-4100">
              <p class="contact__phone-number">
                <img src="<?php bloginfo('stylesheet_directory'); ?>/img/top/Phone.png" alt="">
                03-6809-0029
              </p>
              <p class="contact__phone-hours">
                営業時間：10:00〜20:00<br>
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
      <a href="https://cosmedical.jp/monitor/" target="_blank" rel="noopener noreferrer">モニター募集</a>
    </div>
    <div class="footer-links__item">
      <a href="https://cosmedical.jp/point-card/" target="_blank" rel="noopener noreferrer">ポイントカード</a>
    </div>
    <div class="footer-links__item">
      <a href="https://cosmedical.jp/recruit/" target="_blank" rel="noopener noreferrer">採用情報</a>
    </div>
    <div class="footer-links__item">
      <a href="https://cosmedical.jp/under-age/" target="_blank" rel="noopener noreferrer">未成年者</a>
    </div>
  </div>

</main>

<?php get_footer(); ?>

