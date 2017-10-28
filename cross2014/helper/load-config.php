<?php

declare(strict_types=1);

// 設定ファイルを読み込む
$config_file = __DIR__.DIRECTORY_SEPARATOR.'config.json';
$config = json_decode(@file_get_contents($config_file) ?: '{}', /* objects will be converted into associative arrays */true);

// 読み込んだ内容を使って設定開始
if (is_array(@$config['register_sidebar'])) {
    add_action('widgets_init', function () use ($config) {
        foreach ($config['register_sidebar'] as $option) {
            // サイドバー（ウィジェットエリア）の登録
            register_sidebar($option);
        }
    });
}

if (is_array(@$config['register_nav_menus'])) {
    add_action('after_setup_theme', function () use ($config) {
        // メニューの登録
        register_nav_menus($config['register_nav_menus']);
    });
}

if (is_array(@$config['add_theme_support'])) {
    add_action('after_setup_theme', function () use ($config) {
        foreach ($config['add_theme_support'] as $key => $option) {
            // テーマ機能の有効化
            add_theme_support($key, $option);
        }
    });
}
