<ul class="text-small ul-separate-half">

<?php while (have_posts()): ?>
<?php the_post() ?>
<li>
    <a href="<?php the_permalink() ?>">
        <?php the_title() ?>
    </a>
</li>
<?php endwhile ?>

</ul>