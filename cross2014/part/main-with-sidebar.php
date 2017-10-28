<div id="body" class="row span-24 center">
    <h1 id="title">
        <?= cr_parent__title() ?>
    </h1>

    <?php while (have_posts()): the_post() ?>
    <article class="row span-18">

        <h2 class="line-left">
            <a href="<?php the_permalink() ?>">
                <?php the_title() ?>
            </a>
        </h2>

        <?php the_content() ?>

    </article>
    <?php endwhile ?>

    <nav class="span-5 right">
        <div class="box-radius list-wrapper box-metallic">
            <ul>
                <?php foreach (cr_nav_sibling__item_list() as $item): ?>
                <li>
                    <a href="<?= get_permalink($item) ?>">
                        <?= $item->post_title ?>
                    </a>
                </li>
                <?php endforeach ?>
            </ul>

            <p class="text-right">
                <a class="arrow-left-before" href="./">
                    <?= cr_parent__title() ?> トップ
                </a>
            </p>
        </div>
    </nav>

</div>
