<?php
namespace Design\Database;

use Design\Idatabase;

class Pdo implements Idatabase
{

    protected $conn;

    public function connect($host, $user, $password, $dbname)
    {
        $dsn = "mysql:host=$host;dbname=$dbname";
        $this->conn = new \PDO($dsn, $user, $password);
    }

    public function query($sql)
    {
        $res = $this->conn->query($sql);
        return $res;
    }

    public function close()
    {
        unset($this->conn);
    }
}
