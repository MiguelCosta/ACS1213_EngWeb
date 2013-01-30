<?php
/* @var $this FotografiaController */
/* @var $model Fotografia */

$this->breadcrumbs=array(
	'Fotografias'=>array('index'),
	$model->oid,
);

$this->menu=array(
	array('label'=>'List Fotografia', 'url'=>array('index')),
	array('label'=>'Create Fotografia', 'url'=>array('create')),
	array('label'=>'Update Fotografia', 'url'=>array('update', 'id'=>$model->oid)),
	array('label'=>'Delete Fotografia', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->oid),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Fotografia', 'url'=>array('admin')),
);
?>

<h1>View Fotografia #<?php echo $model->oid; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'oid',
		'album_oid',
	),
)); ?>
