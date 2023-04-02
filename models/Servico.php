<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "servico".
 *
 * @property int $id
 * @property string $nome
 * @property string $descricao
 * @property float $preco
 *
 * @property ItensServico[] $itensServicos
 */
class Servico extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'servico';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nome', 'descricao', 'preco'], 'required'],
            [['preco'], 'number'],
            [['nome', 'descricao'], 'string', 'max' => 255],
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
            'descricao' => 'DESCRIÇÃO',
            'preco' => 'PREÇO',
        ];
    }

    /**
     * Gets query for [[ItensServicos]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getItensServicos()
    {
        return $this->hasMany(ItensServico::class, ['servico_id' => 'id']);
    }
}
