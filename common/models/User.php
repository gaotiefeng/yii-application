<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "user".
 *
 * @property int $id
 * @property string $openid
 * @property string $name
 * @property string $password
 * @property string $mobile
 * @property string $headimgurl
 * @property string $nickname
 * @property string $created_at
 * @property string $updated_at
 */
class User extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['created_at', 'updated_at'], 'safe'],
            [['openid', 'name', 'password', 'headimgurl'], 'string', 'max' => 64],
            [['mobile'], 'string', 'max' => 11],
            [['nickname'], 'string', 'max' => 32],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'openid' => 'Openid',
            'name' => 'Name',
            'password' => 'Password',
            'mobile' => 'Mobile',
            'headimgurl' => 'Headimgurl',
            'nickname' => 'Nickname',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
