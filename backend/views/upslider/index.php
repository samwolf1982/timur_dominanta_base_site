<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\UpsliderSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Upsliders';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="upslider-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Upslider', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            // 'img',
              [
            'attribute' => 'img',
            'format' => 'html', 
            'value' => function ($data) {
                return Html::img(Yii::getAlias('@upload_folder_upslider') . $data['img'],
                    ['width' => '60px']);
            },
        ],
            'title',
            'description:ntext',
            'url:url',
            'alt',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
