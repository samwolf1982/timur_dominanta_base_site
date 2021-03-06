<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Upslider */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Upsliders', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="upslider-view">

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
      [
        
            'format' => ['image',['width'=>'120']],
            'label' => 'Картинка',
                 'value' =>Yii::getAlias('@upload_folder_upslider').$model->img   
            // 'value' => Yii::getAlias('@upload_folder'). $model->img         
                     ],
            'title',
            'description:ntext',
            'url:url',
            'alt',
        ],
    ]); ?>

</div>
 

    