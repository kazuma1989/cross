<?php

declare(strict_types=1);

/**
 * @param $menu_name
 *
 * @return WP_Post[]
 */
function cr_nav_menu__item_list(string $menu_name): array
{
    // Get non-nested menu items which WordPress gives.
    $raw_item_list = wp_get_nav_menu_items($menu_name) ?: [];

    $item_list = [];
    $top_parent = null;
    foreach ($raw_item_list as $item) {
        $is_top_parent = ($item->menu_item_parent === '0');
        $is_direct_child = !$is_top_parent && ($item->menu_item_parent == $top_parent->ID);

        if ($is_top_parent || $is_direct_child) {
            if ($is_top_parent) {
                // Set up as a parent.
                $item->child_list = [];

                // Add an item as a top level parent.
                $top_parent = $item;
                $item_list[] = $item;
            } else {
                // Add an item as a child.
                $top_parent->child_list[] = $item;
            }

            // Common settings.
            $item->css_class = implode(' ', $item->classes);
        } else {
            // Do nothing.
            // Grand child menus (children of a child) are omitted.
        }
    }

    return $item_list;
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
