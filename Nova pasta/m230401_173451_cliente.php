<?php

use yii\db\Migration;

/**
 * Class m230401_173451_cliente
 */
class m230401_173451_cliente extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('cliente', [
            'id' => $this->primaryKey(),
            'nome' => $this->string(100)->notNull(),
            'cpf' => $this->integer(11)->notNull(),
            'email' => $this->text()->notNull(),
            'data_nasc' => $this->date()->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('cliente');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m230401_173451_cliente cannot be reverted.\n";

        return false;
    }
    */
}
