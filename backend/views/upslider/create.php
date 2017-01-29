<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Upslider */

$this->title = 'Create Upslider';
$this->params['breadcrumbs'][] = ['label' => 'Upsliders', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="upslider-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>