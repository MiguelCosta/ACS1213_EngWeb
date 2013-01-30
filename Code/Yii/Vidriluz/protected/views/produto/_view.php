<?php
/* @var $this ProdutoController */
/* @var $data Produto */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('oid')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->oid), array('view', 'id'=>$data->oid)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nome')); ?>:</b>
	<?php echo CHtml::encode($data->nome); ?>
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

	<b><?php echo CHtml::encode($data->getAttributeLabel('dimensaomax')); ?>:</b>
	<?php echo CHtml::encode($data->dimensaomax); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('manufacturas')); ?>:</b>
	<?php echo CHtml::encode($data->manufacturas); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('caixa')); ?>:</b>
	<?php echo CHtml::encode($data->caixa); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tipo')); ?>:</b>
	<?php echo CHtml::encode($data->tipo); ?>
	<br />

	*/ ?>

</div>