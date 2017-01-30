<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\RoomRecord */

$this->title = 'Create Room Record';
$this->params['breadcrumbs'][] = ['label' => 'Room Records', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="room-record-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
