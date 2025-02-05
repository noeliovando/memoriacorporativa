<?php

namespace app\models;
use yii\helpers\ArrayHelper;

use Yii;

/**
 * This is the model class for table "subcarpeta".
 *
 * @property int $id
 * @property string $nombre
 * @property int $id_carpeta
 *
 * @property Carpeta $carpeta
 * @property Documentos[] $documentos
 */
class Subcarpeta extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'subcarpeta';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nombre', 'id_carpeta'], 'required'],
            [['id_carpeta'], 'integer'],
            [['nombre'], 'string', 'max' => 100],
            [['id_carpeta'], 'exist', 'skipOnError' => true, 'targetClass' => Carpeta::class, 'targetAttribute' => ['id_carpeta' => 'id']],
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
            'id_carpeta' => 'Carpeta',
        ];
    }

    /**
     * Gets query for [[Carpeta]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCarpeta()
    {
        return $this->hasOne(Carpeta::class, ['id' => 'id_carpeta']);
    }

    /**
     * Gets query for [[Documentos]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDocumentos()
    {
        return $this->hasMany(Documentos::class, ['id_subcarpeta' => 'id']);
    }

    public function getCarpetas()
    {
        $datos = Carpeta::find()->asArray()->all();
        return ArrayHelper::map($datos, 'id', 'nombre');
    }
}
