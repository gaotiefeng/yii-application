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
        $data['arr'] = 0;
        if (isset($data['grade']) && is_array($data['grade'])) {
            $data['arr'] = true;
        }else {
            $data['arr'] = false;
        }
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
