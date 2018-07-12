<?php

$baseConfig = require(__DIR__ . '/base.php');
$config = \yii\helpers\ArrayHelper::merge($baseConfig, [
  'bootstrap' => ['gii'],
  'defaultRoute' => 'site',
  'components' => [
    'errorHandler' => [
      'errorAction' => 'site/error',
    ],
    'request' => [
      'cookieValidationKey' => '93ae767afedbc999fc76282b767b2258',
      'parsers' => [
          'application/json' => 'yii\web\JsonParser',
      ],
    ],
    'user' => [
      'identityClass' => 'app\models\User',
      'enableAutoLogin' => true,
    ],
  ],
  'modules' => [
    // Main
    'v1' => [
      'class' => 'app\modules\v1\Module',
    ],
    // Others
    'gii' => [
      'class' => 'yii\gii\Module',
      'allowedIPs' => ['127.0.0.1', '::1', '192.168.*', '172.24.*', '172.18.*'],
    ],
  ],
]);

return $config;