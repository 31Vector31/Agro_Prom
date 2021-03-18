<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\helpers\Url;
use scotthuangzl\googlechart\GoogleChart;
use yii\bootstrap4\Dropdown;

$this->title = $obl;



?>


<style>


    p {
        text-indent: 20px; /* Отступ первой строки в пикселах */
        font-weight: 300;
    }

</style>
<div class="site-animalhusbandry" >
    <h1>Филиал "<?= Html::encode($this->title) ?>"</h1>

    <p>71300, Г. Одесса, ул. Промышленная, 1.</p>
    <p>График работы филиала:
        <b>пн-сб с 8.00 до 20.00</b> (регистрация авто до 18.00).
        Воскресенье - выходной.</p>
    <p>Вниманию поставщиков! На филиалов не разгружаются автомобили, общий вес (брутто) которых превышает 60 тонн !!!</p>

    <p><b>050-394-84-20, 095-278-23-17</b> - отдел закупок</p>
    <p><b>0503944247</b> - торговый отдел</p>
    <p><b>06138-2-16-11</b> - приемная</p>
    <p>эл. почта - <b>kamdnepr_torg@agroprom.com.ua</b></p>

    <div class="dropdown">
        <button data-toggle="dropdown" class="btn btn-secondary dropdown-toggle">Цены продукции<b class="caret"></b></button>
        <?php
        echo Dropdown::widget([
            'items' => [
                ['label' => 'Кукуруза', 'url' => ['/site/filial', 'product' => 'kukuruza', 'obl' => $obl]],
                ['label' => 'Пшеница 2 класс', 'url' => ['/site/filial', 'product' => 'pshenitsa-2-klass', 'obl' => $obl]],
                ['label' => 'Пшеница 3 класс', 'url' => ['/site/filial', 'product' => 'pshenitsa-3-klass', 'obl' => $obl]],
                ['label' => 'Ячмень', 'url' => ['/site/filial', 'product' => 'yachmen', 'obl' => $obl]],
            ],
        ]);
        ?>
    </div>

    <br>

    <?

    echo GoogleChart::widget(array('visualization' => 'LineChart',
        'data' => $value,
        'options' => array('title' => 'Цена продукции')));


    ?>

</div>


