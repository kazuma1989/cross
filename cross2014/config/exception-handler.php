<?php

declare(strict_types=1);

set_exception_handler(function (Throwable $error) {
    echo <<<EOT
        <!-- "><!-- '><!-- -->
        <script>
        console.error(`{$error}`);
        </script>
EOT;
});
