<?php
/* @var $this PromocaoController */
/* @var $model Promocao */

$this->breadcrumbs=array(
	'Promocoes'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Editar',
);

$this->menu=array(
	array('label'=>'Ver Promocoes', 'url'=>array('index')),
	array('label'=>'Criar Promocao', 'url'=>array('create')),
	array('label'=>'Ver Promocao', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Gerir Promocoes', 'url'=>array('admin')),
);
?>

<h1>Editar Promocao <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>