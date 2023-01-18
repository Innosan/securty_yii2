<?php

/** @var yii\web\View $this */

use yii\helpers\Html;
use yii\bootstrap5\ActiveForm;

$this->title = 'Sign Up';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="site-signup">
    <h1><?= Html::encode($this->title) ?></h1>
    <p>Please fill out the following fields to signup:</p>
    <div class="row">
        <div class="col-lg-5">
            <?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>
            <div class="d-flex flex-row gap-5">
                <div class="d-flex flex-column">
                    <h3>Личная информация</h3>
                    <?= $form->field($model, 'fio')->textInput() ?>
                </div>
                <div class="d-flex flex-column">
                    <h3>Данные для входа</h3>
                    <?= $form->field($model, 'login')->textInput(['autofocus' => true]) ?>
                    <?= $form->field($model, 'email')->textInput() ?>
                    <?= $form->field($model, 'password')->passwordInput() ?>
                    <?= $form->field($model, 'admin')->textInput() ?>
                </div>
            </div>
            <div class="form-group">
                <?= Html::submitButton('Sign Up', ['class' => 'btn btn-primary', 'name' => 'signup-button'])?>
            </div>
            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
