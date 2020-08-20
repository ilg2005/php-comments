<?php
require_once 'connect.php';
require_once 'functions.php';

$path2Data = __DIR__ . DIRECTORY_SEPARATOR . 'data' . DIRECTORY_SEPARATOR . 'mock-data.txt';
$content = file($path2Data);
$linesNumber = count($content);

foreach ($content as $key => $value) {
    [$name, $email, $tel, $comment] = explode("\t", $value);
    execute($pdo, 'INSERT INTO orders (name, tel, email, comment) VALUES (?, ?, ?, ?)', [$name, $tel, $email, $comment]);
}
echo 'Загрузка завершена!';
