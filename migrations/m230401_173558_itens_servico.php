<?php

use yii\db\Migration;

/**
 * Class m230401_173558_itens_servico
 */
class m230401_173558_itens_servico extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('itens_servico', [
            'preco' => $this->money()->notNull(),
            'servico_id'=>$this->integer(),
            'compra_id'=>$this->integer(),
            'animal_id'=>$this->integer(),
        ]);

        $this->addForeignKey(
        'servico_fk',
        'itens_servico',
        'servico_id',
        'servico',
        'id',
        'RESTRICT'
    );
        $this->addForeignKey(
        'compra_fk',
        'itens_servico',
        'compra_id',
        'compra',
        'id',
        'RESTRICT'
    );
        $this->addForeignKey(
        'animal_fk_itens',
        'itens_servico',
        'animal_id',
        'animal',
        'id',
        'RESTRICT'
    );

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('servico_fk','itens_servico');
        $this->dropForeignKey('compra_fk','itens_servico');
        $this->dropForeignKey('animal_fk_itens','itens_servico');

        $this->dropTable('itens_servico');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m230401_173558_itens_servico cannot be reverted.\n";

        return false;
    }
    */
}
