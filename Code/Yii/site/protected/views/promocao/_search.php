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
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nome'); ?>
		<?php echo $form->textField($model,'nome',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'descricao'); ?>
		<?php echo $form->textField($model,'descricao',array('size'=>60,'maxlength'=>1024)); ?>
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
		<?php echo $form->label($model,'produto_id'); ?>
		<?php echo $form->textField($model,'produto_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Pesquisar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->