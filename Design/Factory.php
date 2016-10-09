<?php
namespace Design;

/**
 * 工厂模式
 * 工厂类
 */
class Factory
{

    public static function craeteDatabase()
    {
        $db = Database::getInstace();
        return $db;
    }
}
