<?php
/* @var $this ProdutoController */
/* @var $data Produto */
?>

<div class="view">

	<b><?php //echo CHtml::encode($data->getAttributeLabel('id')); ?></b>
	<?php //echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nome')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->nome), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tipo')); ?>:</b>
	<?php echo CHtml::encode($data->tipo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cor')); ?>:</b>
	<?php echo CHtml::encode($data->cor); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('padrao')); ?>:</b>
	<?php echo CHtml::encode($data->padrao); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('espessura')); ?>:</b>
	<?php echo CHtml::encode($data->espessura); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dimensao maxima')); ?>:</b>
	<?php echo CHtml::encode($data->dimensaomax); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('manufacturas')); ?>:</b>
	<?php echo CHtml::encode($data->manufacturas); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('caixa')); ?>:</b>
	<?php echo CHtml::encode($data->caixa); ?>
	<br />

	*/ ?>

</div>