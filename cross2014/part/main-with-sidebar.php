<div id="body" class="row span-24 center">
    <h1 id="title">研究テーマ</h1>

    <?php while (have_posts()): the_post() ?>
    <article class="row span-16">

        <h2 class="line-left">
            <a href="<?php the_permalink() ?>">
                <?php the_title() ?>
            </a>
        </h2>

        <?php the_content() ?>

    </article>
    <?php endwhile ?>

    <nav id="theme-list" class="span-7 right">
        <style scoped>
            #theme-list ol .selected {
                font-weight: bold;
            }
        </style>
        <div class="box-radius list-wrapper box-metallic">
            <?php dynamic_sidebar('main-sidebar') ?>

            <p class="list-item text-right">
                <a class="arrow-left-before" href="./">研究テーマ トップ</a>
            </p>
        </div>
    </nav>

</div>
