<?php

use yii\base\Controller;
use dektrium\user\controllers\RegistrationController;
use dektrium\user\controllers\SecurityController;
use dektrium\user\controllers\RecoveryController;
use dektrium\user\controllers\SettingsController;
use dektrium\user\controllers\ProfileController;
use dektrium\user\controllers\AdminController;

$controllerMap = [];

// overloading controller classes
$controllerMap['registration']['class'] = RegistrationController::className();
$controllerMap['security']['class']     = SecurityController::className();
$controllerMap['recovery']['class']     = RecoveryController::className();
$controllerMap['settings']['class']     = SettingsController::className();
$controllerMap['profile']['class']      = ProfileController::className();
$controllerMap['admin']['class']        = AdminController::className();

// set layout
$onBeforeAction                             = 'on '.Controller::EVENT_BEFORE_ACTION;
$controllerMap['settings'][$onBeforeAction] = function ($event)
{
    $event->sender->layout = (Yii::$app->user->isGuest) ? '@app/views/layouts/main' : '@app/views/layouts/adminlte';

    return true;
};
//*
$controllerMap['registration'][$onBeforeAction] = function ($event)
{
    $event->sender->layout = (Yii::$app->user->isGuest) ? '@app/views/layouts/main' : '@app/views/layouts/adminlte';

    return true;
};
$controllerMap['security'][$onBeforeAction] = function ($event)
{
    $event->sender->layout = (Yii::$app->user->isGuest) ? '@app/views/layouts/main' : '@app/views/layouts/adminlte';

    return true;
};
$controllerMap['recovery'][$onBeforeAction] = function ($event)
{
    $event->sender->layout = (Yii::$app->user->isGuest) ? '@app/views/layouts/main' : '@app/views/layouts/adminlte';

    return true;
};
$controllerMap['profile'][$onBeforeAction] = function ($event)
{
    $event->sender->layout = (Yii::$app->user->isGuest) ? '@app/views/layouts/main' : '@app/views/layouts/adminlte';

    return true;
};
$controllerMap['admin'][$onBeforeAction] = function ($event)
{
    $event->sender->layout = (Yii::$app->user->isGuest) ? '@app/views/layouts/main' : '@app/views/layouts/adminlte';

    return true;
};

// redirect user to login page after successful registration instead of showing message on a blank page
$controllerMap['registration']['on '.RegistrationController::EVENT_AFTER_REGISTER] = function ($e)
{
    Yii::$app->response->redirect(['/user/security/login'])->send();
    Yii::$app->end();
};

// redirect to profile form after email confirmation
$controllerMap['registration']['on '.RegistrationController::EVENT_AFTER_CONFIRM] = function ($e)
{
    Yii::$app->response->redirect(['/user/settings/profile'])->send();
    Yii::$app->end();
};

// redirect to profile form after email confirmation
$controllerMap['settings']['on '.SettingsController::EVENT_AFTER_PROFILE_UPDATE] = function ($e)
{
    Yii::$app->response->redirect(['/user/profile/show', 'id' => $e->profile->user_id])->send();
    Yii::$app->end();
};


return $controllerMap;
