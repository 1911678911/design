<?php
namespace Design;

class AllUserLterator implements \Iterator
{

    private $index;
    private $ids;
    private $data = array();
    public function __construct()
    {
        $conn = \Design\Register::get('db')->getDb('db');
        $res = $conn->query('SELECT id FROM user');
        $res->setFetchMode(\PDO::FETCH_ASSOC);
        $data = $res->fetchAll();
        $this->ids = $data;
    }
    public function current()
    {
        $id = $this->ids[$this->index]['id'];
        $user = new \Design\User($id);
        return $user;
    }

    public function next()
    {
        $this->index++;
    }

    public function valid()
    {
        return $this->index < count($this->ids);
    }

    public function rewind()
    {
        $this->index = 0;

    }
    public function key()
    {
        return $this->index;
    }
}
