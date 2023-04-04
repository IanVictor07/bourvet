<?php
 
use yii\helpers\Html;
use yii\grid\GridView; 


$this->title = 'QUANTIDADE DE ANIMAIS POR CLIENTE';
$this->params['breadcrumbs'][] = $this->title;
?>
 
<div class="relatorios-index">
 
   <h1><?= Html::encode($this->title) ?></h1>
 
   <?= GridView::widget([
        'dataProvider' => $resultado,
    ]); ?>
</div>
