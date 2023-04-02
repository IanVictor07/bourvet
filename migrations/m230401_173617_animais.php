<?php

use yii\db\Migration;

/**
 * Class m230401_173617_animais
 */
class m230401_173617_animais extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('animal', [
            'id' => $this->primaryKey(),
            'nome'=> $this->string()->notNull(),
            'data_nasc' => $this ->date() ->notNull(),
            'observação' => $this ->string() ->notNull(),
            'cliente_id' => $this ->integer(),
            'especie_id'=> $this ->integer(),
        ]);

        $this->addForeignKey(
        'cliente_fk_animal',
        'animal',
        'cliente_id',
        'cliente',
        'id',
        'RESTRICT'
    );
        $this->addForeignKey(
        'especie_fk',
        'animal',
        'especie_id',
        'especie',
        'id',
        'RESTRICT'
    );

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('cliente_fk_animal','animal');
        $this->dropForeignKey('especie_fk','animal');

        $this->dropTable('animal');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m230401_173617_animais cannot be reverted.\n";

        return false;
    }
    */
}
