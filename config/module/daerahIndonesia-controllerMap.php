<?php

use yii\base\Controller;
use fredyns\daerahIndonesia\controllers\DefaultController;
use fredyns\daerahIndonesia\controllers\ProvinsiController;
use fredyns\daerahIndonesia\controllers\KotaController;
use fredyns\daerahIndonesia\controllers\KecamatanController;
use fredyns\daerahIndonesia\controllers\KelurahanController;
use fredyns\daerahIndonesia\controllers\KodeposController;

$controllerMap  = [];
$onBeforeAction = 'on '.Controller::EVENT_BEFORE_ACTION;

$layoutFilter = function ($event)
{
    $event->sender->layout = (Yii::$app->user->isGuest) ? '@app/views/layouts/main' : '@app/views/layouts/adminlte';

    return true;
};

// overloading controller classes
$controllerMap['default']['class']   = DefaultController::className();
$controllerMap['provinsi']['class']  = ProvinsiController::className();
$controllerMap['kota']['class']      = KotaController::className();
$controllerMap['kecamatan']['class'] = KecamatanController::className();
$controllerMap['kelurahan']['class'] = KelurahanController::className();
$controllerMap['kodepos']['class']   = KodeposController::className();

// set layout
$controllerMap['default'][$onBeforeAction]   = $layoutFilter;
$controllerMap['provinsi'][$onBeforeAction]  = $layoutFilter;
$controllerMap['kota'][$onBeforeAction]      = $layoutFilter;
$controllerMap['kecamatan'][$onBeforeAction] = $layoutFilter;
$controllerMap['kelurahan'][$onBeforeAction] = $layoutFilter;
$controllerMap['kodepos'][$onBeforeAction]   = $layoutFilter;

// result
return $controllerMap;
