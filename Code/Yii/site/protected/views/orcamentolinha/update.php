<?php
/* @var $this OrcamentolinhaController */
/* @var $model Orcamentolinha */

$this->breadcrumbs=array(
	'Orcamentolinhas'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Editar',
);

$this->menu=array(
	array('label'=>'Ver Orcamentolinhas', 'url'=>array('index')),
	array('label'=>'Criar Orcamentolinha', 'url'=>array('create')),
	array('label'=>'Ver Orcamentolinha', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Gerir Orcamentolinhas', 'url'=>array('admin')),
);
?>

<h1>Editar Orcamentolinha <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>