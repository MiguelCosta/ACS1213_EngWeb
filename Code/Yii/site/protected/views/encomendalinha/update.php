<?php
/* @var $this EncomendalinhaController */
/* @var $model Encomendalinha */

$this->breadcrumbs=array(
	'Encomendalinhas'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Encomendalinha', 'url'=>array('index')),
	array('label'=>'Create Encomendalinha', 'url'=>array('create')),
	array('label'=>'View Encomendalinha', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Encomendalinha', 'url'=>array('admin')),
);
?>

<h1>Update Encomendalinha <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>