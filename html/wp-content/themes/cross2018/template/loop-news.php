<?php while (have_posts()): ?>
<?php the_post() ?>

<dt>
    <a href="<?php the_permalink() ?>">
        <?= get_the_date() ?>
    </a>
</dt>
<dd>
    <?php the_content() ?>
</dd>

<?php endwhile ?>