<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "testimonials".
 *
 * @property integer $id
 * @property string $name
 * @property string $job
 * @property string $img
 * @property string $alt
 * @property string $text
 * @property integer $status
 */
class TestimonialsRecord extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'testimonials';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['img', 'alt', 'text'], 'string'],
            [['status'], 'integer'],
            [['name', 'job'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'job' => 'Job',
            'img' => 'Img',
            'alt' => 'Alt',
            'text' => 'Text',
            'status' => 'Status',
        ];
    }
}
