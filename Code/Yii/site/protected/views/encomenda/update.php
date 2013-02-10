<?php
/* @var $this EncomendaController */
/* @var $model Encomenda */

$this->breadcrumbs=array(
	'Encomendas'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Encomenda', 'url'=>array('index')),
	array('label'=>'Create Encomenda', 'url'=>array('create')),
	array('label'=>'View Encomenda', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Encomenda', 'url'=>array('admin')),
);
?>

<h1>Update Encomenda <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>