<?php

class Authorization
{
    public static function get_user($login, $password)
    {
        $database = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
        if (!$database) {
            echo "Ошибка: Невозможно установить соединение с MySQL." . PHP_EOL;
            echo "Код ошибки errno: " . mysqli_connect_errno() . PHP_EOL;
            echo "Текст ошибки error: " . mysqli_connect_error() . PHP_EOL;
            exit;
        }

        $rows = $database->query("SELECT * FROM users WHERE `login`='" . $login . "' AND `password`='" . $password . "'");
        $result = $rows->fetch_all(MYSQLI_ASSOC);

        mysqli_close($database);

        return $result;
    }
}