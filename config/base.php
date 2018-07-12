<?php

return [
  'id' => 'api-simaq',
  'name' => 'Simaq Api v1439',
  'basePath' => dirname(__DIR__),
  'bootstrap' => ['log'],
  'aliases' => require(__DIR__ . '/aliases.php'),
  'components' => [
    'cache' => [
      'class' => 'yii\caching\DummyCache',
    ],
    'db' => require(__DIR__ . '/db.php'),
    'log' => require(__DIR__ . '/log.php'),
    'mailer' => require(__DIR__ . '/mail.php'),
    'urlManager' => [
      'class'=>'yii\web\UrlManager',
      'enablePrettyUrl' => true,
      'enableStrictParsing' => false,
      'showScriptName' => false,
      'rules' => [
        [
          'class' => 'yii\rest\UrlRule',
          'controller' => ['v1/hewan'],
          'pluralize'=>false,
          'except' => ['delete', 'update'],
        ],
      ],
    ],
  ],
];