<?php

declare(strict_types=1);

// 絵文字は使わないので、性能劣化の要因となる補助機能をオフにする
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('admin_print_scripts', 'print_emoji_detection_script');
remove_action('admin_print_styles', 'print_emoji_styles');
