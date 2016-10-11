<?php
namespace Design;

class ClientProtype
{
    public static function main()
    {
        $test = new \Design\Protype\Test;
        $test->array = array('1', '2', '3');
        $pro1 = new \Design\ConcretePrototype($test);
        echo '<pre>';
        var_dump($pro1);
        print_r($pro1);
        var_dump($pro1->getControl());
        echo '</pre>';
        $pro2 = $pro1->copy();
        echo '<pre>';
        var_dump($pro2);
        print_r($pro2);
        print_r($pro2->getState());
        var_dump($pro2->getControl());
        echo '</pre>';
    }
}
