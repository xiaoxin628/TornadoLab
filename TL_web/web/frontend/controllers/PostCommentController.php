<?php

namespace frontend\controllers;
use Yii;
class PostCommentController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

}
