<?php
/* @var $this EncomendaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Encomendas',
);

$this->menu=array(
	array('label'=>'Criar Encomenda', 'url'=>array('create')),
	array('label'=>'Gerir Encomendas', 'url'=>array('admin')),
);
?>

<h1>Encomendas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
