<?php
/* @var $this EncomendalinhaController */
/* @var $model Encomendalinha */

$this->breadcrumbs=array(
	'Encomendalinhas'=>array('index'),
	'Criar',
);

$this->menu=array(
	array('label'=>'Ver Encomendalinhas', 'url'=>array('index')),
	array('label'=>'Gerir Encomendalinhas', 'url'=>array('admin')),
);
?>

<h1>Criar Encomendalinha</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>