<?php
/* @var $this PromocaoController */
/* @var $model Promocao */

$this->breadcrumbs=array(
	'Promocoes'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Ver Promocoes', 'url'=>array('index')),
	array('label'=>'Criar Promocao', 'url'=>array('create')),
	array('label'=>'Editar Promocao', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Eliminar Promocao', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Gerir Promocoes', 'url'=>array('admin')),
);
?>

<h1>Promocao #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nome',
		'descricao',
		'datainicial',
		'datafinal',
		'produto_id',
	),
)); ?>
