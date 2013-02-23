<?php
/* @var $this AlbumController */
/* @var $data Album */
?>

<div class="view">
	
	<h3><?php echo CHtml::link(CHtml::encode($data->nome), array('view', 'id'=>$data->id)) ; ?></h3>

			<?php 
				$s = Yii::app()->request->baseUrl.'/images/fotos/'.$data->getCapa();
				echo CHtml::link(CHtml::imageButton($s, array('width'=>150)),array('/Album/view', 'id'=>$data->id));
			?>
				
</div>

<!--
	<b><?php // echo CHtml::encode($data->getAttributeLabel('id')); ?></b>
	<?php // echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nome')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->nome), array('view', 'id'=>$data->id)) ; ?>
	<br />
-->