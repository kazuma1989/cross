<h1 id="title"><?= get_the_category()[0]->name ?></h1>

<?php while (have_posts()): ?>
<?php the_post() ?>

<article class="row span-16">
    <h2 class="line-left"><?php the_title() ?></h2>

    <?php the_content() ?>

</article>

<?php endwhile ?>

<nav id="theme-list" class="span-7 right">
    <style scoped>
        #theme-list .selected {
            font-weight: bold;
        }
    </style>

    <div class="box-radius list-wrapper box-metallic">
        <?php dynamic_sidebar('research') ?>
    </div>
</nav>
