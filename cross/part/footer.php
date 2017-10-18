<?php foreach (cr_nav_menu__item_list('footer') as $item): ?>
<a href="<?= $item->url ?>" target="<?= $item->target ?>">
    <?= $item->title ?>
</a>
<?php endforeach ?>
