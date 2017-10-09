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
            <?php foreach (cr_nav_menu__item_list('icon-nav') as $item): ?>
            <li>
                <a href="<?= $item->url ?>" target="<?= $item->target ?>">
                        <i class="<?= $item->css_class ?>" aria-hidden="true"></i>
                        <?= $item->title ?>
                    </a>
            </li>
            <?php endforeach ?>
<!-- 
            <li                         ><a href="/recruitment" ><span class="icomoon-quill"></span> 学生・研究員の方へ</a></li>
            <li style="margin-right: 0" ><a href="/contact"     ><span class="icomoon-phone"></span> 連絡先／アクセス</a></li> -->
        </ul>
    </nav>
</div>

<!-- ヘッダーメニュー -->
<div id="g-nav-div">
    <nav id="g-nav" class="span-24 center">
        <ul id="g-nav-ul" class="ul-horizontal">
            <!-- <?php foreach (cr_nav_menu__item_list('header') as $item): ?>
            <li>
                <a href="<?= $item->url ?>" target="<?= $item->target ?>">
                    <?php if ($item->css_class): ?>
                    <i class="<?= $item->css_class ?>" aria-hidden="true"></i>
                    <?php else: ?>
                    <?= $item->title ?>
                    <?php endif ?>
                </a>
            </li>
            <?php endforeach ?> -->

            <li><a href="/"                                                         ><span class="icomoon-home"></span> <span style="display: none">トップページ</span></a></li>
            <li><a href="/about/"           data-selected-if-match="^/about/"       >研究室紹介</a></li>
            <li><a href="/research/"        data-selected-if-match="^/research/"    >研究テーマ</a></li>
            <li><a href="/publications/"    data-selected-if-match="^/publications/">業績・著書</a></li>
            <li><a href="/members/"         data-selected-if-match="^/members/"     >メンバー</a></li>
            <li><a href="/album/"           data-selected-if-match="^/album/"       >アルバム</a></li>
            <li><a href="/lecture/"         data-selected-if-match="^/lecture/"     >講義資料</a></li>
        </ul>
    </nav>
</div>