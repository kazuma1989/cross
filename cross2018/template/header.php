<!-- ヘッダーメニュー -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="<?= home_url('/') ?>">吉田・秋元 研究室</a>

        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarResponsive">
            <div class="navbar-nav ml-auto">
                <?php foreach (cr_nav_menu__item_list('header') as $item): ?>
                <a class="nav-item nav-link" href="<?= $item->url ?>" target="<?= $item->target ?>">
                    <?= $item->title ?>
                </a>
                <?php endforeach ?>
            </div>
        </div>
    </div>
</nav>

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
            <?php cr_nav_menu('upper-right') ?>
            <!-- 
            <li                         ><a href="/recruitment" ><span class="icomoon-quill"></span> 学生・研究員の方へ</a></li>
            <li style="margin-right: 0" ><a href="/contact"     ><span class="icomoon-phone"></span> 連絡先／アクセス</a></li> -->
        </ul>
    </nav>
</div>
