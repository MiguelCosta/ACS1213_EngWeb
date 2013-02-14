<?php
/* @var $this EncomendalinhaController */
/* @var $model Encomendalinha */

$this->breadcrumbs=array(
	'Encomendalinhas'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Editar',
);

$this->menu=array(
	array('label'=>'Ver Encomendalinhas', 'url'=>array('index')),
	array('label'=>'Criar Encomendalinha', 'url'=>array('create')),
	array('label'=>'Ver Encomendalinha', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Gerir Encomendalinhas', 'url'=>array('admin')),
);
?>

<h1>Editar Encomendalinha <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>