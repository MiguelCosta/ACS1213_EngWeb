<?php
/* @var $this EncomendaLinhaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Encomenda Linhas',
);

$this->menu=array(
	array('label'=>'Create EncomendaLinha', 'url'=>array('create')),
	array('label'=>'Manage EncomendaLinha', 'url'=>array('admin')),
);
?>

<h1>Encomenda Linhas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
