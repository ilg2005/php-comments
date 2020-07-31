<?php
require_once 'functions.php';
require_once 'connect.php';

$pageTitle = 'Chimmed - Orders';

$formerOrdersSQL = "SELECT * FROM orders ORDER BY date DESC";

$stm = $pdo->query($formerOrdersSQL);
$results = $stm->fetchAll(PDO::FETCH_ASSOC);

$mainContent = includeTemplate('index.php', [
    'results' => $results,
]);

$layout = includeTemplate('layout.php', [
    'pageTitle' => $pageTitle,
    'mainContent' => $mainContent
]);

print($layout);
