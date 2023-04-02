<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Cliente;
use app\models\Veterinario;
use app\models\Animal;


/** @var yii\web\View $this */
/** @var app\models\Consulta $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="consulta-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'data')->textInput() ?>

    <?= $form->field($model, 'hora')->textInput() ?>

    <?= $form->field($model, 'valor')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'veterinario_id')->
       dropDownList(ArrayHelper::map(veterinario::find()
           ->orderBy('nome')
           ->all(),'id','nome'),
           ['prompt' => 'Selecione um veterinário'] )
    ?>
    
    <?= $form->field($model, 'cliente_id')->
       dropDownList(ArrayHelper::map(cliente::find()
           ->orderBy('nome')
           ->all(),'id','nome'),
           ['prompt' => 'Selecione um cliente'] )
    ?>

    <?= $form->field($model, 'animal_id')->
       dropDownList(ArrayHelper::map(animal::find()
           ->orderBy('nome')
           ->all(),'id','nome'),
           ['prompt' => 'Selecione um animal'] )
    ?>

    <P> <P>
    
    <div class="form-group">
        <?= Html::submitButton('SALVAR', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
