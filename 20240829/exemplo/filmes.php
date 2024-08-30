<?php
session_start();

if (!isset($_SESSION["user"])) {
    header('Location: login.php');
    exit;
}

$sinopses = [
    'Filme 1' => 'Sinopse do Filme 1: Uma história emocionante sobre...',
    'Filme 2' => 'Sinopse do Filme 2: Uma aventura épica que leva você a...',
    'Filme 3' => 'Sinopse do Filme 3: Uma comédia divertida sobre...'
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>Sinopses de Filmes</h2>
    <ul>
        <?php foreach ($sinopses as $titulo => $sinopse): ?>
            <li>
                <strong><?php echo htmlspecialchars($titulo); ?></strong>: <?php echo htmlspecialchars($sinopse); ?>
            </li>
        <?php endforeach; ?>
    </ul>
    <a href="logout.php">Sair</a>
</body>

</html>