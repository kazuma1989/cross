<?php

declare(strict_types=1);

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

add_action('init', function () use ($config) {
    if (is_array($config['register_post_type'])) {
        foreach ($config['register_post_type'] as $key => $option) {
            register_post_type($key, $option);
        }
    }
});

add_action('widgets_init', function () use ($config) {
    if (is_array($config['register_sidebar'])) {
        foreach ($config['register_sidebar'] as $option) {
            register_sidebar($option);
        }
    }
});

add_action('after_setup_theme', function () use ($config) {
    if (is_array($config['register_nav_menus'])) {
        register_nav_menus($config['register_nav_menus']);
    }

    if (is_array($config['add_theme_support'])) {
        foreach ($config['add_theme_support'] as $key => $option) {
            add_theme_support($key, $option);
        }
    }
});

// Hack
// Wordpress 管理画面で JSON ファイルも編集できるようにする
add_filter('wp_theme_editor_filetypes', function ($default_types) {
    $default_types[] = 'json';

    return $default_types;
});
