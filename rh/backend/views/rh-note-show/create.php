<?php
/**
 * Team: red hackers
 * Coding by cuilixiao 1511366, 20170708
 * This is the note show of backend web. 
 */
use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\RhNoteShow */

$this->title = 'Create Rh Note Show';
$this->params['breadcrumbs'][] = ['label' => 'Rh Note Shows', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rh-note-show-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
