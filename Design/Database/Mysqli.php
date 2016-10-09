<?php
namespace Design\Database;

use Design\Idatabase;

class Mysqli implements Idatabase
{

    protected $conn;

    public function connect($host, $user, $password, $dbname)
    {
        $conn = \mysqli_connect($host, $user, $password, $dbname);
        $this->conn = $conn;
    }

    public function query($sql)
    {
        $res = mysqli_query($this->conn, $sql);
        return $res;
    }

    public function close()
    {
        mysqli_close($this->conn);
    }
}
