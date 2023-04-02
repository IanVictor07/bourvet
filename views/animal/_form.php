<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Cliente;
use app\models\Especie;

/** @var yii\web\View $this */
/** @var app\models\Animal $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="animal-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nome')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'data_nasc')->textInput() ?>

    <?= $form->field($model, 'observação')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cliente_id')->
       dropDownList(ArrayHelper::map(cliente::find()
           ->orderBy('nome')
           ->all(),'id','nome'),
           ['prompt' => 'Selecione um cliente'] )
    ?>

<?= $form->field($model, 'especie_id')->
       dropDownList(ArrayHelper::map(especie::find()
           ->orderBy('nome')
           ->all(),'id','nome'),
           ['prompt' => 'Selecione a espécie'] )
    ?>

    <div class="form-group">

    <p> <p>
        <?= Html::submitButton('SALVAR', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
