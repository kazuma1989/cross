<?php
/*
Plugin Name: カスタム投稿タイプ有効化
Version:     1.0.0
Description: カスタム投稿タイプ（研究テーマ、業績・著書、メンバー、アルバム）を有効化する
Author:      kazuma1989
Author URI:  https://github.com/kazuma1989
*/

declare(strict_types=1);

$config_json_filename = 'config.json';
$config = json_decode(file_get_contents(__DIR__.DIRECTORY_SEPARATOR.$config_json_filename), /* objects will be converted into associative arrays */true);

if (is_array($config['register_post_type'])) {
    add_action('init', function () use ($config) {
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
    });
}

// hack
// Wordpress 管理画面で JSON ファイルも編集できるようにする
// Wordpress バージョンアップにより不要になる可能性が高い
add_filter('wp_theme_editor_filetypes', function ($default_types) {
    $default_types[] = 'json';

    return $default_types;
});
