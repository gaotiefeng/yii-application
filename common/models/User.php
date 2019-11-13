<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "wx_user".
 *
 * @property int $id
 * @property string $openid
 * @property string $nickname
 * @property string $headimgurl
 * @property string $city
 * @property string $province
 * @property int $sex
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
        return 'wx_user';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['sex'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['openid', 'headimgurl'], 'string', 'max' => 64],
            [['nickname', 'city', 'province'], 'string', 'max' => 32],
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
            'nickname' => 'Nickname',
            'headimgurl' => 'Headimgurl',
            'city' => 'City',
            'province' => 'Province',
            'sex' => 'Sex',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
