<?php
require_once 'functions.php';
require_once 'connect.php';

if (!isset($_POST['name'], $_POST['email'])) {
    exit('mandatory fields empty');
}

$name = cleanUserInput($_POST['name']);
$email = cleanUserInput($_POST['email']);

if (execute($pdo, 'SELECT COUNT(*) from `orders` WHERE `email` = ?', [$email])->fetchColumn()) {
    exit('email exists');
}

if (isset($_POST['tel'])) {
    $tel = cleanUserInput($_POST['tel']);

    if ($tel && execute($pdo, 'SELECT COUNT(*) from `orders` WHERE `tel` = ?', [$tel])->fetchColumn()) {
        exit('telephone exists');
    }
}

if (isset($_POST['comment'])) {
    $comment = cleanUserInput($_POST['comment']);
}

execute($pdo, 'INSERT INTO orders (name,  email, tel, comment) VALUES (?, ?, ?, ?)', [$name, $email, $tel, $comment]);
exit('ok');
