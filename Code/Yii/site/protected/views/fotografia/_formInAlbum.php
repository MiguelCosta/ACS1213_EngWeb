<?php
/* @var $this FotografiaController */
/* @var $model Fotografia */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'fotografia-form',
	'enableAjaxValidation'=>false,
	'htmlOptions' => array('enctype' => 'multipart/form-data',),
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php //echo $form->labelEx($model,'path'); ?>
		<?php //echo $form->textField($model,'path',array('size'=>60,'maxlength'=>1024)); ?>
		<?php //echo $form->error($model,'path'); ?>
		<?php echo $form->labelEx($model,'path'); ?>
        <?php echo CHtml::activeFileField($model, 'path'); // by this we can upload image ?>  
        <?php echo $form->error($model,'path'); ?>
	</div>
	
	<?php if($model->isNewRecord!='1') ?>
	<div class="row">
    	<?php echo CHtml::image(Yii::app()->request->baseUrl.'/images/fotos/'.$model->path,"image",array("width"=>200)); ?> 
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'descricao'); ?>
		<?php echo $form->textField($model,'descricao',array('size'=>60,'maxlength'=>1024)); ?>
		<?php echo $form->error($model,'descricao'); ?>
	</div>

	<?php $model->album_id = $albumID;?>
	<div class="row">
		<?php // echo $form->labelEx($model,'album_id'); ?>
		<?php echo $form->hiddenField($model,'album_id', array('type'=>"hidden")); ?>
		<?php // echo $form->error($model,'album_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'produto_id'); ?>
		<?php echo $form->dropDownList($model,'produto_id',
				CHtml::listData(Produto::model()->findAll(array('order' => 'nome')), 'id', 'nome'),
				array('empty'=>'Escolha o produto...'));?>
		<?php echo $form->error($model,'produto_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Criar' : 'Guardar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->