<?php
use yii\herlpers\Html;
use yii\widgets\ActiveForm;
?>

<?php $form = ActiveForm::begin(); ?>
<? $form->field($model,'name'); ?>
<? $form->field($model,'email'); ?>
<? Html::submitButton('submit',['class'=>'btn btn-success']);

<?php $form = ActiveForm::end(); ?>﻿