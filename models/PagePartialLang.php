<?php

namespace infoweb\partials\models;

use Yii;

/**
 * This is the model class for table "page_partials_lang".
 *
 * @property string $page_partial_id
 * @property string $lang
 * @property string $name
 * @property string $content
 * @property string $created_at
 * @property string $updated_at
 */
class PagePartialLang extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'page_partials_lang';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['page_partial_id', 'language', 'name', 'content', 'created_at', 'updated_at'], 'required'],
            [['page_partial_id', 'created_at', 'updated_at'], 'integer'],
            [['content'], 'string'],
            [['language'], 'string', 'max' => 2],
            [['name'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'page_partial_id' => Yii::t('app', 'Page Partial ID'),
            'language' => Yii::t('app', 'Language'),
            'name' => Yii::t('app', 'Name'),
            'content' => Yii::t('app', 'Content'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
        ];
    }
    
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPagePartial()
    {
        return $this->hasOne(PagePartial::className(), ['id' => 'page_partial_id']);
    }
}
