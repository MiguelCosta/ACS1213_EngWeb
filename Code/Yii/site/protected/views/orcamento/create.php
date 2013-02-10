<?php
/* @var $this OrcamentoController */
/* @var $model Orcamento */

$this->breadcrumbs=array(
	'Orcamentos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Orcamento', 'url'=>array('index')),
	array('label'=>'Manage Orcamento', 'url'=>array('admin')),
);
?>

<h1>Create Orcamento</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>