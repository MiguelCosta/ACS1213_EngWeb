<?php
/* @var $this EncomendaLinhaController */
/* @var $model EncomendaLinha */

$this->breadcrumbs=array(
	'Encomenda Linhas'=>array('index'),
	$model->oid=>array('view','id'=>$model->oid),
	'Update',
);

$this->menu=array(
	array('label'=>'List EncomendaLinha', 'url'=>array('index')),
	array('label'=>'Create EncomendaLinha', 'url'=>array('create')),
	array('label'=>'View EncomendaLinha', 'url'=>array('view', 'id'=>$model->oid)),
	array('label'=>'Manage EncomendaLinha', 'url'=>array('admin')),
);
?>

<h1>Update EncomendaLinha <?php echo $model->oid; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>