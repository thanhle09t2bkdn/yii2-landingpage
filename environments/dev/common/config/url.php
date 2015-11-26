<?php
return[
        'urlManagerFrontend' => [
            'class' => 'yii\web\UrlManager',
            'baseUrl' => '/interview-app/frontend/web',
            'enablePrettyUrl' => true,
            'showScriptName' => false,
        ],
        'urlManagerBackend' => [
            'class' => 'yii\web\UrlManager',
            'baseUrl' => '/interview-app/backend/web',
            'enablePrettyUrl' => true,
            'showScriptName' => false,
        ],
];