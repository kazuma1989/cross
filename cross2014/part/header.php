<div id="logo-line" class="row span-24 center">
    <!-- ロゴ -->
    <div id="logo" class="span-12">
        <a href="<?= home_url('/') ?>">
            <div class="cr_site_logo cr_site_logo--theme_dark">
                <div class="cr_site_logo__main">
                    <?php bloginfo('title') ?><span class="cr_site_logo__main_small"><wbr>（<?php bloginfo('description') ?>）</span>
                </div>
                <div class="cr_site_logo__sub">
                    東京大学工学部 マテリアル工学科 /
                    <wbr> 東京大学大学院工学系研究科 マテリアル工学専攻
                </div>
            </div>
        </a>
    </div>

    <!-- アイコンナビ -->
    <nav id="icon-nav" class="right span-9">
        <ul id="icon-nav-ul" class="ul-horizontal text-left margin-bottom-0">
            <?php foreach (cr_nav_menu__item_list('upper-right') as $item): ?>
            <li>
                <a href="<?= $item->url ?>" target="<?= $item->target ?>">
                    <?= $item->title ?>
                </a>
            </li>
            <?php endforeach ?>
        </ul>
    </nav>
</div>

<!-- ヘッダーメニュー -->
<div id="g-nav-div">
    <nav id="g-nav" class="span-24 center">
        <ul id="g-nav-ul" class="ul-horizontal">
            <?php foreach (cr_nav_menu__item_list('header') as $item): ?>
            <li>
                <a href="<?= $item->url ?>" target="<?= $item->target ?>">
                    <?= $item->title ?>
                </a>
            </li>
            <?php endforeach ?>
        </ul>
    </nav>
</div>
