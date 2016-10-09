<?php //psr1  源文件必须只使用 <?php 和 <?= 这两种标签。源文件必须只使用 <?php 和 <?= 这两种标签。
//一个源文件建议只用来做声明（类(class)，函数(function)，常量(constant)等）或者只用来做一些引起副作用的操作（例如：输出信息，修改.ini配置等）,但不建议同时做这两件事。
namespace Design;

class Database
{

    protected static $instance;
    private $db;

    private function __construct()
    {
        $db = new \Design\Database\Pdo;
        $db->connect('127.0.0.1', 'root', '', 'test');
        $this->db = $db;
    }

    private function __clone()
    {}

    public static function getInstace()
    {
        if (self::$instance) {
            return self::$instance;
        } else {
            self::$instance = new self;
            return self::$instance;
        }
    }

    public function getDb()
    {
        return $this->db;
    }

    public function where($where)
    {
        return $this;
    }

    public function order()
    {
        return $this;
    }

    public function limit()
    {
        return $this;
    }
}
