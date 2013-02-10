<?php
/* @var $this FotografiaController */
/* @var $model Fotografia */

$this->breadcrumbs=array(
	'Fotografias'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Fotografia', 'url'=>array('index')),
	array('label'=>'Create Fotografia', 'url'=>array('create')),
	array('label'=>'View Fotografia', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Fotografia', 'url'=>array('admin')),
);
?>

<h1>Update Fotografia <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>