<?php
/* @var $this EncomendalinhaController */
/* @var $model Encomendalinha */

$this->breadcrumbs=array(
	'Encomendalinhas'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Encomendalinha', 'url'=>array('index')),
	array('label'=>'Create Encomendalinha', 'url'=>array('create')),
	array('label'=>'Update Encomendalinha', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Encomendalinha', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Encomendalinha', 'url'=>array('admin')),
);
?>

<h1>View Encomendalinha #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'descricao',
		'encomenda_id',
		'produto_id',
	),
)); ?>
