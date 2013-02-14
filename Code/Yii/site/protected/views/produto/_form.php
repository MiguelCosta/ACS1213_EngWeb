<?php
/* @var $this ProdutoController */
/* @var $model Produto */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'produto-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nome'); ?>
		<?php echo $form->textField($model,'nome',array('size'=>60,'maxlength'=>512)); ?>
		<?php echo $form->error($model,'nome'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tipo'); ?>
		<?php echo $form->textField($model,'tipo',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'tipo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cor'); ?>
		<?php echo $form->textField($model,'cor',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'cor'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'padrao'); ?>
		<?php echo $form->textField($model,'padrao',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'padrao'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'espessura'); ?>
		<?php echo $form->textField($model,'espessura',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'espessura'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dimensao maxima'); ?>
		<?php echo $form->textField($model,'dimensaomax',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'dimensaomax'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'manufacturas'); ?>
		<?php echo $form->textField($model,'manufacturas',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'manufacturas'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'caixa'); ?>
		<?php echo $form->textField($model,'caixa',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'caixa'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->