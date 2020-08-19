<?php
namespace api\controllers;

use Yii;

/**
 * Site controller
 */
class SiteController extends BaseController
{

    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return parent::behaviors();
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }


    /**
     * 接口测试
     */
    public function actionTest()
    {
        $request = Yii::$app->request;
        $data = $request->post();

        $this->response_success($data);
    }

    /**
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionIndex()
    {
        return $this->render('index',[

        ]);
    }

}
