<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel frontend\models\RoomRecordSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Room Records';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="room-record-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Room Record', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
<?php Pjax::begin(); ?>    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'id_room',
            'title:ntext',
            'description:ntext',
            'img:ntext',
            // 'status',
            // 'created_at',
            // 'updated_at',
            // 'price_usd',
            // 'price_uan',
            // 'total_square',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
<?php Pjax::end(); ?></div>
