<?php
namespace Design;

/**
 * 注册器模式
 * 注册器类
 */
class Register
{

    protected static $objects = [];

    public function set($key, $value)
    {
        self::$objects[$key] = $value;
    }

    public function get($key)
    {
        return self::$objects[$key];
    }

    public function _unset($key)
    {
        unset(self::$objects[$key]);
    }
}
