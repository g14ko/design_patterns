<?php
/**
 * User: Eugene Gichko
 * Date: 19.10.14
 * Time: 17:52
 */

class Automobile
{
    private $brand;

    public function __construct($brand)
    {
        $this->brand = $brand;
    }

    public function getBrand()
    {
        return $this->brand;
    }
}

class Opel extends Automobile
{
    public function getModel()
    {
        return __CLASS__;
    }
}

class Ford extends Automobile
{
    public function getModel()
    {
        return __CLASS__;
    }
}

class AutomobileFactory
{
    public static function create($model, $brand)
    {
        if (!class_exists($model)) {
            throw new Exception('Class not found');
        }
        return new $model($brand);
    }
}