<?php
require_once 'functions.php';
require_once 'connect.php';

$pageTitle = 'M-Company - Orders';

$results = getExistingData($pdo);

$mainContent = includeTemplate('index.php', [
    'results' => $results,
]);

$layout = includeTemplate('layout.php', [
    'pageTitle' => $pageTitle,
    'mainContent' => $mainContent
]);

print($layout);
