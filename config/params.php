<?php
return [
    'adminEmail'     => 'email@fredyns.net',
    'language'       => 'id-ID',
    'timeZone'       => 'Asia/Jakarta',
    'icon-framework' => 'fa',
    'mailer'         => [
        'class'            => 'yii\swiftmailer\Mailer',
        // send all mails to a file by default. You have to set
        // 'useFileTransport' to false and configure a transport
        // for the mailer to send real emails.
        'useFileTransport' => true,
    ],
    'admins'         => ['admin', 'fredy.ns'],
];
