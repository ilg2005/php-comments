<?php

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
 * @param $userTel -- телефон пользователя
 * @param $userEmail -- email пользователя
 * @param $userComment -- комментарий пользователя
 */
function insertData2DB($connection, $userName, $userEmail, $userTel = '', $userComment = '')
{
    $insertSQL = 'INSERT INTO orders (name,  email, tel, comment) VALUES (?, ?, ?, ?)';

    try {
        $stm = $connection->prepare($insertSQL);
        $stm->execute([$userName, $userEmail, $userTel, $userComment]);
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
function cleanUserInput($value)
{
    return trim(strip_tags($value));
}

/**
 * Получает все значения поля из БД
 *
 * @param $connection -- соединение с базой данных
 * @param $fieldName -- имя поля базы данных
 * @return mixed -- значения поля из базы данных
 */
function getArrayFromDatabase($connection, $fieldName)
{
    $selectionSQL = "SELECT $fieldName from orders";

    try {
        $stm = $connection->query($selectionSQL);
        return $stm->fetchAll(PDO::FETCH_COLUMN);
    } catch (PDOException $err) {
        printf("Ошибка выполнения запроса: %s.\n", $err->getMessage());
        exit();
    }
}
