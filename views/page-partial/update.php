<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model infoweb\partials\models\PagePartial */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Page Partial',
]) . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Page Partials'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="page-partial-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
