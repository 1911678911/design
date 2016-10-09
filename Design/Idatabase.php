<?php
namespace Design;

interface Idatabase
{
    function connect($host, $user, $password, $dbname);
    function query($sql);
    function close();
}
