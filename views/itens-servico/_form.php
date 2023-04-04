<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Servico;
use app\models\Compra;
use app\models\Animal;
use yii\helpers\ArrayHelper;

/** @var yii\web\View $this */
/** @var app\models\ItensServico $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="itens-servico-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'servico_id')->
       dropDownList(ArrayHelper::map(Servico::find()->orderBy('nome')->all(),'id','nome'),
           ['prompt' => 'Selecione um serviço'] ) ?>

    <?= $form->field($model, 'compra_id')->
       dropDownList(ArrayHelper::map(Compra::find()->orderBy('data_compra')->all(),'id','data_compra'),
           ['prompt' => 'Selecione uma compra'] ) ?>

    <?= $form->field($model, 'animal_id')->
       dropDownList(ArrayHelper::map(Animal::find()->orderBy('nome')->all(),'id','nome'),
           ['prompt' => 'Selecione um animal'] ) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
