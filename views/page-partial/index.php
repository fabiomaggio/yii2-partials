<?php

use yii\helpers\Html;
use kartik\grid\GridView;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $searchModel infoweb\partials\models\PagePartialSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Page Partials');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="page-partial-index">

    <h1><?= Html::encode($this->title) ?></h1>
   
    <?php // Flash message ?>
    <?php if (Yii::$app->getSession()->hasFlash('partial')): ?>
    <div class="alert alert-success">
        <p><?= Yii::$app->getSession()->getFlash('partial') ?></p>
    </div>
    <?php endif; ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create {modelClass}', [
            'modelClass' => 'Page Partial',
        ]), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // Gridview widget ?>
    <?php Pjax::begin([
        'id'=>'grid-pjax'
    ]); ?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            'name',
            [
                'class' => 'kartik\grid\ActionColumn',
                'template' => '{update} {delete}',
                'updateOptions'=>['title' => 'Update', 'data-toggle' => 'tooltip'],
                'deleteOptions'=>['title' => 'Delete', 'data-toggle' => 'tooltip'],
                'width' => '100px',
            ],
        ],
        'responsive' => true,
        'floatHeader' => true,
        'floatHeaderOptions' => ['scrollingTop' => 88],
        'hover' => true,
    ]); ?>
    <?php Pjax::end(); ?>

</div>
