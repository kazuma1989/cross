<!DOCTYPE html>
<html <?php language_attributes() ?>>
<head>
    <?php get_template_part('part/head-common') ?>
    <?php get_template_part('part/head') ?>

    <?php wp_head() ?>
</head>

<body <?php body_class() ?>>

    <header id="header">
        <?php get_template_part('part/header') ?>
    </header>
