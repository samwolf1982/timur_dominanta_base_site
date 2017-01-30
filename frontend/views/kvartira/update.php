<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\RoomRecord */

$this->title = 'Update Room Record: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Room Records', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="room-record-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
