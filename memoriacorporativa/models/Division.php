<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "division".
 *
 * @property int $id
 * @property string $nombre
 *
 * @property Pozo[] $pozos
 */
class Division extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'division';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nombre'], 'required'],
            [['nombre'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nombre' => 'Nombre',
        ];
    }

    /**
     * Gets query for [[Pozos]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPozos()
    {
        return $this->hasMany(Pozo::class, ['id_division' => 'id']);
    }
}
