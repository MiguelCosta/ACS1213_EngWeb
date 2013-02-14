<?php
/* @var $this OrcamentolinhaController */
/* @var $model Orcamentolinha */

$this->breadcrumbs=array(
	'Orcamentolinhas'=>array('index'),
	'Criar',
);

$this->menu=array(
	array('label'=>'Ver Orcamentolinhas', 'url'=>array('index')),
	array('label'=>'Gerir Orcamentolinhas', 'url'=>array('admin')),
);
?>

<h1>Criar Orcamentolinha</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>