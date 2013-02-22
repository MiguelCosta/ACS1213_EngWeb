<?php
/* @var $this OrcamentolinhaController */
/* @var $model Orcamentolinha */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'orcamentolinha-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Campos com <span class="required">*</span> sao obrigatorios.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'descricao'); ?>
		<?php echo $form->textField($model,'descricao',array('size'=>60,'maxlength'=>512)); ?>
		<?php echo $form->error($model,'descricao'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'valor'); ?>
		<?php echo $form->textField($model,'valor',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'valor'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'produto_id'); ?>
		<?php echo $form->dropDownList($model,'produto_id',
				CHtml::listData(Produto::model()->findAll(array('order' => 'nome')), 'id', 'nome'),
				array('empty'=>'Escolha o produto...'));?>
		<?php echo $form->error($model,'produto_id'); ?>
	</div>

	<?php $model->orcamento_id = $orcamentoID;?>
	<div class="row">
		<?php //echo $form->labelEx($model,'orcamento_id'); ?>
		<?php echo $form->hiddenField($model,'orcamento_id', array('type'=>"hidden")); ?>
		<?php //echo $form->error($model,'orcamento_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Criar' : 'Guardar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->