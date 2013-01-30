<?php
/* @var $this ProdutoController */
/* @var $model Produto */

$this->breadcrumbs=array(
	'Produtos'=>array('index'),
	$model->oid,
);

$this->menu=array(
	array('label'=>'List Produto', 'url'=>array('index')),
	array('label'=>'Create Produto', 'url'=>array('create')),
	array('label'=>'Update Produto', 'url'=>array('update', 'id'=>$model->oid)),
	array('label'=>'Delete Produto', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->oid),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Produto', 'url'=>array('admin')),
);
?>

<h1>View Produto #<?php echo $model->oid; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'oid',
		'nome',
		'cor',
		'padrao',
		'espessura',
		'dimensaomax',
		'manufacturas',
		'caixa',
		'tipo',
	),
)); ?>
