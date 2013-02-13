<?php
/* @var $this EncomendalinhaController */
/* @var $model Encomendalinha */

$this->breadcrumbs=array(
	'Encomendalinhas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Encomendalinha', 'url'=>array('index')),
	array('label'=>'Manage Encomendalinha', 'url'=>array('admin')),
);
?>

<h1>Create Encomendalinha</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>