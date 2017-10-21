<?php

declare(strict_types=1);

add_action('after_setup_theme', function () {
    register_nav_menus([
        'header' => 'ヘッダー',
        'footer' => 'フッター',
    ]);

    // サムネイル機能を有効化
    // ただし、テーマの中でサムネイルを表示する the_post_thumbnail() の呼び出しがなければ、画面に表示されない
    // https://codex.wordpress.org/Post_Thumbnails
    add_theme_support('post-thumbnails');

    // https://codex.wordpress.org/Theme_Markup
    add_theme_support('html5', [
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ]);
});

// 絵文字は使わないので、性能劣化の要因となる補助機能をオフにする
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('admin_print_scripts', 'print_emoji_detection_script');
remove_action('admin_print_styles', 'print_emoji_styles');
