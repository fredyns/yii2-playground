<?php
$params = require(__DIR__.'/params.php');

$config = [
    'id'            => 'yii2-playground',
    'name'          => 'Yii 2 Playground',
    'language'      => $params['language'],
    'timeZone'      => $params['timeZone'],
    'basePath'      => dirname(__DIR__),
    'bootstrap'     => ['log'],
    'components'    => [
        'request'      => [
            'cookieValidationKey' => 'GkjkF$Ab3fLK#ASNFfa%GD',
        ],
        'response'     => [
            'formatters' => [
                \yii\web\Response::FORMAT_JSON => [
                    'class'         => 'yii\web\JsonResponseFormatter',
                    'prettyPrint'   => TRUE,
                    'encodeOptions' => JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE,
                ],
            ],
        ],
        'session'      => [
            'class'        => 'yii\web\DbSession',
            'sessionTable' => 'yii_session',
        ],
        'cache'        => [
            'class' => 'yii\caching\FileCache',
        ],
        'user'         => [
            'identityClass'   => 'app\models\User',
            'enableAutoLogin' => true,
        ],
        'formatter'    => [
            'locale' => 'id_ID',
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'mailer'       => $params['mailer'],
        'log'          => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets'    => [
                [
                    'class'  => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'db'           => require(__DIR__.'/db.php'),
        'urlManager'   => [
            'enablePrettyUrl' => true,
            'showScriptName'  => false,
        ],
        'view'         => [
            'theme' => [
                'pathMap' => [
                    '@dektrium/user/views' => '@app/views/user'
                ],
            ],
        ],
    ],
    'modules'       => [
        'user'             => [
            'class'                  => 'dektrium\user\Module',
            'enableUnconfirmedLogin' => TRUE,
            'admins'                 => $params['admins'],
            'modelMap'               => [
                'User'    => 'app\models\User',
                'Profile' => 'app\models\Profile',
            ],
            'controllerMap'          => require(__DIR__.'/module/user-controllerMap.php'),
        ],
        'gridview'         => [
            'class' => '\kartik\grid\Module'
        ],
        'daerah-indonesia' => [
            'class'         => 'fredyns\daerahIndonesia\Module',
            'controllerMap' => require(__DIR__.'/module/daerahIndonesia-controllerMap.php'),
        ],
        'abcde'            => [
            'class' => 'app\modules\tmp\Module',
        ],
    ],
    'controllerMap' => [
        'file' => 'mdm\\upload\\FileController', // use to show or download file
    ],
    'params'        => $params,
];

if (YII_ENV_DEV)
{
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][]      = 'debug';
    $config['modules']['debug'] = [
        'class' => 'yii\debug\Module',
    ];

    $config['bootstrap'][]    = 'gii';
    $config['modules']['gii'] = [
        'class'      => 'yii\gii\Module',
        'generators' => [
            'giiant-model' => [
                'class' => 'fredyns\giiantTemplate\model\Generator',
            ],
            'giiant-crud'  => [
                'class' => 'fredyns\giiantTemplate\crud\Generator',
            ],
        ],
    ];
}

return $config;
