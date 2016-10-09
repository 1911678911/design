<?php
namespace Design\Strategy;

use Design\Strategy;

class FemaleUserStrategy implements Strategy
{
    public function showad()
    {
        echo 'femaleUserStrategy' . 'showad';
    }

    public function showCategory()
    {
        echo 'femaleUserStrategy' . 'showCategory';
    }
}
