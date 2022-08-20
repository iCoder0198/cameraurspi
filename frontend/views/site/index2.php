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
    <style>
        .td {
            border: 1px solid #000000;
            vertical-align: middle;
        }
    </style>

    <!--    navbar end-->
    <table cellspacing="0" border="0">
        <colgroup width="65"></colgroup>
        <colgroup width="277"></colgroup>
        <colgroup span="5" width="65"></colgroup>
        <colgroup width="64"></colgroup>
        <colgroup width="94"></colgroup>
        <tr>
            <td colspan=9 rowspan=2 height="59" align="center" valign=middle><b><font color="#000000">Urganch davlat
                        universitetida texnikumlarni muaffaqiyatli tamomlagan bitiruvchilarni suhbat asosida o'qishga qabul qilish
                        jadvali</font></b></td>
        </tr>
        <tr>
        </tr>
        <tr>
            <td height="19" align="center" valign=bottom><font color="#000000"><br></font></td>
            <td align="center" valign=bottom><font color="#000000"><br></font></td>
            <td align="center" valign=middle><font color="#000000"><br></font></td>
            <td align="center" valign=bottom><font color="#000000"><br></font></td>
            <td align="center" valign=bottom><font color="#000000"><br></font></td>
            <td align="center" valign=bottom><font color="#000000"><br></font></td>
            <td align="center" valign=bottom><font color="#000000"><br></font></td>
            <td align="left" valign=bottom><font color="#000000"><br></font></td>
            <td align="left" valign=bottom><font color="#000000"><br></font></td>
        </tr>
        <tr>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
                height="39" align="center" valign=middle><b><font color="#000000">&#8470;</font></b></td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
                align="center" valign=middle><b><font color="#000000">Ta'lim yo'nalishlari</font></b></td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
                align="center" valign=middle><b><font color="#000000">Arizalar soni</font></b></td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
                align="center" valign=middle><b><font color="#000000">Guruhlar soni</font></b></td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
                align="center" valign=middle><b><font color="#000000">Xona</font></b></td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
                align="center" valign=middle><b><font color="#000000">Sana</font></b></td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
                align="center" valign=middle><b><font color="#000000">Vaqti</font></b></td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
                align="center" valign=middle><b><font color="#000000">Vaqti</font></b></td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
                align="center" valign=middle><font color="#000000">Camera uchun havola</font></td>
        </tr>
        <tr>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
                height="19" align="center" valign=bottom sdval="1" sdnum="1033;"><font color="#000000">1</font></td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
                align="center" valign=bottom><font color="#000000">Maktabgacha ta'lim</font></td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
                align="center" valign=middle sdval="1" sdnum="1033;"><font color="#000000">1</font></td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
                align="center" valign=bottom sdval="1" sdnum="1033;"><font color="#000000">1</font></td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
                align="center" valign=bottom sdval="334" sdnum="1033;"><font color="#000000">334</font></td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
                align="center" valign=bottom sdval="15.08" sdnum="1033;"><font color="#000000">15.08</font></td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
                align="center" valign=bottom sdval="9" sdnum="1033;0;0.00"><font color="#000000">9.00</font></td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
                align="left" valign=bottom><font color="#000000"><br></font></td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
                align="left" valign=bottom><u><font color="#0563C1"><a
                                href="https://camera.urdu.uz/camera/12">Kuzatish</a></font></u></td>
        </tr>
        <tr>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
                height="19" align="center" valign=bottom sdval="2" sdnum="1033;"><font color="#000000">2</font></td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
                align="center" valign=middle><font color="#000000">Jismoniy madaniyat</font></td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
                align="center" valign=middle sdval="1" sdnum="1033;"><font color="#000000">1</font></td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
                align="center" valign=bottom sdval="1" sdnum="1033;"><font color="#000000">1</font></td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
                align="center" valign=bottom sdval="336" sdnum="1033;"><font color="#000000">336</font></td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
                align="center" valign=bottom sdval="15.08" sdnum="1033;"><font color="#000000">15.08</font></td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
                align="center" valign=bottom sdval="9" sdnum="1033;0;0.00"><font color="#000000">9.00</font></td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
                align="left" valign=bottom><font color="#000000"><br></font></td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
                align="left" valign=bottom><u><font color="#0563C1"><a
                                href="https://camera.urdu.uz/camera/13">Kuzatish</a></font></u></td>
        </tr>
        <tr>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
                rowspan=5 height="97" align="center" valign=middle sdval="3" sdnum="1033;"><font color="#000000">3</font>
            </td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
                rowspan=5 align="center" valign=middle><font color="#000000">Buxgalteriya hisobi va audit (tarmoqlar
                    bo'yicha)</font></td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
                rowspan=5 align="center" valign=middle sdval="204" sdnum="1033;"><font color="#000000">204</font></td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
                align="center" valign=bottom sdnum="1033;0;@"><font color="#000000">1-2</font></td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
                align="center" valign=bottom sdval="330" sdnum="1033;"><font color="#000000">330</font></td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
                align="center" valign=bottom sdval="15.08" sdnum="1033;"><font color="#000000">15.08</font></td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
                align="center" valign=bottom sdval="9" sdnum="1033;0;0.00"><font color="#000000">9.00</font></td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
                align="center" valign=bottom sdval="14" sdnum="1033;0;0.00"><font color="#000000">14.00</font></td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
                align="left" valign=bottom><u><font color="#0563C1"><a
                                href="https://camera.urdu.uz/camera/7">Kuzatish</a></font></u></td>
        </tr>
        <tr>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
                align="center" valign=bottom sdnum="1033;0;@"><font color="#000000">3-4</font></td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
                align="center" valign=bottom sdval="330" sdnum="1033;"><font color="#000000">330</font></td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
                align="center" valign=bottom sdval="16.08" sdnum="1033;"><font color="#000000">16.08</font></td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
                align="center" valign=bottom sdval="9" sdnum="1033;0;0.00"><font color="#000000">9.00</font></td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
                align="center" valign=bottom sdval="14" sdnum="1033;0;0.00"><font color="#000000">14.00</font></td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
                align="left" valign=bottom><u><font color="#0563C1"><a
                                href="https://camera.urdu.uz/camera/7">Kuzatish</a></font></u></td>
        </tr>
        <tr>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
                align="center" valign=bottom sdnum="1033;0;@"><font color="#000000">5-6</font></td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
                align="center" valign=bottom sdval="330" sdnum="1033;"><font color="#000000">330</font></td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
                align="center" valign=bottom sdval="17.08" sdnum="1033;"><font color="#000000">17.08</font></td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
                align="center" valign=bottom sdval="9" sdnum="1033;0;0.00"><font color="#000000">9.00</font></td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
                align="center" valign=bottom sdval="14" sdnum="1033;0;0.00"><font color="#000000">14.00</font></td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
                align="left" valign=bottom><u><font color="#0563C1"><a
                                href="https://camera.urdu.uz/camera/7">Kuzatish</a></font></u></td>
        </tr>
        <tr>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
                align="center" valign=bottom sdnum="1033;0;@"><font color="#000000">7-8</font></td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
                align="center" valign=bottom sdval="330" sdnum="1033;"><font color="#000000">330</font></td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
                align="center" valign=bottom sdval="18.08" sdnum="1033;"><font color="#000000">18.08</font></td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
                align="center" valign=bottom sdval="9" sdnum="1033;0;0.00"><font color="#000000">9.00</font></td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
                align="center" valign=bottom sdval="14" sdnum="1033;0;0.00"><font color="#000000">14.00</font></td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
                align="left" valign=bottom><u><font color="#0563C1"><a
                                href="https://camera.urdu.uz/camera/7">Kuzatish</a></font></u></td>
        </tr>
        <tr>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
                align="center" valign=bottom sdnum="1033;0;@"><font color="#000000">9-10</font></td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
                align="center" valign=bottom sdval="330" sdnum="1033;"><font color="#000000">330</font></td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
                align="center" valign=bottom sdval="19.08" sdnum="1033;"><font color="#000000">19.08</font></td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
                align="center" valign=bottom sdval="9" sdnum="1033;0;0.00"><font color="#000000">9.00</font></td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
                align="center" valign=bottom sdval="14" sdnum="1033;0;0.00"><font color="#000000">14.00</font></td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
                align="left" valign=bottom><u><font color="#0563C1"><a
                                href="https://camera.urdu.uz/camera/7">Kuzatish</a></font></u></td>
        </tr>
        <tr>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
                height="39" align="center" valign=bottom sdval="4" sdnum="1033;"><font color="#000000">4</font></td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
                align="center" valign=bottom><font color="#000000">Transport vositalari muhandisligi (turlari
                    bo'yicha)</font></td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
                align="center" valign=middle sdval="33" sdnum="1033;"><font color="#000000">33</font></td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
                align="center" valign=middle sdnum="1033;0;@"><font color="#000000">1-2</font></td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
                align="center" valign=middle sdval="332" sdnum="1033;"><font color="#000000">332</font></td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
                align="center" valign=middle sdval="15.08" sdnum="1033;"><font color="#000000">15.08</font></td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
                align="center" valign=middle sdval="9" sdnum="1033;0;0.00"><font color="#000000">9.00</font></td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
                align="center" valign=middle sdval="14" sdnum="1033;0;0.00"><font color="#000000">14.00</font></td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
                align="left" valign=bottom><u><font color="#0563C1"><a
                                href="https://camera.urdu.uz/camera/11">Kuzatish</a></font></u></td>
        </tr>
        <tr>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
                height="39" align="center" valign=bottom sdval="5" sdnum="1033;"><font color="#000000">5</font></td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
                align="center" valign=bottom><font color="#000000">Geodeziya, kartografiya va kadastr (funksiyalari
                    bo'yicha)</font></td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
                align="center" valign=middle sdval="3" sdnum="1033;"><font color="#000000">3</font></td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
                align="center" valign=middle sdnum="1033;0;@"><font color="#000000">1</font></td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
                align="center" valign=middle sdval="338" sdnum="1033;"><font color="#000000">338</font></td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
                align="center" valign=middle sdval="15.08" sdnum="1033;"><font color="#000000">15.08</font></td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
                align="center" valign=middle sdval="9" sdnum="1033;0;0.00"><font color="#000000">9.00</font></td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
                align="left" valign=middle><font color="#000000"><br></font></td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
                align="left" valign=bottom><u><font color="#0563C1"><a
                                href="https://camera.urdu.uz/camera/14">Kuzatish</a></font></u></td>
        </tr>
        <tr>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
                height="39" align="center" valign=bottom sdval="6" sdnum="1033;"><font color="#000000">6</font></td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
                align="center" valign=bottom><font color="#000000">Kimyoviy texnologiya (ishlab chiqarish turlari
                    bo'yicha)</font></td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
                align="center" valign=middle sdval="19" sdnum="1033;"><font color="#000000">19</font></td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
                align="center" valign=middle sdnum="1033;0;@"><font color="#000000">1</font></td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
                align="center" valign=middle sdval="337" sdnum="1033;"><font color="#000000">337</font></td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
                align="center" valign=middle sdval="15.08" sdnum="1033;"><font color="#000000">15.08</font></td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
                align="center" valign=middle sdval="9" sdnum="1033;0;0.00"><font color="#000000">9.00</font></td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
                align="left" valign=middle><font color="#000000"><br></font></td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
                align="left" valign=bottom><u><font color="#0563C1"><a
                                href="https://rtsp.me/embed/tkFN2sQR/">Kuzatish</a></font></u></td>
        </tr>
        <tr>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
                height="19" align="center" valign=bottom sdval="7" sdnum="1033;"><font color="#000000">7</font></td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
                align="center" valign=bottom><font color="#000000">Biotexnologiya (tarmoqlar bo'yicha)</font></td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
                align="center" valign=middle sdval="20" sdnum="1033;"><font color="#000000">20</font></td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
                align="center" valign=middle sdnum="1033;0;@"><font color="#000000">1</font></td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
                align="center" valign=middle sdval="339" sdnum="1033;"><font color="#000000">339</font></td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
                align="center" valign=middle sdval="15.08" sdnum="1033;"><font color="#000000">15.08</font></td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
                align="center" valign=middle sdval="9" sdnum="1033;0;0.00"><font color="#000000">9.00</font></td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
                align="left" valign=middle><font color="#000000"><br></font></td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
                align="left" valign=bottom><u><font color="#0563C1"><a
                                href="https://camera.urdu.uz/camera/15">Kuzatish</a></font></u></td>
        </tr>
        <tr>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
                height="58" align="center" valign=bottom sdval="8" sdnum="1033;"><font color="#000000">8</font></td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
                align="center" valign=bottom><font color="#000000">Yengil sanoat buyumlari konstruksiyasini ishlash va
                    texnologiyasi (ishlab chiqarish turlari bo'yicha)</font></td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
                align="center" valign=middle sdval="1" sdnum="1033;"><font color="#000000">1</font></td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
                align="center" valign=middle sdnum="1033;0;@"><font color="#000000">1</font></td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
                align="center" valign=middle sdval="324" sdnum="1033;"><font color="#000000">324</font></td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
                align="center" valign=middle sdval="15.08" sdnum="1033;"><font color="#000000">15.08</font></td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
                align="center" valign=middle sdval="9" sdnum="1033;0;0.00"><font color="#000000">9.00</font></td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
                align="left" valign=middle><font color="#000000"><br></font></td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
                align="left" valign=bottom><u><font color="#0563C1"><a
                                href="https://camera.urdu.uz/camera/5">Kuzatish</a></font></u></td>
        </tr>
        <tr>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
                height="39" align="center" valign=bottom sdval="9" sdnum="1033;"><font color="#000000">9</font></td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
                align="center" valign=bottom><font color="#000000">Oziq-ovqat texnologiyasi (mahsulot turlari
                    bo'yicha)</font></td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
                align="center" valign=middle sdval="13" sdnum="1033;"><font color="#000000">13</font></td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
                align="center" valign=middle sdnum="1033;0;@"><font color="#000000">1</font></td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
                align="center" valign=middle sdval="342" sdnum="1033;"><font color="#000000">342</font></td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
                align="center" valign=middle sdval="15.08" sdnum="1033;"><font color="#000000">15.08</font></td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
                align="center" valign=middle sdval="9" sdnum="1033;0;0.00"><font color="#000000">9.00</font></td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
                align="left" valign=middle><font color="#000000"><br></font></td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
                align="left" valign=bottom><u><font color="#0563C1"><a
                                href="https://camera.urdu.uz/camera/19">Kuzatish</a></font></u></td>
        </tr>
        <tr>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
                height="19" align="center" valign=bottom sdval="10" sdnum="1033;"><font color="#000000">10</font></td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
                align="center" valign=bottom><font color="#000000">Agronomiya (sabzavotchilik va polizchilik)</font></td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
                align="center" valign=middle sdval="20" sdnum="1033;"><font color="#000000">20</font></td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
                align="center" valign=middle sdnum="1033;0;@"><font color="#000000">1</font></td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
                align="center" valign=middle sdval="341" sdnum="1033;"><font color="#000000">341</font></td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
                align="center" valign=middle sdval="15.08" sdnum="1033;"><font color="#000000">15.08</font></td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
                align="center" valign=middle sdval="9" sdnum="1033;0;0.00"><font color="#000000">9.00</font></td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
                align="left" valign=middle><font color="#000000"><br></font></td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
                align="left" valign=bottom><u><font color="#0563C1"><a
                                href="https://camera.urdu.uz/camera/17">Kuzatish</a></font></u></td>
        </tr>
        <tr>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
                height="58" align="center" valign=bottom sdval="11" sdnum="1033;"><font color="#000000">11</font></td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
                align="center" valign=bottom><font color="#000000">Qishloq xo'jalik mahsulotlarini saqlash va dastlabki
                    ishlash texnologiyasi (mahsulotlar turlari bo'yicha)</font></td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
                align="center" valign=middle sdval="4" sdnum="1033;"><font color="#000000">4</font></td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
                align="center" valign=middle sdnum="1033;0;@"><font color="#000000">1</font></td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
                align="center" valign=middle sdval="341" sdnum="1033;"><font color="#000000">341</font></td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
                align="center" valign=middle sdval="16.08" sdnum="1033;"><font color="#000000">16.08</font></td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
                align="center" valign=middle sdval="9" sdnum="1033;0;0.00"><font color="#000000">9.00</font></td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
                align="left" valign=middle><font color="#000000"><br></font></td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
                align="left" valign=bottom><u><font color="#0563C1"><a
                                href="https://camera.urdu.uz/camera/17">Kuzatish</a></font></u></td>
        </tr>
        <tr>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
                height="39" align="center" valign=bottom sdval="12" sdnum="1033;"><font color="#000000">12</font></td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
                align="center" valign=bottom><font color="#000000">Dorivor o'simliklarni yetishtirish va qayta ishlash
                    texnologiyasi</font></td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
                align="center" valign=middle sdval="19" sdnum="1033;"><font color="#000000">19</font></td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
                align="center" valign=middle sdnum="1033;0;@"><font color="#000000">1</font></td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
                align="center" valign=middle sdval="341" sdnum="1033;"><font color="#000000">341</font></td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
                align="center" valign=middle sdval="17.08" sdnum="1033;"><font color="#000000">17.08</font></td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
                align="center" valign=middle sdval="9" sdnum="1033;0;0.00"><font color="#000000">9.00</font></td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
                align="left" valign=middle><font color="#000000"><br></font></td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
                align="left" valign=bottom><u><font color="#0563C1"><a
                                href="https://camera.urdu.uz/camera/17">Kuzatish</a></font></u></td>
        </tr>
        <tr>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
                height="39" align="center" valign=bottom sdval="13" sdnum="1033;"><font color="#000000">13</font></td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
                align="center" valign=bottom><font color="#000000">Mehmonxona xo'jaligini tashkil etish va boshqarish</font>
            </td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
                align="center" valign=middle sdval="16" sdnum="1033;"><font color="#000000">16</font></td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
                align="center" valign=middle sdnum="1033;0;@"><font color="#000000">1</font></td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
                align="center" valign=middle sdval="327" sdnum="1033;"><font color="#000000">327</font></td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
                align="center" valign=middle sdval="15.08" sdnum="1033;"><font color="#000000">15.08</font></td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
                align="center" valign=middle sdval="9" sdnum="1033;0;0.00"><font color="#000000">9.00</font></td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
                align="left" valign=middle><font color="#000000"><br></font></td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
                align="left" valign=bottom><u><font color="#0563C1"><a
                                href="https://camera.urdu.uz/camera/6">Kuzatish</a></font></u></td>
        </tr>
        <tr>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
                height="19" align="center" valign=bottom sdval="14" sdnum="1033;"><font color="#000000">14</font></td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
                align="center" valign=bottom><font color="#000000">Turizm (faoliyat yo'nalishlari bo'yicha)</font></td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
                align="center" valign=middle sdval="48" sdnum="1033;"><font color="#000000">48</font></td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
                align="center" valign=middle sdnum="1033;0;@"><font color="#000000">1-2</font></td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
                align="center" valign=middle sdval="331" sdnum="1033;"><font color="#000000">331</font></td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
                align="center" valign=middle sdval="15.08" sdnum="1033;"><font color="#000000">15.08</font></td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
                align="center" valign=middle sdval="9" sdnum="1033;0;0.00"><font color="#000000">9.00</font></td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
                align="center" valign=middle sdval="14" sdnum="1033;0;0.00"><font color="#000000">14.00</font></td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
                align="left" valign=bottom><u><font color="#0563C1"><a
                                href="https://camera.urdu.uz/camera/10">Kuzatish</a></font></u></td>
        </tr>
        <tr>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
                height="39" align="center" valign=bottom sdval="15" sdnum="1033;"><font color="#000000">15</font></td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
                align="center" valign=bottom><font color="#000000">Ekologiya va atrof-muhit muhofazasi (tarmoqlar va sohalar
                    bo'yicha)</font></td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
                align="center" valign=middle sdval="11" sdnum="1033;"><font color="#000000">11</font></td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
                align="center" valign=middle sdnum="1033;0;@"><font color="#000000">1-2</font></td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
                align="center" valign=middle sdval="320" sdnum="1033;"><font color="#000000">320</font></td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
                align="center" valign=middle sdval="15.08" sdnum="1033;"><font color="#000000">15.08</font></td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
                align="center" valign=middle sdval="9" sdnum="1033;0;0.00"><font color="#000000">9.00</font></td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
                align="left" valign=middle><font color="#000000"><br></font></td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
                align="left" valign=bottom><u><font color="#0563C1"><a
                                href="https://camera.urdu.uz/camera/7">Kuzatish</a></font></u></td>
        </tr>
    </table>


</div>
