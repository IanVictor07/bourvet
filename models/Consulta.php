<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "consulta".
 *
 * @property int $id
 * @property string $data
 * @property string $hora
 * @property float $valor
 * @property int|null $veterinario_id
 * @property int|null $cliente_id
 * @property int|null $animal_id
 *
 * @property Animal $animal
 * @property Cliente $cliente
 * @property Veterinario $veterinario
 */
class Consulta extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'consulta';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['data', 'hora', 'valor'], 'required'],
            [['data', 'hora'], 'safe'],
            [['valor'], 'number'],
            [['veterinario_id', 'cliente_id', 'animal_id'], 'integer'],
            [['animal_id'], 'exist', 'skipOnError' => true, 'targetClass' => Animal::class, 'targetAttribute' => ['animal_id' => 'id']],
            [['cliente_id'], 'exist', 'skipOnError' => true, 'targetClass' => Cliente::class, 'targetAttribute' => ['cliente_id' => 'id']],
            [['veterinario_id'], 'exist', 'skipOnError' => true, 'targetClass' => Veterinario::class, 'targetAttribute' => ['veterinario_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'data' => 'DATA',
            'hora' => 'HORA',
            'valor' => 'VALOR',
            'veterinario_id' => 'VETERINÁRIO',
            'cliente_id' => 'CLIENTE',
            'animal_id' => 'ANIMAL',
            
        ];
    }

    /**
     * Gets query for [[Animal]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAnimal()
    {
        return $this->hasOne(Animal::class, ['id' => 'animal_id']);
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
     * Gets query for [[Veterinario]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getVeterinario()
    {
        return $this->hasOne(Veterinario::class, ['id' => 'veterinario_id']);
    }
}
