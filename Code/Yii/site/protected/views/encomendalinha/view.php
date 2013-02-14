<?php
/* @var $this EncomendalinhaController */
/* @var $model Encomendalinha */

$this->breadcrumbs=array(
	'Encomendalinhas'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Ver Encomendalinhas', 'url'=>array('index')),
	array('label'=>'Criar Encomendalinha', 'url'=>array('create')),
	array('label'=>'Editar Encomendalinha', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Eliminar Encomendalinha', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Gerir Encomendalinhas', 'url'=>array('admin')),
);
?>

<h1>Encomendalinha #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'descricao',
		'encomenda_id',
		'produto_id',
	),
)); ?>
