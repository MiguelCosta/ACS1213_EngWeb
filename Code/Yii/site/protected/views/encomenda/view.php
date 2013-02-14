<?php
/* @var $this EncomendaController */
/* @var $model Encomenda */

$this->breadcrumbs=array(
	'Encomendas'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Ver Encomendas', 'url'=>array('index')),
	array('label'=>'Criar Encomenda', 'url'=>array('create')),
	array('label'=>'Editar Encomenda', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Eliminar Encomenda', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Gerir Encomendas', 'url'=>array('admin')),
);
?>

<h1>Encomenda #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'serie',
		'numero',
		'data',
		'anexos',
		'estado',
		'users_id',
	),
)); ?>
