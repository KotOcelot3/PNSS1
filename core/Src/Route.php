<?php

namespace Src;

use Error;

class Route
{
    private static array $routes = []; // массив содержащий все маршруты
    private static string $prefix = '';

    public static function setPrefix($value)
    {
        self::$prefix = $value;
    }

    public static function add(string $route, array $action): void // метод для добавления маршрута
    {
        if (!array_key_exists($route, self::$routes)) {
            self::$routes[$route] = $action;
        }
    }

    public function start(): void // опоставляет текущий маршрут с маршрутами в массиве routes и если совпадение найдено,
        // то пытается вызвать действие соответствующего класса.

    {
        $path = explode('?', $_SERVER['REQUEST_URI'])[0];
        $path = substr($path, strlen(self::$prefix) + 1);

        if (!array_key_exists($path, self::$routes)) {
            throw new Error( 'This path does not exist');
        }

        $class = self::$routes[$path][0];
        $action = self::$routes[$path][1];

        if (!class_exists($class)) {
            throw new Error('This class does not exist');
        }

        if (!method_exists($class, $action)) {
            throw new Error('This method does not exist');
        }


        call_user_func([new $class, $action]);
    }
}
