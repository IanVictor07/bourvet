<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\grid\GridView;//Usar essa biblioteca para que as compras de um usuário apareçam agrupadas

/** @var yii\web\View $this */
/** @var app\models\Cliente $model */

$this->title = $model->nome;
$this->params['breadcrumbs'][] = ['label' => 'Clientes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="cliente-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Atualizar', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Deletar', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Tem certeza que deseja excluir este item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            //'id',
            'nome',
            'cpf',
            'email',
            'data_nasc',
        ],

    ]) ?>

<?= GridView::widget([//Essa grid view é responsável pela organização das compras de um usuário 
//O view nada mais é do que aquele olhinho que clicamos e apresenta as informações

'dataProvider' => $dataProvider,
'summary' => '',
'columns' => [
//['class' => 'yii\grid\SerialColumn'],//Essa classe coloca números em série na primeira coluna
'data_compra',
'data_pag',
'forma_pag',
]
]);?>

</div>