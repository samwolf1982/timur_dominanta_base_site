<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "news".
 *
 * @property integer $id
 * @property string $title
 * @property string $short_description
 * @property string $description
 * @property string $img
 * @property string $alt
 * @property integer $created_at
 * @property integer $updated_at
 * @property integer $status
 */
class NewsRecord extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'news';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['description', 'img', 'alt'], 'string'],
            [['created_at', 'updated_at'], 'required'],
            [['created_at', 'updated_at', 'status'], 'integer'],
            [['title', 'short_description'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'short_description' => 'Short Description',
            'description' => 'Description',
            'img' => 'Img',
            'alt' => 'Alt',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'status' => 'Status',
        ];
    }
}
