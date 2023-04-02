<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cliente".
 *
 * @property int $id
 * @property string $nome
 * @property int $cpf
 * @property string $email
 * @property string $data_nasc
 *
 * @property Animal[] $animals
 * @property Compra[] $compras
 * @property Consulta[] $consultas
 */
class Cliente extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'cliente';
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
            'id' => 'ID', //Altera a label do campo ID (O que aparece para o usuário, não altera o BD)
            // O mesmo se aplica para os itens abaixo
            'nome' => 'NOME',
            'cpf' => 'CPF',
            'email' => 'EMAIL',
            'data_nasc' => 'DATA DE NASCIMENTO',
        ];
    }

    /**
     * Gets query for [[Animals]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAnimals()
    {
        return $this->hasMany(Animal::class, ['cliente_id' => 'id']);
    }

    /**
     * Gets query for [[Compras]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCompras()
    {
        return $this->hasMany(Compra::class, ['cliente_id' => 'id']);
    }

    /**
     * Gets query for [[Consultas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getConsultas()
    {
        return $this->hasMany(Consulta::class, ['cliente_id' => 'id']);
    }
}
