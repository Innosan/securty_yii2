<?php

/** @var yii\web\View $this */

use app\models\Category;
use app\models\User;

$this->title = 'My Yii Application';
$problems = \app\models\Problem::find()->indexBy('id')->all();
?>
<div class="site-index">

    <div class="body-content">
        <div class="d-flex flex-row gap-5 flex-lg-wrap">
            <?php
            foreach ($problems as $problem) { ?>
                <div class="problem_container">
                    <p><?=$problem['id']?></p>
                    <p><?=$problem['name']?></p>
                    <p><?=$problem['description']?></p>
                    <p><?= User::findIdentity($problem['id'])->fio?></p>as
                    <p><?= Category::find()->where(['id' => $problem['category_id']])->one()->title?></p>
                    <p><?=$problem['status']?></p>
                    <p><?=$problem['photo_before']?></p>
                    <p><?=$problem['photo_after']?></p>
                </div>
            <?php } ?>
        </div>
    </div>

</div>
