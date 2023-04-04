<?php

use yii\db\Migration;

/**
 * Class m230404_000111_consulta
 */
class m230404_000111_consulta extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('consulta', [
            'id' => $this->primaryKey(),
            'data'=> $this->date()->notNull(),
            'hora'=> $this->time()->notNull(),
            'valor'=> $this->decimal(10, 2)->notNull(),
            'veterinario_id' => $this->integer(),
            'cliente_id'=> $this->integer(),
            'animal_id'=> $this->integer(),
        ]);

        $this->addForeignKey(
            'veterinario_fk',
            'consulta',
            'veterinario_id',
            'veterinario',
            'id',
            'RESTRICT'
        );
            $this->addForeignKey(
            'cliente_fk_consulta',
            'consulta',
            'cliente_id',
            'cliente',
            'id',
            'RESTRICT'
        );
            $this->addForeignKey(
            'animal_fk',
            'consulta',
            'animal_id',
            'animal',
            'id',
            'RESTRICT'
        );
    }
    public function safeDown()
    {
        $this->dropForeignKey('veterinario_fk','consulta');
        $this->dropForeignKey('cliente_fk_consulta','consulta');
        $this->dropForeignKey('animal_fk','consulta');

        $this->dropTable('consulta');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m230404_000111_consulta cannot be reverted.\n";

        return false;
    }
    */
}
