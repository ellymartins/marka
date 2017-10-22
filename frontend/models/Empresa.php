<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "empresa".
 *
 * @property integer $id
 * @property integer $id_utilizador
 * @property integer $estado
 * @property string $logotipo
 *
 * @property Actividades[] $actividades
 * @property Utilizador $idUtilizador
 * @property Parceiros[] $parceiros
 */
class Empresa extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'empresa';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_utilizador'], 'required'],
            [['id_utilizador', 'estado'], 'integer'],
            [['logotipo'], 'string', 'max' => 80],
            [['id_utilizador'], 'exist', 'skipOnError' => true, 'targetClass' => Utilizador::className(), 'targetAttribute' => ['id_utilizador' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_utilizador' => 'Id Utilizador',
            'estado' => 'Estado',
            'logotipo' => 'Logotipo',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getActividades()
    {
        return $this->hasMany(Actividades::className(), ['id_empresa' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdUtilizador()
    {
        return $this->hasOne(Utilizador::className(), ['id' => 'id_utilizador']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getParceiros()
    {
        return $this->hasMany(Parceiros::className(), ['id_empresa' => 'id']);
    }
}
