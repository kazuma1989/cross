<?php

declare(strict_types=1);

add_action('after_setup_theme', function () {
    register_nav_menus([
        'upper-right' => '右上',
        'bottom' => '下',
    ]);
});
