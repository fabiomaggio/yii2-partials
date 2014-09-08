<?php
use yii\helpers\Html;
use infoweb\cms\CMSAsset;

// Register assets
CMSAsset::register($this);

/* @var $this yii\web\View */
/* @var $model infoweb\partials\models\PagePartial */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Page Partial',
]) . ' ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Page Partials'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="page-partial-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
