<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Problem $model */

$this->title = 'Create Problem';
$this->params['breadcrumbs'][] = ['label' => 'Problems', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="problem-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
