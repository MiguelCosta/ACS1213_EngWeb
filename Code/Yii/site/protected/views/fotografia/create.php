<?php
/* @var $this FotografiaController */
/* @var $model Fotografia */

$this->breadcrumbs=array(
	'Fotografias'=>array('index'),
	'Criar',
);

$this->menu=array(
	array('label'=>'Ver Fotografias', 'url'=>array('index')),
	array('label'=>'Gerir Fotografias', 'url'=>array('admin')),
);
?>

<h1>Criar Fotografia</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>