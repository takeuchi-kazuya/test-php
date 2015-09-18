<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<?php

    if(isset($_POST['csv'])):

        $name = $_POST['name'];
        $comment = $_POST['comment'];

        $array = array($name, $comment);
        $handle = fopen('data.csv','a');

        if (flock($handle, LOCK_EX)):

            fputcsv($handle, $array);
            flock($handle, LOCK_UN);

?>
            <p>保存しました。<a href="input.php">再入力</a></p>
<?php

        else: // ファイル取得できない場合

?>
            <p>ファイルを取得できませんでした。<a href="input.php">再入力</a></p>
<?php

        endif;
        fclose($handle);

    endif;

?>
</body>
</html>
