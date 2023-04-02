<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Veterinario $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="veterinario-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nome')->textInput(['maxlength' => false]) ?>

    <?= $form->field($model, 'cpf')->textInput(['maxlength' => 11])?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'data_nasc')->textInput()?>


    <p> <p>
        
    <div class="form-group">
        <?= Html::submitButton('SALVAR', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
