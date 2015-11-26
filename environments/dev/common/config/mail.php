<?php

return [
    'class' => 'yii\swiftmailer\Mailer',
    'viewPath' => '@common/mail',            
    'transport' => [
        'class' => 'Swift_SmtpTransport',
        'host' => 'dev.co-mit.com',
        'username' => 'dev01',
        'password' => '8m#*4%#=rhKSN8qA',
        'port' => '587',
        'encryption' => 'tls'
    ],
    //'useFileTransport'=>true,
];
