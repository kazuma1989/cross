<ul id="theme-list" class="ol-separate span-14">

<?php while (have_posts()): ?>
<?php the_post() ?>
<li>
    <a class="a-block" href="<?php the_permalink() ?>">
        <div class="text-link"><?php the_title() ?></div>
        <div class="a-description text-small"><?php the_excerpt() ?></div>
    </a>
</li>
<?php endwhile ?>

</ul>