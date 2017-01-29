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
            'img',
              [
            'attribute' => 'img',
            'format' => 'html',
            'label' => 'ImageColumnLable',
            'value' => function ($data) {
                return Html::img('/pathToImage/' . $data['img'],
                    ['width' => '60px']);
            },
        ],
            'title',
            'description:ntext',
            'url:url',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
A Product of Yii Software LLCPowered by Yii Framework
2.0.10 PHP 5.6.28 Status 200 Route gii/default/view Lo