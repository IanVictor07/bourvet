<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Animal $model */

$this->title = 'CADASTRAR';
$this->params['breadcrumbs'][] = ['label' => 'Animals', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="animal-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
