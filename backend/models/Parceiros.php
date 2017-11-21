<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "parceiros".
 *
 * @property integer $id
 * @property integer $id_empresa
 * @property integer $estado
 *
 * @property Empresa $idEmpresa
 */
class Parceiros extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'parceiros';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_empresa'], 'required'],
            [['id_empresa', 'estado'], 'integer'],
            [['id_empresa'], 'exist', 'skipOnError' => true, 'targetClass' => Empresa::className(), 'targetAttribute' => ['id_empresa' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_empresa' => 'Id Empresa',
            'estado' => 'Estado',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdEmpresa()
    {
        return $this->hasOne(Empresa::className(), ['id' => 'id_empresa']);
    }
}
