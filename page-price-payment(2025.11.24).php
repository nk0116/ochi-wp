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
              <h1 class="title">Payment Methods</h1>
              <p class="fv-low__titles--text payment__fv-low__titles--text">お支払い方法について</p>
            </div>
          </div>
        </div>

        <section class="payment">
          <div class="payment__inner">
            <div class="payment__top">
              <div class="payment__content__inner">
                <div class="payment__item">
                  <p class="payment__item__title">現金でのお支払い</p>
                  <p class="payment__item__text mt20">現金でのお支払いの場合は一括でのお支払いになります。</p>
                </div>
                <div class="payment__item">
                  <p class="payment__item__title">クレジットカードでのお支払い</p>
                  <p class="payment__item__text mt20">
                    クレジットカードの場合はご本人様名義カードのみお支払いとなります。<br>
                    御家族様名義のカードは名義人様同伴であればご利用いただけます。
                  </p>
                  <div class="payment__item__img mt20">
                    <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/payment/credit-card-list.png" alt="" width="600" height="62">
                  </div>
                </div>
                <div class="payment__item">
                  <p class="payment__item__title">医療ローンでのお支払い（アプラス・フレックス）</p>
                  <p class="payment__item__text mt20">
                    医療ローンご希望の場合、ローン会社による事前審査がございます。<br>
                    お支払い回数は3回から60回まで選べます。
                  </p>
                  <p class="payment__item__text mt20">
                    ※ご利用になる信販会社によって、手数料率が変わります。
                  </p>
                </div>
              </div>
            </div>

            <div class="payment__middle">
              <div class="payment__middle__inner">
                <div class="payment__middle__required">
                  <p class="payment__middle__text--title">◆以下2点を必ずご提出ください。</p>
                  <div class="payment__middle__text--check mt30">
                    <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/payment/icon-check.png" alt="" width="24" height="24">
                    <p class="payment__middle__text">免許証か保険証</p>
                  </div>
                  <p class="payment__middle__text--min mt10">※住所変更後の更新ができてない場合は上記身分証+公共料金の表紙（新住所に送付されているもの）</p>
                  <div class="payment__middle__text--check mt16">
                    <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/payment/icon-check.png" alt="" width="24" height="24">
                    <p class="payment__middle__text">金融機関のお届け印</p>
                  </div>
                  <div class="payment__middle__text--check mt16">
                    <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/payment/icon-check.png" alt="" width="24" height="24">
                    <p class="payment__middle__text">口座番号のわかる通帳、もしくはキャッシュカード</p>
                  </div>
                  <p class="payment__middle__text--min mt10">※ローン申込み時には勤務先の住所・電話番号もご記入いただきます。</p>
                </div>
                <p class="payment__middle__text mt30">
                  ◆20歳以上の方（学生可）でもお仕事やアルバイト・パートをされている方でしたら利用可能になります。<br>
                  又、保証人が必要な場合もあります。
                </p>
                <p class="payment__middle__text mt30">
                  ◆専業主婦の方は、ご主人様を参考人としていただきますが、ご主人様には連絡はいきません。<br>
                  但し、仕事先の名称・年収等ご記入は必要です。
                </p>
                <p class="payment__middle__text mt30">
                  ◆保証人が必要な方は、保証人に直接用紙に記入していただく必要があります。<br>
                  （保証人はお仕事されている方に限ります）<br>
                  更に、保証人の方の免許証か保険証どちらかの写しと、保証人の印鑑を必ずご持参していただきます。
                </p>
                <p class="payment__middle__text--red mt30">
                  電子マネー（交通系ICカードを含む）、QRコード決済（PayPay など）は対応しておりません。
                </p>
              </div>
            </div>

            <div class="payment__bottom">
              <div class="payment__bottom__inner">
                <p class="payment__item__title">よくある質問</p>
                <div class="payment__bottom__qa">

                  <details class="js-details" open>
                    <summary class="payment__bottom__summary js-details-summary is-active">
                      <div class="payment__bottom__summary--q">
                        <p class="payment__bottom__summary__q">Q</p>
                        <p class="payment__bottom__summary__q--text">当日そのままローンで治療できますか？</p>
                      </div>
                      <p class="payment__bottom__summary--icon"></p>
                    </summary>
                    <div class="payment__bottom__summary--a js-details-content">
                      <p class="payment__bottom__summary__a">A</p>
                      <p class="payment__bottom__summary__a--text">
                        当日のローンで治療は、審査がございますので対応しておりません。<br>
                        ローン審査ご希望の方は、治療を受ける約3週間前に一度ご来院いただきますようお願いいたします。<br>
                        詳しくは、お気軽にお問い合わせください。
                      </p>
                    </div>
                  </details>

                  <details class="js-details">
                    <summary class="payment__bottom__summary js-details-summary">
                      <div class="payment__bottom__summary--q">
                        <p class="payment__bottom__summary__q">Q</p>
                        <p class="payment__bottom__summary__q--text">持ち物はなにが必要ですか？</p>
                      </div>
                      <p class="payment__bottom__summary--icon"></p>
                    </summary>
                    <div class="payment__bottom__summary--a js-details-content">
                      <p class="payment__bottom__summary__a">A</p>
                      <p class="payment__bottom__summary__a--text">
                        身分証明書・銀行印・口座がわかるカード又は通帳をご持参ください。
                      </p>
                    </div>
                  </details>

                  <details class="js-details">
                    <summary class="payment__bottom__summary js-details-summary">
                      <div class="payment__bottom__summary--q">
                        <p class="payment__bottom__summary__q">Q</p>
                        <p class="payment__bottom__summary__q--text">未成年でもローンできますか？</p>
                      </div>
                      <p class="payment__bottom__summary--icon"></p>
                    </summary>
                    <div class="payment__bottom__summary--a js-details-content">
                      <p class="payment__bottom__summary__a">A</p>
                      <p class="payment__bottom__summary__a--text">
                        未成年でも18歳以上ですと（高校生は対象外）お仕事・アルバイトされてる方で保証人が必要です。<br>
                        18歳未満の方は、ご両親の名義でご利用可能です。
                      </p>
                    </div>
                  </details>

                  <details class="js-details">
                    <summary class="payment__bottom__summary js-details-summary">
                      <div class="payment__bottom__summary--q">
                        <p class="payment__bottom__summary__q">Q</p>
                        <p class="payment__bottom__summary__q--text">5万円くらいでもローンはできますか？</p>
                      </div>
                      <p class="payment__bottom__summary--icon"></p>
                    </summary>
                    <div class="payment__bottom__summary--a js-details-content">
                      <p class="payment__bottom__summary__a">A</p>
                      <p class="payment__bottom__summary__a--text">
                        基本的には、10万円～のお支払でご利用できます。それ以下のお支払いは、ご相談ください。
                      </p>
                    </div>
                  </details>

                  <details class="js-details">
                    <summary class="payment__bottom__summary js-details-summary">
                      <div class="payment__bottom__summary--q">
                        <p class="payment__bottom__summary__q">Q</p>
                        <p class="payment__bottom__summary__q--text">分割払いにした場合の料金支払いの目安を教えてください。</p>
                      </div>
                      <p class="payment__bottom__summary--icon"></p>
                    </summary>
                    <div class="payment__bottom__summary--a js-details-content">
                      <p class="payment__bottom__summary__a">A</p>
                      <div class="payment__bottom__summary__a--text">
                        10万円、30万円の施術を行った場合をご参考にご紹介いたします。<br>
                        <p class="mt25"></p>
                        【10万円の施術の場合】<br>
                        ・12回分割払いのケース<br>
                        分割手数料 6,899円 <br class="hidden">総額 106,899円<br>
                        [1回目支払] 8,999円 <br class="hidden">[2回目以降] 8,900円×11回<br>
                        <p class="mt25"></p>
                        【30万円の施術の場合】<br>
                        ・12回分割払いのケース<br>
                        分割手数料 20,698円 <br class="hidden">総額 320,698円<br>
                        [1回目支払] 26,998円 <br class="hidden">[2回目以降] 26,700円×11回<br>
                        <p class="mt25"></p>
                        になります。<br class="hidden">詳しくは、お気軽にお問い合わせください。
                      </div>
                    </div>
                  </details>

                </div>
              </div>
            </div>
          </div>
        </section>

     
<?php get_footer(); ?> 