<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "animal".
 *
 * @property int $id
 * @property string $nome
 * @property string $data_nasc
 * @property string $observação
 * @property int|null $cliente_id
 * @property int|null $especie_id
 *
 * @property Cliente $cliente
 * @property Consulta[] $consultas
 * @property Especie $especie
 * @property ItensServico[] $itensServicos
 */
class Animal extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'animal';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nome', 'data_nasc', 'observação'], 'required'],
            [['data_nasc'], 'safe'],
            [['cliente_id', 'especie_id'], 'integer'],
            [['nome', 'observação'], 'string', 'max' => 255],
            [['cliente_id'], 'exist', 'skipOnError' => true, 'targetClass' => Cliente::class, 'targetAttribute' => ['cliente_id' => 'id']],
            [['especie_id'], 'exist', 'skipOnError' => true, 'targetClass' => Especie::class, 'targetAttribute' => ['especie_id' => 'id']],
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
            'data_nasc' => 'DATA DE NASCIMENTO',
            'observação' => 'OBSERVAÇÃO',
            'cliente_id' => 'CLIENTE',
            'especie_id' => 'ESPECIE',
        ];
    }

    /**
     * Gets query for [[Cliente]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCliente()
    {
        return $this->hasOne(Cliente::class, ['id' => 'cliente_id']);
    }

    /**
     * Gets query for [[Consultas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getConsultas()
    {
        return $this->hasMany(Consulta::class, ['animal_id' => 'id']);
    }

    /**
     * Gets query for [[Especie]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getEspecie()
    {
        return $this->hasOne(Especie::class, ['id' => 'especie_id']);
    }

    /**
     * Gets query for [[ItensServicos]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getItensServicos()
    {
        return $this->hasMany(ItensServico::class, ['animal_id' => 'id']);
    }
}
