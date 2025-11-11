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
              <h1 class="title privacy-policy__title">Contact</h1>
              <p class="fv-low__titles--text privacy-policy__fv-low__titles--text">お問い合わせ<br class="pc_n">・ご予約</p>
            </div>
          </div>
        </div>

        <section class="contact-wrap">
          <div class="inner">
            <div class="contact-wrap__text">
              <p>お問い合わせは以下のフォームからお願いします。<br><br>
                このページはセキュリティによって送信データのプライバシーを保護しております。<br>
                メールでのお問い合わせやご予約はこちらからお気軽にお寄せください。<br>
                下記のフォームに必要事項をご記入の上、ご連絡をお願いいたします。<br>
                メール相談は費用はかかりませんので、どうぞご安心ください。<br>
                また、メールによる当日のご予約は、混雑の具合によりお受けできない場合もございますので、<br>
                恐れ入りますが下記までお電話にてご連絡ください。</p>
            </div>
            <div class="contact-wrap__tel">
              <h2 class="title">TEL</h2>
              <p class="contact__text">基本的に24時間以内のご返信を心がけております</p>
              <div class="contact__content">
                <div class="contact__clinic">
                  <p class="contact__clinic-name">銀座院</p>
                  <div class="contact__clinic-info">
                    <a class="contact__phone" href="tel:03-6281-4100">
                      <p class="contact__phone-number">
                        <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/top/Phone.png" alt="">
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
                  <p class="contact__clinic-name is-ginza">渋谷院</p>
                  <div class="contact__clinic-info">
                    <a class="contact__phone" href="tel:03-6809-0029">
                      <p class="contact__phone-number">
                        <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/top/Phone.png" alt="">
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
            <div class="contact-wrap__info">
              <div class="contact-wrap__info--item">
                <h3>未成年者のお客様へ</h3>
                <p>未成年の方が手術・治療を希望される際には、保護者の同意が必要となります。</p>
                <a class="contact__reservation" href="<?php bloginfo( 'stylesheet_directory' ); ?>/pdf/doui.pdf" target="_blank">
                  <p class="contact__reservation-title">
                    <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/top/Web.png" alt="">
                    同意書をダウロード
                  </p>
                </a>
              </div>
              <div class="contact-wrap__info--item">
                <h3>希望の施術内容がお決まりのお客様へ</h3>
                <p>受けてみたい施術、または受けたい施術がお決まりの方はその内容を下記フォームの「具体的なご相談内容をお聞かせください」の項目にご記入ください。<br>
                  （例：腹部全体の脂肪吸引、レーザートーニング頬5回コース）</p>
              </div>
              <div class="contact-wrap__info--item">
                <h3>脱毛の施術をご希望のお客様へ</h3>
                <a class="contact__reservation" href="https://cosmedical.jp/cynthia-shibuya/preparation/" target="_blank">
                  <p class="contact__reservation-title">
                    <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/top/Web.png" alt="">
                    WEB即時予約
                  </p>
                  <p class="contact__reservation-desc">
                    脱毛のご予約はこちら
                  </p>
                </a>
                <p>お電話、LINE、下記メールフォームからご予約の場合、料金が異なります。看護師ご指名の場合はお電話にてご予約ください。</p>
              </div>
            </div>
            <div class="contact-wrap__form">
              <h2 class="title">Form</h2>
              <div class="contact-form">
                <dl class="contact-form__item">
                  <dt>お問い合わせ先※</dt>
                  <dd>
                    <div class="label-list">
                      <label><input type="radio" name="your-contact" value="銀座院"><span>銀座院</span></label>
                      <label><input type="radio" name="your-contact" value="渋谷院"><span>渋谷院</span></label>
                    </div>
                  </dd>
                </dl>
                <dl class="contact-form__item">
                  <dt>お問い合わせ内容※</dt>
                  <dd>
                    <div class="label-list">
                      <label><input type="radio" name="your-content" value="施術のご予約"><span>施術のご予約</span></label>
                      <label><input type="radio" name="your-content" value="ご相談"><span>ご相談</span></label>
                    </div>
                  </dd>
                </dl>
                <dl class="contact-form__item">
                  <dt>施術予約をご希望の方は、<br>ご希望日時を<br>ご記入ください。※</dt>
                  <dd>
                    <div class="contact-hope">
                      <div class="contact-hope__item">
                        <p class="contact-hope__item--title">第1希望</p>
                        <div class="contact-date">
                          <div class="contact-date__item">
                            <select name="your-hope1-month">
                              <option value="1">1</option>
                              <option value="2">2</option>
                              <option value="3">3</option>
                              <option value="4">4</option>
                              <option value="5">5</option>
                              <option value="6">6</option>
                              <option value="7">7</option>
                              <option value="8">8</option>
                              <option value="9">9</option>
                              <option value="10">10</option>
                              <option value="11">11</option>
                              <option value="12">12</option>
                            </select>
                            <span>月</span>
                          </div>
                          <div class="contact-date__item">
                            <select name="your-hope1-day">
                              <option value="1">1</option>
                              <option value="2">2</option>
                              <option value="3">3</option>
                              <option value="4">4</option>
                              <option value="5">5</option>
                              <option value="6">6</option>
                              <option value="7">7</option>
                              <option value="8">8</option>
                              <option value="9">9</option>
                              <option value="10">10</option>
                              <option value="11">11</option>
                              <option value="12">12</option>
                              <option value="13">13</option>
                              <option value="14">14</option>
                              <option value="15">15</option>
                              <option value="16">16</option>
                              <option value="17">17</option>
                              <option value="18">18</option>
                              <option value="19">19</option>
                              <option value="20">20</option>
                              <option value="21">21</option>
                              <option value="22">22</option>
                              <option value="23">23</option>
                              <option value="24">24</option>
                              <option value="25">25</option>
                              <option value="26">26</option>
                              <option value="27">27</option>
                              <option value="28">28</option>
                              <option value="29">29</option>
                              <option value="30">30</option>
                              <option value="31">31</option>
                            </select>
                            <span>日</span>
                          </div>
                          <div class="contact-date__item">
                            <select name="your-hope1-time" class="is-large">
                              <option value="10:00">10:00</option>
                              <option value="11:00">11:00</option>
                              <option value="12:00">12:00</option>
                              <option value="13:00">13:00</option>
                              <option value="14:00">14:00</option>
                              <option value="15:00">15:00</option>
                              <option value="16:00">16:00</option>
                              <option value="17:00">17:00</option>
                              <option value="18:00">18:00</option>
                              <option value="19:00">19:00</option>
                              <option value="20:00">20:00</option>
                            </select>
                            <span>頃</span>
                          </div>
                        </div>
                      </div>
                      <div class="contact-hope__item">
                        <p class="contact-hope__item--title">第2希望</p>
                        <div class="contact-date">
                          <div class="contact-date__item">
                            <select name="your-hope2-month">
                              <option value="1">1</option>
                              <option value="2">2</option>
                              <option value="3">3</option>
                              <option value="4">4</option>
                              <option value="5">5</option>
                              <option value="6">6</option>
                              <option value="7">7</option>
                              <option value="8">8</option>
                              <option value="9">9</option>
                              <option value="10">10</option>
                              <option value="11">11</option>
                              <option value="12">12</option>
                            </select>
                            <span>月</span>
                          </div>
                          <div class="contact-date__item">
                            <select name="your-hope2-day">
                              <option value="1">1</option>
                              <option value="2">2</option>
                              <option value="3">3</option>
                              <option value="4">4</option>
                              <option value="5">5</option>
                              <option value="6">6</option>
                              <option value="7">7</option>
                              <option value="8">8</option>
                              <option value="9">9</option>
                              <option value="10">10</option>
                              <option value="11">11</option>
                              <option value="12">12</option>
                              <option value="13">13</option>
                              <option value="14">14</option>
                              <option value="15">15</option>
                              <option value="16">16</option>
                              <option value="17">17</option>
                              <option value="18">18</option>
                              <option value="19">19</option>
                              <option value="20">20</option>
                              <option value="21">21</option>
                              <option value="22">22</option>
                              <option value="23">23</option>
                              <option value="24">24</option>
                              <option value="25">25</option>
                              <option value="26">26</option>
                              <option value="27">27</option>
                              <option value="28">28</option>
                              <option value="29">29</option>
                              <option value="30">30</option>
                              <option value="31">31</option>
                            </select>
                            <span>日</span>
                          </div>
                          <div class="contact-date__item">
                            <select name="your-hope2-time" class="is-large">
                              <option value="10:00">10:00</option>
                              <option value="11:00">11:00</option>
                              <option value="12:00">12:00</option>
                              <option value="13:00">13:00</option>
                              <option value="14:00">14:00</option>
                              <option value="15:00">15:00</option>
                              <option value="16:00">16:00</option>
                              <option value="17:00">17:00</option>
                              <option value="18:00">18:00</option>
                              <option value="19:00">19:00</option>
                              <option value="20:00">20:00</option>
                            </select>
                            <span>頃</span>
                          </div>
                        </div>
                      </div>
                      <div class="contact-hope__item">
                        <p class="contact-hope__item--title">第3希望</p>
                        <div class="contact-date">
                          <div class="contact-date__item">
                            <select name="your-hope3-month">
                              <option value="1">1</option>
                              <option value="2">2</option>
                              <option value="3">3</option>
                              <option value="4">4</option>
                              <option value="5">5</option>
                              <option value="6">6</option>
                              <option value="7">7</option>
                              <option value="8">8</option>
                              <option value="9">9</option>
                              <option value="10">10</option>
                              <option value="11">11</option>
                              <option value="12">12</option>
                            </select>
                            <span>月</span>
                          </div>
                          <div class="contact-date__item">
                            <select name="your-hope3-day">
                              <option value="1">1</option>
                              <option value="2">2</option>
                              <option value="3">3</option>
                              <option value="4">4</option>
                              <option value="5">5</option>
                              <option value="6">6</option>
                              <option value="7">7</option>
                              <option value="8">8</option>
                              <option value="9">9</option>
                              <option value="10">10</option>
                              <option value="11">11</option>
                              <option value="12">12</option>
                              <option value="13">13</option>
                              <option value="14">14</option>
                              <option value="15">15</option>
                              <option value="16">16</option>
                              <option value="17">17</option>
                              <option value="18">18</option>
                              <option value="19">19</option>
                              <option value="20">20</option>
                              <option value="21">21</option>
                              <option value="22">22</option>
                              <option value="23">23</option>
                              <option value="24">24</option>
                              <option value="25">25</option>
                              <option value="26">26</option>
                              <option value="27">27</option>
                              <option value="28">28</option>
                              <option value="29">29</option>
                              <option value="30">30</option>
                              <option value="31">31</option>
                            </select>
                            <span>日</span>
                          </div>
                          <div class="contact-date__item">
                            <select name="your-hope3-time" class="is-large">
                              <option value="10:00">10:00</option>
                              <option value="11:00">11:00</option>
                              <option value="12:00">12:00</option>
                              <option value="13:00">13:00</option>
                              <option value="14:00">14:00</option>
                              <option value="15:00">15:00</option>
                              <option value="16:00">16:00</option>
                              <option value="17:00">17:00</option>
                              <option value="18:00">18:00</option>
                              <option value="19:00">19:00</option>
                              <option value="20:00">20:00</option>
                            </select>
                            <span>頃</span>
                          </div>
                        </div>
                      </div>
                      <div class="contact-hope__item">
                        <p class="contact-hope__item--text">ご希望日は、明後日（2日後）以降の日付よりご希望の日をご指定ください。<br>
                          当日、または明日のご予約をご希望の方は、お手数ですが<br>
                          03-6281-4100（午前10:00～午後8:00）までお電話にてご連絡ください</p>
                      </div>
                    </div>
                  </dd>
                </dl>
                <dl class="contact-form__item">
                  <dt>お名前※</dt>
                  <dd><input type="text" name="your-name" value="" placeholder="お名前を入力してください"></dd>
                </dl>
                <dl class="contact-form__item">
                  <dt>フリガナ</dt>
                  <dd><input type="text" name="your-kana" value="" placeholder="フリガナを入力してください"></dd>
                </dl>
                <dl class="contact-form__item">
                  <dt>メールアドレス※</dt>
                  <dd><input type="email" name="your-email" value="" placeholder="メールアドレスを入力してください"></dd>
                </dl>
                <dl class="contact-form__item">
                  <dt>メールアドレス<br><span>（確認用）※</span></dt>
                  <dd><input type="email" name="your-email-confirm" value="" placeholder="メールアドレスを入力してください"></dd>
                </dl>
                <dl class="contact-form__item">
                  <dt>お住まい<br><span>（都道府県）※</span></dt>
                  <dd>
                    <select name="your-pref" class="is-pref">
                      <option value="">選択</option>
                      <option value="北海道">北海道</option>
                      <option value="青森県">青森県</option>
                      <option value="岩手県">岩手県</option>
                      <option value="宮城県">宮城県</option>
                      <option value="秋田県">秋田県</option>
                      <option value="山形県">山形県</option>
                      <option value="福島県">福島県</option>
                      <option value="茨城県">茨城県</option>
                      <option value="栃木県">栃木県</option>
                      <option value="群馬県">群馬県</option>
                      <option value="埼玉県">埼玉県</option>
                      <option value="千葉県">千葉県</option>
                      <option value="東京都">東京都</option>
                      <option value="神奈川県">神奈川県</option>
                      <option value="新潟県">新潟県</option>
                      <option value="富山県">富山県</option>
                      <option value="石川県">石川県</option>
                      <option value="福井県">福井県</option>
                      <option value="山梨県">山梨県</option>
                      <option value="長野県">長野県</option>
                      <option value="岐阜県">岐阜県</option>
                      <option value="静岡県">静岡県</option>
                      <option value="愛知県">愛知県</option>
                      <option value="三重県">三重県</option>
                      <option value="滋賀県">滋賀県</option>
                      <option value="京都府">京都府</option>
                      <option value="大阪府">大阪府</option>
                      <option value="兵庫県">兵庫県</option>
                      <option value="奈良県">奈良県</option>
                      <option value="和歌山県">和歌山県</option>
                      <option value="鳥取県">鳥取県</option>
                      <option value="島根県">島根県</option>
                      <option value="岡山県">岡山県</option>
                      <option value="広島県">広島県</option>
                      <option value="山口県">山口県</option>
                      <option value="徳島県">徳島県</option>
                      <option value="香川県">香川県</option>
                      <option value="愛媛県">愛媛県</option>
                      <option value="高知県">高知県</option>
                      <option value="福岡県">福岡県</option>
                      <option value="佐賀県">佐賀県</option>
                      <option value="長崎県">長崎県</option>
                      <option value="熊本県">熊本県</option>
                      <option value="大分県">大分県</option>
                      <option value="宮崎県">宮崎県</option>
                      <option value="鹿児島県">鹿児島県</option>
                      <option value="沖縄県">沖縄県</option>
                    </select>
                  </dd>
                </dl>
                <dl class="contact-form__item">
                  <dt>電話番号※</dt>
                  <dd><input type="tel" name="your-tel" value="" placeholder="（例）0120123456789"></dd>
                </dl>
                <dl class="contact-form__item">
                  <dt>生年月日※</dt>
                  <dd>
                    <div class="contact-date">
                      <div class="contact-date__item">
                        <select name="your-birthday-year" class="is-large">
                          <option value="2000">2000</option>
                        </select>
                        <span>年</span>
                      </div>
                      <div class="contact-date__item">
                        <select name="your-birthday-month">
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="4">4</option>
                          <option value="5">5</option>
                          <option value="6">6</option>
                          <option value="7">7</option>
                          <option value="8">8</option>
                          <option value="9">9</option>
                          <option value="10">10</option>
                          <option value="11">11</option>
                          <option value="12">12</option>
                        </select>
                        <span>月</span>
                      </div>
                      <div class="contact-date__item">
                        <select name="your-birthday-day">
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="4">4</option>
                          <option value="5">5</option>
                          <option value="6">6</option>
                          <option value="7">7</option>
                          <option value="8">8</option>
                          <option value="9">9</option>
                          <option value="10">10</option>
                          <option value="11">11</option>
                          <option value="12">12</option>
                          <option value="13">13</option>
                          <option value="14">14</option>
                          <option value="15">15</option>
                          <option value="16">16</option>
                          <option value="17">17</option>
                          <option value="18">18</option>
                          <option value="19">19</option>
                          <option value="20">20</option>
                          <option value="21">21</option>
                          <option value="22">22</option>
                          <option value="23">23</option>
                          <option value="24">24</option>
                          <option value="25">25</option>
                          <option value="26">26</option>
                          <option value="27">27</option>
                          <option value="28">28</option>
                          <option value="29">29</option>
                          <option value="30">30</option>
                          <option value="31">31</option>
                        </select>
                        <span>日</span>
                      </div>
                    </div>
                  </dd>
                </dl>
                <dl class="contact-form__item">
                  <dt>性別※</dt>
                  <dd>
                    <div class="label-list">
                      <label><input type="radio" name="your-gender" value="女性"><span>女性</span></label>
                      <label><input type="radio" name="your-gender" value="男性"><span>男性</span></label>
                      <label><input type="radio" name="your-gender" value="無回答"><span>無回答</span></label>
                    </div>
                  </dd>
                </dl>
                <dl class="contact-form__item">
                  <dt>ご希望の担当医※<br><small>（又吉総院長は銀座院です。ご了承ください。）</small></dt>
                  <dd>
                    <div class="label-list is-vertical">
                      <label><input type="radio" name="your-doctor" value="又吉総院長"><span>又吉総院長</span></label>
                      <label><input type="radio" name="your-doctor" value="村住院長"><span>村住院長</span></label>
                      <label><input type="radio" name="your-doctor" value="野口医師"><span>野口医師</span></label>
                      <label><input type="radio" name="your-doctor" value="村松医師"><span>村松医師</span></label>
                      <label><input type="radio" name="your-doctor" value="梁医師"><span>梁医師</span></label>
                      <label><input type="radio" name="your-doctor" value="吉武医師"><span>吉武医師</span></label>
                      <label><input type="radio" name="your-doctor" value="希望しない"><span>希望しない</span></label>
                    </div>
                  </dd>
                </dl>
                <dl class="contact-form__item">
                  <dt>ご相談内容（複数選択可）</dt>
                  <dd>
                    <div class="label-list is-vertical">
                      <label><input type="checkbox" name="your-consultation[]" value="脱毛"><span>脱毛</span></label>
                      <label><input type="checkbox" name="your-consultation[]" value="美肌・シミ取り・若返り"><span>美肌・シミ取り・若返り</span></label>
                      <label><input type="checkbox" name="your-consultation[]" value="二重・目元"><span>二重・目元</span></label>
                      <label><input type="checkbox" name="your-consultation[]" value="鼻・口元"><span>鼻・口元</span></label>
                      <label><input type="checkbox" name="your-consultation[]" value="わきが・多汗症"><span>わきが・多汗症</span></label>
                      <label><input type="checkbox" name="your-consultation[]" value="豊胸手術・バスト"><span>豊胸手術・バスト</span></label>
                      <label><input type="checkbox" name="your-consultation[]" value="シワ・たるみ"><span>シワ・たるみ</span></label>
                      <label><input type="checkbox" name="your-consultation[]" value="痩身"><span>痩身</span></label>
                      <label><input type="checkbox" name="your-consultation[]" value="ニキビ"><span>ニキビ</span></label>
                      <label><input type="checkbox" name="your-consultation[]" value="脂肪吸引"><span>脂肪吸引</span></label>
                      <label><input type="checkbox" name="your-consultation[]" value="輪郭・小顔"><span>輪郭・小顔</span></label>
                      <label><input type="checkbox" name="your-consultation[]" value="婦人科"><span>婦人科</span></label>
                      <label><input type="checkbox" name="your-consultation[]" value="傷跡修正"><span>傷跡修正</span></label>
                      <label><input type="checkbox" name="your-consultation[]" value="男性泌尿器相談"><span>男性泌尿器相談</span></label>
                      <label><input type="checkbox" name="your-consultation[]" value="ED・AGA"><span>ED・AGA</span></label>
                      <label><input type="checkbox" name="your-consultation[]" value="薄毛・発毛相談"><span>薄毛・発毛相談</span></label>
                      <label><input type="checkbox" name="your-consultation[]" value="その他"><span>その他</span></label>
                    </div>
                  </dd>
                </dl>
                <dl class="contact-form__item">
                  <dt>具体的なご相談内容を<br>お聞かせください。</dt>
                  <dd><textarea name="" placeholder="（例）レーザートーニング頬5回コース、連絡は17:00以降可能"></textarea></dd>
                </dl>
                <dl class="contact-form__item">
                  <dt>今まで当院にご来院された<br>ことはございますか？※</dt>
                  <dd>
                    <div class="label-list">
                      <label><input type="radio" name="your-visited-before" value="はい"><span>はい</span></label>
                      <label><input type="radio" name="your-visited-before" value="いいえ"><span>いいえ</span></label>
                    </div>
                  </dd>
                </dl>
                <dl class="contact-form__item">
                  <dt>上記が「はい」の方は<br>診察券番号をご記入ください。</dt>
                  <dd>
                    診察券番号
                    <input type="text" name="your-patient-card-number" value="" placeholder="">
                  </dd>
                </dl>
                <dl class="contact-form__item">
                  <dt>上記で「はい」と<br>答えられた方は具体的な<br>施術歴をご記入ください。</dt>
                  <dd><textarea name="your-treatment-history" placeholder="（例）2025年▲月●日、〇〇美容クリニックでシミレーザー治療"></textarea></dd>
                </dl>
                <dl class="contact-form__item">
                  <dt>ご来院当日の治療を<br>ご希望されますか？</dt>
                  <dd>
                    <div class="label-list">
                      <label><input type="radio" name="your-treatment" value="希望する"><span>希望する</span></label>
                      <label><input type="radio" name="your-treatment" value="しない"><span>しない</span></label>
                    </div>
                  </dd>
                </dl>
                <p class="contact-form__button"><button type="submit" class="btn">send</button></p>
              </div>
            </div>
          </div>
        </section>

        <section class="attention-wrap">
          <div class="inner">
            <h2 class="title">Attention</h2>
            <div class="attention-list">
              <div class="attention-list__item">
                <p class="attention-notes">当院からのご連絡はメールにて行っております。<br>パソコン・携帯でのドメイン設定で迷惑メール設定などをされておりますと、当院メールアドレスからのメールを受信できないことがございます。</p>
                <p>必ずお問い合わせ前に、ドメイン設定の解除、もしくは受信設定等を行い、受信可能な状態にしていただけますようお願いいたします。<br>
                  各設定等の詳細はご利用プロバイダ、携帯会社、携帯機器メーカーにてお問い合わせください。<br>
                  2、3日お待ちいただいても当院からの連絡がない場合は、お手数ではございますが、一度お電話にてご連絡をいただけますようお願い申し上げます。</p>
              </div>
              <div class="attention-list__item">
                <p>当院では、施術の安全性や意思疎通の観点から、日本語を理解していない方のご来院はお断りしております。通訳の方が同伴であっても、お互いの想いが伝わりにくく誤解が生じやすくなるため、国籍にかかわらずお断りしております。<br>
                  何卒、ご理解くださいますようお願い申し上げます。</p>
              </div>
            </div>
          </div>
        </section>


<?php get_footer(); ?> 