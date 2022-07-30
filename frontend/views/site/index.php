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



<div class="site-index " style="text-align: center">
    <div class="section-title">
        <h4><u>Imtihon video kuzatuvi</u></h4>
    </div>


    <!--    navbar end-->
    <table cellspacing="0" border="0" class="sortable">
        <colgroup width="23"></colgroup>
        <colgroup width="152"></colgroup>
        <colgroup width="376"></colgroup>
        <colgroup width="238"></colgroup>
        <colgroup width="238"></colgroup>
        <tr>
            <td colspan=4 height="34" align="center" valign=middle><b><font face="Times New Roman" size=3
                                                                            color="#000000">
                        Urganch davlat universiteti ijodiy imtihonlarni o'tkazish joylaridagi kuzatuv kameralari
                        </font></b></td>
            <td align="left" valign=middle><font face="Times New Roman" color="#000000"><br></font></td>
        </tr>
        <tr style="border: 1px solid #000000; vertical-align: middle" class="text-center">
            <td height="59">
                <b>
                    <font face="Times New Roman" size=3 color="#000000">
                        &#8470;
                    </font>
                </b>
            </td>
            <td style="border: 1px solid #000000; vertical-align: middle" class="text-center">
                <b>
                    <font face="Times New Roman" size=3 color="#000000">
                        Fakultet nomi
                    </font>
                </b>
            </td>
            <td style="border: 1px solid #000000; vertical-align: middle" class="text-center">
                <b>
                    <font face="Times New Roman" size=3 color="#000000">
                        Yo'nalish nomi
                    </font>
                </b>
            </td>

            <td style="border: 1px solid #000000; vertical-align: middle" class="text-center">
                <font face="Times New Roman" color="#000000">
                    Xonalar
                </font>
            </td>
            <td style="border: 1px solid #000000; vertical-align: middle" class="text-center">
                <font face="Times New Roman" color="#000000">
                    Camera uchun havola
                </font>
            </td>
        </tr>
        <?php foreach ($camera as $cameraItem): ?>
            <?php
            $countDepartment = Camera::find()->where(['department'=>$cameraItem->department])->count();
            ?>
            <tr style="border: 1px solid #000000">
                <?php if (
                    $cameraItem->id===1  ||
                    Camera::findOne(['id'=>$cameraItem->id-1])->department !== $cameraItem->department
                ): ?>
                    <td style="border: 1px solid #000000;"
                        rowspan=<?= $countDepartment ?> height="135"
                        align="center" valign=middle sdval="1" sdnum="1033;"><font face="Times New Roman"
                                                                                   size=3
                                                                                   color="#000000">
                            <?= $cameraItem->department ?>
                        </font>
                    </td>
                    <td style="border: 1px solid #000000;"
                        rowspan=<?= $countDepartment?> align="center" valign=middle><font face="Times New Roman" size=3 color="#000000">
                            <?= EDepartment::findOne(['id'=>$cameraItem->department])->name?>
                        </font></td>
                <?php endif; ?>
                <td style="border: 1px solid #000000;" class="text-center"
                    align="left" valign=middle><font face="Times New Roman" size=3 color="#000000">
                        <?= $cameraItem->specialty?>
                    </font></td>

                <td style="border: 1px solid #000000;" class="text-center">
                    <font face="Times New Roman" color="#000000">
                        <?= $cameraItem->name?>
                    </font>
                </td>
                <td style="border: 1px solid #000000;" class="text-center">
                    <font face="Times New Roman" color="#000000">
                        <?= Html::a("Onlayn Kuzatish", Url::to(['site/cam','id'=>$cameraItem->id]))?>
                    </font>
                </td>
            </tr>
        <?php endforeach; ?>

    </table>


</div>
