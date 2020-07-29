<?php
require_once 'connect.php';

$path2Data = __DIR__ . DIRECTORY_SEPARATOR . 'data' . DIRECTORY_SEPARATOR . 'mock-data.txt';
$content = file($path2Data);
$linesNumber = count($content);

foreach ($content as $key => $value) {
    [$name, $comment] = explode("\t", $value);
    $insertSQL = 'INSERT INTO comments (name, comment) VALUES (?, ?)';

    try {
        $stm = $pdo->prepare($insertSQL);
        $stm->execute([$name, $comment]);
    } catch (PDOException $err) {
        printf("Ошибка выполнения запроса: %s.\n", $err->getMessage());
        exit();
    }
}
echo 'Загрузка завершена!';
