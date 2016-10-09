<?php
/**
 * 命名空间与文件路径名一致
 * 所有php文件自动载入
 */
define("BASEDIR", __DIR__);
include BASEDIR . '/Design/Loader.php';
spl_autoload_register("\\Design\\Loader::autolaoder");

//开启工厂
$db = \Design\Factory::craeteDatabase();
//开启注册
\Design\Register::set('db', $db);

var_dump(\Design\Register::get('db'));

/*
$person = new \Design\Strategy\Person\Beijing\Haidian();
$person->setFlyStrategy(new \Design\Strategy\MaleUserStrategy());
$person->preFly();
 */

/*
$user = new \Design\User(1);
$user->name = 'zhangfei';
$user->mobile = '160';
$user->regtime = 'time';
 */
