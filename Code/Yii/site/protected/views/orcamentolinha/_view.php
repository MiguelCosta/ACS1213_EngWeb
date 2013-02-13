<?php
/* @var $this OrcamentolinhaController */
/* @var $data Orcamentolinha */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descricao')); ?>:</b>
	<?php echo CHtml::encode($data->descricao); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('valor')); ?>:</b>
	<?php echo CHtml::encode($data->valor); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('produto_id')); ?>:</b>
	<?php echo CHtml::encode($data->produto_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('orcamento_id')); ?>:</b>
	<?php echo CHtml::encode($data->orcamento_id); ?>
	<br />


</div>