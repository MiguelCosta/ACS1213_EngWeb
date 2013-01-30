<?php
/* @var $this AlbumController */
/* @var $model Album */

$this->breadcrumbs=array(
	'Albums'=>array('index'),
	$model->oid,
);

$this->menu=array(
	array('label'=>'List Album', 'url'=>array('index')),
	array('label'=>'Create Album', 'url'=>array('create')),
	array('label'=>'Update Album', 'url'=>array('update', 'id'=>$model->oid)),
	array('label'=>'Delete Album', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->oid),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Album', 'url'=>array('admin')),
);
?>

<h1>View Album #<?php echo $model->oid; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'oid',
		'nome',
		'data',
	),
)); ?>
