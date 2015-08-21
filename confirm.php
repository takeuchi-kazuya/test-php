<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <p><?php echo htmlspecialchars($_POST['name']); ?></p>
    <p><?php echo htmlspecialchars($_POST['comment']);?></p>
</body>
</html>
