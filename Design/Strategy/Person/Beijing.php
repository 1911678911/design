<?php
namespace Design\Strategy\Person;

use Design\Strategy;

class Beijing
{
    private $_flyStrategy;
    public function preFly()
    {
        $this->_flyStrategy->showad();
    }

    public function setFlyStrategy(Strategy $strategy)
    {
        $this->_flyStrategy = $strategy;
    }
}
