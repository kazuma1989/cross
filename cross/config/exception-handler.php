<?php

declare(strict_types=1);

set_exception_handler(function (Throwable $error) {
    // エラー情報を画面ではなくスクリプトコンソールに出力する
    // 開発者ツールを開くと確認できる
    echo <<<EOT
        <!-- "><!-- '><!-- -->
        <script>
            console.error(`{$error}`);
        </script>
EOT;
});
