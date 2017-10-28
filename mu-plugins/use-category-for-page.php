<?php
/*
Plugin Name: 固定ページでのカテゴリー有効化
Version:     1.0.0
Description: 固定ページでカテゴリーを使えるようにする。ただし、カテゴリー検索時に固定ページは対象にはならない
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
    if ($column_name === '_wp_page_template') {
        // TODO ファイル名ではなく（ファイル内で定義した）テンプレート名を表示するほうがユーザーフレンドリー
        echo get_post_meta($post_id, '_wp_page_template', /* single */true);
    }
}, 10, 2);
