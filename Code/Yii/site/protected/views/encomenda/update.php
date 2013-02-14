<?php
/* @var $this EncomendaController */
/* @var $model Encomenda */

$this->breadcrumbs=array(
	'Encomendas'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Editar',
);

$this->menu=array(
	array('label'=>'Ver Encomendas', 'url'=>array('index')),
	array('label'=>'Criar Encomenda', 'url'=>array('create')),
	array('label'=>'Ver Encomenda', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Gerir Encomendas', 'url'=>array('admin')),
);
?>

<h1>Editar Encomenda <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>