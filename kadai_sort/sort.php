<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>kadai_011</title>
</head>

<body>
    <p>
        <?php
            function sort_2way($array, $order) {
                if($order) {
                    echo '昇順にソートします。<br>';
                    sort($array);
                } else {
                    echo '降順にソートします。<br>';
                    rsort($array);
                }
                foreach ($array as $num) {
                    echo $num . '<br>';
                }
            }

            $nums = [15, 4, 18, 23, 10];
            sort_2way($nums, true);
            sort_2way($nums, false);
        ?>
    </p>
</body>
</html>
