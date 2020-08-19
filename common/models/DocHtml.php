<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "px_doc_html".
 *
 * @property int $id id
 * @property string $title 名称
 * @property string $dec 简要描述
 * @property string $url 地址
 * @property string $method 请求方式
 * @property string $request_params 请求参数
 * @property string $return_example 返回示例
 * @property string $reponse_params 返回参数
 * @property string|null $created_at 创建时间
 * @property int $group_id 分组id
 */
class DocHtml extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'px_doc_html';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['created_at'], 'safe'],
            [['group_id'], 'required'],
            [['group_id'], 'integer'],
            [['title'], 'string', 'max' => 64],
            [['dec', 'url', 'request_params', 'return_example', 'reponse_params'], 'string', 'max' => 255],
            [['method'], 'string', 'max' => 32],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'dec' => 'Dec',
            'url' => 'Url',
            'method' => 'Method',
            'request_params' => 'Request Params',
            'return_example' => 'Return Example',
            'reponse_params' => 'Reponse Params',
            'created_at' => 'Created At',
            'group_id' => 'Group ID',
        ];
    }
}
