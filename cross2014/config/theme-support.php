<?php

declare(strict_types=1);

add_action('after_setup_theme', function () {
    add_theme_support('menus');

    // add_theme_support('custom-header', [
    //     'flex-width' => true,
    //     'width' => 370,
    //     'flex-width' => true,
    //     'height' => 294,
    //     'default-image' => get_theme_file_uri('css/img/logo/door0.png'),
    // ]);

    add_theme_support('post-thumbnails');

    add_theme_support('html5', [
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ]);
});
