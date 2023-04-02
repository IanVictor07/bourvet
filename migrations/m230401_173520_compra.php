<?php

use yii\db\Migration;

/**
 * Class m230401_173520_compra
 */
class m230401_173520_compra extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('compra', [
            'id' => $this->primaryKey(),
            'data_compra' => $this->date()->notNull(),
            'data_pag' => $this->date()->notNull(),
            'forma_pag'=> $this->string()->notNull(),
            'cliente_id'=> $this->integer(),
        ]);

        $this->addForeignKey(
            'cliente_fk',
            'compra',
            'cliente_id',
            'cliente',
            'id',
            'RESTRICT'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        
        $this->dropForeignKey('cliente_fk','compra');

        $this->dropTable('compra');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m230401_173520_compra cannot be reverted.\n";

        return false;
    }
    */
}
