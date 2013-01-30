<?php
/* @var $this FotografiaController */
/* @var $model Fotografia */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'fotografia-form',
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
		<?php echo $form->labelEx($model,'album_oid'); ?>
		<?php echo $form->textField($model,'album_oid'); ?>
		<?php echo $form->error($model,'album_oid'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->