<?php
/* @var $this PromocaoController */
/* @var $model Promocao */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'promocao-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'oid'); ?>
		<?php echo $form->textField($model,'oid'); ?>
		<?php echo $form->error($model,'oid'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nome'); ?>
		<?php echo $form->textField($model,'nome',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'nome'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'descricao'); ?>
		<?php echo $form->textField($model,'descricao',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'descricao'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'datainicial'); ?>
		<?php echo $form->textField($model,'datainicial'); ?>
		<?php echo $form->error($model,'datainicial'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'datafinal'); ?>
		<?php echo $form->textField($model,'datafinal'); ?>
		<?php echo $form->error($model,'datafinal'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'produto_oid'); ?>
		<?php echo $form->textField($model,'produto_oid'); ?>
		<?php echo $form->error($model,'produto_oid'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->