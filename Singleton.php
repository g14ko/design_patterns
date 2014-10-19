<?php
/**
 * User: j3nya
 * Date: 19.10.14
 * Time: 14:28
 */

class Singleton
{

    private static $instance;
    /**
     * Возвращает экземляр объекта данного класса.
     *
     * @return Singleton Объект данного класса.
     */
    public static function getInstance()
    {
        if (!self::$instance) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    /**
     * Запрещаем создание объекта вне класса
     */
    protected function __construct()
    {
    }

    /**
     * Запрещаем клонирование объекта
     *
     * @return void
     */
    private function __clone()
    {
    }

    /**
     * Запрещаем десериализацию объекта
     *
     * @return void
     */
    private function __wakeup()
    {
    }

}