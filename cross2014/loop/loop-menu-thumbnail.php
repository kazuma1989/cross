<ul class="ul-horizontal ul-separate">
    <?php while (have_posts()): the_post() ?>
    <li>
        <a class="block" style="width: 190px" href="<?php the_permalink() ?>">
            <?php the_post_thumbnail() ?>
            <br>
            <?php the_title() ?>
        </a>
    </li>
    <?php endwhile ?>
</ul>
