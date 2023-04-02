<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Veterinario $model */

$this->title = 'CADASTRAR';
$this->params['breadcrumbs'][] = ['label' => 'Veterinarios', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="veterinario-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
