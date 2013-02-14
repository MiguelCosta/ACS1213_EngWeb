<?php
/* @var $this FotografiaController */
/* @var $model Fotografia */

$this->breadcrumbs=array(
	'Fotografias'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Editar',
);

$this->menu=array(
	array('label'=>'Ver Fotografias', 'url'=>array('index')),
	array('label'=>'Criar Fotografia', 'url'=>array('create')),
	array('label'=>'Ver Fotografia', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Gerir Fotografias', 'url'=>array('admin')),
);
?>

<h1>Editar Fotografia <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>