<?php

use yii\db\Migration;

/**
 * Class m230402_202403_cliente
 */
class m230402_202403_cliente extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('cliente', [
            'id' => $this->primaryKey(),
            'nome' => $this->string(100)->notNull(),
            'cpf' => $this->string(11)->notNull()->unique(),
            'email' => $this->string(255)->notNull(),
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
        echo "m230402_202403_cliente cannot be reverted.\n";

        return false;
    }
    */
}
