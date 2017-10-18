<?php
/**
 * Template Name: ここにテンプレート名
 * Template Post Type: post, page.
 */
?>
<!DOCTYPE html>
<html <?php language_attributes() ?>>

<head>
    <?php get_template_part('template/head') ?>
    <?php wp_head() ?>
</head>

<body <?php body_class() ?>>
    <div id="main">
        <header id="header">
            <?php get_template_part('template/header') ?>
        </header>

        <main id="body" class="row span-24 center">
            <?php get_template_part('template/main', cr_get_template_type()) ?>
        </main>

        <footer id="footer">
            <?php get_template_part('template/footer') ?>
            <?php wp_footer() ?>
        </footer>
    </div>

    <div id="footer-copyright">
        <small class="copyright span-24 center text-center">Copyright 2001–<?= date('Y') ?> Biomaterials System Engineering Laboratory</small>
    </div>
</body>

</html>