<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\bootstrap\Tabs;

/* @var $this yii\web\View */
/* @var $model infoweb\partials\models\PagePartial */
/* @var $form yii\widgets\ActiveForm */

$tabs = [];
?>

<div class="page-partial-form">

    <?php $form = ActiveForm::begin(); ?>
    
    <?php
    foreach (Yii::$app->params['languages'] as $languageId => $languageName) {
        $model->language = $languageId;
        $tabs[] = [
            'label' => $languageName,
            'content' => $this->render('_language_tab', ['model' => $model, 'language' => $languageId, 'form' => $form]),
        ];
    }
    ?>
    
    <?php // Display tabs ?>
    <?php echo Tabs::widget(['items' => $tabs]); ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
