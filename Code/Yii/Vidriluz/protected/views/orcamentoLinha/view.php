<?php
/* @var $this OrcamentoLinhaController */
/* @var $model OrcamentoLinha */

$this->breadcrumbs=array(
	'Orcamento Linhas'=>array('index'),
	$model->oid,
);

$this->menu=array(
	array('label'=>'List OrcamentoLinha', 'url'=>array('index')),
	array('label'=>'Create OrcamentoLinha', 'url'=>array('create')),
	array('label'=>'Update OrcamentoLinha', 'url'=>array('update', 'id'=>$model->oid)),
	array('label'=>'Delete OrcamentoLinha', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->oid),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage OrcamentoLinha', 'url'=>array('admin')),
);
?>

<h1>View OrcamentoLinha #<?php echo $model->oid; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'oid',
		'descricao',
		'valor',
		'orcamento_oid',
		'produto_oid',
	),
)); ?>
