<?php
namespace Design\Proxy;

interface User
{
    function getName($id);
    function setName($id, $name);
}
