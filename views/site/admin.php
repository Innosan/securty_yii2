<?php

/** @var yii\web\View $this */

use yii\helpers\Html;

$this->title = 'Admin';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>
    <div class="d-flex flex-row gap-5">
        <div class="d-flex flex-column">
            <h2>Списки</h2>
            <a href="?r=category/index">Категории проблем</a>
            <p>...</p>
        </div>
        <div class="d-flex flex-column">
            <h2>Составные сущности</h2>
            <a href="?r=problem/index">Создать заявку</a>
            <p>...</p>
        </div>
    </div>
</div>
