<?php
namespace Design;

/**
 * 事件发生者（被观察者）
 */
abstract class EventGenerator
{
    private $observers;
    public function addObserver(Observer $observer)
    {
        $this->observers[] = $observer;
    }
    public function notify()
    {
        foreach ($this->observers as $key => $observer) {
            $observer->update();
        }
    }
}
