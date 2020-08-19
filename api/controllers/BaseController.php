<?php

namespace api\controllers;
header("Access-Control-Allow-Origin: *");
//如果需要设置允许所有域名发起的跨域请求，可以使用通配符 * ，如果限制自己的域名的话写自己的域名就行了。
// 响应类型 *代表通配符，可以指出POST,GET等固定类型
header('Access-Control-Allow-Methods:* ');
// 响应头设置
header('Access-Control-Allow-Headers:x-requested-with,content-type');
header('Access-Control-Allow-Credentials: true');


use yii\web\Controller;

class BaseController extends Controller
{
    public function init(){
        $this->enableCsrfValidation = false;
    }

    public function response_success($data = [],$code = 200,$msg = '成功')
    {
        $result['code'] = $code;
        $result['msg'] = $msg;
        $result['data'] = $data;
        $response = \Yii::$app->response;
        $response->data = $result;
        $response->format = \yii\web\Response::FORMAT_JSON;
    }

    public function response_error($data = [],$code = 500,$msg = 'error')
    {
        $result['code'] = $code;
        $result['msg'] = $msg;
        $result['data'] = $data;
        $response = \Yii::$app->response;
        $response->data = $result;
        $response->format = \yii\web\Response::FORMAT_JSON;
    }

}