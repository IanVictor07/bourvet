<?php

use app\models\ItensServico;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use app\models\Servico;
use app\models\Compra;
use app\models\Animal;
use yii\helpers\ArrayHelper;

/** @var yii\web\View $this */
/** @var app\models\ItensServicoSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Itens Servicos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="itens-servico-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Itens Servico', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            ['attribute'=>'servico.nome', 'label'=>'SERVIÇO',
            'filter' => Html::activeDropDownList($searchModel, 'servico_id', ArrayHelper::map(Servico::find()->asArray()->orderby('nome')->all(), 'nome', 'nome'),
                    ['class'=>'form-control','prompt' => 'Busca']),
            ],
            ['attribute'=>'compra.data_compra', 'label'=>'COMPRA',
            'filter' => Html::activeDropDownList($searchModel, 'compra_id', ArrayHelper::map(Compra::find()->asArray()->orderby('data_compra')->all(), 'data_compra', 'data_compra'),
                    ['class'=>'form-control','prompt' => 'Busca']),
            ],
            ['attribute'=>'animal.nome', 'label'=>'ANIMAL',
            'filter' => Html::activeDropDownList($searchModel, 'animal_id', ArrayHelper::map(Animal::find()->asArray()->orderby('nome')->all(), 'nome', 'nome'),
                    ['class'=>'form-control','prompt' => 'Busca']),
            ],
           
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, ItensServico $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
