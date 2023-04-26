<?php

namespace Src;

use Error;

class Route
{
    private static array $routes = [];
    //Массив доступных роутов в приложении
    private static string $prefix = '';


    public static function setPrefix($value)
    {
        self::$prefix = $value;
    }// Фукнция для установки этого свойства

    public static function add(string $route, array $action): void
    {
        if (!array_key_exists($route, self::$routes)) {
            self::$routes[$route] = $action;
        }
    } // Если не т в массике route, то она его добавляет

    public function start(): void
    {
        $path = explode('?', $_SERVER['REQUEST_URI'])[0];
        $path = substr($path, strlen(self::$prefix) + 1);
        // Берёт адресс который пришёл от клиента, разюивает его, если prefix, то некоторые
        // манипуляции производит
        if (!array_key_exists($path, self::$routes)) {
            throw new Error('This path does not exist');
        }// Удобно работать с исключениями, не нужно разбивать код из-за ошибок

        $class = self::$routes[$path][0];
        $action = self::$routes[$path][1];
        // Если иисключения не произшло, то выбирает название класса и метода
        if (!class_exists($class)) {
            throw new Error('This class does not exist');
        }

        if (!method_exists($class, $action)) {
            throw new Error('This method does not exist');
        }


        call_user_func([new $class, $action]);
    }// Всё хорошо, роут есть в массиве, запускает выполнение класс с таким названием
}
