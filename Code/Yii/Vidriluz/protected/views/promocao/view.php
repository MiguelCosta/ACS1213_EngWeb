<?php
/* @var $this PromocaoController */
/* @var $model Promocao */

$this->breadcrumbs=array(
	'Promocaos'=>array('index'),
	$model->oid,
);

$this->menu=array(
	array('label'=>'List Promocao', 'url'=>array('index')),
	array('label'=>'Create Promocao', 'url'=>array('create')),
	array('label'=>'Update Promocao', 'url'=>array('update', 'id'=>$model->oid)),
	array('label'=>'Delete Promocao', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->oid),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Promocao', 'url'=>array('admin')),
);
?>

<h1>View Promocao #<?php echo $model->oid; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'oid',
		'nome',
		'descricao',
		'datainicial',
		'datafinal',
		'produto_oid',
	),
)); ?>
