<?php get_template_part('part/main') ?>

<section>
    <?php foreach (cr_nav_category__item_list() as $post): setup_postdata($post) ?>
    <a href="<?php the_permalink() ?>">
        <?php the_title() ?>
    </a>
    <?php endforeach ?>
</section>
