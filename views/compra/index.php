<?php

use app\models\Compra;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\CompraSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'CADASTRAR COMPRA';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="compra-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Nova Compra ', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            //['class' => 'yii\grid\SerialColumn'] Insere a primeira coluna em ordem crescente

            //'id', Não precisa definir, é chave primária, portanto não precisa ser exibido
            'data_compra',
            'data_pag',
            'forma_pag',
            [

                'attribute' => 'cliente.nome',
                'label'=>'CLIENTE',
    
             ],

            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Compra $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
