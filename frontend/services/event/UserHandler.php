<?php


namespace frontend\service\event;


use yii\base\Component;

class UserHandler extends Component
{
    private string $event_name = 'user';

    //事件处理器
    public function init()
    {
        //parent::init();
        $event = new \frontend\service\event\UserEvent();
        $this->on($this->event_name,[$event,'user_save'],'data');

    }

    //触发事件
    public function send(array $user)
    {
        $event = new \frontend\service\event\UserEvent();
        $event->user = $user;
        $this->trigger($this->event_name,$event);
    }
}