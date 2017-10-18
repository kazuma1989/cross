<div>
    <a href="<?= home_url('/') ?>">
        <?php bloginfo('title') ?>
    </a>
</div>

<?php foreach (cr_nav_menu__item_list('header') as $item): ?>
<a href="<?= $item->url ?>" target="<?= $item->target ?>">
    <?= $item->title ?>
</a>
<?php endforeach ?>
