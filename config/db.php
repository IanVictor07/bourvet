<?php

return [
    'class' => 'yii\db\Connection',
    'dsn' => 'mysql:host=localhost;dbname=bourvet',//conexão com o banco de dados "bourvet"
    'username' => 'root',//usuário padrão do banco de dados
    'password' => '',//senha padrão do banco de dados
    'charset' => 'utf8',

    // Schema cache options (for production environment)
    //'enableSchemaCache' => true,
    //'schemaCacheDuration' => 60,
    //'schemaCache' => 'cache',
];
