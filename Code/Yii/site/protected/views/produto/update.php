<?php
/* @var $this ProdutoController */
/* @var $model Produto */

$this->breadcrumbs=array(
	'Produtos'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Editar',
);

$this->menu=array(
	array('label'=>'Ver Produtos', 'url'=>array('index')),
	array('label'=>'Criar Produto', 'url'=>array('create')),
	array('label'=>'Ver Produto', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Gerir Produtos', 'url'=>array('admin')),
);
?>

<h1>Editar Produto <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>