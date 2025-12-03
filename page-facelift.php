<?php get_header(); ?>

<main class="removal">

  <section class="page-head">
    <div class="inner">
      <div class="page-head__content">
        <div class="page-head__text">

          <h1 class="page-head__title">
            フェイスリフト
          </h1>

          <p class="page-head__description">
            たるみを根本から引き上げ、若々しい輪郭へ
          </p>

        </div>
        <div class="page-head__image">
          <img src="<?php bloginfo('stylesheet_directory'); ?>/img/facelift/noimage.jpg" alt="">
        </div>

      </div>
    </div>
  </section>


  <section class="page-nav">
    <div class="page-nav__inner">
      <!-- PCナビ -->
      <div class="page-nav__list sp_n">
        <a href="<?php echo esc_url(home_url('facelift')); ?>#about" class="page-nav__link">フェイスリフトとは？</a>
        <a href="<?php echo esc_url(home_url('facelift')); ?>#merit" class="page-nav__link">こんな方におすすめ</a>
        <a href="<?php echo esc_url(home_url('facelift')); ?>#feature" class="page-nav__link">フェイスリフトの特徴</a>
        <a href="<?php echo esc_url(home_url('facelift')); ?>#cause-face" class="page-nav__link">老化の原因</a>
        <a href="<?php echo esc_url(home_url('facelift')); ?>#case" class="page-nav__link">症例紹介</a>
        <a href="<?php echo esc_url(home_url('facelift')); ?>#flow" class="page-nav__link">施術の流れ</a>
        <a href="<?php echo esc_url(home_url('facelift')); ?>#about-page" class="page-nav__link">施術について</a>
        <a href="<?php echo esc_url(home_url('facelift')); ?>#faq" class="page-nav__link">よくある質問</a>
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
          <a href="<?php echo esc_url(home_url('facelift')); ?>#about" class="page-nav__accordion-link">フェイスリフトとは？</a>
          <a href="<?php echo esc_url(home_url('facelift')); ?>#merit" class="page-nav__accordion-link">こんな方におすすめ</a>
          <a href="<?php echo esc_url(home_url('facelift')); ?>#feature" class="page-nav__accordion-link">フェイスリフトの特徴</a>
          <a href="<?php echo esc_url(home_url('facelift')); ?>#cause-face" class="page-nav__accordion-link">老化の原因</a>
          <a href="<?php echo esc_url(home_url('facelift')); ?>#case" class="page-nav__accordion-link">症例紹介</a>
          <a href="<?php echo esc_url(home_url('facelift')); ?>#flow" class="page-nav__accordion-link">施術の流れ</a>
          <a href="<?php echo esc_url(home_url('facelift')); ?>#about-page" class="page-nav__accordion-link">施術について</a>
          <a href="<?php echo esc_url(home_url('facelift')); ?>#faq" class="page-nav__accordion-link">よくある質問</a>
        </div>
      </div>
    </div>
  </section>


  <section class="about" id="about">
    <div class="about__inner">
      <div class="about__content">
        <div class="about__image">
          <img src="<?php bloginfo('stylesheet_directory'); ?>/img/facelift/noimage.jpg" alt="イメージ画像">
        </div>
      </div>

      <div class="about__text">
        <div class="page-title">
          <h2 class="page-title__title">
            About
          </h2>
          <p class="page-title__subtitle">
            フェイスリフトとは？
          </p>
        </div>

        <div class="about__description">
          <p>
            年齢とともに気になるフェイスラインのもたつきやほうれい線。<br>
            フェイスリフトは、皮膚だけでなくその下の筋膜（SMAS）までしっかり引き上げることで、自然で長期的な若返り効果を実現します。<br>
            「もう少し若く見られたい」「メスを使わずに済ませたいけれど限界を感じている」そんな方におすすめの治療です。

          </p>

          <p>
            またフェイスリフトは外科的にたるみを改善する治療です。<br>
            皮膚を切開し、余分な皮膚や脂肪を取り除くだけでなく、SMAS（表在性筋膜）をしっかり引き上げることで、長期間効果が持続する若返り治療といえます。<br>
            糸リフトなどに比べて、より確実で持続性の高い効果が得られるのが特徴です。
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
              顔のたるみが気になり始めた
            </li>
            <li class="merit__item">
              糸リフトをしても満足できなかった
            </li>
            <li class="merit__item">
              長期的な効果を求めている
            </li>
            <li class="merit__item">
              自然に若返りたい
            </li>
            <li class="merit__item">
              首元までしっかり改善したい
            </li>

          </ul>
        </div>

        <div class="merit__image">
          <img src="<?php bloginfo('stylesheet_directory'); ?>/img/facelift/noimage.jpg" alt="イメージ画像">
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
            フェイスリフトの特徴
          </p>
        </div>
      </div>

      <div class="feature__content">
        <div class="feature__item">
          <div class="feature__image">
            <img src="<?php bloginfo('stylesheet_directory'); ?>/img/facelift/noimage.jpg" alt=" 自然な若返り効果のイメージ画像">
          </div>

          <div class="feature__text-content">

            <h3 class="feature__title">
              自然な若返り効果
            </h3>

            <p class="feature__text">
              注入系治療や脂肪移動術のように過剰に膨らませることなく、ナチュラルにリフトアップ。<br>
              「やった感」が出にくく、周囲に気づかれにくいのが特徴です。
            </p>

          </div>
        </div>
        <div class="feature__item">
          <div class="feature__image">
            <img src="<?php bloginfo('stylesheet_directory'); ?>/img/facelift/noimage.jpg" alt="長期的な持続力のイメージ画像">
          </div>

          <div class="feature__text-content">
            <h3 class="feature__title">
              長期的な持続力
            </h3>

            <p class="feature__text">
              皮膚だけでなくSMAS（表在性筋膜）までしっかり引き上げるため、効果は10年程度持続することもあります。<br>
              糸リフトや注入治療に比べて圧倒的に長持ちします。
            </p>
          </div>
        </div>
        <div class="feature__item">
          <div class="feature__image">
            <img src="<?php bloginfo('stylesheet_directory'); ?>/img/facelift/noimage.jpg" alt="フェイスライン全体を改善のイメージ画像">
          </div>

          <div class="feature__text-content">
            <h3 class="feature__title">
              フェイスライン全体を改善
            </h3>

            <p class="feature__text">
              ヒアルロン酸注入だけでなく、脂肪注入やレーザーなどを組み合わせることで、効果の持続性を高められます。
            </p>
          </div>
        </div>
        <div class="feature__item">
          <div class="feature__image">
            <img src="<?php bloginfo('stylesheet_directory'); ?>/img/facelift/noimage.jpg" alt="オーダーメイドイメージ画像">
          </div>

          <div class="feature__text-content">
            <h3 class="feature__title">
              オーダーメイドのデザイン
            </h3>

            <p class="feature__text">
              患者様一人ひとりのたるみ具合・骨格・希望に合わせてデザイン。<br>
              必要に応じて脂肪吸引や脂肪注入と組み合わせ、より自然で美しい輪郭を作ります。
            </p>
          </div>
        </div>
        <div class="feature__item">
          <div class="feature__image">
            <img src="<?php bloginfo('stylesheet_directory'); ?>/img/facelift/noimage.jpg" alt="確実な効果と安心感のイメージ画像">
          </div>

          <div class="feature__text-content">
            <h3 class="feature__title">
              確実な効果と安心感
            </h3>

            <p class="feature__text">
              糸リフトやレーザー治療では限界のある中〜重度のたるみにも対応可能。<br>
              医学的根拠に基づいた確実な引き上げ効果を得られるため、再現性が高く安心です。
            </p>
          </div>
        </div>
      </div>

    </div>
  </section>

  <section class="cause-face" id="cause-face">
    <div class="inner">
      <div class="head-title">
        <div class="page-title">
          <h2 class="page-title__title">
            Cause
          </h2>
          <p class="page-title__subtitle">
            見た目の老化の要因
          </p>
        </div>
      </div>

      <div class="cause-face__about">
        <p class="cause__item-text">
          見た目の老化の原因というのは、大きく以下の3つに分けられます。<br>
          <span>
            ・たるみ<br>
            ・ボリュームの増減<br>
            ・皮膚の質感（シミなどを含めて）
          </span>
        </p>

        <p class="cause__item-text">
          これらは純粋に独立しているわけではなくお互いに影響を与え合っています。<br>これらに適切にアプローチし改善していくことが見た目の若さにつながっていきます。
        </p>

        <div class="cause__item">
          <h3 class="cause__item-title">
            若返り・たるみ治療と持続効果
          </h3>
        </div>

        <div class="reason__row">
          <div class="reason__item reason__item--with-image">
            <div class="reason__item-image">
              <img src="<?php bloginfo('stylesheet_directory'); ?>/img/facelift/cause.jpg" alt="">
            </div>
            <div class="reason__item-content">

              <p class="reason__item-text">
                年齢を重ねると避けられない「たるみ」や「老け顔」。<br>
                レーザーや注入治療も一定の効果はありますが、皮膚の質感や軽度の改善にとどまります。本格的にフェイスラインを引き上げ、見た目年齢を大きく若返らせるには、やはり外科的アプローチが最も有効です。フェイスリフトは余分な皮膚を取り除き、土台からしっかりリフトアップできるため、自然かつ長期的な効果が期待できる唯一の治療法といえます。
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
            フェイスリフトの治療
          </p>
        </div>
      </div>
      <div class="treatment__detail">
        <p class="treatment__detail-number">
          Cause<span>01</span>
        </p>
        <p class="treatment__detail-title">
          シンシアシグネチャーフェイスリフト
        </p>


        <div class="treatment-result__content">
          <h3 class="treatment__anatomy-title">
            シンシアシグネチャーフェイスリフト
          </h3>
          <p class="treatment-result__lead">
            効果・クオリティ共に当院No.1！<br>
            咬筋層帯、下顎縁部まで処理するシンシアオリジナルの本格フェイスリフト治療
          </p>

          <div class="treatment-result__images">
            <figure class="treatment-result__image">
              <img src="<?php bloginfo('stylesheet_directory'); ?>/img/facelift/treatment01.jpg" alt="術前">
              <figcaption>術前</figcaption>
            </figure>
            <figure class="treatment-result__image">
              <img src="<?php bloginfo('stylesheet_directory'); ?>/img/facelift/treatment02.jpg" alt="術後">
              <figcaption>術後</figcaption>
            </figure>
          </div>

          <div class="treatment-result__recommend">
            <p class="treatment-result__recommend-title">■おすすめな方</p>
            <ul class="treatment-result__recommend-list">
              <li>・しっかりとしたリフトアップ効果を実感したい</li>
              <li>・自然な仕上がりで、健康的に若々しくなりたい</li>
              <li>・数年後も若々しさを保ちたい</li>
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
          <p class="effect__number">
            01

          </p>

          <div class="effect__image">
            <img src="<?php bloginfo('stylesheet_directory'); ?>/img/facelift/noimage.jpg" alt="効果にコミットのイメージ画像">
          </div>

          <h3 class="effect__title">
            効果にコミット
          </h3>

          <p class="effect__text">
            美容外科でおこなう治療は、医療に基づきあなたの老化の原因をきちんと見極めた上で、最適な治療をご提案します。<br>
            カウンセリングから治療、アフターケア全てを熟練の医師が担当致します。
          </p>
        </div>
        <div class="effect__item">
          <p class="effect__number">
            02
          </p>

          <div class="effect__image">
            <img src="<?php bloginfo('stylesheet_directory'); ?>/img/facelift/noimage.jpg" alt="適正価格のイメージ画像">
          </div>

          <h3 class="effect__title">
            適正な価格
          </h3>

          <p class="effect__text">
            本当に満足の行く結果を得るには、定期的に治療が必要となり、結果として高額な費用がかかったということが多く見受けられます。大切なお顔は、信頼ある医療機関での治療をおすすめ致します。
          </p>
        </div>
        <div class="effect__item">
          <p class="effect__number">
            03
          </p>

          <div class="effect__image">
            <img src="<?php bloginfo('stylesheet_directory'); ?>/img/facelift/noimage.jpg" alt="安全性のイメージ画像">
          </div>

          <h3 class="effect__title">
            安全性
          </h3>

          <p class="effect__text">
            事前に、施術内容や術後の経過、リスクをきちんとお伝えした上で治療を行います。<br>当院では、痛みも意識も取り除くオリジナルTIVAで麻酔をします。
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
              <img src="<?php bloginfo('stylesheet_directory'); ?>/img/pico/flow01.png" alt="受付・診察・カウンセリングのイメージ画像" width="300" height="200">
            </div>

            <div class="flow__text">
              <p class="flow__step">
                STEP 01
              </p>
              <h3 class="flow__title">
                受付・診察・カウンセリング
              </h3>
              <p class="flow__description">
                ご来院後、まずはお肌やお顔全体の状態を詳しく診察いたします。<br>
                患者様のご希望に合わせて最適な治療プランをご提案します。<br>
                治療内容やリスク、アフターケアについても丁寧にご説明いたしますので、ご不安な点はお気軽にご相談ください。
              </p>

            </div>
          </div>
          <div class="flow__item">
            <div class="flow__image">
              <img src="<?php bloginfo('stylesheet_directory'); ?>/img/pico/flow02.png" alt="治療前準備のイメージ画像" width="300" height="200">
            </div>

            <div class="flow__text">
              <p class="flow__step">
                STEP 02
              </p>
              <h3 class="flow__title">
                治療前の準備
                <p class="flow__description">
                  施術部位のメイクを落とし、肌を清潔な状態にします。
                </p>

            </div>
          </div>
          <div class="flow__item">
            <div class="flow__image">
              <img src="<?php bloginfo('stylesheet_directory'); ?>/img/pico/flow03.png" alt="麻酔のイメージ画像" width="300" height="200">
            </div>

            <div class="flow__text">
              <p class="flow__step">
                STEP 03
              </p>
              <h3 class="flow__title">
                麻酔
              </h3>
              <p class="flow__description">
                必要に応じて麻酔クリームを塗布し、約30分ほどお時間をいただきます。<br>
                注入治療や脂肪移動術の場合も、痛みに配慮し局所麻酔・笑気麻酔を併用することがあります。
              </p>

            </div>
          </div>
          <div class="flow__item">
            <div class="flow__image">
              <img src="<?php bloginfo('stylesheet_directory'); ?>/img/facelift/noimage.jpg" alt="施術のイメージ画像" width="300" height="200">
            </div>

            <div class="flow__text">
              <p class="flow__step">
                STEP 04
              </p>
              <h3 class="flow__title">
                施術
              </h3>
              <p class="flow__description">
                患者様の症状や治療法に合わせて施術を行います。<br>
                施術時間は方法により異なりますが、目安は2時間〜4程度です。
              </p>

            </div>
          </div>
          <div class="flow__item">
            <div class="flow__image">
              <img src="<?php bloginfo('stylesheet_directory'); ?>/img/pico/flow05.png" alt="治療後ケアのイメージ画像" width="300" height="200">
            </div>

            <div class="flow__text">
              <p class="flow__step">
                STEP 05
              </p>
              <h3 class="flow__title">
                治療後のケア
              </h3>
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

  <section class="about-page facelift-about" id="about-page">
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
          <p class="about-page__title">
            施術にかかる時間
          </p>
          <div class="about-page__text">
            施術は内容と範囲によりますが、典型的には 2〜4時間前後 を要します。<br>
            “シンシアシグネチャーフェイスリフト”では、フェイスリフト本体に加えて頬・アゴ下の脂肪吸引や複数部位への脂肪注入などを組み合わせるため、手術時間が長めになることがあります
          </div>
        </div>
        <div class="about-page__item">
          <p class="about-page__title">
            ダウンタイム
          </p>
          <div class="about-page__text">
            ・腫れ・赤み・内出血：数日〜1週間程度<br>
            引き上げた部位の筋肉痛やだるさ、テープ・包帯による圧迫感を感じることがあります。数日〜数週間かけて落ち着きます。
          </div>
        </div>
        <div class="about-page__item">
          <p class="about-page__title">
            洗顔・入浴・日常生活
          </p>
          <div class="about-page__text">
            洗顔：術後翌日程度から可能になるケースが多いですが、患部を強くこすらないように注意が必要です。<br>
            入浴：当日はシャワーにとどめ、温かい湯に浸かる長時間の入浴やサウナは控える方が良いです。<br>
            日常生活：手術当日は安静を心がけ、重い運動や激しい動作は避けてください。術後数日間は顔を上げて寝るなど、腫れを和らげる工夫をします。
          </div>
        </div>
        <div class="about-page__item">
          <p class="about-page__title">
            麻酔について
          </p>
          <div class="about-page__text">
            シンシアでは手術中の痛み・不快感を極力軽減するため、 静脈麻酔 を用いて「意識がほぼない状態」で施術を行います。局所麻酔との併用により、痛みを最小限にコントロールします。
          </div>
        </div>
        <div class="about-page__item">
          <p class="about-page__title">
            治療が受けられない方
          </p>
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
          <p class="about-page__title">
            拘束・固定・術後処置
          </p>
          <div class="about-page__text">
            手術後は傷口の保護および皮膚の引き上げ部の固定を行います。包帯やドレーン（必要な場合）、テープ固定をすることがあります。 <a href="https://cosmedical.jp/clinic/menu/facelift/?utm_source=chatgpt.com" class="about-page__text-link">コスメディカル</a><br>
            入院の必要は基本的にありませんが、麻酔からの覚醒後1〜2時間は院内で休息をとっていただきます。
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
            フェイスリフトの効果はどのくらい持続しますか？
          </div>
          <div class="faq__answer" hidden>
            <span class="faq__a-mark">A</span>
            個人差はありますが、一般的に 5〜10年ほど持続 するといわれています。老化の進行を完全に止めることはできませんが、手術前の状態に戻るのではなく「若返った状態から年を重ねていく」イメージです。
          </div>
        </div>
        <div class="faq__item">
          <div class="faq__question">
            <span class="faq__q-mark">Q</span>
            手術は痛いですか？
          </div>
          <div class="faq__answer" hidden>
            <span class="faq__a-mark">A</span>
            シンシアでは 静脈麻酔と局所麻酔 を併用するため、施術中の痛みはほとんどありません。術後は腫れや筋肉痛に似た違和感を感じることがありますが、処方薬でコントロール可能です。
          </div>
        </div>
        <div class="faq__item">
          <div class="faq__question">
            <span class="faq__q-mark">Q</span>
            傷跡は目立ちませんか？
          </div>
          <div class="faq__answer" hidden>
            <span class="faq__a-mark">A</span>
            切開は耳の周囲や髪の生え際など、目立ちにくい部分に沿って行います。時間の経過とともに赤みは薄れ、ほとんどわからない程度に自然に治癒していきます。
          </div>
        </div>
        <div class="faq__item">
          <div class="faq__question">
            <span class="faq__q-mark">Q</span>
            仕事や日常生活に復帰できるのはいつ頃ですか？
          </div>
          <div class="faq__answer" hidden>
            <span class="faq__a-mark">A</span>
            腫れや内出血は1〜2週間で落ち着くことが多いため、デスクワークなら1週間前後、接客業など人前に出るお仕事は2週間程度 がおすすめです。
          </div>
        </div>
        <div class="faq__item">
          <div class="faq__question">
            <span class="faq__q-mark">Q</span>
            他の若返り治療との違いは何ですか？
          </div>
          <div class="faq__answer" hidden>
            <span class="faq__a-mark">A</span>
            糸リフトやヒアルロン酸注入などは比較的手軽ですが、改善できる範囲や持続期間に限界があります。フェイスリフトは たるみを根本から改善し、効果が長期的に続く ため、中〜重度のたるみに適した治療です。
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

        <h3 class="price__title">フェイスリフト</h3>

        <div class="face-price__block">
          <h3 class="face-price__title">シンシアシグネチャーフェイスリフト</h3>
          <table class="face-price__table">
            <tr>
              <td class="face-price__name">シンシアシグネチャーフェイスリフト</td>
              <td class="face-price__price type1">
                <div class="face-price__row">
                  <span class="face-price__value"><span class="face-price__amount">770,000</span><span class="face-price__unit">円</span></span>
                </div>
                <div class="face-price__row">
                  <span class="face-price__note">又吉総院長による施術</span>
                  <span class="face-price__value"><span class="face-price__amount">990,000</span><span class="face-price__unit">円</span></span>
                </div>
              </td>

            </tr>
          </table>

          <h4 class="face-price__option-title">オプション</h4>
          <table class="face-price__table">
            <tr>
              <td class="face-price__name">術後インディバ 30分 1回<br><span>（施術日から1ヶ月以内の方）</span>
              </td>
              <td class="face-price__price">7,700<span>円</span></td>
            </tr>
            <tr>
              <td class="face-price__name">術後インディバ 30分 1回<br><span>（施術日から1ヶ月過ぎた方）</span></td>
              <td class="face-price__price">9,350<span>円</span></td>
            </tr>
            <tr>
              <td class="face-price__name">麻酔代</td>
              <td class="face-price__price">88,000〜121,000<span>円</span></td>
            </tr>
          </table>
        </div>

        <div class="face-price__block">
          <h3 class="face-price__title">頬・アゴ下 ベイザー®×アキーセル脂肪吸引</h3>
          <table class="face-price__table">
            <tr>
              <td class="face-price__name">
                頬・アゴ下 ベイザー®×アキーセル脂肪吸引<br>
                <small>※シンシアシグネチャーフェイスリフトと同時施術の場合</small>
              </td>
              <td class="face-price__price">330,000<span>円</span></td>
            </tr>
            <tr>
              <td class="face-price__name">お顔の脂肪注入（マイクロCRF注入）</td>
              <td class="face-price__price">
                <span>（1箇所）</span>231,000<span>円</span><br>
                <span>（2箇所）</span>264,000<span>円</span><br>
                <span>（3箇所）</span>297,000<span>円</span>
              </td>
            </tr>
          </table>
        </div>

        <div class="face-price__block">
          <h3 class="face-price__title">トータルフェイスリフトSMAS法</h3>
          <table class="face-price__table">
            <tr>
              <td class="face-price__name">トータル（フル）フェイスリフト</td>
              <td class="face-price__price">440,000<span>円</span></td>
            </tr>
          </table>

          <h4 class="face-price__option-title">オプション</h4>
          <table class="face-price__table">
            <tr>
              <td class="face-price__name">術後インディバ 30分 1回<br><span>（施術日から1ヶ月以内の方）</span></td>
              <td class="face-price__price">7,700<span>円</span></td>
            </tr>
            <tr>
              <td class="face-price__name">術後インディバ 30分 1回<br><span>（施術日から1ヶ月過ぎた方）</span></td>
              <td class="face-price__price">9,350<span>円</span></td>
            </tr>
            <tr>
              <td class="face-price__name">麻酔代</td>
              <td class="face-price__price">33,000〜66,000<span>円</span></td>
            </tr>
          </table>
        </div>


        <div class="face-price__block">
          <h3 class="face-price__title">部分フェイスリフト</h3>
          <table class="face-price__table">
            <tr>
              <td class="face-price__name">前額リフト</td>
              <td class="face-price__price">440,000<span>円</span></td>
            </tr>
            <tr>
              <td class="face-price__name">ミニリフト（こめかみリフト）</td>
              <td class="face-price__price">250,800<span>円</span></td>
            </tr>
            <tr>
              <td class="face-price__name">ミニリフト（頬リフト）</td>
              <td class="face-price__price">330,000<span>円</span></td>
            </tr>
          </table>

          <h4 class="face-price__option-title">オプション</h4>
          <table class="face-price__table">
            <tr>
              <td class="face-price__name">術後インディバ 30分 1回<br><span>（施術日から1ヶ月以内の方）</td>
              <td class="face-price__price">7,700<span>円</span></td>
            </tr>
            <tr>
              <td class="face-price__name">術後インディバ 30分 1回<br><span>（施術日から1ヶ月過ぎた方）</span></td>
              <td class="face-price__price">9,350<span>円</span></td>
            </tr>
            <tr>
              <td class="face-price__name">麻酔代</td>
              <td class="face-price__price">33,000〜66,000<span>円</span></td>
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