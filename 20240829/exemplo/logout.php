<?php
session_start();

session_unset();

session_destroy();

if (isset($_COOKIE['user'])) {
    $obj = json_decode($_COOKIE['user']);
    $obj->is_logged = false;
    setcookie('user', json_encode($obj), time() + 120);
}

header('Location: login.php');
exit;