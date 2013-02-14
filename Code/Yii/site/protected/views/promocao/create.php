<?php
/* @var $this PromocaoController */
/* @var $model Promocao */

$this->breadcrumbs=array(
	'Promocoes'=>array('index'),
	'Criar',
);

$this->menu=array(
	array('label'=>'Ver Promocoes', 'url'=>array('index')),
	array('label'=>'Gerir Promocoes', 'url'=>array('admin')),
);
?>

<h1>Criar Promocao</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>