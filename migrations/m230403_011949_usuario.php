<?php

use yii\db\Migration;

/**
 * Class m230403_011949_usuario
 */
class m230403_011949_usuario extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('usuario', [
            'id' => $this->primaryKey(),
            'login' => $this->string()->unique(),
            'senha'=> $this->string(),
            'nome'=> $this->string(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('usuario');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m230403_011949_usuario cannot be reverted.\n";

        return false;
    }
    */
}
