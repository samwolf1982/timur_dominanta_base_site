<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\RoomRecord */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Room Records', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="room-record-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
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
            'id',
            'id_room',
            'title:ntext',
            'description:ntext',
            'img:ntext',
            'status',
            'created_at',
            'updated_at',
            'price_usd',
            'price_uan',
            'total_square',
        ],
    ]) ?>

</div>
