<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[CmsBanners]].
 *
 * @see CmsBanners
 */
class CmsBannersQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return CmsBanners[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return CmsBanners|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
