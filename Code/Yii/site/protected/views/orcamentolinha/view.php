<?php
/* @var $this OrcamentolinhaController */
/* @var $model Orcamentolinha */

$this->breadcrumbs=array(
	'Orcamentolinhas'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Orcamentolinha', 'url'=>array('index')),
	array('label'=>'Create Orcamentolinha', 'url'=>array('create')),
	array('label'=>'Update Orcamentolinha', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Orcamentolinha', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Orcamentolinha', 'url'=>array('admin')),
);
?>

<h1>View Orcamentolinha #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'descricao',
		'valor',
		'produto_id',
		'orcamento_id',
	),
)); ?>
