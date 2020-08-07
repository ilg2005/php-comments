<?php
require_once 'functions.php';
require_once 'connect.php';

if (!isset($_POST['name'], $_POST['email'])) {
    exit('mandatory fields empty');
}

$name = cleanUserInput($_POST['name']);
$email = cleanUserInput($_POST['email']);

if (countRecords($pdo, 'email', $email)) {
    exit('email exists');
}

if (isset($_POST['tel'])) {
    $tel = cleanUserInput($_POST['tel']);

    if ($tel && countRecords($pdo, 'tel', $tel)) {
        exit('telephone exists');
    }
}

if (isset($_POST['comment'])) {
    $comment = cleanUserInput($_POST['comment']);
}

insertData2DB($pdo, $name, $email, $tel, $comment);
exit('ok');
