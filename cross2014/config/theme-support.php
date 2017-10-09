<?php

declare(strict_types=1);

add_action('after_setup_theme', function () {
    register_nav_menus([
        'upper-right' => '右上',
        'header' => 'ヘッダー',
        'footer' => 'フッター',
        'bottom' => '下',
    ]);

    add_theme_support('post-thumbnails');

    add_theme_support('html5', [
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ]);
});
