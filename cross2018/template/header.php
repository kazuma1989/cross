<!-- ヘッダーメニュー -->
<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="<?= home_url('/') ?>">吉田・秋元 研究室</a>

        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive"
            aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
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