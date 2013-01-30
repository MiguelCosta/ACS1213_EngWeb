<?php
/* @var $this EncomendaLinhaController */
/* @var $model EncomendaLinha */

$this->breadcrumbs=array(
	'Encomenda Linhas'=>array('index'),
	$model->oid,
);

$this->menu=array(
	array('label'=>'List EncomendaLinha', 'url'=>array('index')),
	array('label'=>'Create EncomendaLinha', 'url'=>array('create')),
	array('label'=>'Update EncomendaLinha', 'url'=>array('update', 'id'=>$model->oid)),
	array('label'=>'Delete EncomendaLinha', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->oid),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage EncomendaLinha', 'url'=>array('admin')),
);
?>

<h1>View EncomendaLinha #<?php echo $model->oid; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'oid',
		'descricao',
		'encomenda_oid',
		'produto_oid',
	),
)); ?>
