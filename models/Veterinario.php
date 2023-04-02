<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "veterinario".
 *
 * @property int $id
 * @property string $nome
 * @property int $cpf
 * @property string $email
 * @property string $data_nasc
 *
 * @property Consulta[] $consultas
 */
class Veterinario extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'veterinario';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nome', 'cpf', 'email', 'data_nasc'], 'required'],
            [['cpf'], 'integer'],
            [['data_nasc'], 'safe'],
            [['nome'], 'string', 'max' => 100],
            [['email'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nome' => 'NOME',
            'cpf' => 'CPF',
            'email' => 'EMAIL',
            'data_nasc' => 'DATA DE NASCIMENTO',
        ];
    }

    /**
     * Gets query for [[Consultas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getConsultas()
    {
        return $this->hasMany(Consulta::class, ['veterinario_id' => 'id']);
    }
}
