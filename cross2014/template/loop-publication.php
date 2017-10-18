<h3>2017 年</h3>
<ol class="ol-separate">
    <?php while (have_posts()): ?>
    <?php the_post() ?>

    <li value="167">
        <span class="Authors"><?= get_post_meta($post->ID, 'authors', true) ?></span>:
        <br>
        <span class="Title">"<?php the_title() ?>"</span>,
        <br>
        <i class="Journal"><?= get_post_meta($post->ID, 'journal', true) ?></i>
        <b class="Volume">19</b>,
        <span class="Pages">20627 - 20634</span>
        <span class="Year">(2017)</span>.
    </li>
    <?php endwhile ?>
</ol>