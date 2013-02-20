<?php
/* @var $this ProdutoController */
/* @var $model Produto */

$this->breadcrumbs=array(
	'Produtos'=>array('index'),
	$model->id,
);

if (!Yii::app()->user->isGuest) {
	$this->menu=array(
		array('label'=>'Ver Produtos', 'url'=>array('index')),
		array('label'=>'Criar Produto', 'url'=>array('create')),
		array('label'=>'Editar Produto', 'url'=>array('update', 'id'=>$model->id)),
		array('label'=>'Eliminar Produto', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
		array('label'=>'Gerir Produtos', 'url'=>array('admin')),
	);
}
?>

<h1>Produto #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nome',
		'tipo',
		'cor',
		'padrao',
		'espessura',
		'dimensaomax',
		'manufacturas',
		'caixa',
	),
)); ?>
