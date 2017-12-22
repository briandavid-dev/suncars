<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[CmsGeneralPages]].
 *
 * @see CmsGeneralPages
 */
class CmsGeneralPagesQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return CmsGeneralPages[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return CmsGeneralPages|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
