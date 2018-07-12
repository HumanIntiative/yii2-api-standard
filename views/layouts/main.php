<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html; ?>

<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode(Yii::$app->name) ?></title>
    <?php $this->head() ?>
</head>
<body>
    <?php $this->beginBody() ?>

    <!-- Page Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <p class="lead"><?= Yii::$app->name ?></p>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->

    <?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
