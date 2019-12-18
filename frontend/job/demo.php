<?php

namespace frontend\job;

class demo extends \yii\base\BaseObject implements \yii\queue\JobInterface
{
    public $name;

    public $mobile;

    public function execute($queue)
    {
        echo '手机号'.$this->mobile;
        echo PHP_EOL;
        var_dump($this->name);

    }
}