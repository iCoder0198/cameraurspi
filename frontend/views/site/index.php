<?php

/* @var $this yii\web\View */

/* @var $camera Camera */

/* @var $cameraItem Camera */

use common\models\Camera;
use common\models\hemis\EDepartment;
use yii\bootstrap5\Html;
use yii\helpers\Url;

$this->title = Yii::$app->name;
?>
<!--<header>-->
<!--    <link rel="stylesheet" href="">-->
<!--</header>-->


<div class="site-index">
    <div class="row">
        <?php foreach ($camera as $cameraItem): ?>
            <div class="col-md-6">
                <iframe src="<?= $cameraItem->link ?>" width="640" height="480" frameborder="0"
                        allowfullscreen></iframe>
            </div>
        <?php endforeach; ?>
    </div>
</div>
