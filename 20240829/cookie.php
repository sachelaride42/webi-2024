<?php
$arr = ['nome' => "WEI", 'chaves' => [1, 2, 3, 4, 5, 6]];
setcookie("nome", json_encode($arr), time() + 60);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Cookie setado com sucesso!</h1>
</body>

</html>