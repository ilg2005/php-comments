<?php
require_once 'functions.php';
require_once 'connect.php';

if (isset($_POST['name'], $_POST['email'])) {
    $name = cleanUserInput($_POST['name']);
    $email = cleanUserInput($_POST['email']);
} else {
    echo json_encode(['success' => false, 'message' => 'Не заполнены обязательные поля !']);
    die();
}

if (execute($pdo, 'SELECT COUNT(*) from `orders` WHERE `email` = ?', [$email])->fetchColumn()) {
    echo json_encode(['success' => false, 'message' => 'Пользователь с таким email уже существует !']);
    die();
}

if (isset($_POST['tel'])) {
    $tel = cleanUserInput($_POST['tel']);

    if ($tel && execute($pdo, 'SELECT COUNT(*) from `orders` WHERE `tel` = ?', [$tel])->fetchColumn()) {
        echo json_encode(['success' => false, 'message' => 'Пользователь с таким телефоном уже существует !']);
        die();
    }
}

if (isset($_POST['comment'])) {
    $comment = cleanUserInput($_POST['comment']);
}

execute($pdo, 'INSERT INTO orders (name,  email, tel, comment) VALUES (?, ?, ?, ?)', [$name, $email, $tel, $comment]);
echo json_encode(['success' => true, 'message' => 'Заявка успешно отправлена!']);
