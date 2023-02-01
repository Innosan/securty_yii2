<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Problem $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="problem-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'user_id')->dropDownList((\yii\helpers\ArrayHelper::map(\app\models\User::find()->all(), 'id', 'fio')))?>

    <?= $form->field($model, 'category_id')->dropDownList((\yii\helpers\ArrayHelper::map(\app\models\Category::find()->all(), 'id', 'title')))?>

    <?= $form->field($model, 'status')->dropDownList([1 => 'Новая', 2 => 'Решена', 3 => 'Отклонена']) ?>

    <?= $form->field($model, 'photo_before')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'photo_after')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
