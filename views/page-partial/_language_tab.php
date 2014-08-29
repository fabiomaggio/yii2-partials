<?php
use dosamigos\ckeditor\CKEditor;
?>
<div class="language-tab-content">
    <input type="hidden" name="<?php echo $language; ?>[PagePartialLang][language]" value="<?php echo $language; ?>">
    
    <?= $form->field($model, 'name')->textInput([
        'maxlength' => 255,
        'name' => "{$language}[PagePartialLang][name]",
        'id' => "name-{$language}",
    ]); ?>
    
    <?= $form->field($model, 'content')->widget(CKEditor::className(), [
        'options' => [
            'rows' => 20,
            'name' => "{$language}[PagePartialLang][content]",
            'id' => "{$language}[PagePartialLang][content]",
            
        ],
        'clientOptions' => [
            'height' => 300,
            'toolbarGroups' => [
                ['name' => 'clipboard', 'groups' => ['mode','undo', 'selection', 'clipboard','doctools']],
                ['name' => 'editing', 'groups' => ['tools']],
                ['name' => 'paragraph', 'groups' => ['templates', 'list', 'indent', 'align']],
                ['name' => 'insert'],
                ['name' => 'basicstyles', 'groups' => ['basicstyles', 'cleanup']],
                ['name' => 'colors'],
                ['name' => 'links'],
                ['name' => 'others'],
            ],
            'removeButtons' => 'Smiley,Iframe'
        ],
        'preset' => 'custom',
    ]); ?>
</div>