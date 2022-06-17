<?php

use common\models\Camera;

/* @var $this yii\web\View */
/* @var $camera Camera */
?>

<div class="row">
    <div class="col-lg-12">
        <h1><?= $camera->name ?></h1>
    </div>
    <div class="w-auto h-auto col-xl-12  col-lg-12 col-md-12  col-sm-12 col-12 ">
        <iframe height="1000dvh" width="1400dvw" src="<?= $camera->link ?>" frameborder="0"
                allowfullscreen></iframe>
    </div>
</div>