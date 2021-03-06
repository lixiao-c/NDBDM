<?php
<<<<<<< HEAD
/**
 * Team: RedHackers,NKU
 * Coding by Xiang Li 1511376, 20170704
 * This is the main layout of frontend web.
 */
=======

>>>>>>> a0d61432f20fc8f6e61e693fc5cd043dfc548ee1
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\RhTeamInfoSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="rh-team-info-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'team_name') ?>

    <?= $form->field($model, 'team_num') ?>

    <?= $form->field($model, 'team_dir') ?>

    <?= $form->field($model, 'team_motto') ?>

    <?= $form->field($model, 'team_pic') ?>

    <?php // echo $form->field($model, 'team_intro') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
