<?php

// テーマの基本機能を有効化
function my_theme_setup() {
    // アイキャッチ画像（投稿サムネイル）を有効化
    add_theme_support('post-thumbnails');

    // 必要ならサイズ指定（任意）
    add_image_size('notice-thumb', 400, 260, true);
}

add_action('after_setup_theme', 'my_theme_setup');
// CSS・JSファイルを読み込む
function my_theme_enqueue_scripts() {
    // Google Fonts
    wp_enqueue_style(
        'google-fonts',
        'https://fonts.googleapis.com/css2?family=Cormorant+SC:wght@300;400;500;600;700&family=Noto+Serif+JP:wght@200..900&display=swap',
        array(),
        null
    );

    // Swiper CSS
    wp_enqueue_style(
        'swiper-css',
        'https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css',
        array(),
        null
    );

    // reset.css, common.css, style.css
    wp_enqueue_style(
        'reset-css',
        get_template_directory_uri() . '/css/reset.css',
        array(),
        filemtime(get_template_directory() . '/css/reset.css')
    );
    wp_enqueue_style(
        'common-css',
        get_template_directory_uri() . '/css/common.css',
        array('reset-css'),
        filemtime(get_template_directory() . '/css/common.css')
    );
    wp_enqueue_style(
        'theme-style',
        get_template_directory_uri() . '/css/style.css',
        array('common-css'),
        filemtime(get_template_directory() . '/css/style.css')
    );

    // Swiper JS
    wp_enqueue_script(
        'swiper-js',
        'https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.3/js/swiper.min.js',
        array(),
        null,
        true
    );

    // jQuery（CDNから）
    wp_enqueue_script(
        'jquery-cdn',
        'https://code.jquery.com/jquery-3.7.1.min.js',
        array(),
        null,
        true
    );

    // main.js
    wp_enqueue_script(
        'theme-main',
        get_template_directory_uri() . '/js/main.js',
        array('jquery-cdn', 'swiper-js'),
        filemtime(get_template_directory() . '/js/main.js'),
        true
    );
    


    // access-ginza 固定ページに access.css を適用
    if (is_page(array('access-ginza', 'access-shibuya'))) {
        wp_enqueue_style(
            'access-css',
            get_template_directory_uri() . '/css/access.css',
            array('theme-style'),
            filemtime(get_template_directory() . '/css/access.css')
        );
    }



    // カスタム投稿タイプ doctor（医師紹介）のアーカイブ/シングル、またはフロントページで staff.css を適用
    if (is_post_type_archive('doctor') || (is_singular('doctor')) || is_front_page()) {
        wp_enqueue_style(
            'staff-css',
            get_template_directory_uri() . '/css/staff.css',
            array('theme-style'),
            filemtime(get_template_directory() . '/css/staff.css')
        );

         wp_enqueue_style(
            'access-css',
            get_template_directory_uri() . '/css/access.css',
            array('theme-style'),
            filemtime(get_template_directory() . '/css/access.css')
        );
    }


    // clinic 固定ページに about-cynthia.css を適用
    if (is_page('about')) {
        wp_enqueue_style(
            'about-cynthia-css',
            get_template_directory_uri() . '/css/about-cynthia.css',
            array('theme-style'),
            filemtime(get_template_directory() . '/css/about-cynthia.css')
        );

        wp_enqueue_style(
            'access-css',
            get_template_directory_uri() . '/css/access.css',
            array('theme-style'),
            filemtime(get_template_directory() . '/css/access.css')
        );
    }


    // contact 固定ページに contact.css を適用
    if (is_page('contact')) {
        wp_enqueue_style(
            'contact-css',
            get_template_directory_uri() . '/css/contact.css',
            array('theme-style'),
            filemtime(get_template_directory() . '/css/contact.css')
        );

        wp_enqueue_style(
            'access-css',
            get_template_directory_uri() . '/css/access.css',
            array('theme-style'),
            filemtime(get_template_directory() . '/css/access.css')
        );
    }

    // privacy-policy 固定ページに privacy-policy.css を適用
    if (is_page('privacy-policy')) {
        wp_enqueue_style(
            'privacy-policy-css',
            get_template_directory_uri() . '/css/privacy-policy.css',
            array('theme-style'),
            filemtime(get_template_directory() . '/css/privacy-policy.css')
        );

        wp_enqueue_style(
            'access-css',
            get_template_directory_uri() . '/css/access.css',
            array('theme-style'),
            filemtime(get_template_directory() . '/css/access.css')
        );
    }

    // archive-case（症例紹介一覧アーカイブページ）に case.css を適用
    if (is_post_type_archive('case') || (is_singular('case'))) {
        wp_enqueue_style(
            'case-css',
            get_template_directory_uri() . '/css/case.css',
            array('theme-style', 'access-css'),
            filemtime(get_template_directory() . '/css/case.css')
        );

        wp_enqueue_style(
            'access-css',
            get_template_directory_uri() . '/css/access.css',
            array('theme-style'),
            filemtime(get_template_directory() . '/css/access.css')
        );
    }

    // archive-notice（お知らせアーカイブページ）に notice.css を適用
    if (is_post_type_archive('notice') || (is_singular('notice'))) {
        wp_enqueue_style(
            'notice-css',
            get_template_directory_uri() . '/css/notice.css',
            array('theme-style', 'access-css'),
            filemtime(get_template_directory() . '/css/notice.css')
        );

        wp_enqueue_style(
            'access-css',
            get_template_directory_uri() . '/css/access.css',
            array('theme-style'),
            filemtime(get_template_directory() . '/css/access.css')
        );
    }


    // archive-column（コラムアーカイブページ）に column.css を適用
    if (is_post_type_archive('column') || (is_singular('column'))) {
        wp_enqueue_style(
            'column-css',
            get_template_directory_uri() . '/css/column.css',
            array('theme-style', 'access-css'),
            filemtime(get_template_directory() . '/css/column.css')
        );

        wp_enqueue_style(
            'access-css',
            get_template_directory_uri() . '/css/access.css',
            array('theme-style'),
            filemtime(get_template_directory() . '/css/access.css')
        );
    }

    // archive-campaign（キャンペーンアーカイブページ）に campaign.css を適用
    if (is_post_type_archive('campaign') || is_singular('pickup-menu')) {
        wp_enqueue_style(
            'campaign-css',
            get_template_directory_uri() . '/css/campaign.css',
            array('theme-style', 'access-css'),
            filemtime(get_template_directory() . '/css/campaign.css')
        );

        wp_enqueue_style(
            'access-css',
            get_template_directory_uri() . '/css/access.css',
            array('theme-style'),
            filemtime(get_template_directory() . '/css/access.css')
        );
    }

    // page-monitor（モニター募集ページ）に monitor.css を適用
    if (is_page('monitor')) {
        wp_enqueue_style(
            'monitor-css',
            get_template_directory_uri() . '/css/monitor.css',
            array('theme-style', 'access-css'),
            filemtime(get_template_directory() . '/css/monitor.css')
        );

        wp_enqueue_style(
            'access-css',
            get_template_directory_uri() . '/css/access.css',
            array('theme-style'),
            filemtime(get_template_directory() . '/css/access.css')
        );
    }

    // page-payment（お支払い方法ページ）に payment.css を適用
    if (is_page('price-payment')) {
        wp_enqueue_style(
            'payment-css',
            get_template_directory_uri() . '/css/payment.css',
            array('theme-style', 'access-css'),
            filemtime(get_template_directory() . '/css/payment.css')
        );

        wp_enqueue_style(
            'access-css',
            get_template_directory_uri() . '/css/access.css',
            array('theme-style'),
            filemtime(get_template_directory() . '/css/access.css')
        );
    }


    // page-point-card（ポイントカードページ）に point-card.css を適用
    if (is_page('point-card')) {
        wp_enqueue_style(
            'point-card-css',
            get_template_directory_uri() . '/css/point-card.css',
            array('theme-style', 'access-css'),
            filemtime(get_template_directory() . '/css/point-card.css')
        );

        wp_enqueue_style(
            'access-css',
            get_template_directory_uri() . '/css/access.css',
            array('theme-style'),
            filemtime(get_template_directory() . '/css/access.css')
        );
    }

    // page-memu（施術メニューページ）に menu.css を適用
    if (is_page('menu')) {
        wp_enqueue_style(
            'menu-css',
            get_template_directory_uri() . '/css/menu.css',
            array('theme-style', 'access-css'),
            filemtime(get_template_directory() . '/css/menu.css')
        );

        wp_enqueue_style(
            'access-css',
            get_template_directory_uri() . '/css/access.css',
            array('theme-style'),
            filemtime(get_template_directory() . '/css/access.css')
        );
    }

    // price-list 固定ページに price-list.css を適用
    if (is_page('price')) {
        wp_enqueue_style(
            'price-list-css',
            get_template_directory_uri() . '/css/price-list.css',
            array('theme-style'),
            filemtime(get_template_directory() . '/css/price-list.css')
        );

        wp_enqueue_style(
            'access-css',
            get_template_directory_uri() . '/css/access.css',
            array('theme-style'),
            filemtime(get_template_directory() . '/css/access.css')
        );
    }

    // page-discovery-pico（ディスカバリーピコページ）に pico.css を適用
    if (is_page('discovery-pico') || is_page('hair-removal') || is_page('under-eye-bag-removal')) {
        wp_enqueue_style(
            'pico-css',
            get_template_directory_uri() . '/css/page.css',
            array('theme-style', 'common-css'),
            filemtime(get_template_directory() . '/css/page.css')
        );
    }

    // archive-ginza-blog（銀座ブログアーカイブページ）に blog_ginza-blog-archive.css を適用
    if (is_post_type_archive('ginza-blog')) {
        wp_enqueue_style(
            'blog-ginza-archive-css',
            get_template_directory_uri() . '/css/blog_ginza-blog-archive.css',
            array('theme-style', 'access-css'),
            filemtime(get_template_directory() . '/css/blog_ginza-blog-archive.css')
        );

        wp_enqueue_style(
            'access-css',
            get_template_directory_uri() . '/css/access.css',
            array('theme-style'),
            filemtime(get_template_directory() . '/css/access.css')
        );
    }

    // single-ginza-blog（銀座ブログシングルページ）に blog_ginza-blog-single.css を適用
    if (is_singular('ginza-blog')) {
        wp_enqueue_style(
            'blog-ginza-single-css',
            get_template_directory_uri() . '/css/blog_ginza-blog-single.css',
            array('theme-style', 'access-css'),
            filemtime(get_template_directory() . '/css/blog_ginza-blog-single.css')
        );

        wp_enqueue_style(
            'access-css',
            get_template_directory_uri() . '/css/access.css',
            array('theme-style'),
            filemtime(get_template_directory() . '/css/access.css')
        );
    }

    // archive-shibuya-blog（渋谷ブログアーカイブページ）に blog_shibuya-blog-archive.css を適用
    if (is_post_type_archive('shibuya-blog')) {
        wp_enqueue_style(
            'blog-shibuya-archive-css',
            get_template_directory_uri() . '/css/blog_shibuya-blog-archive.css',
            array('theme-style', 'access-css'),
            filemtime(get_template_directory() . '/css/blog_shibuya-blog-archive.css')
        );

        wp_enqueue_style(
            'access-css',
            get_template_directory_uri() . '/css/access.css',
            array('theme-style'),
            filemtime(get_template_directory() . '/css/access.css')
        );
    }

    // single-shibuya-blog（渋谷ブログシングルページ）に blog_shibuya-blog-single.css を適用
    if (is_singular('shibuya-blog')) {
        wp_enqueue_style(
            'blog-shibuya-single-css',
            get_template_directory_uri() . '/css/blog_shibuya-blog-single.css',
            array('theme-style', 'access-css'),
            filemtime(get_template_directory() . '/css/blog_shibuya-blog-single.css')
        );

        wp_enqueue_style(
            'access-css',
            get_template_directory_uri() . '/css/access.css',
            array('theme-style'),
            filemtime(get_template_directory() . '/css/access.css')
        );
    }

}
add_action('wp_enqueue_scripts', 'my_theme_enqueue_scripts');

    // カスタム投稿タイプ notice（お知らせ）
    function create_post_type_notice() {
        register_post_type('notice', array(
            'labels' => array(
                'name'          => 'お知らせ',
                'singular_name' => 'お知らせ',
            ),
            'public'       => true,
            'has_archive'  => true,
            'rewrite'      => array('slug' => 'notice'),
            'menu_position'=> 5,
            'menu_icon'    => 'dashicons-megaphone',
            'supports'     => array('title', 'editor', 'thumbnail', 'excerpt'),
        ));
    }
    add_action('init', 'create_post_type_notice');

    function add_notice_categories() {
        register_taxonomy_for_object_type('category', 'notice');
    }
    add_action('init', 'add_notice_categories');

    // カスタム投稿タイプ ginza-blog（銀座ブログ）
    function create_post_type_ginza_blog() {
        register_post_type('ginza-blog', array(
            'labels' => array(
                'name'          => '銀座ブログ',
                'singular_name' => '銀座ブログ',
            ),
            'public'       => true,
            'has_archive'  => true,
            'rewrite'      => array('slug' => 'ginza-blog'),
            'menu_position'=> 6,
            'menu_icon'    => 'dashicons-edit',
            'supports'     => array('title', 'editor', 'thumbnail', 'excerpt'),
        ));
    }
    add_action('init', 'create_post_type_ginza_blog');

    function add_ginza_blog_categories() {
        register_taxonomy_for_object_type('category', 'ginza-blog');
    }
    add_action('init', 'add_ginza_blog_categories');

    // カスタム投稿タイプ shibuya-blog（渋谷ブログ）
    function create_post_type_shibuya_blog() {
        register_post_type('shibuya-blog', array(
            'labels' => array(
                'name'          => '渋谷ブログ',
                'singular_name' => '渋谷ブログ',
            ),
            'public'       => true,
            'has_archive'  => true,
            'rewrite'      => array('slug' => 'shibuya-blog'),
            'menu_position'=> 7,
            'menu_icon'    => 'dashicons-edit',
            'supports'     => array('title', 'editor', 'thumbnail', 'excerpt'),
        ));
    }
    add_action('init', 'create_post_type_shibuya_blog');

    function add_shibuya_blog_categories() {
        register_taxonomy_for_object_type('category', 'shibuya-blog');
    }
    add_action('init', 'add_shibuya_blog_categories');

    // 閲覧数をカウントする関数
    function set_post_views($post_id) {
        $count_key = 'post_views_count';
        $count = get_post_meta($post_id, $count_key, true);
        if ($count == '') {
            $count = 0;
            delete_post_meta($post_id, $count_key);
            add_post_meta($post_id, $count_key, '0');
        } else {
            $count++;
            update_post_meta($post_id, $count_key, $count);
        }
    }

    // シングルページで閲覧数をカウント
    function track_post_views($post_id) {
        if (!is_singular('ginza-blog') && !is_singular('shibuya-blog')) {
            return;
        }
        if (empty($post_id)) {
            global $post;
            $post_id = $post->ID;
        }
        set_post_views($post_id);
    }
    add_action('wp_head', 'track_post_views');

    // ブログ記事の見出しにidとクラスを追加、リストにクラスを追加
    function add_heading_ids($content) {
        if (!is_singular('ginza-blog') && !is_singular('shibuya-blog')) {
            return $content;
        }
        
        $heading_count = 0;
        $content = preg_replace_callback(
            '/<h([2-4])[^>]*>(.*?)<\/h[2-4]>/i',
            function($matches) use (&$heading_count) {
                $heading_count++;
                $level = $matches[1];
                $text = strip_tags($matches[2]);
                $id = 'heading-' . $heading_count;
                $class = 'h' . $level;
                return '<h' . $level . ' id="' . esc_attr($id) . '" class="' . esc_attr($class) . '">' . $matches[2] . '</h' . $level . '>';
            },
            $content
        );
        
        // リストにクラスを追加（奇数番目にis-oddクラス）
        // ulとolを一緒にカウント
        $list_count = 0;
        $content = preg_replace_callback(
            '/<(ul|ol)([^>]*)>/i',
            function($matches) use (&$list_count) {
                $list_count++;
                $tag = $matches[1];
                $attrs = $matches[2];
                
                // 奇数番目の場合のみis-oddクラスを追加
                if ($list_count % 2 === 1) {
                    // 既存のclass属性がある場合
                    if (preg_match('/class=["\']([^"\']*)["\']/', $attrs, $class_matches)) {
                        $existing_classes = $class_matches[1];
                        $attrs = preg_replace('/class=["\'][^"\']*["\']/', '', $attrs);
                        $classes = trim($existing_classes . ' is-odd');
                        return '<' . $tag . ' class="' . esc_attr($classes) . '"' . $attrs . '>';
                    } else {
                        return '<' . $tag . ' class="is-odd"' . $attrs . '>';
                    }
                }
                return '<' . $tag . $attrs . '>';
            },
            $content
        );
        
        return $content;
    }
    add_filter('the_content', 'add_heading_ids');

?>