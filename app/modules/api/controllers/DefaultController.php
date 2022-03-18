<?php

namespace app\modules\api\controllers;

use yii\web\Controller;
use yii\graphql\GraphQLAction;

/**
 * Default controller for the `graphql` module
 */
class DefaultController extends Controller
{

    public function beforeAction($action)
    {
        $this->enableCsrfValidation = false;
        return parent::beforeAction($action);
    }

    function actions() {
        return [
            'index'=>[
                'class'=> GraphQLAction::class
            ],
        ];
    }
}
