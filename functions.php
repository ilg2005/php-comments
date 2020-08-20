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
 * Выполняет запрос в базу данных
 *
 * @param $connection -- соединение с базой данных
 * @param $sql  -- запрос в БД
 * @param $params -- массив параметров переменных для запроса
 * @return mixed -- объект PDO statement
 */
function execute($connection, $sql, $params = []) {
    try {
    $stm = $connection->prepare($sql);
    $stm->execute($params);
    return $stm;
    } catch (PDOException $err) {
        printf("Ошибка выполнения запроса: %s.\n", $err->getMessage());
        exit();
    }
}

/**
 * Получает из базы существующие данные для вывода на страницу
 *
 * @param $connection -- соединение с базой данных
 * @return mixed - записи БД
 */
function getExistingData($connection) {
    $formerOrdersSQL = "SELECT * FROM orders ORDER BY date DESC";
    $stm = execute($connection, $formerOrdersSQL);
    return $stm->fetchAll(PDO::FETCH_ASSOC);
}
