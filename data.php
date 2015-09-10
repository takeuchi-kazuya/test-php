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
