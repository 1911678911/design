<?php
namespace Design;

class Object
{
    protected $array = [];

    public function __set($key, $value)
    {
        $this->array[$key] = $value;
    }

    public function __get($params)
    {
        return $this->array[$key];
    }

    public function __call($funs, $params)
    {
        var_dump($params);
    }

    public static function __callStatic($funcs, $params)
    {
        var_dump($funcs);
    }

    public function __toString()
    {
        return 'tostring';
    }
}
