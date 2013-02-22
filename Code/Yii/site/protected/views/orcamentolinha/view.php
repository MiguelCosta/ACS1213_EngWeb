<?php
/* @var $this OrcamentolinhaController */
/* @var $model Orcamentolinha */

$this->breadcrumbs=array(
	'Orcamento'=>array('orcamento/'.$model->orcamento_id),
	'Gerir'=>array('orcamentolinha/admin?OrcamentoID='.$model->orcamento_id),
	$model->id,
);

$this->menu=array(
	array('label'=>'Editar Linha', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Eliminar Linha', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
);
?>

<h1>Linha <?php echo $model->id; ?> do Orcamento</h1>

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
