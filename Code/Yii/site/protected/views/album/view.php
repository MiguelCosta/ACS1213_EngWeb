<?php
/* @var $this AlbumController */
/* @var $model Album */

$this->breadcrumbs=array(
	'Albums'=>array('index'),
	$model->nome,
);

$this->menu=array(
	array('label'=>'Todos os albuns', 'url'=>array('index')),
	array('label'=>'Novo album', 'url'=>array('create')),
	array('label'=>'Atualizar Album', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Eliminar album', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Tem a certeza que pretende eliminar este item?')),
	array('label'=>'Adicionar fotografia', 'url'=>array('/fotografia/CreateInAlbum/AlbumID/'.$model->id)),
	array('label'=>'Gerir', 'url'=>array('admin')),
);
?>

<h1><?php echo $model->nome; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nome',
		'data',
	),
)); ?>
