<?php


use yii\helpers\Html;


$this->title = 'Relatórios';
$this->params['breadcrumbs'][] = $this->title;
?>


<div class="relatorios-index">


   <h1><?= Html::encode($this->title) ?></h1>

   <?= Html::a('QUANTIDADE DE ANIMAIS POR CLIENTE', ['relatorio1'], ['class' => 'btn btn-primary']) ?>
    <?= Html::a('QUANTIDADE DE COMPRAS REALIZADAS PELO CLIENTE', ['relatorio2'], ['class' => 'btn btn-primary']) ?>
    <?= Html::a('QUANTIDADE DE CONSULTAS REALIZADAS PELO CLIENTE', ['relatorio3'], ['class' => 'btn btn-primary']) ?>
    <p> </p>
    <?= Html::a('QUANTIDADE DE CONSULTAS REALIZADAS POR CADA VETERINÁRIO', ['relatorio4'], ['class' => 'btn btn-primary']) ?>
   
</div>
