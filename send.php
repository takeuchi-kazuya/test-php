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
    $body = $name.PHP_EOL.$comment;

    // $name    = htmlspecialchars($name, ENT_QUOTES);
    // $comment = htmlspecialchars($comment, ENT_QUOTES);

    // メールアドレス
    $fromAddress = 'example@test.com';
    $toAddress   = 'takeuchi@tam-tam.co.jp';

    mb_language('Japanese');
    mb_internal_encoding('UTF-8');

    // 件名
    $header = 'From: <' . $fromAddress . '>';

    // 送信
    $result = mb_send_mail($toAddress, $header, $body);

    if ($result){

        echo '送信しました'; 

    } else{

        echo '送信しませんでした'; 

    }  

?>
</body>
</html>
