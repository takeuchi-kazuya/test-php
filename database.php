<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<?php

    // require_once('data.php');

    $dsn = 'mysql:dbname='.$dbName.';host='.$host.';charset=utf8';
    $user = 'ユーザー';
    $password = 'パスワード';

    if(isset($_POST['db'])):
        
        $name    = $_POST['name'];
        $comment = $_POST['comment'];

        $name    = htmlspecialchars($name, ENT_QUOTES);
        $comment = htmlspecialchars($comment, ENT_QUOTES);

        if($name !== '' && $comment !== ''):

            $dbh = new PDO($dsn, $user, $password);
            $dbh -> setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
            $dbh -> query('SET NAMES utf8');

            $sql = 'INSERT INTO items (name, comment, state) VALUES (?, ?, 1)';
            $stmt = $dbh -> prepare($sql);

            $stmt -> bindValue(1, $name, PDO::PARAM_STR);
            $stmt -> bindValue(2, $comment, PDO::PARAM_STR);

            $stmt -> execute();

            $dbh = null;

        endif;

    endif;

?>
</body>
</html>
