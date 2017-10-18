<div id="footer-info" class="row span-24 center text-small">
    <ul class="span-12 ul-horizontal ul-divided">
        <?php foreach (cr_nav_menu__item_list('footer') as $item): ?>
        <li data-divider="-">
            <a href="<?= $item->url ?>" target="<?= $item->target ?>">
                <?= $item->title ?>
            </a>
        </li>
        <?php endforeach ?>
        <!-- 
        <li                 ><a href="/contact">お問い合わせ</a></li>
        <li data-divider="-"><a href="/sitemap">サイトマップ</a></li>
        <li data-divider="-"><a href="/search">検索</a></li>
        <li data-divider="-"><a href="/link">リンク</a></li> -->
    </ul>
</div>

<div id="footer-external-links">
    <ul class="span-24 center ul-horizontal text-center">
        <?php foreach (cr_nav_menu__item_list('bottom') as $item): ?>
        <li data-divider="-">
            <a href="<?= $item->url ?>" target="<?= $item->target ?>">
                <?= $item->title ?>
            </a>
        </li>
        <?php endforeach ?>
    </ul>
</div>

<div id="footer-copyright">
    <small class="copyright span-24 center text-center">Copyright 2001–<?= date('Y') ?> Biomaterials System Engineering Laboratory</small>
</div>
