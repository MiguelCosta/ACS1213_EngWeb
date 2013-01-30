<?php
/* @var $this ClienteController */
/* @var $model Cliente */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'cliente-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'user_oid'); ?>
		<?php echo $form->textField($model,'user_oid'); ?>
		<?php echo $form->error($model,'user_oid'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nomecompleto'); ?>
		<?php echo $form->textField($model,'nomecompleto',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'nomecompleto'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'telefone'); ?>
		<?php echo $form->textField($model,'telefone',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'telefone'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'datanascimento'); ?>
		<?php echo $form->textField($model,'datanascimento'); ?>
		<?php echo $form->error($model,'datanascimento'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'particular'); ?>
		<?php echo $form->textField($model,'particular'); ?>
		<?php echo $form->error($model,'particular'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'empresa'); ?>
		<?php echo $form->textField($model,'empresa',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'empresa'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'contacto'); ?>
		<?php echo $form->textField($model,'contacto',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'contacto'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->