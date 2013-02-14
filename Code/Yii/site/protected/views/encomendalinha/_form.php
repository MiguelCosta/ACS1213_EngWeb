<?php
/* @var $this EncomendalinhaController */
/* @var $model Encomendalinha */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'encomendalinha-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'descricao'); ?>
		<?php echo $form->textField($model,'descricao',array('size'=>60,'maxlength'=>512)); ?>
		<?php echo $form->error($model,'descricao'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'encomenda_id'); ?>
		<?php echo $form->textField($model,'encomenda_id'); ?>
		<?php echo $form->error($model,'encomenda_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'produto_id'); ?>
		<?php echo $form->textField($model,'produto_id'); ?>
		<?php echo $form->error($model,'produto_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->