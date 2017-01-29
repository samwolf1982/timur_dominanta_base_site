<?php

namespace common\models;

/**
 * This is the ActiveQuery class for [[Upslider]].
 *
 * @see Upslider
 */
class UpsliderQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return Upslider[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Upslider|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
