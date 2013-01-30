<?php
/* @var $this EncomendaController */
/* @var $model Encomenda */

$this->breadcrumbs=array(
	'Encomendas'=>array('index'),
	$model->oid,
);

$this->menu=array(
	array('label'=>'List Encomenda', 'url'=>array('index')),
	array('label'=>'Create Encomenda', 'url'=>array('create')),
	array('label'=>'Update Encomenda', 'url'=>array('update', 'id'=>$model->oid)),
	array('label'=>'Delete Encomenda', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->oid),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Encomenda', 'url'=>array('admin')),
);
?>

<h1>View Encomenda #<?php echo $model->oid; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'oid',
		'serie',
		'numserie',
		'data',
		'anexos',
		'estado',
		'user_oid',
	),
)); ?>
