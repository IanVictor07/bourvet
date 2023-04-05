<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap5\ActiveForm $form */
/** @var app\models\LoginForm $model */

use yii\bootstrap5\ActiveForm;
use yii\bootstrap5\Html;

$this->title = 'INFORMAÇÕES DE CONTATO';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-login">
    <div style="text-align: center;">
        <h1 style="color: white"><?= Html::encode($this->title) ?></h1>
        <br>
        <h3 style="color: white">Telefone</h3>
        <h4 style="color: white;">(38) 99820-0322</h4>
        <br>
        <h3 style="color: white">EMAIL</h3>
        <h4 style="color: white;">bourvet@gmail.com</h4>
        <br>
        <h3 style="color: white;">REDES SOCIAIS</h3>
        <h4 style="color: white;">Instagram @Bourvet</h4>
        <h4 style="color: white;">Facebook @Bourvet</h4>
        <br>
        <h3 style="color: white;">ENDEREÇO</h3>
        <h4 style="color: white;">Rua Professor Manoel Ambrósio, 762-centro, Januária MG</h4>

    </div>
</div>
<style>
  body {
    background-color: black;
  }
</style>
    

    