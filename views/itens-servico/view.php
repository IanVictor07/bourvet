<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\ItensServico $model */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Itens Servicos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="itens-servico-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            ['atributte'=>'servico.nome','label'=> 'SERVIÇO'],
            ['atributte'=>'compra.data_compra','label'=> 'COMPRA'],
            ['atributte'=>'animal.nome','label'=> 'ANIMAL'],
            
        ],
    ]) ?>

</div>
