<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Veterinario $model */

$this->title = 'Atualizar Veterinário: ' . $model->nome;
$this->params['breadcrumbs'][] = ['label' => 'Veterinarios', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="veterinario-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
