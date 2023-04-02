<?php

use yii\db\Migration;

/**
 * Class m230401_182015_especie
 */
class m230401_182015_especie extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('especie', [
            'id' => $this->primaryKey(),
            'nome' => $this->string()->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('especie');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m230401_182015_especie cannot be reverted.\n";

        return false;
    }
    */
}
