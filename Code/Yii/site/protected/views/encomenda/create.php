<?php
/* @var $this EncomendaController */
/* @var $model Encomenda */

$this->breadcrumbs=array(
	'Encomendas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Encomenda', 'url'=>array('index')),
	array('label'=>'Manage Encomenda', 'url'=>array('admin')),
);
?>

<h1>Create Encomenda</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>