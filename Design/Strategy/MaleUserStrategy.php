<?php
namespace Design\Strategy;

use Design\Strategy;

class MaleUserStrategy implements Strategy
{
    public function showad()
    {
        echo 'maleUserStrategy' . 'showad';
    }

    public function showCategory()
    {
        echo 'maleUserStrategy' . 'showCategory';
    }
}
