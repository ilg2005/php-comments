<?php
require_once 'functions.php';
require_once 'connect.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $comment = $_POST['comment'];



    // Сортируем массив результатов по убыванию значений - числа повторов
    arsort($resultLines);
    // Получаем ключи этого массива - id строк
    $resultLines = array_keys($resultLines);

    // Обрезаем массив для ускорения обработки
    $resultLines = array_slice($resultLines, 0, $linesToShow);

    // Превращаем массив в строку
    $comma_separated = trim(implode(', ', array_fill(0, count($resultLines), '?')), ',');

    // Формируем и отправляем запрос в БД на получение записей с нужными id
    $searchResultLinesSQL = "SELECT * FROM bitext WHERE id IN ($comma_separated)";

    if ($_POST['select'] !== 'All') {
        $filename = $_POST['select'];
        $searchResultLinesSQL = "SELECT * FROM bitext WHERE filename = '$filename' AND MATCH($source) AGAINST('$searchTextRaw') LIMIT 100";
    }

    $stm = $pdo->prepare($searchResultLinesSQL);
    $stm->execute($resultLines);
    $results = $stm->fetchAll(PDO::FETCH_ASSOC);



// Сортируем массив по убыванию match-совпадений
    usort($results, 'cmp');
}

// Передаем данные в шаблон для отрисовки
$mainContent = includeTemplate('index.php', [

]);


$layout = includeTemplate('layout.php', [
    'pageTitle' => $pageTitle,
    'mainContent' => $mainContent
]);

print($layout);
echo '';
