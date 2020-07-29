<?php

$pageTitle = 'Future - Comments';

/**
 * Подключает файлы шаблонов
 *
 * @param $name -- имя файла шаблона, включающее путь к файлу
 * @param array $data -- массив используемых в шаблоне переменных
 *
 * @return false|string -- строка содержимого буфера вывода или false
 */

function includeTemplate($name, $data)
{
    $name = __DIR__ . DIRECTORY_SEPARATOR . 'templates' . DIRECTORY_SEPARATOR . $name;
    $result = '';

    if (!is_readable($name)) {
        return $result;
    }

    ob_start();
    extract($data, EXTR_OVERWRITE);
    require $name;

    return ob_get_clean();
}

/**
 * Вставляет данные в базу данных
 *
 * @param $connection -- соединение с базой данных
 * @param $userName -- имя пользователя
 * @param $userComment -- комментарий пользователя
 */
function insertData2DB($connection, $userName, $userComment) {
    $insertSQL = 'INSERT INTO comments (name, comment) VALUES (?, ?)';

    try {
        $stm = $connection->prepare($insertSQL);
        $stm->execute([$userName, $userComment]);
    } catch (PDOException $err) {
        printf("Ошибка выполнения запроса: %s.\n", $err->getMessage());
        exit();
    }
}

/**
 * Очищает пользовательский ввод
 *
 * @param $value -- значение поля ввода
 * @return string -- очищенное значение поля ввода
 */
function checkUserInput($value) {
    return trim(strip_tags($value));
}

