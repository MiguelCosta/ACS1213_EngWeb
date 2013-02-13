<?php
/* @var $this OrcamentoController */
/* @var $model Orcamento */

$this->breadcrumbs=array(
	'Orcamentos'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Orcamento', 'url'=>array('index')),
	array('label'=>'Create Orcamento', 'url'=>array('create')),
	array('label'=>'View Orcamento', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Orcamento', 'url'=>array('admin')),
);
?>

<h1>Update Orcamento <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>