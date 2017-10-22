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

add_action('init', function () use ($config) {
    if (is_array($config['register_post_type'])) {
        $auto_added_templates_dir = 'template';
        $auto_added_templates = [];
        foreach (wp_get_theme()->get_files('php', /* depth */1, /* search_parent */true) as $path => $full_path) {
            $is_in_template_dir = strpos($path, $auto_added_templates_dir.DIRECTORY_SEPARATOR) === 0;
            if ($is_in_template_dir) {
                $auto_added_templates[$path] = str_ireplace([$auto_added_templates_dir.DIRECTORY_SEPARATOR, '.php'], '', $path);
            } else {
                continue;
            }
        }

        foreach ($config['register_post_type'] as $key => $option) {
            // カスタム投稿タイプの登録
            register_post_type($key, $option);

            // 特定のフォルダー内の PHP ファイルは自動で投稿タイプテンプレートとして使えるようにする
            add_filter("theme_{$key}_templates", function ($post_templates) use ($auto_added_templates) {
                return array_merge($auto_added_templates, $post_templates);
            });
        }
    }
});

add_action('widgets_init', function () use ($config) {
    if (is_array($config['register_sidebar'])) {
        foreach ($config['register_sidebar'] as $option) {
            // サイドバー（ウィジェットエリア）の登録
            register_sidebar($option);
        }
    }
});

add_action('after_setup_theme', function () use ($config) {
    if (is_array($config['register_nav_menus'])) {
        // メニューの登録
        register_nav_menus($config['register_nav_menus']);
    }

    if (is_array($config['add_theme_support'])) {
        foreach ($config['add_theme_support'] as $key => $option) {
            // テーマ機能の有効化
            add_theme_support($key, $option);
        }
    }
});

// hack
// Wordpress 管理画面で JSON ファイルも編集できるようにする
// Wordpress バージョンアップにより不要になる可能性が高い
add_filter('wp_theme_editor_filetypes', function ($default_types) {
    $default_types[] = 'json';

    return $default_types;
});
