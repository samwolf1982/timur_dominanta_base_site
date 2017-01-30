<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "partner".
 *
 * @property integer $id
 * @property string $img
 * @property string $alt
 * @property string $title
 * @property string $description
 * @property integer $status
 * @property string $url_local
 * @property string $url_outer
 */
class PartnerRecord extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'partner';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['img', 'alt', 'title', 'description', 'url_local', 'url_outer'], 'string'],
            [['status'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'img' => 'Img',
            'alt' => 'Alt',
            'title' => 'Title',
            'description' => 'Description',
            'status' => 'Status',
            'url_local' => 'Url Local',
            'url_outer' => 'Url Outer',
        ];
    }
}
