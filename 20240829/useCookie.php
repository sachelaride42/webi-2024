<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        if(isset($_COOKIE['nome'])){
            $cookie = json_decode($_COOKIE['nome']);
            $nome = $cookie->nome;
        }
    ?>
    <h1><?= isset($nome) ? $nome : 'Cookie não setado ou expirado.' ?></h1>
</body>
</html>