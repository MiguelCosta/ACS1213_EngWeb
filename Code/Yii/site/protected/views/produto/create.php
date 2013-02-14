<?php
/* @var $this ProdutoController */
/* @var $model Produto */

$this->breadcrumbs=array(
	'Produtos'=>array('index'),
	'Criar',
);

$this->menu=array(
	array('label'=>'Ver Produtos', 'url'=>array('index')),
	array('label'=>'Gerir Produtos', 'url'=>array('admin')),
);
?>

<h1>Criar Produto</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>