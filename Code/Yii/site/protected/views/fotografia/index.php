<?php
/* @var $this FotografiaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Fotografias',
);

$this->menu=array(
	array('label'=>'Criar Fotografia', 'url'=>array('create')),
	array('label'=>'Gerir Fotografias', 'url'=>array('admin')),
);
?>

<h1>Fotografias</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>