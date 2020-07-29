<?php
require_once 'connect.php';
require_once 'functions.php';

$path2Data = __DIR__ . DIRECTORY_SEPARATOR . 'data' . DIRECTORY_SEPARATOR . 'mock-data.txt';
$content = file($path2Data);
$linesNumber = count($content);

foreach ($content as $key => $value) {
    [$name, $comment] = explode("\t", $value);
    insertData2DB($pdo, $name, $comment);
}
echo 'Загрузка завершена!';
