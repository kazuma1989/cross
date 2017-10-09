<?php

declare(strict_types=1);

add_action('widgets_init', function () {
    register_sidebar([
        // 'id' => 'home-attention',
        // 'name' => 'Home attention notes',
        // 'before_widget' => '<a href="%%s" class="span-10 a-block box box-shadow box-border box-attention margin-bottom-1">',
        // 'before_title' => '<div class="text-link">',
        // 'after_title' => '</div><div class="a-description text-small padding-end-0">',
        // 'after_widget' => '</div></a>',
    ]);
});
