<?php

declare(strict_types=1);

// 設定ファイルを読み込む
$config_json_filename = 'config.json';

$parent_theme_json = get_template_directory().DIRECTORY_SEPARATOR.$config_json_filename;
if (file_exists($parent_theme_json)) {
    $parent_config = json_decode(file_get_contents($parent_theme_json), /* objects will be converted into associative arrays */true);
} else {
    $parent_config = [];
}

$current_theme_json = get_stylesheet_directory().DIRECTORY_SEPARATOR.$config_json_filename;
$child_json_exists = $current_theme_json !== $parent_theme_json && file_exists($current_theme_json);
if ($child_json_exists) {
    $current_config = json_decode(file_get_contents($current_theme_json), /* objects will be converted into associative arrays */true);
} else {
    $current_config = [];
}

$config = array_merge_recursive($parent_config, $current_config);

// 読み込んだ内容を使って設定開始

if (is_array($config['register_sidebar'])) {
    add_action('widgets_init', function () use ($config) {
        foreach ($config['register_sidebar'] as $option) {
            // サイドバー（ウィジェットエリア）の登録
            register_sidebar($option);
        }
    });
}

if (is_array($config['register_nav_menus'])) {
    add_action('after_setup_theme', function () use ($config) {
        // メニューの登録
        register_nav_menus($config['register_nav_menus']);
    });
}

if (is_array($config['add_theme_support'])) {
    add_action('after_setup_theme', function () use ($config) {
        foreach ($config['add_theme_support'] as $key => $option) {
            // テーマ機能の有効化
            add_theme_support($key, $option);
        }
    });
}
