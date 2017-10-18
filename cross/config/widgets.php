<?php

declare(strict_types=1);

add_action('widgets_init', function () {
    register_sidebar([
        'id' => 'main-sidebar',
        'name' => 'メインサイドバー',
        'before_widget' => '',
        'after_widget' => '',
        // 'before_title' => '<h2 class="widgettitle">',
        // 'after_title' => '</h2>',
    ]);
});

// 投稿ループウィジェット
// 現在表示中の投稿と同じ投稿であっても表示させる。
// 無限ループが生じうるので、投稿ループウィジェットを使うときは利用するテンプレートに注意する。
add_filter('siteorigin_panels_postloop_query_args', function ($query_args) {
    unset($query_args['post__not_in']);

    return $query_args;
});