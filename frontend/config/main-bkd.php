<?php

$config = [
    'components' => [
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => 'EclY9SNijghe30dGqQnJH8Pkg7epSNZk',
        ],
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'enableStrictParsing' => false,
            'suffix' => '.html',
            'rules' => [
                'login' => 'site/login',
                'home' => 'site/index',
                'contact-us' => 'site/contact',
                'news/<alias>' => 'article/news',
                'article/<alias>' => 'article/view',
                'download' => 'site/download',
                'tanya-jawab' => 'tanya/index',
                'tanya-jawab/<id>/<alias>' => 'tanya/view',
                '<controller:\w+>/<action:\w+>/<id:\w+>' => '<controller>/<action>',
                '<controller:\w+>/<action:\w+>' => '<controller>/<action>',
            ]
        ],
    ],
    'params' => [

    ]
        ,
];

if (!YII_ENV_TEST) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = 'yii\debug\Module';

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = 'yii\gii\Module';
}

return $config;
