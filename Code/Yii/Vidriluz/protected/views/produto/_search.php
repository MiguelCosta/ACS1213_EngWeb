<?php
/* @var $this ProdutoController */
/* @var $model Produto */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'oid'); ?>
		<?php echo $form->textField($model,'oid'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nome'); ?>
		<?php echo $form->textField($model,'nome',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cor'); ?>
		<?php echo $form->textField($model,'cor',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'padrao'); ?>
		<?php echo $form->textField($model,'padrao',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'espessura'); ?>
		<?php echo $form->textField($model,'espessura'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dimensaomax'); ?>
		<?php echo $form->textField($model,'dimensaomax'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'manufacturas'); ?>
		<?php echo $form->textField($model,'manufacturas',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'caixa'); ?>
		<?php echo $form->textField($model,'caixa',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tipo'); ?>
		<?php echo $form->textField($model,'tipo',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->