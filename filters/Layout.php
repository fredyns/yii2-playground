<?php

namespace app\filters;

use Yii;

/**
 * Description of Layout
 *
 * @author fredy
 */
class Layout extends \yii\base\ActionFilter
{

    public function beforeAction($action)
    {
        Yii::$app->controller->layout = (Yii::$app->user->isGuest) ? 'main' : 'adminlte';

        return parent::beforeAction($action);
    }

}