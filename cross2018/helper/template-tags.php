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
        return get_the_category()[0]->slug;
    }
    if (is_page()) {
        return 'page';
    }
    if (is_archive()) {
        return 'archive';
    }

    return '';
}

/**
 * @param $location
 *
 * @return WP_Post[]
 */
function cr_nav_menu__item_list(string $location): array
{
    // Get non-nested menu items which WordPress gives.
    $menu_id = get_nav_menu_locations()[$location];
    $raw_item_list = wp_get_nav_menu_items($menu_id, [
        'update_post_term_cache' => false,
    ]) ?: [];

    // Convert the flat list to a tree structure.
    $item_list = [];
    $current_top_parent = null;
    foreach ($raw_item_list as $item) {
        $is_top_parent = ($item->menu_item_parent === '0');
        $is_direct_child = !$is_top_parent && ($item->menu_item_parent == $current_top_parent->ID);

        if ($is_top_parent) {
            // Switch the current parent.
            $current_top_parent = $item;

            // Add an item as a top level parent.
            $item_list[] = $item;

            // Set up as a parent.
            $item->child_list = [];
        } elseif ($is_direct_child) {
            // Add an item as a child.
            $current_top_parent->child_list[] = $item;
        } else {
            // Do nothing.
            // Grand child menus (children of a child) are omitted.
        }
    }

    return $item_list;
}
