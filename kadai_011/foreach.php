<!doctype html>
<html lang="ja">
    <head>
        <meta charset ="utf-8">
        <title>kadai_011</title>
    </head>
    <body>
        <p>
            <?php
            $all =['名前' => '玉ねぎ','値' => 200,'産地' => '北海道'];
            foreach ($all as $key => $value) {
                echo "{$key}:{$value}<br>";
            }
            ?>
        </p>
    </body>
</html>