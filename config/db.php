<?php
return [
    'class'        => 'yii\db\Connection',
    'dsn'          => 'mysql:host=localhost;dbname=yii2playground',
    'username'     => 'root',
    'password'     => 'root',
    'charset'      => 'utf8',
    'on afterOpen' => function($event)
    {
        /* /
          // uncomment this if you want to set mysql timezone as mentioned in params.php
          // when you used named timezone, you must have timezone table in "mysql" database
          // timezone table dump can be found in /database/misc/timezone_posix.sql
          $params = require(__DIR__.'/params.php');
          $event->sender->createCommand("SET time_zone = '{$params['timeZone']}'")->execute();
          // */

        $event->sender->createCommand("SET time_zone = '+07:00'")->execute();
    }
];
