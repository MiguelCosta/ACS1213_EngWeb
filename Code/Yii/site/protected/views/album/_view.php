<?php
/* @var $this AlbumController */
/* @var $data Album */
?>

<div class="view">
	
	<h3><?php echo CHtml::link(CHtml::encode($data->nome), array('view', 'id'=>$data->id)) ; ?></h3>

	<table style="margin-bottom: 0em">
		<tr>
			<td width="70%">
				<b><?php echo CHtml::encode($data->getAttributeLabel('data')); ?>:</b>
				<?php echo CHtml::encode($data->data); ?>
			</td>

			<?php 
				$s = Yii::app()->basePath."/../../../Files/Imagens/".$data->getResources_One_path();
					if(file_exists($s)){
			?>
				<td width="30%" style="text-align: right;">
					<?php echo CHtml::link(CHtml::imageButton($data->getResources_One(), array('width'=>150)),array('/object_Work_Records/view', 'id'=>$data->id_object_Work_Records));?>
				
				</td>
			<?php 
				}
			?>
		</tr>
	</table>
</div>

<!--
	<b><?php // echo CHtml::encode($data->getAttributeLabel('id')); ?></b>
	<?php // echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nome')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->nome), array('view', 'id'=>$data->id)) ; ?>
	<br />
-->