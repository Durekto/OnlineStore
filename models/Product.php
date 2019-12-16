<?php

class Product
{
    public static function get_products()
    {
        $database = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
        if (!$database) {
            echo "Ошибка: Невозможно установить соединение с MySQL." . PHP_EOL;
            echo "Код ошибки errno: " . mysqli_connect_errno() . PHP_EOL;
            echo "Текст ошибки error: " . mysqli_connect_error() . PHP_EOL;
            exit;
        }

        $result = $database->query("SELECT * FROM products");
        $products = $result->fetch_all(MYSQLI_ASSOC);

        mysqli_close($database);

        return $products;
    }
}