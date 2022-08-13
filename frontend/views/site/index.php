<?php

/* @var $this yii\web\View */

/* @var $departments array */


use common\models\Camera;
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
        <!--        <colgroup width="23"></colgroup>-->
        <!--        <colgroup width="250"></colgroup>-->
        <!--        <colgroup width="250"></colgroup>-->
        <!--        <colgroup width="250"></colgroup>-->
        <tr>
            <td colspan=3 height="34" align="center" valign=middle><b><font face="Times New Roman" size=3
                                                                            color="#000000">
                        Urganch davlat universiteti ijodiy imtihonlarni o'tkazish joylaridagi kuzatuv kameralari
                    </font></b></td>
            
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
                        Ta'lim yo'nalishi nomi
                    </font>
                </b>
            </td>

            <td style="border: 1px solid #000000; vertical-align: middle" class="text-center">
                <font face="Times New Roman" color="#000000">
                    Camera uchun havola
                </font>
            </td>
        </tr>
        <?php foreach (\common\models\Category::find()->all() as $category): ?>
            <tr>
                <td style="border: 1px solid #000000; vertical-align: middle" class="text-center">
                    <font face="Times New Roman" size=3 color="#000000">
                        <?= $category->code ?>
                    </font>
                </td>
                <td style="border: 1px solid #000000; vertical-align: middle" class="text-center">
                    <font face="Times New Roman" size=3 color="#000000">
                        <?= $category->name ?>
                    </font>
                </td>
                <td style="border: 1px solid #000000; vertical-align: middle" class="text-center">
                    <?php foreach ($category->cameras as $camera): ?>
                        <?= Html::a($camera->name, Url::to(['site/cam', 'id' => $camera->id])) . "<br>" ?>
                    <?php endforeach; ?>
                </td>
            </tr>
        <?php endforeach; ?>


    </table>


</div>
