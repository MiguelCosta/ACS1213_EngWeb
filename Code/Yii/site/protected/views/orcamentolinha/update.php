<?php
/* @var $this OrcamentolinhaController */
/* @var $model Orcamentolinha */

$this->breadcrumbs=array(
	'Orcamentolinhas'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Orcamentolinha', 'url'=>array('index')),
	array('label'=>'Create Orcamentolinha', 'url'=>array('create')),
	array('label'=>'View Orcamentolinha', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Orcamentolinha', 'url'=>array('admin')),
);
?>

<h1>Update Orcamentolinha <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>