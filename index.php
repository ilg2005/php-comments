<?php
require_once 'functions.php';
require_once 'connect.php';

const DELAY = 1;
$name = '';
$comment = '';

$formerCommentsSQL = "SELECT * FROM comments ORDER BY date DESC";

$stm = $pdo->query($formerCommentsSQL);
$results = $stm->fetchAll(PDO::FETCH_ASSOC);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = checkUserInput($_POST['name']);
    $comment = checkUserInput($_POST['comment-text']);

    insertData2DB($pdo, $name, $comment);
    sleep(DELAY);
    header("Refresh: 0");
}

$mainContent = includeTemplate('index.php', [
    'results' => $results,
]);


$layout = includeTemplate('layout.php', [
    'pageTitle' => $pageTitle,
    'mainContent' => $mainContent
]);

print($layout);
