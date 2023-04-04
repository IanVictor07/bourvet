<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\ItensServico $model */

$this->title = 'Update Itens Servico: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Itens Servicos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="itens-servico-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
