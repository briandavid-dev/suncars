<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Banners]].
 *
 * @see Banners
 */
class BannersQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return Banners[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Banners|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
