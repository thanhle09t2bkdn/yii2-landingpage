<?php
return [
    'components' => array_merge([
        'db' => require(__DIR__ . '/db.php'),        
        'i18n' => [
            'translations' => [
                'app*' => [
                        'class' => 'yii\i18n\PhpMessageSource',
                        'basePath' => '@approot/messages',
                    ]
                ]
        ],
        'mailer' => require(__DIR__ . '/mail.php'),
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
            ],        
        ],
    ], require(__DIR__ . '/url.php')),
];
