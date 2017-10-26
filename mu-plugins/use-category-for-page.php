<?php
/*
Plugin Name: 固定ページでのカテゴリー有効化
Version:     1.0.0
Description: 固定ページでカテゴリーを使えるようにする。ただし、カテゴリー検索時に固定ページは対象にはならない
Author:      kazuma1989
Author URI:  https://github.com/kazuma1989
*/

declare(strict_types=1);

add_action('init', function () {
    register_taxonomy_for_object_type('category', 'page');
});
