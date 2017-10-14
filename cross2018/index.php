<!DOCTYPE html>
<html <?php language_attributes() ?>>

<head>
    <?php get_template_part('template/head') ?>
    <?php wp_head() ?>
</head>

<body <?php body_class() ?>>
    <header>
        <?php get_template_part('template/header') ?>
    </header>

    <main class="container">
        <?php get_template_part('template/main', cr_get_template_type()) ?>
    </main>

    <footer>
        <?php get_template_part('template/footer') ?>
        <?php wp_footer() ?>
    </footer>
</body>

</html>