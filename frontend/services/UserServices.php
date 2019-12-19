<?php

namespace frontend\services;

use common\models\User;

class UserServices
{
    public function index($offset, $limit)
    {
        $user = new User();
        // 查询总数
        $count = $user->find()->count();
        $data['count'] = $count;
        $list = $user->find()->offset($offset)->limit($limit)->asArray()->all();
        $data['items'] = $list;

        return $data;
    }
}