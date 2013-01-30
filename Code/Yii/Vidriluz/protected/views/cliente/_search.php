<?php
/* @var $this ClienteController */
/* @var $model Cliente */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'user_oid'); ?>
		<?php echo $form->textField($model,'user_oid'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nomecompleto'); ?>
		<?php echo $form->textField($model,'nomecompleto',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'telefone'); ?>
		<?php echo $form->textField($model,'telefone',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'datanascimento'); ?>
		<?php echo $form->textField($model,'datanascimento'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'particular'); ?>
		<?php echo $form->textField($model,'particular'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'empresa'); ?>
		<?php echo $form->textField($model,'empresa',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'contacto'); ?>
		<?php echo $form->textField($model,'contacto',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->