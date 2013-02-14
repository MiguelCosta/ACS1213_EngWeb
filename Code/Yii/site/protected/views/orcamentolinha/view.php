<?php
/* @var $this OrcamentolinhaController */
/* @var $model Orcamentolinha */

$this->breadcrumbs=array(
	'Orcamentolinhas'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Ver Orcamentolinhas', 'url'=>array('index')),
	array('label'=>'Criar Orcamentolinha', 'url'=>array('create')),
	array('label'=>'Editar Orcamentolinha', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Eliminar Orcamentolinha', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Gerir Orcamentolinhas', 'url'=>array('admin')),
);
?>

<h1>Orcamentolinha #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'descricao',
		'valor',
		'produto_id',
		'orcamento_id',
	),
)); ?>
