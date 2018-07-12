<?php

$baseConfig = require(__DIR__ . '/base.php');
$config = \yii\helpers\ArrayHelper::merge($baseConfig, [
  'id' => 'api-console',
  'controllerNamespace' => 'app\commands',
]);

return $config;