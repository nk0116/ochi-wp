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
              rel="noopener noreferrer">
              <p class="contact__reservation-title">
                <img src="<?php bloginfo('stylesheet_directory'); ?>/img/top/ico_line.svg.png" alt="" />
                LINE予約
              </p>
              <p class="contact__reservation-desc">
                銀座院のLINE予約は<br class="pc_n" />こちらから
              </p>
            </a>
            <a
              class="contact__reservation"
              href="https://cosmedical.jp/clinic/contact/"
              target="_blank"
              rel="noopener noreferrer">
              <p class="contact__reservation-title">
                <img src="<?php bloginfo('stylesheet_directory'); ?>/img/top/Web.png" alt="" />
                メール
              </p>
              <p class="contact__reservation-desc">
                お問い合わせフォーム
              </p>
            </a>
          </div>
          <a class="contact__phone" href="tel:03-6281-4100">
            <p class="contact__phone-number">
              <img src="<?php bloginfo('stylesheet_directory'); ?>/img/top/Phone.png" alt="" />
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
              href="https://page.line.me/oiu9031z" target="_blank">
              <p class="contact__reservation-title">
                <img
                  src="<?php bloginfo('stylesheet_directory'); ?>/img/top/ico_line.svg.png"
                  alt="https://page.line.me/oiu9031z"
                  target="_blank"
                  rel="noopener noreferrer" />
                LINE予約
              </p>
              <p class="contact__reservation-desc">
                渋谷院のLINE予約は<br class="pc_n" />こちらから
              </p>
            </a>
            <a
              class="contact__reservation"
              href="https://cosmedical.jp/clinic/contact/"
              target="_blank"
              rel="noopener noreferrer">
              <p class="contact__reservation-title">
                <img src="<?php bloginfo('stylesheet_directory'); ?>/img/top/Web.png" alt="" />
                メール
              </p>
              <p class="contact__reservation-desc">
                お問い合わせフォーム
              </p>
            </a>
          </div>
          <a class="contact__phone" href="tel:03-6809-0029">
            <p class="contact__phone-number">
              <img src="<?php bloginfo('stylesheet_directory'); ?>/img/top/Phone.png" alt="" />
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
      href="https://cosmedical.jp/monitor/">モニター募集</a>
  </div>
  <div class="footer-links__item">
    <a
      href="https://cosmedical.jp/point-card/">ポイントカード</a>
  </div>
  <div class="footer-links__item">
    <a
      href="https://cosmedical.jp/clinic/recruit/">採用情報</a>
  </div>
  <div class="footer-links__item">
    <a
      href="https://cosmedical.jp/clinic/under-age/">未成年者</a>
  </div>
  <div class="footer-links__item">
    <a
      href="<?php echo home_url('/price-payment/'); ?>">お支払いについて</a>
  </div>
</div>
</main>


<footer class="footer">
  <div class="footer__inner inner">
    <div class="footer__logo">
      <img src="<?php bloginfo('stylesheet_directory'); ?>/img/top/logo.gif.png" alt="" />
    </div>
    <nav class="footer__description">
      <ul class="footer__nav-list">
        <li class="footer__nav-item">
          <a
            href="https://cosmedical.jp/clinic/menu/"
            target="_blank"
            rel="noopener noreferrer">
            施術一覧
          </a>
        </li>
        <li class="footer__nav-item">
          <a
            href="https://cosmedical.jp/clinic/price/"
            target="_blank"
            rel="noopener noreferrer">
            料金表
          </a>
        </li>

        <li class="footer__nav-item">
          <a
            href="https://cosmedical.jp/clinic/doctor/"
            target="_blank"
            rel="noopener noreferrer">
            ドクター紹介
          </a>
        </li>

        <li class="footer__nav-item">
          <a
            href="<?php echo esc_url(home_url('#l-top_sns')); ?>"
            target="_blank"
            rel="noopener noreferrer">
            SNS一覧</a>
        </li>
        <li class="footer__nav-item">
          <a
            href="<?php echo esc_url(home_url('/about/')); ?>"
            target="_blank"
            rel="noopener noreferrer">
            当院について
          </a>
        </li>
        <li class="footer__nav-item footer__nav-item--has-branches">
          <a href="<?php echo esc_url(home_url('/access')); ?>" target="_blank" rel="noopener noreferrer" aria-haspopup="true" aria-expanded="false">
            アクセス
          </a>
          <ul class="footer__submenu" aria-label="アクセス（院を選択）">
            <li class="footer__submenu-item">
              <a href="<?php echo esc_url(home_url('/access-ginza/')); ?>" target="_blank" rel="noopener noreferrer">銀座院</a>
            </li>
            <li class="footer__submenu-item">
              <a href="<?php echo esc_url(home_url('/access-shibuya/')); ?>" target="_blank" rel="noopener noreferrer">渋谷院</a>
            </li>
          </ul>
        </li>
        <!-- <li class="footer__nav-item">
                <a href="<?php echo esc_url(home_url('/qa')); ?>" target="_blank" rel="noopener noreferrer">
                  よくある質問
                </a>
              </li> -->
      </ul>
    </nav>

    <div class="footer__content">
      <p class="footer__content-title">美容外科施術</p>

      <div class="footer__menu js-grid">
        <ul class="footer__menu-list js-grid-item">
          <li class="footer__menu-item">
            <a href="https://cosmedical.jp/clinic/menu/memoto-wakaku/">目元のエイジングケア治療</a>
          </li>
          <li class="footer__menu-item">
            <a href="https://cosmedical.jp/clinic/menu/kuma/">目の下のクマ・たるみ治療【経結膜脱脂術・眼窩脂肪注入・マイクロCRF】</a>
          </li>
          <li class="footer__menu-item">
            <a href="https://cosmedical.jp/clinic/menu/golgo/">ゴルゴ線（ゴルゴライン、インディアンライン）治療【ゴルゴ線剥離・脂肪注入・マイクロCRF】</a>
          </li>
          <li class="footer__menu-item">
            <a href="https://cosmedical.jp/clinic/menu/tarumi-ue/">上まぶたのたるみ取り【眉下切開術・二重ライン切開術】</a>
          </li>
          <li class="footer__menu-item">
            <a href="https://cosmedical.jp/clinic/menu/ganken/">眼瞼下垂症手術【挙筋前転法、腱膜固定法】</a>
          </li>
          <li class="footer__menu-item">
            <a href="https://cosmedical.jp/clinic/menu/rejuran-i/">リジュランi(アイ)【サーモン注射】</a>
          </li>
        </ul>

        <ul class="footer__menu-list js-grid-item">
          <li class="footer__menu-item">
            <a href="https://cosmedical.jp/clinic/menu/liposuction/">脂肪吸引</a>
          </li>
          <li class="footer__menu-item">
            <a href="https://cosmedical.jp/clinic/menu/vaser-acquicell/#vaser">ベイザー®脂肪吸引</a>
          </li>
          <li class="footer__menu-item">
            <a href="https://cosmedical.jp/clinic/menu/vaser-acquicell/#aquicell">アキーセル脂肪吸引</a>
          </li>
          <li class="footer__menu-item">
            <a href="https://cosmedical.jp/clinic/menu/vaser-acquicell/">ベイザー®脂肪吸引×アキーセル脂肪吸引</a>
          </li>
          <li class="footer__menu-item">
            <a href="https://cosmedical.jp/clinic/menu/lipo-face/">顔の脂肪吸引</a>
          </li>
          <li class="footer__menu-item">
            <a href="https://cosmedical.jp/clinic/menu/lipo-arms/">二の腕・腕まわりの脂肪吸引</a>
          </li>
          <li class="footer__menu-item">
            <a href="https://cosmedical.jp/clinic/menu/lipo-abdomen/">お腹・腰まわりの脂肪吸引</a>
          </li>
          <li class="footer__menu-item">
            <a href="https://cosmedical.jp/clinic/menu/lipo-thigh/">太もも・お尻の脂肪吸引</a>
          </li>
          <li class="footer__menu-item">
            <a href="https://cosmedical.jp/clinic/menu/lipo-calf/">下腿（ふくらはぎ・足首）の脂肪吸引</a>
          </li>
          <li class="footer__menu-item">
            <a href="https://cosmedical.jp/clinic/menu/lipo-body/">全身の脂肪吸引</a>
          </li>
          <li class="footer__menu-item">
            <a href="https://cosmedical.jp/clinic/menu/lipo-kodawari/">シンシアの脂肪吸引・豊胸へのこだわり</a>
          </li>
          <li class="footer__menu-item">
            <a href="https://cosmedical.jp/clinic/menu/lipo-after/">脂肪吸引の流れ・術後の経過</a>
          </li>
          <li class="footer__menu-item">
            <a href="https://cosmedical.jp/clinic/menu/lipo-anesthesia/">シンシアの無痛麻酔</a>
          </li>
          <li class="footer__menu-item">
            <a href="https://cosmedical.jp/clinic/menu/re-operation/">他院で受けた脂肪吸引で満足出来なかった方へ「脂肪吸引の他院修正」</a>
          </li>
        </ul>

        <ul class="footer__menu-list js-grid-item">
          <li class="footer__menu-item">
            <a href="https://cosmedical.jp/clinic/menu/bust/">豊胸・バスト整形</a>
          </li>
          <li class="footer__menu-item">
            <a href="https://cosmedical.jp/clinic/menu/crf/">コンデンスリッチファット（CRF）豊胸</a>
          </li>
          <li class="footer__menu-item">
            <a href="https://cosmedical.jp/clinic/menu/implant/">バッグインプラント除去＋コンデンスリッチファット（CRF）豊胸</a>
          </li>
          <li class="footer__menu-item">
            <a href="https://cosmedical.jp/clinic/menu/nipple/">乳輪縮小・乳頭縮小・陥没乳頭</a>
          </li>
        </ul>

        <ul class="footer__menu-list js-grid-item">
          <li class="footer__menu-item">
            <a href="https://cosmedical.jp/clinic/menu/facelift/">フェイスリフト</a>
          </li>
          <li class="footer__menu-item">
            <a href="https://cosmedical.jp/clinic/menu/facelift-signature/">シンシアシグネチャーフェイスリフト</a>
          </li>
          <li class="footer__menu-item">
            <a href="https://cosmedical.jp/clinic/menu/facelift-total/">トータルフェイスリフトSMAS法</a>
          </li>
          <li class="footer__menu-item">
            <a href="https://cosmedical.jp/clinic/menu/facelift-mini/">部分フェイスリフト（前額リフト・ミニリフト）</a>
          </li>
          <li class="footer__menu-item">
            <a href="https://cosmedical.jp/clinic/menu/facelift-vaser/">頬・アゴ下 ベイザー®×アキーセル脂肪吸引＋脂肪注入によるフェイスリフト</a>
          </li>
        </ul>

        <ul class="footer__menu-list js-grid-item">
          <li class="footer__menu-item">
            <a href="https://cosmedical.jp/clinic/menu/futae/">二重まぶた・二重形成術・目元</a>
          </li>
          <li class="footer__menu-item">
            <a href="https://cosmedical.jp/clinic/menu/futae-maibotsu/">二重埋没法</a>
          </li>
          <li class="footer__menu-item">
            <a href="https://cosmedical.jp/clinic/menu/futae-sekkai/">二重まぶた全切開法</a>
          </li>
          <li class="footer__menu-item">
            <a href="https://cosmedical.jp/clinic/menu/microcat/">まぶたの脂肪取り【マイクロカット脂肪除去】</a>
          </li>
          <li class="footer__menu-item">
            <a href="https://cosmedical.jp/clinic/menu/megashira/">目頭切開法</a>
          </li>
          <li class="footer__menu-item">
            <a href="https://cosmedical.jp/clinic/menu/tearbag/">涙袋形成術</a>
          </li>
        </ul>

        <ul class="footer__menu-list js-grid-item">
          <li class="footer__menu-item">
            <a href="https://cosmedical.jp/clinic/menu/waki/">ワキガ・多汗症治療</a>
          </li>
          <li class="footer__menu-item">
            <a href="https://cosmedical.jp/clinic/menu/vaser-formula-shaver-system/">ワキガ治療ベイザー・フォーミュラシェーバーシステム</a>
          </li>
          <li class="footer__menu-item">
            <a href="https://cosmedical.jp/clinic/menu/senjo/">ワキガ治療 皮弁法【剪除法】</a>
          </li>
          <li class="footer__menu-item">
            <a href="https://cosmedical.jp/clinic/menu/waki-botox/">多汗症治療 ボツリヌストキシン注射【ワキボトックス】</a>
          </li>
          <li class="footer__menu-item">
            <a href="https://cosmedical.jp/clinic/menu/waki-base/">ワキガ･多汗症の基礎知識</a>
          </li>
          <li class="footer__menu-item">
            <a href="https://cosmedical.jp/clinic/menu/waki-about/">シンシアのワキガ治療について</a>
          </li>
          <li class="footer__menu-item">
            <a href="https://cosmedical.jp/column/">ワキガ•多汗症のコラム</a>
          </li>
        </ul>

        <ul class="footer__menu-list js-grid-item">
          <li class="footer__menu-item">
            <a href="https://cosmedical.jp/clinic/menu/itolift/">糸によるリフトアップ治療</a>
          </li>
          <li class="footer__menu-item">
            <a href="https://cosmedical.jp/clinic/menu/mint-lift/">ミントリフト</a>
          </li>
          <li class="footer__menu-item">
            <a href="https://cosmedical.jp/clinic/menu/tess-lift/">TESSリフト</a>
          </li>
          <li class="footer__menu-item">
            <a href="https://cosmedical.jp/clinic/menu/thread/">引き締めと美肌の糸治療（N-COG、PDOモノスレッド、DermaSpringEYE）</a>
          </li>
        </ul>

        <ul class="footer__menu-list js-grid-item">
          <li class="footer__menu-item">
            <a href="https://cosmedical.jp/clinic/menu/kogao/">小顔・輪郭形成</a>
          </li>
          <li class="footer__menu-item">
            <a href="https://cosmedical.jp/clinic/menu/lipo-face/">顔の脂肪吸引【頬・アゴ下】</a>
          </li>
          <li class="footer__menu-item">
            <a href="https://cosmedical.jp/clinic/menu/bnls/">BNLS 脂肪溶解注射【小顔・痩身】</a>
          </li>
          <li class="footer__menu-item">
            <a href="https://cosmedical.jp/clinic/menu/ultracel-zi-q/">【医療ハイフ(HIFU)】 ウルトラセルZi／ウルトラセルQ+</a>
          </li>
          <li class="footer__menu-item">
            <a href="https://cosmedical.jp/clinic/menu/rinkaku/">お顔のボリュームアップ・輪郭形成【丸いおでこ・おとがい（アゴ）形成】</a>
          </li>
          <li class="footer__menu-item">
            <a href="https://cosmedical.jp/clinic/menu/botox-kogao/">ボツリヌストキシン注射による小顔治療【ボトックス】</a>
          </li>
          <li class="footer__menu-item">
            <a href="https://cosmedical.jp/clinic/menu/density/">デンシティ（DENSITY）</a>
          </li>
        </ul>

        <ul class="footer__menu-list js-grid-item">
          <li class="footer__menu-item">
            <a href="https://cosmedical.jp/clinic/menu/nose/">鼻の整形</a>
          </li>
          <li class="footer__menu-item">
            <a href="https://cosmedical.jp/clinic/menu/nose-detail/">鼻形成術【プロテーゼ・ヒアルロン酸隆鼻術、鼻尖修正、小鼻縮小、小鼻のボトックス】</a>
          </li>
          <li class="footer__menu-item">
            <a href="https://cosmedical.jp/clinic/menu/nose-detail/#nose01">プロテーゼによる隆鼻術</a>
          </li>
          <li class="footer__menu-item">
            <a href="https://cosmedical.jp/clinic/menu/nose-detail/#nose03">鼻尖修正</a>
          </li>
          <li class="footer__menu-item">
            <a href="https://cosmedical.jp/clinic/menu/nose-detail/#nose04">小鼻縮小</a>
          </li>
          <li class="footer__menu-item">
            <a href="https://cosmedical.jp/clinic/menu/nose-detail/#nose02">ヒアルロン酸による隆鼻術</a>
          </li>
          <li class="footer__menu-item">
            <a href="https://cosmedical.jp/clinic/menu/nose-detail/#nose04">小鼻のボトックス</a>
          </li>
        </ul>

        <ul class="footer__menu-list js-grid-item">
          <li class="footer__menu-item">
            <a href="https://cosmedical.jp/clinic/menu/mouse/">口の整形</a>
          </li>
          <li class="footer__menu-item">
            <a href="https://cosmedical.jp/clinic/menu/lip/">口唇縮小術</a>
          </li>
          <li class="footer__menu-item">
            <a href="https://cosmedical.jp/clinic/menu/lip-plump/">唇のヒアルロン酸注入</a>
          </li>
          <li class="footer__menu-item">
            <a href="https://cosmedical.jp/clinic/menu/botox-kogao/#mouse02">笑顔のボトックス</a>
          </li>
          <li class="footer__menu-item">
            <a href="https://cosmedical.jp/clinic/menu/botox-kogao/#mouse03">人中ボトックス</a>
          </li>
          <li class="footer__menu-item">
            <a href="https://cosmedical.jp/clinic/menu/botox-kogao/#mouse01">ガミースマイル【ボトックス注射】</a>
          </li>
        </ul>
      </div>
    </div>

    <div class="footer__content">
      <p class="footer__content-title">美容皮膚科施術</p>

      <div class="footer__menu js-grid">
        <ul class="footer__menu-list js-grid-item">
          <li class="footer__menu-item">
            <a href="https://cosmedical.jp/clinic/menu/shiwa-tarumi/">シワ・たるみ治療</a>
          </li>
          <li class="footer__menu-item">
            <a href="https://cosmedical.jp/clinic/menu/ulthera/">ウルセラ</a>
          </li>
          <li class="footer__menu-item">
            <a href="https://cosmedical.jp/clinic/menu/thermacool-flx/">サーマクールFLX</a>
          </li>
          <li class="footer__menu-item">
            <a href="https://cosmedical.jp/clinic/menu/thermacool-eye/">サーマクールアイ</a>
          </li>
          <li class="footer__menu-item">
            <a href="https://cosmedical.jp/clinic/menu/combination/">サーマクールFLX+ウルセラ コンビネーション治療</a>
          </li>
          <li class="footer__menu-item">
            <a href="https://cosmedical.jp/clinic/menu/comparison/">サーマクールFLXとウルセラどっちがいいの？</a>
          </li>
          <li class="footer__menu-item">
            <a href="https://cosmedical.jp/clinic/menu/tarumi-mechanism/">たるみのメカニズム</a>
          </li>
          <li class="footer__menu-item">
            <a href="https://cosmedical.jp/clinic/menu/tarumi-machine/">顔のたるみに効くレーザー機器 徹底比較</a>
          </li>
          <li class="footer__menu-item">
            <a href="https://cosmedical.jp/clinic/menu/ultracel-zi-q/">【医療ハイフ(HIFU)】 ウルトラセルZi／ウルトラセルQ+</a>
          </li>
          <li class="footer__menu-item">
            <a href="https://cosmedical.jp/clinic/menu/density/">デンシティ（DENSITY）
            </a>
          </li>
          <li class="footer__menu-item">
            <a href="https://cosmedical.jp/clinic/menu/titan-xl/">タイタンXL</a>
          </li>
          <li class="footer__menu-item">
            <a href="https://cosmedical.jp/clinic/menu/hyaluronic/">シワ・たるみのヒアルロン酸注入治療</a>
          </li>
          <li class="footer__menu-item">
            <a href="https://cosmedical.jp/clinic/menu/face-expression/">お顔の表情ジワ改善</a>
          </li>
          <li class="footer__menu-item">
            <a href="https://cosmedical.jp/clinic/menu/baby-collagen/">ベビーコラーゲン注入</a>
          </li>
          <li class="footer__menu-item">
            <a href="https://cosmedical.jp/clinic/menu/pluryal-densifier/">肌育製剤　プルリアルデンシファイ</a>
          </li>
        </ul>

        <ul class="footer__menu-list js-grid-item">
          <li class="footer__menu-item">
            <a href="https://cosmedical.jp/clinic/menu/bihaku-bihada/">シミ・そばかす・くすみなどの美白・美肌治療</a>
          </li>
          <li class="footer__menu-item">
            <a href="https://cosmedical.jp/clinic/menu/iconmaxg/">スーパーフォトセラピー ICON MaxG（IPL：光治療）</a>
          </li>
          <li class="footer__menu-item">
            <a href="https://cosmedical.jp/clinic/menu/limelight/">ライムライト（IPL：光治療）</a>
          </li>
          <li class="footer__menu-item">
            <a href="https://cosmedical.jp/clinic/menu/genesis/">ジェネシス</a>
          </li>
          <li class="footer__menu-item">
            <a href="https://cosmedical.jp/clinic/menu/medlite-c6/">QスイッチYAGレーザー</a>
          </li>
          <li class="footer__menu-item">
            <a href="https://cosmedical.jp/clinic/menu/laser-toning/">レーザートーニング</a>
          </li>
          <li class="footer__menu-item">
            <a href="https://cosmedical.jp/clinic/menu/suiko/">水光注射（ダーマシャイン）</a>
          </li>
          <li class="footer__menu-item">
            <a href="https://cosmedical.jp/clinic/menu/beauty-injection/">美容点滴・注射</a>
          </li>
          <li class="footer__menu-item">
            <a href="https://cosmedical.jp/clinic/menu/iontophoresis/">イオン導入</a>
          </li>
          <li class="footer__menu-item">
            <a href="https://cosmedical.jp/clinic/menu/peeling/">マヌカハニーMIXピール（ケミカルピーリング）</a>
          </li>
          <li class="footer__menu-item">
            <a href="https://cosmedical.jp/clinic/menu/bihaku-medical/#medical01">ハイドロキノン</a>
          </li>
          <li class="footer__menu-item">
            <a href="https://cosmedical.jp/clinic/menu/bihaku-medical/#medical01">トレチノイン</a>
          </li>
          <li class="footer__menu-item">
            <a href="https://cosmedical.jp/clinic/menu/bihaku-medical/">美白・美肌・肝斑 処方医薬品</a>
          </li>
        </ul>

        <ul class="footer__menu-list js-grid-item">
          <li class="footer__menu-item">
            <a href="https://cosmedical.jp/clinic/menu/kanpan-bihaku/">肝斑・美白治療</a>
          </li>
          <li class="footer__menu-item">
            <a href="https://cosmedical.jp/clinic/menu/laser-toning/">レーザートーニング</a>
          </li>
          <li class="footer__menu-item">
            <a href="https://cosmedical.jp/clinic/menu/limelight/">ライムライト（IPL：光治療）</a>
          </li>
          <li class="footer__menu-item">
            <a href="https://cosmedical.jp/clinic/menu/genesis/">ジェネシス</a>
          </li>
          <li class="footer__menu-item">
            <a href="https://cosmedical.jp/clinic/menu/potenza/">ポテンツァ（POTENZA）</a>
          </li>
          <li class="footer__menu-item">
            <a href="https://cosmedical.jp/clinic/menu/iontophoresis/">イオン導入</a>
          </li>
          <li class="footer__menu-item">
            <a href="https://cosmedical.jp/clinic/menu/massage-peel/">マッサージピール（コラーゲンピール）</a>
          </li>
          <li class="footer__menu-item">
            <a href="https://cosmedical.jp/clinic/menu/suiko/">水光注射（ダーマシャイン）</a>
          </li>
          <li class="footer__menu-item">
            <a href="https://cosmedical.jp/clinic/menu/dermapen/">ダーマペン4【ヴェルベットスキン・マイクロボトックス・エクソソーム】</a>
          </li>
          <li class="footer__menu-item">
            <a href="https://cosmedical.jp/clinic/menu/bihaku-medical/">美白・美肌・肝斑 処方医薬品</a>
          </li>
        </ul>

        <ul class="footer__menu-list js-grid-item">
          <li class="footer__menu-item">
            <a href="https://cosmedical.jp/clinic/menu/acne/">ニキビ・ニキビ痕治療</a>
          </li>
          <li class="footer__menu-item">
            <a href="https://cosmedical.jp/clinic/menu/acne-medical/#medical">ニキビ治療薬 ロアキュタン</a>
          </li>
          <li class="footer__menu-item">
            <a href="https://cosmedical.jp/clinic/menu/hormone/">ホルモン療法</a>
          </li>
          <li class="footer__menu-item">
            <a href="https://cosmedical.jp/clinic/menu/acne-comedones/">ニキビ 面皰（めんぽう）圧出</a>
          </li>
          <li class="footer__menu-item">
            <a href="https://cosmedical.jp/clinic/menu/pearl-fractional/">ニキビ痕治療 パールフラクショナル</a>
          </li>
          <li class="footer__menu-item">
            <a href="https://cosmedical.jp/clinic/menu/genesis/">ジェネシス</a>
          </li>
          <li class="footer__menu-item">
            <a href="https://cosmedical.jp/clinic/menu/limelight/">ライムライト（IPL：光治療）</a>
          </li>
          <li class="footer__menu-item">
            <a href="https://cosmedical.jp/clinic/menu/iconmaxg/">スーパーフォトセラピー ICON MaxG（IPL：光治療）</a>
          </li>
          <li class="footer__menu-item">
            <a href="https://cosmedical.jp/clinic/menu/potenza/">ポテンツァ（POTENZA）</a>
          </li>
          <li class="footer__menu-item">
            <a href="https://cosmedical.jp/clinic/menu/beauty-injection/#nikibi">美容点滴・注射</a>
          </li>
          <li class="footer__menu-item">
            <a href="https://cosmedical.jp/clinic/menu/iontophoresis/">イオン導入</a>
          </li>
          <li class="footer__menu-item">
            <a href="https://cosmedical.jp/clinic/menu/peeling/">マヌカハニーMIXピール（ケミカルピーリング）</a>
          </li>
          <li class="footer__menu-item">
            <a href="https://cosmedical.jp/clinic/menu/massage-peel/">マッサージピール（コラーゲンピール）</a>
          </li>
          <li class="footer__menu-item">
            <a href="https://cosmedical.jp/clinic/menu/subcision/">クレーター、ニキビ痕治療　サブシジョン</a>
          </li>
        </ul>

        <ul class="footer__menu-list js-grid-item">
          <li class="footer__menu-item">
            <a href="https://cosmedical.jp/clinic/menu/akaragao/">赤ら顔（酒さ）・毛細血管拡張症治療</a>
          </li>
          <li class="footer__menu-item">
            <a href="https://cosmedical.jp/clinic/menu/genesis/">ジェネシス</a>
          </li>
          <li class="footer__menu-item">
            <a href="https://cosmedical.jp/clinic/menu/limelight/">ライムライト（IPL：光治療）</a>
          </li>
          <li class="footer__menu-item">
            <a href="https://cosmedical.jp/clinic/menu/iconmaxg/">スーパーフォトセラピー ICON MaxG（IPL：光治療）</a>
          </li>
          <li class="footer__menu-item">
            <a href="https://cosmedical.jp/clinic/menu/potenza/">ポテンツァ（POTENZA）</a>
          </li>
          <li class="footer__menu-item">
            <a href="https://cosmedical.jp/clinic/menu/iontophoresis/">イオン導入</a>
          </li>
          <li class="footer__menu-item">
            <a href="https://cosmedical.jp/clinic/menu/peeling/">マヌカハニーMIXピール（ケミカルピーリング）</a>
          </li>
          <li class="footer__menu-item">
            <a href="https://cosmedical.jp/clinic/menu/dermaroller/">ダーマローラー【毛孔性苔癬・成長因子導入】</a>
          </li>
          <li class="footer__menu-item">
            <a href="https://cosmedical.jp/clinic/menu/beauty-injection/">美容点滴・注射</a>
          </li>
        </ul>

        <ul class="footer__menu-list js-grid-item">
          <li class="footer__menu-item">
            <a href="https://cosmedical.jp/clinic/menu/lichen-pilaris/">毛孔性苔癬治療</a>
          </li>
          <li class="footer__menu-item">
            <a href="https://cosmedical.jp/clinic/menu/dermaroller/">ダーマローラー【毛孔性苔癬・成長因子導入】</a>
          </li>
        </ul>

        <ul class="footer__menu-list js-grid-item">
          <li class="footer__menu-item">
            <a href="https://cosmedical.jp/clinic/menu/ibo-hokuro/">いぼ・ほくろ除去</a>
          </li>
          <li class="footer__menu-item">
            <a href="https://cosmedical.jp/clinic/menu/ibo-hokuro/">いぼ・ほくろ除去治療</a>
          </li>
        </ul>
      </div>
    </div>

    <div class="footer__content">
      <p class="footer__content-title">注入治療</p>

      <div class="footer__menu footer__menu--injection js-grid">
        <ul class="footer__menu-list js-grid-item">
          <li class="footer__menu-item">
            <a href="https://cosmedical.jp/clinic/menu/reverse-aging/">お肌を若々しくする 美肌・リバースエイジング 注入治療</a>
          </li>
          <li class="footer__menu-item">
            <a href="https://cosmedical.jp/clinic/menu/potenza/">ポテンツァ（POTENZA）</a>
          </li>
          <li class="footer__menu-item">
            <a href="https://cosmedical.jp/clinic/menu/profhilo/">肌再生 プロファイロ</a>
          </li>
          <li class="footer__menu-item">
            <a href="https://cosmedical.jp/clinic/menu/hydro/">肌再生 ハイドロインジェクション</a>
          </li>
          <li class="footer__menu-item">
            <a href="https://cosmedical.jp/clinic/menu/sunekos/">肌再生 スネコス</a>
          </li>
          <li class="footer__menu-item">
            <a href="https://cosmedical.jp/clinic/menu/suiko/">水光注射（ダーマシャイン）</a>
          </li>
          <li class="footer__menu-item">
            <a href="https://cosmedical.jp/clinic/menu/dermapen/">ダーマペン4【ヴェルベットスキン・マイクロボトックス・エクソソーム】</a>
          </li>
          <li class="footer__menu-item">
            <a href="https://cosmedical.jp/clinic/menu/dermaroller/">ダーマローラー【毛孔性苔癬・成長因子導入】</a>
          </li>
          <li class="footer__menu-item">
            <a href="https://cosmedical.jp/clinic/menu/kansaibou/">浄化濃縮 幹細胞セクレトーム「PureHGFx30+Exo」</a>
          </li>
          <li class="footer__menu-item">
            <a href="https://cosmedical.jp/clinic/menu/pluryal-densifier/">肌育製剤　プルリアルデンシファイ
            </a>
          </li>
        </ul>

        <ul class="footer__menu-list js-grid-item">
          <li class="footer__menu-item">
            <a href="https://cosmedical.jp/clinic/menu/hyaluronic-top/">ヒアルロン酸注入</a>
          </li>
          <li class="footer__menu-item">
            <a href="https://cosmedical.jp/clinic/menu/hyaluronic/">シワ・たるみのヒアルロン酸注入治療</a>
          </li>
          <li class="footer__menu-item">
            <a href="https://cosmedical.jp/clinic/menu/rinkaku/">お顔のボリュームアップ・輪郭形成【丸いおでこ・おとがい（アゴ）形成】</a>
          </li>
          <li class="footer__menu-item">
            <a href="https://cosmedical.jp/clinic/menu/nose-detail/#nose02">鼻を高くする【ヒアルロン酸 隆鼻術】</a>
          </li>
          <li class="footer__menu-item">
            <a href="https://cosmedical.jp/clinic/menu/lip-plump/">唇をふっくらさせる【ヒアルロン酸注入】</a>
          </li>
          <li class="footer__menu-item">
            <a href="https://cosmedical.jp/clinic/menu/tearbag/">涙袋形成術</a>
          </li>
          <li class="footer__menu-item">
            <a href="https://cosmedical.jp/clinic/menu/profhilo/">肌再生 プロファイロ</a>
          </li>
          <li class="footer__menu-item">
            <a href="https://cosmedical.jp/clinic/menu/hydro/">肌再生 ハイドロインジェクション</a>
          </li>
          <li class="footer__menu-item">
            <a href="https://cosmedical.jp/clinic/menu/sunekos/">肌再生 スネコス</a>
          </li>
          <li class="footer__menu-item">
            <a href="https://cosmedical.jp/clinic/menu/pluryal-densifier/">肌育製剤　プルリアルデンシファイ</a>
          </li>
        </ul>

        <ul class="footer__menu-list js-grid-item">
          <li class="footer__menu-item">
            <a href="https://cosmedical.jp/clinic/menu/botox/">ボトックス注射</a>
          </li>
          <li class="footer__menu-item">
            <a href="https://cosmedical.jp/clinic/menu/face-expression/">お顔の表情ジワ改善</a>
          </li>
          <li class="footer__menu-item">
            <a href="https://cosmedical.jp/clinic/menu/botox-kogao/#kogao01">ボツリヌストキシン注射による小顔治療【エラボトックス】</a>
          </li>
          <li class="footer__menu-item">
            <a href="https://cosmedical.jp/clinic/menu/botox-kogao/#botox01">アゴ梅干し治療</a>
          </li>
          <li class="footer__menu-item">
            <a href="https://cosmedical.jp/clinic/menu/botox-kogao/#mouse02">笑顔のボトックス</a>
          </li>
          <li class="footer__menu-item">
            <a href="https://cosmedical.jp/clinic/menu/botox-kogao/#mouse01">ガミースマイル【ボトックス注射】</a>
          </li>
          <li class="footer__menu-item">
            <a href="https://cosmedical.jp/clinic/menu/botox-kogao/#botox03">美脚のボトックス</a>
          </li>
          <li class="footer__menu-item">
            <a href="https://cosmedical.jp/clinic/menu/botox-kogao/#botox04">肩こりボトックス</a>
          </li>
          <li class="footer__menu-item">
            <a href="https://cosmedical.jp/clinic/menu/botox-kogao/#botox05">ボトックスリフト</a>
          </li>
          <li class="footer__menu-item">
            <a href="https://cosmedical.jp/clinic/menu/botox-kogao/#botox06">マイクロボトックス</a>
          </li>
        </ul>
      </div>
    </div>

    <div class="footer__content">
      <p class="footer__content-title">その他の治療</p>

      <div class="footer__menu js-grid">
        <ul class="footer__menu-list js-grid-item">
          <li class="footer__menu-item">
            <a href="https://cosmedical.jp/clinic/menu/slimming/">痩身治療</a>
          </li>
          <li class="footer__menu-item">
            <a href="https://cosmedical.jp/clinic/menu/bnls/">BNLS脂肪溶解注射による小顔治療</a>
          </li>
          <li class="footer__menu-item">
            <a href="https://cosmedical.jp/clinic/menu/indiba-treatment/">インディバトリートメント</a>
          </li>
          <li class="footer__menu-item">
            <a href="https://cosmedical.jp/clinic/menu/botox-kogao/">ボツリヌストキシン注射による小顔治療【ボトックス】</a>
          </li>
          <li class="footer__menu-item">
            <a href="https://cosmedical.jp/clinic/menu/botox-kogao/#botox03">美脚ボトックス</a>
          </li>
        </ul>

        <ul class="footer__menu-list js-grid-item">
          <li class="footer__menu-item">
            <a href="https://cosmedical.jp/clinic/menu/medical-laser/">医療レーザー脱毛</a>
          </li>
          <li class="footer__menu-item">
            <a href="https://cosmedical.jp/clinic/menu/removal/">女性医療レーザー脱毛</a>
          </li>
          <li class="footer__menu-item">
            <a href="https://cosmedical.jp/clinic/menu/removal-mens/">男性医療レーザー脱毛</a>
          </li>
        </ul>

        <ul class="footer__menu-list js-grid-item">
          <li class="footer__menu-item">
            <a href="https://cosmedical.jp/clinic/menu/tattoo-removal/">傷痕・刺青・タトゥー除去</a>
          </li>
          <li class="footer__menu-item">
            <a href="https://cosmedical.jp/clinic/menu/remove-scars-tattoo/">傷痕修正・タトゥー切除</a>
          </li>
          <li class="footer__menu-item">
            <a href="https://cosmedical.jp/clinic/menu/removal-tattoo-laser/">レーザーによる刺青・タトゥー除去</a>
          </li>
        </ul>

        <ul class="footer__menu-list js-grid-item">
          <li class="footer__menu-item">
            <a href="https://cosmedical.jp/clinic/menu/medical-artmake/">医療アートメイク</a>
          </li>
          <li class="footer__menu-item">
            <a href="https://cosmedical.jp/clinic/menu/medical-artmake/">アートメイク</a>
          </li>
          <li class="footer__menu-item">
            <a href="https://cosmedical.jp/clinic/menu/removal-tattoo-laser/">レーザーによる刺青・タトゥー除去</a>
          </li>
        </ul>

        <ul class="footer__menu-list js-grid-item">
          <li class="footer__menu-item">
            <a href="https://cosmedical.jp/clinic/menu/hair/">毛髪再生</a>
          </li>
          <li class="footer__menu-item">
            <a href="https://cosmedical.jp/clinic/menu/glossfactor/">薄毛改善 毛髪再生治療【AGA・FAGA】</a>
          </li>
        </ul>

        <ul class="footer__menu-list js-grid-item">
          <li class="footer__menu-item">
            <a href="https://cosmedical.jp/clinic/menu/mens/">男性のお悩み治療</a>
          </li>
          <li class="footer__menu-item">
            <a href="https://cosmedical.jp/clinic/menu/glossfactor/#aga">薄毛改善 毛髪再生治療【AGA】</a>
          </li>
          <li class="footer__menu-item">
            <a href="https://cosmedical.jp/clinic/menu/ed/">ED治療</a>
          </li>
        </ul>

        <ul class="footer__menu-list js-grid-item">
          <li class="footer__menu-item">
            <a href="https://cosmedical.jp/clinic/menu/woman/">女性のお悩み治療</a>
          </li>
          <li class="footer__menu-item">
            <a href="https://cosmedical.jp/clinic/menu/glossfactor/#aga">薄毛改善 毛髪再生治療【FAGA】</a>
          </li>
          <li class="footer__menu-item">
            <a href="https://cosmedical.jp/clinic/menu/gynecology/">婦人科治療</a>
          </li>
          <li class="footer__menu-item">
            <a href="https://cosmedical.jp/clinic/menu/gynecology/#gynecology01">小陰唇縮小</a>
          </li>
          <li class="footer__menu-item">
            <a href="https://cosmedical.jp/clinic/menu/gynecology/#gynecology02">クリトリス包茎</a>
          </li>
          <li class="footer__menu-item">
            <a href="https://cosmedical.jp/clinic/menu/gynecology/#gynecology03">副皮切除</a>
          </li>
        </ul>

        <ul class="footer__menu-list js-grid-item">
          <li class="footer__menu-item">
            <a href="https://cosmedical.jp/clinic/menu/other-cosme/">コスメ・美肌・美容アイテム、その他の取り扱い商品</a>
          </li>
          <li class="footer__menu-item">
            <a href="https://cosmedical.jp/clinic/menu/cynthia-crystal/">シンシアオリジナル ドクターズコスメ クリスタルシリーズ</a>
          </li>
          <li class="footer__menu-item">
            <a href="https://cosmedical.jp/clinic/menu/cosme/">コスメ・化粧品</a>
          </li>
          <li class="footer__menu-item">
            <a href="https://cosmedical.jp/clinic/menu/supplement/">サプリメント</a>
          </li>
        </ul>
      </div>
    </div>
  </div>

  <div class="footer__contacts pc_n">
    <a href="tel:03-6281-4100" class="footer__tel footer__nav_text">
      TEL
    </a>

    <a href="https://page.line.me/wdy1996b" class="footer__line footer__nav_text" target="_blank" rel="noopener noreferrer">
      LINE
    </a>

    <a href="https://cosmedical.jp/clinic/contact/" class="footer__web footer__nav_text">
      WEB予約
    </a>
  </div>

  <!-- LINE選択オーバーレイ -->
  <div id="lineOverlay" class="line-overlay" aria-hidden="true">
    <style>
      .line-overlay {
        position: fixed;
        inset: 0;
        display: none;
        align-items: center;
        justify-content: center;
        background: rgba(0, 0, 0, .6);
        z-index: 9999;
      }

      .line-overlay.is-active {
        display: flex;
      }

      .line-overlay__panel {
        position: relative;
        width: 90%;
        max-width: 48rem;
        background: #fff;
        border-radius: 1.2rem;
        padding: 2.4rem;
        text-align: center;
        box-shadow: 0 1rem 3rem rgba(0, 0, 0, .2);
      }

      .line-overlay__title {
        font-weight: 700;
        font-size: 1.8rem;
        margin: 0 0 1.6rem;
      }

      .line-overlay__desc {
        font-size: 1.4rem;
        margin: 0 0 2rem;
        color: #555;
      }

      .line-overlay__actions {
        display: flex;
        flex-direction: column;
        gap: 1.2rem;
      }

      .line-overlay__btn {
        display: block;
        padding: 1.4rem 1.6rem;
        background: #06C755;
        color: #fff;
        text-decoration: none;
        border-radius: 0.8rem;
        font-weight: 700;
        font-size: 1.4rem;
      }

      .line-overlay__actions--tel .line-overlay__btn {
        background: #009FE6;
      }

      .line-overlay__btn:focus {
        outline: 0.2rem solid #0a9f46;
        outline-offset: 0.2rem;
      }

      .line-overlay__close {
        position: absolute;
        top: 1rem;
        right: 1rem;
        background: transparent;
        border: none;
        color: #999;
        font-size: 2.2rem;
        line-height: 1;
        cursor: pointer;
      }

      @media (min-width: 76.8rem) {
        .line-overlay__actions {
          flex-direction: row;
        }

        .line-overlay__btn {
          flex: 1;
        }
      }
    </style>
    <div class="line-overlay__panel" role="dialog" aria-modal="true" aria-labelledby="lineOverlayTitle">
      <button type="button" class="line-overlay__close" aria-label="閉じる">×</button>
      <p id="lineOverlayTitle" class="line-overlay__title">ご希望の院をお選びください</p>
      <p id="lineOverlayDesc" class="line-overlay__desc">LINE公式アカウントへ移動します</p>
      <div class="line-overlay__actions line-overlay__actions--line">
        <a href="https://page.line.me/wdy1996b" class="line-overlay__btn" target="_blank" rel="noopener noreferrer">銀座院のLINE</a>
        <a href="https://page.line.me/oiu9031z" class="line-overlay__btn" target="_blank" rel="noopener noreferrer">渋谷院のLINE</a>
      </div>
      <div class="line-overlay__actions line-overlay__actions--tel" style="display:none;">
        <a href="tel:03-6281-4100" class="line-overlay__btn">銀座院に電話</a>
        <a href="tel:03-6809-0029" class="line-overlay__btn">渋谷院に電話</a>
      </div>
    </div>
  </div>

  <script>
    (function() {
      var overlay = document.getElementById('lineOverlay');
      if (!overlay) return;
      var panel = overlay.querySelector('.line-overlay__panel');
      var closeBtn = overlay.querySelector('.line-overlay__close');
      var titleEl = overlay.querySelector('#lineOverlayTitle');
      var descEl = overlay.querySelector('#lineOverlayDesc');
      var actionsLine = overlay.querySelector('.line-overlay__actions--line');
      var actionsTel = overlay.querySelector('.line-overlay__actions--tel');

      function openOverlay() {
        overlay.classList.add('is-active');
        overlay.setAttribute('aria-hidden', 'false');
      }

      function closeOverlay() {
        overlay.classList.remove('is-active');
        overlay.setAttribute('aria-hidden', 'true');
      }

      function setMode(mode) {
        if (!titleEl || !descEl || !actionsLine || !actionsTel) return;
        if (mode === 'tel') {
          titleEl.textContent = 'お電話の院をお選びください';
          descEl.textContent = 'タップで発信します';
          actionsLine.style.display = 'none';
          actionsTel.style.display = 'flex';
        } else {
          titleEl.textContent = 'ご希望の院をお選びください';
          descEl.textContent = 'LINE公式アカウントへ移動します';
          actionsLine.style.display = 'flex';
          actionsTel.style.display = 'none';
        }
      }

      var lineTrigger = document.querySelector('.footer__contacts .footer__line');
      if (lineTrigger) {
        lineTrigger.addEventListener('click', function(e) {
          e.preventDefault();
          setMode('line');
          openOverlay();
        }, false);
      }

      var telTrigger = document.querySelector('.footer__contacts .footer__tel');
      if (telTrigger) {
        telTrigger.addEventListener('click', function(e) {
          e.preventDefault();
          setMode('tel');
          openOverlay();
        }, false);
      }

      if (closeBtn) closeBtn.addEventListener('click', closeOverlay, false);
      overlay.addEventListener('click', function(e) {
        if (!panel.contains(e.target)) closeOverlay();
      }, false);
      document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape') closeOverlay();
      }, false);
    })();
  </script>

  <div class="footer__privacy">
    <a
      href="<?php echo esc_url(home_url('/privacy-policy')); ?>"
      class="footer__privacy-link">プライバシーポリシー</a>
  </div>
  <p class="footer__copyright">
    Copyright © cosmedical clinic cynthia ALL Right Reserved.
  </p>
</footer>
</div>

<script
  defer
  src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.3/js/swiper.min.js"></script>

<script
  defer
  src="https://code.jquery.com/jquery-3.7.1.min.js"
  integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo="
  crossorigin="anonymous"></script>
<script defer src="js/main.js"></script>

<?php wp_footer(); ?>
</body>

</html>