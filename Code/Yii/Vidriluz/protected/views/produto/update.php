<?php
/* @var $this ProdutoController */
/* @var $model Produto */

$this->breadcrumbs=array(
	'Produtos'=>array('index'),
	$model->oid=>array('view','id'=>$model->oid),
	'Update',
);

$this->menu=array(
	array('label'=>'List Produto', 'url'=>array('index')),
	array('label'=>'Create Produto', 'url'=>array('create')),
	array('label'=>'View Produto', 'url'=>array('view', 'id'=>$model->oid)),
	array('label'=>'Manage Produto', 'url'=>array('admin')),
);
?>

<h1>Update Produto <?php echo $model->oid; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>