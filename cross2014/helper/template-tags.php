<?php

declare(strict_types=1);

/**
 * @param $theme_location
 */
function cr_nav_menu(string $theme_location): void
{
    wp_nav_menu([
        'theme_location' => $theme_location,
        'container' => '',
        'items_wrap' => '%3$s',
    ]);
}

/**
 * @return the template type
 */
function cr_get_template_type(): string
{
    if (is_404()) {
        return '404';
    }
    if (is_search()) {
        return 'search';
    }
    if (is_home()) {
        return 'home';
    }
    if (is_single()) {
        return 'single';
    }
    if (is_page()) {
        return 'page';
    }
    if (is_archive()) {
        return 'archive';
    }

    return '';
}
