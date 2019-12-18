<?php
namespace frontend\controllers;

use yii\web\Controller;

/**
 * Site controller
 */
class SiteController extends Controller
{

    /**
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionIndex()
    {
        return $this->render('index');
    }


    public function error($data,$message)
    {
        $params['data'] = $data;
        $params['message'] = $message;
        $params['code'] = 200;
        \Yii::$app->response->data = $params;
        \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
        \Yii::$app->end();
    }

    public function success($data,$message)
    {
        $params['data'] = $data;
        $params['message'] = $message;
        $params['code'] = 200;
        \Yii::$app->response->data = $params;
        \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
        \Yii::$app->end();
    }
}
