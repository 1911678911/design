<?php
namespace Design\Database;

use Design\Idatabase;

class Mysql implements Idatabase
{

    protected $conn;

    public function connect($host, $user, $password, $dbname)
    {
        $conn = \mysql_connect($host, $user, $password);
        \mysql_select_db($dbname);
        $this->conn = $conn;
    }

    public function query($sql)
    {
        $res = mysql_query($sql, $this->conn);
        return $res;
    }

    public function close()
    {
        mysql_close($this->conn);
    }
}
