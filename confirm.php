<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<?php

    $name = $_POST['name'];
    $comment = $_POST['comment'];

    // ENT_COMPAT      ダブルクォートは置き換えるが、シングルクォートは置き換えない
    // ENT_QUOTES      両方置き換える
    // ENT_NOQUOTES    両方置き換えない
    $escape_name = htmlspecialchars($name);
    $escape_comment = htmlspecialchars($comment);

    // 改行コード反映
    $escape_name = nl2br($escape_name);
    $escape_comment = nl2br($escape_comment);

?>
    <dl>
        <dt>名前</dt>
        <dd><?php echo $escape_name; ?></dd>
    </dl>
    <dl>
        <dt>コメント</dt>
        <dd><?php echo $escape_comment; ?></dd>
    </dl>

    <form action ="setcsv.php" method="post">
        <input type="hidden" name="name" value="<?php echo $name; ?>">
        <input type="hidden" name="comment" value="<?php echo $comment; ?>">
        <input type="submit" name="csv" value="CSVで保存">
    </form>

    <form action="send.php" method="post">
        <input type="hidden" name="name" value="<?php echo $name; ?>">
        <input type="hidden" name="comment" value="<?php echo $comment; ?>">
        <input type="submit" name="mail" value="メール送信">
    </form>

    <form action="database.php" method="post">
        <input type="hidden" name="name" value="<?php echo $name; ?>">
        <input type="hidden" name="comment" value="<?php echo $comment; ?>">
        <input type="submit" name="db" value="データベース送信">
    </form>
</body>
</html>
