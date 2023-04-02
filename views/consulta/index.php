<?php

use app\models\Consulta;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\ConsultaSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'CADASTRO DE CONSULTA';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="consulta-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Nova consulta', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            //['class' => 'yii\grid\SerialColumn'],

            //'id',
            'data',
            'hora',
            'valor',
            [
                'attribute'=>'veterinario.nome',
                'label'=>'VETERINARIO',
            ],

            [
                'attribute'=>'cliente.nome',
                'label'=>'CLIENTE',
            ],

            [
                'attribute'=>'animal.nome',
                'label'=>'ANIMAL',
            ],
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Consulta $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
