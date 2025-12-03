<?php get_header(); ?>

<main>
  <div class="fv-low">
    <div class="fv-low__inner">
      <div class="fv-low__titles">
        <h1 class="title">BLOG</h1>
        <p class="fv-low__titles--text">銀座院　ブログ一覧</p>
      </div>
    </div>
  </div>

  <section class="blog-list">
    <div class="blog-list__inner">
      <div class="blog-list__body">
        <div class="blog-list__content">
          <?php
          // カテゴリフィルタリングの設定
          $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
          $args = array(
            'post_type' => 'ginza-blog',
            'posts_per_page' => 9, // 3×3のグリッド用に9件
            'paged' => $paged,
            'orderby' => 'date',
            'order' => 'DESC',
          );

          // カテゴリで絞り込む場合（カテゴリアーカイブページまたはクエリパラメータの場合）
          if (is_category()) {
            $current_category = get_queried_object();
            $args['cat'] = $current_category->term_id;
          } elseif (isset($_GET['cat']) && !empty($_GET['cat'])) {
            $args['cat'] = intval($_GET['cat']);
          }
          
          $blog_query = new WP_Query($args);
          
          if ($blog_query->have_posts()) :
            while ($blog_query->have_posts()) : $blog_query->the_post();
          ?>
          <div class="blog-list__item">
            <a href="<?php the_permalink(); ?>" class="blog-list__card">
              <div class="blog-list__image">
                <?php if (has_post_thumbnail()) : ?>
                  <?php the_post_thumbnail('full', array('alt' => get_the_title())); ?>
                <?php else : ?>
                  <img src="<?php echo get_template_directory_uri(); ?>/img/top/no-image.jpeg" alt="<?php echo esc_attr(get_the_title()); ?>" />
                <?php endif; ?>
              </div>
              <div class="blog-list__meta">
                <?php
                $categories = get_the_category();
                if ($categories && !is_wp_error($categories)) {
                  $category = $categories[0];
                  if ($category->name !== 'Uncategorized' && $category->name !== '未分類') :
                ?>
                  <p class="blog-list__category"><?php echo esc_html($category->name); ?></p>
                <?php
                  endif;
                }
                ?>
                <p class="blog-list__date"><?php echo get_the_date('Y/m/d'); ?></p>
              </div>
              <h3 class="blog-list__title"><?php the_title(); ?></h3>
              <p class="blog-list__text">
                <?php echo wp_trim_words(get_the_excerpt(), 30); ?>
              </p>
            </a>
          </div>
          <?php
            endwhile;
          else :
          ?>
          <p>投稿がありません。</p>
          <?php
          endif;
          wp_reset_postdata();
          ?>
        </div>
        
        <?php
        // ページネーション（複数ページがある場合のみ表示）
        if (isset($blog_query) && $blog_query->max_num_pages > 1) :
          // ベースURLの設定
          if (is_category()) {
            $current_category = get_queried_object();
            $base_url = get_category_link($current_category->term_id);
            $base_url = add_query_arg('post_type', 'ginza-blog', $base_url);
          } else {
            $base_url = get_post_type_archive_link('ginza-blog');
            if (isset($_GET['cat']) && !empty($_GET['cat'])) {
              $base_url = add_query_arg('cat', intval($_GET['cat']), $base_url);
            }
          }
          
          // ページネーションリンクの生成
          $current_page = max(1, $paged);
          $total_pages = $blog_query->max_num_pages;
        ?>
        <div class="wp-pagenavi">
          <?php
          // 前のページへのリンク
          if ($current_page > 1) {
            $prev_url = ($current_page == 2) ? remove_query_arg('paged', $base_url) : add_query_arg('paged', $current_page - 1, $base_url);
            echo '<a class="previouspostslink" rel="prev" href="' . esc_url($prev_url) . '">«</a>';
          }
          
          // ページ番号の表示
          $start_page = max(1, $current_page - 1);
          $end_page = min($total_pages, $current_page + 1);
          
          // 最初のページ
          if ($start_page > 1) {
            $first_url = ($start_page == 1) ? remove_query_arg('paged', $base_url) : add_query_arg('paged', 1, $base_url);
            echo '<a class="page larger" href="' . esc_url($first_url) . '">1</a>';
            if ($start_page > 2) {
              echo '<span class="extend">…</span>';
            }
          }
          
          // 現在のページ周辺
          for ($i = $start_page; $i <= $end_page; $i++) {
            if ($i == $current_page) {
              echo '<span class="current">' . $i . '</span>';
            } else {
              $page_url = ($i == 1) ? remove_query_arg('paged', $base_url) : add_query_arg('paged', $i, $base_url);
              echo '<a class="page larger" href="' . esc_url($page_url) . '">' . $i . '</a>';
            }
          }
          
          // 最後のページ
          if ($end_page < $total_pages) {
            if ($end_page < $total_pages - 1) {
              echo '<span class="extend">…</span>';
            }
            $last_url = add_query_arg('paged', $total_pages, $base_url);
            echo '<a class="page larger" href="' . esc_url($last_url) . '">' . $total_pages . '</a>';
          }
          
          // 次のページへのリンク
          if ($current_page < $total_pages) {
            $next_url = add_query_arg('paged', $current_page + 1, $base_url);
            echo '<a class="nextpostslink" rel="next" href="' . esc_url($next_url) . '">»</a>';
          }
          ?>
        </div>
        <?php
        endif;
        ?>
      </div>
      <div class="blog-list__side">
        <h2>人気のブログ</h2>
        <div class="blog-list__popular">
          <?php
          // 人気ブログを取得（閲覧数順、同じ場合は投稿日順）
          $popular_args = array(
            'post_type' => 'ginza-blog',
            'posts_per_page' => 3,
            'meta_key' => 'post_views_count',
            'orderby' => array(
              'meta_value_num' => 'DESC',
              'date' => 'DESC'
            ),
          );
          $popular_query = new WP_Query($popular_args);
          
          if ($popular_query->have_posts()) :
            while ($popular_query->have_posts()) : $popular_query->the_post();
          ?>
          <div class="blog-list__item">
            <a href="<?php the_permalink(); ?>" class="blog-list__card">
              <div class="blog-list__image">
                <?php if (has_post_thumbnail()) : ?>
                  <?php the_post_thumbnail('full', array('alt' => get_the_title())); ?>
                <?php else : ?>
                  <img src="<?php echo get_template_directory_uri(); ?>/img/top/no-image.jpeg" alt="<?php echo esc_attr(get_the_title()); ?>" />
                <?php endif; ?>
              </div>
              <div class="blog-list__meta">
                <?php
                $categories = get_the_category();
                if ($categories && !is_wp_error($categories)) {
                  $category = $categories[0];
                  if ($category->name !== 'Uncategorized' && $category->name !== '未分類') :
                ?>
                  <p class="blog-list__tag"><?php echo esc_html($category->name); ?></p>
                <?php
                  endif;
                }
                ?>
                <p class="blog-list__date"><?php echo get_the_date('Y/m/d'); ?></p>
              </div>
              <h3 class="blog-list__title"><?php the_title(); ?></h3>
              <p class="blog-list__text">
                <?php echo wp_trim_words(get_the_excerpt(), 30); ?>
              </p>
            </a>
          </div>
          <?php
            endwhile;
          endif;
          wp_reset_postdata();
          ?>
        </div>
      </div>
    </div>
  </section>
<?php get_footer(); ?>
