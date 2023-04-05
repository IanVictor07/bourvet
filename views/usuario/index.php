<?php

use app\models\Usuario;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\UsuarioSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'ADMINISTRADOR';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="usuario-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <h5><strong>AO CADASTRAR UM USUÁRIO, ELE TERÁ PERMISSÃO PARA ALTERAR OS DADOS</strong></h5>
    <p>
        <?= Html::a('Cadastrar usuário', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
           // ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'login',
            'senha',
            'nome',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Usuario $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
