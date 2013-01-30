<?php
/* @var $this OrcamentoController */
/* @var $model Orcamento */

$this->breadcrumbs=array(
	'Orcamentos'=>array('index'),
	$model->oid,
);

$this->menu=array(
	array('label'=>'List Orcamento', 'url'=>array('index')),
	array('label'=>'Create Orcamento', 'url'=>array('create')),
	array('label'=>'Update Orcamento', 'url'=>array('update', 'id'=>$model->oid)),
	array('label'=>'Delete Orcamento', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->oid),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Orcamento', 'url'=>array('admin')),
);
?>

<h1>View Orcamento #<?php echo $model->oid; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'oid',
		'serie',
		'numserie',
		'data',
		'anexos',
		'estado',
		'valortotal',
		'user_oid',
	),
)); ?>
