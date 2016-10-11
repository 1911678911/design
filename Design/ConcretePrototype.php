<?php
namespace Design;

use Design\Protype\Protype;
use Design\Protype\Telecontrol;

/**
 * 原型模式
 */
class ConcretePrototype implements Protype
{
    private $state = '';
    public function __construct($state)
    {
        $this->state = $state;
        $this->setControl(new Telecontrol());
    }
    public function getState()
    {
        return $this->state;
    }

    public function setState($state)
    {
        $this->state = $state;
    }

    public function copy()
    {
        //return clone $this;

        //深copy

        $tmp = serialize($this);
        $tmp = unserialize($tmp);
        return $tmp;
    }

    /**
     * 遥控器对象
     */
    protected $_control = null;

    /**
     * 设置遥控器对象
     */
    public function setControl(Telecontrol $control)
    {
        $this->_control = $control;
        return $this;
    }

    /**
     * 返回遥控器对象
     */
    public function getControl()
    {
        return $this->_control;
    }
}
