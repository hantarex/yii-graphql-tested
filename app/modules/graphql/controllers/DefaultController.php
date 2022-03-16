<?php

namespace app\modules\graphql\controllers;

use yii\web\Controller;
use yii\graphql\GraphQLAction;

/**
 * Default controller for the `graphql` module
 */
class DefaultController extends Controller
{
    function actions() {
        return [
            'index'=>[
                'class'=> GraphQLAction::class
            ],
        ];
    }
}
