<?php
/* @var $this EncomendaController */
/* @var $model Encomenda */

$this->breadcrumbs=array(
	'Encomendas'=>array('index'),
	'Criar',
);

$this->menu=array(
	array('label'=>'Ver Encomendas', 'url'=>array('index')),
	array('label'=>'Gerir Encomendas', 'url'=>array('admin')),
);
?>

<h1>Criar Encomenda</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>