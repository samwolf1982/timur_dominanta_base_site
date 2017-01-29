<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "upslider".
 *
 * @property integer $id
 * @property string $img
 * @property string $title
 * @property string $description
 * @property string $url
 */
class Upslider extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'upslider';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['description'], 'string'],
            [['img', 'title', 'url'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'img' => 'Картинка',
            'title' => 'Заглавие',
            'description' => 'Описание',
            'url' => 'Ссылка',
        ];
    }

    /**
     * @inheritdoc
     * @return UpsliderQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new UpsliderQuery(get_called_class());
    }
}
