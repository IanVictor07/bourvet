<?php

use yii\db\Migration;

/**
 * Class m230402_212213_veterinario
 */
class m230402_212213_veterinario extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('veterinario', [
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
        $this->dropTable('veterinario');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m230402_212213_veterinario cannot be reverted.\n";

        return false;
    }
    */
}
