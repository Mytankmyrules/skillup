<?php

$user = $_POST['username'] ?? null;
$comment = $_POST['comment'] ?? null;

echo $user . '<hr>';
echo $comment . '<hr>';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<a class="btn btn-sm btn-danger"
    href="http://2607.local:2607/index.php">Ссылка</a>
</body>
</html>