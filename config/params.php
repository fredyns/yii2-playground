<?php
return [
    'adminEmail' => 'email@fredyns.net',
    'admins'     => ['admin', 'fredy.ns'],
    'language'   => 'id-ID',
    'timeZone'   => 'Asia/Jakarta',
    'mailer'     => [
        'class'            => 'yii\swiftmailer\Mailer',
        // send all mails to a file by default. You have to set
        // 'useFileTransport' to false and configure a transport
        // for the mailer to send real emails.
        'useFileTransport' => true,
    ],
];
