<?php
/* @var $this EncomendaLinhaController */
/* @var $model EncomendaLinha */

$this->breadcrumbs=array(
	'Encomenda Linhas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List EncomendaLinha', 'url'=>array('index')),
	array('label'=>'Manage EncomendaLinha', 'url'=>array('admin')),
);
?>

<h1>Create EncomendaLinha</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>