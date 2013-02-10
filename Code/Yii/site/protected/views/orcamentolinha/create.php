<?php
/* @var $this OrcamentolinhaController */
/* @var $model Orcamentolinha */

$this->breadcrumbs=array(
	'Orcamentolinhas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Orcamentolinha', 'url'=>array('index')),
	array('label'=>'Manage Orcamentolinha', 'url'=>array('admin')),
);
?>

<h1>Create Orcamentolinha</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>