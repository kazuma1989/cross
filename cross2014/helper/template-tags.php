<?php

declare(strict_types=1);

/**
 * @param $location
 *
 * @return WP_Post[]
 */
function cr_nav_menu__item_list(string $location): array
{
    // Get non-nested menu items which WordPress gives.
    $menu_id = @get_nav_menu_locations()[$location];
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

/**
 * @return WP_Post[]
 */
function cr_nav_sibling__item_list(): array
{
    return get_pages([
        'child_of' => $GLOBALS['post']->post_parent,
    ]);
}

/**
 * @return parent page title
 */
function cr_parent__title(): string
{
    return get_post($GLOBALS['post']->post_parent)->post_title;
}
