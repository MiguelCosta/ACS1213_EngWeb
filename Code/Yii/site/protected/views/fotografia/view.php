<?php
/* @var $this FotografiaController */
/* @var $model Fotografia */

$this->breadcrumbs=array(
	'Fotografias'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Ver Fotografias', 'url'=>array('index')),
	array('label'=>'Criar Fotografia', 'url'=>array('create')),
	array('label'=>'Editar Fotografia', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Eliminar Fotografia', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Gerir Fotografias', 'url'=>array('admin')),
);
?>

<h1>Fotografia #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'path',
		'descricao',
		'album_id',
		'produto_id',
	),
)); ?>
