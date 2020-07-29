<?php
require_once 'functions.php';
require_once 'connect.php';

const DELAY = 1;
$name = '';
$comment = '';
$errorMsg = '';

$formerCommentsSQL = "SELECT * FROM comments ORDER BY date DESC";

$stm = $pdo->query($formerCommentsSQL);
$results = $stm->fetchAll(PDO::FETCH_ASSOC);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = checkUserInput($_POST['name']);
    $comment = checkUserInput($_POST['comment-text']);

    if ($name && $comment) {

        insertData2DB($pdo, $name, $comment);
        sleep(DELAY);
        header("Refresh: 0");
    } else {
        $errorMsg = 'Поля ввода должны быть заполнены!';
    }
}

$mainContent = includeTemplate('index.php', [
    'results' => $results,
    'errorMsg' => $errorMsg
]);


$layout = includeTemplate('layout.php', [
    'pageTitle' => $pageTitle,
    'mainContent' => $mainContent
]);

print($layout);
