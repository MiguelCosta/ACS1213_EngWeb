<?php
/* @var $this FotografiaController */
/* @var $model Fotografia */

$this->breadcrumbs=array(
	'Fotografias'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Fotografia', 'url'=>array('index')),
	array('label'=>'Manage Fotografia', 'url'=>array('admin')),
);
?>

<h1>Create Fotografia</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>