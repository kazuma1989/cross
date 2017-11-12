<!DOCTYPE html>
<html <?php language_attributes() ?>>
<head>
    <!-- Required meta tags should come first -->
    <meta charset="<?php bloginfo('charset') ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- Title and optional meta tags -->
    <title>
        <?php wp_title(/* separator */'&laquo;', /* display */true, /* separator position */'right') ?>
        <?php bloginfo('title') ?>
    </title>

    <!-- Style sheet -->
    <link rel="stylesheet" href="<?= get_theme_file_uri('asset/css/normalize.css') ?>">
    <link rel="stylesheet" href="<?= get_theme_file_uri('asset/css/styles.css') ?>">
    <link rel="stylesheet" href="<?= get_theme_file_uri('asset/css/classes.css') ?>">
    <link rel="stylesheet" href="<?= get_theme_file_uri('style.css') ?>">

    <!-- jQuery first, then the original scrpit -->
    <script defer src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js" integrity="sha384-3ceskX3iaEnIogmQchP8opvBy3Mi7Ce34nWjpBIwVTHfGYWQS9jwHDVRnpKKHJg7" crossorigin="anonymous"></script>
    <script defer src="<?= get_theme_file_uri('asset/js/view-support.js') ?>"></script>

    <?php wp_head() ?>
</head>

<body <?php body_class() ?>>

    <header id="header">
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
    </header>

    <main id="main">
        <div id="body" class="row span-24 center">
