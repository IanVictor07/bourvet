<?php

use yii\db\Migration;

/**
 * Class m230401_173532_servico
 */
class m230401_173532_servico extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('servico', [
            'id' => $this->primaryKey(),
            'nome' => $this->string()->notNull(),
            'descricao' => $this->string()->notNull(),
            'preco' => $this->money()->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this-> dropTable('servico');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m230401_173532_servico cannot be reverted.\n";

        return false;
    }
    */
}
