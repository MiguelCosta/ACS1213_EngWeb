<?php
/* @var $this EncomendaLinhaController */
/* @var $data EncomendaLinha */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('oid')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->oid), array('view', 'id'=>$data->oid)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descricao')); ?>:</b>
	<?php echo CHtml::encode($data->descricao); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('encomenda_oid')); ?>:</b>
	<?php echo CHtml::encode($data->encomenda_oid); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('produto_oid')); ?>:</b>
	<?php echo CHtml::encode($data->produto_oid); ?>
	<br />


</div>