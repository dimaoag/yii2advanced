<?php
$params = array_merge(
    require __DIR__ . '/../../common/config/params.php',
    require __DIR__ . '/../../common/config/params-local.php',
    require __DIR__ . '/params.php',
    require __DIR__ . '/params-local.php'
);

return [
    'id' => 'app-frontend',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'language' => 'ru',
    'controllerNamespace' => 'frontend\controllers',
    'modules' => [
        'admin' => [
            'class' => 'frontend\modules\admin\Module',
        ],
    ],
    'components' => [
        'request' => [
            'csrfParam' => '_csrf-frontend',
            'enableCsrfValidation' => true,
        ],
        'user' => [
            'identityClass' => 'frontend\models\User',
            'enableAutoLogin' => true,
            'identityCookie' => ['name' => '_identity-frontend', 'httpOnly' => true],
        ],
        'session' => [
            // this is the name of the session cookie used for login on the frontend
            'name' => 'advanced-frontend',
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
                '/' => 'site/index',
                'news' => 'test/index',
                'news/<id:\d+>' => 'test/view',
                'news-count' => 'news_count/index',
                'employee/register' => 'employee/register',
                'employee/update' => 'employee/update',
                'gallery' => 'gallery/index',
                'about-me' => 'site/about',
                'book-shop' => 'book-shop/index',
            ],
        ],
        'stringHelper' => [
            'class' => 'common\components\StringHelper',
        ],
        'emailService' => [
            'class' => 'common\components\EmailService',
        ],

    ],
    'aliases' => [
        '@files' => '/var/www/php_up/frontend/web/files',
        '@photos' => '@files/photos',
        '@images' => '/files/photos',
    ],
    'params' => $params,
];
