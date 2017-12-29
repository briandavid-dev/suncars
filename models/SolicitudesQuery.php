<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Solicitudes]].
 *
 * @see Solicitudes
 */
class SolicitudesQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return Solicitudes[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Solicitudes|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
