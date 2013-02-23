<?php
/* @var $this EncomendaController */
/* @var $model Encomenda */

$this->breadcrumbs=array(
	'Encomendas'=>array('index'),
	'Criar',
);

?>

<h1>Criar Encomenda</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>