<?php while (have_posts()): ?>
<?php the_post() ?>

<?php if (get_the_title()): ?>
<h1 id="title">
    <a href="<?php the_permalink() ?>">
        <?php the_title() ?>
    </a>
</h1>
<?php endif ?>

<?php the_content() ?>

<?php endwhile ?>