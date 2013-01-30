<?php
/* @var $this OrcamentoController */
/* @var $model Orcamento */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'orcamento-form',
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
		<?php echo $form->labelEx($model,'serie'); ?>
		<?php echo $form->textField($model,'serie'); ?>
		<?php echo $form->error($model,'serie'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'numserie'); ?>
		<?php echo $form->textField($model,'numserie'); ?>
		<?php echo $form->error($model,'numserie'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'data'); ?>
		<?php echo $form->textField($model,'data'); ?>
		<?php echo $form->error($model,'data'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'anexos'); ?>
		<?php echo $form->textField($model,'anexos',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'anexos'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'estado'); ?>
		<?php echo $form->textField($model,'estado',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'estado'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'valortotal'); ?>
		<?php echo $form->textField($model,'valortotal'); ?>
		<?php echo $form->error($model,'valortotal'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'user_oid'); ?>
		<?php echo $form->textField($model,'user_oid'); ?>
		<?php echo $form->error($model,'user_oid'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->