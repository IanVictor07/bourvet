<?php

use yii\db\Migration;

/**
 * Class m230401_173643_consulta
 */
class m230401_173643_consulta extends Migration
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
            'valor'=> $this->money()->notNull(),
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

    /**
     * {@inheritdoc}
     */
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
        echo "m230401_173643_consulta cannot be reverted.\n";

        return false;
    }
    */
}
