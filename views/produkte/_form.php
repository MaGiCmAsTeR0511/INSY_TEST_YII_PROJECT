<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Produkte $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="produkte-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ProduktID')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Produktname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Produktkategorie')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Stueckpreis')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'LieferantenID')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
