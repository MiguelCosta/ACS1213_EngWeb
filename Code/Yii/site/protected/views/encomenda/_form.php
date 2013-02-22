<?php
/* @var $this EncomendaController */
/* @var $model Encomenda */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'encomenda-form',
	'enableAjaxValidation'=>false,
)); ?>

<p class="note">Campos com <span class="required">*</span> sao obrigatorios.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'serie'); ?>
		<?php echo $form->textField($model,'serie',array('readonly'=>true)); ?>
		<?php echo $form->error($model,'serie'); ?>
	</div>
	
	<?php 
	if($model->numero == null || $model->numero == 0  ){
		// vai buscar o numero max’mo existente na tabela de orcamentos
		$enc = Yii::app()->db->createCommand()->select('numero')->from('encomenda')->order('numero DESC')->queryRow();
				$model->numero = $enc['numero']+1;
	}
	?>
	

	<div class="row">
		<?php echo $form->labelEx($model,'numero'); ?>
		<?php echo $form->textField($model,'numero', array('readonly'=>true)); ?>
		<?php echo $form->error($model,'numero'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'data'); ?>
		<?php echo $form->dateField($model, 'data'); ?>
		<?php echo $form->error($model,'data'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'anexos'); ?>
		<?php echo $form->hiddenField($model,'anexos',array('size'=>60,'maxlength'=>1024)); ?>
		<?php //echo $form->error($model,'anexos'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'estado'); ?>
		<?php echo $form->textField($model,'estado',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'estado'); ?>
	</div>

	<?php $model->users_id = Yii::app()->user->id;?>
	
	<div class="row">
		<?php //echo $form->labelEx($model,'users_id'); ?>
		<?php echo $form->hiddenField($model,'users_id', array('type'=>"hidden")); ?>
		<?php //echo $form->error($model,'users_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Criar' : 'Guardar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->