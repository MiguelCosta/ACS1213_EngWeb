<?php
/* @var $this OrcamentoController */
/* @var $model Orcamento */
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
		<?php echo $form->label($model,'serie'); ?>
		<?php echo $form->textField($model,'serie'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'numserie'); ?>
		<?php echo $form->textField($model,'numserie'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'data'); ?>
		<?php echo $form->textField($model,'data'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'anexos'); ?>
		<?php echo $form->textField($model,'anexos',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'estado'); ?>
		<?php echo $form->textField($model,'estado',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'valortotal'); ?>
		<?php echo $form->textField($model,'valortotal'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'user_oid'); ?>
		<?php echo $form->textField($model,'user_oid'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->