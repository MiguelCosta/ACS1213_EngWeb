<?php
/* @var $this EncomendalinhaController */
/* @var $model Encomendalinha */

$this->breadcrumbs=array(
	'Encomenda'=>array('encomenda/'.$model->encomenda_id),
	'Gerir'=>array('encomendalinha/admin?EncomendaID='.$model->encomenda_id),
	$model->id,
);

$this->menu=array(
	array('label'=>'Editar Linha', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Eliminar Linha', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
);
?>

<h1>Linha <?php echo $model->id; ?> da Encomenda</h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'descricao',
		'encomenda_id',
		'produto_id',
	),
)); ?>
