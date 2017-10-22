<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "actividades".
 *
 * @property integer $id
 * @property integer $id_empresa
 * @property integer $id_cidade
 * @property string $data_inicio
 * @property string $data_fim
 *
 * @property Empresa $idEmpresa
 */
class Actividades extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'actividades';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_empresa', 'id_cidade', 'data_inicio', 'data_fim'], 'required'],
            [['id_empresa', 'id_cidade'], 'integer'],
            [['data_inicio', 'data_fim'], 'safe'],
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
            'id_cidade' => 'Id Cidade',
            'data_inicio' => 'Data Inicio',
            'data_fim' => 'Data Fim',
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
