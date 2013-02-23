<?php
/* @var $this ProdutoController */
/* @var $model Produto */

$this->breadcrumbs=array(
	'Produtos'=>array('index'),
	$model->nome,
);

if (Yii::app()->user->isAdmin()) {
	$this->menu=array(
		array('label'=>'Ver Produtos', 'url'=>array('index')),
		array('label'=>'Editar Produto', 'url'=>array('update', 'id'=>$model->id)),
		array('label'=>'Eliminar Produto', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
		array('label'=>'Gerir Produtos', 'url'=>array('admin')),
	);
}
?>

<h1>Produto <?php echo $model->nome; ?></h1>

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

<h1>Fotografias</h1>

<?php $this->beginWidget('galleria');

foreach ($model->fotografias as $foto){
	echo '<img src="'.Yii::app()->request->baseUrl.'/images/fotos/'.$foto->path.'" alt="'.$foto->descricao.'" title="Imagem" />';
}

$this->endWidget();
?>


<?php $this->widget('application.extensions.WSocialButton', array('style'=>'box'));?>
