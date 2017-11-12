<?php

declare(strict_types=1);

add_action('widgets_init', function () {
    register_sidebar([
        'id' => 'research',
        'name' => '研究テーマ',
        // 'before_widget' => '<a href="%%s" class="span-10 a-block box box-shadow box-border box-attention margin-bottom-1">',
        // 'before_title' => '<div class="text-link">',
        // 'after_title' => '</div><div class="a-description text-small padding-end-0">',
        // 'after_widget' => '</div></a>',
    ]);
});

// 投稿ループウィジェット
// 現在表示中の投稿と同じ投稿であっても表示させる。
// 無限ループが生じうるので、投稿ループウィジェットを使うときは利用するテンプレートに注意する。
add_filter('siteorigin_panels_postloop_query_args', function ($query_args) {
    unset($query_args['post__not_in']);

    return $query_args;
});
