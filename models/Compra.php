<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "compra".
 *
 * @property int $id
 * @property string $data_compra
 * @property string $data_pag
 * @property string $forma_pag
 * @property int|null $cliente_id
 *
 * @property Cliente $cliente
 * @property ItensServico[] $itensServicos
 */
class Compra extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'compra';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['data_compra', 'data_pag', 'forma_pag'], 'required'],
            [['data_compra', 'data_pag'], 'safe'],
            [['cliente_id'], 'integer'],
            [['forma_pag'], 'string', 'max' => 255],
            [['cliente_id'], 'exist', 'skipOnError' => true, 'targetClass' => Cliente::class, 'targetAttribute' => ['cliente_id' => 'id']],
            [['servico_id'], 'exist', 'skipOnError' => true, 'targetClass' => Servico::class, 'targetAttribute' => ['servico_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',//Altera a label do campo ID (O que aparece para o usuário, não altera o BD)
            // O mesmo se aplica para os itens abaixo
            'data_compra' => 'DATA DA COMPRA',
            'data_pag' => 'DATA DO PAGAMENTO',
            'forma_pag' => 'FORMA DE PAGAMENTO',
            'cliente_id' => 'CLIENTE',
            'servico_id' => 'SERVIÇO'
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
     * Gets query for [[ItensServicos]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getServicos()
    {
        return $this->hasMany(ItensServico::class, ['servico_id' => 'id']);
    }
}
