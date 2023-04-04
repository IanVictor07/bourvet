<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\ItensServico $model */

$this->title = 'CONSULTE OS ITENS';
$this->params['breadcrumbs'][] = ['label' => 'Itens Servicos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="itens-servico-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
