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
              <h1 class="title">Monthly Campaign</h1>
              <p class="fv-low__titles--text">今月のおすすめメニュー</p>
            </div>
          </div>
        </div>

        <section class="campaigns">
          <div class="inner">
            <div class="campaigns__tabs" role="tablist" aria-label="今月のおすすめメニュー">
              <button class="campaigns__tab is-active" role="tab" aria-selected="true" aria-controls="panel-all" id="tab-all" data-target="panel-all">ALL</button>
              <button class="campaigns__tab" role="tab" aria-selected="false" aria-controls="panel-pickup" id="tab-pickup" data-target="panel-pickup">ピックアップ</button>
              <button class="campaigns__tab" role="tab" aria-selected="false" aria-controls="panel-monitor" id="tab-monitor" data-target="panel-monitor">モニター募集</button>
              <button class="campaigns__tab" role="tab" aria-selected="false" aria-controls="panel-ginza" id="tab-ginza" data-target="panel-ginza">銀座院</button>
              <button class="campaigns__tab" role="tab" aria-selected="false" aria-controls="panel-shibuya" id="tab-shibuya" data-target="panel-shibuya">渋谷院</button>
              <button class="campaigns__tab" role="tab" aria-selected="false" aria-controls="panel-both" id="tab-both" data-target="panel-both">両院共通</button>
            </div>

            <div class="campaigns__body">
              <div class="campaigns__panels">
                <div class="campaigns__panel is-active" id="panel-all" role="tabpanel" aria-labelledby="tab-all" >
                  <div class="campaigns-list">

<?php for ($i = 1; $i <= 18; $i++): ?>
                    <div class="campaigns-list__item">
                      <p class="campaigns-list__image">
                        <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/banner/<?php echo $i; ?>.png" alt="">
                      </p>
                      <div class="campaigns-list__info">
                        <!-- <p class="campaigns-list__date">2025.10.20</p> -->
                        <ul class="campaigns-list__category">
                          <li>両院共通</li>
                        </ul>
                        <p class="campaigns-list__title">キャンペーンのタイトルが入ります</p>
                        <p class="campaigns-list__text">施術詳細・料金が入ります。施術詳細・料金が入ります。施術詳細・料金が入ります。施術詳細・料金が入ります。施術詳細・料金が入ります。施術詳細・料金が入ります。施術詳細・料金が入ります。施術詳細・料金が入ります</p>
                        <div class="campaigns-list__treatment">
                          <!-- <p class="campaigns-list__treatment--title">施術詳細</p> -->
                          <!-- <ul class="campaigns-list__treatment--menu">
                            <li><a href="<?php echo esc_url( home_url('') ); ?>" class="btn">施術メニュー名</a></li>
                            <li><a href="<?php echo esc_url( home_url('') ); ?>" class="btn">施術メニュー名</a></li>
                            <li><a href="<?php echo esc_url( home_url('') ); ?>" class="btn">施術メニュー名</a></li>
                          </ul> -->
                        </div>
                      </div>
                    </div>
<?php endfor; ?>


                  </div>
                </div>


                <!-- モニター-->
                <div class="campaigns__panel" id="panel-pickup" role="tabpanel" aria-labelledby="tab-pickup" hidden >
                  <div class="campaigns-list">

                  </div>
                </div>

                <!-- モニター -->
                <div class="campaigns__panel" id="panel-monitor" role="tabpanel" aria-labelledby="tab-monitor" hidden >
                  <div class="campaigns-list">
                    <!-- <div class="campaigns-list__item">
                      <p class="campaigns-list__image"><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/campaign/campaign01.jpg" alt=""></p>
                      <div class="campaigns-list__info">
                        <p class="campaigns-list__date">2025.10.20</p>
                        <ul class="campaigns-list__category">
                          <li>銀座院限定</li>
                          <li>渋谷院限定</li>
                          <li>両院共通</li>
                          <li>モニター価格</li>
                        </ul>
                        <p class="campaigns-list__title">キャンペーンのタイトルが入ります</p>
                        <p class="campaigns-list__text">施術詳細・料金が入ります。施術詳細・料金が入ります。施術詳細・料金が入ります。施術詳細・料金が入ります。施術詳細・料金が入ります。施術詳細・料金が入ります。施術詳細・料金が入ります。施術詳細・料金が入ります</p>
                        <div class="campaigns-list__treatment">
                          <p class="campaigns-list__treatment--title">施術詳細</p>
                          <ul class="campaigns-list__treatment--menu">
                            <li><a href="<?php echo esc_url( home_url('') ); ?>" class="btn">施術メニュー名</a></li>
                            <li><a href="<?php echo esc_url( home_url('') ); ?>" class="btn">施術メニュー名</a></li>
                            <li><a href="<?php echo esc_url( home_url('') ); ?>" class="btn">施術メニュー名</a></li>
                          </ul>
                        </div>
                      </div>
                    </div>

                    -->
                  </div>
                </div>

                <div class="campaigns__panel" id="panel-ginza" role="tabpanel" aria-labelledby="tab-ginza" hidden >
                  <div class="campaigns-list">
                    <?php
                    $ginza_campaigns = [
                      1 => [
                        'title' => '銀座院キャンペーン1',
                        'text' => '銀座院限定キャンペーン1の詳細・料金が入ります。',
                      ],
                      2 => [
                        'title' => '銀座院キャンペーン2',
                        'text' => '銀座院限定キャンペーン2の詳細・料金が入ります。',
                      ],
                      3 => [
                        'title' => '銀座院キャンペーン3',
                        'text' => '銀座院限定キャンペーン3の詳細・料金が入ります。',
                      ],
                      4 => [
                        'title' => '銀座院キャンペーン4',
                        'text' => '銀座院限定キャンペーン4の詳細・料金が入ります。',
                      ],
                      5 => [
                        'title' => '銀座院キャンペーン5',
                        'text' => '銀座院限定キャンペーン5の詳細・料金が入ります。',
                      ],
                    ];
                    for ($i = 1; $i <= 5; $i++): ?>
                    <div class="campaigns-list__item">
                      <p class="campaigns-list__image"><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/ginza/<?php echo $i; ?>.png" alt=""></p>
                      <div class="campaigns-list__info">
                        <!-- <p class="campaigns-list__date">2025.10.20</p> -->
                        <ul class="campaigns-list__category">
                          <li>銀座院限定</li>
                        </ul>
                        <p class="campaigns-list__title"><?php echo esc_html($ginza_campaigns[$i]['title']); ?></p>
                        <p class="campaigns-list__text"><?php echo esc_html($ginza_campaigns[$i]['text']); ?></p>
                        <!-- <div class="campaigns-list__treatment">
                          <p class="campaigns-list__treatment--title">施術詳細</p>
                          <ul class="campaigns-list__treatment--menu">
                            <li><a href="<?php echo esc_url( home_url('') ); ?>" class="btn">施術メニュー名</a></li>
                            <li><a href="<?php echo esc_url( home_url('') ); ?>" class="btn">施術メニュー名</a></li>
                            <li><a href="<?php echo esc_url( home_url('') ); ?>" class="btn">施術メニュー名</a></li>
                          </ul>
                        </div> -->
                      </div>
                    </div>
                    <?php endfor; ?>

                  </div>
                </div>


                <!-- 渋谷 -->
                <div class="campaigns__panel" id="panel-shibuya" role="tabpanel" aria-labelledby="tab-shibuya" hidden >
                  <div class="campaigns-list">

                    <?php
                    // 画像ごとに違うテキストを配列で用意
                    $shibuya_campaigns = [
                      1 => [
                        'title' => '渋谷院キャンペーン1',
                        'text' => '渋谷院限定キャンペーン1の詳細・料金が入ります。',
                      ],
                      2 => [
                        'title' => '渋谷院キャンペーン2',
                        'text' => '渋谷院限定キャンペーン2の詳細・料金が入ります。',
                      ],
                      3 => [
                        'title' => '渋谷院キャンペーン3',
                        'text' => '渋谷院限定キャンペーン3の詳細・料金が入ります。',
                      ],
                      4 => [
                        'title' => '渋谷院キャンペーン4',
                        'text' => '渋谷院限定キャンペーン4の詳細・料金が入ります。',
                      ],
                      5 => [
                        'title' => '渋谷院キャンペーン5',
                        'text' => '渋谷院限定キャンペーン5の詳細・料金が入ります。',
                      ]
                    ];
                    for ($i = 1; $i <= 5; $i++): ?>
                    <div class="campaigns-list__item">
                      <?php if ($i >= 1 && $i <= 5): ?>
                      <p class="campaigns-list__image"><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/shibuya/<?php echo $i; ?>.png" alt=""></p>
                      <div class="campaigns-list__info">
                      <?php endif; ?>
                        <!-- <p class="campaigns-list__date">2025.10.20</p> -->
                        <ul class="campaigns-list__category">
                          <li>渋谷院限定</li>
                        </ul>
                        <p class="campaigns-list__title"><?php echo esc_html($shibuya_campaigns[$i]['title']); ?></p>
                        <p class="campaigns-list__text"><?php echo esc_html($shibuya_campaigns[$i]['text']); ?></p>
                        <!-- <div class="campaigns-list__treatment">
                          <p class="campaigns-list__treatment--title">施術詳細</p>
                          <ul class="campaigns-list__treatment--menu">
                            <li><a href="<?php echo esc_url( home_url('') ); ?>" class="btn">施術メニュー名</a></li>
                            <li><a href="<?php echo esc_url( home_url('') ); ?>" class="btn">施術メニュー名</a></li>
                            <li><a href="<?php echo esc_url( home_url('') ); ?>" class="btn">施術メニュー名</a></li>
                          </ul>
                        </div> -->
                      </div>
                    </div>
                    <?php endfor; ?>

                    
                  </div>
                </div>


                <!-- 両院共通 -->
                <div class="campaigns__panel" id="panel-both" role="tabpanel" aria-labelledby="tab-both" hidden >
                  <div class="campaigns-list">


                    <?php for ($i = 1; $i <= 18; $i++): ?>
                    <div class="campaigns-list__item">
                      <p class="campaigns-list__image">
                        <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/banner/<?php echo $i; ?>.png" alt="">
                      </p>
                      <div class="campaigns-list__info">
                        <!-- <p class="campaigns-list__date">2025.10.20</p> -->
                        <ul class="campaigns-list__category">
                          <li>両院共通</li>
                        </ul>
                        <p class="campaigns-list__title">キャンペーンのタイトルが入ります</p>
                        <p class="campaigns-list__text">施術詳細・料金が入ります。施術詳細・料金が入ります。施術詳細・料金が入ります。施術詳細・料金が入ります。施術詳細・料金が入ります。施術詳細・料金が入ります。施術詳細・料金が入ります。施術詳細・料金が入ります</p>
                        <div class="campaigns-list__treatment">
                          <!-- <p class="campaigns-list__treatment--title">施術詳細</p> -->
                          <!-- <ul class="campaigns-list__treatment--menu">
                            <li><a href="<?php echo esc_url( home_url('') ); ?>" class="btn">施術メニュー名</a></li>
                            <li><a href="<?php echo esc_url( home_url('') ); ?>" class="btn">施術メニュー名</a></li>
                            <li><a href="<?php echo esc_url( home_url('') ); ?>" class="btn">施術メニュー名</a></li>
                          </ul> -->
                        </div>
                      </div>
                    </div>
<?php endfor; ?>
                  </div>
                </div>

              </div>
            </div>
          </div>
        </section>

<?php get_footer(); ?> 