<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Cliente;

/** @var yii\web\View $this */
/** @var app\models\Compra $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="compra-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'data_compra')->textInput() ?>

    <?= $form->field($model, 'data_pag')->textInput() ?>

    <?= $form->field($model, 'forma_pag')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cliente_id')->
       dropDownList(ArrayHelper::map(cliente::find()
           ->orderBy('nome')
           ->all(),'id','nome'),
           ['prompt' => 'Selecione um cliente'] )
    ?>



    <P> <P>
        
    <div class="form-group">
        <?= Html::submitButton('SALVAR', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
