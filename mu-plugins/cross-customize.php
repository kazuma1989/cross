<?php
/*
Plugin Name: cross 用カスタマイズ設定
Version:     1.0.0
Description: 固定ページでカテゴリーを使えるようにする。固定ページ一覧に「テンプレート」の列を表示する。絵文字補助機能をオフにする。SiteOrigin 投稿ループウィジェットで、現在表示中の投稿も表示させる。
Author:      kazuma1989
Author URI:  https://github.com/kazuma1989
*/

declare(strict_types=1);

// 固定ページでカテゴリーを使えるようにする。ただし、カテゴリー検索時に固定ページは対象にはならない
add_action('init', function () {
    register_taxonomy_for_object_type('category', 'page');
});

// 固定ページ一覧に「テンプレート」の列を表示する
add_filter('manage_pages_columns', function ($posts_columns) {
    $posts_columns['_wp_page_template'] = 'テンプレート';

    return $posts_columns;
});
add_action('manage_pages_custom_column', function ($column_name, $post_id) {
    static $page_templates;
    if (empty($page_templates)) {
        $page_templates = wp_get_theme()->get_post_templates()['page'];
    }

    if ($column_name === '_wp_page_template') {
        $template_path = get_post_meta($post_id, '_wp_page_template', /* single */true);
        echo @$page_templates[$template_path];
    }
}, 10, 2);

// 絵文字は使わないので、性能劣化の要因となる補助機能をオフにする
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('admin_print_scripts', 'print_emoji_detection_script');
remove_action('admin_print_styles', 'print_emoji_styles');

// SiteOrigin 投稿ループウィジェット
// 現在表示中の投稿と同じ投稿であっても表示させる。
// 無限ループが生じうるので、投稿ループウィジェットを使うときは利用するテンプレートに注意する。
add_filter('siteorigin_panels_postloop_query_args', function ($query_args) {
    unset($query_args['post__not_in']);

    return $query_args;
});
