<?php

/* @var $this \yii\web\View */

/* @var $content string */

use frontend\assets\AppAsset;
use yii\bootstrap5\Alert;
use yii\bootstrap5\Breadcrumbs;
use yii\bootstrap5\Html;
use yii\bootstrap5\Nav;
use yii\bootstrap5\NavBar;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
    <!DOCTYPE html>
    <html lang="<?= Yii::$app->language ?>" class="h-100">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <?php $this->registerCsrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
    </head>
    <body class="d-flex flex-column h-100">
    <?php $this->beginBody() ?>

    <header>
        <?php
        NavBar::begin([
            'brandLabel' => Html::img(Yii::getAlias('@web') . '/img/logo.png', ['alt' => '', 'class' => 'img-fluid', 'style' => 'width:60px']) . '&nbsp;&nbsp;Urganch davlat universiteti',
            'brandUrl' => Yii::$app->homeUrl,
            'options' => [
                'class' => 'navbar navbar-expand-md navbar-dark fixed-top',
                'style' => "background-color: #5894f5;"
            ],
        ]);
//        echo Nav::widget([
//            'options' => ['class' => 'navbar-nav'],
//            'items' => [
//                Yii::$app->user->isGuest ? (
//                ['label' => Yii::t('app', 'Kirish'), 'class' => 'text-left', 'url' => ['/site/login']]
//                ) : (
//                    Html::beginForm(['/site/logout'], 'post')
//                    . '<div class="row">'
//                    . '<div class="offset-md-11 col-md-12">'
//                    . Html::submitButton(
//                        Yii::t('app', 'Chiqish') . ' (' . Yii::$app->user->identity->username . ')',
//                        ['class' => 'btn  logout']
//                    )
//                    . '</div>'
//                    . '</div>'
//                    . Html::endForm()
//                )
//            ],
//        ]);
        NavBar::end();
        ?>
    </header>

    <main role="main" class="flex-shrink p-5">
        <div class="container-fluid">
            <?= $content ?>
        </div>
    </main>

    <footer class="footer mt-auto py-3 text-muted">
        <div class="container">
            <p class="float-left">&copy; My Company <?= date('Y') ?></p>
            <p class="float-right"><?= Yii::powered() ?></p>
        </div>
    </footer>

    <?php $this->endBody() ?>
    </body>
    </html>
<?php $this->endPage() ?>