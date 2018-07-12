<?php 

if (YII_DEBUG) {
  $targets =  [
    [
      'class' => 'yii\log\FileTarget',
      'levels' => ['error', 'warning'],
      'categories' => [
        'yii\db\*',
        'yii\web\HttpException:*',
      ],
    ],
  ];
} else {
  $targets = [
    [
      'class' => 'notamedia\sentry\SentryTarget',
      'dsn' => 'https://d4497a32544340f2bf40c44c444eab77:b1640e530886498191364f469b7d6d26@sentry.io/1237193',
      'levels' => ['error', 'warning'],
      'context' => true, // Write the context information. The default is true.
      'enabled' => getenv('YII_DEBUG')==0,
      'except' => [
        'yii\web\ForbiddenHttpException:403', //403
        'yii\web\NotFoundHttpException:404', //404
        'yii\web\MethodNotAllowedHttpException:405', //405
      ],
    ],
  ];
}

return [
  'traceLevel' => YII_DEBUG ? 3 : 0,
  'targets' => $targets,
];