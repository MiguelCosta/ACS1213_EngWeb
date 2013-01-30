<?php
/* @var $this PromocaoController */
/* @var $model Promocao */
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
		<?php echo $form->label($model,'descricao'); ?>
		<?php echo $form->textField($model,'descricao',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'datainicial'); ?>
		<?php echo $form->textField($model,'datainicial'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'datafinal'); ?>
		<?php echo $form->textField($model,'datafinal'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'produto_oid'); ?>
		<?php echo $form->textField($model,'produto_oid'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->