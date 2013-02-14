<?php
/* @var $this OrcamentoController */
/* @var $model Orcamento */

$this->breadcrumbs=array(
	'Orcamentos'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Ver Orcamentos', 'url'=>array('index')),
	array('label'=>'Criar Orcamento', 'url'=>array('create')),
	array('label'=>'Editar Orcamento', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Eliminar Orcamento', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Gerir Orcamentos', 'url'=>array('admin')),
);
?>

<h1>Orcamento #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'serie',
		'numero',
		'data',
		'anexos',
		'estado',
		'valortotal',
		'users_id',
	),
)); ?>
