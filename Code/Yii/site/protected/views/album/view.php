<?php
/* @var $this AlbumController */
/* @var $model Album */

$this->breadcrumbs=array(
	'Albuns'=>array('index'),
	$model->nome,
);

$this->menu=array(
	array('label'=>'Todos os Albuns', 'url'=>array('index')),
	array('label'=>'Criar album', 'url'=>array('create')),
	array('label'=>'Editar Album', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Eliminar Album', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Tem a certeza que pretende eliminar este item?')),
	array('label'=>'Adicionar Fotografia', 'url'=>array('/fotografia/CreateInAlbum/AlbumID/'.$model->id)),
	array('label'=>'Gerir Albuns', 'url'=>array('admin')),
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
));
 ?>
<br/>
<h1>Fotografias</h1>

<?php 

?>
