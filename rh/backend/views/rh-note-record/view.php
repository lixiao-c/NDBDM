<?php
<<<<<<< HEAD
/**
 * Team: red hackers
 * Coding by cuilixiao 1511366, 20170708
 * This is the note show of backend web. 
 */
=======

>>>>>>> a0d61432f20fc8f6e61e693fc5cd043dfc548ee1
use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\RhNoteRecord */

$this->title = $model->note_id;
$this->params['breadcrumbs'][] = ['label' => 'Rh Note Records', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rh-note-record-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->note_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->note_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'user_name',
            'note_email:email',
            'note_content:ntext',
            'note_id',
        ],
    ]) ?>

</div>
