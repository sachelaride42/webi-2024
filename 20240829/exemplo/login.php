<?php
session_start();

if (isset($_SESSION["user"])) {
    header('Location: filmes.php');
    exit;
}

$users = [
    'felipe.perez' => 'perez',
    'felipe.pereirar' => 'pereira'
];

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $user = filter_input(INPUT_POST, "usuario", FILTER_SANITIZE_FULL_SPECIAL_CHARS) ?? '';
    $pass = filter_input(INPUT_POST, "senha", FILTER_SANITIZE_FULL_SPECIAL_CHARS) ?? '';

    if (isset($users[$user]) && $users[$user] === $pass) {
        $_SESSION['user'] = $user;

        if (isset($_POST['lembrar_me'])) {
            $arr = ['user' => $user, 'is_logged' => true];
            setcookie('user', json_encode($arr), time() + (86400 * 30));
        }

        header('Location: filmes.php');
        exit;
    }
}

$remember = '';
if (isset($_COOKIE['user'])) {
    $obj = json_decode($_COOKIE['user']);
    if ($obj->is_logged) {
        $_SESSION['user'] = $obj->user;

        header('Location: filmes.php');
        exit;
    }
    $remember = $obj->user;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Login</h1>
    <form method="post">
        <label for="usuario">Usuário:</label>
        <input type="text" id="usuario" name="usuario" value="<?= $remember ?>" required>
        <br>
        <label for="senha">Senha:</label>
        <input type="password" id="senha" name="senha" required>
        <br>
        <label>
            <input type="checkbox" name="lembrar_me"> Lembrar-me
        </label>
        <br>
        <input type="submit" value="Entrar">
    </form>
</body>

</html>