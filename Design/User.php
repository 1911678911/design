<?php
namespace Design;

class User
{
    public $id;
    public $name;
    public $mobile;
    public $regtime;
    private $conn;

    public function __construct($id)
    {

        $this->conn = \Design\Register::get('db')->getDb('db');
        $res = $this->conn->query('SELECT * FROM user WHERE id = ' . $id . ' limit 1');
        $res->setFetchMode(\PDO::FETCH_ASSOC);
        $data = $res->fetch();
        //把取出来的数据存储起来
        $this->id = $data['id'];
        $this->name = $data['name'];
        $this->mobile = $data['mobile'];
        $this->regtime = $data['regtime'];
    }

    public function __destruct()
    {
        $this->conn->query("UPDATE user set name = '{$this->name}' , mobile = '{$this->mobile}', regtime = '{$this->regtime}' where id = '{$this->id}'");
    }
}
