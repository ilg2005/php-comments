<?php

try {
    $pdo = new PDO('mysql:host=localhost;dbname=chimmed', 'root', '');
} catch (PDOException $e) {
    echo 'Произошла ошибка соединения с базой данных!<br>';
    echo $e->getMessage();
    exit();
}
