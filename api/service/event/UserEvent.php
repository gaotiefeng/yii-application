<?php

namespace api\service\event;

use yii\base\Event;

class UserEvent extends Event
{
    public array $user;

    /**
     * 事件操作
     * 更新user
     * @param $event
     */
    public function user_save($event)
    {
        print_r($event->data);
        print_r($event->user);
        die;
    }
}